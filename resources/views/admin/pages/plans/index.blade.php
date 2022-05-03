@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <h1>Planos <a href="{{ route('plans.create') }}" class="btn btn-info"><i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <table class="table">
        <thead>
            <th>Nome</th>
            <th>Preço</th>
            <th>Preço Anual</th>
            <th width="150px">Ações</th>
        </thead>
        <tbody>
            @foreach ($plans as $plan)
            <tr>
                <td>{{ $plan->title }}</td>
                <td>{{ $plan->price }}</td>
                <td>{{ $plan->price_yearly }}</td>
                <td>
                    <form action="{{ route('plans.destroy', $plan->id) }}" class="form form-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('plans.edit', $plan->id) }}" class="btn btn-info" title="Editar o plano {{ $plan->title }}"><i class="fas fa-pen"></i></a>
                        <button type="submit" class="btn btn-danger" title="Deletar o plano {{ $plan->title }}"><i class="fas fa-minus-circle"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
