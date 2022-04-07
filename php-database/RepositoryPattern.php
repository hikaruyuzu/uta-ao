<?php

require_once __DIR__ . '/Entity/Comments.php';
require_once __DIR__ . '/Repository/CommentsRepository.php';
require_once __DIR__ . '/GetConnection.php';

use Comments\Comments;
use CommentsRepository\CommentsRepositoryImpl;

function TestRepositoryInsert() {
    $connection = GetConnection();

    $repository = new CommentsRepositoryImpl($connection);

    $comment = new Comments(name: "Kaguya shinomiya san", comment: "Hello dear i love u so much");
    $repository->insert($comment);
    $connection = null;

}

function TestRepositoryFindById() {
    $connection = GetConnection();

    $repository = new CommentsRepositoryImpl($connection);

    $comment = $repository->findById(19);
    var_dump($comment);

    $connection = null;

}

function TestRepositoryFindAll() {
    $connection = GetConnection();

    $repository = new CommentsRepositoryImpl($connection);

    $comments = $repository->findAll();

    foreach ($comments as $comment) {
        echo $comment->getName() . "=> " . $comment->getComment() . PHP_EOL;
    }

    $connection = null;

}


TestRepositoryFindAll();
