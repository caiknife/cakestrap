<?php
class TestsController extends AppController {
    /**
     * [$uses description]
     * @var array
     */
    public $uses = array();

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index() {
        $url = 'http://localhost:6081/caketest/css/cake.generic.css';
        $pattern = "/\.(css|js|jpg|jpeg|png|gif)/i";
        preg_match($pattern, $url, $m);
        // $pattern = '/\/([\w\.]+)/i';
        // preg_match_all($pattern, $url, $m);
        // debug($m);

        $http = array(
            'foo' => null,
            'kw' => '',
        );
        debug(http_build_query($http));

        $content = "This is a text!";
        $this->set("content", $content);
    }

    /**
     * [search description]
     * @return [type] [description]
     */
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

    /**
     * [info description]
     * @return [type] [description]
     */
    public function info() {

    }

    /**
     * [another_info description]
     * @return [type] [description]
     */
    public function another_info() {
        $this->render('info');
    }

    /**
     * [show description]
     * @return [type] [description]
     */
    public function show() {
        debug($this->components);

        debug($this->passedArgs);

        debug($this->request->params);
    }
}