
function retornarFecha()
{
		var dias= new Array ("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
		var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		var f=new Date();
		var cadena= dias[f.getDay()] + " , " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear();
		return cadena;
}
