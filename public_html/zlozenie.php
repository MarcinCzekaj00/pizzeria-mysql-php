<?php
$rodzaj=$_POST['rodzaj'];
$pizza_standardowa=$_POST['pizza_standardowa'];
$rozmiar=$_POST['rozmiar'];
$kelner=$_POST['kelner'];
$stolik=$_POST['stolik'];
$imie=$_POST['imie'];
$nazw=$_POST['nazw'];
$cena_p;
echo 'Zamówiono pizze: '. $pizza_standardowa."<br>"."Rozmiar: ".$rozmiar."<br>"."Ciasto: ".$rodzaj."<br><br>";
echo "Zamówienie przyjął kelner: ".$kelner." do stolika nr ".$stolik;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
	if($kelner=="Grzegorz Winiarski"){
	$kelner=1;
}
if($kelner=="Marta Ziuta"){
	$kelner=2;
}
if($kelner=="Zuzanna Baran"){
	$kelner=3;
}
	$query = "insert into zamowinia set nazwa_pizzy_jesli_dotyczy='$pizza_standardowa',rozmiar='$rozmiar',rodzaj_ciasta='$rodzaj',ser=0,ser_podwojny=0,szynka=0,szynka_podwojny=0,boczek=0,boczek_podwojny=0,kurczak=0,kurczak_podwojny=0,ogorek=0,ogorek_podwojny=0,pomidor=0,pomidor_podwojny=0,kukurydza=0,kukurydza_podwojny=0,kelner_id='$kelner',stolik=$stolik";
	$ins = $conn->query($query);
	if($ins==1) echo "<br><br>Dodano do bazy"; else echo "Nie dodano";
				$pyt2="select id from standardowe_pizze where nazwa='$pizza_standardowa'";
				$result = $conn->query($pyt2);
				$dsa=$result->fetch_assoc();
				$id=$dsa["id"];
	if($rozmiar=="mala"){
			$pyt="select cena_mala from ceny_standardowych_pizz where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena_mala"];
		} else if ($rozmiar=="srednia"){
			$pyt="select cena_srednia from ceny_standardowych_pizz where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena_srednia"];
		} else {
			$pyt="select cena_duza from ceny_standardowych_pizz where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena_duza"];
		}
if($kelner=="Grzegorz Winiarski"){
	$kelner=1;
}
if($kelner=="Marta Ziuta"){
	$kelner=2;
}
if($kelner=="Zuzanna Baran"){
	$kelner=3;
}
$zamowienie=$pizza_standardowa;
		echo "<br>Cena wynosi: ".$cena_p;
		$cena_brutto=$cena_p*0.77;
		$data=date('y-m-d');
		$data1="20".$data;
		$kelner_prowizja=$cena_p*0.1;
		$query2= "insert into faktura set imie='$imie',nazwisko='$nazw',cena_brutto=$cena_brutto,cena_netto=$cena_p,data='$data1',zamowienie='$zamowienie'";
		$ins2 = $conn->query($query2);
	if($ins2==1) echo "<br> Zakupu dokonano dnia: ".$data1.". Faktura zapisana w bazie. Twoje imię i nazwisko: ".$imie." ".$nazw;
	$query4 ="insert into temp2 set kelner_id=$kelner,kelner_cena=$cena_p,kelner_prowizja=$kelner_prowizja";
	$ins4= $conn->query($query4);

}

?>