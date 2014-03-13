<?php
/**
 * Created by PhpStorm.
 * User: CaiKnife
 * Date: 14-2-23
 * Time: 下午1:37
 */

class ContentHelper extends AppHelper {
    public function isHighlight($action = null) {
        return $this->request->params['action'] === $action;
    }
}