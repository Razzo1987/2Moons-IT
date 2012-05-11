<?php

/**
 *  2Moons
 *  Copyright (C) 2011 Jan Kröpke
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package 2Moons
 * @author Jan Kröpke <info@2moons.cc>
 * @author Razzo <webmaster@razzo.org> (Italian translation)
 * @copyright 2009 Lucky
 * @copyright 2011 Jan Kröpke <info@2moons.cc>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.5 (2011-07-31)
 * @info $Id: INSTALL.php 2149 2012-03-15 22:24:13Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

$LNG['back']					= 'Indietro';
$LNG['continue']				= 'Continua';
$LNG['login']					= 'Login';

$LNG['menu_intro']				= 'Introduzione';
$LNG['menu_install']			= 'Installa';
$LNG['menu_license']			= 'Licenza';

$LNG['title_install']			= 'Installatore';

$LNG['intro_lang']				= 'Lingua';
$LNG['intro_install']			= 'Installazione';
$LNG['intro_welcome']			= 'Benvenuto in 2Moons!';
$LNG['intro_text']				= '2Moons è uno dei migliori cloni di OGame.<br>2Moons è la versione di Xnova più recente e stabile mai sviluppata. 2Moons brilla per la sua stabilità, flessibilità, dinamismo, qualità e facilità d\'uso. Speriamo sempre di essere al di sopra delle vostre aspettative.<br><br>Il sistema di installazione ti guiderà attraverso l\'installazione o l\'aggiornamento da una versione precedente a quella più recente. Per qualsiasi domanda o problema non esitate a chiedere il nostro supporto.<br><br>2Moons è un progetto open source ed è concesso in licenza GPL v3 sotto GNU. Per informazioni rigaurdo la licenza, cliccare "licenza" sulla voce di menu appropriata di questa pagina.<br><br>Prima di avviare l\'installazione sarà eseguito un piccolo test per verificare se i requisiti minimi sono supportati.';

$LNG['licence_head']			= 'Termini di licenza';
$LNG['licence_desc']			= 'Si prega di leggere il seguente accordo di licenza. Utilizzare la barra di scorrimento per visualizzare l\'intero documento.';
$LNG['licence_accept']			= 'Non si accettano tutti i termini delle condizioni di licenza? È possibile installare il software solo se si accettano i termini della licenza.';
$LNG['licence_need_accept']		= 'Per continuare con l\'installazione, è necessario accettare  i termini della licenza.';

$LNG['req_head']				= 'Requisiti di Sistema';
$LNG['req_desc']				= 'Prima che l\'installazione possa continuare, 2Moons effettuerà alcuni test sulla configurazione del server e dei file per garantire che sia possibile installare e utilizzare 2Moons. Si prega di leggere attentamente i risultati e di non procedere prima che vengano passati tutti i test necessari. Se si desidera utilizzare una qualsiasi delle funzioni che sono elencate sotto i moduli opzionali, è necessario assicurarsi che i test appropiati siano anch\'essi passati.';
$LNG['reg_yes']					= 'Si';
$LNG['reg_no']					= 'No';
$LNG['reg_found']				= 'Trovato';
$LNG['reg_not_found']			= 'Non trovato';
$LNG['reg_writable']			= 'Scrivibile';
$LNG['reg_not_writable']		= 'Non scrivibile';
$LNG['reg_file']				= 'File &raquo;%s&laquo; scrivibile?';
$LNG['reg_dir']					= 'Directory &raquo;%s&laquo; scrivibile?';
$LNG['req_php_need']			= 'Versione installata del linguaggio di scripting &raquo;PHP&laquo;';
$LNG['req_php_need_desc']		= '<strong>Prerequisito</strong> — PHP è il linguaggio lato server in cui è scritto 2Moons. Con questo 2Moons funzionerà senza alcuna limitazione,  la versione di PHP 5.2.5 è fornita.';
$LNG['reg_gd_need']				= 'Versione installata della libreria di elaborazione grafica &raquo;gdlib&laquo;';
$LNG['reg_gd_desc']				= '<strong>Opzionale</strong> — La libreria di elaborazione grafica &raquo;gdlib&laquo; è responsabile per la generazione dinamica di immagini. Alcune funzionalità del software non funzioneranno senza di essa.';
$LNG['reg_mysqli_active']		= 'Supporto del estensione &raquo;MySQLi&laquo;';
$LNG['reg_mysqli_desc']			= '<strong>Prerequisito</strong> — E\' necessario fornire il supporto per MySQLi in PHP. Se nessun modulo database viene visualizzato come disponibile è necessario contattare il proprio hosting provider oppure consultare la relativa documentazione di PHP.';
$LNG['reg_json_need']			= 'Erweiterung &raquo;JSON&laquo; verfügbar?';
$LNG['reg_iniset_need']			= 'PHP-Funktion &raquo;ini_set&laquo; vorhanden?';
$LNG['reg_global_need']			= 'register_globals deaktiviert?';
$LNG['reg_global_desc']			= '2Moons wird auch funktionieren, wenn diese Einstellung aktiviert ist. Allerdings wird aus Sicherheitsgründen empfohlen, register_globals in der PHP-Installation zu deaktivieren, falls dies möglich ist.';
$LNG['req_ftp_head']			= 'Eingabe der Zugangsdaten für FTP';
$LNG['req_ftp_desc']			= 'Geben Sie Ihre FTP Daten ein, damit 2Moons automatisch die Probleme beheben kann. Alternativ können Sie auch manuell die Schreibrechte vergeben.';
$LNG['req_ftp_host']			= 'Hostname';
$LNG['req_ftp_username']		= 'Benutzername';
$LNG['req_ftp_password']		= 'Kennwort';
$LNG['req_ftp_dir']				= 'Installationspfad zu 2Moons';
$LNG['req_ftp_send']			= 'Absenden';
$LNG['req_ftp_error_data']		= 'Mit den angegebenen Zugangsdaten konnte keine Verbindung zu einem FTP-Server hergestellt werden.';
$LNG['req_ftp_error_dir']		= 'Das eingegebene Verzeichnis ist ungültig.';

$LNG['step1_head']				= 'Datenbankzugang konfigurieren';
$LNG['step1_desc']				= 'Nachdem nun festgestellt wurde, dass 2Moons auf deinem Server betrieben werden kann, musst du noch einige Informationen angeben. Wenn du nicht weißt, wie die Verbindungsdaten für deine Datenbank lauten, kontaktiere bitte als erstes deinen Webhosting-Provider oder wende dich an die 2Moons Support-Foren. Wenn du Daten eingibst, prüfe diese bitte sorgfältig, bevor du fortfährst.';
$LNG['step1_mysql_server']		= 'Datenbankserver-Hostname oder DSN';
$LNG['step1_mysql_port']		= 'Datenbankserver-Port';
$LNG['step1_mysql_dbuser']		= 'Datenbank-Benutzername';
$LNG['step1_mysql_dbpass']		= 'Datenbank-Passwort';
$LNG['step1_mysql_dbname']		= 'Name der Datenbank';
$LNG['step1_mysql_prefix']		= 'Tabellenprefix:';

$LNG['step2_prefix_invalid']	= 'Der DB-Prefix darf nur alphanumerische Zeichen und Unterstriche enthalten.';
$LNG['step2_db_error']			= 'Fehler beim Erstellen der Datenbank-Tabellen:';
$LNG['step2_db_no_dbname']		= 'Kein Datenbank-Name angegeben.';
$LNG['step2_db_too_long']		= 'Das angegebene Tabellen-Präfix ist zu lang. Die maximale Länge beträgt 36 Zeichen.';
$LNG['step2_db_con_fail']		= 'Es kann keine Verbindung zur Datenbank aufgebaut werden. Details stehen in unten angezeigter Fehlermeldung.';
$LNG['step2_config_exists']		= 'config.php bereits vorhanden!';
$LNG['step2_conf_op_fail']		= 'config.php ist nicht beschreibbar!';
$LNG['step2_conf_create']		= 'config.php erfolgreich erstellt...';
$LNG['step2_db_done']			= 'Verbindung zur Datenbank war erfolgreich!';

$LNG['step3_head']				= 'Datenbank-Tabellen erstellen';
$LNG['step3_desc']				= 'Die von 2Moons genutzten Datenbank-Tabellen wurden nun erstellt und mit einigen Ausgangswerten gefüllt. Geh weiter zum nächsten Schritt, um die Installation von 2Moons abzuschließen.';

$LNG['step4_head']				= 'Administrator erstellen';
$LNG['step4_desc']				= 'Der Installationsassistent erstellt nun ein Administrator-Konto für Sie. Bitte geben Sie dazu einen Benutzernamen, eine E-Mail-Adresse und ein Kennwort ein.';
$LNG['step4_admin_name']		= 'Benutzername des Administrators:';
$LNG['step4_admin_name_desc']	= 'Bitte gib einen Benutzernamen mit einer Länge von 3 bis 20 Zeichen ein.';
$LNG['step4_admin_pass']		= 'Administrator-Passwort:';
$LNG['step4_admin_pass_desc']	= 'Bitte gib ein Passwort mit einer Länge von 6 bis 30 Zeichen ein.';
$LNG['step4_admin_mail']		= 'Kontakt-E-Mail-Adresse:';

$LNG['step6_head']				= 'Herzlichen Glückwunsch!';
$LNG['step6_desc']				= 'Du hast 2Moons erfolgreich installiert.';
$LNG['step6_info_head']			= 'Starte mit 2Moons durch!';
$LNG['step6_info_additional']	= 'Wenn du unten auf die Schaltfläche klickst, wirst du zu einem Formular im Administrations-Bereich weitergeleitet. Anschließend solltest du dir etwas Zeit nehmen, um die verfügbaren Optionen kennen zu lernen.<br/><br/><strong>Bitte lösche die Datei &raquo;includes/ENABLE_INSTALL_TOOL&laquo; oder nenne es um, bevor du dein Spiel benutzt. Solange diese Datei existiert, ist dein Spiel potenziell gefährdet!</strong>';

$LNG['sql_close_reason']		= 'Game ist zurzeit geschlossen';
$LNG['sql_welcome']				= 'Herzlich Willkommen zu 2Moons v';

?>