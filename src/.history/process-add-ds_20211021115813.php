<?php
if(isset($_POST['add']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $age = $_POST['age'];
    $mau = $_POST['mau'];
    $ngay = $_POST['ngay'];
    $sdt = $_POST['sdt'];
    

    include('config/db.php');
    
    $sql = "INSERT INTO blood_donor (bd_id,bd_name,bd_sex,bd_age,bd_bgroup,bd_reg_date,bd_phno)
    VALUES ('$id','$name','$sex','$age','$mau','$ngay','$sdt')";

    if (mysqli_query($conn, $sql)) 
    {
    echo "New record created successfully";
    }
    else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
//     header("Location:danhsach.php");
       mysqli_close($conn);
// }
// <!-- elseif(isset($_POST['btxoa']))
// {
//     $hoten=$_POST['name'];
//     include('connect.php');
//     $sql = "DELETE FROM users WHERE username='$hoten'";

// if (mysqli_query($conn, $sql)) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . mysqli_error($conn);
// }
// header("Location:index.php");
// mysqli_close($conn);

// } -->
?>