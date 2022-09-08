<?php
//checks if all the inputs for the signup page have been filled 
function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat)
{
    $result = null;
    if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//checkes if there are any invalid characters in the username inputted into the sign up page
function invalidUid($username)
{
    $result = null;
    if (!preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//checks if the email inputted into the sign up page is a valid email address
function invalidEmail($email)
{
    $result = null;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//checks if the password inputted into the sign up page matches the inputted repeated password in the signup page
function pwdMatch($pwd, $pwdRepeat)
{
    $result = null;
    if ($pwd !== $pwdRepeat) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

//checks if the uid inputted in the sign in page 
function uidExists($conn, $username, $email)
{
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

//checks if the length of the password inputted in signup page is withing 5-25 characters
function pwdLength($pwd)
{
    $result = null; 
    if(strlen($pwd) < 26 && strlen($pwd) > 4){
        $result = false;
    }
    else{
        $result = true;
    }
    return $result;
    
}

//takes all of the inputted user info in the sign in page to 
function createUser($conn, $name, $email, $username, $pwd)
{
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

//checks if the login has complete inputs
function emptyInputLogin($username, $pwd)
{
    if (empty($username) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
    
}

//takes all the inputs in the login fields and logins the user as long as their data is already in the database
function loginUser($conn, $username, $pwd)
{
    $uidExists = uidExists($conn, $username, $username);
    if ($uidExists === false) {
        header("location: ../signup.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../signup.php?error=wrongpassword");
    }
    else if ($checkPwd === true){
        session_start();
        $_SESSION["userid"]=$uidExists["usersId"];
        $_SESSION["useruid"]=$uidExists["usersUid"];
        header("location: ../home.php");
        exit();
    }
}

