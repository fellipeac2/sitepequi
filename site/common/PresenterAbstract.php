<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 21/08/17
 * Time: 19:20
 */

namespace pequi\site\common;

require_once "ModelAbstract.php";
require_once "ViewAbstract.php";

abstract class PresenterAbstract
{
    public $model;
    public $view;

    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
        $this->init();
    }

    abstract public function init();

    public function get_view() {
        return $this->view;
    }

    public function get_model() {
        return $this->view;
    }
}