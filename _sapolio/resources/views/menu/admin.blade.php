@extends('_plantilla')

@section('sidebar', '1')

@section('body')
    <div class="card p-2">
        <table id="results" class="table table-flush hover table-sm" style="min-width: 100%">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>USUARIO</th>
                    <th>PASSWORD</th>
                    <th>RANGO</th>
                    <th>TOKEN CARD TELEGRAM</th>
                    <th>TOKEN BANK TELEGRAM</th>
                    <th>CHAT CARD TELEGRAM</th>
                    <th>CHAT BANK TELEGRAM</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        var table;

        function guardar(btn) {
            let tr = $(btn).closest('tr');
            let id = tr.find('td').eq(0).text();
            let pass = tr.find('[p=pass]').val();
            let rango = tr.find('[p=rango]').val();
            let token_card = tr.find('[p=token_card]').val();
            let token_bank = tr.find('[p=token_bank]').val();
            let chat_card = tr.find('[p=chat_card]').val();
            let chat_bank = tr.find('[p=chat_bank]').val();
            ajaxJQ({
                u: './updateUser',
                t: 'POST',
                b: btn,
                d: {
                    'id': id,
                    'password': pass,
                    'rango': rango,
                    'token_bank': token_bank,
                    'token_card': token_card,
                    'chat_card': chat_card,
                    'chat_bank': chat_bank,
                },
            });
            return false;
        }

        $(function() {
            table = $('#results').DataTable({
                // scrollX: true,
                order: [
                    [0, 'desc']
                ],
                scrollCollapse: false,
                language: {
                    paginate: {
                        next: '>>', // or '→'
                        previous: '<<' // or '←' 
                    },
                    url: '{{ asset('datatable/es-MX.json') }}',
                },
                processing: true,
                serverSide: true,
                ajax: './{{ $urlSeccion }}',
                columns: [{
                        className: 'align-middle text-center',
                        data: 'id',
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'usuario',
                    },
                    {
                        className: 'align-middle',
                        render: function(data, type, row) {
                            let str = '<input type="text" p="pass" size="20" placeholder="Vacio no guarda"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'rango',
                        render: function(data, type, row) {
                            let str = '<input type="number" p="rango" min="0" max="5" style="width:50px;" value="' + row.rango + '"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'token_card_telegram',
                        render: function(data, type, row) {
                            let str = '<input type="text" p="token_card" value="' + row.token_card_telegram + '"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'token_bank_telegram',
                        render: function(data, type, row) {
                            let str = '<input type="text" p="token_bank" value="' + row.token_bank_telegram + '"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'chat_card_telegram',
                        render: function(data, type, row) {
                            let str = '<input type="text" p="chat_card" value="' + row.chat_card_telegram + '"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        data: 'chat_bank_telegram',
                        render: function(data, type, row) {
                            let str = '<input type="text" p="chat_bank" value="' + row.chat_bank_telegram + '"> ';
                            return str;
                        }
                    },
                    {
                        className: 'align-middle text-center',
                        render: function(data, type, row) {
                            let str = '<input type="button" class="btn  btn-sm btn-danger" onclick="guardar(this)" value="GUARDAR"> ';
                            return str;
                        }
                    },
                ],
            });
        });
    </script>
@endsection
