<div id="main_content">
	<div id="mainbox">
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
	<form action="index.php?api=register" method="post" name="regform" onsubmit="return validateForm()">
		<fieldset>
		<legend>Skapa ett konto</legend>
		<table>
		<tr>
			<td><label for="name">Användarnamn:</label></td>
			<td><input type="text" name="username" id="name" placeholder="Önskad användarnamn"/></td>
		</tr>
		<tr>
			<td><label for="pass">Lösenord:</label></td>
			<td><input type="password" name="password" id="pass" placeholder="Önskad lösenord"/></td>
		</tr>
		<tr>
			<td><label for="pass2">Upprepa Lösenord:</label></td>
			<td><input type="password" name="password2" id="pass2" placeholder="Önskad lösenord"/></td>
		</tr>
		<tr>
			<td><label for="post">E-post:</label></td>
			<td><input type="email" name="email" id="post" placeholder="mail@mail.se"/></td>
		</tr>
		<tr>
			<td><label for="namn">Namn/Företagsnamn:</label></td>
			<td><input type="text" name="name" id="namn" placeholder="Namn/Företagsnamn"/></td>
		</tr>
		<tr>
			<td><label for="address">Adress:</label></td>
			<td><input type="text" name="adress" id="adress" placeholder="Storgatan 2"/></td>
		</tr>
		<tr>
			<td><label for="pnummer">Postnummer:</label></td>
			<td><input type="number" name="postnummer" id="pnummer" placeholder="32333"/></td>
		</tr>
		<tr>
			<td><label for="stad">Stad:</label></td>
			<td><input type="text" name="stad" id="stad" placeholder="Kalmar"/></td>
		</tr>
		<tr>
			<td><label for="monter">Monter (för företag): </label></td>
			<td><input type="checkbox" name="monter" id="monter"/></td>
		</tr>						
		</table>
		<button type="submit">
		<b>Skapa konto</b>
		</button>
		</fieldset>
	</form>
	<p>Har du redan ett konto? <a href="?p=login">Logga In</a></p>
	</div>
</div>