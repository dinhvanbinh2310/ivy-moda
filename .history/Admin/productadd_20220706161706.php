<?php 
include "header.php";
include "slider.php";

?>
<?php 
  $cartegory = new cartegory;
  if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
  }

  ?>
<div class="admin-content-right">
<div class="admin-content-right-product-add">
          <h1>Thêm Sản Phẩmc</h1>
          <form action="" method="POST" enctype="multipart/form-data">   <!-- enctype="multipart/form-data đưa dữ liệu lên csdl -->
            <label for="">Nhập tên sản phẩm <span style="color:red;">*</span></label>
            <input type="text">
            <label for="">Chọn Danh Mục<span style="color:red;">*</span></label>
            <select name="" id="">
                <option value="#">--Chọn--</option>
            </select>
            <select name="" id="">
            <label for="">Chọn Loại Sản Phẩm<span style="color:red;">*</span></label>
              <option value="#">--Chọn--</option>
          </select>
          <label for="">Giá sản phẩm<span style="color:red;">*</span></label>
          <input type="text">
          <label for="">Giá khuyến mãi<span style="color:red;">*</span></label>
          <input type="text">
          <label for="">Mô tả sản phẩm<span style="color:red;">*</span></label>
          <textarea name="" id="" cols="30" rows="10"></textarea>
          <label for="">Ảnh sản phẩm<span style="color:red;">*</span></label>
          <input type="file">
          <label for="">Ảnh mô tả<span style="color:red;">*</span></label>
          <input multiple type="file">
          <button type="submit">Thêm</button>
          </form>
        </div>
      </div>
  </section>
</body>
</html>