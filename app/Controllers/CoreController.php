<?php 

namespace App\Controllers;




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
        // $viewVars est disponible dans chaque fichier de vue
        // si home, $viewName = 'home'
        // $viewVars =  contient ce qu'on avait dans le tableau $params

        // Pour transmettre des datas disponibles dans toutes les pages
       
        $router = $GLOBALS['router'];

        require_once __DIR__.'/../views/header.tpl.php';
        require_once __DIR__.'/../views/'.$viewName.'.tpl.php';
        require_once __DIR__.'/../views/footer.tpl.php';
    }
}