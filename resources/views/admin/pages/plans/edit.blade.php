@extends('adminlte::page')

@section('title', "Editar o Plano #{{ $plan->id }}")

@section('content_header')
    <h1>Editar o Plano #{{ $plan->id }}</h1>
@stop

@section('content')
    
    <form action="{{ route('plans.update', $plan->id) }}" method="post" class="form">
        @method('PUT')
        @include('admin.pages.plans.forms.default')
        <x-adminlte-button class="btn-flat" type="submit" label="Editar" theme="success" icon="fas fa-lg fa-save"/>
    </form>
@stop
