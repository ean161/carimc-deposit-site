<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/classes/server.php");

$server = new Server();
$response = new Response();

$username = antiInj($_POST["username"]);
$login = $server::login($username);

if ($login == "invalid") {
    $response->status(0);
    $response->message("Tài khoản này không tồn tại");
} else {
    $response->status(1);
    $response->message("Đăng nhập thành công");

    $_SESSION["username"] = $username;
}

$response->data("login", $login);

$response->throw();