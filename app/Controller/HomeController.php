<?php
class HomeController extends AppController {
    public $uses = array(
        'Article',
    );

    protected $_homepageCategory = array();
    protected $_newsCategory = array();

    protected function _frontendBeforeFilter() {
        parent::_frontendBeforeFilter();
    }

    protected function _setHomepageCategory() {
        $this->_newsCategory = array(
            101, 102, 103,
        );

        $this->_homepageCategory = array(
            '2' => array(201, 202, 203, 204,),
            '3' => array(301, 302, 303, 304, 305),
            '4' => array(401,),
            '5' => array(501,),
        );
    }
    public function index() {
        $this->_setHomepageCategory();
        $this->set('allCateogry', $this->_allCategory);

        $articleCategory = array();
        foreach ($this->_homepageCategory as $key => $value) {
            foreach ($value as $categoryId) {
                $articleCategory[$key][] = array(
                    'id' => $categoryId,
                    'data' => $this->Article->setFilterCategoryId($categoryId)->order('id DESC')
                            ->limit(4)->select(),
                );
            }
        }

        $newsCategory = array();
        foreach ($this->_newsCategory as $categoryId) {
            $newsCategory[$categoryId] = $this->Article->setFilterCategoryId($categoryId)->order('id DESC')
                ->limit(4)->select();
        }
        $this->set(compact('articleCategory', 'newsCategory'));


    }

    public function indexbak() {
        $this->layout = 'ajax';
    }

    public function admin_index() {

    }
}