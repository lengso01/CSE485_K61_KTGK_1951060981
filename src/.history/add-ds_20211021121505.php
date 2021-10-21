<?php
include('config/db.php');
include('header.php');
?>
<style>
    
</style>
<main>
<div class="container">
    <div class="row">
            <form class="row g-3" action="process-add-ds.php" method="POST">
            <div class="col-md-1">
                <label for="inputID" class="form-label">ID</label>
                <input type="text" class="form-control" id="inputID" name="id">
            </div>
            <div class="col-md-6">
                <label for="inputName" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
            <div class="col-2">
                <label for="inputSex" class="form-label">Giới tính</label>
                <input type="text" class="form-control" id="inputSex" name="sex" >
            </div>
            <div class="col-2">
                <label for="inputAge" class="form-label">Tuổi</label>
                <input type="text" class="form-control" id="inputAge" name="age">
            </div>
            <div class="col-md-2">
                <label for="inputMau" class="form-label">Nhóm máu</label>
                <input type="text" class="form-control" id="inputMau" name="mau">
            </div>
            <div class="col-md-4">
                <label for="inputSdt" class="form-label">Số điện thoại</label>
                <input type="text" class="form-control" id="inputSdt" name="sdt">
            </div>
            <div class="col-md-4">
                <label for="inputNgay" class="form-label">Ngày hiến máu</label>
                <input type="date" class="form-control" id="inputNgay" name="ngay">
            </div>
            <div class="col-12">
                <button name="them" type="submit" class="btn btn-primary">Thêm</button>
            </div>
            </form>
        </div>
    </div> 
</main>
<?php 
    include('footer.php');
?>
