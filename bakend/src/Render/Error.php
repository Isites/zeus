<?php
namespace Zeus\Render;

class Error {
    const SUCCESS = 0;
    const SERVER_ERROR = 1;
    const NORMAL_ERROR = 2;

    public static function msg($code) {

        switch($code) {
            case self::SUCCESS:
                return "success";
            case self::SERVER_ERROR:
                return "server error";
        }
        return "error";
    }
}