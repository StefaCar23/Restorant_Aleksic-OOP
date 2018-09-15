<?php

class Porudzbine extends DatabaseObject{
    static protected $table_name = 'porudzbine';
    static protected $db_columns = ['id', 'jelo', 'imeprez', 'adresa', 'brtel', 'napomena'];
    
    public $id;
    public $jelo;
    public $imeprez;
    public $adresa;
    public $brtel;
    public $napomena;
    
    public function __construct($args = []){
        $this->id = $args['id'] ?? '';
        $this->jelo = $args['jelo'] ?? '';
        $this->imeprez = $args['imeprez'] ?? '';
        $this->adresa = $args['adresa'] ?? '';
        $this->brtel = $args['brtel'] ?? '';
        $this->napomena = $args['napomena'] ?? '';
    }
    
    public function validate(){
        $this->errors = [];
        
        if(is_blank($this->jelo)){
            $this->errors[] = "Obavezno polje! Morate izabrati jelo.";
        }
        
        if(is_blank($this->imeprez)){
            $this->errors[] = "Obavezno polje! Morate uneti vaše ime i prezime.";
        }
        
        if(is_blank($this->adresa)){
            $this->errors[] = "Obavezno polje! Morate uneti vašu adresu.";
        }
        
        if(is_blank($this->brtel)){
            $this->errors[] = "Obavezno polje! Morate uneti vaš broj telefona.";
        }
        
    }
    
    
}