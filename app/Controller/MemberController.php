<?php
class MemberController extends AppController {
    public $uses = array(
        'Member'
    );

    public $paginate = array(
        'Member' => array(
            'limit' => 10,
            'order' => 'Member.id DESC',
        ),
    );

    protected $_typeId = null;

    protected $_noFilterActions = array(
        'admin_delete',
    );

    protected function _adminBeforeFilter() {
        if (in_array($this->request->action, $this->_noFilterActions)) {
            return;
        }
        parent::_adminBeforeFilter();

        $this->_typeId = isset($this->request->named['type']) ?
            $this->request->named['type'] : 0;
        $this->set('typeId', $this->_typeId);
    }

    public function admin_index() {
        $this->Paginator->settings = $this->paginate;
        try {
            $members = $this->Paginator->paginate('Member',
                $this->Member->setFilterTypeId($this->_typeId)->getConditions());
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'member', 'action' => 'index', 'admin' => true,
                                  'type' => $this->_typeId));
        }
        $this->set(compact('members'));
    }

    public function admin_add() {

    }

    public function admin_create() {
        if ($this->request->isGet()) {
            $this->redirect(array('controller' => 'member', 'action' => 'index',
                'admin' => true, 'type' => $this->_typeId,));
        }
        $data = $this->request->data;
        $data['Member'] += array('type' => $this->_typeId);

        $this->Member->save($data);

        $this->redirect(array('controller' => 'member', 'action' => 'index',
            'admin' => true, 'type' => $this->_typeId,));
    }

    public function admin_edit($id = null) {
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->Member->id = $id;
        $member = $this->Member->read();
        if (!$member) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        if (!$this->_typeId) {
            $this->_typeId = $member['Member']['type'];
        }
        $this->set('typeId', $this->_typeId);
        $this->request->data = $member;
    }

    public function admin_update() {
        if ($this->request->isGet()) {
            $this->redirect(array('controller' => 'member', 'action' => 'index',
                                  'admin' => true, 'type' => $this->_typeId,));
        }
        $data = $this->request->data;
        $this->Member->save($data);

        $this->redirect(array('controller' => 'member', 'action' => 'index',
                              'admin' => true, 'type' => $this->_typeId,));
    }

    public function admin_delete($id = null) {
        $this->viewClass = 'Json';
        if ($this->Member->delete($id)) {
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

}