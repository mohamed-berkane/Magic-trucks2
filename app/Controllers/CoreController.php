<?php 

namespace App\Controllers;
use App\Models\Personnages;




// Classe mère de tous les controllers
class CoreController {
    
    /**
     * Méthode qui s'occupe d'afficher la page grace aux différents templates
     *
     * @param string $viewName
     * @param array $viewVars
     * @return void
     */
    protected function show($viewName, $viewVars = []) {
       
        $router = $GLOBALS['router'];

        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}