@extends('layouts.app')


@section('content')

    <div class="container">

     <h4>Добро пожаловать в магазин запчастей</h4> 

     <a href="/admin/addtask"><button type="button" class="btn btn-primary">Добавить товар </button></a>
     <a href="/admin/requests"><button type="button" class="btn btn-primary">Запросы </button></a>
   
     <div class="mb-3">
        

     <table class="table">
                    <thead>
                      <tr>
                      
                      
                        <td scope="col"><b> Наименование запчастей</b></td>
                        <td scope="col"><b>Цена</b></td>
                        <td scope="col"><b>Запчасти</b></td>
                   
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                      <tr>
                       
                        <td>{{ $task->manufacturer }}</td>
                        <td>{{ $task->price }}</td>
                        <td>{{ $task->spare_part }}</td>
                   
                      </tr>
          
                    @endforeach
                    </tbody>
                  </table>
     </div>
    </div>
    


@endsection