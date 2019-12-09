<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .thumbnail {
            height: 100px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }
    </style>
</head>

<body>
    <table border="5">
        <caption>
            <h2>Danh sách lớp C1019i1-Full</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Số điện thoại</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
        $customerlist = array(
            "1" => array(
                "ten" => "Nguyễn Công Hữu",
                "sođt" => "0962012137",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL0D1GQ-51f5d001bdb7-512"
            ),
            "2" => array(
                "ten" => "Nguyễn Trọng Trí",
                "sođt" => "0359151791",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCL666-75fba2c082f3-512"
            ),
            "3" => array(
                "ten" => "Võ Thế Văn",
                "sođt" => "No Number",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPYL9C161-164e32a49211-512"
            ),
            "4" => array(
                "ten" => "Đặng Hữu Hiếu",
                "sođt" => "0326277820",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ0S6LZSS-b6986f751737-512"
            ),
            "5" => array(
                "ten" => "Hoàng Anh Tân",
                "sođt" => "0395774714",
                "diachi" => "Huế",
                "anh" => "https://files.slack.com/files-pri/TEZB2M9GC-FREBMRHC7/20191206_150944.jpg"
            ),
            "6" => array(
                "ten" => "Lê Hữu Hoàng",
                "sođt" => "0935710001",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPKSCM5EE-4322805a9abf-512"
            ),
            "7" => array(
                "ten" => "Phan Văn Đông",
                "sođt" => "0378402520",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPY6CEPEY-1b74f31dbeee-512"
            ),
            "8" => array(
                "ten" => "Nguyễn Đỗ Nguyên",
                "sođt" => "0795711020",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UPQNQ0SJV-6763c3e16394-512"
            ),
            "9" => array(
                "ten" => "Nguyễn Chí Tiến",
                "sođt" => "No Number",
                "diachi" => "Huế",
                "anh" => "https://ca.slack-edge.com/TEZB2M9GC-UQ636QTNJ-0ecf3f55c5cb-512"
            ),

        );
        foreach ($customerlist as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['sođt'] . "</td>";
            echo "<td>" . $values['diachi'] . "</td>";
            echo "<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>