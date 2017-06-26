@extends('admin.layouts.principal')
@section('title', 'Administrador')
@section('dashboardMenu', 'active')

@section('styles')


@endsection

@section('content')
	<div class="main-body" v-show="!chatview">
		<div class="show-chat">
		</div>
		<div class="row show-chat">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<h4 class="page-title text-center">Gracias por visitar Nuestras Tienda</h4>
				<p class="text-center">Por favor Registrate para poder realizar una compra.</p>
			</div>
		</div>
    	<div class="row">
			<div class="col-sm-12">
				<div class="card-box widget-inline">
					<div class="row">
						<div class="col-lg-3 col-sm-6">
							<div class="widget-inline-box text-center">
								<h3><i class="text-primary fa fa-lightbulb-o"></i> <b>2</b></h3>
								<h4 class="text-muted">Numero De Alertas</h4>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="widget-inline-box text-center">
								<h3><i class="text-custom md md-account-child"></i> <b>3</b></h3>
								<h4 class="text-muted">Agentes Activos</h4>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="widget-inline-box text-center">
								<h3><i class="text-pink fa fa-ambulance"></i> <b>4</b></h3>
								<h4 class="text-muted">Agentes Suspendidos</h4>
							</div>
						</div>

						<div class="col-lg-3 col-sm-6">
							<div class="widget-inline-box text-center b-0">
								<h3><i class="text-purple fa fa-bed"></i> <b>5</b></h3>
								<h4 class="text-muted">Agentes De Descanso</h4>
							</div>
						</div>

					</div>
				</div>
			</div>
    	</div>
	</div>


@endsection

@section('scripts')
	@include('templates.administrator.components.footer')

	{!! Html::script('assets/own/dist/sweetalert.min.js') !!}
	{!! Html::script('assets/plugins/moment/moment.js') !!}
    {!! Html::script('assets/pages/jquery.chat.admin.js') !!}
	{!! Html::script('assets/own/js/vue.js') !!}
	{!! Html::script('assets/own/js/vue-resource.js') !!}
	{!! Html::script('assets/own/js/chat/module_admin.js') !!}

@endsection
