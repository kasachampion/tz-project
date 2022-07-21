
@extends('layouts.app')


@section('content')

    <div class="container ">
       <div class="title-text text-center"><h3 class="text-center" >Добавить товар в магазин
        </h3>
        </div>
        
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<a href="/admin"><button type="button" class="btn btn-primary">Все товары </button></a>
        <div class="card-body">
                    <form method="get" action="/admin/addtask/submit">
                    @csrf
                        

                    <div class="row mb-3">
                            <label for="manufacturer" class="col-md-4 col-form-label text-md-end">{{ __('Наименование производителя') }}</label>

                            <div class="col-md-6">
                                <input id="manufacturer" type="manufacturer" class="form-control @error('manufacturer') is-invalid @enderror" name="manufacturer" value="{{ old('manufacturer') }}"  autofocus>

                                @error('manufacturer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Цена') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="price" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}"  autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                       
                            
                       
                        <div class="row mb-3">
                            <label for="spare_part" class="col-md-4 col-form-label text-md-end">{{ __('Наименование запчастя') }}</label>

                            <div class="col-md-6">
                                <input id="spare_part" type="spare_part" class="form-control @error('spare_part') is-invalid @enderror" name="spare_part" value="{{ old('spare_part') }}"  autofocus>

                                @error('spare_part')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                       

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Отправить') }}
                                </button>

                               
                            </div>
                        </div>
                    </form>
                </div>



              

    </div>




    
@endsection