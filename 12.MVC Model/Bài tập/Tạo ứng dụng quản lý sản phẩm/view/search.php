<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới sản phẩm</a>
<p></p>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form class="example" method="POST">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
<p></p>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Mô tả sản phẩm</th>
            <th>Nhà sản xuất</th>
            <th></th>


        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $value) : ?>
            <tr>
                <td><?php echo $value->id ?></td>
                <td><?php echo $value->productName ?></td>
                <td><?php echo $value->price ?></td>
                <td><?php echo $value->description ?></td>
                <td><?php echo $value->producer ?></td>
                <td>   
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>