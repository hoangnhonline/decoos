<option value="0">--chọn--</option>
<?php if(!empty( (array) $cateList )): ?>
	<?php foreach($cateList as $cate): ?>
	<option value="<?php echo e($cate->id); ?>"><?php echo e($cate->name_vi); ?></option>
	<?php endforeach; ?>
<?php endif; ?>