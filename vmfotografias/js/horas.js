function Tempo(){
	var data = new Date();
	var sem = data.getDay();
	var dia = data.getDate();
	var mes = data.getMonth();
	var ano = data.getFullYear();  
	var hora = data.getHours();
	var minuto = data.getMinutes();
	var seg = data.getSeconds();

	if (seg < 10) {
	  seg = "0" + seg;
	}
	if (minuto < 10) {
	  minuto = "0" + minuto;
	}

	m = new Array()
	m[0] = "Janeiro"
	m[1] = "Fevereiro"
	m[2] = "Março"
	m[3] = "Abril"
	m[4] = "Maio"
	m[5] = "Junho"
	m[6] = "Julho"
	m[7] = "Agosto"
	m[8] = "Setembro"
	m[9] = "Outubro"
	m[10] = "Novembro"
	m[11] = "Dezembro"

	d = new Array()
	d[0] = "Domingo"
	d[1] = "Segunda-feira"
	d[2] = "Terça-feira"
	d[3] = "Quarta-feira"
	d[4] = "Quinta-feira"
	d[5] = "Sexta-feira"
	d[6] = "Sábado"

	
	
	 document.getElementById('semana', 'data').innerText = 
	(d[sem] + ", " + dia + " de " + m[mes] + " de " + ano);
	
	 document.getElementById('hora').innerText = 
	(hora + ":" + minuto + ":" + seg);
	
	 setTimeout("Tempo()", "1000");  
}	
		