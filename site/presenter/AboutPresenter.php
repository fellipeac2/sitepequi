<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 20/09/17
 * Time: 13:37
 */

namespace pequi\site\presenter;

require_once "common/PresenterAbstract.php";

use pequi\site\common\PresenterAbstract;

class AboutPresenter extends PresenterAbstract
{

    public function init()
    {
        $this->view->fill_content_html();
    }
}