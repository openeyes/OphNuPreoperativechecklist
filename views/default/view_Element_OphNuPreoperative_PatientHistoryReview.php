<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<section class="element">
	<header class="element-header">
		<h3 class="element-title"><?php echo $element->elementType->name?></h3>
	</header>

	<div class="element-data">
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('medical_history_verified'))?></div></div>
			<div class="large-9 column end"><div class="data-value"><?php echo $element->medical_history_verified ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('medical_discrepancy_found'))?>:</div></div>
			<div class="large-9 column end"><div class="data-value"><?php echo $element->medical_discrepancy_found ? 'Yes' : 'No'?></div></div>
		</div>
		<?php if ($element->medical_discrepancy_found) {?>
			<div class="row data-row">
				<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('comments'))?></div></div>
				<div class="large-9 column end"><div class="data-value"><?php echo CHtml::encode($element->comments)?></div></div>
			</div>
		<?php }?>
		<?php $this->widget('application.widgets.MedicationSelection', array(
			'element' => $element,
			'relation' => 'medications',
			'input_name' => 'medication_history',
			'edit' => false,
		))?>
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('medication_history_verified'))?></div></div>
			<div class="large-9 column end"><div class="data-value"><?php echo $element->medication_history_verified ? 'Yes' : 'No'?></div></div>
		</div>
		<div class="row data-row">
			<div class="large-3 column">
				<div class="data-label">Allergies:</div>
			</div>
			<div class="large-9 column end">
				<table class="grid allergies">
					<thead>
						<tr>
							<th>Allergy</th>
						</tr>
					</thead>
					<tbody>
						<?php if (empty($element->allergies)) {?>
							<tr class="no_allergies">
								<td>
									No allergies have been entered for this patient.
								</td>
							</tr>
						<?php } else {?>
							<?php foreach ($element->allergies as $i => $allergy) {?>
								<tr>
									<td><?php echo $allergy->allergy->name?></td>
								</tr>
							<?php }?>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row data-row">
			<div class="large-3 column"><div class="data-label"><?php echo CHtml::encode($element->getAttributeLabel('allergies_verified'))?></div></div>
			<div class="large-9 column end"><div class="data-value"><?php echo $element->allergies_verified ? 'Yes' : 'No'?></div></div>
		</div>
	</div>
</section>
