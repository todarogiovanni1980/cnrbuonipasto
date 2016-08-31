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
$elements = ModCnrbuonipastoHelper::getList($params);
?>

<?php if (!empty($elements)) : ?>
	<table class="table">
		<?php foreach ($elements as $element) : ?>
			<tr>
				<th><?php echo ModCnrbuonipastoHelper::renderTranslatableHeader($params, $params->get('field')); ?></th>
				<td><?php echo ModCnrbuonipastoHelper::renderElement(
						$params->get('table'), $params->get('field'), $element->{$params->get('field')}
					); ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
<?php endif;
