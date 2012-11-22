	<script type="text/javascript">
	function validateForm()
	{
	var x=document.forms["regform"]["password"].value;
	var y=document.forms["regform"]["password2"].value;
	if (x != y)
	  {
	  alert("Lösenordet stämmer ej med det upprepade lösenordet");
	  return false;
	  }
	}
	</script>
		<div id="mainbox"> <!-- 3 kolumnerna ligger här -->
			<div id="vad">
			<h1>Välkommen <?php echo $user->name; ?></h1>
			<p>Du är nu inloggad. Du kan ändra dina uppgifter. Om du har bokat en monter kan du avboka den här. Det gör du genom att bocka av monter längst ner på formuläret.</p>
			<form action="index.php?api=update" method="post" name="regform" onsubmit="return validateForm()">
			<fieldset>
				<legend>Ändra dina uppgifter</legend>
				<table>
				<tr>
					<td><label for="pass">Nytt Lösenord:</label></td>
					<td><input type="password" name="password" id="pass" placeholder="Önskad lösenord"/></td>
				</tr>
				<tr>
					<td><label for="pass2">Upprepa Nytt Lösenord:</label></td>
					<td><input type="password" name="password2" id="pass2" placeholder="Önskad lösenord"/></td>
				</tr>
				<tr>
					<td><label for="post">E-post:</label></td>
					<td><input type="email" name="email" id="post" value="<?php echo $user->email; ?>"/></td>
				</tr>
				<tr>
					<td><label for="namn">Namn/Företagsnamn:</label></td>
					<td><input type="text" name="name" id="namn" value="<?php echo $user->name; ?>"/></td>
				</tr>
				<tr>
					<td><label for="address">Adress:</label></td>
					<td><input type="text" name="adress" id="adress" value="<?php echo $user->adress; ?>"/></td>
				</tr>
				<tr>
					<td><label for="pnummer">Postnummer:</label></td>
					<td><input type="number" name="postnummer" id="pnummer" value="<?php echo $user->postnummer; ?>"/></td>
				</tr>
				<tr>
					<td><label for="stad">Stad:</label></td>
					<td><input type="text" name="stad" id="stad" value="<?php echo $user->stad; ?>"/></td>
				</tr>
				<tr>
					<td><label for="monter">Monter (för företag): </label></td>
					<td><input type="checkbox" name="monter" id="monter" checked="<?php echo $user->monter; ?>"/></td>
				</tr>						
				</table>
				<button type="submit">
				<b>Spara ändringar</b>
				</button>
				</fieldset>
				</form>
		
			</div>
	</div> <!-- mainbox slut -->
