<?php
if(isset($_POST['btxoa']))
{
    $hoten=$_POST['name'];
    include('connect.php');
    $sql = "DELETE FROM users WHERE username='$hoten'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
header("Location:index.php");
mysqli_close($conn);

} 
?>