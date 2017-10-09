<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 09/10/17
 * Time: 13:53
 */

namespace sitepequi\site\view;


use sitepequi\site\common\ViewAbstract;

class Error404View extends ViewAbstract
{

    public function fill_content_html() {
        $this->push_tmpl_name("contents/404.html");
    }
}