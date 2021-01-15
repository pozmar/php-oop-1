<?php
class Stanza {
    public $piano;
    public $numero;
    public $posti;
    public $costo_notte;
    public $benefit;
    public $letti_aggiuntivi;
    public $tipologia;
    function __construct($letti_aggiuntivi, $tipologia){
        $this->letti_aggiuntivi = $letti_aggiuntivi;
        $this->tipologia = $tipologia;
    }
    public function Print(){
        echo('<p>'. 'Piano: ' . $this->piano . '<br>' . 'Numero stanza: ' . $this->numero . '<br>' . 'Posti letto: ' . $this->posti  . '<br>' .'Costo in euro per notte: ' . $this->costo_notte . '<br>' . 'Benefit: ' . $this->benefit . '<br>' . 'Letti aggiuntivi : ' . $this->letti_aggiuntivi . '<br>' . 'Tipologia : ' . $this->tipologia . '</p>');
    }
}
$prima_s = new Stanza(2, 'suite');
$prima_s->piano = 1;
$prima_s->numero = 18;
$prima_s->posti = 4;
$prima_s->costo_notte = 50;
$prima_s->benefit = 'idromassaggio';


?>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stanza Hotel</title>
    </head>
    <body>
        <?php
        $prima_s->Print();
        ?>
        
    </body>
</html>