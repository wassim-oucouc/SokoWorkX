<?php
include'../http/registerform.php';
include'../http/loginform.php';
include'UtilisateurControllers.php';
include'../model/AuthModel.php';
class authController{
    private UtilisateurController $utilisateurController;
    private AuthModel $authModel;
    public function __construct() {
        $this-> utilisateurController = new UtilisateurController() ;
        $this->authModel = new AuthModel() ;
    }

    public function register(RegisterForm $registerForm) {
        try {
            $user = $this->authModel->register($registerForm);
            return $user;
        }catch (Exception $e) {
              echo"error:".$e;
        }
    }




    public function login(RegisterForm $logInForm) {

        try {
            $user = $this->authModel->login($logInForm);
            return $user;
        } catch (Exception $e) {
            echo"error!:".$e;
        }

        header('location: dashboard');
    }

}




?>