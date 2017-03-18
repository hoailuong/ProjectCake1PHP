<?php
echo $this->Html->script('tinymce/tinymce.min');
?>
<script>
  tinymce.init({
    selector: 'textarea'
  });
</script>
<div class="images form">
<?php echo $this->Form->create('Image', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Image'); ?></legend>
	<?php
		echo $this->Form->input('name',array('label' => 'Tên ảnh', 'class' => 'form-control'));
		echo $this->Form->input('description',array('label' => 'Mô tả', 'class' => 'form-control', 'required' => false));
		echo $this->Form->input('image', array('label' => 'Hình ảnh sản phẩm', 'class' => 'form-control', 'type' => 'file'));
		echo $this->Form->input('slideshow');
		echo $this->Form->input('header');
		echo $this->Form->input('advertisement');
		echo $this->Form->input('background');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Images'), array('action' => 'index')); ?></li>
	</ul>
</div>
