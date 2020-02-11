<?php
$domOBJ = new DOMDocument();
$domOBJ->load("https://app-htr.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $username = $data->getElementsByTagName("id")->item(0)->nodeValue;
    $email = $data->getElementsByTagName("username")->item(0)->nodeValue;
    $address = $data->getElementsByTagName("password")->item(0)->nodeValue;

    echo "
    <ul>
    <li>Id: <strong>$id</strong></li>
    <li>Username: <strong>$username</strong></li>
    <li>Password: <strong>$password</strong></li>
    </ul>";
} 
