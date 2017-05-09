<?php
//============================================================+
// File name   : tcpdf_config.php
// Begin       : 2004-06-11
// Last Update : 2014-12-11
//
// Description : Configuration file for TCPDF.
// Author      : Nicola Asuni - Tecnick.com LTD - www.tecnick.com - info@tecnick.com
// License     : GNU-LGPL v3 (http://www.gnu.org/copyleft/lesser.html)
// -------------------------------------------------------------------
// Copyright (C) 2004-2014  Nicola Asuni - Tecnick.com LTD
//
// This file is part of TCPDF software library.
//
// TCPDF is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// TCPDF is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with TCPDF.  If not, see <http://www.gnu.org/licenses/>.
//
// See LICENSE.TXT file for more information.
//============================================================+

/**
 * Configuration file for TCPDF.
 * @author Nicola Asuni
 * @package com.tecnick.tcpdf
 * @version 4.9.005
 * @since 2004-10-27
 */

// IMPORTANT:
// If you define the constant K_TCPDF_EXTERNAL_CONFIG, all the following settings will be ignored.
// If you use the tcpdf_autoconfig.php, then you can overwrite some values here.
define ('K_TCPDF_EXTERNAL_CONFIG', true);
/**
 * Installation path (/var/www/tcpdf/).
 * By default it is automatically calculated but you can also set it as a fixed string to improve performances.
 */
define ('K_PATH_MAIN', __DIR__ . '/../');

/**
 * URL path to tcpdf installation folder (http://localhost/tcpdf/).
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
//define ('K_PATH_URL', '');

/**
 * Path for PDF fonts.
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
define ('K_PATH_FONTS', K_PATH_MAIN.'src/tcpdf/fonts/');

/**
 * Default images directory.
 * By default it is automatically set but you can also set it as a fixed string to improve performances.
 */
define ('K_PATH_IMAGES',K_PATH_MAIN.'images/');

/**
 * Deafult image logo used be the default Header() method.
 * Please set here your own logo or an empty string to disable it.
 */
define ('PDF_HEADER_LOGO', 'globalsevice.png');

/**
 * Header logo image width in user units.
 */
define ('PDF_HEADER_LOGO_WIDTH', 20);

/**
 * Cache directory for temporary files (full path).
 */
function mkDir2($dir){
    $arraydir=explode("/",$dir);
    $link=$arraydir[0];
    unset($arraydir[0]);
    foreach($arraydir as $ld){
        $link.="/".$ld;
        if(!is_dir($link)){
            mkdir($link);
        }
    }
    return $link;
}
$temp=__DIR__."/../../../web/temp/";

define ('K_PATH_CACHE', mkDir2($temp));

/**
 * Generic name for a blank image.
 */
define ('K_BLANK_IMAGE', '_blank.png');

/**
 * Page format.
 */
define ('PDF_PAGE_FORMAT', 'A4');

/**
 * Page orientation (P=portrait, L=landscape).
 */
define ('PDF_PAGE_ORIENTATION', 'P');

/**
 * Document creator.
 */
define ('PDF_CREATOR', 'TCPDF');

/**
 * Document author.
 */
define ('PDF_AUTHOR', 'Global Service Immobilier');

/**
 * Header title.
 */
define ('PDF_HEADER_TITLE', 'URL :www.globalserviceplus.com Email: courrier@globalserviceplus.com ');

define ('PDF_HEADER_TITLE2', 'URL :<small style="color:blue"> <u>www.globalserviceplus.com</u></small> / Email: <small style="color:blue"> <u>courrier@globalserviceplus.com 02 BP 1615 Cotonou</u></small>, BENIN Tel. (229)
96983636, 94970707 ONG Loi 1901 2010/0336/DEP-ATL-LITT/SG/SAG-ASSOC DU 15 Juillet 2010 IFU 32012014469');

/**
 * Header description string.
 */
define ('PDF_HEADER_STRING', "02 BP 1615 Cotonou, BENIN Tel. (229)
96983636, 94970707 ONG Loi 1901 2010/0336/DEP-ATL-LITT/SG/SAG-ASSOC DU 15 Juillet 2010 IFU 32012014469");
define ('PDF_FOOTER_STRING', "Par ".PDF_AUTHOR);

/**
 * Document unit of measure [pt=point, mm=millimeter, cm=centimeter, in=inch].
 */
define ('PDF_UNIT', 'mm');

/**
 * Header margin.
 */
define ('PDF_MARGIN_HEADER', 5);

/**
 * Footer margin.
 */
define ('PDF_MARGIN_FOOTER', 10);

/**
 * Top margin.
 */
define ('PDF_MARGIN_TOP', 27);

/**
 * Bottom margin.
 */
define ('PDF_MARGIN_BOTTOM', 25);

/**
 * Left margin.
 */
define ('PDF_MARGIN_LEFT', 30);

/**
 * Right margin.
 */
define ('PDF_MARGIN_RIGHT', 30);

/**
 * Default main font name.
 */
define ('PDF_FONT_NAME_MAIN', 'helvetica');

/**
 * Default main font size.
 */
define ('PDF_FONT_SIZE_MAIN', 10);

/**
 * Default data font name.
 */
define ('PDF_FONT_NAME_DATA', 'helvetica');

/**
 * Default data font size.
 */
define ('PDF_FONT_SIZE_DATA', 8);

/**
 * Default monospaced font name.
 */
define ('PDF_FONT_MONOSPACED', 'courier');

/**
 * Ratio used to adjust the conversion of pixels to user units.
 */
define ('PDF_IMAGE_SCALE_RATIO', 1.25);

/**
 * Magnification factor for titles.
 */
define('HEAD_MAGNIFICATION', 1.1);

/**
 * Height of cell respect font height.
 */
define('K_CELL_HEIGHT_RATIO', 1.25);

/**
 * Title magnification respect main font size.
 */
define('K_TITLE_MAGNIFICATION', 1.3);

/**
 * Reduction factor for small font.
 */
define('K_SMALL_RATIO', 2/3);

/**
 * Set to true to enable the special procedure used to avoid the overlappind of symbols on Thai language.
 */
define('K_THAI_TOPCHARS', true);

/**
 * If true allows to call TCPDF methods using HTML syntax
 * IMPORTANT: For security reason, disable this feature if you are printing user HTML content.
 */
define('K_TCPDF_CALLS_IN_HTML', false);

/**
 * If true and PHP version is greater than 5, then the Error() method throw new exception instead of terminating the execution.
 */
define('K_TCPDF_THROW_EXCEPTION_ERROR', false);

/**
 * Default timezone for datetime functions
 */
define('K_TIMEZONE', 'UTC+1:00');
/**
* VARABLE FOR CSS
*/
if (@file_exists(K_PATH_MAIN. '/dist/css/bootstrap.min.css')) {
    $css="<style>".file_get_contents(K_PATH_MAIN.'/dist/css/bootstrap.min.css') ."</style>";
		define('CSS_BOOSTRAP',$css);
}

if (@file_exists(K_PATH_MAIN.'/dist/js/bootstrap.min.js')) {
    $js="<script>".file_get_contents(K_PATH_MAIN.'/dist/js/bootstrap.min.js') . "</script>";
		define('JS_BOOSTRAP',$js);
}


//============================================================+
// END OF FILE
//============================================================+
