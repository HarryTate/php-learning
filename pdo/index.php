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
$id = 1;
$author = 'Harry';
$is_published = true;
// Postional Params

// $sql = 'SELECT * FROM posts WHERE author = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$author]);
// $posts = $stmt->fetchAll();

// Named params
// $sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['author' => $author, 'is_published' => $is_published]);
// $posts = $stmt->fetchAll();

// foreach ($posts as $post) {
//     echo $post->title . "<br>";
// }

// FETCH SINGLE POST
// $sql = 'SELECT * FROM posts WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $post = $stmt->fetch();

// echo $post->title;
// echo $post->body;

// GET ROW COUNT
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
// Counts number of rows
$postCount = $stmt->rowCount();
echo $postCount;

// INSERT DATA
// $title = 'Post five';
// $body = 'This is the fifth post';
// $author = 'Kevin';

// $sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// echo 'Post Added';

// UPDATE DATA
$id = 1;
$body = 'This is the updated post';

$sql = 'UPDATE posts SET body = :body WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id, 'body' => $body]);
echo 'Post updated';
