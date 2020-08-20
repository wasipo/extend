<?php

namespace App;

use App\util;

class SetData  {

    public $Category;
    public $Tags;
    public $Posts;

    public function __construct() {
        $this->Category = $this->SetAllCategorys();
    }

    public function SetAllCategorys() {
        $category = get_categories();
        return $category;
    }



}