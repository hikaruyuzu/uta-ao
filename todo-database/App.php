<?php

require_once __DIR__ . '/Config/Database.php';
require_once __DIR__ . '/Entity/TodoList.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodoListRepository.php';
require_once __DIR__ . '/Service/TodoListService.php';
require_once __DIR__ . '/View/TodoListView.php';


use Repository\{TodoListRepositoryImpl};
use Service\{TodoListServiceImpl};
use View\{TodoListView};

$connection = \Config\Database::GetConnection();
$todolistRepository = new TodoListRepositoryImpl($connection);
$todolistService = new TodoListServiceImpl($todolistRepository);
$todolistView = new TodoListView($todolistService);

$todolistView->ShowTodoList();
