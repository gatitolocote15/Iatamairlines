@extends('_plantilla')

@section('body')
    <div class="container-fluid d-flex justify-content-center w-100 h-100">
        <div class="row text-center">
            <div class="col-8 col-sm-6 col-lg-4 w-auto m-auto">
                <div class="card border-primary p-4">
                    <form onsubmit="eventSubmit(event, this)">
                        <h2 class="fw-bold text-primary">LOGIN</h2>
                        <div class="form-group py-2">
                            <label class="fw-bold" for="usuario">Usuario</label>
                            <input type="text" id="usuario" class="form-control">
                        </div>

                        <div class="form-group py-2">
                            <label class="fw-bold" for="password">Password</label>
                            <input type="password" id="password" class="form-control">
                        </div>

                        <div class="form-group py-2">
                            <div class="checkbox">
                                <label class="fw-bold"><input type="checkbox" id="remember">Recuérdame</label>
                            </div>
                        </div>

                        <div class="form-group py-2 pull-left">
                            <button type="submit" class="btn btn-primary fw-bold" onclick="login(this)">INGRESAR</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- @include('_footer') --}}
    </div>
@endsection

@section('script')
    <script>
        function login(boton = null) {
            let usuario = $('#usuario').val();
            let password = $('#password').val();
            let remember = $('#remember').is(':checked');
            ajaxJQ({
                u: './login',
                d: {
                    'usuario': usuario,
                    'password': password,
                    'remember': remember ? 1 : 0
                },
                b: boton,
                ok: function() {
                    goPage('./panel');
                }
            });
            return false;
        }
    </script>
@endsection
