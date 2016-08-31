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

$canEdit = JFactory::getUser()->authorise('core.edit', 'com_cnrbuonipasto.' . $this->item->id);
if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_cnrbuonipasto' . $this->item->id)) {
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>
<?php if ($this->item) : ?>

	<div class="item_fields">
		<table class="table">
			<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_MODIFIED_BY'); ?></th>
			<td><?php echo $this->item->modified_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_DATACONSEGNA'); ?></th>
			<td><?php echo $this->item->dataconsegna; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_DIPENDENTE'); ?></th>
			<td><?php echo $this->item->dipendente_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_NUMERO'); ?></th>
			<td><?php echo $this->item->numero; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_CNRBUONIPASTO_FORM_LBL_CONSEGNA_QUANTITA'); ?></th>
			<td><?php echo $this->item->quantita; ?></td>
</tr>

		</table>
	</div>
	<?php if($canEdit && $this->item->checked_out == 0): ?>
		<a class="btn" href="<?php echo JRoute::_('index.php?option=com_cnrbuonipasto&task=consegna.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_CNRBUONIPASTO_EDIT_ITEM"); ?></a>
	<?php endif; ?>
								<?php if(JFactory::getUser()->authorise('core.delete','com_cnrbuonipasto.consegna.'.$this->item->id)):?>
									<a class="btn" href="<?php echo JRoute::_('index.php?option=com_cnrbuonipasto&task=consegna.remove&id=' . $this->item->id, false, 2); ?>"><?php echo JText::_("COM_CNRBUONIPASTO_DELETE_ITEM"); ?></a>
								<?php endif; ?>
	<?php
else:
	echo JText::_('COM_CNRBUONIPASTO_ITEM_NOT_LOADED');
endif;
