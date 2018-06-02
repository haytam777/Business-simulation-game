<?php


class Auth{

    private $db;
    public $user;
    public $pass;

    public function __construct(Database $db){
        $this->db = $db;
    }

    public function login($user, $pass)
    {
        $req = $this->db->prepare('SELECT * FROM joueur WHERE pseudo = ?', [$user],'Joueur',true);
        if($req && $req->mdp === $pass) { 
            $this->user = $user;
            var_dump($this->user);
            $this->pass = $pass;
            return $req; 
        }
        return FALSE;
    }



}
