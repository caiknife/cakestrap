<?php
App::uses('AppController', 'Controller');

class CodeController extends AppController {
    public $uses = array(
        'Code', 'CodeContent',
    );

    public $paginate = array(
        'Code' => array(
            'limit' => 10,
            'order' => array(
                'Code.id' => 'DESC',
            ),
        ),
    );

    public function beforeFilter() {        
        $langTypes = $this->_getLangeTypes();
        $this->set(compact('langTypes'));
    }

    public function index() {
        $this->Code->recursive = -1;
        $this->Paginator->settings = $this->paginate;
        $codes = $this->Paginator->paginate('Code');
        $this->set(compact('codes'));
    }

    public function add() {
        if ($this->request->isPost()) {
            $this->Code->set($this->request->data);
            if ($this->Code->validates()) {
                $this->Code->saveAssociated();
                $this->Session->setFlash("保存代码成功！", 'notify' , array('status'=>'success'));
                $this->redirect(array('action'=>'index'));
            }
        }
    }

    public function view($id=null) {
        if (!$id) {
            throw new NotFoundException("没有这条记录");
        }
        $code = $this->Code->findById($id);
        $this->set(compact('code'));
    }

    protected function _getLangeTypes() {
        $langTypes = array();
        $langFileDir = WWW_ROOT . DS . 'rainbow' . DS . 'language';
        $langFileDir = new DirectoryIterator($langFileDir);
        foreach ($langFileDir as $file) {
            if ($file->isDir() || $file->isDot()) {
                continue;
            }
            $lang = $file->getFilename();
            // this syntax is not valid on PHP5.3.X
            // $lang = explode('.', $lang)[0];
            $lang = explode('.', $lang);
            $lang = $lang[0];
            $langTypes[$lang] = $lang;
        }
        ksort($langTypes);
        return $langTypes;
    }
}