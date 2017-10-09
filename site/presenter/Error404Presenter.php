<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 09/10/17
 * Time: 13:51
 */

namespace sitepequi\site\presenter;

require_once "common/PresenterAbstract.php";

use sitepequi\site\common\PresenterAbstract;

class Error404Presenter extends PresenterAbstract
{

    public function init()
    {
        $this->view->fill_content_html();
    }
}