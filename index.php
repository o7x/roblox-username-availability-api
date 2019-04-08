<?php
$username = $_GET["username"];
$check = file_get_contents('http://api.roblox.com/users/get-by-username?username=' . $username);

if ($check == '{"success":false,"errorMessage":"User not found"}') {
    echo'true';
} else {
    echo'false';
}


?>