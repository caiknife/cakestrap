<?php
class ContentController extends AppController {
    public $uses = array(
        'Trainee',
        'Trainer',
        'TrainDivision',
        'TrainInfo',
    );

    public $helpers = array(
        'Content',
    );

    public $paginate = array(
        'Trainee' => array(
            'limit' => 10,
            'order' => 'Trainee.id DESC',
        ),
        'Trainer' => array(
            'limit' => 10,
            'order' => 'Trainer.id DESC',
        ),
        'TrainDivision' => array(
            'limit' => 10,
            'order' => 'TrainDivision.id DESC',
        ),
        'TrainInfo' => array(
            'limit' => 10,
            'order' => 'TrainInfo.id DESC',
        ),
    );

    protected $_noFilterActions = array(
        'admin_deletetrainee', 'admin_deletejiaoshi', 'admin_deletejigou', 'admin_deletexinxi',
        'admin_detailtrainee', 'admin_detailjiaoshi', 'admin_detailjigou.ctp', 'admin_detailxinxi',
    );

    protected function _adminBeforeFilter() {
        if (in_array($this->request->action, $this->_noFilterActions)) {
            return;
        }
        parent::_adminBeforeFilter();
    }

    public function admin_index() {
        $this->Paginator->settings = $this->paginate;
        try {
            $trainees = $this->Paginator->paginate('Trainee');
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'content', 'action' => 'index', 'admin' => true,));
        }
        $this->set(compact('trainees'));
    }

    public function admin_uploadtrainee() {
        $this->autoRender = false;
        if (!isset($this->request->data['Trainee']['upload'])) {
            $this->redirect(array('controller' => 'content', 'action' => 'index', 'admin' => true));
        }
        $upload = $this->request->data['Trainee']['upload'];
        if ($upload['error'] !== 0) {
            $this->redirect(array('controller' => 'content', 'action' => 'index', 'admin' => true));
        }
        /**
         * make dest file path and upload it to the system
         */
        $fileInfo = pathinfo($upload['name']);
        $this->_destFile = WWW_ROOT . 'files' . DS . 'upload' . DS . time() . '.' . $fileInfo['extension'];
        move_uploaded_file($upload['tmp_name'], $this->_destFile);

        /**
         * import excel data
         */
        $this->_currentExcelType = 'trainee';
        $this->_readExcel();
        $this->Trainee->saveAll($this->_excelData);

        /**
         * redirect to index
         */
        $this->redirect(array('controller' => 'content', 'action' => 'index', 'admin' => true));
    }

    public function admin_deletetrainee($id = null) {
        $this->viewClass = 'Json';
        if ($this->Trainee->delete($id)) {
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

    public function admin_detailtrainee($id = null) {
        $this->autoLayout = false;
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->Trainee->id = $id;
        $item = $this->Trainee->read();
        if (!$item) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->set(compact('item'));
    }

    public function admin_jiaoshi() {
        $this->Paginator->settings = $this->paginate;
        try {
            $trainers = $this->Paginator->paginate('Trainer');
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'content', 'action' => 'jiaoshi', 'admin' => true,));
        }
        $this->set(compact('trainers'));
    }

    public function admin_uploadjiaoshi() {
        $this->autoRender = false;
        if (!isset($this->request->data['Trainer']['upload'])) {
            $this->redirect(array('controller' => 'content', 'action' => 'jiaoshi', 'admin' => true));
        }
        $upload = $this->request->data['Trainer']['upload'];
        if ($upload['error'] !== 0) {
            $this->redirect(array('controller' => 'content', 'action' => 'jiaoshi', 'admin' => true));
        }
        /**
         * make dest file path and upload it to the system
         */
        $fileInfo = pathinfo($upload['name']);
        $this->_destFile = WWW_ROOT . 'files' . DS . 'upload' . DS . time() . '.' . $fileInfo['extension'];
        move_uploaded_file($upload['tmp_name'], $this->_destFile);

        /**
         * import excel data
         */
        $this->_currentExcelType = 'jiaoshi';
        $this->_readExcel();
        $this->Trainer->saveAll($this->_excelData);

        /**
         * redirect to index
         */
        $this->redirect(array('controller' => 'content', 'action' => 'jiaoshi', 'admin' => true));
    }

    public function admin_deletejiaoshi($id = null) {
        $this->viewClass = 'Json';
        if ($this->Trainer->delete($id)) {
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

    public function admin_detailjiaoshi($id = null) {
        $this->autoLayout = false;
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->Trainer->id = $id;
        $item = $this->Trainer->read();
        if (!$item) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->set(compact('item'));
    }

    public function admin_peixunjigou() {
        $this->Paginator->settings = $this->paginate;
        try {
            $divisions = $this->Paginator->paginate('TrainDivision');
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunjigou', 'admin' => true,));
        }
        $this->set(compact('divisions'));
    }

    public function admin_uploadjigou() {
        $this->autoRender = false;
        if (!isset($this->request->data['TrainDivision']['upload'])) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunjigou', 'admin' => true));
        }
        $upload = $this->request->data['TrainDivision']['upload'];
        if ($upload['error'] !== 0) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunjigou', 'admin' => true));
        }
        /**
         * make dest file path and upload it to the system
         */
        $fileInfo = pathinfo($upload['name']);
        $this->_destFile = WWW_ROOT . 'files' . DS . 'upload' . DS . time() . '.' . $fileInfo['extension'];
        move_uploaded_file($upload['tmp_name'], $this->_destFile);

        /**
         * import excel data
         */
        $this->_currentExcelType = 'jigou';
        $this->_readExcel();
        $this->TrainDivision->saveAll($this->_excelData);

        /**
         * redirect to index
         */
        $this->redirect(array('controller' => 'content', 'action' => 'peixunjigou', 'admin' => true));
    }

    public function admin_deletejigou($id = null) {
        $this->viewClass = 'Json';
        if ($this->TrainDivision->delete($id)) {
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

    public function admin_detailjigou($id = null) {
        $this->autoLayout = false;
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->TrainDivision->id = $id;
        $item = $this->TrainDivision->read();
        if (!$item) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->set(compact('item'));
    }

    public function admin_peixunxinxi() {
        $this->Paginator->settings = $this->paginate;
        try {
            $infos = $this->Paginator->paginate('TrainInfo');
        } catch (NotFoundException $e) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunxinxi', 'admin' => true,));
        }
        $this->set(compact('infos'));
    }

    public function admin_uploadxinxi() {
        $this->autoRender = false;
        if (!isset($this->request->data['TrainInfo']['upload'])) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunxinxi', 'admin' => true));
        }
        $upload = $this->request->data['TrainInfo']['upload'];
        if ($upload['error'] !== 0) {
            $this->redirect(array('controller' => 'content', 'action' => 'peixunxinxi', 'admin' => true));
        }
        /**
         * make dest file path and upload it to the system
         */
        $fileInfo = pathinfo($upload['name']);
        $this->_destFile = WWW_ROOT . 'files' . DS . 'upload' . DS . time() . '.' . $fileInfo['extension'];
        move_uploaded_file($upload['tmp_name'], $this->_destFile);

        /**
         * import excel data
         */
        $this->_currentExcelType = 'xinxi';
        $this->_readExcel();
        $this->TrainInfo->saveAll($this->_excelData);

        /**
         * redirect to index
         */
        $this->redirect(array('controller' => 'content', 'action' => 'peixunxinxi', 'admin' => true));
    }

    public function admin_deletexinxi($id = null) {
        $this->viewClass = 'Json';
        if ($this->TrainInfo->delete($id)) {
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

    public function admin_detailxinxi($id = null) {
        $this->autoLayout = false;
        if (!$id) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->TrainInfo->id = $id;
        $item = $this->TrainInfo->read();
        if (!$item) {
            throw new NotFoundException(MESSAGE_ITEM_NOT_EXISTS);
        }
        $this->set(compact('item'));
    }

    protected function _readExcel() {
        // 获取表结构名
        $excelConfig = Configure::read('Admin.excel');
        $keyData = $excelConfig[$this->_currentExcelType];
        try {
            $objExcel = PHPExcel_IOFactory::load($this->_destFile);
        } catch (PHPExcel_Reader_Exception $e) {
            throw new InternalErrorException(MESSAGE_EXCEL_TYPE_INCORRECT);
        }
        foreach ($objExcel->getWorksheetIterator() as $worksheet) {
            // 检查 Excel 表格数据列数
            $columnCount = ord($worksheet->getHighestColumn()) - ord('A') + 1;
            if ($columnCount !== $this->_cellCount[$this->_currentExcelType]) {
                throw new InternalErrorException(MESSAGE_COLUMN_COUNT_NOT_MATCH);
            }
            foreach ($worksheet->getRowIterator() as $row) {
                // 第一行是表头，忽略
                if ($row->getRowIndex() === 1) {
                    continue;
                }
                $rowData = array();
                foreach ($row->getCellIterator() as $cell) {
                    $rowData[] = $cell->getValue();
                }
                $this->_excelData[] = array_combine($keyData, $rowData);
                // 先测试第一个
                // break;
            }
            // 只读取第一个 Worksheet
            break;
        }
    }
}