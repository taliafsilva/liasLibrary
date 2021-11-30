<x-app-layout>
    <x-slot name="title">
        Livros
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Livros') }}
            <a href="{{ route('livros.create') }}">Add +</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table style="width: 100%;">
                      <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Imagem</th>
                        <th>Url</th>
                        <th>Ações</th>
                      </tr>
                      @foreach($livros as $livro)
                      <tr>
                        <td>{{ $livro->nome }}</td>
                        <td><p style="width: 250px; text-overflow: ellipsis; white-space: nowrap; overflow: hidden;">{{ $livro->descricao }}</p></td>
                        <td><img width="150" src="{{ $livro->img }}" /></td>
                        <td><a href="{{ $livro->url }}">url</a></td>
                        <td class="d-flex items-center">
                          <a class="mx-2" href="{{ route('livros.show', $livro->id) }}">Edição</a> | 
                          <form class="mx-2" method="POST" action="{{ route('livros.destroy', $livro->id) }}">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('livros.destroy', $livro->id) }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Apagar') }}
                            </a>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>