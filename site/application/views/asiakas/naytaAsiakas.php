<h1>Asiakastiedot</h1>

<table border=1>

<tr>
<th>Etunimi</th>
<th>Sukunimi</th>
<th>Email</th>
<th>Muokkaa</th>
</tr>
<?php

foreach ($asiakkaat as $rivi) {
	echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['email'].'</td><td><a href="'.site_url('asiakas/naytaMuokattava').'/'.$rivi['id_asiakas'].'">Muokkaa</a></td></tr>';
}

?>

</table>