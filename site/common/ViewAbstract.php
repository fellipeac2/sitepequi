<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 21/08/17
 * Time: 19:16
 */
namespace pequi\site\common;
//require_once "ModelAbstract.php";

abstract class ViewAbstract
{
    protected $content_html = "";



    public function get_content_html() {
        return $this->content_html;
    }
    protected function set_content_html($content_html) {
        $this->content_html = $content_html;
    }
    protected function add_content_html($content_html) {
        $this->content_html .= $content_html;
    }
    protected function push_tmpl_name($template_name) {
        $content = file_get_contents("template/".$template_name);
        if($content != false) {
            $this->set_content_html($content);
        }
    }
}