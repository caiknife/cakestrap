<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 14-2-26
 * Time: 下午9:09
 */
class Member extends AppModel {
    const NORMAL = 0;
    const JIGOU = 1;

    public function beforeSave($options = array()) {
        if (isset($this->data['Member']['password']) && !empty($this->data['Member']['password'])) {
            $this->data['Member']['password_hash'] = md5($this->data['Member']['password']);
        }
        return true;
    }

    public function setFilterTypeId($typeId) {
        $this->_appendConditions(array(
            'type' => $typeId,
        ));
        return $this;
    }

    public function getMemberByUsernameAndPassword($username, $password, $type = Member::NORMAL) {
        return $this->where(array(
            'username'      => $username,
            'password_hash' => md5($password),
            'type'          => $type
        ))->first();
    }

    public function checkMemberExists($field, $value) {
        $result = $this->where(array(
            $field => $value,
        ))->first();
        if ($result) {
            return true;
        }
        return false;
    }
}