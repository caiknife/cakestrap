<?php
class ArticleController extends AppController {
    public $uses = array(
        'Article',
    );

    public $helpers = array(
        'Date',
        'Item',
    );

    public $paginate = array(
        'Article' => array(
            'limit' => 10,
            'order' => 'Article.id DESC',
        ),
    );

    protected $_structure = array();

    protected $_categoryId = null;

    protected $_keyword = null;

    protected $_breadCrumb = array();

    protected $_currentCategory = null;

    protected $_noFilterActions = array(
        'admin_delete',
        'admin_status',
    );

    protected function _adminBeforeFilter() {
        if (in_array($this->request->action, $this->_noFilterActions)) {
            return;
        }
        parent::_adminBeforeFilter();
        $this->_structure = Configure::read('Admin.structure');
        $this->set('structure', $this->_structure);

        $this->_categoryId = isset($this->request->named['category']) ?
            $this->request->named['category'] : null;
        $this->set('categoryId', $this->_categoryId);

        $this->_keyword = isset($this->request->query['keyword']) ?
            $this->request->query['keyword'] : null;
        $this->request->data['Article']['keyword'] = $this->_keyword;
    }

    protected function _setBreadCrumb() {
        $arr = explode('0', $this->_categoryId);
        $root = $this->_structure['subs'];
        while ($item = array_shift($arr)) {
            $this->_currentCategory = $root[$item - 1];
            $this->_breadCrumb[] = array(
                'id' => $this->_currentCategory['id'],
                'name' => $this->_currentCategory['name'],
            );
            if (isset($this->_currentCategory['subs'])) {
                $root = $this->_currentCategory['subs'];
            } else {
                break;
            }
        }
        $this->set('breadCrumb', $this->_breadCrumb);
        $this->set('currentCategory', $this->_currentCategory);
    }

    public function admin_index() {
        if (!$this->_categoryId) {
            $this->render('admin_search');
            return;
        }

        $this->_setBreadCrumb();

        if ($this->_keyword) {
            $this->Article->setFilterKeyword($this->_keyword);
        }

        $this->Paginator->settings = $this->paginate;
        try {
            $articles = $this->Paginator->paginate('Article',
                $this->Article->setFilterCategoryId($this->_categoryId)->getConditions());
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'article', 'action' => 'index', 'admin' => true,
                'category' => $this->_categoryId));
        }
        $this->set(compact('articles'));

    }

    public function admin_add() {
        if (!$this->_categoryId) {
            $this->redirect(array('controller' => 'article', 'action' => 'index',
                'admin' => true,
            ));
        }

        $this->_setBreadCrumb();
    }

    public function admin_create() {
        $data = $this->request->data;
        $data['Article'] += array('category_id' => $this->_categoryId);

        $this->Article->save($data);

        $this->redirect(array('controller' => 'article', 'action' => 'index', 'admin' => true,
            'category' => $this->_categoryId,
        ));
    }

    public function admin_edit($id = null) {
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->Article->id = $id;
        $article = $this->Article->read();
        if (!$article) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        if (!$this->_categoryId) {
            $this->_categoryId = $article['Article']['category_id'];
        }
        $this->set('categoryId', $this->_categoryId);
        $this->request->data = $article;

        $this->_setBreadCrumb();
    }

    public function admin_update() {
        $data = $this->request->data;
        $this->Article->save($data);

        $this->redirect(array('controller' => 'article', 'action' => 'index',
            'admin' => true, 'category' => $this->_categoryId,
        ));
    }

    public function admin_delete($id = null) {
        $this->viewClass = 'Json';
        if ($this->Article->delete($id)) {
            $message = array(
                'result' => 'OK',
            );
        } else {
            $message = array(
                'result' => 'ERROR',
            );
        }
        $this->set(compact('message'));
        $this->set('_serialize', 'message');
    }

    public function admin_status($id = null) {
        $this->viewClass = 'Json';
        $status = $this->request->named['status'];
        $pubFlg = array(
            'open' => 1, 'close' => 0,
        );
        $data = array(
            'id' => $id, 'is_public' => $pubFlg[$status],
        );

        if ($this->Article->save($data)) {
            $message = array(
                'result' => 'OK',
            );
        } else {
            $message = array(
                'result' => 'ERROR',
            );
        }
        $this->set(compact('message'));
        $this->set('_serialize', 'message');

    }

    public function admin_search() {
        $this->Paginator->settings = $this->paginate;
        try {
            $articles = $this->Paginator->paginate('Article',
                $this->Article->setFilterKeyword($this->_keyword)->getConditions());
        } catch (NotFoundException $e) {
            $this->redirect(array(
                'controller' => 'article',
                'action' => 'search',
                '?' => array(
                    'keyword' => urlencode($this->_keyword)
                )
            ));
        }
        $this->set(compact('articles'));
        $this->render('admin_search');
    }

    /**
     * frontend goes here
     */

    protected function _frontendBeforeFilter() {
        parent::_frontendBeforeFilter();
        $this->_categoryId = isset($this->request->named['category']) ?
            $this->request->named['category'] : null;
        $this->set('categoryId', $this->_categoryId);
    }

    public function lists() {
        $this->_structure = Configure::read('Admin.structure');
        $this->set('structure', $this->_structure);

        $this->Paginator->settings = $this->paginate;
        try {
            $articles = $this->Paginator->paginate('Article',
                $this->Article->setFilterCategoryId($this->_categoryId)->getConditions());
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'article', 'action' => 'lists',
                'category' => $this->_categoryId));
        }
        $category = $this->_allCategory[$this->_categoryId];
        $this->set('title_for_layout', $category);
        $this->set(compact('articles', 'category'));

    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->Article->id = $id;
        $article = $this->Article->read();
        if (!$article) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $category = $this->_allCategory[$article['Article']['category_id']];
        $this->set('title_for_layout', $article['Article']['title'] . ' - ' . $category);
        $this->set(compact('article', 'category'));
    }
}