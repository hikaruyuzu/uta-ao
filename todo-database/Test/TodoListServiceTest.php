<?php

require_once  __DIR__ . "/../Config/Database.php";
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . '/../Service/TodoListService.php';

use Entity\{TodoList};
use Repository\{TodoListRepositoryImpl};
use Service\{TodoListServiceImpl};

function ShowTodoListTest() {
    $connection = \Config\Database::GetConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);


    $todolistService->showTodoList();
}

function AddTodoListTest() {
    $connection = \Config\Database::GetConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->addTodoList("Kaguya sama love is war");
    $todolistService->addTodoList("Tate no yusha");
    $todolistService->addTodoList("Re:zero life in diferent world from zero");

}

function RemoveTodoListTest() {
    $connection = \Config\Database::GetConnection();
    $todolistRepository = new TodoListRepositoryImpl($connection);
    $todolistService = new TodoListServiceImpl($todolistRepository);

    $todolistService->removeTodoList(5);

    $todolistService->removeTodoList(4);

    $todolistService->removeTodoList(6);

}



ShowTodoListTest();