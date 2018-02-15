@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(Auth::user()->type==1)
                    <a href="{{route ('inscribir_paht')}}"> Inscribir materias</a>
                    
                      <a href="{{route ('Materias_paht')}}"> Ver materias</a>
                      @else

                      <a href="{{route ('Materias_paht')}}"> Ver Alumnos inscritos</a>

                      @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
