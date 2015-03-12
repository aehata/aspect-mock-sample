<?php


class Sample
{
    public function greet()
    {
        if ($this->_getHour() >= 19) {
            return 'おつかれさまでした';
        } else {
            return 'おつかれさまです';
        }
    }

    private function _getHour($timezone = 'Asia/Tokyo')
    {
        $date = new DateTime('now', new DateTimeZone($timezone));
        //$date_str = $date->format('Y-m-d H:i:sP');
        return $date->format('H');
    }
}

