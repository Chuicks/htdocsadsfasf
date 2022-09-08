<?php
/*
session_start();


if (!isset($_POST['loginsubmit'])){

    header("Location: ../");
    exit();
}
else {

    $username = $_POST['uid'];
    $password = $_POST['pwd'];

	echo $_POST['username'];
	echo $_POST['password'];
	
}
*/
session_start();

/*
if (!isset($_POST['signupsubmit'])){

    header("Location: ../");
    exit();
}
else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $re_password = $_POST['re_password'];

    echo $_POST['name'];
    echo $_POST['email'];
	echo $_POST['username'];
	echo $_POST['password'];
	echo $_POST['re_password'];
}
*/

if (!isset($_POST['loginsubmit'])){
    header("Location: ../");
    exit();
}
else {
    $uid = $_POST['uid'];
    $password = $_POST['password'];


    echo $_POST['uid'];
	echo $_POST['password'];
}