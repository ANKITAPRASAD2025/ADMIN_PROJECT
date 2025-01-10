<?php
require_once 'logic/function.php';
$page_title = "SignUp";
if (isset($_GET['signup'])) {
    showpages('header', $page_title);
    showpages('signup');
} elseif (isset($_GET['login'])) {
    showpages('header', $page_title);
    showpages('login');
}

showpages('footer');
