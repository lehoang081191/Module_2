<h2>Cập nhật thông tin sản phẩm</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product->id; ?>" />
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input type="text" name="productName" value="<?php echo $product->productName; ?>" class="form-control" />
    </div>
    <div class="form-group">
        <label>Giá sản phẩm</label>
        <textarea name="price" class="form-control"><?php echo $product->price; ?></textarea>
    </div>
    <div class="form-group">
        <label>Mô tả sản phẩm</label>
        <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
    </div>
    <div class="form-group">
        <label>Nhà sản xuất</label>
        <textarea name="producer" class="form-control"><?php echo $product->producer; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary" />
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </div>
</form>