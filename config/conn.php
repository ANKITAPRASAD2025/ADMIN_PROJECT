<?php
const server = "localhost";
const user = "root";
const password = "";
const db = "admin_project";

$conn = mysqli_connect(server, user, password, db);
if ($conn == true) {
    echo "succesfully";
} else {
    echo "no connection";
}
