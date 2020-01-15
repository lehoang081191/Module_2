<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $page = isset($_SERVER['page']) ? $_REQUEST['page'] : NULL;
    // $url = $_GET['url'];
    
    switch ($page) {
        case 'listCust':
            $controller = new CustomerController();
            break;
        
        default:
            include 'view/error.php';
            break;
    }
    ?>
</body>
</html>