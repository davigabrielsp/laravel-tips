@extends('site.layout.app')

@section('title', 'Contato')
@section('content')
<h1>contato</h1>
    @component('site.layout._components.form_contato', ['class' => '.borda-preta'])
        <p>A nossa equipe vai analisar a sua mensagem.</p>
        <p>Tempo de resposta: 48 horas</p>
    @endcomponent
@endsection
