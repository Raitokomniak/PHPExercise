<h1>Lisää asiakas</h1>

<?php 
	if (isset($ilmoitus))
	{
		echo $ilmoitus;
	}
?>
<FORM action ="<?php echo site_url('asiakas/lisaaAsiakas'); ?>" method="post">


<table>

<tr>
<td>Etunimi </td>
<td><input type="text" name="en"/></td>
</tr>
<tr>
<td>Sukunimi </td>
<td><input type="text" name="sn"/></td>
</tr>
<tr>
<td>Email </td>
<td><input type="text" name="email"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="btn" /></td>
</tr>

</table>

</FORM>