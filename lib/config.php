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
}