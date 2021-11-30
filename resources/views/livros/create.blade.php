<x-app-layout>
    <x-slot name="title">
        Livros
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Livros') }}
            <a href="{{ route('livros.list') }}">Voltar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('livros.store') }}">
                        @csrf

                        <!-- Nome -->
                        <div>
                            <x-label for="nome" :value="__('Nome')" />

                            <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" required autofocus />
                        </div>

                        <!-- Descrição -->
                        <div>
                            <x-label for="descricao" :value="__('Descrição')" />

                            <textarea id="descricao" class="block mt-1 w-full" type="text" name="descricao" required></textarea>
                        </div>

                        <!-- Imagem -->
                        <div>
                            <x-label for="img" :value="__('Imagem')" />

                            <x-input id="img" class="block mt-1 w-full" type="text" name="img" required />
                        </div>

                        <!-- URL -->
                        <div>
                            <x-label for="url" :value="__('URL')" />

                            <x-input id="url" class="block mt-1 w-full" type="text" name="url" required />
                        </div>
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Salvar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>