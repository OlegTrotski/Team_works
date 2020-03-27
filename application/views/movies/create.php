<form action="/movies/create/" method="post">
	<input type="input" name="slug" placeholder="слизняк" class="form-control input-lg"> <br>
	<input type="input" name="name" placeholder="название фильма" class="form-control input-lg"> <br>
	<textarea name="descriptions" placeholder="описание" class="form-control input-lg"></textarea><br>
	<input type="input" name="year" placeholder="год" class="form-control input-lg"> <br>
	<input type="input" name="rating" placeholder="рейтинг" class="form-control input-lg"> <br>
	<input type="input" name="poster" placeholder="ссылка на постер" class="form-control input-lg"> <br>
	<input type="input" name="player_code" placeholder="ссылка на плеер" class="form-control input-lg"> <br>
	<input type="input" name="director" placeholder="режиссер" class="form-control input-lg"> <br>
	<input type="input" name="add_date" value="<?php echo date("Y-m-d")." ".date("h:i:s"); ?>" class="form-control input-lg"> <br>
	<input type="input" name="category_id" placeholder="категория (1=фильм; 2=сериал)" class="form-control input-lg"> <br>
	<input type="submit" name="submit" class="btn btn-success" value="Добавить фильм/сериал">
</form>