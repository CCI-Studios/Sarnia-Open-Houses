<? defined('KOOWA') or die('Nooku is not installed') ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />

<h2>Images for <?= $house->address ?></h2>

<form action="<?= @route('view=images') ?>" method="get" class="-koowa-grid">
	<table style="width: 300px;">
		<thead>
			<tr>
				<th width="50">Preview</th>
				<th width="50">Order</th>
				<th width="75">Delete</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($images as $image): ?>
			<tr>
				<td align="center">
					<div class="hidden"><?= @helper('grid.checkbox', array('row'=>$image))?></div>
					<img src="media://com_openhouse/uploads/small/<?= $image->filename ?>" class="bordered left" />
				</td>
				<td align="center"><?= @helper('grid.order', array('row' => $image)) ?></td>
				<td align="center">
					<div class="button plain"
						data-action="delete">Permanently Delete</div>
				</td>
			</tr>
			<? endforeach; ?>
		</tbody>
	</table>
</form>

<form action="<?= @route('view=image&id=') ?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
	<input type="hidden" name="openhouse_house_id" value="<?= $house->id ?>" />
	
	<p>
		<label><?= @text('Add Picture') ?>:</label>
		<input type="file" name="fileupload" /><br/>
		Images will be automatically resized to 620x290 and should be under 2 megabytes in size.<br/>
		<button><span>Save</span></button>
	</p>
		
</form>

<p><a href="<?= @route('view=house&id='. $house->id) ?>">Return to house listing</a></p>
