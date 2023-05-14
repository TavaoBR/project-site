<?php

namespace App\Controller\Template;
use League\Plates\Engine;
use Exception;

abstract class TemplateController {
  protected function view($view, $data = [])
  {
    $viewPath = "App/Web/".$view.'.php';

    if(!file_exists($viewPath)){
        throw new Exception("A view {$view} não existe");
    }

    $template = new Engine("App/Web");
    echo $template->render($view, $data);
   }
}
