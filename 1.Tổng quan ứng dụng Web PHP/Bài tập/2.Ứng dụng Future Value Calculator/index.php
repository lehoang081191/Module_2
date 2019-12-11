<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<head>
<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="content">
        <h1>Future Value Calculator</h1>

        <form action="display_discount.php" method="POST">
            <div id="data">
                <label>Investment Amount:</label>
                <input type="text" name="investment" value="0" />(Số tiền)<br />

                <label>Yearly Interest Rate:</label>
                <input type="text" name="rate" value="0" />(%)<br />

                <label>Number of Years:</label>
                <input type="text" name="years" value="0" />(Năm)
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate" /><br />
            </div>
        </form>
    </div>
</body>

</html>