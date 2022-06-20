<?php 

// creare la classe con le proprietà pubbliche (nome,descrizione,prezzo)
// creare la construct
// creare una funzione in cui stampa le info del prodotto (return $this->)

class Products {
  public $nome;
  public $descrizione;
  public $prezzo;
  
  public function __construct($_nome, 
                              $_descrizione, 
                              $_prezzo,){
    $this->nome = $_nome;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;
  }

  public function infoProduct(){
    return "$this->nome - $this->descrizione - $this->prezzo €";
  }
}


?>