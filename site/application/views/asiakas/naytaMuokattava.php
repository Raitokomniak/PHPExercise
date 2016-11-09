<h1>Muokkaa asiakasta</h1>

<?php 
	if (isset($ilmoitus))
	{
		echo $ilmoitus;
	}
?>
<FORM action ="<?php echo site_url('asiakas/muokkaaAsiakas'); ?>" method="post">


<table>

<tr>
<td>Etunimi </td>
<td><input type="text" name="en" value="<?php  echo  $asiakas[0]['etunimi'];  ?>" /></td>
</tr>
<tr>
<td>Sukunimi </td>
<td><input type="text" name="sn" value="<?php  echo  $asiakas[0]['sukunimi'];  ?>"/></td>
</tr>
<tr>
<td>Email </td>
<td><input type="text" name="email" value="<?php  echo  $asiakas[0]['email'];  ?>"/>
<input type="hidden" name="id" value="<?php  echo  $asiakas[0]['id_asiakas'];  ?>"/>
</td>

</tr>
<tr>
<td></td>
<td><input type="submit" name="btn" /></td>
</tr>

</table>

</FORM>