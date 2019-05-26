<?php

namespace Zeus\Controllers;

use Zeus\Render\Render;

class BaseController {


    public function render($data) {
        return Render::success($data);
    }

    public function error($code, $msg = "") {
        return Render::error(null, $code, $msg);
    }

}