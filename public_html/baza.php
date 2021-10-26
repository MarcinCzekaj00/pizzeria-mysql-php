<html>

<head>
<title>Pizzeria</title>

</head>
<body>
<a href="nowapizza.php" style="font-size: 25px;color:black;margin:0 auto"> KLIKNIJ ABY ZAKTUALIZOWAC BAZE I DODAC POPULARNE PIZZE </a><br><br>
<a href="prowizja.php" style="font-size: 25px;color:black;margin:0 auto"> KLIKNIJ ABY ZAKTUALIZOWAC PLAC PRACOWNIKOW </a>
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

?>  <body background="jasne-tlo.jpg" style="padding-top: 150px">
    <table background="tlo.jpg" border="0" style="margin:auto;font-size: 20px;background-size: 90%;color: white;width: 80%;margin-top: 5px;">
    
        <tr>
            <td style="text-align: left;width: 20%;padding-left: 20px;padding-top: 30px;padding-bottom: 30px;font-size: 25px"><b>Pizza na cienkim cieście (grube ciasto +2zł</b>)</td>
            <td style="text-align: left;width: 60%;text-align: center;font-size: 25px"><b>Opis</b></td>
            <td style="text-align: right;width: 20%;text-align: center;font-size: 25px"><b>Rozmiar</b></td>
        </tr>
        <tr>
            <td style="text-align: right;"></td>
            <td style="text-align: right;"></td>
            <td style="text-align: center;"><?php 
                    $sql = "SELECT rozmiar FROM rozmiar";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo ' | '."<b>".$row["rozmiar"]."</b>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "    |    ";
                    echo "<br>";

            ?></td>
            </tr>
            <tr>

            <td style="text-align: center;"><?php 
                    echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";
                    echo "<br>";
                    

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";
                    
            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            </tr>
            <tr>

            <td style="text-align: center;"><?php echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=2";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=2";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=2";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <tr>

            <td style="text-align: center;"><?php echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            </tr>
            <tr>

            <td style="text-align: center;"><?php echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=4";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            </tr>
            <tr>

            <td style="text-align: center;"><?php echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=5";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";echo "<br>";

            ?>
            </td>
            </tr>
            <tr>

            <td style="text-align: center;"><?php echo "<br>";
                    $sql = "SELECT nazwa FROM standardowe_pizze where id=6";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["nazwa"];
                        }
                    } else {
                        echo "0 results";
                    }echo "<br>";
                    echo "<br>";

            ?>
            </td>
            <td style="text-align: left; padding-left: 20px">
                <?php echo "<br>";
                    $sql = "SELECT skladniki FROM standardowe_pizze where id=6";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["skladniki"];
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?>
            </td>
            <td style="text-align: center;">
                <?php echo "<br>";
                    $sql = "SELECT cena_mala,cena_srednia,cena_duza FROM ceny_standardowych_pizz where id=6";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena_mala"]." zł ".$row["cena_srednia"]." zł ".$row["cena_duza"]."zł";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";echo "<br>";echo "<br>";

            ?>
            </td>
            <?php
            $pyt="select count(id) from standardowe_pizze";
            $result = $conn->query($pyt);
            $asd=$result->fetch_assoc();
            $ilosc=$asd["count(id)"];
            while ($ilosc > 6){
                echo'<tr><td style="text-align: center;color:white"><br><br>';
                $sql2 = "SELECT nazwa FROM standardowe_pizze where id=$ilosc";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                         
                        while($row = $result2->fetch_assoc()) {
                            echo $row["nazwa"]; 
                        }
                    }
                            $ilosc--;
                echo '<br><br></td></tr>';
                echo '<td></td><td></td></tr><br><br>';
            }
                
                    echo "<br>";
                    echo "<br>";
                    

            ?>
            </tr>
            </tr>
            <tr >
            <td style="text-align: left;width: 20%;padding-left: 20px;"></td>
            <td style="text-align: left;width: 60%;text-align: center;font-size: 40px">Kompozycja własna</td>
            <td style="text-align: right;width: 20%;text-align: center;font-size: 25px"><b>Cena</b></td>
        </tr>
        <tr >
            <td style="text-align: center;width: 20%;padding-left: 20px;"></td>
            <td style="text-align: left;width: 60%;text-align: left;padding-left: 30px;"><br><b>Ciasto do wyboru:</b><br> <?php echo "<br>";
                    $sql = "SELECT rodzaj_ciasta FROM rodzaj_ciasta";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo "-".$row["rodzaj_ciasta"]."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?> </td>
            <td style="text-align: right;width: 20%;text-align: center"><?php echo "<br><br><br>";
                    $sql = "SELECT cena FROM rodzaj_ciasta ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena"]." zł"."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?></td>
        </tr> 
        <tr >
            <td style="text-align: center;width: 20%;padding-left: 20px;"></td>
            <td style="text-align: left;width: 60%;text-align: left;padding-left: 30px"><b>Rozmiar do wyboru:</b><br> <?php echo "<br>";
                    $sql = "SELECT rozmiar FROM rozmiar";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo "-".$row["rozmiar"]."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?> </td>
            <td style="text-align: right;width: 20%;text-align: center"><?php echo "<br>";
                    $sql = "SELECT cena FROM rozmiar ";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo $row["cena"]." zł"."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?></td>
        </tr>  
        <tr >
            <td style="text-align: center;width: 20%;padding-left: 20px;"></td>
            <td style="text-align: left;width: 60%;text-align: left;padding-left: 30px"><b>Dodatki do wyboru: (podwójne 2x droższe)</b><br> <?php echo "<br>";
                    $sql = "SELECT nazwa_dodatku FROM dodatki where ID in (1,2,3,4,5,6,7)";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                         
                        while($row = $result->fetch_assoc()) {
                            echo "-".$row["nazwa_dodatku"]."<br><br>";
                        }
                    } else {
                        echo "0 results";
                    }
                    echo "<br>";echo "<br>";

            ?> </td>
            <td style="text-align: right;width: 20%;text-align: center;font-size: 20px">Rozmiar:<br><b>mała,średnia,duża</b><br> <?php echo "<br>";
                    $sql = "SELECT cena FROM ceny_dodatkow_mala where ID in (1,2,3,4,5,6,7)";
                    $result = $conn->query($sql);
                    $sql2="SELECT cena FROM ceny_dodatkow_srednia where ID in (1,2,3,4,5,6,7)";
                    $result2 = $conn->query($sql2);
                    $result2->num_rows;
                    $sql3="SELECT cena FROM ceny_dodatkow_duza where ID in (1,2,3,4,5,6,7)";
                    $result3 = $conn->query($sql3);
                    $result3->num_rows;
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            while($row2 = $result2->fetch_assoc()){
                                    while($row3 = $result3->fetch_assoc()){
                                        echo $row["cena"]." zł"."\t"."/"." ".$row2["cena"]." zł"."\t"."/"." ".$row3["cena"]." zł"."<br><br>";
                                        $row = $result->fetch_assoc();
                                        $row2=$result2->fetch_assoc();
                                    }
                            }
                            
                        }
                    } else {
                        echo "0 results";
                    }

                    echo "<br>";echo "<br>";

            ?></td>
        </tr> 
    
    </table>
    <div id="center_button" style="margin:0 auto">
    <button onclick="location.href='zamowienie.php'" style="margin:0 auto;display:block;height: 100px;width: 400px;background-image: url(tlo.jpg);background-repeat: no-repeat;color:white;font-size: 34px ">ZAMÓW TUTAJ!</button>
</div>
<?php
$conn->close();
?>
</body>
</html>