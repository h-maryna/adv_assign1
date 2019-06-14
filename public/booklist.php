<h2 class="title">Book List</h2>

<table class="table is-bordered">
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Genre</th>
		<th>Year</th>
	</tr>

	<?php foreach($result as $row) : ?>
		<tr>
			<td><a onclick="showModal(this); return false;" href="#" data-book_id="
				<?=htmlspecialchars($row['book_id'], ENT_QUOTES)?>">
				<?=htmlspecialchars($row['title'])?></a></td>
			<td><?=htmlspecialchars($row['author'])?></td>
			<td><?=htmlspecialchars($row['genre'])?></td>
			<td><?=htmlspecialchars($row['year_published'])?></td>
		</tr>
    <?php endforeach; ?>
</table>