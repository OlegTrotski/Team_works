<form action="/movies/comment/" method="post">
	<input type="input" class="hidden" name="user_id">
	<input type="input" class="hidden" name="movie_id">

	<div class="form-group">
		<textarea name="comment_text" class="form-control"></textarea>
	</div>
</form>

<?php redirect($this->session->flashdata('redirect')); ?>