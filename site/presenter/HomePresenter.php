<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:45
 */
namespace pequi\site\presenter;

require_once "common/PresenterAbstract.php";

use pequi\site\common\PresenterAbstract;
use pequi\site\view\HomeView;

class HomePresenter extends PresenterAbstract
{
    public function init()
    {
        $data = $this->model->get_data();
        $this->view->fill_content_html($data);
    }
}