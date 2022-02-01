<?php


namespace App\classes;


class User
{
    public $city = 'Dhaka';
    protected $country = 'Bangladesh';
    private $area = 'KawranBazar';

    public function login ()
    {
        echo 'in login';
    }

    protected function logout ()
    {
        echo 'In logout';
    }

    private function profile () {
        echo  'In profile';
    }
}