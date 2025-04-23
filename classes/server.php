<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/init.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/lib/rcon/vendor/autoload.php");

use Thedudeguy\Rcon;

class Server {
    private static $isConnected;
    private static $lobby;
    private static $sb;
    private static $earth;

    public function __construct() {
        if (!(self::$isConnected)) {
            self::$isConnected = true;

            self::$lobby = new Rcon(Config::rcon("lobby")["ip"], Config::rcon("lobby")["port"], Config::rcon("lobby")["password"], 5);
            self::$sb = new Rcon(Config::rcon("sb")["ip"], Config::rcon("sb")["port"], Config::rcon("sb")["password"], 5);
            self::$earth = new Rcon(Config::rcon("earth")["ip"], Config::rcon("earth")["port"], Config::rcon("earth")["password"], 5);

            self::connect();
        }
    }

    public static function connect() {
        $lobbyState = self::$lobby->connect();
        $sbState = self::$sb->connect();
        $earthState = self::$earth->connect();

        if (!$lobbyState) {
            return "lobby is not connect";
        } else if (!$sbState) {
            return "sb is not connect";
        } else {
            return "earth is not connect";
        }
    }

    public static function login($username) {
        return explode("\n", self::$lobby->sendCommand("existplayer normal ".$username))[0];
    }
}