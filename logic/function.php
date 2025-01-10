<?php
//function for show the pages

function showpages($page, $page_title = "")
{

    include("pages/$page.php");
}

// //funtion for validation forms error msg
// function error_msg($form_data, $default = "")
// {

//     include('config/conn.php');

//     if (empty($form_data['$fname'])) {
//         // echo "<h1 style='color:red;'>please enter the username</h1>";
//         $Errusername = "<h1 style='color:red;'>please enter the username</h1>";
//         echo "<br>";
//     }
//     if (empty($form_data['$'])) {
//         // echo "<h1 style='color:red;'>please enter the username</h1>";
//         // $Errusername = "<h1 style='color:red;'>please enter the username</h1>";
//         echo "<br>";
//     }
// }
