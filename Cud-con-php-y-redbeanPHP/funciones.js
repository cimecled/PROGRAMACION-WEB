
		function totales(){
			var sub = 0;
			var iva = 0;
			for (var i = 0; i < document.form1.valor.length; i++){
				if(document.form1.valor[i].value!==""){
					sub = sub + parseFloat(document.form1.valor[i].value);
				}
			}
			document.getElementById('subtotal').value=sub;
			//Calulo del IVA
			if(document.getElementById('subtotal').value!==""){
				sub = parseFloat(document.getElementById('subtotal').value);
				iva = sub * 0.12;
				document.getElementById('iva').value = iva;
			}
			//Calculo Total
			document.getElementById('total').value=sub+iva;
			
		}
		
		
        function sumacampos(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampoaSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampoaSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampoaSumar[" + i + "].value"));
				}
				document.getElementById('MiLabelTOTAL').value = suma;
			}
			totales();
		}

		function sumacampos2(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampaSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampaSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampaSumar[" + i + "].value"));
				}
				document.getElementById('LabelTOTAL').value = suma;
			}
			totales();
		}

		function sumacampos3(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampasSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampasSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampasSumar[" + i + "].value"));
				}
				document.getElementById('MLabelTOTAL').value = suma;
			}
			totales();
		}

		function sumacampos4(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampadSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampadSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampadSumar[" + i + "].value"));
				}
				document.getElementById('LLabelTOTAL').value = suma;
			}
			totales();
		}

		function sumacampos5(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampatSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampatSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampatSumar[" + i + "].value"));
				}
				document.getElementById('TLabelTOTAL').value = suma;
			}
			totales();
		}

		function sumacampos6(id)
		{
			var suma = parseFloat(eval("document.getElementById('" + id + "').value"));
			for (var i = 0; i < document.form1.CampatSumar.length; i++)
			{
				if (eval("document.getElementById('" + id + "').id") !== eval("document.form1.CampagSumar[" + i + "].id"))
				{
					suma = suma * parseFloat(eval("document.form1.CampagSumar[" + i + "].value"));
				}
				document.getElementById('GLabelTOTAL').value = suma;
			}
			totales();
		}

		function validartexto() {
			var texto = document.getElementById("textocliente").value;
			var dato = texto.length;
			var valor;
			var acu = 0;

			if (texto === "") {
				alert("En el campo Nombre del cliente no has ingresado dato");
			}
			else {
				for (i = 0; i < dato; i++) {
					valor = texto.substring(i, i + 1);
					if (valor == 0 || valor == 1 || valor == 2 || valor == 3 || valor == 4 || valor == 5 || valor == 6 || valor == 7 || valor == 8 || valor == 9) {
						acu = acu + 1;
					}
				}
				if (acu !== dato) {
					alert("El nombre del cliente esta correctamente ingresado")
				} else {
					alert("El nombre del cliente contiene  numeros ingrese otraves.");
				}
			}
		}

		function validar_cedula_o_ruc() {
			var text = document.getElementById("cedula").value;
			var cant = text.length;
			var acu2 = 0;
			var porc;
			if (text == "") {
				alert("No has ingresado ningun dato en el campo cedula o ruc.");
			}
			else {
				if (cant == 10) {
					for (i = 0; i < 9; i++) {
						caracteractual = parseInt(text.charAt(i));
						if ((i + 1) % 2 == 0) {
							acu2 += caracteractual;
						} else {
							acu2 += ((caracteractual * 2) >= 10) ? (caracteractual * 2) - 9 : (caracteractual * 2);
						}
					}
					while (acu2 > 0) {
						acu2 -= 10;
					}
					if (!(parseInt(text.charAt(9)) == (acu2 * -1))) {
						alert("Su cedula es incorrecta!!");
					}
					else {
						alert("La cedula esta escrita correctamente");
					}
				}
				else {
					if (cant == 13) {
						porc = text.substring(10, 13)
						if (porc == "000") {
							alert("El ruc es  correctao");
						} else {
							alert("El ruc es incorrecto");
						}
					}
					else {
						if (cant < 10) {
							alert("faltan algunos  numeros en la cedula ");
						}
					}
				}
			}
		}

		function valida_telefono() {
			var number = document.getElementById("numero").value;
			var canti = number.length;
			var porcio;
			var acu3 = 0;
			if (number == "") {
				alert("En el campo telefono no ha ingresado datos");
			} else {
				for (i = 0; i < canti; i++) {
					porcio = number.substring(i, i + 1);
					if (porcio == "0" || porcio == "1" || porcio == "2" || porcio == "3" || porcio == "4" || porcio == "5" || porcio == "6" || porcio == "7" || porcio == "8" || porcio == "9") {
						acu3++;
					}
				}
				if (acu3 == canti) {
					alert("Su telefono es correcto ");
				} else {
					alert("No pongas texto solo numeros");
				}
			}
		}

		function direccion() {
			var direc = document.getElementById("direction").value;
			if (direc == "") {
				alert("En el campo direccion no has ingresado datos");
			}
		}


