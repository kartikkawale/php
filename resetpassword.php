<?php
if(isset($_POST["resetbtn"]))
{
    $connect = mysqli_connect("localhost", "root", "", "project4");
    $un = $_POST["username"];
   $mob = $_POST["mobile"];
   $qry = "SELECT * FROM `reset` WHERE username = '$un' AND mobile = '$mob'";


   $result = mysqli_query($connect,$qry);
   $data = mysqli_fetch_assoc($result);
   $id = $data["id"];

   $row = mysqli_num_rows($result);
   if($row>0)
   {
     $pwd =  randomPassword() ;
     echo $pwd;
     $qry = "UPDATE `reset` SET `password`='$pwd' WHERE 'id'= `$id`";
        $result = mysqli_query($connect, $qry);
        echo "password reset";

   }
   else{
    echo "not done";
   }

}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <table cellspacing="10" >
    <tr >
        <td>
            username
        </td>
        <td>
            <input type="text" placeholder="username" name="username"  >
        </td>
    </tr>   
    <tr>
    <td>
        mobile
    </td> 
    <td>
        <input type="tel" placeholder="mobile" name="mobile" >
    </td>
    </tr>
    <tr>
        <td colspan="2" align="center" > 
<button class="bg bg-light" name="resetbtn" >reset button</button>
        </td>
    </tr>
    <tr>
    <td>
        get the password value <?php echo $pwd ?>
    </td>
    </tr>
    </table>       
</form>
</body>
</html>