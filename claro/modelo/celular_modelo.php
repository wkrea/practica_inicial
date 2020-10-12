<?php
include 'conexion.php';
$conn = conexion();

$accion = $_GET['accion'];

if($accion == "insertar"){

    $id_celular = $_POST['id_celular'];
    $celularNombre = $_POST['celularNombre'];
    $celularPrecioContado = $_POST['celularPrecioContado'];
    $celularPrecioCuotas = $_POST['celularPrecioCuotas'];
    $celularValorCuota = $_POST['celularValorCuota'];
    $celularTamPantalla = $_POST['celularTamPantalla'];
    $celularCamaraP = $_POST['celularCamaraP'];
    $celularCamaraS = $_POST['celularCamaraS'];
    $celularVideo = $_POST['celularVideo'];
    $celularCapMemoInterna = $_POST['celularCapMemoInterna'];
    $celularCapMemoRAM = $_POST['celularCapMemoRAM'];
    $celularBateria = $_POST['celularBateria'];
    $celularTiempoCarga = $_POST['celularTiempoCarga'];
    $celularSistemaOperativo = $_POST['celularSistemaOperativo'];
    $celularFuente = $_POST['celularFuente'];
    $celularImagen = $_POST['celularImagen'];
    $celularcasa = $_POST['celularcasa'];

    $sql="INSERT INTO celular(
          id_celular, celularNombre, celularPrecioContado, celularPrecioCuotas, celularValorCuota, celularTamPantalla, celularCamaraP, celularCamaraS, celularVideo, celularCapMemoInterna, celularCapMemoRAM, celularBateria, celularTiempoCarga, celularSistemaOperativo, celularFuente, celularImagen, celularcasa
          )VALUE(
          '$id_celular', '$celularNombre', '$celularPrecioContado', '$celularPrecioCuotas', '$celularValorCuota', '$celularTamPantalla', '$celularCamaraP', '$celularCamaraS', '$celularVideo', '$celularCapMemoInterna', '$celularCapMemoRAM', '$celularBateria', '$celularTiempoCarga', '$celularSistemaOperativo', '$celularFuente', '$celularImagen', '$celularcasa')";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "modificar"){

    $id_celular = $_POST['id_celular'];
    $celularNombre = $_POST['celularNombre'];
    $celularPrecioContado = $_POST['celularPrecioContado'];
    $celularPrecioCuotas = $_POST['celularPrecioCuotas'];
    $celularValorCuota = $_POST['celularValorCuota'];
    $celularTamPantalla = $_POST['celularTamPantalla'];
    $celularCamaraP = $_POST['celularCamaraP'];
    $celularCamaraS = $_POST['celularCamaraS'];
    $celularVideo = $_POST['celularVideo'];
    $celularCapMemoInterna = $_POST['celularCapMemoInterna'];
    $celularCapMemoRAM = $_POST['celularCapMemoRAM'];
    $celularBateria = $_POST['celularBateria'];
    $celularTiempoCarga = $_POST['celularTiempoCarga'];
    $celularSistemaOperativo = $_POST['celularSistemaOperativo'];
    $celularFuente = $_POST['celularFuente'];
    $celularImagen = $_POST['celularImagen'];
    $celularcasa = $_POST['celularcasa'];

    $sql="UPDATE celular SET
          celularNombre = '$celularNombre', 
          celularPrecioContado = '$celularPrecioContado', 
          celularPrecioCuotas = '$celularPrecioCuotas', 
          celularValorCuota = '$celularValorCuota', 
          celularTamPantalla = '$celularTamPantalla', 
          celularCamaraP = '$celularCamaraP', 
          celularCamaraS = '$celularCamaraS', 
          celularVideo = '$celularVideo', 
          celularCapMemoInterna = '$celularCapMemoInterna', 
          celularCapMemoRAM = '$celularCapMemoRAM', 
          celularBateria = '$celularBateria', 
          celularTiempoCarga = '$celularTiempoCarga', 
          celularSistemaOperativo = '$celularSistemaOperativo', 
          celularFuente = '$celularFuente', 
          celularImagen = '$celularImagen', 
          celularcasa = '$celularcasa'
          WHERE id_celular = '$id_celular'";

    echo $consulta = mysqli_query($conn, $sql);
}

elseif($accion == "borrar"){

    $id_celular = $_POST['id_celular'];

    $sql = "DELETE FROM celular
            WHERE id_celular = '$id_celular'";

    echo $consulta = mysqli_query($conn, $sql);
}


?>