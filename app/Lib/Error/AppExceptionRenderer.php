<?php
App::uses('ExceptionRenderer', 'Error');

class AppExceptionRenderer extends ExceptionRenderer {
    public function error400($error) {
        // TODO: custom error 404 logic goes here
        parent::error400($error);
    }

    public function error500($error) {
        parent::error500($error);
    }
}