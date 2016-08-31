<?php
/**
 * @version    CVS: 1.0.0
 * @package    Com_Cnrbuonipasto
 * @author     Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche <giovanni.todaro@itd.cnr.it>
 * @copyright  2016 Todaro Giovanni - Consiglio Nazionale delle Ricerche -  Istituto per le Tecnologie Didattiche
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Access check.
if (!JFactory::getUser()->authorise('core.manage', 'com_cnrbuonipasto'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// Include dependancies
jimport('joomla.application.component.controller');

JLoader::registerPrefix('Cnrbuonipasto', JPATH_COMPONENT_ADMINISTRATOR);

$controller = JControllerLegacy::getInstance('Cnrbuonipasto');
$controller->execute(JFactory::getApplication()->input->get('task'));
$controller->redirect();
