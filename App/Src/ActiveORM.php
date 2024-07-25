<?php

namespace Jjcode\Myphporg\Src;

use Illuminate\Database\Capsule\Manager as Capsule;

class ActiveORM {

    public $tableName = "";

    protected function find($select = "*"){
        Capsule::connection()->table($this->tableName)->select($select);
    }

}