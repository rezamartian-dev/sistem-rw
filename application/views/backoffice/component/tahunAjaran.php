<?php $years = range(strftime('%Y', time()),1900); ?>
<?php $label = 'ajaran'; ?>
<label for='selectpickerIcons' class='form-label'><?= getLabel('tahun ajaran') ?></label>
<select name="<?= $label ?>" id="<?= $label ?>" class="selectpicker w-100 show-tick"
		data-live-search="true" data-icon-base="bx" data-tick-icon="bx-check"
		data-style="btn-default">
	<?php foreach($years as $year) : ?>
		<option value="<?php echo $year; ?>"><?php echo $year; ?></option>
	<?php endforeach; ?>
</select>


<script>
	// setIdSelect('tahun_ajaran',new Date())

	$(document).ready(()=>{
		let now = new Date();
		let year = now.getFullYear();
		setIdSelect('ajaran',year.toString())
	})
</script>
