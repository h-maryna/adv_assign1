<?php



$dbh = new PDO('mysql:host=localhost;dbname=booksite', 'root', '' );
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!empty($_GET['book_id'])){
	$query = "SELECT book.* ,
	author.name as author,
	publisher.name as publisher,
	format.name as format,
	genre.name as genre 
	FROM book
	JOIN author USING (author_id)
	JOIN publisher USING (publisher_id)
	JOIN format USING (format_id)
	JOIN genre USING (genre_id)
    WHERE book_id = :book_id";
	$params = array(':book_id' =>(int) $_GET['book_id']);
	$stmt = $dbh->prepare($query);
    $stmt->execute($params);

    $book = $stmt->fetch(PDO::FETCH_ASSOC);
    include 'detail.php';
    
} else{
	$query = "SELECT book.*,
	author.name as author,
	publisher.name as publisher,
	format.name as format,
	genre.name as genre 
	FROM book
	JOIN author USING (author_id)
	JOIN publisher USING (publisher_id)
	JOIN format USING (format_id)
	JOIN genre USING (genre_id)";
    
	$params = array();
	$stmt = $dbh->prepare($query);
    $stmt->execute($params);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    include 'booklist.php';
}

