<form action="" method="post">
	
	<input type="input" name="slug" placeholder="слизняк" class="form-control input-lg" value="<?php echo $slug_movies; ?>"> <br>
	<input type="input" name="name" placeholder="название фильма" class="form-control input-lg" value="<?php echo $name_movies; ?>"> <br>
	<textarea name="descriptions" placeholder="описание" class="form-control input-lg"><?php echo $descriptions_movies; ?></textarea><br>
	<input type="input" name="year" placeholder="год" class="form-control input-lg" value="<?php echo $year_movies; ?>"> <br>
	<input type="input" name="rating" placeholder="рейтинг" class="form-control input-lg" value="<?php echo $rating_movies; ?>"> <br>
	<input type="input" name="poster" placeholder="ссылка на постер" class="form-control input-lg" value="<?php echo $poster_movies; ?>"> <br>
	<input type="input" name="player_code" placeholder="ссылка на плеер" class="form-control input-lg" value="<?php echo $player_code_movies; ?>"> <br>
	<input type="input" name="director" placeholder="режиссер" class="form-control input-lg" value="<?php echo $director_movies; ?>"> <br>
	<input type="input" name="add_date" value="<?php echo $add_date_movies; ?>" class="form-control input-lg"> <br>
	<input type="input" name="category_id" placeholder="категория (1=фильм; 2=сериал)" class="form-control input-lg" value="<?php echo $category_id_movies; ?>"> <br>
	<input type="submit" name="submit" class="btn btn-success" value="Добавить фильм/сериал">

</form>