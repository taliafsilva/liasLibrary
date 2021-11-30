<x-app-layout>
    <x-slot name="title">
        Usuários
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table style="width: 100%;">
                      <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ativo</th>
                        <th>Plano</th>
                        <th>Ativar/Desativar</th>
                      </tr>
                      @foreach($users as $user)
                      <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->assinatura }}</td>
                        <td>{{ $user->tipo_assinatura }}</td>
                        <td>
                          <form method="POST" action="{{ route('usuarios.update', $user->id) }}">
                            @csrf
                            @method("PUT")

                            <button onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Mudar') }}
                            </button>
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