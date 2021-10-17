<?php 

function uname_isvalid($uname , $connection){
    $query =  "SELECT `uname` from `userInfo`.`users` WHERE `uname` = '$uname'";
    $res = mysqli_query($connection , $query);
    $numrows = mysqli_num_rows($res);
    return $numrows == 0 ; 
}

?>