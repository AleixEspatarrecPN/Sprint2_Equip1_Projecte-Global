function validar(tx) 
{ 
	var nMay = 0, nMin = 0, nNum = 0 
	var t1 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ" 
	var t2 = "abcdefghijklmnopqrstuvwxyz" 
	var t3 = "0123456789"
                   if (tx.length < 8) {
                            alert("La contrasenya, ha de tenir almenys 8 lletres");
                   } if (tx.length > 50) {
                            alert("La contrasenya, ha de tenir menys de 50 lletres");
                   } else {
                          //Aqui continua si la variable ya tiene mas de 5 letras
               	for (i=0;i<tx.length;i++) { 
			if ( t1.indexOf(tx.charAt(i)) != -1 ) {nMay++} 
			if ( t2.indexOf(tx.charAt(i)) != -1 ) {nMin++} 
			if ( t3.indexOf(tx.charAt(i)) != -1 ) {nNum++} 
		} 
		if ( nMay>0 && nMin>0 && nNum>0 ) 
		form.submit()
		else 
		{ alert("La seva contrasenya a de contenir almenys 5 caracters alfanumerics"); form.passNew.focus(); return; }
}
} 