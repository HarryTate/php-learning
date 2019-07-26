<?php
$host = "localhost";
$user = "root";
$password = "password";
$dbname = "pdoposts";

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO Instance

$pdo = new PDO($dsn, $user, $password);
// Set default fetch mode as objects
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

#PDO Query Method
// $stmt = $pdo->query('SELECT * FROM posts');

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['title'] . '<br>';
// }

// while ($row = $stmt->fetch()) {
//     echo $row->id . '<br>';
//     echo $row->title . '<br>';
//     echo $row->body . '<br>';
// }

# PREPARED STATEMENTS (prepare & execute)

// UNSAFE
// $sql = "SELECT * FROM posts WHERE author = '$author'";

// FETCH MULTIPLE POSTS

// User Input
$author = 'Harry';
$is_published = true;
// Postional Params

// $sql = 'SELECT * FROM posts WHERE author = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

// Named params
$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
$stmt = $pdo->prepare($sql);
$stmt->execute(['author' => $author, 'is_published' => $is_published]);
$posts = $stmt->fetchAll();

foreach ($posts as $post) {
    echo $post->title . "<br>";
}
