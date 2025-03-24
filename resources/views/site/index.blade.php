@extends('site.layout.app')

@section('title', $title)

@section('content')
<h1>Site</h1>
<img src="{{asset('assets/images/bc.png')}}" alt="" width="50">
@component('site.layout._components.form_contato', ['class' => '.borda-azul'])

@endcomponent
@endsection


