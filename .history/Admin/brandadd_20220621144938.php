<?php
  include "header.php";
  include "slider.php";
  include "class/cartegory_class.php";
?>
<?php 
$cartegory = new cartegory;
if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $cartgory_name = $_POST['cartgory_name'];
  $insert_cartegory = $cartegory->insert_cartegory($cartgory_name);
}
?>
<style>
  select{
    height: 30px;
    width: 200px;
  }
</style>
<div class="admin-content-right">
      <div class="admin-content-right-cartegory-add">
          <h1>Thêm Danh Loại Sản Phẩm</h1>
          <form action="" method="POST">
            <select name="" id="">
              <option value="#">Chọn Danh Mục</option>
              <option value="#">NAM</option>
              <option value="#">NỮ</option>
            </select> <br>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
            <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>
