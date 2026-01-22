<?php
class Product
{
    public $name;
    public $price;
    public $stock;

    public function __construct($name, $price, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    public function getPriceAfterDiscount($discount)
    {
        return $this->price - ($this->price * ($discount / 100));
    }
}

class Customer
{
    public $name;
    public $email;
    public $regDate;

    public function __construct($name, $email, $regDate)
    {
        $this->name = $name;
        $this->email = $email;
        $this->regDate = $regDate;
    }

    public function getMembershipYears()
    {
        $diff = date_diff(date_create($this->regDate), date_create('today'));
        return $diff->y;
    }
}

class Order
{
    public $orderID;
    public $status;
    public $products = [];

    public function __construct($id, $status)
    {
        $this->orderID = $id;
        $this->status = $status;
    }

    public function addProduct(Product $p)
    {
        $this->products[] = $p;
    }

    public function getTotal()
    {
        $total = 0;
        foreach ($this->products as $p) {
            $total += $p->price;
        }
        return $total;
    }
}

// --- إنشاء البيانات ---
$p1 = new Product("آيفون 15", 4000, 15);
$p2 = new Product("ساعة ذكية", 1200, 30);

$customer = new Customer("محمد", "mohammed@example.com", "2021-01-01");

$order = new Order("ORD-99", "قيد التوصيل");
$order->addProduct($p1);
$order->addProduct($p2);
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>نظام المتجر الإلكتروني</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .card {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #2ecc71;
        }

        .card h2 {
            color: #27ae60;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .info-row {
            margin-bottom: 10px;
            font-size: 1.1em;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .full-width {
            grid-column: 1 / -1;
        }

        .highlight {
            color: #e74c3c;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center;">لوحة تحكم المتجر الإلكتروني</h1>

    <div class="container">

        <div class="card">
            <h2>بيانات العميل</h2>
            <div class="info-row"><span class="label">الاسم:</span> <?php echo $customer->name; ?></div>
            <div class="info-row"><span class="label">البريد:</span> <?php echo $customer->email; ?></div>
            <div class="info-row"><span class="label">تاريخ التسجيل:</span> <?php echo $customer->regDate; ?></div>
            <div class="info-row"><span class="label">عمر العضوية:</span> <span class="highlight"><?php echo $customer->getMembershipYears(); ?> سنوات</span></div>
        </div>

        <div class="card">
            <h2>المنتجات (خصم خاص)</h2>
            <div class="info-row"><span class="label">المنتج:</span> <?php echo $p1->name; ?></div>
            <div class="info-row"><span class="label">السعر الأصلي:</span> <?php echo $p1->price; ?> ريال</div>
            <div class="info-row"><span class="label">السعر بعد خصم 20%:</span> <span class="highlight"><?php echo $p1->getPriceAfterDiscount(20); ?> ريال</span></div>
            <div class="info-row"><span class="label">الكمية المتوفرة:</span> <?php echo $p1->stock; ?> قطع</div>
        </div>

        <div class="card full-width">
            <h2>تفاصيل الطلب الحالي</h2>
            <div class="info-row"><span class="label">رقم الطلب:</span> <?php echo $order->orderID; ?></div>
            <div class="info-row"><span class="label">الحالة:</span> <?php echo $order->status; ?></div>
            <div class="info-row"><span class="label">المنتجات في السلة:</span> <?php echo $p1->name . " + " . $p2->name; ?></div>
            <hr>
            <div class="info-row" style="font-size: 1.5em; text-align: left;">
                <span class="label">المبلغ الإجمالي المستحق:</span>
                <span style="color: #27ae60; font-weight: bold;"><?php echo $order->getTotal(); ?> ريال</span>
            </div>
        </div>

    </div>

</body>

</html>