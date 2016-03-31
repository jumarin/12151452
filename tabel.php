<html>
<head></head>
<title></title>
<body>
<table border='1' cellpadding="0" cellspacing="0" bordercolor="00 FF 00" style='colappse:0;' align='center' width='605   height="400"    '>
  <tr>
    <td height="34" colspan="4" bgcolor="00 FF 00">
	<center>
      <font face="sans-serif"><font color="#FFFFFF" colspan=3></div></font>
		</font>
    </center>	
	<center>
	  <font face="sans-serif"><font color="#FFFFFF">
	    <div align="center"></div></font>
		</font>
	  <table width="602" border="0" align="left" cellpadding="0" cellspacing="0">
        <tr>
          <td width="51"><font face="sans-serif"><font color="#FFFFFF"><b>rank</b></font></font></td>
          <td width="280"><font face="sans-serif"><font color="#FFFFFF"><b>movie</b></font></font></td>
          <td width="135"><font face="sans-serif"><font color="#FFFFFF"><b>downloads</b></font></font></td>
          <td width="129"><font face="sans-serif"><font color="#FFFFFF"><b>grosses</b></font></font></td>
        </tr>
      </table>
    </center>
  	</td>
  </tr>

<?php
for ($i=1; $i<=10; $i++){
	if ($i%2==1){
		$warna="90 EE 90";
	echo"<tr bgcolor='$warna'>
		<td height=34><center>$i</td>
		<td height=34 colspan=3>&nbspIm Jhony  
		&nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp 
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  5,000,000
		&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp $548,000,000
		</td></tr>";
	$i++;
	}
	else{
	$warna="white";
	}
	echo "<tr bgcolor='white'>
			<td height=34 width=43><center>$i
			</td>
		<td height=34 width=280> &nbspaslam 
			</td>
		<td height=34 width=129>&nbsp&nbsp&nbsp6,000,000</td>	
		<td height=34 width=129>&nbsp &nbsp &nbsp &nbsp  $334,000,000
			</td>
		</tr>";
}
?>
<tr>
<td height=25 colspan="4" bgcolor="#00 FF 00"><b><font color="#FFFFFF"> torrentfreak.com</font></b></td></tr>
</table>
</body>
</html>