<?php
namespace App\Controllers;

use App\Models\Personnages;


class MainController extends CoreController{

    public function personnages() {
        // on va afficher la vue views/home.tpl.php
        // var_dump('Methode home', $params);
        $params['title'] = 'Accueil';

        $modelPersonnages = new Personnages();

        // SELECT * FROM personnages;
        // On récupère tous les personnages de notre BDD
      
       //dump('Je suis la page Home', $personnagesFooter);
       
       $personnages = $modelPersonnages->findAll();
        // On transmet ces données à la vue grâce
        // à la méthode show
        $params['personnages'] = $personnages;
        
        // views/header.tpl.php
        // views/home.tpl.php
        // views/footer.tpl.php
        $this->show('home', $params);
    }
    public function portrait($params) {
        // on va afficher la vue views/home.tpl.php
        // var_dump('Methode home', $params);
        $params['title'] = 'portrait';
        $id = $params['id'];
        $modelPersonnage = new Personnages();

        // SELECT * FROM personnages;
        // On récupère tous les personnages de notre BDD
      
       //dump('Je suis la page Home', $personnagesFooter);
       
       $personnage = $modelPersonnage->find($id);
        // On transmet ces données à la vue grâce
        // à la méthode show
        
       
        
        $this->show('portrait', [
            'id'=>$id,
            'personnage'=>$personnage
        ]);
    }
    




    public function createur($params) {
        // on va afficher la vue views/home.tpl.php
        // var_dump('Methode home', $params);
        $params['title'] = 'createur';

        $this->show('createur', $params);
    }


    
}
