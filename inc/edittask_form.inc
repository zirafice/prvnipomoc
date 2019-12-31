<center><h1>Změna žádosti </h1></center>
<form name="coverrequestedit" method="POST" action="index.php"> 
 <input type="hidden" name="askid" value="<?php echo $_POST["askid"];?>">
 <table><tr>
   <td><span class="havetobe">Jméno díla</span></td><td><input type="text" name="title" size=64 value="<?php echo $cover["title"];?>"></td></td>
 </tr><tr>
   <td><span  class="havetobe">Autor</span><br><span class="note">(ten, který má být na obálce)</span></td><td><input type="text" name="autor" size=64 value="<?php echo $cover["author"];?>"></td>
 </tr><tr>
   <td><span class="havetobe">Žánr</span></td><td><input type="text" name="zanr" size=32 value="<?php echo $cover["zanr"];?>"></td>
 </tr><tr>
    <td><span class="havetobe">Předpokládané zveřejnení díla</span></td>
    <td>
	<table>
	    <tr><td>Je vydáno:</td><td><input type="radio" name="deploydate" value=10 <?php echo $deployChecked[10];?> ></td></tr>
	    <tr><td>Do měsíce:</td><td><input type="radio" name="deploydate" value=7 <?php echo $deployChecked[7];?>></td></tr>
	    <tr><td>Do půl roku:</td><td><input type="radio" name="deploydate" value=5 <?php echo $deployChecked[5];?>></td></tr>
	    <tr><td>Do roka:</td><td><input type="radio" name="deploydate" value=3 <?php echo $deployChecked[3];?>></td></tr>
	    <tr><td>Nemám páru:</td><td><input type="radio" name="deploydate" value=1 <?php echo $deployChecked[1];?>></td></tr>
	    <tr><td>Na Wattpadu nikdy:</td><td><input type="radio" name="deploydate" value=0 <?php echo $deployChecked[0];?>></td></tr>
	</table>
    </td>
 <tr></tr>
   <td>Pocit, jakým by měl cover působit</td><td><input type="text" name="pocit" size=32 value="<?php echo $cover["pocit"];?>"></td>
 </tr><tr>
   <td><span class="havetobe">Stručný popis díla</span></td><td><textarea name="popis" cols=50 rows=10>
    <?php echo $cover["popis"];?>
   </textarea></td>
 </tr><tr>
   <td>Další info <br><span class="note">(postavy, vaše představy či požadavky, ...)</span></td><td><textarea name="info" cols=50 rows=10>
	<?php echo $cover["info"];?>
   </textarea></td>
 </tr><tr>
   <td><span class="havetobe">Wattpad uživatel</span></td><td><input type="text" name="wpuser" size=32 value="<?php echo $cover["wp_user"];?>"></td>
 </tr><tr>
   <td>E-mail</i></td><td><input type="text" name="email" size=64 value="<?php echo $cover["email"];?>"></td>
 </tr><tr>
   <td colspan=2 style="text-align: right"><input type="button" name="check_and_save" value="Odeslat" style="border: 1px solid black" onClick="VerifyCoverForm(document.coverrequestedit)"></td>
 </tr></table>
</form>

