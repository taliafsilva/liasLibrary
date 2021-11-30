<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" style="font-size: 2.5rem;">
                Lia's Library
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('assinatura.store') }}">
            @csrf

            <!-- Numero do Cartão -->
            <div>
                <x-label for="numeroCartao" :value="__('Numero no cartão')" />

                <x-input id="numeroCartao" class="block mt-1 w-full" type="text" name="numeroCartao" required autofocus />
            </div>

            <!-- Validade -->
            <div class="mt-4">
                <x-label for="validade" :value="__('Data de Vencimento')" />

                <x-input id="validade" class="block mt-1 w-full" type="text" name="validade" required />
            </div>

            <!-- CVV -->
            <div class="mt-4">
                <x-label for="cvv" :value="__('CVV')" />

                <x-input id="cvv" class="block mt-1 w-full" type="text" name="cvv" required />
            </div>

            <!-- Nome do Dono -->
            <div class="mt-4">
                <x-label for="nome" :value="__('Nome do Dono')" />

                <x-input id="nome" class="block mt-1 w-full" type="text" name="nome" required />
            </div>

            <input name="tipo" class="hidden" value="{{$tipo}}" />

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Assinar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
