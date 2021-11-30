<x-layout>
    <x-slot name="title">
        Início
    </x-slot>
    <x-slot name="content">
        <x-slide></x-slide>
        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row mt-3">
                <div class="col-lg-4">
                    <img
                        src="{{ asset('img/icons/icon-book.png') }}"
                        class="bd-placeholder-img"
                        width="140"
                        height="140"
                        xmlns="http://www.w3.org/2000/svg"
                        role="img"
                        aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    />

                    <h2>Acervo</h2>
                    <p>Vasto acervo de livros dos mais renomados aos mais novos lançamentos.</p>
                    <p><a class="btn btn-secondary" href="{{ route('precos.index') }}">Veja Agora &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img
                        src="{{ asset('img/icons/icon-world.png') }}"
                        class="bd-placeholder-img"
                        width="140"
                        height="140"
                        xmlns="http://www.w3.org/2000/svg"
                        role="img"
                        aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    />

                    <h2>Global</h2>
                    <p>Livros traduzidos por grandes editoras em tempo recorde para você ler em qualquer lugar.</p>
                    <p><a class="btn btn-secondary" href="{{ route('precos.index') }}">Veja agora &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img
                        src="{{ asset('img/icons/icon-price.png') }}"
                        class="bd-placeholder-img"
                        width="140"
                        height="140"
                        xmlns="http://www.w3.org/2000/svg"
                        role="img"
                        aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice"
                        focusable="false"
                    />

                    <h2>Preço</h2>
                    <p>O menor preço do mercado para você ter o melhor conteúdo mundial.</p>
                    <p><a class="btn btn-secondary" href="{{ route('precos.index') }}">Veja agora &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Os melhores para relaxar com um bom café.</h2>
                <p class="lead">Ótimos livros para relaxar e curtir o momento.</p>
            </div>
            <div class="col-md-5">
                <img
                    src="{{ asset('img/marketing/marketing1.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500"
                    height="500"
                    xmlns="http://www.w3.org/2000/svg"
                    role="img"
                    aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false"
                />

            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Suspense com direito a arrepios realistas.</h2>
                <p class="lead">Sinta novamente arrepios e se encha de emoção ao experimentar os melhores do terror e suspense.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img
                    src="{{ asset('img/marketing/marketing2.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500"
                    height="500"
                    xmlns="http://www.w3.org/2000/svg"
                    role="img"
                    aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false"
                />

            </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Sinta o toque e o suspirar dos personagens.</h2>
                <p class="lead">Romances que vão te prender do início ao fim com ótimos personagens e dramas.</p>
            </div>
            <div class="col-md-5">
                <img
                    src="{{ asset('img/marketing/marketing3.jpg') }}"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                    width="500"
                    height="500"
                    xmlns="http://www.w3.org/2000/svg"
                    role="img"
                    aria-label="Placeholder: 500x500"
                    preserveAspectRatio="xMidYMid slice"
                    focusable="false"
                />

            </div>
            </div>

            <hr class="featurette-divider">

            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->
    </x-slot>
</x-layout>
