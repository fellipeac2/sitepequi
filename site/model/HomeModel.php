<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:42
 */

namespace sitepequi\site\model;


use sitepequi\site\common\ModelAbstract;

class HomeModel extends ModelAbstract
{
	public function get_data() {
		return json_decode(file_get_contents("template/data/home.json"));
	}
}
?>
