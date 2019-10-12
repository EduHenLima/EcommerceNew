<?php

namespace Hcode;

class PageAdmin extends Page{

    public function __construct($opts = Array(), $tpl_dir = "/views/admin/")
    {
        parent::__construct($opts, $tpl_dir);
    }
}

?>