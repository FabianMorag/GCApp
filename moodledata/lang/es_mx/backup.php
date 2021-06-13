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
 * Strings for component 'backup', language 'es_mx', version '3.10'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'El proceso de respaldo ha completado';
$string['asyncbackupcompletebutton'] = 'Continuar';
$string['asyncbackupcompletedetail'] = 'El proceso de respaldo ha completado exitosamente. <br/> Usted puede acceder al respaldo en la  <a href="{$a}">página para restaurar.</a>';
$string['asyncbackuperror'] = 'El proceso de respaldo ha fallado';
$string['asyncbackuperrordetail'] = 'El proceso de respaldo ha fallado. Por favor póngase en contacto con su administrador del sistema.';
$string['asyncbackuppending'] = 'El proceso de respaldo está pendiente';
$string['asyncbackupprocessing'] = 'El proceso de respaldo está en progreso';
$string['asyncbadexecution'] = 'Ejecución de controlador de respaldo mala; es {$a} y debería ser 2';
$string['asynccheckprogress'] = 'Usted puede revisar el progreso en cualquier momento en la <a href="{$a}">página para restaurar.</a>.';
$string['asyncemailenable'] = 'Habilitar notificaciones de mensajes';
$string['asyncemailenabledetail'] = 'Cuando se habilita, los usuarios recibirán un mensaje cuando se complete una restauración o respaldo asincrónicos.';
$string['asyncgeneralsettings'] = 'Respaldo/restauración asincrónicos';
$string['asyncmessagebody'] = 'Mensaje';
$string['asyncmessagebodydefault'] = 'Hola {user_firstname} {user_lastname}, <br/> ¡Su {operation} (ID: {backupid}) ha completado exitosamente <br/><br/>Usted puede verla aquí {link}.';
$string['asyncmessagebodydetail'] = 'Mensaje a enviar cuando se complete una restauración o respaldo asincrónicos.';
$string['asyncmessagesubject'] = 'Asunto';
$string['asyncmessagesubjectdefault'] = '{operation} de Moodle se completó exitosamente';
$string['asyncmessagesubjectdetail'] = 'Asunto del mensaje';
$string['asyncnowait'] = 'Usted no necesita esperar aquí, ya que el proceso continuará en segundo plano.';
$string['asyncprocesspending'] = 'Proceso pendiente';
$string['asyncrestorecomplete'] = 'El proceso de restauración ha completado';
$string['asyncrestorecompletebutton'] = 'Continuar';
$string['asyncrestorecompletedetail'] = 'El proceso de restauración ha completado exitosamente. El seleccionar continuar lo llevará al <a href="{$a}">curso para el ítem restaurado.</a>';
$string['asyncrestoreerror'] = 'El proceso de restauración ha fallado';
$string['asyncrestoreerrordetail'] = 'El proceso de restauración ha fallado. Por favor póngase en contacto con su administrador del sistema.';
$string['asyncrestoreinprogress'] = 'Restauraciones en progreso';
$string['asyncrestoreinprogress_help'] = 'Las restauraciones de curso asincrónicas que están en progreso son mostradas aquí.';
$string['asyncrestorepending'] = 'El proceso de restauración está pendiente';
$string['asyncrestoreprocessing'] = 'La restauración está en progreso';
$string['asyncreturn'] = 'Regresar al curso';
$string['autoactivedescription'] = 'Escoja si desea o no hacer respaldos automáticos. Si selecciona el modo manual los respaldos automáticos sólo serán posibles mediante el "script" CLI de respaldos automáticos. Esto se puede hacer manualmente mediante la línea de comandos de UNIX o a través de cron.';
$string['autoactivedisabled'] = 'Deshabilitado';
$string['autoactiveenabled'] = 'Habilitado';
$string['autoactivemanual'] = 'Manual';
$string['automatedbackupschedule'] = 'Agendar';
$string['automatedbackupschedulehelp'] = 'Decida en qué días de la semana se realizarán los respaldos automatizados';
$string['automatedbackupsinactive'] = 'Los respaldos programados no han sido habilitados por el administrador del sitio';
$string['automatedbackupstatus'] = 'Estatus de los respaldos automatizados';
$string['automateddeletedays'] = 'Eliminar respaldos más viejos que';
$string['automatedmaxkept'] = 'Número máximo de respaldos conservados';
$string['automatedmaxkepthelp'] = 'Esto especifica el número máximo de respaldos automatizados recientes a conservar para cada curso. Los respaldos que sean más antiguos serán eliminados automáticamente.';
$string['automatedminkept'] = 'Número mínimo de respaldos conservados';
$string['automatedminkepthelp'] = 'Si se eliminan los respaldos más antiguos que el número de días especificado, puede suceder que un curso inactivo termine sin respaldos. Para evitar esto, debe especificarse un número mínimo de respaldos a conservar.';
$string['automatedsettings'] = 'Configuraciones de los respaldos automatizados';
$string['automatedsetup'] = 'Configuración de respaldo automatizado';
$string['automatedstorage'] = 'Almacenamiento de respaldo automatizado';
$string['automatedstoragehelp'] = 'Elija la ubicación donde desea almacenar los respaldos automatizados';
$string['backupactivity'] = 'Respaldar actividad: {$a}';
$string['backupcourse'] = 'Respaldar curso: {$a}';
$string['backupcoursedetails'] = 'Detalles del curso';
$string['backupcoursesection'] = 'Sección: {$a}';
$string['backupcoursesections'] = 'Secciones del curso';
$string['backupdate'] = 'Fecha realizado';
$string['backupdetails'] = 'Detalles del respaldo';
$string['backupdetailsnonstandardinfo'] = 'El archivo seleccionado no es un archivo de respaldo estándar de Moodle. El proceso de restauración intentará convertir el archivo de respaldo al formato estándar y luego restaurarlo.';
$string['backupformat'] = 'Formato';
$string['backupformatimscc1'] = 'IMS Cartucho Común 1.0';
$string['backupformatimscc11'] = 'IMS Cartucho Común 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Formato desconocido';
$string['backuplog'] = 'Información técnica y advertencias';
$string['backupmode'] = 'Modo';
$string['backupmode10'] = 'General';
$string['backupmode20'] = 'Importar';
$string['backupmode30'] = 'Comunidad (hub)';
$string['backupmode40'] = 'Mismo sitio';
$string['backupmode50'] = 'Automatizado';
$string['backupmode60'] = 'Covertido';
$string['backupmode70'] = 'Asincrónico';
$string['backupsection'] = 'Respaldo de sección de curso: {$a}';
$string['backupsettings'] = 'Configuración de RESPALDO';
$string['backupsitedetails'] = 'Detalles del sitio';
$string['backupstage16action'] = 'Continuar';
$string['backupstage1action'] = 'Siguiente';
$string['backupstage2action'] = 'Siguiente';
$string['backupstage4action'] = 'Realizar respaldo';
$string['backupstage8action'] = 'Continuar';
$string['backuptype'] = 'Tipo';
$string['backuptypeactivity'] = 'Actividad';
$string['backuptypecourse'] = 'Curso';
$string['backuptypesection'] = 'Sección';
$string['backupversion'] = 'Versión del respaldo';
$string['cannotfindassignablerole'] = 'El rol {$a} en el archivo de respaldo no se puede mapear a ninguno de los roles que usted puede asignar.';
$string['choosefilefromactivitybackup'] = 'Area de respaldo de actividad';
$string['choosefilefromactivitybackup_help'] = 'Aquí se almacenan los respaldos de actividad que usan configuraciones por defecto.';
$string['choosefilefromautomatedbackup'] = 'Respaldos automatizados';
$string['choosefilefromautomatedbackup_help'] = 'Contiene los respaldos generados automáticamente';
$string['choosefilefromcoursebackup'] = 'Area de respaldos de curso';
$string['choosefilefromcoursebackup_help'] = 'Aquí se almacenan los respaldos de curso que usen configuraciones por defecto.';
$string['choosefilefromuserbackup'] = 'Zona de respaldos privados del usuario';
$string['choosefilefromuserbackup_help'] = 'Aquí se almacenan los archivos de respaldo con información del usuario anonimizada.';
$string['config_keep_groups_and_groupings'] = 'Por defecto, conservar grupos y agrupamientos actuales.';
$string['config_keep_roles_and_enrolments'] = 'Por defecto, conservar roles e inscripciones actuales.';
$string['config_overwrite_conf'] = 'Permitirle al usuario sobrescribir la configuración actual del curso';
$string['config_overwrite_course_fullname'] = 'Por defecto sobrescribir el nombre completo del curso con el nombre completo del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiarle el nombre completo al curso (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Por defecto sobrescribir el nombre corto del curso con el nombre del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiarle el nombre corto al curso (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Por defecto sobrescribir la fecha de inicio del curso con la fecha del archivo de respaldo. Esto necesita que esté activado el "Sobrescribir configuración del curso" y que el usuario actual tenga la capacidad para cambiar fechas del curso al restaurar (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Ajusta la configuración por defecto para incluir actividades en un respaldo';
$string['configgeneralanonymize'] = 'Si se habilita, toda la información relativa a los usuarios será anónima por defecto.';
$string['configgeneralbadges'] = 'Configuración por defecto para incluir insignias dentro de un respaldo.';
$string['configgeneralblocks'] = 'Ajusta la configuración por defecto para incluir bloques en un respaldo';
$string['configgeneralcalendarevents'] = 'Configurar el valor por defecto para incluir eventos del calendario en un respaldo.';
$string['configgeneralcomments'] = 'Ajusta la configuración por defecto para incluir comentarios en un respaldo';
$string['configgeneralcompetencies'] = 'Configurar el valor por defecto para incluir competencias en un respaldo.';
$string['configgeneralcontentbankcontent'] = 'Configurar las opciones predeterminadas para incluir contenido del banco de contenido en un respaldo.';
$string['configgeneralfiles'] = 'Configurar el predeterminado para incluir archivos en un respaldo. Por favor tenga en cuenta: Deshabilitar esta configuración resultará en un respaldo que solamente incluye referencias a archivos. Esto no es un problema si el respaldo es restaurado en el mismo sitio y los archivos no han sido eliminados de acuerdo a la configuración \'Limpiar pool de archivos chatarra (filescleanupperiod).';
$string['configgeneralfilters'] = 'Ajusta la configuración por defecto para incluir filtros en un respaldo';
$string['configgeneralgroups'] = 'Configura el ajuste por defecto para incluir grupos y agrupamientos en un respaldo.';
$string['configgeneralhistories'] = 'Ajusta la configuración por defecto para incluir la historia del usuario en un respaldo';
$string['configgenerallogs'] = 'Si se habilita, las bitácoras se incluirán por defecto  en los respaldos.';
$string['configgeneralquestionbank'] = 'Si se habilita, el banco de preguntas estará incluido por defecto en los respaldos. POR FAVOR TENGA EN CUENTA QUE al deshabilitar esta configuración se deshabilitará el respaldo de actividades que usen el banco de preguntas, como por ejemplo, los exámenes.';
$string['configgeneralroleassignments'] = 'Si se habilita, los roles asignados serán también respaldados por defecto.';
$string['configgeneralusers'] = 'Ajusta la configuración por defecto para incluir usuarios en los respaldos';
$string['configgeneraluserscompletion'] = 'Si se habilita, la información sobre grado de finalización será incluida por defecto en los respaldos';
$string['configlegacyfiles'] = 'Configura lo predterminado para incluir los archivos heredados antiguos del curso en un respaldo. Los archivos heredados antiguos son de versiones de Moodle anteriores a 2.0.';
$string['configloglifetime'] = 'Esto especifica el tiempo que desea que se mantengan la información de respaldos en las bitácoras. Las bitácoras más antiguas que este tiempo serán borradas automáticamente. Se recomienda mantener pequeño este valor, porque la información guardada en bitácoras sobre respaldos puede ser enorme y llenar rápidamente el disco duro del servidor.';
$string['configrestoreactivities'] = 'Configurar el ajuste por defecto para restaurar actividades.';
$string['configrestorebadges'] = 'Configurar el ajuste por defecto para restaurar insignias.';
$string['configrestoreblocks'] = 'Configurar el ajuste por defecto para restaurar bloques.';
$string['configrestorecalendarevents'] = 'Configurar el ajuste por defecto para restaurar eventos del calendario.';
$string['configrestorecomments'] = 'Configurar el ajuste por defecto para restaurar comentarios.';
$string['configrestorecompetencies'] = 'Configurar el ajuste por defecto para restaurar competencias.';
$string['configrestorecontentbankcontent'] = 'Configurar las opciones predeterminadas para restaurar contenido del banco de contenido.';
$string['configrestoreenrolments'] = 'Configurar el ajuste por defecto para restaurar métodos de inscripción.';
$string['configrestorefilters'] = 'Configurar el ajuste por defecto para restaurar filtros.';
$string['configrestoregroups'] = 'Configurar el ajuste por defecto para restaurar grupos y agrupamientos si ellos fueron incluidos en el respaldo.';
$string['configrestorehistories'] = 'Configurar el ajuste por defecto para restaurar historia del usuario si esta fue incluida en el respaldo.';
$string['configrestorelogs'] = 'Si se habilita, las bitácoras serán restauradas por defecto si ellas fueron incluidas en el respaldo.';
$string['configrestoreroleassignments'] = 'Si se habilita, las asignaciones de roles por defecto serán restauradas si estaban incluidas en el respaldo.';
$string['configrestoreusers'] = 'Configurar el ajuste por defecto sobre restaurar o no usuarios, si ellos fueron incluidos en el respaldo.';
$string['configrestoreuserscompletion'] = 'Si se habilita, la información de finalización del usuario será restaurada por defecto si estaba incluida en el respaldo.';
$string['confirmcancel'] = 'Cancelar respaldo';
$string['confirmcancelimport'] = 'Cancelar importación';
$string['confirmcancelno'] = 'No cancelar';
$string['confirmcancelquestion'] = '¿Está seguro de querer cancelar? Cualquier información que hubiera escrito se perderá.';
$string['confirmcancelrestore'] = 'Cancelar restauración';
$string['confirmcancelyes'] = 'Cancelar respaldo';
$string['confirmnewcoursecontinue'] = 'Advertencia curso nuevo';
$string['confirmnewcoursecontinuequestion'] = 'Un curso temporal (oculto) será creado por el proceso de restauración de curso. Para abortar la restauración, elija cancelar. No cierre el navegador mientras restaura.';
$string['copiesinprogress'] = 'Este curso tiene copias en proceso. <a href="{$a}">Ver copias en progreso.</a>';
$string['copycoursedesc'] = 'Este curso será duplicado y puesto en la categoría de curso seleccionada.';
$string['copycourseheading'] = 'Copiar un curso';
$string['copycoursetitle'] = 'Copiar curso: {$a}';
$string['copydest'] = 'Destino';
$string['copyfieldnotfound'] = 'No se encontró un campo necesario';
$string['copyformfail'] = 'Falló el envío AJAX del formato de copia del curso.';
$string['copyingcourse'] = 'Copia de curso en progreso';
$string['copyingcourseshortname'] = 'copiando';
$string['copyop'] = 'Operación actual';
$string['copyprogressheading'] = 'Copias de curso en progreso';
$string['copyprogressheading_help'] = 'Esta tabla muestra el estado de todas sus copias de curso sin terminar.';
$string['copyprogresstitle'] = 'Progreso de copia de curso';
$string['copyreturn'] = 'Copiar y regresar';
$string['copysource'] = 'Origen';
$string['copyview'] = 'Copiar y ver';
$string['coursecategory'] = 'Categoría a donde se restaurará el curso';
$string['courseid'] = 'ID original';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursetitle'] = 'Título';
$string['currentstage1'] = 'Configuraciones iniciales';
$string['currentstage16'] = 'Completo';
$string['currentstage2'] = 'Configuraciones del esquema';
$string['currentstage4'] = 'Confirmar y revisar';
$string['currentstage8'] = 'Realizar respaldo';
$string['enableasyncbackup'] = 'Habiltar respaldos asincrónicos';
$string['enableasyncbackup_help'] = 'Si se habilita, todas las operaciones de respaldo y restauración se harán asincrónicamente. Esto no afecta importaciones y exportaciones. Los respaldos y restauraciones asincrónicos les permiten a los usuarios el hacer otras operaciones mientras está en progreso un respaldo o una restauración.';
$string['enterasearch'] = 'Escriba una búsqueda';
$string['error_block_for_module_not_found'] = 'Instancia de bloque huérfana (id: {$a->bid}) para módulo de curso (id: {$a->mid}) encontrada. Este bloque no será respaldado.';
$string['error_course_module_not_found'] = 'Se encontró un módulo de curso huérfano (id: {$a}). Este módulo no será restaurado.';
$string['errorcopyingbackupfile'] = 'No se pudo copiar el arechivo de respaldo a la carpeta temporal antes de restaurar.';
$string['errorfilenamemustbezip'] = 'El nombre que se introduzca debe ser un archivo ZIP y con la extensión .MBZ';
$string['errorfilenamerequired'] = 'Debe introducir un nombre de archivo válido para este respaldo';
$string['errorfilenametoolong'] = 'La longitud del nombre_de_archivo debe ser menor de 255 caracteres.';
$string['errorinvalidformat'] = 'Formato de respaldo desconocido';
$string['errorinvalidformatinfo'] = 'El archivo seleccionado no es un archivo de respaldo válido de Moodle y no puede ser restaurado.';
$string['errorminbackup20version'] = 'Este archivo de respaldo ha sido creado con una versión de desarrollo de respaldo de Moodle ({$a->backup}) y se requiere al menos la versión {$a->min}. Por lo tanto, no pudo ser restaurado.';
$string['errorrestorefrontpagebackup'] = 'Usted solamente puede restaurar los respaldos de la portada desde la portada';
$string['executionsuccess'] = 'El archivo de respaldo se creó exitosamente';
$string['extractingbackupfileto'] = 'Extrayendo archivo de respaldo hacia: {$a}';
$string['failed'] = 'Falló el respaldo';
$string['filealiasesrestorefailures'] = 'Fallas en restauración de alias';
$string['filealiasesrestorefailures_help'] = 'Los alias son enlaces simbólicos hacia otros archivos, incluyendo aquellos guardados en repositorios externos. En algunos casos, Moodle no puede restaurarlos - por ejemplo cuando se restaura un respaldo en otro sitio o cuando el archivo referenciado no existe.

Se pueden encontrar más detalles y la causa real de la falla en el archivo de la bitácora de restauración.';
$string['filealiasesrestorefailuresinfo'] = 'Algunos alias incluidos en el archivo de respaldo no pudieron restaurarse. La lista siguiente contiene su ubicación esperada y el archivo origen al que se estaban refiriendo en el sitio original.';
$string['filename'] = 'Nombre del archivo';
$string['filereferencesincluded'] = 'Hay referencias en archivos hacia contenidos externos incluídos en el paquete de respaldo. Estas no no funcionarán si el respaldo es restaurado en un sitio diferente.';
$string['filereferencesnotsamesite'] = 'El respaldo es de un sitio diferente, por lo que las referencias a archivos no pueden restaurarse.';
$string['filereferencessamesite'] = 'El respaldo es del mismo sitio, por lo que las referencias a archivos si pueden restaurarse.';
$string['generalactivities'] = 'Incluir actividades y recursos';
$string['generalanonymize'] = 'Volver anónima la información';
$string['generalbackdefaults'] = 'Configuraciones predeterminadas del respaldo';
$string['generalbadges'] = 'Incluir insignias';
$string['generalblocks'] = 'Incluir bloques';
$string['generalcalendarevents'] = 'Incluir eventos del calendario';
$string['generalcomments'] = 'Incluir comentarios';
$string['generalcompetencies'] = 'Incluir competencias';
$string['generalcontentbankcontent'] = 'Incluir contenido del banco de contenido';
$string['generalenrolments'] = 'Incluir métodos de inscripción';
$string['generalfiles'] = 'Incluir archivos';
$string['generalfilters'] = 'Incluir filtros';
$string['generalgradehistories'] = 'Incluir historias';
$string['generalgroups'] = 'Incluir grupos y agrupamientos';
$string['generalhistories'] = 'Incluir historias';
$string['generallegacyfiles'] = 'Incluir archivos heredados antiguos del curso';
$string['generallogs'] = 'Incluir bitácoras (logs)';
$string['generalquestionbank'] = 'Incluir banco de preguntas';
$string['generalrestoredefaults'] = 'Valores generales por defecto para restauración';
$string['generalrestoresettings'] = 'Configuraciones generales de restauración';
$string['generalroleassignments'] = 'Incluir asignaciones de rol';
$string['generalsettings'] = 'Configuraciones de respaldo general';
$string['generalusers'] = 'Incluir usuarios';
$string['generaluserscompletion'] = 'Incluir información sobre grado de finalización de usuarios';
$string['hidetypes'] = 'Ocultar opciones de tipos';
$string['importbackupstage16action'] = 'Continuar';
$string['importbackupstage1action'] = 'Siguiente';
$string['importbackupstage2action'] = 'Siguiente';
$string['importbackupstage4action'] = 'Realizar importación';
$string['importbackupstage8action'] = 'Continuar';
$string['importcurrentstage0'] = 'Selección de curso';
$string['importcurrentstage1'] = 'Configuraciones iniciales';
$string['importcurrentstage16'] = 'Completo';
$string['importcurrentstage2'] = 'Configuraciones esquema';
$string['importcurrentstage4'] = 'Confirmar y revisar';
$string['importcurrentstage8'] = 'Realizar importación';
$string['importfile'] = 'Importar un archivo de respaldo';
$string['importgeneralduplicateadminallowed'] = 'Permitir resolución de conflicto administrativo';
$string['importgeneralduplicateadminallowed_desc'] = 'Si el sitio tiene una cuenta con el nombre_de_usuario \'admin\', entonces el intentar restaurar un archivo de respaldo que contenga un nombre_de_usuario \'admin\' puede causar un conflicto. Si se habilita esta configuración, el conflicto será resuelto al cambiar el nombre_de_usuario en el archivo de respaldo a admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Número máximo de cursos enlistados para importar';
$string['importgeneralmaxresults_desc'] = 'Esto controla el número de cursos que son enlistados durante el primer paso del proceso de importación';
$string['importgeneralsettings'] = 'Valores generales predeterminados de importación';
$string['importrootsettings'] = 'Importar configuraciones';
$string['importsettings'] = 'Configuraciones generales de importación';
$string['importsuccess'] = 'Importación completada. Pulse continuar para volver al curso.';
$string['includeactivities'] = 'Incluir:';
$string['includeditems'] = 'Items incluídos:';
$string['includefilereferences'] = 'Archivo hace referencia a contenidos externos';
$string['includesection'] = 'Sección {$a}';
$string['includeuserinfo'] = 'Datos de usuario';
$string['inprogress'] = 'Respaldo en progreso';
$string['jumptofinalstep'] = 'Saltar al paso final';
$string['keep'] = 'Conservar';
$string['keptroles'] = 'Incluir inscripciones de rol';
$string['keptroles_help'] = 'Usuarios con los roles seleccionados serán inscritos en el nuevo curso. No serán copiados los datos de usuarios a menos que estuviera habilitado el \'incluir datos del usuario\'.';
$string['locked'] = 'Cerrado';
$string['lockedbyconfig'] = 'Este ajuste ha sido bloqueado por la configuración predeterminada de respaldo';
$string['lockedbyhierarchy'] = 'Cerrado por dependencias';
$string['lockedbypermission'] = 'Usted no tiene permisos para cambiar esta configuración';
$string['loglifetime'] = 'Mantener bitácoras por';
$string['managefiles'] = 'Gestionar archivos de respaldo';
$string['mergerestoredefaults'] = 'Restaurar valores por defecto al unir-juntar dentro de otro curso';
$string['missingfilesinpool'] = 'Algunos archivos no pudieron guardarse al hacer el respaldo, por lo que no será posible restaurarlos.';
$string['module'] = 'Módulo';
$string['moodleversion'] = 'Versión de Moodle';
$string['morecoursesearchresults'] = 'Se encontraron más de {$a} cursos , se muestran los primeros {$a} resultados';
$string['moreresults'] = 'Hay demasiados resultados, haga una búsqueda más específica.';
$string['nomatchingcourses'] = 'No hay cursos que mostrar';
$string['norestoreoptions'] = 'No hay categorías o cursos existentes a donde pueda Usted restaur.ar';
$string['originalwwwroot'] = 'URL del respaldo';
$string['overwrite'] = 'Sobrescribir';
$string['pendingasyncdeletedetail'] = 'Este curso tiene un respaldo asincrónico pendiente.<br/> Los cursos no pueden ser eliminados hasta que termine este respaldo.';
$string['pendingasyncdetail'] = 'Los respaldos asincrónicos solamente le permiten a un usuario el tener un respaldo pendiente para un recurso a la vez. <br/> Los respaldos múltiples asincrónicos del mismo recurso no pueden ser puestos en cola, ya que esto probablemente resultaría en múltiples respaldos con el mismo contenido.';
$string['pendingasyncedit'] = 'Hay un respaldo asincrónico pendiente para este curso. Por favor no edite este curso hasta después de que esté completado el respaldo.';
$string['pendingasyncerror'] = 'Respaldo pendiente para este recurso';
$string['preparingdata'] = 'Preparando datos';
$string['preparingui'] = 'Preparándose a mostrar página';
$string['previousstage'] = 'Previo';
$string['privacy:metadata:backup:detailsofarchive'] = 'Este archivo puede contener varios datos del usuario relacionados con un curso, tales como calificaciones, inscripciones de usuario y datos de actividades.';
$string['privacy:metadata:backup:externalpurpose'] = 'El propósito de este archivo es almacenar información relacionada con un curso, la cual puede ser restaurada en el futuro.';
$string['privacy:metadata:backup_controllers'] = 'La lista de operaciones de respaldo';
$string['privacy:metadata:backup_controllers:itemid'] = 'La ID del curso';
$string['privacy:metadata:backup_controllers:operation'] = 'La operación que fue efectuada; por ejemplo, restaurar.';
$string['privacy:metadata:backup_controllers:timecreated'] = 'El momento cuando la acción fue creada';
$string['privacy:metadata:backup_controllers:timemodified'] = 'El momento cuando la acción fue modificada';
$string['privacy:metadata:backup_controllers:type'] = 'El tipo de ítem sobre del cual se está operando; por ejemplo, actividad.';
$string['qcategory2coursefallback'] = 'La categoría de preguntas "{$a->name}", originalmente dentro del contexto de categoría sistema/curso en el archivo de respaldo, será creada en el contexto de curso al ser restaurada.';
$string['qcategorycannotberestored'] = 'La restauración no puede crear la categoría de preguntas  "{$a->name}"';
$string['question2coursefallback'] = 'La categoría de preguntas "{$a->name}", originalmente en la categoría de contexto sistema/curso dentro del archivo de copia de seguridad, se creará en el contexto del curso al ser restaurada';
$string['questionegorycannotberestored'] = 'La restauración no puede crear las preguntas  "{$a->name}"';
$string['recyclebin_desc'] = 'Tenga en cuenta que estas configuraciones también aplicarán para la papelera de reciclaje';
$string['replacerestoredefaults'] = 'Restaurar valores por defecto al restaurar hacia otro curso eliminando contenidos';
$string['restoreactivity'] = 'Restaurar actividad';
$string['restorecourse'] = 'Restaurar curso';
$string['restorecoursesettings'] = 'Configuraciones de curso';
$string['restoredcourseid'] = 'ID de curso restaurado: {$a}';
$string['restoreexecutionsuccess'] = 'El curso fue restaurado exitosamente, elija el botón inferior de continuar, que lo llevará a ver el curso que Usted restauró.';
$string['restorefileweremissing'] = 'Algunos archivos no pudieron restaurarse debido a que faltaban en el respaldo.';
$string['restorenewcoursefullname'] = 'Nombre del nuevo curso';
$string['restorenewcourseshortname'] = 'Nombre corto del nuevo curso';
$string['restorenewcoursestartdate'] = 'Nueva fecha de inicio';
$string['restorerolemappings'] = 'Restaurar mapeo de roles';
$string['restorerootsettings'] = 'Restaurar configuraciones';
$string['restoresection'] = 'Restaurar sección';
$string['restorestage1'] = 'Confirmar';
$string['restorestage16'] = 'Revisar';
$string['restorestage16action'] = 'Realizar restauración';
$string['restorestage1action'] = 'Siguiente';
$string['restorestage2'] = 'Destino';
$string['restorestage2action'] = 'Siguiente';
$string['restorestage32'] = 'Proceso';
$string['restorestage32action'] = 'Continuar';
$string['restorestage4'] = 'Configuraciones';
$string['restorestage4action'] = 'Siguiente';
$string['restorestage64'] = 'Completo';
$string['restorestage64action'] = 'Continuar';
$string['restorestage8'] = 'Esquema';
$string['restorestage8action'] = 'Siguiente';
$string['restoretarget'] = 'Restaurar destino';
$string['restoretocourse'] = 'Restaurar al curso:';
$string['restoretocurrentcourse'] = 'Restaurar adentro de este curso';
$string['restoretocurrentcourseadding'] = 'Fusionar el curso del respaldo con este curso';
$string['restoretocurrentcoursedeleting'] = 'Eliminar los contenidos de este curso y después restaurar';
$string['restoretoexistingcourse'] = 'Restaurar dentro de un curso existente';
$string['restoretoexistingcourseadding'] = 'Fusionar el curso del respaldo con el curso existente';
$string['restoretoexistingcoursedeleting'] = 'Eliminar el contenido del curso actual y después restaurar';
$string['restoretonewcourse'] = 'Restaurar como curso nuevo';
$string['restoringcourse'] = 'Restauración de curso en progreso';
$string['restoringcourseshortname'] = 'restaurando';
$string['rootenrolmanual'] = 'Restaurar como inscripciones manuales';
$string['rootsettingactivities'] = 'Incluir actividades y recursos';
$string['rootsettinganonymize'] = 'Hacer anónima información de usuarios';
$string['rootsettingbadges'] = 'Incluir insignias';
$string['rootsettingblocks'] = 'Incluir bloques';
$string['rootsettingcalendarevents'] = 'Incluir eventos del calendario';
$string['rootsettingcomments'] = 'Incluir comentarios';
$string['rootsettingcompetencies'] = 'Incluir competencias';
$string['rootsettingcontentbankcontent'] = 'Incluir contenido del banco de contenido';
$string['rootsettingcustomfield'] = 'Incluir campos personalizados';
$string['rootsettingenrolments'] = 'Incluir métodos de inscripción';
$string['rootsettingenrolments_always'] = 'Sí, siempre';
$string['rootsettingenrolments_never'] = 'No, restaurar usuarios como inscripciones manuales';
$string['rootsettingenrolments_withusers'] = 'Si, pero solamente si están incluidos usuarios';
$string['rootsettingfiles'] = 'Incluir archivos';
$string['rootsettingfilters'] = 'Incluir filtros';
$string['rootsettinggradehistories'] = 'Incluir historial de calificaciones';
$string['rootsettinggroups'] = 'Incluir grupos y agrupamientos';
$string['rootsettingimscc1'] = 'Convertir a IMS Cartucho Común 1.0';
$string['rootsettingimscc11'] = 'Convertir a IMS Cartucho Común 1.1';
$string['rootsettinglegacyfiles'] = 'Incluir archivos heredados antiguos del curso';
$string['rootsettinglogs'] = 'Incluir bitácoras (logs) del curso';
$string['rootsettingquestionbank'] = 'Incluir banco de preguntas';
$string['rootsettingroleassignments'] = 'Incluir asignaciones de rol de usuario';
$string['rootsettings'] = 'Configuraciones del respaldo';
$string['rootsettingusers'] = 'Incluir usuarios inscritos';
$string['rootsettinguserscompletion'] = 'Incluir detalles de grado de finalización de usuarios';
$string['samesitenotification'] = 'El respaldo fue creado con solamente referencias a archivos, no tiene los archivos mismos. La restauración solamente funcionará en este mismo sitio.';
$string['sectionactivities'] = 'Actividades';
$string['sectioninc'] = 'Incluído en respaldo (sin información de usuarios)';
$string['sectionincanduser'] = 'Incluído en respaldo junto con la información de usuarios';
$string['selectacategory'] = 'Seleccione una categoría';
$string['selectacourse'] = 'Seleccione un curso';
$string['setting_course_fullname'] = 'Nombre del curso';
$string['setting_course_shortname'] = 'Nombre corto del curso';
$string['setting_course_startdate'] = 'Fecha de inicio del curso';
$string['setting_keep_groups_and_groupings'] = 'Mantener grupos y agrupamientos actuales';
$string['setting_keep_roles_and_enrolments'] = 'Mantener los roles e inscripciones actuales';
$string['setting_overwrite_conf'] = 'Sobrescribir la configuración del curso';
$string['setting_overwrite_course_fullname'] = 'Sobrescribir el nombre-completo del curso';
$string['setting_overwrite_course_shortname'] = 'Sobrescribir el nombre-corto del curso';
$string['setting_overwrite_course_startdate'] = 'Sobrescribir la fecha de inicio del curso';
$string['showtypes'] = 'Mostrar opciones de tipos';
$string['sitecourseformatwarning'] = 'Este es un respaldo de la portada; Por favor tenga en cuenta que  solamente puede restaurarse desde la portada';
$string['skiphidden'] = 'Saltar cursos ocultos';
$string['skiphiddenhelp'] = 'Elegir si se saltan o no los cursos ocultos';
$string['skipmodifdays'] = 'Saltar cursos sin modificaciones desde';
$string['skipmodifdayshelp'] = 'Elegir saltar cursos que no hayan sido modificados desde hace cierto número de días';
$string['skipmodifprev'] = 'Saltar cursos que no se hayan modificado desde el respaldo anterior';
$string['skipmodifprevhelp'] = 'Elegir si se saltan o no cursos que no hayan sido modificados desde el respaldo automático anterior. Esto requiere que estén habilitadas las bitácoras.';
$string['status'] = 'Estado';
$string['storagecourseandexternal'] = 'Área de archivos de respaldo de curso y la carpeta específica';
$string['storagecourseonly'] = 'Área de archivos de respaldo de curso';
$string['storageexternalonly'] = 'Especifique directorio para los respaldos automatizados';
$string['successful'] = 'Respaldo exitoso';
$string['successfulcopy'] = 'Copiado exitoso';
$string['successfulrestore'] = 'Restauración exitosa';
$string['timetaken'] = 'Tiempo empleado';
$string['title'] = 'Título';
$string['totalcategorysearchresults'] = 'Categorías totales: {$a}';
$string['totalcoursesearchresults'] = 'Cursos totales: {$a}';
$string['undefinedrolemapping'] = 'Mapeo de rol no definido para arquetipo \'{$a}\'.';
$string['unnamedsection'] = 'Sección sin-nombre';
$string['userdata'] = 'Incluir datos del usuario';
$string['userdata_help'] = 'Cuando se habilita, los datos, como por ejemplo las publicaciones en foros, envíos de tareas, etc,  serán copiados al nuevo curso para cualquier usuario con un rol seleccionado en \'incluir inscripciones por rol\'.';
$string['userinfo'] = 'Info_usuario';
