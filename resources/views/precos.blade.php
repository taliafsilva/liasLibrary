<x-layout>
    <x-slot name="title">
        Preços
    </x-slot>
    <x-slot name="content">
    <section class="py-5 text-center container">
      <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
              <h1 class="fw-light">Escolha seu plano de leitura</h1>
              <p class="lead text-muted">Ache o plano que mais combina com seu perfil de leitor!</p>
          </div>
      </div>
    </section>
    <div class="py-5 container">
      <div class="row row-cols-1 row-cols-md-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Casual</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$0<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Biblioteca pública</li>
                <li>1 GB de armazenamento</li>
                <li>Acesso 24 hrs</li>
                <li>Suporte</li>
              </ul>
              <a type="button" href="/assinatura/casual" class="w-100 btn btn-lg btn-outline-primary">Se inscreva</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Assíduo</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">R$20<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Biblioteca pública e privada</li>
                <li>10 GB de armazenamento</li>
                <li>Acesso 24 hrs</li>
                <li>Suporte</li>
              </ul>
              <a type="button" href="/assinatura/assiduo" class="w-100 btn btn-lg btn-primary">Assine já</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-white bg-primary border-primary">
              <h4 class="my-0 fw-normal">Devorador</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$35<small class="text-muted fw-light">/mês</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Biblioteca pública e privada</li>
                <li>Armazenamento Ilimitado</li>
                <li>Acesso 24 hrs</li>
                <li>Suporte</li>
              </ul>
              <a type="button" href="/assinatura/devorador" class="w-100 btn btn-lg btn-primary">Assine já</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    </x-slot>
</x-layout>        