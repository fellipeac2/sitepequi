<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:41
 */

namespace sitepequi\site\view;

require_once "common/ViewAbstract.php";

use sitepequi\site\common\ViewAbstract;

class HomeView extends ViewAbstract
{

    public function fill_content_html($data) {
        $this->push_tmpl_name("contents/homepage.html");
        $this->set_content_html(str_replace("#artigos#", $data->pesquisa->artigos, $this->get_content_html()));
        $this->set_content_html(str_replace("#referencias#", $data->pesquisa->referencias, $this->get_content_html()));
    }

}