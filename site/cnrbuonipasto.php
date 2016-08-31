<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Cnrbuonipasto
 * @author     Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche <giovanni.todaro@itd.cnr.it>
 * @copyright  2016 Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Cnrbuonipasto', JPATH_COMPONENT);
JLoader::register('CnrbuonipastoController', JPATH_COMPONENT . '/controller.php');


// Execute the task.
$controller = JControllerLegacy::getInstance('Cnrbuonipasto');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
