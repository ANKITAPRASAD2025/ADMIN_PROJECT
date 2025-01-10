<?php
include('conn.php');
if (isset($_POST['submit'])) {

    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $myfile_upload = $_FILES['myfile'];

    if ($_FILES['myfile']['name']) {

        $myfile = $_FILES['myfile']['name'];
        $filename = pathinfo($myfile,  PATHINFO_FILENAME) . "_" . time() . "_" . rand();
        $file_ext = strtolower(pathinfo($myfile,  PATHINFO_EXTENSION));
        $myfile = $filename . "." . $file_ext;

        $myfileTmp = $_FILES['myfile']['tmp_name'];
        echo "<br>";
        echo $myfileTmp;
        echo "<br>";

        $upload_path = "IMAGES/" . $myfile;
        echo "<br>";
        echo "file upload" . $upload_path;
        echo "<br>";

        $move_file_path = move_uploaded_file($_FILES['myfile']['tmp_name'], $upload_path);
        echo "file path : " . $move_file_path;
        echo "<br>";
        echo "<br>";

        $extensions = array("jpeg", "jpg", "png");
    } else {
        $myfile = '';
    }

    $password_length = strlen($password);

    $password_two = trim($password);
    // $epass = "/^(?=.*\d)(?=.*[A-Za-z])(?=.*[A-Z])(?=.*[a-z])(?=.*[ !#$%&'\(\) * +,-.\/[\\] ^ _`{|}~\"])[0-9A-Za-z !#$%&'\(\) * +,-.\/[\\] ^ _`{|}~\"]{8,50}$/";
    $especial_character = "/[!@#$%]/"; //special character
    $enumber = "/\d/";
    $euppercase = "/[A-Z]/";
    $elowercase = "/[a-z]/";


    $email_two = trim($email);
    $ec = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    // if (preg_match($ec, $email_two)) {
    //     $es = "ok";
    //     echo $es;
    // } else {
    //     $es = "no ok check email id";
    //     echo $es;
    // }
    echo "<br>";

    if (empty($username)) {
        // echo "<h1 style='color:red;'>please enter the username</h1>";
        $Errusername = "<h1 style='color:red;'>please enter the username</h1>";
        echo "<br>";
    } elseif (empty($email)) {
        // echo "<h1 style='color:red;'>please enter the email</h1>";
        $Erremail = "<h1 style='color:red;'>please enter the email</h1>";
        echo "<br>";
    } elseif (!preg_match($ec, $email_two)) {
        $es = "<h1 style='color:red;'>Invalid email </h1>";
        // echo $es;
    } elseif (empty($password)) {
        // echo "<h1 style='color:red;'>please enter the password</h1>";
        $Errpassword = "<h1 style='color:red;'>please enter the password</h1>";
    } elseif ($password_length < 8) {
        // echo "<h1 style='color:red;'>password must be less than 8</h1>";
        $Errpassword_length = "<h1 style='color:red;'>password must be in 8 digit</h1>";
        echo "<br>";
    } elseif (!preg_match($especial_character, $password_two)) {
        $ep = "<h1 style='color:red;'> 1 special charcter </h1>";
    } elseif (!preg_match($euppercase, $password_two)) {
        $ep = "<h1 style='color:red;'> 1 upercase </h1>";
    } elseif (!preg_match($enumber, $password_two)) {
        $ep = "<h1 style='color:red;'> 1 digit </h1>";
    } elseif (!preg_match($elowercase, $password_two)) {
        $ep = "<h1 style='color:red;'> 1 LOWERCASE </h1>";
    } elseif (empty($gender)) {
        // echo "<h1 style='color:red;'>please choose the gender </h1>";
        $Errgender = "<h1 style='color:red;'>please choose the gender </h1>";
        echo "<br>";
    } elseif (empty($myfile)) {
        // echo "<h1 style='color:red;'>please choose the file </h1>";
        $Errfile = "<h1 style='color:red;'>please choose the file </h1>";
        echo "<br>";
    } elseif (in_array($file_ext, $extensions) === false) {
        // echo "<h1 style='color:red;'>file always png and jpg and jpeg format</h1>";
        $Errfile_type = "<h1 style='color:red;'>file always png and jpg and jpeg format</h1>";
        echo "<br>";
    } else {



        echo  $firstname;
        echo "<br>";
        echo  $lastname;
        echo "<br>";
        echo  $gender;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo  $password;
        echo "<br>";
        echo  $confirm_password;
        echo "<br>";
        print_r($myfile_upload);
        echo "<br>";
    }
}
