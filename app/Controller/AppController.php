<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'DebugKit.Toolbar',
        'Session',
        'Paginator',
        'RequestHandler',
    );

    public $helpers = array(
        'Session',
        'Html',
        'Form',
        'Text',
    );

    /**
     * 不进行过滤的 :action
     * @var array
     */
    protected $_noFilterActions = array();

    /**
     * 前置过滤器，根据 router prefix 调用前台或者后台的前置过滤方法
     */
    public function beforeFilter() {
        if ($this->_isAdminRouter()) {
            $this->_adminBeforeFilter();
        } else {
            $this->_frontendBeforeFilter();
        }
    }

    /**
     * 后台前置过滤方法
     */
    protected function _adminBeforeFilter() {
        if (!$this->_isAdminSignIn()) {
            $origin = $this->request->url;
            $this->redirect(array(
                'controller' => 'system',
                'action' => 'signin',
                'admin' => true,
                '?' => array(
                    'origin' => urlencode($origin),
                )
            ));
        }
        $admin = $this->Session->read('Admin.signin');
        $this->set(compact('admin'));
        $this->layout = 'admin';
        $this->set('title_for_layout', ADMIN_SITE_TITLE);
    }

    /**
     * 前台前置过滤方法
     */
    protected function _frontendBeforeFilter() {
        $this->layout = 'frontend';
        $this->_allCategory = Configure::read('Site.category');

        $member = $this->Session->read('Front.signin');
        $this->set(compact('member'));

        $this->set('title_for_layout', FRONT_SITE_TITLE);
    }

    /**
     * 判断是否后台路由
     *
     * @return bool
     */
    protected function _isAdminRouter() {
        return isset($this->request->params['admin']) &&
            $this->request->params['admin'];
    }

    /**
     * 判断是否后台管理员登录
     *
     * @return bool
     */
    protected function _isAdminSignIn() {
        return $this->Session->check('Admin.signin');
    }

    /**
     * 判断前台是否有用户登录
     *
     * @return bool
     */
    protected function _isMemberSignIn() {
        return $this->Session->check('Front.signin');
    }
}
