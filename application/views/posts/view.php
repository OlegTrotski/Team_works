<h3><?php echo $title; ?>
	<?php if($this->dx_auth->is_admin()) { ?>
		<a href="/posts/edit/<?php echo $slug; ?>"><button class="btn btn-default" type="button">
			<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button></a>
		<?php } ?>
</h3>
<p><?php echo $content; ?></p>
<br><br><br><a href="/posts/">Все посты</a>