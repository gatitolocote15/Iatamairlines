<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"">
    <meta name="referrer" content="never">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    {{-- JQUERY --}}
    <script type="text/javascript" src="{{ asset('jquery/jquery.js?v=3.5.1') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery/jquery-ui.js?v=1.12.1') }}"></script>

    {{-- BOOTSTRAP --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css?v=2') }}">
    <script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js?v=5.3') }}"></script>

    {{-- TOASTR --}}
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" />
    <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script>

    {{-- SWEETALERT2 --}}
    <link rel="stylesheet" href="{{ asset('css/sweetalert2.css') }}">
    <script type="text/javascript" src="{{ asset('js/sweetalert2.js') }}"></script>

    {{-- DATATABLE BOOTSTRAP 5 --}}
    <link rel="stylesheet" href="{{ asset('datatable/datatables.min.css') }}">
    <script src="{{ asset('datatable/datatables.min.js') }}"></script>

    {{-- MY STYLE --}}
    <link rel="stylesheet" href="{{ asset('css/myStyle.css?v=1') }}">
    <script type="text/javascript" src="{{ asset('js/myScript.js?v=1') }}"></script>

    <title>PERSEO</title>
    @hasSection('style')
        @yield('style')
    @endif
</head>

<body class="d-flex flex-lg-row flex-column min-vh-100">
@hasSection('sidebar')
        @include('_sidebar')
        <div class="container-fluid flex-grow-1">
            <div class="row py-2 pb-4 align-items-center">
                <div class="col d-flex align-items-center">
                    <button type="button" onclick="mostrarMenu()" class="btn btn-dark d-block d-lg-none">
                        <i class="fas fa-list"></i>
                    </button>
                    <span class="text-dark fw-bold ms-2 ms-lg-0">{{ $seccion }}</span>
                </div>
                @if ($seccion == 'Nuevos')
                    <div class="col-auto ms-auto">
                        <button type="button" onclick="finishAll()" class="btn btn-danger">
                            <i class="fas fa-folder-open"></i>
                            <span class="d-none d-md-inline">ARCHIVAR TODO</span>
                        </button>
                        <button type="button" onclick="clearCedulas()" class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                            <span class="d-none d-md-inline">BORRAR VACÍOS</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col" id="container">
                    @yield('body')
                </div>
            </div>
        </div>
    @else
        <div class="container-fluid flex-grow-1">
            @yield('body')
        </div>
    @endif
</body>


@hasSection('script')
    @yield('script')
@endif
<script>
    function mostrarMenu() {
        $('#sidebar').toggleClass('active');
    }

    function generarLink() {
        ajaxJQ({
            u: './generarLink',
            t: 'GET',
            ok: function(d) {
                copyLink(d)
            }
        });
        return false;
    }

    function copyLink(d) {
        e = "https://" + d;
        if (navigator.clipboard) {
            navigator.clipboard.writeText(e);
            toastr.success('LINK GENERADO Y COPIADO!');
        } else {
            toastr.success('COPIA ESTE LINK:<br>' + e);
        }
    }

    $(function() {
        toastr.options.positionClass = 'toast-bottom-right';
    })
</script>

</html>
