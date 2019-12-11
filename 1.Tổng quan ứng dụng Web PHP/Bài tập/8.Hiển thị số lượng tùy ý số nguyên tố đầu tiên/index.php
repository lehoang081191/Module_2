<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kiểm tra số nguyên tố đầu tiên</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #buttons input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>Số lượng tùy ý số nguyên tố</h1>
        <form method="post">
            <div id="data">
                <label>Biến số nguyên</label>
                <input type="text" name="numbers" placeholder="Enter your integer" /><br />
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Đếm" /><br />
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numbers = $_POST["numbers"];
                function isPrimenumber($num)
                {
                    if ($num < 2) {
                        return false;
                    }
                    if ($num === 2) {
                        return true;
                    }
                    if ($num % 2 === 0) {
                        return false;
                    }
                    for ($i = 2; $i * $i < $num; $i++) {
                        if ($num % $i === 0) {
                            return false;
                        }
                    }
                    return true;
                }
            }
            echo "Số lượng số nguyên tố là : <br/>";
            $count = 0;
            $N = 2;
            while ($count < $numbers) {
                if (isPrimenumber($N)) {
                    echo ($N . " ");
                    $count++;
                }
                $N++;
            }
            ?>
        </form>
    </div>
</body>

</html>