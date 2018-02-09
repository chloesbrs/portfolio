<?php
if(!isset($_GET['p']) || $_GET['p'] == "")
{
        $page = "accueil";
}
else
{
    if(!file_exists("content/".$_GET['p'].".php"))
        {
            $page = 404;
        }
        else
            $page = $_GET['p'];
    }

ob_start();//suspend l'affichage
    include "Controller/".$page."Controller.php";
    $content = ob_get_contents();//recuperer ce qui n'a pas ete affiché


?>
