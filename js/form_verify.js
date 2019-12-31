<script language="JavaScript">
  function VerifyCoverForm(form2check){
    submitIT=1;
    
    if(form2check.elements["title"].value == ""){
        alert("Název díla musí být vyplněn.");
        form2check.elements["title"].focus();
	submitIT=0;
        return false;
    }

    if(form2check.elements["autor"].value == ""){
        alert("Jméno autora musí být vyplněno.");
        form2check.elements["autor"].focus();
        submitIT=0;
        return false;
    }

    if(form2check.elements["popis"].value == ""){
        alert("Stručný popis musí být vyplněn.");
        form2check.elements["popis"].focus();
        submitIT=0;
        return false;
    }

    if(form2check.elements["wpuser"].value == ""){
        alert("Wattpad uživatel autora musí být vyplněn.");
        form2check.elements["wpuser"].focus();
        submitIT=0;
        return false;
    }
    if (submitIT == 1) {
	form2check.submit();
    }
  }
</script>