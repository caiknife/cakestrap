<?php
App::uses('AppModel', 'Model');

class Code extends AppModel {
    public  $belongsTo = array(
        'CodeContent' => array(
            'className' => 'CodeContent',
            'foreignKey' => 'content_id',            
        ),
    );

    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'message' => '[代码标题]不能为空！',
            'required' => 'create',
        ),
    );
}