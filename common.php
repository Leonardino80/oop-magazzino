<?php
//  trait comune a tutte le classi (prezzo)
trait Common {
  public $prezzo;
  // Costruttore del prezzo e la marca
  function __construct($_prezzo) {
    $this->prezzo = $_prezzo;
  }
  // Funzione che calcola lo sconto in base al prezzo e ad una percentuale
  public function sconto($sconto) {
    $sconto = ($this->prezzo * $sconto) / 100;
    return $prezzo_scontato;
  }
}
 ?>
