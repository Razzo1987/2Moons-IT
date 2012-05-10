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

setlocale(LC_ALL, 'it_IT', 'italian'); // http://msdn.microsoft.com/en-us/library/39cwe7zf%28vs.71%29.aspx
setlocale(LC_NUMERIC, 'C');

//SERVER GENERALS
$LNG['dir']         	= 'ltr';
$LNG['week_day']		= array('Domenica', 'Lunedì', 'Martedì', 'Mercoledì', 'Giovedì', 'Venerdì', 'Sabato'); # Start with Sunday!
$LNG['months']			= array('Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre');
$LNG['js_tdformat']		= '[D], [d] [M] [Y] - [H]:[i]:[s]';
$LNG['php_timeformat']	= 'H:i:s';
$LNG['php_dateformat']	= 'd. M Y';
$LNG['php_tdformat']	= 'd. M Y, H:i:s';
$LNG['short_day']		= 'd';
$LNG['short_hour']		= 'h';
$LNG['short_minute']	= 'm';
$LNG['short_second']	= 's';

//Note for the translators, use the phpBB Translation file (LANG/common.php) instead of your own translations

$LNG['timezones']		= array(
          '-12'   => '[UTC -12] Isola Baker',
          '-11'   => '[UTC -11] Samoa, Isole Midway',
          '-10'   => '[UTC -10] Hawaii, Tahiti',
          '-9.5'   => '[UTC -9:30] Isole Marchesi',
          '-9'   => '[UTC -9] Alaska',
          '-8'   => '[UTC -8] Costa del Pacifico',
          '-7'   => '[UTC -7] USA centro-occidentali',
          '-6'   => '[UTC -6] Città del Messico, USA centro-orientali',
          '-5'   => '[UTC -5] Costa dell’Atlantico, Brasile occidentale, Cuba',
          '-4.5'   => '[UTC -4:30] Venezuela',
          '-4'   => '[UTC -4] Brasile centrale, Barbados, Bolivia, Cile',
          '-3.5'   => '[UTC -3:30] Terranova',
          '-3'   => '[UTC -3] Argentina, Brasile orientale, Uruguay',
          '-2'   => '[UTC -2] Bermuda',
          '-1'   => '[UTC -1] Isole Azzorre, Capo Verde',
          '0'      => '[UTC] Europa occidentale, Regno Unito (GMT)',
          '1'      => '[UTC +1] Europa centrale, Italia',
          '2'      => '[UTC +2] Europa orientale, Grecia',
          '3'      => '[UTC +3] Mosca, Arabia Saudita',
          '3.5'   => '[UTC +3:30] Iran',
          '4'      => '[UTC +4] Emirati Arabi Uniti',
          '4.5'   => '[UTC +4:30] Afghanistan',
          '5'      => '[UTC +5] Pakistan, Maldive',
          '5.5'   => '[UTC +5:30] India, Sri Lanka',
          '5.75'   => '[UTC +5:45] Nepal',
          '6'      => '[UTC +6] Bangladesh',
          '6.5'   => '[UTC +6:30] Myanmar',
          '7'      => '[UTC +7] Indonesia occidentale, Thailandia, Vietnam',
          '8'      => '[UTC +8] Cina, Hong Kong, Singapore, Taiwan, Perth',
          '9'      => '[UTC +9] Giappone, Corea, Indonesia orientale',
          '9.5'   => '[UTC +9:30] Adelaide',
          '10'   => '[UTC +10] Sydney, Papua Nuova Guinea',
          '10.5'   => '[UTC +10:30] Isola Lord Howe',
          '11'   => '[UTC +11] Isole Salomone, Nuova Caledonia',
          '11.5'   => '[UTC +11:30] Isole Norfolk',
          '12'   => '[UTC +12] Nuova Zelanda, Figi',
          '12.75'   => '[UTC +12:45] Isole Chatham',
          '13'   => '[UTC +13] Tonga',
          '14'   => '[UTC +14] Isole della linea'
);