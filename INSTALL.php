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

$LNG['title_install']			= 'Installazione';

$LNG['intro_lang']				= 'Lingua';
$LNG['intro_install']			= 'Installazione';
$LNG['intro_welcome']			= 'Benvenuto in 2Moons!';
$LNG['intro_text']				= '2Moons è uno dei migliori cloni di OGame.<br>2Moons è la versione di Xnova più recente e stabile mai sviluppata. 2Moons brilla per la sua stabilità, flessibilità, dinamismo, qualità e facilità d\'uso. Speriamo sempre di essere al di sopra delle vostre aspettative.<br><br>Il sistema di installazione ti guiderà attraverso l\'installazione o l\'aggiornamento da una versione precedente a quella più recente. Per qualsiasi domanda o problema non esitate a chiedere il nostro supporto.<br><br>2Moons è un progetto open source ed è concesso in licenza GPL v3 sotto GNU. Per informazioni riguaurdo la licenza, cliccare "licenza" sulla voce di menu appropriata di questa pagina.<br><br>Prima di avviare l\'installazione sarà eseguito un piccolo test per verificare se i requisiti minimi sono supportati.';

$LNG['licence_head']			= 'Termini di licenza';
$LNG['licence_desc']			= 'Si prega di leggere il seguente accordo di licenza. Utilizzare la barra di scorrimento per visualizzare l\'intero documento.';
$LNG['licence_accept']			= 'Non si accettano tutti i termini delle condizioni di licenza? È possibile installare il software solo se si accettano i termini della licenza.';
$LNG['licence_need_accept']		= 'Per continuare con l\'installazione, è necessario accettare  i termini della licenza.';

$LNG['req_head']				= 'Requisiti di Sistema';
$LNG['req_desc']				= 'Prima che l\'installazione possa continuare, 2Moons effettuerà alcuni test sulla configurazione del server e dei file per garantire che sia possibile installare e utilizzare 2Moons. Si prega di leggere attentamente i risultati e di non procedere prima che vengano passati tutti i test necessari. Se si desidera utilizzare una qualsiasi delle funzioni che sono elencate sotto i moduli opzionali, è necessario assicurarsi che i test appropriati siano anch\'essi passati.';
$LNG['reg_yes']					= 'Si';
$LNG['reg_no']					= 'No';
$LNG['reg_found']				= 'Trovato';
$LNG['reg_not_found']			= 'Non trovato';
$LNG['reg_writable']			= 'Scrivibile';
$LNG['reg_not_writable']		= 'Non scrivibile';
$LNG['reg_file']				= 'File &raquo;%s&laquo; scrivibile?';
$LNG['reg_dir']					= 'Directory &raquo;%s&laquo; scrivibile?';
$LNG['req_php_need']			= 'Versione installata del linguaggio di scripting &raquo;PHP&laquo;.';
$LNG['req_php_need_desc']		= '<strong>Prerequisito</strong> — PHP è il linguaggio lato server in cui è scritto 2Moons. Con questo 2Moons funzionerà senza alcuna limitazione,  la versione di PHP 5.2.5 è fornita.';
$LNG['reg_gd_need']				= 'Versione installata della libreria di elaborazione grafica &raquo;gdlib&laquo;.';
$LNG['reg_gd_desc']				= '<strong>Opzionale</strong> — La libreria di elaborazione grafica &raquo;gdlib&laquo; è responsabile per la generazione dinamica di immagini. Alcune funzionalità del software non funzioneranno senza di essa.';
$LNG['reg_mysqli_active']		= 'Supporto del estensione &raquo;MySQLi&laquo;.';
$LNG['reg_mysqli_desc']			= '<strong>Prerequisito</strong> — E\' necessario fornire il supporto per MySQLi in PHP. Se nessun modulo database viene visualizzato come disponibile è necessario contattare il proprio hosting provider oppure consultare la relativa documentazione di PHP.';
$LNG['reg_json_need']			= 'Estensione &raquo;JSON&laquo; disponibile?';
$LNG['reg_iniset_need']			= 'Funzione PHP &raquo;ini_set&laquo; esistente?';
$LNG['reg_global_need']			= 'register_globals disabilitato?';
$LNG['reg_global_desc']			= '2Moons funzionerà anche se questa impostazione è attivata. Tuttavia, è consigliato per ragioni di sicurezza, disabilitare register_globals nella configurazione di PHP, se possibile.';
$LNG['req_ftp_head']			= 'Inserire le credenziali per FTP';
$LNG['req_ftp_desc']			= 'Inserisci i tuoi dati FTP in modo che 2Moons sia in grado di risolvere automaticamente i problemi. In alternativa è possibile anche assegnare manualmente le autorizzazioni di scrittura.';
$LNG['req_ftp_host']			= 'Nome Host';
$LNG['req_ftp_username']		= 'Nome utente';
$LNG['req_ftp_password']		= 'Password';
$LNG['req_ftp_dir']				= 'Percorso di installazione di 2Moons';
$LNG['req_ftp_send']			= 'Invia';
$LNG['req_ftp_error_data']		= 'Con le credenziali fornite non è possibile connettersi al server FTP.';
$LNG['req_ftp_error_dir']		= 'La directory specificata non è valida.';

$LNG['step1_head']				= 'Configurare l\'accesso al database';
$LNG['step1_desc']				= 'Ora che è stato stabilito che 2Moons può essere utilizzato sul server, è necessario fornire alcune informazioni. Se non sai quali sono i dati di connessione al il database, in primo luogo contattare il proprio hosting provider o contattare il Forum di supporto di 2Moons. Quando si immettono dati, controllare con attenzione prima di procedere.';
$LNG['step1_mysql_server']		= 'Nome Host o DNS del Database';
$LNG['step1_mysql_port']		= 'Porta del server del Database';
$LNG['step1_mysql_dbuser']		= 'Nome utente del Database';
$LNG['step1_mysql_dbpass']		= 'Password del Database';
$LNG['step1_mysql_dbname']		= 'Nome del Database';
$LNG['step1_mysql_prefix']		= 'Prefisso tabelle:';

$LNG['step2_prefix_invalid']	= 'Il prefisso DB può contenere solo caratteri alfanumerici e underscore.';
$LNG['step2_db_error']			= 'Errore durante la creazione delle tabelle del database:';
$LNG['step2_db_no_dbname']		= 'Nessun Nome del Database specificato.';
$LNG['step2_db_too_long']		= 'Il prefisso delle tabelle specificato è troppo lungo. La lunghezza massima è di 36 caratteri.';
$LNG['step2_db_con_fail']		= 'Non è possibile stabilire alcuna connessione con il database. I dettagli sono disponibili nel messaggio di errore indicato qui di seguito.';
$LNG['step2_config_exists']		= 'config.php già esistente!';
$LNG['step2_conf_op_fail']		= 'config.php non è scrivibile!';
$LNG['step2_conf_create']		= 'config.php creato con successo...';
$LNG['step2_db_done']			= 'Connessione al database avvenuta con successo!';

$LNG['step3_head']				= 'Creazione delle tabelle del database';
$LNG['step3_desc']				= 'Le tabelle del database utilizzate da 2Moons sono state create e popolate con alcuni valori iniziali. Vai alla fase successiva per completare l\'installazione di 2Moons.';

$LNG['step4_head']				= 'Creazione dell\'Admin';
$LNG['step4_desc']				= 'Ora, l\'installazione guidata crea un account di amministrazione per te. Inserisci un nome utente, un indirizzo E-Mail e una password a farlo.';
$LNG['step4_admin_name']		= 'Nome utente dell\'admin:';
$LNG['step4_admin_name_desc']	= 'Inserisci un nome utente con una lunghezza da 3 a 20 caratteri.';
$LNG['step4_admin_pass']		= 'Password dell\'admin:';
$LNG['step4_admin_pass_desc']	= 'Si prega di inserire una password con una lunghezza da 6 a 30 caratteri.';
$LNG['step4_admin_mail']		= 'Indirizzo e-mail:';

$LNG['step6_head']				= 'Congratulazioni!';
$LNG['step6_desc']				= '2Moons è stato installato con successo.';
$LNG['step6_info_head']			= 'Inizia con 2Moons!';
$LNG['step6_info_additional']	= 'Se si fa clic sul pulsante sottostante, sarete reindirizzati a un form nell\'area admin. Poi si dovrebbe cercare di dedicare un po\' di tempo per conoscere le opzioni disponibili.<br/><br/><strong>Si prega di eliminare il file &raquo;includes/ENABLE_INSTALL_TOOL&laquo; o di rinominarlo prima di eseguire il gioco. Finché questo file esiste, il vostro gioco è potenzialmente a rischio!</strong>';

$LNG['sql_close_reason']		= 'Il server è attualmente chiuso';
$LNG['sql_welcome']				= 'Benvenuti a 2Moons';

?>