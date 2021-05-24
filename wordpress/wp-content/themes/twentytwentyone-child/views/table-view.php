<div class="table--mediapark alignwide">
	<span class="anchor" id="tableMediapark"></span>
	<div class="table--mediapark__filters">
		<?php foreach ($args['filters'] as $key => $filter) {
			?>
			<label value="<?= $key ?>">
				<select id="<?= $key ?>Filter" class="table--mediapark__filters--button">
					<option value="" disabled selected><?= $filter['title'] ?></option>
					<?php foreach ($filter['options'] as $option) {
						?>
						<option value="<?= $option ?>"> <?= $option ?> </option>
						<?php
					}
					?>
					<option value="">CLEAR</option>
					-->
				</select>
			</label>
			<?php
		} ?>
	</div>
	<div class="table--mediapark__table">
		<table>
			<thead>
			<tr>
				<th>
					Nuolaida
				</th>
				<th>
					Namo nr.
				</th>
				<th>
					Plotas m2
				</th>
				<th class="multiline-header">
					Kambarių
					skaičius
				</th>
				<th class="multiline-header">
					Langų
					orientacija
				</th>
				<th>
					Baigtumas
				</th>
			</tr>
			</thead>
			<tbody id="tableMediaparkBody">
<!-- Content loaded with ajax table.js getTableData() -->
			</tbody>
		</table>
	</div>
</div>
