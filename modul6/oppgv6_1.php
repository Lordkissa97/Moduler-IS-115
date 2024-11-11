<?php


// lage brukerklasse
class Bruker {
    // klassen public egenskaper
    public $fornavn;
    public $etternavn;
    public $brukernavn;
    public $fodselsdato;
    public $registreringsdato;

    // konstruktør for å initialisere egenskapene
    public function __construct($fornavn, $etternavn, $brukernavn, $fodselsdato, $registreringsdato) {
        $this->fornavn = $fornavn;
        $this->etternavn = $etternavn;
        $this->brukernavn = $brukernavn;
        $this->fodselsdato = $fodselsdato;
        $this->registreringsdato = $registreringsdato;
    }

    // metode nr.1 for å få fornavn og etternavn av brukeren
    public function getFulltNavn() {
        return $this->fornavn . " " . $this->etternavn;
    }

    // metode nr.2 for å få alderen av brukeren
    public function getAlder() {
        $fodselsdato = new DateTime($this->fodselsdato);
        $DagensDato = new DateTime();
        $Alder = $DagensDato->diff($fodselsdato)->y;
        return $Alder;
    }

    //lager metode 3 for å sjekke at ting funker helt som det skal, denne gir registeringsdato
    public function getRegistreringsdato() {
        return $this->registreringsdato;
}
}

// eksempel på klassen og bruk
$bruker = new Bruker("Christian", "Eieland", "Lordkissa", "1997-07-21", "2021-09-01");
echo "Fullt navn: " . $bruker->getFulltNavn() . "<br>";
echo "Alder: " . $bruker->getAlder() . " år <br>";
echo "Registreringsdato: " . $bruker->getRegistreringsdato() . "<br>";
?>