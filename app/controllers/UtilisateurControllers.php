<?php

include_once '../model/Utilisateur.php';

class  UtilisateurController{

    private Utilisateur $user;

    public function __construct(){
        $this->user = new Utilisateur();
    }


    public function createUtilisateur() {

        $arguments=[];
        $arguments[0]= "first";
        $arguments[1]="last";
        $arguments[2]= "0607189671";
        $arguments[3]= "Logo.png";
        $arguments[4]="adminsssdsd@example.com";
        $arguments[5]= "998877";
        $arguments[6]= "visiteur";

        $user = $this->user->instance($arguments);
        $this->user->createUser($user);
        return $user;
    }



}