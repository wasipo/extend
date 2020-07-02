<?php

namespace App\Blocks;


class BaseBlock {


    public function __construct()
    {
        $this->extendOriginal();
        $this->initActions();
    }

    public function extendOriginal() {

            $categories[] = array(
                'slug'  => 'extend_origin',
                'title' => 'extendBlock',
            );

            return $categories;

    }

    private function initActions() {

        register_block_type( 'gutenberg/internallink',[]);


    }

}

