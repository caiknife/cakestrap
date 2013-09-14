<?php
App::uses('AppModel', 'Model');

class CodeContent extends AppModel {
    public $validate = array(
        'content' => array(
            'rule' => 'notEmpty',
            'message' => '[代码内容]不能为空！',
            'required' => 'create',
        ),
    );
}