<?php 


//seach booksite database for query

if(!empty($_GET['s'])){

	$dbh = new PDO('mysql:host=localhost;dbname=booksite', 'root', '' );
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$query = "SELECT book.book_id, book.title 
	FROM book
    WHERE book.title LIKE :search";
    $params = array(':search' => "%{$_GET['s']}%");
	$stmt = $dbh->prepare($query);
    $stmt->execute($params);

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    header('Content-Type: text/html');
    echo '<ul>';
    
    foreach ($results as $row) {
        echo "<li><a href='#' onclick='showModal(this); return false;' data-book_id='{$row['book_id']}'>{$row['title']}</a></li>";
    	//echo "<li><a href='#' onclick="showModal(); return false; data-book_id='{$row["book_id"]}'">{$row['title']}</a></li>";
    }
    echo '</ul>';
}
