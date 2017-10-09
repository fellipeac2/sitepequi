<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 21/08/17
 * Time: 20:01
 */

namespace sitepequi\site\presenter;

require_once "../common/PresenterAbstract.php";
require_once "../model/Achievement.php";

use pequi\site\common\PresenterAbstract as PresenterAbstract;

use pequi\site\common\ViewAbstract as ViewAbstract;

class Achievement extends PresenterAbstract
{

    public function init(\sitepequi\site\model\Achievement $model, ViewAbstract $view)
    {
        parent::__construct($model, $view);

    }
}
?>