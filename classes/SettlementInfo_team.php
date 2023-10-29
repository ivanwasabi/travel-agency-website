<?php

class SettlementInfo
{
   protected $name, $position, $contacts, $url;

    public function GetName($name){
       $this->name = $name;
    }
    public function SetName(){
        return $this->name;
    }

    public function GetPosition($position){
        $this->position = $position;
    }
    public function SetPosition(){
        return $this->position;
    }

    public function GetContacts($contacts){
        $this->contacts = $contacts;
    }
    public function SetContacts(){
        return $this->contacts;
    }

    public function GetURL($url){
        $this->url = $url;
    }
    public function SetURL(){
        return $this->url;
    }
}