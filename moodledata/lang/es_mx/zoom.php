<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'zoom', language 'es_mx', version '3.10'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['addtocalendar'] = 'Añadir al calendario';
$string['allmeetings'] = 'Todas las reuniones';
$string['allmeetings_disable'] = 'Deshabilitar enlace a todas las reuniones';
$string['allmeetings_enable'] = 'Habilitar enlace a todas las reuniones';
$string['alternative_hosts'] = 'Anfitriones Alternos';
$string['alternative_hosts_disable'] = 'Deshabilitar opción de anfitrión alterno';
$string['alternative_hosts_help'] = 'La opción de anfitrión alterno le permite agendar reuniones y designar otro usuario Pro en la misma cuenta para que inicie la reunión o webinar si Usted no puede hacerlo. El usuario recibirá un Email notificándole que ha sido añadido como un anfitrión alterno, con un enlace para iniciar la reunión. Separe varios emails con coma (sin espacios).';
$string['alternative_hosts_inputfield'] = 'Mostrar opción de anfitrión alterno como un campo de entrada de texto simple';
$string['alternative_hosts_picker'] = 'Mostrar opción de anfitrión alterno como un selector de usuario con auto-llenado';
$string['alternative_hosts_picker_noneselected'] = 'No se seleccionó anfitrión alterno';
$string['alternative_hosts_picker_placeholder'] = 'Seleccionar usuario(s)';
$string['apikey'] = 'Clave API Zoom';
$string['apikey_desc'] = '';
$string['apisecret'] = 'Secreto API Zoom';
$string['apisecret_desc'] = '';
$string['apiurl'] = 'URL API Zoom';
$string['apiurl_desc'] = '';
$string['audio_both'] = 'Teléfono y audio de computadora';
$string['audio_telephony'] = 'Solamente teléfono';
$string['audio_voip'] = 'Solamente audio de computadora';
$string['audiodefault'] = 'Audio predterminado';
$string['authentication'] = 'Autenticación';
$string['cachedef_sessions'] = 'Información de la solicitud para obtener reporte de usuario de zoom';
$string['cachedef_zoomid'] = 'la iD de zoom del usuario';
$string['cachedef_zoommeetingsecurity'] = 'Configuraciones de seguridad de reuniones Zoom, incluyendo requisitos de la cuenta de contraseña de reunión.';
$string['calendardescriptionURL'] = 'URL para unirse a reunión: {$a}.';
$string['calendardescriptionintro'] = '\\nDescripción:\\n{\\$a}';
$string['calendariconalt'] = 'Ícono del Calendario';
$string['changehost'] = 'Cambiaranfitrión';
$string['clickjoin'] = 'Hizo click en botón para unirse a reunión';
$string['connectionfailed'] = 'Conexión falló:';
$string['connectionok'] = 'Conexión funcionando';
$string['connectionsettings'] = 'Configuraciones de la conexión';
$string['connectionsettings_desc'] = 'Estas configuraciones definen como Moodle se conecta a Zoom.';
$string['connectionstatus'] = 'Estatus de conexión';
$string['defaultsettings'] = 'Configuraciones por defecto de Zoom';
$string['defaultsettings_help'] = 'Estas configuraciones definen los valores por defecto para todas las reuniones Zoom y webinars.';
$string['displayleadtime'] = 'Mostrar tiempo pre-junta';
$string['displayleadtime_desc'] = 'Si se habilita, el tiempo que falta antes de la junta será mostrado a los usuarios. De esta forma, los usuarios son informados si / cuando pueden unirse a la junta antes del horario agendado de la reunión. Esto podría evitar que los usuarios estén recargando constantemente la página hasta que puedan unirse.';
$string['displayleadtime_nohideif'] = 'Por favor tenga en cuenta que esta configuración solamente es procesada si la configuración \'{$a}\' está configurada a un valor mayor de cero..';
$string['displaypassword'] = 'Mostrar contraseña de acceso';
$string['downloadical'] = 'Descargar iCal';
$string['downloadical_disable'] = 'Deshabilitar descargar enlace a iCal';
$string['downloadical_enable'] = 'Habilitar descargar enlace a iCal';
$string['duration'] = 'Duración (minutos)';
$string['encryptiontype'] = 'Tipo de encriptación';
$string['encryptiontype_disable'] = 'Deshabilitar selector de tipo de encriptación';
$string['endtime'] = 'Hora de término';
$string['err_downloadicaldisabled'] = 'El descargar archivos iCal de reunión Zoom fue deshabilitado.';
$string['err_duration_nonpositive'] = 'La duración debe ser positiva.';
$string['err_duration_too_long'] = 'La duración no puede exceder 150 horas.';
$string['err_invalid_password'] = 'La contraseña contiene caracteres inválidos.';
$string['err_long_timeframe'] = 'Marco de hora (time frame) demasiado largo, mostrando resultados del último mes dentro del rango.';
$string['err_password'] = 'La contraseña solamente puede contener los caracteres siguientes: [a-z A-Z 0-9 @ - _ *]. Máximo 10 caracteres.';
$string['err_password_required'] = 'Se requiere contraseña';
$string['err_start_time_past'] = 'La fecha de inicio no puede estar en el pasado.';
$string['errorwebservice'] = 'Error del servidor web zoom: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom recibió una mala solicitud: {$a}';
$string['errorwebservice_notfound'] = 'El recurso no existe';
$string['export'] = 'Exportar';
$string['externaluser'] = 'Usuario externo';
$string['firstjoin'] = 'El primero que pueda unirse';
$string['firstjoin_desc'] = 'Lo más temprano que un usuario pueda unirse a una reunión agendada (minutos antes del inicio).';
$string['getmeetingreports'] = 'Obtener reporte de reunión de Zoom';
$string['globalsettings'] = 'Configuraciones globales';
$string['globalsettings_desc'] = 'Estas configuraciones aplican al plugin Zoom somo un todo.';
$string['host'] = 'Anfitrión';
$string['indicator:cognitivedepth'] = 'Zoom cognitivo';
$string['indicator:cognitivedepth_help'] = 'Este indicador está basado en la profundidad cognitiva alcanzada por el estudiante en una actividad Zoom.';
$string['indicator:socialbreadth'] = 'Zoom social';
$string['indicator:socialbreadth_help'] = 'Este indicador está basado en la amplitud social alcanzada por el estudiante en una actividad Zoom.';
$string['invalid_status'] = 'Estatus inválido; revisar la Basededatos.';
$string['invalidscheduleuser'] = 'Usted no puede agendar para el usuario especificado.';
$string['join'] = 'Unirse';
$string['join_meeting'] = 'Unirse a la reunión';
$string['joinbeforehost'] = 'Unirse a la reunión antes del anfitrión';
$string['joinbeforehostenable'] = 'Permitirle a participantes unirse en cualquier momento';
$string['joinlink'] = 'Enlace para unirse';
$string['jointime'] = 'Hora de unión';
$string['leavetime'] = 'Hora de partida';
$string['licenseonjoin'] = 'Seleccionar esta opción si le gustaría que el anfitrión recibiera una licencia al iniciar la reunión, <i>además de</i> al crearla.';
$string['licensesettings'] = 'Configuraciones de licencia';
$string['licensesettings_desc'] = 'Estas configuraciones definen la manera en la que Moodle maneja su licencia de Zoom.';
$string['licensesnumber'] = 'Número de licencias';
$string['lowlicenses'] = 'Si el número de sus licencias excede las necesarias, entonces cuando Usted cree cada nueva actividad por el usuario, le será asignada una licencia PRO al disminuir el estatus de otro usuario. La opción es efectiva cuando el número de licencias PRO es mayor de 5.';
$string['maskparticipantdata'] = 'Enmascarar datos del participante';
$string['maskparticipantdata_help'] = 'Impide que los datos del particiante aparezcan en reportes (útil para sitios que enmascaran los datos de participantes, como por ejemplo HIPAA).';
$string['media'] = 'Medio';
$string['meeting_finished'] = 'Terminada';
$string['meeting_invite_hide'] = 'Ocultar invitación a reunión';
$string['meeting_invite_show'] = 'Mostrar invitación a reunión';
$string['meeting_nonexistent_on_zoom'] = 'Inexistente en Zoom';
$string['meeting_not_started'] = 'No iniciada';
$string['meeting_started'] = 'En progreso';
$string['meeting_time'] = 'Hora de inicio';
$string['meetingcapacitywarning'] = 'Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_disable'] = 'Deshabilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarning_enable'] = 'Habilitar Advertencia de capacidad de reunión';
$string['meetingcapacitywarningheading'] = 'Advertencia de capacidad de reunión:';
$string['modulename'] = 'Reunión Zoom';
$string['modulename_help'] = 'Zoom es una plataforma de web y videoconferencia que le proporciona a los usuarios autorizados la habilidad para alojar reuniones en-línea.';
$string['modulenameplural'] = 'Reuniones Zoom';
$string['newmeetings'] = 'Nuevas Reuniones';
$string['nomeetinginstances'] = 'No se encontraron sesiones para esta reunión';
$string['noparticipants'] = 'No se encontraron participantes para esta sesión en este instante.';
$string['nosessions'] = 'No se encontraron sesiones para el rango especificado.';
$string['nozooms'] = 'Sin reuniones';
$string['nozoomsfound'] = 'No se encontraron reuniones para el curso dado.';
$string['off'] = 'Desconectado';
$string['oldmeetings'] = 'Reuniones Concluídas';
$string['on'] = 'Activo';
$string['option_audio'] = 'Opciones de Audio';
$string['option_authenticated_users'] = 'Requerir autenticación para unirse';
$string['option_encryption_type'] = 'Encriptación';
$string['option_encryption_type_enhancedencryption'] = 'Encriptación mejorada';
$string['option_host_video'] = 'Video del anfitrión';
$string['option_jbh'] = 'Reunirse antes que el anfitrión';
$string['option_mute_upon_entry'] = 'Enmudecer  a participantes al entrar';
$string['option_mute_upon_entry_help'] = 'Al habilitar esta opción automáticamente se enmudecerá a todos los participantes cuando se unan a la reunión. Los participantes pueden activar su micrófono ellos mismos después de unirse a la reunión.';
$string['option_participants_video'] = 'Video de participantes';
$string['option_proxyhost'] = 'Usar proxy';
$string['option_proxyhost_desc'] = 'El proxy aquí configurado como \'<code><hostname>:<port></code>\' solamente es usado para comunicarse con Zoom. Déjelo vacío para usas las configuraciones predeterminadas del proxy de Moodle. Usted solamente necesita configurar esto si desea configurar un proxy global en Moodle.';
$string['option_waiting_room'] = 'Sala de espera';
$string['participantdatanotavailable'] = 'Detalles no disponibles';
$string['participantdatanotavailable_help'] = 'Los datos de los participantes no están disponibles para esta sesión Zoom (por ejemplo, por cumplimiento con HIPAA).';
$string['participants'] = 'Participantes';
$string['password'] = 'Contraseña';
$string['password_allowed_char'] = 'El código de acceso solamente puede contener los siguientes caracteres: [a-z A-Z 0-9 @ - _ *].';
$string['password_consecutive'] = 'Máximo de {$a} caracteres consecutivos (abcd, 1111, 1234, etc.).';
$string['password_length'] = 'Mínimo de {$a} caracter(s).';
$string['password_letter'] = 'El código de acceso debe contener al menos 1 letra.';
$string['password_lower_upper'] = 'El código de acceso debe incluir tanto caracteres en minúsculas como en MAYÚSCULAS.';
$string['password_max_length'] = 'Máximo de 10 caracteres.';
$string['password_number'] = 'El código de acceso debe contener al menos 1 número.';
$string['password_only_numeric'] = 'El código de acceso solamente debe contener números y ningún otro caracter.';
$string['password_special'] = 'El código de acceso debe tener al menos 1 caracter especial (@-_*).';
$string['passwordprotected'] = 'Protegido por contraseña';
$string['pluginadministration'] = 'Gestionar Reuniones Zoom';
$string['pluginname'] = 'Reunión Zoom';
$string['privacy:metadata:zoom_meeting_details'] = 'La tabla de la base de datos que almacena información acerca de cada instancia de reunión.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'El nombre de la reunión a a la cual asistió el usuario.';
$string['privacy:metadata:zoom_meeting_participants'] = 'La tabla de la base de datos que almacena información acerca de participantes reunidos.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Por cuanto tiempo estuvo en la reunión el participante';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'La hora cuando el participante se unió a la reunión';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'La hora cuando el participante dejó la reunión';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'El nombre del participante';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'El email del participante';
$string['recreatesuccessful'] = 'Reunión creada exitosamente';
$string['recurringmeeting'] = 'Reunión recurrente';
$string['recurringmeeting_help'] = 'Habilitar esta opción hará a la reunión una reunión recurrente sin una fecha ni hora de terminación. Podrá entonces ser accesada en cualquier momento.';
$string['recurringmeetingexplanation'] = 'La reunión no tiene una fecha o una hora de terminación';
$string['recurringmeetinglong'] = 'Reunión recurrente (reunión sin fecha ni hora de término)';
$string['recurringmeetingthisis'] = 'Esta es una reunión recurrente';
$string['recycleonjoin'] = 'Reciclar licencia al unirse';
$string['redefinelicenses'] = 'Redefinir licencias';
$string['refreshreports'] = 'Refrescar reportes de reunión';
$string['report'] = 'Reportes';
$string['reportapicalls'] = 'LLamadas API reporte agotadas';
$string['resetapicalls'] = 'Reiniciar el número de llamadas API disponibles';
$string['schedule'] = 'Agendar';
$string['schedulefor'] = 'Agendar reunión para';
$string['scheduleforself'] = 'Usted mismo';
$string['schedulingprivilege'] = 'Privilegio para agendar';
$string['search:activity'] = 'Zoom - información de actividad';
$string['security'] = 'Seguridad';
$string['sessions'] = 'Sesiones';
$string['sessionsreport'] = 'Reporte de sesiones';
$string['start'] = 'Inicio';
$string['start_meeting'] = 'Iniciar Reunión';
$string['start_time'] = 'Cuando';
$string['starthostjoins'] = 'Iniciar video en cuanto se una el anfitrión';
$string['startpartjoins'] = 'Iniciar video en cuanto los parcipantes se reunan';
$string['starttime'] = 'Hora de inicio';
$string['status'] = 'Estatus';
$string['title'] = 'Título';
$string['topic'] = 'Tópico/Tema';
$string['unavailable'] = 'Usted no puede unirse en este momento.';
$string['unavailablefinished'] = 'La reunión ya ha terminado.';
$string['unavailablenotstartedyet'] = 'La reunión aun no ha comenzado.';
$string['updatemeetings'] = 'Actualizar configuraciones de reunión de Zoom';
$string['usepersonalmeeting'] = 'Usar ID {$a} personalizada de reunión';
$string['waitingroom'] = 'Sala de espera';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Este módulo ya estaba configurado como una reunión, no como un webinar. Usted no puede alternar esta configuración después de crear la reunión.</b></p>';
$string['webinar_already_true'] = '<p><b>Este módulo ya estaba onfigurado como un webinar, no como reunión. Usted no puede alternar esta configuración después de crear el webinar.</b></p>';
$string['webinar_disable'] = 'Deshabilitar webinars';
$string['webinar_help'] = 'Webinars le dan a los anfitriones control y flexibilidad  mejorados para alojar reuniones con audiencias más grandes.\\n\\n Esta opción solamente está disponible para cuentas Zoom pre-autorizadas.';
$string['webinar_showonlyiflicense'] = 'Mostrar opción de webinar solamente si el usuario tiene una licencia para alojar webinars.';
$string['webinarthisis'] = 'Este es un webinar';
$string['zoom:addinstance'] = 'Añadir una nueva reunión Zoom';
$string['zoom:view'] = 'Ver reuniones Zoom';
$string['zoomerr'] = 'Ocurrió un error con Zoom';
$string['zoomerr_alternativehostusernotfound'] = 'Usuario {$a} no fue encontrado en Zoom.';
$string['zoomerr_apikey_missing'] = 'Clave API Zoom no encontrada';
$string['zoomerr_apisecret_missing'] = 'Secreto API Zoom no encontrado';
$string['zoomerr_id_missing'] = 'Usted debe especificar una ID de curso_módulo o una ID de instancia';
$string['zoomerr_licensesnumber_missing'] = 'La configuración más alta de Zoom fue encontrada, pero no se encontró la configuración del número de licencia';
$string['zoomerr_maxretries'] = 'Reinentó {$a->maxretries} veces el hacer la llamada, pero falló: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Esta reunión no pudo ser encontrada en Zoom. Usted puede <a href="{$a->recreate}">recrearla aquí</a> o <a href="{$a->delete}">eliminarla completamente</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Esta reunión no pudo ser encontrada en Zoom. Por favor contacte al anfitrión  de la reunión si tiene preguntas.';
$string['zoomerr_usernotfound'] = 'No se pudo encontrar su cuenta en Zoom. Si Usted está usando Zoom por primera vez, Usted debe de habilitar su cuenta al ingresar a <a href="{$a}" target="_blank">{$a}</a> con sus credenciales para ingreso. Una vez que haya activado su cuenta Zoom, re-cargue esta página y continúe configurando su reunión. En caso contrario, asegúrese de que su cuenta de correo en Zoom coincida con su cuenta de correo en este sistema.';
$string['zoomurl'] = 'URL de página inicial de Zoom';
$string['zoomurl_desc'] = '';
