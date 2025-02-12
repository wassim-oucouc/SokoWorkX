<?php

use app\models\Offer;

class OfferController{


    private $offer;
    public function __construct(){
        $this->offer = new Offer();
    }



    public function getAllOffer(){
        $Offers = $this->Offer->findAllOffers();
        foreach ($Offers as $Offer){
            $Offer->setClient($this->Client->findById($Offer->getClientId()));
            $Offer->setCategorie($this->Categorie->findById($Offer->getCategorieId()));
        }
        return $Offers;
    }
}