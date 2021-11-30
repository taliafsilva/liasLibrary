@php
$slides = [
    [
        'img' => 'slide1',
        'title' => 'Os melhores livros para ler online.',
        'subtitle' => 'Ache os melhores livros de fantasia, ação, romance e construção mental.',
    ],
    [
        'img' => 'slide2',
        'title' => 'Acesse hoje pelo menor preço.',
        'subtitle' => 'O menor preço do mercado por um acesso rápido e fácil.',
    ],
    [
        'img' => 'slide3',
        'title' => 'Acesso fácil e prático.',
        'subtitle' => 'A qualquer momento acesse sua biblioteca para ler em qualquer lugar.',
    ],
];
@endphp

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @foreach($slides as $i=>$slide)
        @if($i == 0)
        <div class="carousel-item active">
        @else
        <div class="carousel-item">
        @endif
            <img
                src="{{ asset('img/slider/'.$slide['img'].'.jpg') }}"
                class="bd-placeholder-img opacity-75"
                width="100%"
                height="100%"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
                preserveAspectRatio="xMidYMid slice"
                focusable="false"
            />

            <div class="container">
            <div class="carousel-caption text-start">
                <h1>{{ $slide['title'] }}</h1>
                <p>{{ $slide['subtitle'] }}</p>
                <p><a class="btn btn-lg btn-primary" href="{{ route('precos.index') }}">Assine já</a></p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
    </button>
</div>