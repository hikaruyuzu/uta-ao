<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Helper/InputHelper.php";
require_once __DIR__ . "/../View/TodoListView.php";

use Entity\{TodoList};
use Repository\{TodoListRepositoryImpl};
use Service\{TodoListServiceImpl};
use View\{TodoListView};
use Helper\{InputHelper};

function ViewShowTodoListTest() {

    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Kaguya sama love is war");
    $todolistService->addTodoList("Horimiya");
    $todolistService->addTodoList("Re:zero life in another world from zero");

    $todolistView->ShowTodoList();
}

function ViewAddTodoLisTest() {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistView->AddTodoList();
    $todolistView->AddTodoList();

    $todolistService->showTodoList();

}

function ViewRestRemoveTodoList() {
    $todolistRepository = new TodoListRepositoryImpl();
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodoList("Kaguya sama love is war");
    $todolistService->addTodoList("Horimiya");
    $todolistService->addTodoList("Re:zero life in another world from zero");

    $todolistService->showTodoList();

    $todolistView->RemoveTodoList();

    $todolistService->showTodoList();

    $todolistView->RemoveTodoList();

    $todolistService->showTodoList();

}

ViewRestRemoveTodoList();
