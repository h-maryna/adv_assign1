<h2 class="title">Book List</h2>

<table class="table">
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Genre</th>
		<th>Year</th>
	</tr>

	<?php foreach($result as $row) : ?>
		<tr>
			<td><?=htmlspecialchars($row['title'])?></td>
			<td><?=htmlspecialchars($row['author'])?></td>
			<td><?=htmlspecialchars($row['genre'])?></td>
			<td><?=htmlspecialchars($row['year_published'])?></td>
		</tr>
    <?php endforeach; ?>
</table>