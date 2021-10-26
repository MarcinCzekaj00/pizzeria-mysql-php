
</!DOCTYPE html>
<html>
<head>
	<title>
		Zamów!
	</title>
</head>
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

?>
<body background="jasne-tlo.jpg" style="padding-top: 150px">
	<main style="text-align:center">
		<form action="zlozenie.php" method="post"><b style="font-size:50px;color:red">STANDARDOWA PIZZA</b> <br><br>
		<b style="font-size:20px">Wybierz rodzaj ciasta: <b/><br>
					<select id="rodzaj" name="rodzaj">
						<option value="cienkie">Cienkie</option>
						<option value="grube">Grube</option>
					</select><br><br>
		Wybierz standardowa pizzę: 	<br>
		<select id="pizza_standardowa" name="pizza_standardowa">
						<option value="Margherita">Margherita</option>
						<option value="Prosciuto">Prosciuto</option>
						<option value="Sorento">Sorento</option>
						<option value="Hawaii">Hawaii</option>
						<option value="Bimatella">Bimatella</option>
						<option value="Vegetariana">Vegetariana</option>
						<option value="kompozycja_wlasna">Brak</option>
					</select><br><br>
			Wybierz rozmiar: 	<br>
		<select id="rozmiar" name="rozmiar">
						<option value="mala">Mała</option>
						<option value="srednia">Średnia</option>
						<option value="duza">Duża</option>
					</select>
				<br>
				<b style="font-size:35px"> Kelner przyjmujący zamówienie : </b><br>
		<input type="radio" name="kelner" value="Grzegorz Winiarski" checked> Grzegorz Winiarski<br>
		<input type="radio" name="kelner" value="Marta Ziuta" > Marta Ziuta<br>
		<input type="radio" name="kelner" value="Zuzanna Baran" > Zuzanna Baran<br><br>
		<b style="font-size:35px"> Wybierz swój stolik : </b><br>
		<input type="radio" name="stolik" value="1" checked> 1 
		<input type="radio" name="stolik" value="2" > 2
		<input type="radio" name="stolik" value="3" > 3
		<input type="radio" name="stolik" value="4" > 4 <br><br>
		<b style="font-size:35px">Aby otrzymać fakture wpisz:</b><br>
			Imie:<br>
					<input type="text" name="imie"><br>
				Nazwisko:
				<br>
					<input type="text" name="nazw"><br>
					<input type="submit" name="submit" value="Zamów" style="font-size:20px"><br><br><br>
		</form>

		<form action="zlozenie-wlasne.php" method="post"><b style="font-size:50px;color:red">KOMPOZYCJA WŁASNA </b><br><br>
		<b style="font-size:35px">Wybierz rodzaj ciasta: </b><br><br>
			<input type="radio" name="rodzaj2" value="cienkie" checked> Cienkie
		<input type="radio" name="rodzaj2" value="grube" > Grube<br><br>
		<b style="font-size:35px">Wybierz rozmiar: </b><br><br>
		<input type="radio" name="rozmiar2" value="mala" checked> Mała
		<input type="radio" name="rozmiar2" value="srednia" > Średnia
		<input type="radio" name="rozmiar2" value="duza" > Duża
		<br><br>
		<b style="font-size:35px">Wybierz dodatki: </b><br><br>
	<input type="radio" name="ser" value="Ser Pojedyncze" >Ser Pojedyncze<input type="radio" name="ser" value="Ser Podwojne" >Ser Podwójne<br> <br>
	 <input type="radio" name="Szynka" value="Szynka Pojedyncze" >Szynka Pojedyncze <input type="radio" name="Szynka" value="Szynka Podwojne" >Szynka Podwójne<br> <br>
	  <input type="radio" name="Boczek" value="Boczek Pojedyncze" >Boczek Pojedyncze <input type="radio" name="Boczek" value="Boczek Podwojne" >Boczek Podwójne<br> <br>
	<input type="radio" name="Kurczak" value="Kurczak Pojedyncze" >Kurczak Pojedyncze <input type="radio" name="Kurczak" value="Kurczak Podwojne" >Kurczak Podwójne<br> <br>
	<input type="radio" name="Ogorek" value="Ogorek Pojedyncze" >Ogórek Pojedyncze <input type="radio" name="Ogorek" value="Ogorek Podwojne" >Ogórek Podwójne<br> <br>
	<input type="radio" name="Pomidor" value="Pomidor Pojedyncze" >Pomidor Pojedyncze <input type="radio" name="Pomidor" value="Pomidor Podwojne" >Pomidor Podwójne<br> <br>
	 <input type="radio" name="Kukurydza" value="Kukurydza Pojedyncze" >Kukurydza  Pojedyncze <input type="radio" name="Kukurydza" value="Kukurydza Podwojne" >Kukurydza Podwójne<br><br>
	 <b style="font-size:35px"> Kelner przyjmujący zamówienie : </b><br>
		<input type="radio" name="kelner2" value="Grzegorz Winiarski" checked> Grzegorz Winiarski<br>
		<input type="radio" name="kelner2" value="Marta Ziuta" > Marta Ziuta<br>
		<input type="radio" name="kelner2" value="Zuzanna Baran" > Zuzanna Baran<br><br>
		<b style="font-size:35px"> Wybierz swój stolik : </b><br>
		<input type="radio" name="stolik2" value="1" checked> 1 
		<input type="radio" name="stolik2" value="2" > 2
		<input type="radio" name="stolik2" value="3" > 3
		<input type="radio" name="stolik2" value="4" > 4 <br>
		<b style="font-size:35px">Aby otrzymać fakture wpisz:</b><br>
			Imie:<br>
					<input type="text" name="imie2"><br>
				Nazwisko:
				<br>
					<input type="text" name="nazw2"><br><br><br>
			<input type="submit" name="submit" value="Zamów" style="font-size:20px"/>

		</form>
</main>
</body>
</html>