<?php
if (isset($_POST["signupsubmit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $pwdRepeat = $_POST["re_password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }
    if (pwdLength($pwd) !== false) {
        header("location: ../signup.php?error=passwordincorrectlength");
        exit();
    }
    createUser($conn, $name, $email, $username, $pwd);
} else {
    header("location: ../signup.php");
    exit();
}
