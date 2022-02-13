<div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12">
                    <h1><span class="badge bg-success d-block">Listas de Tareas</span></h1>  
                        @if (session()->has('message'))
                          <div class="alert alert-success">
                            {{ session('message') }}
                          </div>
                     @endif      
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Tarea</span>
                        <input wire:model="newTask" type="text" class="form-control" placeholder="Nueva Tarea..." aria-label="Title" aria-describedby="basic-addon1">
                    </div>
                      @error('newTask') <span class="text-danger">{{$message}}</span>@enderror
                <div class="d-flex">
                    <div class="col-md-6">   
                        <div class="input-group">
                          <span class="input-group-text">Categorias</span>
                          <div class="d-flex">
                            <div class="d-flex justify-content-around">
                                <div class="p-2">
                                    PHP
                                    <input wire:model="category_id" class="form-check" type="checkbox" value="1">
                                </div>
                                <div class="p-2">
                                    JavaScript
                                    <input wire:model="category_id" class="form-check" type="checkbox" value="2">
                                </div>
                                <div class="p-2">
                                    CSS
                                    <input wire:model="category_id" class="form-check" type="checkbox" value="3">
                                </div>
                            </div>
                          </div>
                        </div>     
                    </div>
                    <div class="col-md-4">    
                        <div class="btn-group container-fluid">
                            <button class="btn btn-success btn-lg d-block" wire:click="store">Añadir</button>
                        </div>
                    </div>
                </div>
                @error('category_id') <span class="text-danger">{{$message}}</span>@enderror
            </div>
            
            <table class="table border-success shadow">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tarea</th>
                        <th>Categoria</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td> 
                                @foreach($task->categories as $category)
                                    <span class="badge bg-info text-dark">{{$category->category}}</span>
                                @endforeach
                            </td>            
                            <td>
                                <button wire:click="destroy({{ $task->id }})" class="btn btn-danger">Remuve</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  

</div>
