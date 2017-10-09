<?php
/**
 * Created by PhpStorm.
 * User: fellipe
 * Date: 18/09/17
 * Time: 18:48
 */

require_once "common/ModelAbstract.php";
$page = str_replace("/sitepequi/site/","",$_SERVER['REDIRECT_URL']);

$alias_page = ucfirst(strtolower($page));
if(!file_exists("presenter/".$alias_page."Presenter.php")) {
    $alias_page = "Error404";
}
require_once "model/".$alias_page."Model.php";
require_once "presenter/".$alias_page."Presenter.php";
require_once "view/".$alias_page."View.php";


$ns_model = "\sitepequi\site\model\\";
$ns_view  = "\sitepequi\site\\view\\";
$ns_presenter = "\sitepequi\site\presenter\\";
$al_model = $ns_model.$alias_page."Model";
$al_view  = $ns_view.$alias_page."View";
$al_presenter = $ns_presenter.$alias_page."Presenter";
$presenter = new $al_presenter(new $al_model(), new $al_view());

$content_html =  $presenter->get_view()->get_content_html();
$page = file_get_contents("template/template_teste.html");
$page = str_replace("#content#", $content_html, $page);

$data = json_decode(file_get_contents("template/data/data_site.json"));
$page = str_replace("#endereco#", $data->contatos->endereco, $page);
$page = str_replace("#email#", $data->contatos->email, $page);
$page = str_replace("#telefone#", $data->contatos->telefone, $page);
$page = str_replace("#facebook-link#", $data->contatos->facebooklink, $page);
$page = str_replace("#instagram-link#", $data->contatos->instagramlink, $page);
$page = str_replace("#github-link#", $data->contatos->githublink, $page);
$page = str_replace("#copyright#", $data->copyright, $page);
echo $page;
#var_dump($_SERVER);
?>
