<?php
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
$rodzaj2=$_POST['rodzaj2'];
$ser=$_POST['ser'];
$szynka=$_POST['Szynka'];
$boczek=$_POST['Boczek'];
$kurczak=$_POST['Kurczak'];
$ogorek=$_POST['Ogorek'];
$pomidor=$_POST['Pomidor'];
$kukurydza=$_POST['Kukurydza'];
$rozmiar2=$_POST['rozmiar2'];
$kelner2=$_POST['kelner2'];
$stolik2=$_POST['stolik2'];
$imie2=$_POST['imie2'];
$nazw2=$_POST['nazw2'];
$cena_s;$cena_s2;$cena_sz;$cena_sz2;$cena_b;$cena_b2;$cena_k;$cena_k2;$cena_o;$cena_o2;$cena_p;$cena_p2;$cena_kuk;$cena_kuk2;$cena_c;$cena_r;
echo 'Zamówiono pizze '."<br><br>"."Rozmiar: ".$rozmiar2."<br>"."Ciasto: ".$rodzaj2."<br><br>"."Składniki:"."<br>";
echo $ser." ".$szynka." ".$boczek." ".$kurczak." ".$ogorek." ".$pomidor." ".$kukurydza."<br><br>";
echo "Zamówienie przyjął kelner: ".$kelner2." do stolika nr ".$stolik2."<br>";
$ser2=0;
$szynka2=0;
$boczek2=0;
$kurczak2=0;
$ogorek2=0;
$pomidor2=0;
$kukurydza2=0;
if($ser==NULL) $ser=0;
if($szynka==NULL) $szynka=0;
if($boczek==NULL) $boczek=0;
if($kurczak==NULL) $kurczak=0;
if($ogorek==NULL) $ogorek=0;
if($pomidor==NULL) $pomidor=0;
if($kukurydza==NULL) $kukurydza=0;
if($ser=="Ser Pojedyncze") {
	$ser=1; 
	$pyt2="select id from dodatki where nazwa_dodatku='ser'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s=$asd["cena"];
		} else if ($rozmiar2="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
	$asd=$result->fetch_assoc();
	$cena_s=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s=$asd["cena"];
		}

}
if($ser=="SerPodwojne") {$ser=0;$ser2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny ser'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];
		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		}

}
if($ser=="Ser Podwojne") {$ser=0;$ser2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny ser'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];
		if($rozmiar2=="mala"){
			$pyt="select cena from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_s2=$asd["cena"];
		}
	}
if($szynka=="Szynka Pojedyncze") {$szynka=1;
	$pyt2="select id from dodatki where nazwa_dodatku='szynka'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz=$asd["cena"];
		}}
if($szynka=="Szynka Podwojne") {$szynka=0;$szynka2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójna szynka'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_sz2=$asd["cena"];
		}}
if($boczek=="Boczek Pojedyncze") {$boczek=1;
$pyt2="select id from dodatki where nazwa_dodatku='boczek'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b=$asd["cena"];
		}}
if($boczek=="Boczek Podwojne") {$boczek=0;$boczek2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny boczek'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_b2=$asd["cena"];
		}}
if($kurczak=="Kurczak Pojedyncze") {$kurczak=1;
$pyt2="select id from dodatki where nazwa_dodatku='kurczak'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k=$asd["cena"];
		}}
if($kurczak=="Kurczak Podwojne") {$kurczak=0;$kurczak2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny kurczak'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k2=$asd["cena"];;
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_k2=$asd["cena"];
		}}
if($ogorek=="Ogorek Pojedyncze") {$ogorek=1;
$pyt2="select id from dodatki where nazwa_dodatku='ogórek'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o=$asd["cena"];;
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o=$asd["cena"];
		}}
if($ogorek=="Ogorek Podwojne") {$ogorek=0;$ogorek2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny ogórek'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_o2=$asd["cena"];
		}}
if($pomidor=="Pomidor Pojedyncze") {$pomidor=1;
$pyt2="select id from dodatki where nazwa_dodatku='pomidor'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p=$asd["cena"];
		}}
if($pomidor=="Pomidor Podwojne") {$pomidor=0;$pomidor2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójny pomidor'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_p2=$asd["cena"];
		}}
if($kukurydza=="Kukurydza Pojedyncze") {$kukurydza=1;
$pyt2="select id from dodatki where nazwa_dodatku='kukurydza'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk=$asd["cena"];
		}}
if($kukurydza=="Kukurydza Podwojne") {$kukurydza=0;$kukurydza2=1;
$pyt2="select id from dodatki where nazwa_dodatku='podwójna kukurydza'";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["id"];

		if($rozmiar2=="mala"){
			$pyt="select*from ceny_dodatkow_mala where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk2=$asd["cena"];
		} else if ($rozmiar2=="srednia"){
			$pyt="select*from ceny_dodatkow_srednia where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk2=$asd["cena"];
		} else {
			$pyt="select*from ceny_dodatkow_duza where id=$id";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_kuk2=$asd["cena"];
		}}
if($rodzaj2=="cienkie"){
$pyt="select cena from rodzaj_ciasta where rodzaj_ciasta='cienkie'";
			$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_c=$asd["cena"];
}

if($rodzaj2=="grube"){
	$pyt="select cena from rodzaj_ciasta where rodzaj_ciasta='grube'";
	$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_c=$asd["cena"];
}
if($rozmiar2=="mala"){
	$pyt="select cena from rozmiar where id=1";
	$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_r=$asd["cena"];
}
if($rozmiar2=="srednia"){
	$pyt="select cena from rozmiar where id=2";
	$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_r=$asd["cena"];
}
if($rozmiar2=="duza"){
	$pyt="select cena from rozmiar where id=3";
$result = $conn->query($pyt);
			$asd=$result->fetch_assoc();
			$cena_r=$asd["cena"];
}
if($kelner2=="Grzegorz Winiarski"){
	$kelner2=1;
}
if($kelner2=="Marta Ziuta"){
	$kelner2=2;
}
if($kelner2=="Zuzanna Baran"){
	$kelner2=3;
}

$zamowienie="Kompozycja własna";
  $query= "insert into zamowinia set nazwa_pizzy_jesli_dotyczy='NULL',rozmiar='$rozmiar2',rodzaj_ciasta='$rodzaj2',ser=$ser,ser_podwojny=$ser2,szynka=$szynka,szynka_podwojny=$szynka2,boczek=$boczek,boczek_podwojny=$boczek2,kurczak=$kurczak,kurczak_podwojny=$kurczak2,ogorek=$ogorek,ogorek_podwojny=$ogorek2,pomidor=$pomidor,pomidor_podwojny=$pomidor2,kukurydza=$kukurydza,kukurydza_podwojny=$kukurydza2,kelner_id='$kelner2',stolik=$stolik2";
	$ins = $conn->query($query);
	if($ins==1) echo "<br><br>Dodano do bazy<br>"; else echo "Nie dodano";
	$cena_razem=$cena_s+$cena_s2+$cena_sz+$cena_sz2+$cena_b+$cena_b2+$cena_k+$cena_k2+$cena_o+$cena_o2+$cena_p+$cena_p2+$cena_kuk+$cena_kuk2+$cena_c+$cena_r;
	echo "Cena wynosi: ".$cena_razem;
	$cena_brutto=$cena_razem*0.77;
	$kelner_prowizja=$cena_razem*0.1;
	$data=date('y-m-d');
	$data1="20".$data;
	$query2= "insert into faktura set imie='$imie2',nazwisko='$nazw2',cena_brutto=$cena_brutto,cena_netto=$cena_razem,data='$data1',zamowienie='$zamowienie'";
	$ins2 = $conn->query($query2);
	if($ins2==1) echo "<br> Zakupu dokonano dnia: ".$data1.". Faktura zapisana w bazie. Twoje imię i nazwisko: ".$imie2." ".$nazw2;
	$klient3=$imie2.$nazw2;
	$query3 = "insert into temp set rozmiar='$rozmiar2',rodzaj_ciasta='$rodzaj2',ser=$ser,ser_podwojny=$ser2,szynka=$szynka,szynka_podwojny=$szynka2,boczek=$boczek,boczek_podwojny=$boczek2,kurczak=$kurczak,kurczak_podwojny=$kurczak2,ogorek=$ogorek,ogorek_podwojny=$ogorek2,pomidor=$pomidor,pomidor_podwojny=$pomidor2,kukurydza=$kukurydza,kukurydza_podwojny=$kukurydza2,data='$data1',klient='$klient3'";
	$ins3 = $conn->query($query3);
	$query4 ="insert into temp2 set kelner_id=$kelner2,kelner_cena=$cena_razem,kelner_prowizja=$kelner_prowizja";
	$ins4= $conn->query($query4);
?>