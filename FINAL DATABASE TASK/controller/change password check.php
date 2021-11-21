<?php
session_start();
if(isset($_POST["change-password"])) {
    $currentPass = $_POST["current-password"];
    $newPass = $_POST["current-password"];
    $confirmPass = $_POST["confirm-password"];
    $myfile = fopen('../model/customerdata.txt', 'r+');
    if($currentPass == $_SESSION["password"] && $newPass == $confirmPass) {
        while (!feof($myfile)) {
            $data = fgets($myfile);
            $customer = explode('|', $data);
            if($_SESSION["username"] == $customer[2] && $_SESSION["password"] == $customer[3]) {
                //$customer[3] = $newPass;
                echo "Password updated";
            }
        }
    }
    else {
        echo "Invalid";
    }
    $_SESSION["password"] = $newPass;
    fclose($myfile);
}
?>