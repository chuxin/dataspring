<?php
class Client
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getGreeting()
    {
        date_default_timezone_set('Asia/Shanghai');
        $currentHour = date('H');
        if ($currentHour >= 18) {
            return 'Good evening';
        } else if ($currentHour >= 12) {
            return 'Good afternoon';
        } else {
            return 'Good morning';
        }
    }
}
