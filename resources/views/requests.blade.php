@extends('layouts.app')

@section('content')
<div class="container">
               




                    <table class="table">
                    <thead>
                      <tr>
                      
                      
                        <td scope="col"><b> Производитель</b></td>
                        <td scope="col"><b>Цена от</b></td>
                        <td scope="col"><b>Цена до</b></td>
                        <td scope="col"><b>Наименование товара</b></td>
                        <td scope="col"><b>Email</b></td>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($user as $user)
                      <tr>
                       
                        <td>{{ $user->manufacturer }}</td>
                        <td>{{ $user->price_from }}</td>
                        <td>{{ $user->price_to }}</td>
                        <td>{{ $user->spare_part }}</td>
                        <td>{{ $user->user_email }}</td>
                      </tr>
          
                    @endforeach
                    </tbody>
                  </table>
              </div>
@endsection

 