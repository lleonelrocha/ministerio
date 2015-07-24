@extends('app')
@section('body')

    <script>
        function realizaProceso(valorCaja1, valorCaja2){

            var parametros = {
                "valorCaja1" : valorCaja1,
                "valorCaja2" : valorCaja2
            };
            $.ajax({
                data:  parametros,
                url:   'gethint',
                type:  'post',
                beforeSend: function () {
                    $("#resultado").html("Procesando, espere por favor...");
                },
                success:  function (data) {

                    var dhtml="";
                    for (datas in data.datos) {
                        dhtml+=' <p> Nombre: '+data.datos[datas].login+'</p>';
                    };

                    $("#resultado").html(data.resultado + " "+ data.sms+" "+dhtml);
                }
            });
        }
    </script>

    <br class="clearfix" />
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Tus posts</h3>

                    <br class="clearfix" />
                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                <div class="panel panel-default">
                                    Introduce valor 1
                                    <input type="text" name="caja_texto" id="valor1" value="0"/>


                                    Introduce valor 2
                                    <input type="text" name="caja_texto" id="valor2" value="0"/>

                                    Realiza suma
                                    <input type="button" href="javascript:;" onclick="realizaProceso($('#valor1').val(), $('#valor2').val());return false;" value="Calcula"/>
                                    <br/>
                                    Resultado: <span id="resultado">0</span>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
@endsection()