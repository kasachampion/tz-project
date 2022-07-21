@extends('layouts.app')

@section('content')
<div class="container">
<a href="/admin"><button type="button" class="btn btn-primary">Вернуться </button></a>
               <h4> Список запросов от пользователей</h4>




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
                    @foreach ($getrequests as $user)
                          <?php
                            
                              echo "<tr>";
                            
                              echo "<td> $user->manufacturer </td>";
                              echo "<td> $user->price_from </td>";
                              echo "<td> $user->price_to </td>";
                              echo "<td> $user->spare_part </td>";
                              echo" <td> $user->user_email </td>";
                              echo" </tr> ";
                            
                          
                            ?>
                        @endforeach
                    </tbody>


                  
                
                 
                  </table>
              </div>
@endsection

 