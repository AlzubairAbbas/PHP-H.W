<?php

$pdo = null;

try {

    $dsn  = "mysql:host=localhost;dbname=banks;charset=utf8";
    $user = "root";
    $pass = "";

    // Connect to the database
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Transfer data
    $fromAccount = 1;
    $toAccount   = 2;
    $amount      = 500;

    // Start transaction
    $pdo->beginTransaction();

    // Check sender balance
    $stmt = $pdo->prepare("SELECT balance FROM accounts WHERE id = ?");
    $stmt->execute([$fromAccount]);
    $fromBalance = $stmt->fetchColumn();

    if ($fromBalance === false) {
        throw new Exception("Source account does not exist");
    }

    if ($fromBalance < $amount) {
        throw new Exception("Insufficient balance");
    }

    // Deduct amount from sender
    $stmt = $pdo->prepare(
        "UPDATE accounts SET balance = balance - ? WHERE id = ?"
    );
    $stmt->execute([$amount, $fromAccount]);

    // Add amount to receiver
    $stmt = $pdo->prepare(
        "UPDATE accounts SET balance = balance + ? WHERE id = ?"
    );
    $stmt->execute([$amount, $toAccount]);

    // Record transaction
    $stmt = $pdo->prepare(
        "INSERT INTO transactions (from_account, to_account, amount, created_at)
         VALUES (?, ?, ?, NOW())"
    );
    $stmt->execute([$fromAccount, $toAccount, $amount]);

    // Commit transaction
    $pdo->commit();

    echo "Amount transferred successfully";

} catch (Exception $e) {

    // Rollback if error occurs
    if ($pdo !== null && $pdo->inTransaction()) {
        $pdo->rollBack();
    }

    // Log error to file
    error_log(
        date("Y-m-d H:i:s") . " | " . $e->getMessage() . PHP_EOL,
        3,
        "transactions.log"
    );

    // Safe message for user
    echo "An error occurred while processing the transaction";
}
?>
