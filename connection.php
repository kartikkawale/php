
<?php
$conn = mysqli_connect("localhost", "root" ,"", "collegedb");
if($conn)
{
    echo "connected";
}
else
{
    echo "not connected";
}
?>