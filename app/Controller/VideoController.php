<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 14-2-24
 * Time: 下午11:16
 *
 * 所有 :action 对应的模板 在 View/Video/:action.ctp 同名文件
 * 跳转用 $this->redirect(array(
 *  'controller' => :controller,
 *  'action'     => :action,
 *  :id,
 *  'param1'    => :param1,
 *  'param2'    => :param2,
 * ));
 * 后台路由跳转的时候数组里加上参数 'admin' => true
 * 前台路由跳转的时候不用加
 * 还有不会的看手册 http://book.cakephp.org
 */
class VideoContrller extends AppController {
    /**
     * 不使用任何 Model
     * @var array
     */
    public $uses = array();

    /**
     * @url /admin/video 或者 /admin/video/index
     */
    public function admin_index() {

    }

    /**
     * @url /video 或者 /video/index
     */
    public function index() {

    }

    /**
     * @url /video/view/:id
     * @param null $id 数据库 ID
     */
    public function view($id = null) {

    }
}