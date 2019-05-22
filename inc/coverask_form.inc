<center><h1>Žádost o cover </h1></center>
<form name="coverrequest" method="POST" action="index.php"> 
 <table><tr>
   <td><span class="havetobe">Jméno díla</span></td><td><input type="text" name="title" size=64></td></td>
 </tr><tr>
   <td><span  class="havetobe">Autor</span><br><span class="note">(ten, který má být na obálce)</span></td><td><input type="text" name="autor" size=64></td>
 </tr><tr>
   <td><span class="havetobe">Žánr</span></td><td><input type="text" name="zanr" size=32></td>
 </tr><tr>
    <td><span class="havetobe">Předpokládané zveřejnení díla</span></td>
    <td>
	<table>
	    <tr><td>Je vydáno:</td><td><input type="radio" name="deploydate" value=10></td></tr>
	    <tr><td>Do měsíce:</td><td><input type="radio" name="deploydate" value=7></td></tr>
	    <tr><td>Do půl roku:</td><td><input type="radio" name="deploydate" value=5></td></tr>
	    <tr><td>Do roka:</td><td><input type="radio" name="deploydate" value=3></td></tr>
	    <tr><td>Nemám páru:</td><td><input type="radio" name="deploydate" value=1 checked></td></tr>
	    <tr><td>Na Wattpadu nikdy:</td><td><input type="radio" name="deploydate" value=0></td></tr>
	</table>
    </td>
 <tr></tr>
   <td>Pocit, jakým by měl cover působit</td><td><input type="text" name="pocit" size=32></td>
 </tr><tr>
   <td><span class="havetobe">Stručný popis díla</span></td><td><textarea name="popis" cols=50 rows=10></textarea></td>
 </tr><tr>
   <td>Další info <br><span class="note">(postavy, vaše představy či požadavky, ...)</span></td><td><textarea name="info" cols=50 rows=10></textarea></td>
 </tr><tr>
   <td><span class="havetobe">Wattpad uživatel</span></td><td><input type="text" name="wpuser" size=32></td>
 </tr><tr>
   <td>E-mail</i></td><td><input type="text" name="email" size=64></td>
 </tr><tr>
   <td colspan=2 style="text-align: right"><input type="button" name="check_and_save" value="Odeslat" style="border: 1px solid black" onClick="VerifyCoverForm(document.coverrequest)"></td>
 </tr></table>
</form>

