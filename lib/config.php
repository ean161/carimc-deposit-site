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

    public static function rcon($type) {
        switch ($type) {
            case "lobby":
                return [
                    "ip" => "103.163.24.250",
                    "port" => 25575,
                    "password" => "Carimc123@"
                ];
            case "sb":
                return [
                    "ip" => "118.70.170.5",
                    "port" => 21575,
                    "password" => "Carimc123@"
                ];
            case "earth":
                return [
                    "ip" => "118.70.170.5",
                    "port" => 25574,
                    "password" => "Carimc123@"
                ];
            default:
                return [];
        }
    }

    public static function notification($type) {
        switch ($type) {
            case "login":
                return "Tài khoản này là tên tài khoản Minecraft bạn đã /dangky, /dangnhap ở sảnh máy chủ";
            case "home":
                return "Chào mừng đến với trang chủ máy chủ CariMC";
            case "card":
                return "Vui lòng xác nhận thông tin là đúng trước khi gửi";
            case "banking":
                return "Vui lòng xác nhận thông tin là đúng trước khi gửi";
            default:
                return "";
        }
    }
}