@extends('layout')

@section('cabecalho')

    Séries

@endsection

@section('conteudo')
    @if(!empty($mensagem))
        <div class="alert alert-success">

            {{ $mensagem }}
            
        </div>
    @endif
    <a href="{{ route('adicionar_series')}}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome; }}
            <form action="/series/{{ $serie->id; }}" method="post"
                onsubmit="return confirm('Tem certeza que deseja excluir {{ addslashes($serie->nome); }}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm ">
                    <i class="far fa-trash-alt"></i></button>
            </form>
        </li>
        @endforeach
    </ul>
    
@endsection