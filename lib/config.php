<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");

class Config {
    public static function database() {
        return [
            "host" =>  "localhost",
            "username" =>  "carimcxy_main",
            "password" =>  "carimcxy_main",
            "name" =>  "carimcxy_main"
        ];
    }

    public static function description() {
        return "こんにちは、ここはMinecraftのせーべーのwebsiteです。こんにちは、ここはMinecraftのせーべーのwebsiteです。こんにちは、ここはMinecraftのせーべーのwebsiteです。";
    }

    public static function notification($type) {
        switch ($type) {
            case "card":
                return "Vui lòng xác nhận thông tin là đúng trước khi gửi";
            case "banking":
                return "Vui lòng xác nhận thông tin là đúng trước khi gửi";
            default:
                return "";
        }
    }
}