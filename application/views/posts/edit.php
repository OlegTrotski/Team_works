<form action="" method="post">
	
	<input type="input" class="form-control input-lg" name="slug" value="<?php echo $slug_posts; ?>" placeholder="слизняк"> <br>
	<input type="input" class="form-control input-lg" name="title" value="<?php echo $title_posts; ?>" placeholder="название поста"> <br>
	<textarea name="text" class="form-control input-lg" placeholder="текст поста"><?php echo $content_posts; ?></textarea> <br>
	<input type="submit" class="btn btn-success" name="submit" value="Редактировать пост">

</form>