<form action="{{route('site.store')}}" method="post" class="{{ $class }}">
    @csrf
    <input type="text" name="nome" id=""><br>
    <input type="text" name="telefone" id=""><br>
    <input type="text" name="email" id=""><br>
    <select name="opcao" id="" required>
        <option value="">Motivo</option>
        <option value="1">Reclamação</option>
        <option value="2">Sugestão</option>
    </select><br>
    <textarea name="mensagem" id=""></textarea><br>
    <input type="submit" value="ENVIAR">
</form>
{{$slot}}

