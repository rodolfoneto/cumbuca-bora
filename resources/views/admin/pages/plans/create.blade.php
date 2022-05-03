@extends('adminlte::page')

@section('title', 'Adicionar um Plano')

@section('content_header')
    <h1>Adicionar um Plano</h1>
@stop

@section('content')
    
    <form action="{{ route('plans.store') }}" method="post" class="form">
        @include('admin.pages.plans.forms.default')
        <x-adminlte-button class="btn-flat" type="submit" label="Cadastrar" theme="success" icon="fas fa-lg fa-save"/>
    </form>
@stop
