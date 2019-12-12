<?php
$customer_list = array(
    "1" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "20/08/1983", "address" => "Hà Nội", "profile" => "images/img1.jpg"),
    "2" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "21/08/1983", "address" => "Bắc Giang", "profile" => "images/img2.jpg"),
    "3" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "22/08/1983", "address" => "Nam Định", "profile" => "images/img3.jpg"),
    "4" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "17/08/1983", "address" => "Hà Tây", "profile" => "images/img4.jpg"),
    "5" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "19/08/1983", "address" => "Hà Nội", "profile" => "images/img5.jpg")
);
function searchByDate($customers, $from_date, $to_date)
{
    $from_date = str_replace('-', '/', $from_date);
    $to_date = str_replace('-', '/', $to_date);
    if (empty($from_date) && empty($to_date)) {
        return $customers;
    }
    $filtered_customers = [];
    foreach ($customers as $customer) {
        if (!empty($from_date) && (strtotime($customer['day_of_birth']) < strtotime($from_date)))
            continue;
        if (!empty($to_date) && (strtotime($customer['day_of_birth']) > strtotime($to_date)))
            continue;
        $filtered_customers[] = $customer;
    }
    return $filtered_customers;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    $from_date = NULL;
    $to_date = NULL;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $from_date = $_POST["from"];
        $to_date = $_POST["to"];
    }
    $filtered_customers = searchByDate($customer_list, $from_date, $to_date);
    ?>
    <form method="post">
        Từ: <input id="from" type="date" name="from" placeholder="dd/mm/yyyy" value="<?php echo isset($from_date) ? $from_date : ''; ?>" />
        Đến: <input id="to" type="date" name="to" placeholder="dd/mm/yyyy" value="<?php echo isset($to_date) ? $to_date : ''; ?>" />
        <input type="submit" id="submit" value="Lọc" />
    </form>

    <table border="5">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php foreach ($filtered_customers as $index => $customer) : ?>
            <tr>
                <td><?php echo $index + 1; ?></td>
                <td><?php echo $customer['name']; ?></td>
                <td><?php echo $customer['day_of_birth']; ?></td>
                <td><?php echo $customer['address']; ?></td>
                <td>
                    <div class="profile"><img src="<?php echo $customer['profile']; ?>" /></div>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>