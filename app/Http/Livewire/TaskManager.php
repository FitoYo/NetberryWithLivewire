<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Task;
use App\Models\Category;
use App\Models\CategoryTask;

class TaskManager extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $newTask;
    public $category_id = [];


    public function render()
    {

        return view('livewire.task-manager', ['tasks' => Task::orderBy('id', 'desc')->with('categories')->get()]);
    }

    public function store()
    {
        $this->validate([
            'newTask' => ['required'],
            'category_id' => ['required'],
        ]);


        $task = Task::create(['task' => $this->newTask]);

        $task->id;

        

        foreach($this->category_id as $id){
            $data = new CategoryTask;
            $data->category_id = $id;
            $data->task_id = $task->id;
            $data->save();
        }

    $this->newTask = '';
    $this->category_id = [];

    session()->flash('message', __('La Tarea a sido Guardada Correctamente'));

    }

    public function destroy($id)
    {
        Task::find($id)->delete();

        session()->flash('message', __('Tarea Eliminada'));        
    }




}
