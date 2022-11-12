/**
     * Array con las imagenes y enlaces que se iran mostrando en la web
     */
 var imagenes=new Array(
	['Principal/img1.jpg'],
	['Principal/img2.jpg'],
	['Principal/img3.jpg']
);
var contador=0;

/**
 * Funcion para cambiar la imagen y link
 */
function rotarImagenes()
{
	// cambiamos la imagen y la url
	contador++
	document.getElementById("rotar").src=imagenes[contador%imagenes.length][0];
	/* document.getElementById("link").href=imagenes[contador%imagenes.length][1]; */
}

/**
 * Función que se ejecuta una vez cargada la página
 */
onload=function()
{
	// Cargamos una imagen aleatoria
	rotarImagenes();

	// Indicamos que cada 5 segundos cambie la imagen
	setInterval(rotarImagenes,4000);
}