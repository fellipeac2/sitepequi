<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:48
 */

require_once "common/ModelAbstract.php";
$page = str_replace("/pequi/site/","",$_SERVER['REDIRECT_URL']);

$alias_page = ucfirst(strtolower($page));
require_once "model/".$alias_page."Model.php";
require_once "presenter/".$alias_page."Presenter.php";
require_once "view/".$alias_page."View.php";

$ns_model = "\pequi\site\model\\";
$ns_view  = "\pequi\site\\view\\";
$ns_presenter = "\pequi\site\presenter\\";
$al_model = $ns_model.$alias_page."Model";
$al_view  = $ns_view.$alias_page."View";
$al_presenter = $ns_presenter.$alias_page."Presenter";
$presenter = new $al_presenter(new $al_model(), new $al_view());

$content_html =  $presenter->get_view()->get_content_html();
$page = file_get_contents("template/template_teste.html");
$page = str_replace("#content#", $content_html, $page);
echo $page;
#var_dump($_SERVER);
?>
