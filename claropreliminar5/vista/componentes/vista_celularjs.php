
<style>
    #img8gb {
        position: absolute;
        top: 0px;
        left: 0px;
        clip: rect(0px,159px,500px,0px);
    }
    #img15gb {
        position: absolute;
        top: 0px;
        left: -156px;
        clip: rect(0px,315px,500px,156px);
    }
    #img25gb {
        position: absolute;
        top: 0px;
        left: -310px;
        clip: rect(0px,470px,500px,310px);
    }
    #img35gb {
        position: absolute;
        top: 0px;
        left: -465px;
        clip: rect(0px,625px,500px,465px);
    }
    #img750ldi {
        position: absolute;
        top: 0px;
        left: -620px;
        clip: rect(0px,779px,500px,620px);
    }
    #img1200ldi {
        position: absolute;
        top: 0px;
        left: -775px;
        clip: rect(0px,936px,500px,775px);
    }


    .imgmodelo {
        position: absolute;
        top: 0px;
        left: -60px;
        clip: rect(0px,405px,500px,50px);
    }
</style>















<br><br><br><br>
<script>
var datos = [""];
function datosdeentrada(){
<?php
include_once '../../modelo/conexion.php';
$conn = conexion();
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM celular";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 0;
    while($row = $result->fetch_assoc()) {
    ?>
/* inserta los datos en una matriz de javascript */
        datos[<?php echo $i; ?>] = [
            "<?php echo $row['id_celular']; ?>",
            "<?php echo $row['celularNombre']; ?>",
            "<?php echo $row['celularPrecioContado']; ?>",
            "<?php echo $row['celularPrecioCuotas']; ?>",
            "<?php echo $row['celularValorCuota']; ?>",
            "<?php echo $row['celularTamPantalla']; ?>",
            "<?php echo $row['celularCamaraP']; ?>",
            "<?php echo $row['celularCamaraS']; ?>",
            "<?php echo $row['celularVideo']; ?>",
            "<?php echo $row['celularCapMemoInterna']; ?>",
            "<?php echo $row['celularCapMemoRAM']; ?>",
            "<?php echo $row['celularBateria']; ?>",
            "<?php echo $row['celularTiempoCarga']; ?>",
            "<?php echo $row['celularSistemaOperativo']; ?>",
            "<?php echo $row['celularFuente']; ?>",
            "<?php echo $row['celularImagen']; ?>",
            "<?php echo $row['celularcasa']; ?>"
        ];
<?php
    $i = $i+1;     
}
} else {
    echo "0 results";
}

$conn->close();
?>
}
datosdeentrada();
console.log(datos);
</script>

    













<div class="col-sm-10">
    <div id="row2"></div>    
</div>
<div class="col-sm-2" style="background-color:white; min-height:700px">
    <div class="col-sm-2" style="">
        <img id="img8gb" src="../imagenes/planes.png"><br>
    </div>
</div>

<script>
function ejecutar(){
    document.getElementById("img8gb").onclick = function (e){
        document.getElementById("img8gb").id = "img15gb";
        document.getElementById("img15gb").onclick = function (e){
            document.getElementById("img15gb").id = "img25gb";
            document.getElementById("img25gb").onclick = function (e){
                document.getElementById("img25gb").id = "img35gb";
                document.getElementById("img35gb").onclick = function (e){
                    document.getElementById("img35gb").id = "img750ldi";
                    document.getElementById("img750ldi").onclick = function (e){
                        document.getElementById("img750ldi").id = "img1200ldi";
                        document.getElementById("img1200ldi").onclick = function (e){
                            document.getElementById("img1200ldi").id = "img8gb";
                            ejecutar();
                        } 
                    } 
                } 
            } 
        }        
    }  
}
ejecutar();
</script>

<br>
<br>
<br>
<br>










<script>

function datosdesalida(){

    function addElement() {
        var row1 = document.getElementById("row2");

        var row = document.createElement("div");

        var div10 = document.createElement("div");
        var div100 = document.createElement("div");
        var div100h1 = document.createElement("h1");
        var div101 = document.createElement("div");
        var div101h1 = document.createElement("h1");

        var div11 = document.createElement("div");
        var div12 = document.createElement("div");
        var div13 = document.createElement("div");





        var table = document.createElement("table");

        var trid_celular = document.createElement("tr");
        var trcelularNombre = document.createElement("tr");
        var trcelularPrecioContado = document.createElement("tr");
        var trcelularPrecioCuotas = document.createElement("tr");
        var trcelularValorCuota = document.createElement("tr");
        var trcelularTamPantalla = document.createElement("tr");
        var trcelularCamaraP = document.createElement("tr");
        var trcelularCamaraS = document.createElement("tr");
        var trcelularVideo = document.createElement("tr");
        var trcelularCapMemoInterna = document.createElement("tr");
        var trcelularCapMemoRAM = document.createElement("tr");
        var trcelularBateria = document.createElement("tr");
        var trcelularTiempoCarga = document.createElement("tr");
        var trcelularSistemaOperativo = document.createElement("tr");
        var trcelularFuente = document.createElement("tr");
        var trcelularImagen = document.createElement("tr");
        var trcelularcasa = document.createElement("tr");

        var tdid_celular = document.createElement("td");
        var tdcelularNombre = document.createElement("td");
        var tdcelularPrecioContado = document.createElement("td");
        var tdcelularPrecioCuotas = document.createElement("td");
        var tdcelularValorCuota = document.createElement("td");
        var tdcelularTamPantalla = document.createElement("td");
        var tdcelularCamaraP = document.createElement("td");
        var tdcelularCamaraS = document.createElement("td");
        var tdcelularVideo = document.createElement("td");
        var tdcelularCapMemoInterna = document.createElement("td");
        var tdcelularCapMemoRAM = document.createElement("td");
        var tdcelularBateria = document.createElement("td");
        var tdcelularTiempoCarga = document.createElement("td");
        var tdcelularSistemaOperativo = document.createElement("td");
        var tdcelularFuente = document.createElement("td");
        var tdcelularImagen = document.createElement("td");
        var tdcelularcasa = document.createElement("td");

        var tddatoid_celular = document.createElement("td");
        var tddatocelularNombre = document.createElement("td");
        var tddatocelularPrecioContado = document.createElement("td");
        var tddatocelularPrecioCuotas = document.createElement("td");
        var tddatocelularValorCuota = document.createElement("td");
        var tddatocelularTamPantalla = document.createElement("td");
        var tddatocelularCamaraP = document.createElement("td");
        var tddatocelularCamaraS = document.createElement("td");
        var tddatocelularVideo = document.createElement("td");
        var tddatocelularCapMemoInterna = document.createElement("td");
        var tddatocelularCapMemoRAM = document.createElement("td");
        var tddatocelularBateria = document.createElement("td");
        var tddatocelularTiempoCarga = document.createElement("td");
        var tddatocelularSistemaOperativo = document.createElement("td");
        var tddatocelularFuente = document.createElement("td");
        var tddatocelularImagen = document.createElement("td");
        var tddatocelularcasa = document.createElement("td");

        var imgcelular = document.createElement("IMG");
        var imgmodelo = document.createElement("IMG");      

        row.className = "row";

        div10.className = "col-sm-10";
        div100.className = "col-sm-5";
        div100h1.className = "div100h1";
        div101.className = "col-sm-4";
        div101h1.className = "div101h1";

        div11.className = "col-sm-3";

        div12.className = "col-sm-4";
        table.className = "table table-hover table-bordered table-responsive";

        div13.className = "col-sm-3";
        div13.style.height = "500px";

        div100.style.backgroundColor = "red";
        div100h1.style.color = "white";
        div101.style.backgroundColor = "yellow";
        div101h1.style.color = "black";
        div101h1.style.textAlign = "right";
        div12.style.margin = "60px";





        tdid_celular.className              = "tdid_celular";
        tdcelularNombre.className           = "tdcelularNombre";
        tdcelularPrecioContado.className    = "tdcelularPrecioContado"; 
        tdcelularPrecioCuotas.className     = "tdcelularPrecioCuotas"; 
        tdcelularValorCuota.className       = "tdcelularValorCuota"; 
        tdcelularTamPantalla.className      = "tdcelularTamPantalla"; 
        tdcelularCamaraP.className          = "tdcelularCamaraP";
        tdcelularCamaraS.className          = "tdcelularCamaraS";
        tdcelularVideo.className            = "tdcelularVideo";
        tdcelularCapMemoInterna.className   = "tdcelularCapMemoInterna";
        tdcelularCapMemoRAM.className       = "tdcelularCapMemoRAM";
        tdcelularBateria.className          = "tdcelularBateria";
        tdcelularTiempoCarga.className      = "tdcelularTiempoCarga";
        tdcelularSistemaOperativo.className = "tdcelularSistemaOperativo";
        tdcelularFuente.className           = "tdcelularFuente";
        tdcelularImagen.className           = "tdcelularImagen";
        tdcelularcasa.className             = "tdcelularcasa";

        tddatoid_celular.className              = "tddatoid_celular";
        tddatocelularNombre.className           = "tddatocelularNombre";
        tddatocelularPrecioContado.className    = "tddatocelularPrecioContado"; 
        tddatocelularPrecioCuotas.className     = "tddatocelularPrecioCuotas"; 
        tddatocelularValorCuota.className       = "tddatocelularValorCuota"; 
        tddatocelularTamPantalla.className      = "tddatocelularTamPantalla"; 
        tddatocelularCamaraP.className          = "tddatocelularCamaraP";
        tddatocelularCamaraS.className          = "tddatocelularCamaraS";
        tddatocelularVideo.className            = "tddatocelularVideo";
        tddatocelularCapMemoInterna.className   = "tddatocelularCapMemoInterna";
        tddatocelularCapMemoRAM.className       = "tddatocelularCapMemoRAM";
        tddatocelularBateria.className          = "tddatocelularBateria";
        tddatocelularTiempoCarga.className      = "tddatocelularTiempoCarga";
        tddatocelularSistemaOperativo.className = "tddatocelularSistemaOperativo";
        tddatocelularFuente.className           = "tddatocelularFuente";
        tddatocelularImagen.className           = "tddatocelularImagen";
        tddatocelularcasa.className             = "tddatocelularcasa";

        imgcelular.className = "imgcelular";
        imgmodelo.className = "imgmodelo";

        trid_celular.appendChild(tdid_celular);
        trcelularNombre.appendChild(tdcelularNombre);
        trcelularPrecioContado.appendChild(tdcelularPrecioContado);
        trcelularPrecioCuotas.appendChild(tdcelularPrecioCuotas);
        trcelularValorCuota.appendChild(tdcelularValorCuota);
        trcelularTamPantalla.appendChild(tdcelularTamPantalla);
        trcelularCamaraP.appendChild(tdcelularCamaraP);
        trcelularCamaraS.appendChild(tdcelularCamaraS);
        trcelularVideo.appendChild(tdcelularVideo);
        trcelularCapMemoInterna.appendChild(tdcelularCapMemoInterna);
        trcelularCapMemoRAM.appendChild(tdcelularCapMemoRAM);
        trcelularBateria.appendChild(tdcelularBateria);
        trcelularTiempoCarga.appendChild(tdcelularTiempoCarga);
        trcelularSistemaOperativo.appendChild(tdcelularSistemaOperativo);
        trcelularFuente.appendChild(tdcelularFuente);
        trcelularImagen.appendChild(tdcelularImagen);
        trcelularcasa.appendChild(tdcelularcasa);

        trid_celular.appendChild(tddatoid_celular);
        trcelularNombre.appendChild(tddatocelularNombre);
        trcelularPrecioContado.appendChild(tddatocelularPrecioContado);
        trcelularPrecioCuotas.appendChild(tddatocelularPrecioCuotas);
        trcelularValorCuota.appendChild(tddatocelularValorCuota);
        trcelularTamPantalla.appendChild(tddatocelularTamPantalla);
        trcelularCamaraP.appendChild(tddatocelularCamaraP);
        trcelularCamaraS.appendChild(tddatocelularCamaraS);
        trcelularVideo.appendChild(tddatocelularVideo);
        trcelularCapMemoInterna.appendChild(tddatocelularCapMemoInterna);
        trcelularCapMemoRAM.appendChild(tddatocelularCapMemoRAM);
        trcelularBateria.appendChild(tddatocelularBateria);
        trcelularTiempoCarga.appendChild(tddatocelularTiempoCarga);
        trcelularSistemaOperativo.appendChild(tddatocelularSistemaOperativo);
        trcelularFuente.appendChild(tddatocelularFuente);
        trcelularImagen.appendChild(tddatocelularImagen);
        trcelularcasa.appendChild(tddatocelularcasa);

        table.appendChild(trid_celular);
        table.appendChild(trcelularNombre);
        table.appendChild(trcelularPrecioContado);
        table.appendChild(trcelularPrecioCuotas);
        table.appendChild(trcelularValorCuota);
        table.appendChild(trcelularTamPantalla);
        table.appendChild(trcelularCamaraP);
        table.appendChild(trcelularCamaraS);
        table.appendChild(trcelularVideo);
        table.appendChild(trcelularCapMemoInterna);
        table.appendChild(trcelularCapMemoRAM);
        table.appendChild(trcelularBateria);
        table.appendChild(trcelularTiempoCarga);
        table.appendChild(trcelularSistemaOperativo);
        table.appendChild(trcelularFuente);
        table.appendChild(trcelularImagen);
        table.appendChild(trcelularcasa);



        div100.appendChild(div100h1);
        div10.appendChild(div100);
        
        div101.appendChild(div101h1);
        div10.appendChild(div101);

        div11.appendChild(imgcelular);
        div12.appendChild(table);
        div13.appendChild(imgmodelo);

        row.appendChild(div10);    
        row.appendChild(div11);
        row.appendChild(div12);
        row.appendChild(div13);

        row1.appendChild(row);   
    }
    
    // exposición de datos
    function myFunction2(i) {
        for(ii=0;datos[i].length>ii;ii++){
            document.getElementsByClassName("tdcelularTamPantalla")[i].innerHTML = "Tam. Pantalla:";
            document.getElementsByClassName("tdcelularCamaraP")[i].innerHTML = "Camara Principal:";
            document.getElementsByClassName("tdcelularCamaraS")[i].innerHTML = "Camara Secundaria:";
            document.getElementsByClassName("tdcelularVideo")[i].innerHTML = "Tipo de Video:";
            document.getElementsByClassName("tdcelularCapMemoInterna")[i].innerHTML = "Memoria Interna";
            document.getElementsByClassName("tdcelularCapMemoRAM")[i].innerHTML = "Memoria RAM";
            document.getElementsByClassName("tdcelularBateria")[i].innerHTML = "Bateria";
            document.getElementsByClassName("tdcelularTiempoCarga")[i].innerHTML = "Tiempo de Carga";
            document.getElementsByClassName("tdcelularSistemaOperativo")[i].innerHTML = "S.O.";

            document.getElementsByClassName("tddatocelularTamPantalla")[i].innerHTML = datos[i][5];
            document.getElementsByClassName("tddatocelularCamaraP")[i].innerHTML = datos[i][6];
            document.getElementsByClassName("tddatocelularCamaraS")[i].innerHTML = datos[i][7];
            document.getElementsByClassName("tddatocelularVideo")[i].innerHTML = datos[i][8];
            document.getElementsByClassName("tddatocelularCapMemoInterna")[i].innerHTML = datos[i][9];
            document.getElementsByClassName("tddatocelularCapMemoRAM")[i].innerHTML = datos[i][10];
            document.getElementsByClassName("tddatocelularBateria")[i].innerHTML = datos[i][11];
            document.getElementsByClassName("tddatocelularTiempoCarga")[i].innerHTML = datos[i][12];
            document.getElementsByClassName("tddatocelularSistemaOperativo")[i].innerHTML = datos[i][13];

            imgcelular = document.getElementsByClassName("imgcelular")[i];
            imgcelular.setAttribute("src", datos[i][15]);
            // imgcelular.setAttribute("width", "304");
            // imgcelular.setAttribute("height", "228");
            imgcelular.setAttribute("alt", "imgcelular");

            imgmodelo = document.getElementsByClassName("imgmodelo")[i];
            imgmodelo.setAttribute("src", "https://www.claro.com.hn/portal/pa/recursos_contenido/1502143978271.jpg");
            // imgmodelo.setAttribute("width", "304");
            // imgmodelo.setAttribute("height", "228");
            imgmodelo.setAttribute("alt", "imgmodelo");

            document.getElementsByClassName("div100h1")[i].innerHTML = datos[i][1];
            document.getElementsByClassName("div101h1")[i].innerHTML = datos[i][2];
        }
    }

    for(i=0;datos.length>i;i++){
        addElement(); 
    }

    for(i=0;datos.length>i;i++){
        myFunction2(i); 
    } 



}

datosdesalida();











</script>








