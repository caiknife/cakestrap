<?php
class BootstrapController extends AppController {
    /**
     * [$uses description]
     * @var array
     */
    public $uses = array();

    /**
     * [$layout description]
     * @var string
     */
    public $layout = 'bootstrap';

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {
        
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show() {

    }

    /*
     * [info description]
     * @return [type] [description]
     */
    public function info() {
        phpinfo();
    }

    public function full() {
        $this->layout = 'bootstrap_test';
    }
}