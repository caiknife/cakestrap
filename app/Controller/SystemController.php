<?php

App::uses('AppController', 'Controller');

class SystemController extends AppController {
    public $uses = array(
        'Account',
        'Member'
    );

    protected $_noFilterActions = array(
        'signout',
        'check',
    );

    protected function _adminBeforeFilter() {
        $this->set('title_for_layout', '中国质量人才网后台管理系统');
    }

    protected function _frontendBeforeFilter() {
        parent::_frontendBeforeFilter();

        if (in_array($this->request->action, $this->_noFilterActions)) {
            return;
        }

        if ($this->_isMemberSignIn()) {
            $this->redirect('/');
        }
    }

    public function admin_signin() {
        $this->layout = 'admin_signin';
        if ($this->request->isPost()) {
            $origin = isset($this->request->query['origin']) ?
                urldecode($this->request->query['origin']) : null;
            // TODO: sign in action
            $account = $this->request->data['Account'];
            $result = $this->Account->getAccountByUsernameAndPassword($account['username'],
                $account['password']);
            if ($result) {
                $this->Session->write('Admin.signin', $result);
                if ($origin) {
                    $this->redirect('/' . $origin);
                } else {
                    $this->redirect(array('controller' => 'home', 'action' => 'index',
                        'admin' => true));
                }

            }
            $this->Session->setFlash('用户名/密码错误，请重新输入！', 'notify', array('status' => 'error'));
        }
    }

    public function admin_signout() {
        // TODO: sign out action
        $this->Session->delete('Admin.signin');
        $this->redirect(array('controller' => 'home', 'action' => 'index', 'admin' => true));
    }

    public function signup() {
        if ($this->request->isPost()) {
            $member = $this->request->data;
            $member['Member']['type'] = 0;
            if ($this->Member->save($member)) {
                $this->Session->setFlash('用户注册成功，请登录！', 'notify', array('status' => 'success'));
                $this->redirect(array('controller' => 'system', 'action' => 'signin'));
            }
        }
    }

    public function signin() {
        if ($this->request->isPost()) {
            $member = $this->request->data['Member'];
            $result = $this->Member->getMemberByUsernameAndPassword($member['username'], $member['password']);
            if ($result) {
                $this->Session->write('Front.signin', $result);
                $this->redirect('/');
            }
            $this->Session->setFlash('用户名密码不正确！', 'notify', array('status' => 'error'));
        }
    }

    public function signout() {
        $this->Session->delete('Front.signin');
        $this->redirect('/');
    }

    public function check() {
        $this->viewClass = 'Json';
        if ($this->request->isPost()) {
            $data = $this->request->data;
            $result = $this->Member->checkMemberExists($data['field'], $data['value']);
            if ($result) {
                $message = array(
                    'result' => 'error',
                    'message' => "「{$data['value']}」已经存在！",
                );
            } else {
                $message = array(
                    'result' => 'success',
                    'message' => "「{$data['value']}」可以注册！",
                );
            }
            $this->set(compact('message'));
            $this->set('_serialize', 'message');
        }
    }
}