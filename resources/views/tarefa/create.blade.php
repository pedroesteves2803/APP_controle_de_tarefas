@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.store')}}">
                        @csrf

                        @if(isset($errors->all()[0]))
                            <p style="color: red">{!! $errors->all()[0] !!}</p>
                        @endif

                        <div class="mb-3">
                          <label class="form-label">Tarefa</label>
                          <input type="text" class="form-control" value="{{old('tarefa')}}" name="tarefa">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Data limite conclusão</label>
                          <input type="date" class="form-control" min="{{date('Y-m-d')}}" value="{{old('data_limite_conclusao')}}" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
