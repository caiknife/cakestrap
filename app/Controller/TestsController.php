<?php
class TestsController extends AppController {
    public $uses = array();

    //public $layout = 'bootstrap';
    //public $autoLayout = false;

    public function index() {
        $url = 'http://localhost:6081/caketest/css/cake.generic.css';
        // $pattern = "/\.(css|js|jpg|jpeg|png|gif)/i";
        // preg_match($pattern, $url, $m);
        $pattern = '/\/([\w\.]+)/i';
        preg_match_all($pattern, $url, $m);
        // debug($m);

        $http = array(
            'foo' => null,
            'kw' => '',
        );
        // debug(http_build_query($http));

        $content = "This is a text!";
        $this->set("content", $content);
    }

    public function search() {
        $content = "";
        if ($this->request->is('post')) {
            $query = $this->data['Search']['query'];
            if (!empty($query)) {
                $this->redirect(array('query' => $query));
            } else {
                $this->redirect(array('action' => $this->action));
            }
        }
        $content = isset($this->request->named['query']) ? $this->request->named['query'] : null ;
        $this->set("content", $content);
    }

    public function info() {
        
    }
}