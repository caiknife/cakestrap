<?php
/**
 * Class TestController
 *
 * 这是一个专门用来做测试的 controller , 访问 /test/:action 即可，不用专门创建模板
 * 所有 :action 直接调用 /View/Test/index.ctp 模板
 *
 */
class TestController extends AppController {
    public $uses = array(
        'Test',
    );

    public function beforeFilter() {
        $this->view = 'index';
    }

    public function index() {
        $url = Router::url(array(
            'controller' => 'test',
            'action' => 'index',
            'country' => urlencode('中国'),
        ));
        debug($url);
    }

    public function hello() {
        $this->Session->setFlash("Hello, world!", 'notify' , array('status'=>'success'));
    }
}