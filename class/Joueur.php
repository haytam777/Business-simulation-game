<?php


class Joueur{

    private $dbb;
    public $user;
    public $pass;
    public $id;
    public $a = 0;
    public $d = 0;
    public $e = 0;
    public $mp = 0;
    public $pdt = 0;

    public function __construct(){
        //$this->dbb = $db;
    }

    public function login($user, $pass,$db)
    {

        $this->dbb = $db;
        $req = $this->dbb->prepare('SELECT * FROM joueur WHERE pseudo = ?', [$user],__CLASS__,true);
        if($req && $req->mdp === $pass) { 
            $this->user = $user;
            $this->pass = $pass;
            $this->id = $req->id;
            return $req; 
        }
        return FALSE;
    }
    public function joinSession($db,$idSession,$position){
        $this->dbb = $db;
        $req = $this->dbb->action('update session set id_joueur'.$position. ' = ? where id = ?', [$this->id,$idSession]);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setMp($mp){
        $this->mp = $mp;
    }

    public function getJoueurById($id,$db){
         $req = $db->prepare('SELECT * FROM joueur WHERE id = ?', [$id],null,true);
        if($req) { 
            $this->user = $req->pseudo;
            $this->pass = $req->mdp;
            $this->id = $req->id;
            $this->mp = $req->mp;
            $this->pdt = $req->pdt;
            //$this->caisse = $req->caisse;
        }   
    }

    public function getADEfromDB($db){
        $req = $db->prepare('SELECT * FROM ADE WHERE id_joueur = ?', [$this->id],null,true);
        if($req) { 
            $this->a = $req->a;
            $this->d = $req->d;
            $this->e = $req->e;
        }
    }



    public function setADEtoDB($db){
        $req = $db->action('update ADE set a=? , d=? , e=? where id_joueur=?', [$this->a,$this->d,$this->e,$this->id]);
    }

    public function setMPtoDB($db){
        $req = $db->action('update joueur set mp=? where id=?', [$this->mp,$this->id]);
        $req = $db->action('update ADE set a=? where id_joueur=?', [$this->a,$this->id]);
    }

    public function insertinto($db,$id){
        $req = $db->action('insert into joueur values(?,?,?,?,?)', [4,"h","h",$id,200]);
    }

    public function setPdtMPtoDB($db){
        $req = $db->action('update joueur set mp=?, pdt=? where id=?', [$this->mp,$this->pdt,$this->id]);
    }

    public function setProduittoDB($db, $id_produit, $quantite){
        $req = $db->action('insert into PJ values(?,?,?)', [ $id_produit ,$this->id,$quantite] );
    }

    public function test($db){
        $req = $db->action("insert into PJ values(4, 5, 5) ");
    }

    public function getPrix($db, $id_produit){
        $req = $db->prepare('SELECT prix FROM produit WHERE id = ?', [$id_produit],null,true);
        if($req) { 
            $p = $req->prix ;
            return $p;
        }
    }


   /* public function setCaissetoDB($db){
        $req = $db->action('update joueur set caisse=? where id=?', [$this->caisse,$this->id]);
    } */
    
    
}