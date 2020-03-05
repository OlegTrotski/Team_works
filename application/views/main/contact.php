<div class="well">
	<?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
	echo from_open("/contact", $attributes);?>
	<fieldset>
		<legend><h2>Контакты</h2></legend>
		<p id="cont">Отправьте отзыв о портале КиноМонстр</p>
		<div class="form-goup">
			<input type="text" name="name" placeholder="Ваше имя" class="form-control" value="<?php echo set_value('name'); ?>" />
			<span class="text-danger"><?php echo form_error('name'); ?></span>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="email" placeholder="Ваш email" value="<?php echo set_value('email'); ?>" />
			<span class="text-danger"><?php echo form_error('email'); ?></span>
		</div>

		<div class="form-group">
			<input type="text" class="form-control" name="subject" placeholder="Тема" value="<?php echo set_value('subject'); ?>" />
			<span class="text-danger"><?php echo form_error('subject'); ?></span>
		</div>

		<div class="form-group">
			<textarea type="text" class="form-control" name="message" placeholder="Ваш отзыв"><?php echo set_value('message'); ?>
			</textarea>
			<span class="text-danger"><?php echo form_error('message'); ?></span>
		</div>

		<div class="form-group">
			<input type="submit" class="btn btn-lg btn-warning pull-right" value="отправить" name="submit" />
		</div>
	</fieldset>
	<?php echo from_close(); ?>
	<?php echo $this->session->flashdata('msg'); ?>
</div>