<?php

namespace App\General;

use Illuminate\Support\Facades\Config;

trait General{
    /**
     * @var array
     */
    public $data=[];

    /**
     * @param $key
     * @param null $value
     */

public function data($key,$value=null ){

    if(empty($key)) return false;

    return $this->data[$key]=$value;
}

public function makeTitle($backend,$separator=': :',$fronted=null)
    {
if(!isset($fronted)){
    $fronted .= Config:: get('title.name');

}
return $fronted.$separator.$backend;
    }
}