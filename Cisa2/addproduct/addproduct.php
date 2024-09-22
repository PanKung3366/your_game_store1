<?php
if (isset($_GET["Action"]) && $_GET["Action"] == "Save") {

  $product_name = mysqli_real_escape_string($con, $_POST["name_game"]);
  $product_desc = mysqli_real_escape_string($con, $_POST["info_game"]);
  $product_price = mysqli_real_escape_string($con, $_POST["price_game"]);
  $product_total = mysqli_real_escape_string($con, $_POST["id_type"]);
  $product_img = mysqli_real_escape_string($con, $_POST["img_game"]);

  $db_yourgamestore = "SELECT * FROM tb_game WHERE name_game='$product_name'";
  $query_product = mysqli_query($con, $db_yourgamestore);
  $result = mysqli_fetch_array($query_product);

  if ($result) {
?>
    <div class="alert alert-danger">
      <span class="glyphicon glyphicon-thumbs-down"></span><strong> เตือน!</strong> รายการซ้ำ
    </div>
<?php
  } else {
    $sql = "INSERT INTO tb_game (name_game, info_game, price_game, id_type, img_game) VALUES ('$product_name', '$product_desc', '$product_price', '$product_total', '$product_img')";
    $dbquery = mysqli_query($con, $sql);

    if ($dbquery) {
?>
      <script language="javascript">
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "index.php?link=S_title";
      </script>
<?php
    } else {
      echo "เกิดข้อผิดพลาดในการบันทึกข้อมูล";
    }
  }
}
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php?link=S_title">ข้อมูลสินค้า</a>
  </li>
  <li class="breadcrumb-item active">เพิ่มข้อมูลสินค้า</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <form class="user" action="index.php?link=add_game&Action=Save" name="product_add" method="post" enctype="multipart/form-data">
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ชื่อสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="name_game" id="name_game" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รายละเอียดสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="info_game" id="info_game" required>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ราคาสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="price_game" id="price_game" required>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รูปสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="file" class="form-control form-control-user" name="img_game" id="img_game" required>
        </div>
      </div>

        <div class="col-sm-10">
          <h6>ประเภทสินค้า</h6>
          <select class="selectpicker" data-live-search="true" title="เลือกสถานะสินค้า" name="id_type" id="id_type" size="1" lang="th" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </div>


      <br/>
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">

          </div>
        </div>
        <div class="col-sm-10">
          <button class="btn btn-primary btn-user btn-block" type="submit">
            <i><div> เพิ่มรายการสินค้า </div></i>
          </button>
        </div>


      </div>
      <!-- /Order Details -->
    </form>
  </div>