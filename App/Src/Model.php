<?php

namespace Jjcode\Myphporg\Src;


class Model{

    public $table = "table";


    protected function find(){
        return Capsule::find($this);
    }
}