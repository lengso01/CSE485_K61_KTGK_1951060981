<?php
include('config/db.php');
include('header.php');
?>
<main>
    
        <div class="container">
            <div class="row">
                <div class="col-12">
                <?php 
                    if(isset($_SESSION['noti'])) //Checking whether the SEssion is Set of Not
                        {
                            echo $_SESSION['noti']; //Display the SEssion Message if SEt
                            unset($_SESSION['noti']); //Remove Session Message
                        }
                ?>
                <br/>
                    <a href="<?php echo SITEURL; ?>project/add-member.php" class="add">Thêm</a>
                    <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Họ tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Tuổi</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Ngày đăng kí hiến</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //lấy dữ liệu từ CSDL và để ra bảng (phần lặp lại)
                        //bước 1:kết nối tời csdl(mysql)

                        //bước 2 khai báo câu lệnh thực thi và thực hiện truy vấn
                        $sql = "SELECT nv., nv.tennv, nv.chucvu, nv.email, nv.sodidong, dv.tendv FROM db_nhanvien nv, db_donvi dv WHERE nv.madv = dv.madv order by nv.manv";
                        $result = mysqli_query($conn, $sql);

                        //bước 3 xử lý kết quả trả về
                        if (mysqli_num_rows($result) > 0) {
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                            <tr>
                            <th scope="row"><?php echo $i; ?> </th>
                            <td><?php echo $row['manv']; ?> </td>
                            <td><?php echo $row['tennv']; ?> </td>
                            <td><?php echo $row['chucvu']; ?> </td>
                            <td><?php echo $row['email']; ?> </td>
                            <td><?php echo $row['sodidong']; ?> </td>
                            <td><?php echo $row['tendv']; ?> </td>
                            <td><a href="edit-member.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="delete-member.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        }
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>

</main>
<?php include('footer.php');