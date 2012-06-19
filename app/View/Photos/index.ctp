<?php
	echo $this->Form->create('Photo', array('action' => 'index'));
	echo $this->Form->input('search', array('label' => false));
	echo $this->Form->end('Search');
?>
<h2 class="tagtitle">
	<?php echo $title_for_layout; ?>
</h2>
<div id="photos">
	<?php foreach($thumbs['photo'] AS $thumb): ?>
		<div class="thumb">
			<a href="<?php echo $flickr->buildPhotoURL($thumb, "large")?>">
				<img src="<?php echo $flickr->buildPhotoURL($thumb, "large_square")?>" alt="<?php echo $thumb['title']?>">
			</a>
		</div>
	<?php endforeach; ?>
</div>
<div style="clear:both;"></div>
<div id="pagination">
	<a href="<?php echo $this->Html->url(array('tag' => $tag, 'page' => $page - 1)); ?>" class="pagenum">&lsaquo; Previous</a>
	<a href="<?php echo $this->Html->url(array('action' => 'index', 'tag' => $tag, 'page' => $page + 1)); ?>" class="pagenum">Next &rsaquo;</a>
</div>