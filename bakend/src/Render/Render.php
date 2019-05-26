<?php
namespace Zeus\Render;

class Render {


    public static function success($data, $msg = "") {
        $code = Error::SUCCESS;
        $msg = empty($msg) ? Error::msg($code) : $msg;
        return self::json($data, $code, $msg);
    }

    public static function error($data, $code = Error::NORMAL_ERROR, $msg = "") {
        $msg = empty($msg) ? Error::msg($code) : $msg;
        return self::json($data, $code, $msg);
    }

    public static function json($data, $code, $msg) {
        if(is_string($data) || is_numeric($data)) {
            return self:: raw($data);
        }
        if($data === null) {
            $data = array();
        }
        if(is_array($data) && empty($data)) {
            $data = (object)$data;
        }
        $res = array(
            "code" => $code,
            "msg" => $msg,
            "data" => $data,
        );
        return json_encode($res);
    }

    /**
     * 目前不做任何操作, 直接返回
     */
    public static function raw($data) {
        return $data;
    }

    public static function output($data) {
        ob_start();
        echo $data;
        ob_flush();
        die;
    }

}