<?php

namespace App;

use App\util;

class BaseDatas
{

    protected $enqueque = [];
    protected $remove_action = [];


    public function __construct()
    {
        $this->enqueque = util::getConst('enqueque');
        $this->remove_action = util::getConst('action')['remove'];
        foreach($this->remove_action as $row) {
            remove_action($row['action_name'],$row['remove_target'],$row['priority']);
        }
    }




}