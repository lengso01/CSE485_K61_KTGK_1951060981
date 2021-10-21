<?php
include('config/db.php');
include('header.php');
?>
<main>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    /* .them a{
        border: 1px solid red;
        margin: 15px;
        padding: 15px;
        text-decoration: none;
    } */
    .add{
        margin-top: 40px;
    }
</style>
<div class="container">
        <div class="row add" >
            <div class="add">
            <a href="add-ds.php" ><i class="bi bi-person-plus-fill"></i>Thêm</a>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Mã người hiến máu</th>
                        <th>Tên Người hiến máu</th>
                        <th>Giới Tính</th>
                        <th>Năm Sinh</th>
                        <th>Nhóm Máu</th>
                        <th>Ngày Đăng Ký hiến máu</th>
                        <th>Số điện thoại</th>
                        <th>Sửa thông tin</th>
                        <th>Xóa thông tin</th>

                    </tr>
                    <?php
                    include('config/db.php');
                    $sql = "SELECT * FROM BLOOD_DONOR";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<td>'.$row["bd_id"].'</td>';
                            echo '<td>'.$row["bd_name"].'</td>';
                            echo '<td>'.$row["bd_sex"].'</td>';
                            echo '<td>'.$row["bd_age"].'</td>';
                            echo '<td>'.$row["bd_bgroup"].'</td>';
                            echo '<td>'.$row["bd_reg_date"].'</td>';
                            echo '<td>'.$row["bd_phno"].'</td>';
                            // echo '<td><a href="" ><i class="bi bi-emoji-heart-eyes"></i>Sửa</a></td>';
                            // echo '<td><a href="xoa.php?id='.$row["bd_id"].'" ><i class="bi bi-trash-fill"></i>Xóa</a></td>';
                            echo '</tr>';
                        }
                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
    </div>
</main>
<?php 
    include('footer.php');
?>