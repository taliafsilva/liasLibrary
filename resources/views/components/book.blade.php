@props(['livro'])

<div class="col">
    <div class="card shadow-sm">
        <img
            src="{{ $livro->img }}"
            class="bd-placeholder-img card-img-top"
            width="100%"
            height="225"
            xmlns="http://www.w3.org/2000/svg"
            role="img"
            aria-label="Placeholder: Thumbnail"
            preserveAspectRatio="xMidYMid slice"
            focusable="false"
        />

        <div class="card-body">
            <div class="card-text">
                <h3>{{ $livro->nome }}</h3>
                <p>{{ $livro->descricao }}</p>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a type="button" class="btn btn-sm btn-outline-secondary" href="{{$livro->url}}">Começar a ler</a>
                </div>
            </div>
        </div>
    </div>
</div>