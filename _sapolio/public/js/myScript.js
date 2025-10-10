function Timer(fn, t) {
	var timerObj = setInterval(fn, t);
	// clearInterval(timerObj);
	this.stop = function () {
		if (timerObj) {
			clearInterval(timerObj);
			timerObj = null;
		}
		return this;
	}
	this.start = function () {
		if (!timerObj) {
			this.stop();
			timerObj = setInterval(fn, t);
		}
		return this;
	}
	this.reset = function (newT = t) {
		t = newT;
		return this.stop().start();
	}
}

function miParseFloat(numero) {
	return parseFloat(numero.replaceAll(',', ''));
}

function miToFixed(numero) {
	return parseFloat(numero).toLocaleString('en-US', { minimumFractionDigits: 2 });
}

function getDiasEntreFechas(desde, hasta) {
	var date1 = new Date(desde);
	var date2 = new Date(hasta);
	var time = Math.abs(date2 - date1);
	var dias = Math.ceil(time / (1000 * 60 * 60 * 24));
	return dias;
}

function restrict(r, event) {
	var inp = String.fromCharCode(event.keyCode);
	if (r.test(inp)) {
		return true;
	}
	return false;
}

function inputSoloTexto(event) {
	var inp = String.fromCharCode(event.keyCode);
	if (/[a-zA-Z ]/.test(inp)) {
		return true;
	}
	return false;
	// input.value = input.value.replace(/[^a-z]/, '');
}

function inputSoloFloat(event) {
	let val = event.target.value;
	let key = String.fromCharCode(event.keyCode);
	// console.log("key "+ key);
	if (event.keyCode === 13) { //enter
		event.target.blur();
	}
	if (!/\d|\./.test(key) || (/\./.test(val) && key == '.')) {
		return false;
	}
	return true;
}

function inputSoloInteger(event) {
	let key = String.fromCharCode(event.keyCode);
	if (!/\d/.test(key)) {
		return false;
	}
	return true;
}

function disabled(boton = null, b = true) {
	if (boton) {
		boton.disabled = b;
	}
}

function postForm(path, data = []) {
	let method = data.method || 'POST';
	let form = document.createElement('form');
	form.setAttribute('method', method);
	form.setAttribute('action', path);
	if (data.target) {
		form.setAttribute('target', '_blank');
	}
	for (let key in data.params) {
		if (data.params.hasOwnProperty(key)) {
			let h = document.createElement('input');
			h.setAttribute('type', 'hidden');
			h.setAttribute('name', key);
			h.setAttribute('value', data.params[key]);
			form.appendChild(h);
		}
	}
	document.body.appendChild(form);
	form.submit();
}

function refreshPage() {
	//es mejor que el window.location.ref, porque no funciona con #
	window.location.reload();
}

function goPage(url = 'index.php', params = '', nueva = false) {
	let s = url;
	if (params != '') {
		s += '?' + params;
	}
	if (nueva) {
		window.open(s, '_blank');
	} else {
		window.location.href = s;
	}
}

function goBack() {
	window.history.back();
}

function getJSId(el) {
	return document.getElementById(el);
}

function getScroll(div, scroll) {
	let el = getJSId(div);
	if (el != null) {
		scroll[0] = el.scrollTop;
		scroll[1] = el.scrollLeft;
	}
}

function setScroll(div, scroll) {
	let el = getJSId(div);
	if (el != null) {
		el.scrollTop = scroll[0];
		el.scrollLeft = scroll[1];
	}
}

function sortByField(p) {
	return function (a, b) {
		if (a[p] > b[p])
			return 1;
		else if (a[p] < b[p])
			return -1;
		return 0;
	}
}

function launchModal(type, str, boton = null) {
	if (boton != null) {
		lastBoton = boton;
	}
	str = str + '';
	let msg = str.replaceAll('\n', '<br>');
	let btn = '';
	let tit = '';
	switch (type) {
		case 'Result':
			btn = '<button type="button" class="btn btn-success fw-bold" data-bs-dismiss="modal">Aceptar</button>';
			tit = 'RESULTADO';
			break;
		case 'Alert':
			btn = '<button type="button" class="btn btn-warning fw-bold" data-bs-dismiss="modal">Aceptar</button>';
			tit = 'ALERTA';
			break;
		case 'Error':
			tit = 'ERROR';
			break;
		case 'YesOrYes':
			btn = '<button type="button" onclick="yesoryes(this);" class="btn btn-success fw-bold" data-bs-dismiss="modal">Aceptar</button>';
			tit = 'ACCIÓN EXITOSA';
			break;
		case 'Confirm':
			btn = '<button type="button" onclick="confirmar();" class="btn btn-success fw-bold" data-bs-dismiss="modal">Aceptar</button>';
			btn += '<button type="button" class="btn btn-danger fw-bold" data-bs-dismiss="modal">Cerrar</button>';
			tit = 'CONFIRMACIÓN';
			break;
	}
	let modal = '<div class="modal fade" id="modal_' + type + '" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">';
	modal += '<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">';
	modal += '<div class="modal-content">';
	modal += '<div class="modal-header">';
	modal += '<h5 class="modal-title">';
	modal += tit;
	modal += '</h5>';
	modal += '<button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">X</button>';
	modal += '</div>';
	modal += '<div class="modal-body">';
	modal += msg;
	modal += '</div>';
	modal += '<div class="modal-footer">';
	modal += btn;
	modal += '</div>';
	modal += '</div>';
	modal += '</div>';
	modal += '</div>';
	//dispose es mucho mejor que hide, pero no lo elimina del DOM, para eso uso remove()
	$('#modal_' + type).modal('dispose');
	$('#modal_' + type).remove();
	$('body').append(modal);
	$('#modal_' + type).modal('show');
}

function eventSubmit(e, f) {
	e.preventDefault();
	var ss = $(f).find('[clickSubmit]');
	if (ss.length == 0) {
		return;
	}
	var fn = ss.attr('clickSubmit');
	ss.fun = function () {
		eval(fn);
	};
	ss.fun();
}

function ajaxJQ(objects = []) {
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
	let b = objects.b != undefined ? objects.b : null;
	let params = {
		url: objects.u,
		data: objects.d,
		type: objects.t || 'POST',
		beforeSend: function () {
			disabled(b, true);
			if (objects.before) {
				objects.before();
			}
		}
	};
	if (objects.f) {
		params['contentType'] = false;
		params['cache'] = false;
		params['processData'] = false;
		// params = params.concat({contentType: false, cache: false, processData: false});
	}
	return $.ajax(params)
		.fail(function (data) {
			if (objects.fail) {
				objects.fail(data);
				return;
			}
			disabled(b, false);
			if (data.status == 419) {
				launchModal('alert', 'SESIÓN EXPIRADA, ACTUALICE LA PÁGINA')
				// refreshPage();
				return;
			}
			let msg = '';
			msg += 'ERROR CODE: ' + data.status + ' - ERROR TYPE: ' + data.statusText;
			msg += '<br>';
			msg += 'RESPONSE: ' + data.responseText;
			launchModal('error', msg);
		})
		.done(function (data) {
			if (!(data instanceof Object)) {
				console.log(data);
				return;
			}
			let action = data.action;
			switch (action) {
				case 'refresh':
					refreshPage();
					return;
				case 'msgYesOrYes':
				case 'msgError':
				case 'msgAlert':
				case 'msgResult':
					let str = data.data;
					if (str instanceof Object) {
						str = str.join('\n');
					}
					let type = action.substr(3);
					launchModal(type, str);
					break;
				default:
					if (objects[action]) {
						objects[action](data.data);
					} else {
						console.log(data.data);
					}
					break;
			}
			disabled(b, false);
		}).always(function (data) {
			if (objects['complete']) {
				objects['complete'](data);
			}
		});
}

function confirmSweet(msg, fn) {
	Swal.fire({
		icon: 'question',
		html: msg,
		showDenyButton: true,
		confirmButtonText: 'Sí',
		denyButtonText: 'No'
	}).then((result) => {
		if (result.isConfirmed) {
			fn();
		}
	});
}
