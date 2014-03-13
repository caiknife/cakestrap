<?php
class DateHelper extends AppHelper {
    public function format($date, $format='Y年m月d日') {
        return date($format, strtotime($date));
    }
}