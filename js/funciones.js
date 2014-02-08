if (!Array.prototype.indexOf)
{
  Array.prototype.indexOf = function(elt /*, from*/)
  {
    var len = this.length >>> 0;

    var from = Number(arguments[1]) || 0;
    from = (from < 0)
         ? Math.ceil(from)
         : Math.floor(from);
    if (from < 0)
      from += len;

    for (; from < len; from++)
    {
      if (from in this &&
          this[from] === elt)
        return from;
    }
    return -1;
  };
}

var nospecial=/^[A-Za-z ]$/;
function passwordStrength(password)
{
	var desc = new Array();
	/*desc[0] = "Muy debil";
	desc[1] = "Debil";
	desc[2] = "Mejor";
	desc[3] = "Medio";
	desc[4] = "Fuerte";
	desc[5] = "Muy Fuerte";
    */

	var score   = 0;

	//if password bigger than 8 give 1 point
	if (password.length > 8){
		if (password.length > 9) score++;
	
		//if password has both lower and uppercase characters give 1 point	
		if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;
	
		//if password has at least one number give 1 point
		if (password.match(/\d+/)) score++;
	
		//if password has at least one special caracther give 1 point
		if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;
	
		//if password bigger than 12 give another 1 point
		if (password.length > 12) score++;
	     
         return "OK";
		 //document.getElementById("passwordDescription").innerHTML = desc[score];
		 //document.getElementById("passwordStrength").className = "strength" + score;
	}
    else{
       return "Mayor a 8 caracteres";
    }
}
var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        specialKeys.push(9); //Tab
        specialKeys.push(46); //Delete
        specialKeys.push(36); //Home
        specialKeys.push(35); //End
        specialKeys.push(37); //Left
        specialKeys.push(39); //Right
function restrictCharacters(myfield, e, restrictionType) {
    

    var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
    var ret = ((keyCode >= 65 && keyCode <= 90) || keyCode==32 || (keyCode >= 97 && keyCode <= 122) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
	
	if(keyCode==225 || keyCode==233  || keyCode==237  || keyCode==243  || keyCode==250  || keyCode==241)
	{
		return true
	}else{
		return ret;
		}
	
	//alert(keyCode);
	
    
}