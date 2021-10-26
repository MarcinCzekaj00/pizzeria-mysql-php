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
$nazwa;	
$pyt2="select max(id) from standardowe_pizze";
$result = $conn->query($pyt2);
$dsa=$result->fetch_assoc();
$id=$dsa["max(id)"];

$a=1;
$id=$id+$a;
				$sql = "select klient from temp where EXISTS(select rozmiar,rodzaj_ciasta,ser,ser_podwojny,szynka,szynka_podwojny,boczek,boczek_podwojny,kurczak,kurczak_podwojny,ogorek,ogorek_podwojny,pomidor,pomidor_podwojny,kukurydza,kukurydza_podwojny from temp group by rozmiar,rodzaj_ciasta,ser,ser_podwojny,szynka,szynka_podwojny,boczek,boczek_podwojny,kurczak,kurczak_podwojny,ogorek,ogorek_podwojny,pomidor,pomidor_podwojny,kukurydza,kukurydza_podwojny HAVING count(*) > 2)";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            $nazwa=$nazwa.$row["klient"];
                        }
                        echo "<br><br>Nowa nazwa pizzy to: ".$nazwa." - została dodana do bazy standardowych pizz";
                    	$query= "insert into standardowe_pizze set id=$id,nazwa='$nazwa'";
						$ins = $conn->query($query);
						$query2= "truncate table temp";
						$ins2 = $conn->query($query2);
                    } else {echo "Prosze najpierw złożyć przynajmniej 3 razy takie samo zamówienie (pizzy niestandardowej)"; echo'<a href="baza.php"> POWRÓT </a>';}
 
?>