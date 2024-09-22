<?php
if (isset($_GET["Action"]) && $_GET["Action"] == "edit") {

  // ป้องกัน SQL Injection
  $name_game = mysqli_real_escape_string($con, $_POST["name_game"]);
  $info_game = mysqli_real_escape_string($con, $_POST["info_game"]);
  $price_game = mysqli_real_escape_string($con, $_POST["price_game"]);
  $id_type = mysqli_real_escape_string($con, $_POST["id_type"]);
  $id_game = mysqli_real_escape_string($con, $_GET['id_game']);

  // อัปเดตข้อมูล
  $db_yourgamestore = "UPDATE tb_game 
          SET name_game='$name_game', 
              info_game='$info_game', 
              price_game='$price_game', 
              id_type='$id_type' 
          WHERE id_game='$id_game'";
  $dbquery = mysqli_query($con, $db_yourgamestore);

  if ($dbquery) {
?>
    <script language="javascript">
      alert("แก้ไขข้อมูลเรียบร้อย");
      window.location.href = "index.php?link=S_title";
    </script>
<?php
  } else {
    echo "เกิดข้อผิดพลาดในการแก้ไขข้อมูล";
  }
}
?>

<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php?link=S_title">ข้อมูลสินค้า</a>
  </li>
  <li class="breadcrumb-item active">แก้ไขข้อมูลสินค้า</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">

<?php
    $id_game = $_GET['id_game'];
    $sql = "SELECT * FROM `tb_game` WHERE `id_game` = '".$id_game."'";
    $query_product = mysqli_query($con, $sql);
    $result = mysqli_fetch_array($query_product);
?>

    <form class="user" action="index.php?link=edit_game&Action=edit&id_game=<?php echo $result['id_game'];?>" name="product_add" method="post" enctype="multipart/form-data">

      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ชื่อสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="name_game" id="name_game" value="<?php echo $result['name_game']; ?>">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รายละเอียดสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="info_game" id="info_game" value="<?php echo $result['info_game']; ?>">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ราคาสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="price_game" id="price_game" value="<?php echo $result['price_game']; ?>">
        </div>
      </div>
      <div class="col-sm-10">
          <label for="" >รูปภาพ</label><br>
          <input type="file" class="form-control form-control-user" name="img_game" >
      </div>
      <div class="col-sm-10">
        <h6>ประเภทสินค้า</h6>
        <select class="selectpicker" data-live-search="true" title="เลือกสถานะสินค้า" name="id_type" id="id_type" size="1" lang="th">
          <option value="1" <?php if($result['id_type'] == 1) echo 'selected'; ?>>1</option>
          <option value="2" <?php if($result['id_type'] == 2) echo 'selected'; ?>>2</option>
          <option value="3" <?php if($result['id_type'] == 3) echo 'selected'; ?>>3</option>
          <option value="4" <?php if($result['id_type'] == 4) echo 'selected'; ?>>4</option>
        </select>
      </div>
      <br/>
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
        </div>
        <div class="col-sm-10">
          <button class="btn btn-warning" type="submit">
            <i><div> แก้ไขรายการสินค้า </div></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
