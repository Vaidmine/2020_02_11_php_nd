<h4 style="color:blue; padding-left:80px;">***** ND 1 ****** </h4>
<?php
//1. Naršyklėje nupieškite linija iš 400 “*”. 
// a)	Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
// b)	Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

echo ' vientisa žvaigždučių linija ekrane (400 žvaigždučių):';
echo '<br>';
for ($i = 1; $i <= 400; $i++) {
    echo ' * ';
}
echo '<br><br>';
echo ' 10 linijų po 50 žvaigždučių ekrane:';
echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    // echo ' * '.$i;
    echo ' * ';
    for ($a = 1; $a <= 50 ; $a++) { 
    // echo ' *'.$a;
    echo ' *';
    }
    echo  '<br>';
}
  echo '<br>';
  
?>


<h4 style="color:blue; padding-left:80px;">***** ND 2 ****** </h4>
<?php
// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, 
// atspausdinkite juos atskirtus tarpais 
// ir suskaičiuokite kiek tarp jų yra didesnių už 150.  
// Skaičiai didesni nei 275 turi būti raudonos spalvos.

$daugiausnei150 = 0;
for ($i = 0; $i < 300; $i++) {
    $sk = rand(0,300). " ";
    if ($sk > 150) {
        $daugiausnei150++;
    }
   if ($sk > 275){
       echo "<span style = 'color:rgb(255, 100, 0); font-weight: bold; font-size: 22;';> $sk </span>";
   } else {
       echo $sk;
   }
}
echo '<br><br>';
echo "Skaiciu didesniu uz 150 kiekis: $daugiausnei150";
echo '<br><br>';

?>
 
 <h4 style="color:blue; padding-left:80px;"> ***** ND 3 ****** </h4>

<?php
// Vienoje eilutėje atspausdinkite visus skaičius 
// nuo 1 iki atsitiktinio skaičiaus 
// tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), 
// kurie dalijasi iš 77 be liekanos. 
// Skaičius atskirkite kableliais. 
// Po paskutinio skaičiaus kablelio neturi būti. 
// Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.
 
  $randomSK = rand(3000, 4000);
  $dalinasiIS = "77";
  for ($i= $dalinasiIS + 1; $i < $randomSK; $i++) { 
      if($i % 77 ===0){
        $dalinasiIS .= ",". " ". $i ;
      }
  }
 echo $dalinasiIS;
 echo '<br><br>';
 

?>
<h4 style="color:blue; padding-left:80px;"> ***** ND 4 ****** </h4>
 <?php
// Nupieškite kvadratą iš “*”, 
// kurio kraštines sudaro 100 “*”. 
// Panaudokite css stilių, 
// kad kvadratas ekrane atrodytų kvadratinis.
 
echo ' kvadratas is  10x10 žvaigždučių:';
echo '<br>';
for ($i = 0; $i <= 10; $i++) {
    echo   "<span style='padding-right: 8px; color: rgb(0, 0, 255); font-weight: bold; font-size: 22;'> * </span>" . "<span style='font-size:10;'> $i </span>" ;
    for ($a = 0; $a <= 9 ; $a++) { 
    echo "<span style='padding-right: 8px; color: rgb(0, 200, 255); font-weight: bold; font-size: 22;'> * </span>". "<span style='font-size:10;'> $a </span>" ;
    }
    echo  '<br>';
}
 

?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 5 ****** </h4>

<?php
// Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
echo ' kvadratas is  10x10 žvaigždučių su įstrižainėmis';
echo  '<br>';
for ($i = 1; $i < 11; $i++) {
    // echo   "<span style='padding-right: 8px; color: rgb(0, 0, 255); font-weight: bold; font-size: 22;'> *  </span>";
    for ($a = 1; $a <= 10 ; $a++) { 
        if($a == $i || $a == 11 - $i){
    echo "<span style='padding-right: 10px; color: rgb(255, 0, 0); font-weight: bold; font-size: 22;'> * </span>"; 
    } else {
        echo "<span style='padding-right: 10px; color: rgb(0, 200, 255); font-weight: bold; font-size: 22;'> * </span>"; 
    }
}
    echo  '<br>';
}

echo '<br>';
    ?>


<h4 style="color:blue; padding-left:80px;"> ***** ND 6 ****** </h4><br>
<!-- <span style ='padding-right: 8px; color:brown;' > </style> -->

 <?php
// 6.	Metam monetą. 
// Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius.
// Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: 
// “S” jeigu iškrito skaičius 
// ir “H” jeigu herbas. 
// Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// a)	Iškritus herbui;
// b)	Tris kartus iškritus herbui;
// c)	Tris kartus iš eilės iškritus herbui;

echo '<br> ******** variantas A ***********';
echo '<br>';
do {
    $krentaMoneta = rand(0,1);
} while ($krentaMoneta == 1);
echo "iškrito herbas: H <br>";

echo '<br>******** variantas A dar kitas ***********';
echo '<br>';
$herbas = 0;
$kartai = 0;
while($herbas < 1) {
    $random = rand(0, 1);
    if($random == 0) {
        $herbas++;
        echo 'H' . '<br>';
        $kartai++;
    } else {
        echo 'S' . '<br>';
        $kartai++;
    }
}
echo 'reikejo ' . $kartai . 'kartų  kol iskrito H';

echo '<br>******** variantas B ***********';
echo '<br>';
$skaiciuojam = 0;
$metimai = 0;
while($skaiciuojam < 3) {
    $random = rand(0, 1);
    if($random == 0) {
        $skaiciuojam++;
        echo 'H' . '<br>';
        $metimai++;
    } else {
        echo 'S' . '<br>';
        $metimai++;
    }
}
echo 'reikejo ' . $metimai . ' kartų, kol iskrito H tris kartus';

echo '<br>******** variantas C ***********';
echo '<br>';
$herbas = 0;
$metimai = 0;
while($herbas < 3) {
    $moneta = rand(0, 1);
    if($moneta) {
        $herbas++;
        echo 'iskrito H' . '<br>';
        $metimai++;
    } 
    else {
        $herbas = 0;
        echo 'iskrito S' . '<br>';
        $metimai++;
    }
}
echo 'Reikejo ' . $metimai . ' kol iskrito H is eiles';

// do {
//     $krentaMoneta1 = rand(0,1);
// } while ($krentaMoneta1 == 1 );
//     { if ($krentaMoneta1 % 3 == 1 )
//     echo ("3 kartus iškrito herbas: H <br>") ;
// }


// echo "iškrito herbas: H <br>";
// echo str_repeat("iškrito herbas: H <br>", 3) ;

?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 7 ****** </h4><br>
<?php
// Kazys ir Petras žaidžiai šaškėm.
// Petras surenka taškų kiekį nuo 10 iki 20,
// Kazys surenka taškų kiekį nuo 5 iki 25. 
// Vienoje eilutėje išvesti žaidėjų vardus su taškų kiekiu ir “Partiją laimėjo: laimėtojo vardas”. 
// Taškų kiekį generuokite funkcija rand(). 
// Žaidimą laimi tas, kas greičiau surenka 222 taškus. 
// Partijas kartoti tol, kol kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų.

$taskaiKazio = 0;
$taskaiPetro = 0;
$taskai = 0;

while ($taskaiKazio < 222 && $taskaiPetro < 222) {
    $kazys = rand(10, 20);
    $petras = rand(5, 25);
    if($kazys > $petras) {
        echo 'partija laimejo Kazys ' . $kazys . '<br>'; 
        $taskaiKazio += $kazys;
    } else if ($kazys < $petras) {
        echo 'partija laimejo Petras ' . $petras . '<br>';
        $taskaiPetro += $petras;
    }
}
if($taskaiKazio > $taskaiPetro) {
    echo 'laimejo Kazys ' . $taskaiKazio;
} else {
    echo 'laimejo Petras ' . $taskaiPetro;
}

?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 8 ****** </h4><br>
<?php
// 8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. 
// Reikia padaryti, kad kiekviena rombo žvaigždutė 
// būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

 

$x = 1;
echo "<div style='text-align:center;'>";
//  echo *"<div style='text-offset: 50 px;'>";
 
for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < $x; $j++) {
            echo "<span style='padding-left: 30px; font-weight: bold; font-size: 22; color: rgb(".rand(0, 255).",". rand(0, 255).",". (255).");'> * </span>";
        }
        $x++;
        echo "<br>";
}

 
$x--;
for ($i = 20; $i >= 0; $i--) {
    for ($j = $x; $j >= 0; $j--) {
        echo "<span style='padding-left: 30px; font-weight: bold; font-size: 22; color: rgb(".rand(255, 0).",". rand(255, 0).",". (255).");'> * </span>";
    }
    $x--;
    echo "<br>";
}
echo "</div>";
echo '<br><br>';


?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 9 ****** </h4><br>
<?php
// Panaudokite funkciją microtime(). Paskaičiuokite kiek sekundžių užtruks kodą:
// $c = "10 bezdzioniu \n suvalge 20 bananu.";
// Įvykdyti 1 milijoną kartų ir palyginkite kiek užtruks įvykdyti kodą: 
// $c = '10 bezdzioniu \n suvalge 20 bananu.';
// (Stringas viengubose ir dvigubose kabutėse)

$startTime = microtime(true);

for($i = 0; $i < 1000000; $i++) {
    $c = "10 beždžionių \n suvalgė 20 bananų. <br>";
}
$kiekUztruko = microtime(true) - $startTime;
echo 'pirmas laikas' . $kiekUztruko . '<br>';

$startTimeTwo = microtime(true);

for($i = 0; $i < 1000000; $i++) {
    $c = '10 beždžionių \n suvalgė 20 bananų.' . '<br>';
   
}
echo '(Stringo rašymui naudojamos dvigubos kabutės) <br>';
$kiekUztrukoTwo = microtime(true) - $startTimeTwo;
echo 'antras laikas' . (microtime(true) - $startTimeTwo) . '<br>';
echo '(Stringo rašymui naudojamos viengubos kabutės) <br>';
echo '<br>';

if($kiekUztruko > $kiekUztrukoTwo) {
    echo 'Su dvigubom kabutem uztrunka ilgiau';
} else if ($kiekUztruko < $kiekUztrukoTwo) {
    echo 'Su viengubom kabutem uztrunka ilgiau' . '<br>';
}


?>


<h4 style="color:blue; padding-left:80px;"> ***** ND 10 ****** </h4><br>
<?php
// 10.	Sumodeliuokite vinies kalimą. 
//Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. 
// Vinies ilgis 8.5cm (pilnai sulenda į lentą).
// a)	“Įkalkite” 5 vinis mažais smūgiais. 
// Vienas smūgis vinį įkala 5-20 mm.
// Suskaičiuokite kiek reikia smūgių.
// b)	“Įkalkite” 5 vinis dideliais smūgiais. 
// Vienas smūgis vinį įkala 20-30 mm, 
// bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), 
// kad smūgis nepataikys į vinį. 
// Suskaičiuokite kiek reikia smūgių.

$maziSmugiai = 0;
for ($i = 0; $i < 5; $i++) {
    $viniesIlgis = 0;
    while ($viniesIlgis < 85) {
        $viniesIlgis += rand(5, 20);
        $maziSmugiai++;
    }
}
echo 'Reikėjo ' . $maziSmugiai . ' smūgių kol vinis buvo įkalta' . '<br>';

$dideliSmugiai = 0;
for ($i = 0; $i < 5; $i++) {
    $viniesIlgis = 0;
    while ($viniesIlgis < 85) {
        $tikimybe = rand(0, 1);
        if($tikimybe == 0) {
            $dideliSmugiai += 0;
        } else if ($tikimybe == 1) {
            $viniesIlgis += rand(20, 30);
            $dideliSmugiai++;
        }
    }
}
echo 'Reikėjo ' . $dideliSmugiai . ' smūgių kol vinis buvo įkalta' . '<br>';


?>
