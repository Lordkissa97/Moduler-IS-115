<?php
//lage arrayen de forespurte nøklene
$matrise = [
    "0"=> "nøkkel 0",
    "3"=> "nøkkel 3", 
    "5"=> "nøkkel 5",
    "7"=> "nøkkel 7",
    "8"=> "nøkkel 8",
    "15"=> "nøkkel 15"
];

//Skriv ut med print_(r)
echo "Utskrift med print_(r):<br>";
print_r($matrise);

//utskrift med bruk av foreach løkke
echo "<br><br> Utskrift med foreachløkke: <br>";
foreach ($matrise as $key => $value) {
    echo "Nøkkel: ". $key ."--> Verdi: ". $value ."<br>";
}
?>
