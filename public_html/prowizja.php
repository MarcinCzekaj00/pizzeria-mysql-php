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
$data=date('y-m-d');
$data1="20".$data;
$kelner1;
$kelner2;
$kelner3;
$sql = "select count(kelner_id),kelner_id from temp2 group by kelner_id";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo "Kelner o ID nr: ".$row["kelner_id"]." wykonał dziś - ".$row["count(kelner_id)"]." zamówień<br>";
                        }
$pyt2="select sum(kelner_prowizja) from temp2 where kelner_id=1";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$K1=$dsa["sum(kelner_prowizja)"];


$pyt3="select sum(kelner_prowizja) from temp2 where kelner_id=2";
$result2 = $conn->query($pyt3);
$dsaa=$result2->fetch_assoc();
$K2=$dsaa["sum(kelner_prowizja)"];

$pyt4="select sum(kelner_prowizja) from temp2 where kelner_id=3";
$result3 = $conn->query($pyt4);
$dsaaa=$result3->fetch_assoc();
$K3=$dsaaa["sum(kelner_prowizja)"];
echo" Prowizja kelnerów : (ID | Dodatkowy zarobek w zł zostanie wpisany do listy płac)(Puste pole oznacza brak zamówień)<br>";
echo"1 | ".$K1." <br> 2 | ".$K2." <br> 3 | ".$K3."<br>";

$p1="select stawka from kelnerzy where id=1";
$re1 = $conn->query($p1);
$a=$re1->fetch_assoc();
$s1=$a["stawka"];

$p2="select stawka from kelnerzy where id=2";
$re2 = $conn->query($p2);
$aa=$re2->fetch_assoc();
$s2=$aa["stawka"];

$p3="select stawka from kelnerzy where id=3";
$re3 = $conn->query($p3);
$aaa=$re3->fetch_assoc();
$s3=$aaa["stawka"];

$s1=$s1+$K1;
$s2=$s2+$K2;
$s3=$s3+$K3;

$query1="update kelnerzy set stawka=$s1 where id=1";
$query2="update kelnerzy set stawka=$s2 where id=2";
$query3="update kelnerzy set stawka=$s3 where id=3";
if($ins1 = $conn->query($query1)){
	if($ins2 = $conn->query($query2)){
		if($ins3 = $conn->query($query3)) {
			echo "Zarobek został wpisany a dotychczasowe wpisy usuniete"; $query2= "truncate table temp2";
						$ins2 = $conn->query($query2);}
	}
}
}else {echo "Brak danych, prosze najpierw zlozyc jakies zamowienie"; echo'<a href="baza.php"> POWRÓT </a>';}
?>