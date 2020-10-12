
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


    .imagen {
        position: absolute;
        top: 0px;
        left: 0px;
        clip: rect(0px,405px,500px,50px);
    }
</style>

<div class="row"><br><br><br>
    <div class="col-sm-10" style="">
        <div class="row">
            <div>
                <div class="col-sm-10" style="color:red;">
                    <h1>SmartPhone de esta época</h1>
                </div>
                <button class="btn btn-primary"
                            data-toggle="modal"
                            data-target="#modalNuevo"
                            style="float:right">
                    Agregar celular
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>








            <div class="row" style="">  
                <div class="col-sm-12" style="background-color:white">
                    <div class="col-sm-5" style="background-color:red; color:white">
                        <h1>
                            celularNombre
                        </h1>
                    </div>
                    <div class="col-sm-4" style="background-color:yellow; color:black">
                    <h1 style="text-align:right;">
                        celularPrecioContado
                    </h1>
                </div>             
                <button class="btn btn-warning glyphicon glyphicon-pencil"
                                        data-toggle="modal"
                                        data-target="#modalEdicion"
                                        onclick="agregaform('datos')"
                                        style="float:right;">
                </button>
                <h1 style="float:right; color:white">.</h1>
                <button class="btn btn-danger glyphicon glyphicon-remove"
                        onclick="preguntarSiNo('id_celular')"
                        style="float:right;">
                </button>
            </div>





            
            <div class="col-sm-12" style="background-color:white; height:20px;"></div>
            <div class="col-sm-3" style="" style="margin:5px 5px;">
                <a href="">
                    <img src=" celularImagen" alt="celularImagen">
                </a>
            </div>
            <div class="col-sm-4" style="">
                <table class="table table-hover table-condensed table-bordered table-responsive">
                    <tbody>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                        <tr>
                            <td></td><td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-sm-4" style="height:700px;">
                <img class="imagen" src="https://www.claro.com.hn/portal/pa/recursos_contenido/1502143978271.jpg" alt="foto">
            </div>
        </div>
    </div>
</div>
<div class="col-sm-2" style="background-color:white; min-height:700px">
    <div class="col-sm-4" style="">
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