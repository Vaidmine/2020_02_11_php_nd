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
        $dalinasiIS .= $i  . ",". " " ;
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
 
echo ' kvadratas iš 10x10 žvaigždučių, reikia nupiešti įstrižaines ?';
echo '<br>';

for ($i = 1; $i <= 10; $i++) {
    echo   "<span style='padding-right: 8px; color: rgb(0, 0, 255); font-weight: bold; font-size: 22;'> *  </span>". ($i);
    for ($a = 1; $a <= 9 ; $a++) { 
    echo "<span style='padding-right: 8px; color: rgb(0, 200, 255); font-weight: bold; font-size: 22;'> * </span>". ($a); 
    } 
    echo  '<br>';
}

 
    ?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 6 ****** </h4><br>;
<!-- <span style ='padding-right: 8px; color:brown;' > </style> -->

 <?php
// 6.	Metam monetą. 
// Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius.
// Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: 
// “S” jeigu iškrito skaičius ir “H” jeigu herbas. 
// Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
// a)	Iškritus herbui;
// b)	Tris kartus iškritus herbui;
// c)	Tris kartus iš eilės iškritus herbui;

echo '<br><br>Scenarijus A<br>';
$finish = false;
do{
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        $finish = true;
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
    }
} while(!$finish) ;
/*************************************/
echo '<br><br>Scenarijus B<br>';
$count = 0;
while($count < 3) {
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        $count++;
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
    }
}
/*************************************/
echo '<br><br>Scenarijus C<br>';
$newArr =[];
$end = false;
while(!$end) {
    $coin = rand(0, 1);
    if($coin == 0) {
        $coin = 'H';
        echo '<br>'.$coin;
        array_push($newArr, $coin);
        for ($i= 0; $i < count($newArr); $i++ ){
            for ($j = $i+1; $j < count($newArr) - 1; $j++){
                if($newArr[$j-1] == 'H' && $newArr[$j] == 'H' && $newArr[$j+1] == 'H'){
                    $end = true;
                    //break;
                }
            }
          }
    }else {
        $coin = 'S';
        echo '<br>'.$coin;
        array_push($newArr, $coin);
    }
}

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

?>

<h4 style="color:blue; padding-left:80px;"> ***** ND 8 ****** </h4><br>
<?php
// 8.	Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
// (https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. 
// Reikia padaryti, kad kiekviena rombo žvaigždutė 
// būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos turi keistis).

 

$x = 1;
echo "<div style='text-align:center;'>";
//  echo "<div style='text-offset: 50 px;'>";
 
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
?>
