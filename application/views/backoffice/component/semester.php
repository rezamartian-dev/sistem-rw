<?php $label = 'semester'; ?>
<label for='selectpickerIcons' class='form-label'><?= getLabel($label) ?></label>
<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick"
		data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check"
		data-style="btn-default">
	<option value="1">Ganjil</option>
	<option value="2">Genap</option>

</select>
