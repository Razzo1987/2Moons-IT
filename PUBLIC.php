<?php

/**
 *  2Moons
 *  Copyright (C) 2011  Slaver
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
 * @author Slaver <slaver7@gmail.com>
 * @author Razzo <webmaster@razzo.org> (Italian translation)
 * @copyright 2009 Lucky <lucky@xgproyect.net> (XGProyecto)
 * @copyright 2011 Slaver <slaver7@gmail.com> (Fork/2Moons)
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 1.5 (2011-07-31)
 * @info $Id: CUSTOM.php 2126 2012-03-11 21:11:32Z slaver7 $
 * @link http://code.google.com/p/2moons/
 */

//general
$LNG['index']				= 'Index';
$LNG['register']			= 'Registrati';
$LNG['forum']				= 'Forum';
$LNG['send']				= 'Invia';
$LNG['menu_index']			= 'Home';
$LNG['menu_news']			= 'News';
$LNG['menu_rules']			= 'Regolamento';
$LNG['menu_pranger']		= 'Lista Ban';
$LNG['menu_top100']			= 'Hall of Fame';
$LNG['menu_disclamer']		= 'Contatti';
$LNG['uni_closed']			= ' (chiuso)';

//index.php
//case lostpassword

$LNG['lost_empty']			= 'E\' necessario compilare tutti i campi!';
$LNG['lost_not_exists']		= 'Non &egrave; possibile trovare un utente corrispondente a questo indirirzzo e-mail!';
$LNG['lost_mail_title']		= 'Nuova Password';
$LNG['mail_sended']			= 'La password &egrave; stata inviata a %s con successo!';

//case default

$LNG['server_infos']			= array(
	"Un gioco di strategia spaziale in tempo reale.",
	"Gioca insieme a centinaia di utenti.",
	"Non richiede nessun donwload. Basta un browser standard (Firefox, Chrome, Internet Explorer, Safari, Opera, ...)",
	"Registrazioni gratuita!",
);

$LNG['login_error_1']		= 'Usarname o Password errata!';
$LNG['login_error_2']		= 'Qualcuno ha effettuato l\'accesso da un altro PC nel tuo account!';
$LNG['login_error_3']		= 'La sessione è scaduta!';
$LNG['login_error_4']		= 'Si &egrave; verificato un errore nel autorizzazione esterna, si prega di riprovare pi&ugrave; tardi!';
$LNG['screenshots']			= 'Screenshots';
$LNG['universe']			= 'Universo';
$LNG['chose_a_uni']			= 'Scegli un universo';

/* ------------------------------------------------------------------------------------------ */

//lostpassword.tpl
$LNG['lost_pass_title']			= 'Recupera Password';

//index_body.tpl
$LNG['user']					= 'Usarname';
$LNG['pass']					= 'Password';
$LNG['remember_pass']			= 'Ricorda password';
$LNG['lostpassword']			= 'Password dimenticata?';
$LNG['welcome_to']				= 'Benvenuto in';
$LNG['server_description']		= '<strong>%s</strong> &egrave; un <strong>gioco di strategia ambientato nello spazio</strong>, nel quale <strong>migliaia di giocatori</strong> competono tra di loro per conquistare l\'universo. Per poter giocare non ti serve altro che un semplice browser web.';
$LNG['server_register']			= 'Registrati ora!';
$LNG['server_message']			= 'Iscriviti subito per sperimentare un mondo nuovo ed eccitante!';
$LNG['login']					= 'Login';
$LNG['disclamer']				= 'Contatti';
$LNG['login_info']				= 'Effettuando il login accetti il <a href="index.php?page=rules">Regolamento</a>';

/* ------------------------------------------------------------------------------------------ */

//reg.php - Registrierung
$LNG['register_closed']				= 'Registrazioni chiuse!';
$LNG['register_at']					= 'Registrato a ';
$LNG['reg_mail_message_pass']		= 'Un\'ultimo passo per attivare il tuo account';
$LNG['reg_mail_reg_done']			= 'Benvenuto in %s!';
$LNG['invalid_mail_adress']			= 'Indirizzo e-mail non valido!';
$LNG['empty_user_field']			= 'E\' necessario inserire un nome utente!';
$LNG['password_lenght_error']		= 'La password deve essere lunga almeno 6 caratteri!';
$LNG['user_field_specialchar']		= 'Nell\'Username sono permessi solo Numeri, Lettere, Spazi, _, -, .!';
$LNG['planet_field_no']				= 'Devi inserire il nome del pianeta!';
$LNG['planet_field_specialchar']	= 'Nel nome del pianeta sono permessi solo Numeri, Lettere, Spazi, _, -, .!';
$LNG['terms_and_conditions']		= 'E\' necessario accettare il Regolamento!';
$LNG['user_already_exists']			= 'Esiste già un utente con questo nome!';
$LNG['mail_already_exists']			= 'Esiste già un utente con questa e-mail!';
$LNG['wrong_captcha']				= 'Codice di sicurezza non corretto!';
$LNG['different_passwords']			= 'Hai inserito due password differenti!';
$LNG['different_mails']				= 'Hai inserito due e-mail diverse!';
$LNG['welcome_message_from']		= 'Amministratore';
$LNG['welcome_message_sender']		= 'Amministratore';
$LNG['welcome_message_subject']		= 'Benvenuto!';
$LNG['welcome_message_content']		= 'Benvenuto in %s!
Se sei ancora inesperto nel gioco segui questi piccoli consigli per iniziare:<br />
- Per prima cosa costruisci una Centrale Solare, perch&eacute; l\'energia &egrave; necessaria per la successiva produzione di risorse.<br />
- Per costruirla fai click sul men&ugrave; a sinistra alla voce "Costruzioni". E&grave; la quatra costruzione.<br />
- Dal momento in cui avete finisce la costruzione avete a disposizione l\'energia, ora si pu&ograve; cominciare a costruire le miniere.<br />
- Vai di nuovo al men&ugrave; delle costruzioni e costruisci una miniera di Metallo e una di Cristallo.<br />
-  Per costruire le navi &egrave; necessario aver prima costruito un Cantiere Spaziale.<br />
- Ci&ograve; che è necessario per farlo apparire nel men&ugrave; delle costruzioni si trova nel men&ugrave; della Tecnologia.<br />
<br />
Il team vi augura tanto divertimento nell\'esplorare l\'universo!';
$LNG['reg_completed']				= 'Grazie per la tua registrazione! Riceverai un\'e-mail con il link di attivazione.';
$LNG['planet_already_exists']		= 'La posizione del pianeta &egrave; gi&agrave; occupata!';

//registry_form.tpl
$LNG['server_message_reg']			= 'Registrati ora e diventare parte di';
$LNG['register_at_reg']				= 'Registrato a';
$LNG['uni_reg']						= 'Universo';
$LNG['user_reg']					= 'User';
$LNG['pass_reg']					= 'Password';
$LNG['pass2_reg']					= 'Conferma Password';
$LNG['email_reg']					= 'Indirizzo e-mail';
$LNG['email2_reg']					= 'Conferma e-mail';
$LNG['planet_reg']					= 'Nome del pianeta madre';
$LNG['ref_reg']						= 'Riferimento da';
$LNG['lang_reg']					= 'Lingua';
$LNG['register_now']				= 'Registrati!';
$LNG['captcha_reg']					= 'Domanda di sicurezza';
$LNG['accept_terms_and_conditions']	= 'Accetto il <a href="index.php?page=rules">Regolamento</a>.';
$LNG['captcha_help']				= 'Aiuto';
$LNG['captcha_get_image']			= 'Caricamento immagine CAPTCHA';
$LNG['captcha_reload']				= 'Nuovo CAPTCHA';
$LNG['captcha_get_audio']			= 'Carica suono-CAPTCHA';
$LNG['user_active']					= 'L\'utente %s &egrave; stato attivato!';

//Rules
$LNG['rules_overview']				= "Regole";
$LNG['rules_info1']					= "Tuttavia, informa sul <a href=\"%s\" target=\"_blank\">Forum</a> e sulla Home Page del gioco ...";


//NEWS

$LNG['news_overview']				= "News";
$LNG['news_from']					= "Alla %s di %s";
$LNG['news_does_not_exist']			= "Nessuna news disponibile!";

//Impressum

$LNG['disclamer']					= "Contatti";
$LNG['disclamer_name']				= "Nome:";
$LNG['disclamer_adress']			= "Indirizzo:";
$LNG['disclamer_tel']				= "Telefono Nr.:";
$LNG['disclamer_email']				= "Indirizzo e-mail:";
?>