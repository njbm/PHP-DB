<?php

namespace BITM\SEIP12\Utility;

class Utility{

    static public function sanitize($var){
        return $var;
    }
    static public function uuid(){
        return uniqid();
    }

}