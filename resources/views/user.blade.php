
@extends('layouts.app')


@section('content')

    <div class="container ">
       <div class="title-text text-center"><h3 class="text-center" >Ищете какие та запчасти ? <br>
            Оставьте запрос ниже!
        </h3>
        </div>
        
        @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
 <a href="/user/requests"><button type="button" class="btn btn-primary">Мои запросы </button></a>
        <div class="card-body">
                    <form method="get" action="/user/submit">
                    @csrf
                        

                    <div class="row mb-3">
                            <label for="user_email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label>

                            <div class="col-md-6">
                                <input id="user_email" type="user_email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ old('user_email') }}" required autocomplete="user_email">

                                @error('user_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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
                            <label for="price_from" class="col-md-4 col-form-label text-md-end">{{ __('Цена от') }}</label>

                            <div class="col-md-2">
                                <input id="price_from" type="price_from" class="form-control @error('price_from') is-invalid @enderror" name="price_from" required autocomplete="current-price_from">

                                @error('price_from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-2">
                              <input id="price_to" type="price_to" class="form-control @error('price_to') is-invalid @enderror" name="price_to" required autocomplete="current-price_to">

                                @error('price_to')
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