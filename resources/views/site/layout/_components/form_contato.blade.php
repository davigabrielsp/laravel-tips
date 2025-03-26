<form action="{{route('site.store')}}" method="post" class="{{ $class }}">
    @csrf
    <input type="text" name="nome" id="" value="{{old('nome')}}"><br>
    <input type="text" name="telefone" id="" value="{{ old('telefone') }}"><br>
    <input type="email" name="email" id="" value=" {{ old('email') }} "><br>
    <select name="motivo_contato" id="" value="{{ old('motivo_contato') }}" required>
        <option value="">Motivo</option>
        @foreach ($motivo_contatos as $motivo_contato)
            <option value="{{ $motivo_contato->id }}" {{ old('motivo_contato') == $motivo_contato->id ?  'selected' : ''}}>{{ $motivo_contato->motivo_contato }}</option>
        @endforeach
    </option>
    </select><br>
    <textarea name="mensagem" id="">
        {{ !empty(old('mensagem') ? old('mensagem') : 'preencha a mensagem') }}
    </textarea><br>
    <input type="submit" value="ENVIAR">
</form>
{{$slot}}

