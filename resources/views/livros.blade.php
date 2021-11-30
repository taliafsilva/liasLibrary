<x-layout>
    <x-slot name="title">
        Livros
    </x-slot>
    <x-slot name="content">
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Estante de livros</h1>
                    <p class="lead text-muted">Ache aqui todos os livros da atualidade e vários nomes de ouro.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($livros as $livro)
                <x-book :livro="$livro" />
                @endforeach
            </div>
            </div>
        </div>
    </x-slot>
</x-layout>