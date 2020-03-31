<form action="" method="post">
	
	<input type="input" class="form-control input-lg" name="slug" value="<?php echo $slug_news; ?>" placeholder="слизняк"> <br>
	<input type="input" class="form-control input-lg" name="title" value="<?php echo $title_news; ?>" placeholder="газвание новости"> <br>
	<textarea name="text" class="form-control input-lg" placeholder="текст новости"><?php echo $content_news; ?></textarea> <br>
	<input type="submit" class="btn btn-success" name="submit" value="Редактировать новость">

</form>