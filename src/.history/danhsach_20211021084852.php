
<?php include('config/menu.php'); ?>
    <main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Danh sách người hiến máu</h2>
                    <form action="process-ds.php" method="post">
                    <div class="row mb-3">
                        <label for="txHoten" class="col-sm-2 col-form-label">Tên nhân viên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txHoten" name="txHoten">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txChucvu" class="col-sm-2 col-form-label">Chức vụ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txChucvu" name="txChucvu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txMayban" class="col-sm-2 col-form-label">Máy bàn<noscript></noscript></label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txMayban" name="txMayban">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="txEmail" name="txEmail">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txSdt" class="col-sm-2 col-form-label">Số điện thoại<noscript></noscript></label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txSdt" name="txSdt">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="txMadv" class="col-sm-2 col-form-label">Tên đơn vị<noscript></noscript></label>
                        <div class="col-sm-10">
                            <!-- <input type="number" class="form-control" id="txMadv" name="txMadv"> -->
                            <select name="sltMadv" id="sltMadv">
                                <!-- <option value="7">Khoa CNTT</option>
                                <option value="8">Khoa Kinh Tế</option>
                                <option value="9">Khoa Cơ khí</option>
                                <option value="10">Bộ môn HTT</option> -->
                                <?php
                                    require("config/db.php");
                                    $sql= "SELECT * FROM db_donvi";
                                    $result= mysqli_query($conn,$sql);
                                    
                                    if(mysqli_num_rows($result) > 0){
                                        while($row=mysqli_fetch_assoc($result)){
                                            echo '<option value="'.$row['madv'].'"> '.$row['tendv'].' </option>';
                                            // echo '<option value="0">....</option>';         
                                        }
                                    }
                                    
                                    mysqli_close($conn);
                                ?>
                            </select>
                        </div>
                    </div>
   
                        <button type="submit" class="btn btn-primary" name="btnThem">THÊM</button>
                        <input type="hidden" name="manv" value="<?php echo $manv; ?>">
                        <button type="submit" class="btn btn-primary" name="btnSua">SỬA</button>
                        <button type="submit" class="btn btn-primary" name="btnXoa">XÓA</button>
                    
                </form>
                </div>    
            </div>
        </div>
    </main>
 <?php include('footer.php'); ?>
    