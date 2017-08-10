<?php 
	function getHeader(){
		include('header.php');
	}

	function getAside(){
		include('aside.php');
	}
	function getFooter(){
		include('footer.php');
	}
	function optimizar(){
		include('class.smushit.php');
	}
 ?>


<?php 
//optmizacion;
include('class.smushit.php');

// $img = new SmushIt('img/Chevrolet_logo.jpg');
// echo 'filename: '.$img->filename .'';

// echo 'url: '.$img->url .'';

// echo 'url resultado: '. $img->compressedUrl .'';

// echo 'Porcentaje salvado: '. $img->savings; 


?>

<?php 
/*
// listado de directorio

$directorio = opendir("img"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        //echo $archivo . "<br />"; // nombre del archivo
        // $img = new SmushIt('img/Chevrolet_logo.jpg');

		// echo 'filename: '.$img->filename .'';

		// echo 'url: '.$img->url .'';

		// echo 'url resultado: '. $img->compressedUrl .'';

		// echo 'Porcentaje salvado: '. $img->savings; 

		$img = new SmushIt($archivo);

		$img->filename;

		$img->url;

		 $img->compressedUrl;

		 $img->savings; 
    }
}
*/
?>