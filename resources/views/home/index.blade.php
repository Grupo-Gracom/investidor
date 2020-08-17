@extends('template.app')
@section('titulo','Investidor | Futuro no Presente')
@section('conteudo')
		<main>
			<div class="znav-container" id="znav-container">
				<div class="container">
					@include('template.menu.header')
				</div>
			</div>
			<section class="py-md-0 pull-right" style="margin-top: -25px; z-index:-100">
				<div class="background-holder overlay-0" style="background-image:url({{asset('assets/images/55.jpg')}});"></div>
				<div class="container">
					<div class="row h-full align-items-center">
						<div class="col-md-7"></div>
						<div class="col-lg-4 col-xl-5 logo" style="margin-top: 150px;">
							
							<img src="{{asset('assets/images/logo-fp.png')}}" class="center" width="260">
							<h1 class="fw-600 font-2 color-white lh-2 titulo"><strong> TECNOLOGIA EDUCACIONAL</strong></h1>
							<p class="lead mt-4" style="color: #6ba13e; font-weight: bold;">Cursos Online, atividades e conteúdos complementares. Seja um executivo FP. </p>
							<p class="lead mt-4 text-white text-center">Construa o Futuro da Educação</p>
							<p id="mensagemLead" class="text-center text-white"></p>
							
							<form method="POST">
								<input type="text" name="nome"  class="form-control border_btn" placeholder="Nome" required=""><br>
								<input type="text" name="email" class="form-control border_btn" placeholder="Email" required="">
								<br>
								<input type="text" name="telefone" class="form-control border_btn telefone" placeholder="Telefone" required="">
								<br>
								<div class="styled-select">
									<select name="uf" class="form-control border_btn col-md-4" style="float: left;">
										<option>UF</option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</div>
								<div class="mobile"></div>
								<input type="text" name="cidade" class="form-control col-md-7 border_btn" placeholder="Cidade" style="float: right;" required="">
								<button class="btn btn-danger btn-capsule mt-2 mt-sm-4 mr-4 col-md-6 enviar" style="margin-left: 25%;" type="submit">Enviar</button>
							</form>
							<br>
							<p class="text-white text-center">Entraremos em contato em até 24h</p>
						</div>
					</div>
				</div>
			</section>
			<section id="fazemos" style="padding: 0!important;">
				<div class="">
					<div class="row align-items-center" style="margin:0px;">
						<div class="col-md-6" style="background-image:url({{asset('assets/images/bg.jpg')}}); background-size: cover; height: 100%; width: 100%;">
							<div class="col order-md-2 fazemos" style="padding: 120px;">
								<h2 class="mb-3 text-white"><strong> O que fazemos:</strong></h2>
								<p class="lead text-white">Somos uma <strong> EDTECH </strong> de aprendizagem online. Em nossa plataforma gerenciamos cursos EAD, atividades e conteúdos complementares. </p>
						</div>
					</div>
					<div class="col-md-6">
							<div class="row">
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/faturamento.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Royalties</strong></h4>
								</div>
								<div class="col-sm col-md-12 col-lg text-center">
									<img src="{{asset('assets/images/icons/faturamento-medio.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Complemente <br> sua renda </strong></h4>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/calendario.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Liberdade de <br> horário</strong></h4>
								</div>
								<div class="col-sm col-md-12 col-lg text-center">
									<img src="{{asset('assets/images/icons/money.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Plano de venda e <br> marketing consistente <br></strong></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section  style="padding: 0!important;">
				<div class="">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="row">
			
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/investir.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Premiações e <br> Bônus  agressivos </strong></h4>
								</div>
								<div class="col-sm col-md-12 col-lg text-center">
									<img src="{{asset('assets/images/icons/mapa.png')}}" width="100"  data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Maior escola em ensino <br>
digital do Brasil</strong></h4>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/peca.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Isenção da taxa <br>
de Marketing</strong></h4>
								</div>
								<div class="col-sm col-md-12 col-lg text-center">
									<img src="{{asset('assets/images/icons/user.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong> Seja dono do <br> seu próprio negócio  </strong></h4>
								</div>
							</div>
						</div>
					<div class="col-md-6" style="background-image:url({{asset('assets/images/bg2.jpg')}}); background-size: cover; height: 100%; width: 100%;">
							<div class="col order-md-2 negocio" style="padding: 120px;">
								<h2 class="mb-3 text-white"><strong> O Negócio: </strong></h2>
								<p class="lead text-white">Um modelo de negócio de educação inovadora, rentável  e de alto impacto social. Nós levaremos, através de você, a oportunidade de qualquer pessoa estudar Tecnologia e línguas.</p>
								<br>
								<a href="https://wa.me/5519994567998" target="_blank" class="btn-what btn-negocio text-white"><img src="{{asset('assets/images/icons/what.png')}}" width="30"> <strong> Fale com a gente agora!</strong></a>
							</div>
					</div>
			</div>
		</section>
		<section style="padding: 0!important;">
				<div class="">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="">
								<iframe style="width: 760px; height: 520px;" src="https://www.youtube.com/embed/0qnmmfoJrdA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="video"></iframe>
						</div>
					</div>
					<div class="col-md-6">
							<div class="row">
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/formado.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong> Universidade <br> Corporativa </strong></h4>
								</div>
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/localizacao.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Escritório <br> Virtual </strong></h6>
								</div>
							</div>
							<div class="row pt-4">
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/consultor.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong> Consultoria
<br> Personalizada </strong></h4>
								</div>
								<div class="col-sm col-md-6 col-lg text-center">
									<img src="{{asset('assets/images/icons/rei.png')}}" width="100" data-toggle="tooltip" data-placement="top" title="" data-html="true">
									<h4 class="text-danger text-center"><strong>Suporte em
 <br> Marketing on e offline </strong></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<section  style="padding: 0!important;" id="ebook">
				<div class="">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="col">
								<img src="{{asset('assets/images/bg3.png')}}">
							</div>
					</div>
						<div class="col-md-6" style="background-color: red;">
							<div class="container" style="margin: 0!important;">
										<div class="row justify-content-center py-4">
											<div class="col-md-12 col-lg-12">
												<h3 class="mb-4 font-2 fw-600 text-center text-white"> Baixe o ebook: <strong> 07 passos para o
 sucesso na gestão de um centro
autorizado Futuro no Presente! </strong></h3>
											<p id="mensagemEbook" class="text-center text-white"></p> 
												<form method="POST">
													<div class="py-4 px-3 px-lg-5 radius-secondary border-2x border border-color-10" style="background-color: #fff;">
														
								<input type="text" name="nome_ebook"  class="form-control border_btn" placeholder="Nome" required=""><br>
								<input type="text" name="email_ebook" class="form-control border_btn" placeholder="Email" required="">
								<br>
								<input type="text" name="telefone_ebook" class="form-control border_btn telefone" placeholder="Telefone" required="">
								<br>
								<div class="styled-select">
									<select name="uf_ebook" class="form-control border_btn col-md-4" style="float: left;">
										<option>UF</option>
										<option value="AC">Acre</option>
										<option value="AL">Alagoas</option>
										<option value="AP">Amapá</option>
										<option value="AM">Amazonas</option>
										<option value="BA">Bahia</option>
										<option value="CE">Ceará</option>
										<option value="DF">Distrito Federal</option>
										<option value="ES">Espírito Santo</option>
										<option value="GO">Goiás</option>
										<option value="MA">Maranhão</option>
										<option value="MT">Mato Grosso</option>
										<option value="MS">Mato Grosso do Sul</option>
										<option value="MG">Minas Gerais</option>
										<option value="PA">Pará</option>
										<option value="PB">Paraíba</option>
										<option value="PR">Paraná</option>
										<option value="PE">Pernambuco</option>
										<option value="PI">Piauí</option>
										<option value="RJ">Rio de Janeiro</option>
										<option value="RN">Rio Grande do Norte</option>
										<option value="RS">Rio Grande do Sul</option>
										<option value="RO">Rondônia</option>
										<option value="RR">Roraima</option>
										<option value="SC">Santa Catarina</option>
										<option value="SP">São Paulo</option>
										<option value="SE">Sergipe</option>
										<option value="TO">Tocantins</option>
									</select>
								</div>
								<div class="mobile"></div>
								<input type="text" name="cidade_ebook" class="form-control col-md-7 border_btn" placeholder="Cidade" style="float: right;" required="">
								<input class="btn btn-danger enviar btn-capsule mt-2 mt-sm-4 mr-4 col-md-6" style="margin-left: 25%;" type="submit" value="Enviar">
							</form>
												</div>
					
										</div>
									</section>
                                </main>
@endsection