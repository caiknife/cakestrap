<?php
class Article extends AppModel {
    public function setFilterCategoryId($categoryId) {
        $this->_appendConditions(array(
            'category_id LIKE' => $categoryId . '%',
        ));
        return $this;
    }

    public function setFilterTitle($title) {
        $this->_appendConditions(array(
            'title LIKE' => '%' . $title . '%',
        ));
        return $this;
    }

    public function setFilterKeyword($keyword) {
        if (!empty($keyword)) {
            $this->setFilterTitle($keyword);
        }
        return $this;
    }
}