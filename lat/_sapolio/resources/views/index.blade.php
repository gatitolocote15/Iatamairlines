@extends('_plantilla')

@section('body')
    <a href="./login" class="btn btn-primary">Ingresar</a> &nbsp;
    <a href="./signup" class="btn btn-primary">Registrarse</a>
    @include('_footer')
@endsection

@section('script')
    <script>
        toastr.success('ENERGIA POSITIVA!');
    </script>
@endsection
