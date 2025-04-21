<?php
session_start();
// error_reporting(0);
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/time.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/config.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/database.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/response.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/function.php");

$db = new Database();
$time = new Time();