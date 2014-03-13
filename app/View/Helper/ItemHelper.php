<?php
class ItemHelper extends AppHelper {
    protected $_currentCategory = null;
    protected $_breadCrumb = array();

    public function isPublic($isPublic) {
        $true = '<span class="label label-success">已发布</span>';
        $false = '<span class="label label-important">未发布</span>';
        return $isPublic ? $true : $false;
    }

    public function getCategoryName($categoryId, $structure) {
        $arr = explode('0', $categoryId);
        $root = $structure['subs'];
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
        return $this->_currentCategory['name'];
    }

    public function getFormatPrice($price = 0) {
        return '￥' . sprintf('%.2f', $price);
    }
}