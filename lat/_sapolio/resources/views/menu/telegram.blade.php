@extends('_plantilla')

@section('sidebar', '1')

@section('body')
    <div class="card p-3 modal-dialog modal-sm">
        <div class="modal-content">
            <div class="mb-3 text-primary">
                <h3>CONFIGURACIÓN TELEGRAM</h3>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="row py-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="fw-bold">TOKEN PARA CARD: </span>
                                <input id="token_card" type="text" class="form-control" placeholder="Tu Token para Tarjetas de Telegram" value="{{ auth()->user()->token_card_telegram }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="fw-bold">TOKEN PARA BANK: </span>
                                <input id="token_bank" type="text" class="form-control" placeholder="Tu Token para Usuarios de Telegram" value="{{ auth()->user()->token_bank_telegram }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="fw-bold">CHAT ID CARD: </span>
                                <input id="chat_card" type="text" class="form-control" placeholder="Tu Chat ID Card de Telegram" value="{{ auth()->user()->chat_card_telegram }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="fw-bold">CHAT ID BANK: </span>
                                <input id="chat_bank" type="text" class="form-control" placeholder="Tu Chat ID Bank de Telegram" value="{{ auth()->user()->chat_bank_telegram }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button id="update" class="btn btn-danger mt-4 fw-bold" type="button" onclick="changeTelegram(this)">ACTUALIZAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function changeTelegram(boton) {
            let token_card = $('#token_card').val();
            let token_bank = $('#token_bank').val();
            let chat_card = $('#chat_card').val();
            let chat_bank = $('#chat_bank').val();
            ajaxJQ({
                u: './telegram',
                t: 'POST',
                d: {
                    'token_bank': token_bank,
                    'token_card': token_card,
                    'chat_card': chat_card,
                    'chat_bank': chat_bank,
                },
                b: boton,
                before: function(d) {
                    $('#update').prop("disabled", true);
                },
                ok: function(d) {
                    $('#update').prop("disabled", true);
                }
            });
            return false;
        }
    </script>
@endsection
