<?php
$zipcode = trim($_POST['zipcode']);
$zip_length = strlen($zipcode);
if($zip_length !=5){
    print "Please enter a ZIPcode that is 5characters long";
}else{
    print "OK";
}
?>