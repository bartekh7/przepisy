<?php

	session_start();
	
	
?>


<!DOCTYPE html>
<html lang="pl">

<head>
	<meta charset="UTF-8">
	<title> Moje przepisy</title>
	<meta name="description" content "Lista najwspanialszych przepisów kulinarnych ever :D" />
	<meta name="keywords" content "przepisy kulinarne, najlepsze potrawy, przepisy"  />
	<meta http-equiv="X-UA-Compatible" content="IE-edge, chrome=1" />

	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:400,600&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
</head>

<body>

	<div id="mainpack">
	
		<div class="mail"> 
			<a href="https://mail.google.com/mail/?shva=1#inbox" class="medialinki" target="_blank">
				<i class="icon-mail"></i>
			</a>
		</div>
				
		<div class="fb"> 
		<a href="https://www.facebook.com/" class="medialinki" target="_blank">
			<i class="icon-facebook"></i>
		</a>
		</div>
				
		<div class="tt">
		<a href="https://twitter.com/" class="medialinki" target="_blank">
			<i class="icon-twitter"></i>
		</a>
		</div>
			
		<div id="login">
		
			<?php include('inc/menu2.php'); ?>
				
		</div>
			
		<div style="clear:both"></div>		
		
		<?php include('inc/menu.php'); ?>
		
		<div id="searchname">
			Znajdź przepis
		</div>
		
		<div id="searchfield">
		<form action="szukaj.php" method="post">
			<input type="text" name="searchin" size=70 placeholder="Wpisz szukany przepis" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<input type="submit" value="Szukaj" style="width:150px;" />
			</form>
		</div>
		
		<div style="clear:both"></div>	
		
		<div class="leftbar">
			
			<div id="title">
				Kategorie
			</div>
			
			<div id="catmenu">
			
		<?php include('inc/menuKategorie.php'); ?>
				
			</div>
		</div>
		
		 <div class="rightbar2">
				
				<div id="recipe">
				
					<?php include('inc/moje_szukaj.php'); ?>
				
				</div>
				
				<div id="addrecipe">
				
				<form action="dodaj.php" method="post">
				
					Nazwa: 
					<br> 
					<input type="text" name="nazwa" style="width:600px;" required />
					<br><br>
									
					Sposób przygotowania:
					
					<br>
					<textarea name="sposob" cols="73" rows="6"></textarea>	
					<br><br>
									
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Kategoria &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Poziom trudności: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Czas
					
					<br>
					&nbsp;&nbsp;&nbsp;&nbsp; 
					<select name="kategoria">
						<option value"1">Ciasta i ciastka</option>
						<option value"18">Dania główne</option>
						<option value"3">Desery</option>
						<option value"4">Drinki</option>
						<option value"5">Makarony</option>
						<option value"6">Napoje</option>
						<option value"7">Pizza</option>
						<option value"20">Potrawy mączne</option>
						<option value"21">Potrawy mięsne</option>
						<option value"8">Potrawy z grilla</option>

						<option value"11">Przetwory</option>
						<option value"12">Ryby</option>
						<option value"13">Sosy</option>
						<option value"14">Zupy</option>
					</select>	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								
					<select name="poziom">
						<option value"1">Łatwe</option>
						<option value"2">Średnie</option>
						<option value"3">Trudne</option>
					</select>	
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
					<select name="czas">
						<option value"15">15 minut</option>
						<option value"30">30 minut</option>
						<option value"45">45  minut</option>
						<option value"60">60  minut</option>
						<option value"75">1 godzina</option>
						<option value"90">1 godzina 15  minut</option>
						<option value"105">1.5 godziny</option>
					</select>		
					<br><br>
					
				
					<input type="submit" value="Dodaj przepis" style="width:140px;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					
				
				</form>
				
				<br>
			
		</div>
		
		<div style="clear:both"></div>	
				
		<div id="stopka">
			<div class="footer">
				2015 &copy; Copyright by BHandGL 
			</div>
		</div>
		
	</div>
	
</body>

</html>