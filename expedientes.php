
<?php
$expediente = $_REQUEST['expediente'];
$dir        = "/home/archivox/sistemaDigiarch/p1";
$ruta       = $dir."/".$expediente;

// Abre un directorio conocido, y procede a leer el contenido
echo "<br> Listado de imagenes <br>";
if (is_dir($ruta)) {
	if ($dh = opendir($ruta)) {
		while (($file = readdir($dh)) !== false) {
			echo "nombre archivo: $file : tipo archivo: " .filetype($ruta.$file)." <br>";
		}
		closedir($dh);
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="">
		<input type="text" name="expediente">
		<button>Cargar Imagenes</button>
	</form>
</body>
</html>