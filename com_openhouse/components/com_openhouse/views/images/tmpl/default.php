<? defined('KOOWA') or die('Nooku is not installed') ?>
<?= @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<h2>Images for <?= $house->address ?></h2>

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
			<td align="center"><img src="media://com_openhouse/uploads/small/<?= $image->filename ?>" class="bordered left" /></td>
			<td align="center">
				<form action="<?= @route('view=images') ?>" method="get" class="-koowa-grid"> 
					<?= @helper('grid.order', array('row' => $image)) ?>
				</form>
			</td>
			<td align="center">
				<form action="<?= @route('view=image&id='. $image->id) ?>" method="post">
					<input type="hidden" name="action" value="delete" />
				
					<button class="plain">Permanently Delete</button>
				</form>
			</td>
		</tr>
		<? endforeach; ?>
	</tbody>
</table>

<form action="<?= @route('view=image&id=') ?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
	<input type="hidden" name="openhouse_house_id" value="<?= $house->id ?>" />
	
	<p>
		<label><?= @text('Add Picture') ?>:</label>
		<input type="file" name="fileupload" /><br/>
		Images will be automatically resized to 620x230 and should be under 2 megabytes in size.<br/>
		<button><span>Save</span></button>
	</p>
		
</form>

<p><a href="<?= @route('view=house&id='. $house->id) ?>">Return to house listing</a></p>
