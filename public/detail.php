<h2 class="title">Book Detail</h2>

<h3 class="title"><?=$book['title']?></h3>

<div class="container">
	<div class="column">
		<figure>
			<img src="images/covers/<?=$book['image']?>" >
		</figure>
   </div>
   <div class="column">
		<p><?php foreach($book as $key => $value) : ?>
			<strong><?=ucwords(str_replace('_', ' ', $key))?></strong> : <?=$value?><br />
		<?php endforeach; ?>
		</p>
    </div>
</div>