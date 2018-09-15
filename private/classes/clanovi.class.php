
<?php

    class Clanovi extends DatabaseObject{
        static protected $table_name = 'clanovi';
        static protected $db_columns = ['id', 'imeprezime', 'mejladresa', 'pol', 'datumrodj'];
        
        public $id;
        public $imeprezime;
        public $mejladresa;
        public $pol;
        public $datumrodj;


        public function __construct($args = []) {
            $this->id = $args['id'] ?? '';
            $this->imeprezime = $args['imeprezime'] ?? '';
            $this->mejladresa = $args['mejladresa'] ?? '';
            $this->pol = $args['pol'] ?? '';
            $this->datumrodj = $args['datumrodj'] ?? '';
            
        }
        
        public function name(){
            return $this->imeprezime;
        }
        
       public function validate(){
            $this->errors = [];
            if(is_blank($this->imeprezime)){
                $this->errors[] = "Obavezno polje! Morate uneti vaše ime i prezime";
            }
            if(is_blank($this->mejladresa)){
                $this->errors[] = "Obavezno polje! Morate uneti vašu mejl adresu!";
            }elseif(!has_valid_email_format($this->mejladresa)){
                $this->errors[] = "Niste uneli dobru mejl adresu!";
            }
            if(is_blank($this->pol)){
               $this->errors[] = "Pol morate uneti";
            }
            
           // return $this->errors;
        } 
        
    }