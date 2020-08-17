@extends('template.app')
@section('conteudo')
<main>
			<section class="py-md-0 pull-right">
				<div class="background-holder overlay-0" style="background-image:url({{asset('assets/images/obrigado.jpg')}}"></div>
				<div class="container">
					<div class="row h-full align-items-center">
						<div class="col-md-7"></div>
						<div class="col-lg-4 col-xl-5" style="margin-top: 40px;">
							
							<img src="assets/images/logo-fp.png" class="center" width="350" style="margin: 0 auto; display: block;">
							<div style="height: 20px;"></div>
							<h2 class="fw-600 font-2 lh-2 text-center text-uppercase" style="color: #6ba13e;"> Investidor, OBRIGADO <br>PELA INSCRIÇÃO</strong></h2>
							<p class="lead mt-4 text-white text-center" style="font-weight: bold;">Você deu o primeiro passo em direção
ao sucesso e ao futuro da educação, agora você pode baixar o seu e-book no botão abaixo!</p>
								<a href="ebook/fp.pdf" class="btn enviar btn-success btn-capsule mt-2 mt-sm-4 mr-4 col-md-6" style="margin-left: 25%;"> Baixar Ebook </a>
								<a href="https://fpeduc.com/investidor/" class="btn enviar btn-danger btn-capsule mt-2 mt-sm-4 mr-4 col-md-6" style="margin-left: 25%;"> Sair </a>
						</div>
					</div>
				</div>
			</section>
								</main>
@endsection