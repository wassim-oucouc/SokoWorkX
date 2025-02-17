<?php
namespace app\controllers;


use app\models\Offer;

class OfferController{


    private $Offer;
    public function __construct(){
        $this->Offer = new Offer();
    }



    public function getAllOffer(){
        $Offers = $this->Offer->findAllOffers();
        foreach ($Offers as $Offer){
            $Offer->setClient($this->Offer -> getClient()->findById($Offer->getClientId()));
            $Offer->setCategorie($this->Offer->getCategorie()->findById($Offer->getCategorieId()));
        }
        return $Offers;
    }
}

