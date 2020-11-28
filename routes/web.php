<?php

use Illuminate\Support\Facades\Route;


//Rota para o acesso da página de login
Route::get('',[\App\Http\Controllers\LoginController::class,'login'])->name('login_screen');

//Rota para acessar a tela de menu
Route::get('/menu',[\App\Http\Controllers\MenuController::class,'menu'])->name('menu_screen');

//Rota para criação de uma nova tarefa
Route::get('/agendamento/novo',[\App\Http\Controllers\TaskController::class,'newTask'])->name('new_task');

//Rota responsável pelo envio de novos agendamentos
Route::post('/agendamento/novo',[\App\Http\Controllers\TaskController::class,'addNewTask'])->name('record_task');

//Rota responsável por listar os agendamentos
Route::get('/agendamento/meus-agendamentos',[\App\Http\Controllers\TaskController::class, 'showAllTasks'])->name('show_all_tasks');

//Rota responsável por exibir um determinado agendamento para ser editado
Route::get('/agendamento/editar/{id}',[\App\Http\Controllers\TaskController::class, 'showTask'])->name('show_task');

//Rota responsável por atualizar um determinado agendamento
Route::put('taskEdit/{id}',[\App\Http\Controllers\TaskController::class, 'updateTask'])->name('update_task');

//Rota responsável por deletar um determinado agendamento
Route::get('/agendamento/deletar/{id}',[\App\Http\Controllers\TaskController::class, 'destroy'])->name('delete_task');


