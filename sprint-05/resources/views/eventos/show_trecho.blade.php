{{-- Trecho para colar dentro do loop de perguntas em eventos/show.blade.php --}}
@foreach ($evento->perguntas as $pergunta)
    <div>
        <p>{{ $pergunta->texto }}</p>

        @can('delete', $pergunta)
            <form method="POST" action="{{ route('perguntas.destroy', $pergunta) }}">
                @csrf
                @method('DELETE')
                <x-danger-button>Excluir Pergunta</x-danger-button>
            </form>
        @endcan
    </div>
@endforeach
