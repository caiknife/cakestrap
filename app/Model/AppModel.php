<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
    protected $_params;
    
    public function relation($params) {
        $this->_params['recursive'] = $params;
        return $this;
    }
    
    public function where($params) {
        $this->_params['where'] = $params;
        return $this;
    }
    
    public function order($params) {
        $this->_params['order'] = $params;
        return $this;
    }
    
    public function fields($params) {
        $this->_params['fields'] = $params;
        return $this;
    }
    
    public function page($params) {
        $this->_params['page'] = $params;
        return $this;
    }
    
    public function limit($params) {
        $this->_params['limit'] = $params;
        return $this;
    }
    
    public function offset($params) {
        $this->_params['offset'] = $params;
        return $this;
    }
    
    public function joins($params) { 
        $this->_params['joins'] = $params; 
        return $this; 
    }
    
    public function group($params) { 
        $this->_params['group'] = $params; 
        return $this; 
    }
    
    public function count() {
        $r = $this->find('count', $this->_params);
        $this->_params = array();
        return $r;
    }
    
    public function first() {
        $r = $this->find('first', $this->_params);
        $this->_params = array();
        return $r;
    }
    
    public function select() {
        $r = $this->find('all', $this->_params);
        $this->_params = array();
        return $r;
    }
    
    public function lists() {
        $r = $this->find('list', $this->_params);
        $this->_params = array();
        return $r;
    } 
    
    public function threaded() {
        $r = $this->find('threaded', $this->_params);
        $this->_params = array();
        return $r;
    }

    public function neighbors() {
        $r = $this->find('neighbors', $this->_params);
        $this->_params = array();
        return $r;
    } 
}
