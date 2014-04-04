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

<h4 class="elementTypeName"><?php echo $element->elementType->name?></h4>
<table class="subtleWhite normalText">
	<tbody>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('surgical_id'))?></td>
			<td><span class="big"><?php echo $element->surgical ? $element->surgical->name : 'None'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('iol_verified'))?>:</td>
			<td><span class="big"><?php echo $element->iol_verified ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('iol_type'))?></td>
			<td><span class="big"><?php echo CHtml::encode($element->iol_type)?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('iol_size'))?></td>
			<td><span class="big"><?php echo CHtml::encode($element->iol_size)?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('metal_in_body'))?>:</td>
			<td><span class="big"><?php echo $element->metal_in_body ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('metal_comments'))?></td>
			<td><span class="big"><?php echo CHtml::encode($element->metal_comments)?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('removable_dental'))?>:</td>
			<td><span class="big"><?php echo $element->removable_dental ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('full_uppers'))?></td>
			<td><span class="big"><?php echo $element->full_uppers ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('full_uppers_removed'))?></td>
			<td><span class="big"><?php echo $element->full_uppers_removed ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('full_lowers'))?></td>
			<td><span class="big"><?php echo $element->full_lowers ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('full_lowers_removed'))?></td>
			<td><span class="big"><?php echo $element->full_lowers_removed ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('other'))?></td>
			<td><span class="big"><?php echo $element->other ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('dental_comments'))?>:</td>
			<td><span class="big"><?php echo $element->dental_comments ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('hearing_aid_present'))?>:</td>
			<td><span class="big"><?php echo $element->hearing_aid_present ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('right'))?></td>
			<td><span class="big"><?php echo $element->right ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('right_removed'))?>:</td>
			<td><span class="big"><?php echo $element->right_removed ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('left'))?></td>
			<td><span class="big"><?php echo $element->left ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('left_removed'))?>:</td>
			<td><span class="big"><?php echo $element->left_removed ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('patient_belongings'))?>:</td>
			<td><span class="big"><?php echo $element->patient_belongings ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('glasses'))?></td>
			<td><span class="big"><?php echo $element->glasses ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('jewelery'))?></td>
			<td><span class="big"><?php echo $element->jewelery ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('clothing'))?></td>
			<td><span class="big"><?php echo $element->clothing ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('other'))?></td>
			<td><span class="big"><?php echo $element->other ? 'Yes' : 'No'?></span></td>
		</tr>
		<tr>
			<td width="30%"><?php echo CHtml::encode($element->getAttributeLabel('belongings_comments'))?>:</td>
			<td><span class="big"><?php echo $element->belongings_comments ? 'Yes' : 'No'?></span></td>
		</tr>
	</tbody>
</table>

