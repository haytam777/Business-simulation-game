<?php


class Session{


    public $listJoueur;
    private $jourCourant;
   


    public function __construct($data = array(),$jourCourant = null) {
        $this->listJoueur = $data;
        $this->jourCourant = $jourCourant;
       
    }



   public function getJourCourant(){
       return $this->jourCourant;
   }

   public function setJourCourant($jourCourant){
       $this->jourCourant = $jourCourant;
   }

   public function setlistJoueur($listjoueur){
       $this->listJoueur = $listJoueur;
   }

   public function getJoinURL(){
       return 'index.php?p=joinsession&id=' . $this->id;
   }

   public function getStartURL(){
       return 'index.php?p=startsession&id=' . $this->id;
   }

   
   public function getListJoueur($db){
       $res = $db->query('select * from session where id ='.$this->id,null,true);
       $arrayOfplayers = array();
       $arrayOfplayers[0] = ($res->id_joueur1 == NULL ? 0 : $res->id_joueur1);
       $arrayOfplayers[1] = ($res->id_joueur2 == NULL ? 0 : $res->id_joueur2);
       $arrayOfplayers[2] = ($res->id_joueur3 == NULL ? 0 : $res->id_joueur3);
    
       $this->listJoueur = $arrayOfplayers;
       return $this->listJoueur;
   }

   public function getEmptyPlace($db){
       $this->getListJoueur($db);
       for($i = 0; $i<count($this->listJoueur); $i++){
           if(($this->listJoueur)[$i] === 0)
                return $i+1;
       }
       return 3;
   }

   public static function getSessions($db){
       return $db->query('select * from session where id_joueur1 is NULL or id_joueur2 is NULL or id_joueur3 is NULL',__CLASS__);
   }

   public static function getSession($db,$id){
       $session = $db->prepare('select * from session where id = ?',[$id],__CLASS__,true);
       $session->getListJoueur($db);
       $session->setJourCourant($session->id_jour);
       return $session;
   }

 
   public function checkJoined($idjoueur){
       for($i = 0; $i<count($this->listJoueur); $i++){
           if(($this->listJoueur)[$i] === $idjoueur)
                return true;
            return false;
       }
   }

   public function updateJourCourant($db, $i){
      $db->action('update session set id_jour = ? where id = ?', [$i +1 , $this->id]);
   }



   


}