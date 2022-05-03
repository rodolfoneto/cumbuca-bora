@csrf
<div class="row">
    <x-adminlte-input name="title" value="{{ $plan->title ?? old('title') }}"
        label="Nome do Plano" placeholder="Nome" fgroup-class="col-md-6" />
</div>

<x-adminlte-input name="max_users" value="{{ $plan->max_users ?? old('max_users') }}"
    label="Numero máximo de usuários" placeholder="Ex: 99" type="number" fgroup-class="col-md-6">
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-hashtag"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-input name="price" value="{{ $plan->price ?? old('price') }}"
    label="Preço" placeholder="Ex: 245.50" type="number" fgroup-class="col-md-6">
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-hashtag"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-input name="price_yearly" value="{{ $plan->price_yearly ?? old('price_yearly') }}"
    label="Preço Anual" placeholder="Ex: 245.50" type="number" fgroup-class="col-md-6">
    <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-hashtag"></i>
        </div>
    </x-slot>
</x-adminlte-input>

<x-adminlte-textarea name="description"
    label="Descrição" rows=5 label-class="text-warning" fgroup-class="col-md-6"
    placeholder="Escreva uma descrição">
    <x-slot name="prependSlot">
        <div class="input-group-text bg-dark">
            <i class="fas fa-lg fa-file-alt text-warning"></i>
        </div>
    </x-slot>
    {{ $plan->description ?? old('description') }}
</x-adminlte-textarea>