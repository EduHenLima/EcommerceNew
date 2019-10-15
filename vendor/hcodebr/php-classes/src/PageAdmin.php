<?php 

namespace Hcode;
// todos os arquivos que ficão dentro da page admin
class PageAdmin extends Page{

	public function __construct ($opts = array(), $tpl_dir = "/views/admin/")
	{

		parent::__construct($opts,$tpl_dir);

	}
}
?>
