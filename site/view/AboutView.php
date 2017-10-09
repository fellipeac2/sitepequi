<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 20/09/17
 * Time: 13:36
 */

namespace sitepequi\site\view;

require_once "common/ViewAbstract.php";


use sitepequi\site\common\ViewAbstract;

class AboutView extends ViewAbstract
{

    public function fill_content_html() {
        $this->push_tmpl_name("contents/about.html");
    }

}