<?php


namespace Zeus\Controllers;

use Zeus\Controllers\BaseController;
use Grace\Swoft\Route\Bean\Annotation\Controller;
use Grace\Swoft\Route\Bean\Annotation\RequestMapping;

/**
 * @Controller(prefix="/test")
 */
class TestController extends BaseController {

    /**
     * @RequestMapping("index")
     */
    public function index() {
        return $this->render([
            "test" => "hello world",
        ]);
    }
}