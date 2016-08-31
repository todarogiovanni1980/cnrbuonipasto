<?php

/**
 * @version     CVS: 1.0.0
 * @package     com_cnrbuonipasto
 * @subpackage  mod_cnrbuonipasto
 * @author      Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche <giovanni.todaro@itd.cnr.it>
 * @copyright   2016 Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

// Include the syndicate functions only once
JLoader::register('ModCnrbuonipastoHelper', dirname(__FILE__) . '/helper.php');

$doc = JFactory::getDocument();

/* */
$doc->addStyleSheet(JURI::base() . '/media/mod_cnrbuonipasto/css/style.css');

/* */
$doc->addScript(JURI::base() . '/media/mod_cnrbuonipasto/js/script.js');

require JModuleHelper::getLayoutPath('mod_cnrbuonipasto', $params->get('content_type', 'blank'));
