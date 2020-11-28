<?php

namespace App\Http\Controllers;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Http\Requests\TaskValidation;

use App\Models\Task;

class TaskController extends Controller
{
    //Retorna para o usuário o HTML e o CSS montado na view
    public function newTask() {
        return(view('newTask'));
    }

    //Adicionar nova tarefa
    public function addNewTask(Request $request) {
        
        try {
        // Verifica se a data inserida ja esta no banco de dados
         $tasks = Task::where('data', $request->input('data'))->count();

            if( $tasks > 0 ) {
                flash()->error("Data já agendada");
                return redirect()->back();
            }
            else {
            //Salvando os valores do form no banco de dados
            Task::create([
                'compromisso' => $request->compromisso,
                'data' => $request->data
                ]);
            }
            
            } catch(QueryException $e) {
                flash()->error('Ops! Ocorreu algum problema. Tente novamente.');
                return redirect()->back();
            }
            flash()->success('Agendamento realizado com sucesso!');
            return redirect()->back();
        
    }
        
    //Listar todos os agendamentos
    public function showAllTasks() {

        //Select * from tasks
        try {

        $tasks = Task::all();

        return view('showAllTasks', compact('tasks'));

    } catch (QueryException $e) {

        return redirect()->back()->with('error', 'Ocorreu um problema! Tente novamente');
    }
    }

    //Mostra a tarefa que o usuario clicou para ser editada
    public function showTask($id) {

        $task = Task::findorFail($id);

        return view('editar',['task' => $task]);

    }

    //Atualizar agendamento
    public function updateTask(Request $request,$id) { 

        try {
            $task = Task::findorFail($id);
            $task->update([
                'compromisso' => $request->compromisso,
                'data' => $request->data
            ]);
            } catch(QueryException $e) {
                flash()->error('Ocorreu um problema! Tente novamente');
                return redirect()->back();
            }
            flash()->success('Agendamento atualizado com sucesso!');
            return redirect()->back();
    }

    //Deletar agendamento
    public function destroy($id) {

        $tasks = Task::findorFail($id);

        //Select * from tasks where id = $id
        $tasks->delete();

        return redirect()->back();

    }

}

