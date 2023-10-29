<?php

class SettlementInfo
{
   protected $name, $country, $price, $url;

    public function GetName($name){
       $this->name = $name;
    }
    public function SetName(){
        return $this->name;
    }

    public function GetCountry($country){
        $this->country = $country;
    }
    public function SetCountry(){
        return $this->country;
    }

    public function GetPrice($price){
        $this->price = $price;
    }
    public function SetPrice(){
        return $this->price;
    }

    public function GetURL($url){
        $this->url = $url;
    }
    public function SetURL(){
        return $this->url;
    }
}