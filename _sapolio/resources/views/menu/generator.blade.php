@extends('_plantilla')

@section('sidebar', '1')

@section('body')
    <div class="card p-3 modal-dialog modal-sm">
        <div class="modal-content">
            <div class="mb-3 text-primary">
                <h3 class="mb-0">GENERADOR DE NÚMEROS</h3>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="">
                                    <input id="numero" type="number" onkeypress="if(this.value.length==6) return false;" required="" class="form-control" placeholder="Ingrese los 6 primeros números. **SIN +57**">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="result" style="display: none;">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div id="divFail" style="display: none;">
                                    <div class="alert alert-danger" role="alert">
                                        Este número ya ha sido usado, <strong>Ingresa otro!</strong>
                                    </div>
                                </div>
                                <div id="divSuccess" style="display: none;">
                                    <div class="alert alert-success" id="success" role="alert">
                                        Este número no ha sido usado, <strong>Cópialo!</strong>
                                    </div>
                                    <div>
                                        <h3 class="text-center">10.000 Números generados</h3>
                                        <textarea id="inResult" class="form-control" cols="50" rows="10"></textarea>
                                    </div>
                                    <span onclick="copy('inResult')">
                                        <i class="fas fa-copy"></i>
                                        CLICK AQUÍ PARA COPIAR
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="my-4">
                            <i class="fas fa-exclamation-triangle" style="color:red"></i>
                            Ingrese los 6 primeros números de un teléfono celular para verificar si ya ha sido usado, de no ser asi se generarán los números
                        </div>
                        <button type="button" class="btn btn-danger fw-bold" onclick="checkNumber(this)">VERIFICAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function copy(e) {
            if (navigator.clipboard) {
                navigator.clipboard.writeText($('#' + e).text());
                toastr.success('NÚMEROS COPIADOS!');
            } else {
                toastr.error('NECESITAS COPIARLO MANUALMENTE PORQUE EL NAVEGADOR NO PERMITE EL COPIADO AUTOMÁTICO');
            }
        }

        function checkNumber(boton) {
            let numero = $('#numero').val();
            if (numero.length < 6) {
                toastr.error('EL NÚMERO TIENE MENOS DE 6 DÍGITOS');
                return;
            }
            ajaxJQ({
                u: './generator',
                t: 'GET',
                d: {
                    'numero': numero,
                },
                b: boton,
                before: function(d) {
                    $('#result').toggle(false);
                    $('#divSuccess').toggle(false);
                    $('#divFail').toggle(false);
                },
                ok: function(d) {
                    $('#result').toggle(true);
                    if (d == 'fail') {
                        $('#divFail').toggle(true);
                    } else if (d == 'ok') {
                        $('#divSuccess').toggle(true);
                        let str = '';
                        for (let i = 0; i < 10000; i++) {
                            let n = ('0000' + i).slice(-4);
                            if (str != '') {
                                str += '\n';
                            }
                            str += '+57' + numero + n;
                        }
                        $('#inResult').text(str);
                    }
                }
            });
            return false;
        }
        $(function() {

        });
    </script>
@endsection
