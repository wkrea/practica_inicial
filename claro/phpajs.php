<?php
$arreglo[0] = [
    "nombre" => "oscar",
    "apellido" => "gonzalez",
];
$arreglo[1] = [
    "nombre" => "manuel",
    "apellido" => "ortega",
];
$arreglo[2] = [
    "nombre" => "maria",
    "apellido" => "fiel",
];
?>


<script>
var datos = [""];
function datosdeentrada(){
    <?php for($i=0;count($arreglo)>$i;$i++){ ?>            
            datos[<?php echo $i; ?>] = [
                "<?php echo $arreglo[$i]['nombre'];?>",
                "<?php echo $arreglo[$i]['apellido']; ?>"
            ];
    <?php } ?>    
}
</script>


<script>
function datosdesalida(){

    function addElement() {
        var zona = document.getElementById("tablezona");

        var trregistro = document.createElement("tr");

        var tdnombre = document.createElement("td");
        var tdapellido = document.createElement("td");

        var nombre = document.createElement("h1");
        var apellido = document.createElement("h1");

        nombre.className = "nombre2";
        apellido.className = "apellido2";

        tdnombre.appendChild(nombre);
        tdapellido.appendChild(apellido);    
        trregistro.appendChild(tdnombre);
        trregistro.appendChild(tdapellido);        
       
        zona.appendChild(trregistro);
    }

    // exposición de datos
    function myFunction2(i) {
        for(ii=0;datos[i].length>ii;ii++){
            document.getElementsByClassName("nombre2")[i].innerHTML = datos[i][0];
            document.getElementsByClassName("apellido2")[i].innerHTML = datos[i][1];
        }
    }

    for(i=0;datos.length>i;i++){
        addElement(); 
    }

    for(i=0;datos.length>i;i++){
        myFunction2(i); 
    }    
}
</script>



















​<!DOCTYPE html>
<html>
<body>
<script>
    datosdeentrada();
</script>
<table id="tablezona"></table>
<script>
    datosdesalida();
</script>
</body>
</html> 

