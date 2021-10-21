<?php
include('config/db.php');
include('header.php');
?>
<main>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputID" class="form-label">ID</label>
    <input type="number" class="form-control" id="inputID" name="id">
  </div>
  <div class="col-md-12">
    <label for="inputName" class="form-label">Họ và tên</label>
    <input type="text" class="form-control" id="inputName" name="name">
  </div>
  <div class="col-12">
    <label for="inputSex" class="form-label">Giới tính</label>
    <input type="text" class="form-control" id="inputSex" name="sex" >
  </div>
  <div class="col-12">
    <label for="inputAge" class="form-label">Tuổi</label>
    <input type="number" class="form-control" id="inputAge" name="age">
  </div>
  <div class="col-md-2">
    <label for="inputMau" class="form-label">Nhóm máu</label>
    <input type="text" class="form-control" id="inputMau" name="mau">
  </div>
  <div class="col-md-4">
    <label for="inputStd" class="form-label">Số điện thoại</label>
    <input type="text" class="form-control" id="inputStd" name="std">
  </div>
  <div class="col-md-4">
    <label for="inputNgay" class="form-label">Ngày hiến máu</label>
    <input type="date" class="form-control" id="inputNgay" name="ngay">
  </div>
  <div class="col-6">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</main>
<?php 
    include('footer.php');
?>
