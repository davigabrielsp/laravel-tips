<h1>Fornecedores</h1>
{{-- Comentário --}}

@forelse($fornecedores as $key => $fornecedor)
    {{ $loop->iteration }} - {{ $fornecedor['id']}}<br>

    @if($loop->first)
        Primeira interação do looping
    @endif
    @if($loop->last)
        Última interação do looping
    @endif
    Total:{{$loop->count}}<br>
    @empty
    ND
@endforelse
