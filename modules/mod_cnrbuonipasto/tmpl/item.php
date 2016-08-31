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
$element = ModCnrbuonipastoHelper::getItem($params);
?>

<?php if (!empty($element)) : ?>
	<div>
		<?php $fields = get_object_vars($element); ?>
		<?php foreach ($fields as $field_name => $field_value) : ?>
			<?php if (ModCnrbuonipastoHelper::shouldAppear($field_name)): ?>
				<div class="row">
					<div class="span4">
						<strong><?php echo ModCnrbuonipastoHelper::renderTranslatableHeader($params, $field_name); ?></strong>
					</div>
					<div
						class="span8"><?php echo ModCnrbuonipastoHelper::renderElement($params->get('item_table'), $field_name, $field_value); ?></div>
				</div>
			<?php endif; ?>
		<?php endforeach; ?>
	</div>
<?php endif;
