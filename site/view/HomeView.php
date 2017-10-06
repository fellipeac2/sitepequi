<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:41
 */

namespace pequi\site\view;

require_once "common/ViewAbstract.php";

use pequi\site\common\ViewAbstract;

class HomeView extends ViewAbstract
{

    public function fill_content_html() {
        $this->push_tmpl_name("contents/homepage.html");
    }

}