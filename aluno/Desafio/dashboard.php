<?php
session_start();
include "Desaf.php";
?>

        <div class="row" style="margin: 0px; padding:0px; margin-bottom: 50px;">

            <div class="col-lg-6 col-lg-push-3" style="min-height: 500px; background-color: white;">
            <br>
            <div class="row">
                    <div class="col-lg-2 col-lg-push-10">
                            <div id="exame_atual" style="float:left">0</div>
                            <div style="float:left">/</div>
                            <div id="total_ques" style="float:left">0</div>
                    </div>

                    <div class="row " style="margin-top: 30px" >
                            <div class="row">
                                <div class="col-lg-10 col-lg-push-1" style="min-height:300px; background-color:white" id="load_ques">

                                </div>
                            </div>
                    </div>

                    <div class="row" style="margin-top: 10px">
                        <div class="col-lg-6 col-lg-push-3" style="min-height:50px">
                            <div class="col-lg-12 text-center">
                                <input type="button" class="btn btn-warning" value="Anterior" onclick="load_ant();">&nbsp;
                                <input type="button" class="btn btn-success" value="Proximo" onclick="load_prox();">                               
                            </div>
                        </div>
                    </div>

            </div>
        
        </div>

        </div>

<script type="text/javascript">
    function load_t_ques(){
        var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState== 4 && xmlhttp.status== 200) {
               document.getElementById("total_ques").innerHTML=xmlhttp.responseText;
            }
        };
        
        xmlhttp.open("GET","forajax/load_t_ques.php", true);
        xmlhttp.send(null);
    }

var questionno="1";
load_ques(questionno);

function load_ques(questionno){
    document.getElementById("exame_atual").innerHTML=questionno;
    var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState== 4 && xmlhttp.status== 200) {
              if(xmlhttp.responseText=="over"){
               
              }else{
                document.getElementById("load_ques").innerHTML=xmlhttp.responseText;
                load_t_ques();
              }
            }
        };
        
        xmlhttp.open("GET","forajax/load_ques.php?questionno="+ questionno, true);
        xmlhttp.send(null);
}

function radioclick(radiovalue,questionno){
    var xmlhttp= new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if(xmlhttp.readyState== 4 && xmlhttp.status== 200) {
              
            }
        };
        
        xmlhttp.open("GET","forajax/salvar_resposta.php?questionno="+ questionno + "&value1="+ radiovalue,true);
        xmlhttp.send(null);
}


function load_ant(){
if(questionno=="1"){
    load_ques(questionno);
}else{
    questionno=eval(questionno)-1;
    load_ques(questionno);
}
}

function load_prox(){
    questionno=eval(questionno)+1;
    load_ques(questionno);
}

</script>


<?php
include "rodape.php";
?>