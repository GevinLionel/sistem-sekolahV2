<?php
namespace App\Core;

class Controller
{
   public function view(string $view, array $data = [])
   {
        extract($data);
        $view = str_replace(
            '.',
            '/',
            $view);

        $content = file_get_contents('../app/views/' . $view . '.php');
        echo $content;  

        require_once '../app/views/' . $view . '.php';
   }
}

?>