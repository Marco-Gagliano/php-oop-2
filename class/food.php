<?php 

// utilizzare il require collegando products
// utilizzare class e inserire l'extends a prodotto
// creare delle proprieta
// creare la construct con le stesse informazioni inserrite in "product" piu la proprietà scritta sopra
// dentro la construct inserire "parent:: con le stesse informazioni inserrite in "product"
// riprendere la funzione creata in "product con l'aggiunta della prorpeità di food

require_once __DIR__ . "/products.php";

class Food extends Products {
  public $tipologia_prodotto;
  public $tipologia_cibo;
  public $marca;
  public $quantità;
  public $scadenza;

  public function __construct($_nome, 
                              $_descrizione,
                              $_prezzo,
                              $_tipologia_prodotto, 
                              $_tipologia_cibo,
                              $_marca,
                              $_quantità,
                              $_scadenza){
    parent::__construct($_nome, $_descrizione, $_prezzo,);

      $this->tipologia_prodotto = $_tipologia_prodotto;
      $this->tipologia_cibo = $_tipologia_cibo;
      $this->marca = $_marca;
      $this->quantità = $_quantità;
      $this->scadenza = $_scadenza;
  }

  public function infoProduct(){
    return "$this->nome - $this->descrizione - $this->prezzo €" - $this->tipologia_prodotto - $this->tipologia_cibo - $this->marca - $this->quantità - $this->scadenza;
  }
}

?>