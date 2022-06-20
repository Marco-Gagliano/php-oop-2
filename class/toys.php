<?php 

// utilizzare il require collegando products
// utilizzare class e inserire l'extends a "prodotto"
// creare delle proprieta
// creare la construct con le stesse informazioni inserrite in "product" piu la proprietà scritta sopra
// dentro la construct inserire "parent:: con le stesse informazioni inserrite in "product"
// riprendere la funzione creata in "product" con l'aggiunta della prorpeità di food

require_once __DIR__ . "/products.php";

class Toys extends Products {
  public $tipologia_gioco;
  public $tipologia_materiale;
  public $colore;

  public function __construct($_nome, 
                              $_descrizione,
                              $_prezzo,
                              $_tipologia_gioco,
                              $_tipologia_materiale,
                              $_colore,
                              ){
    parent::__construct($_nome, $_descrizione, $_prezzo,);

      $this->tipologia_gioco = $_tipologia_gioco;
      $this->tipologia_materiale = $_tipologia_materiale;
      $this->colore = $_colore;
      
  }

  public function infoProduct(){
    return "$this->nome - $this->descrizione - $this->prezzo €" - $this->tipologia_gioco - $this->tipologia_materiale - $this->colore;
  }
}
?>