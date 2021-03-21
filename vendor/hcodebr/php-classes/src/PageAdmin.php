<?php

namespace Hcode;

class PageAdmin extends Page {

    public function __construct($opts = array(), $tpl_dir = "/ecommerce/views/admin/")
    {
        //Aproveita a herança da classe pai (Page)
        parent::__construct($opts, $tpl_dir);
    }

}

?>