<!DOCTYPE html>
<html>
<head>
<title>Ingreso de Clientes</title>
{!! Html::style('cliente/css/style.css') !!}
{!! Html::script('cliente/js/jquery-2.1.4.min.js') !!}
</head>
<body>
	 <div data-vide-bg="/cliente/videos/typing">
	 <div class="w3-agile-signup-top">
	 <h1>Registro de Clientes</h1>
		<div class="main">
                <div class="login-top left">
			    <div class="social_icons">

					</div>
								<form action="#" method="post">
              {!! Form::open(['route' => 'store', 'method' => 'POST']) !!}
                  {!! Form::text('nombre', null, ['class' => 'name', 'required' => '', 'placeholder' => 'Nombres']) !!}
                  {!! Form::text('apellido', null, ['class' => 'name', 'required' => '', 'placeholder' => 'Apellidos']) !!}
                  {!! Form::text('direccion', null, ['class' => 'name', 'required' => '', 'placeholder' => 'Dirección']) !!}
                  {!! Form::text('NIT', null, ['class' => 'name', 'required' => '', 'placeholder' => 'NIT']) !!}
                  <hr>
                  <br>
                  {!! Form::select('EstadoCivil', config('EstadoCivil'), null, ['class' => 'name','required' => '']) !!}
									<input type="text" name="name" class="name" placeholder="Last Name" required="">
									<input type="text" name="email" class="email" placeholder="Your Email" required="">
									<input type="password" name="password" class="password" placeholder="Password" required="">
									<input type="password" name="password" class="password" placeholder="Confirm Password" required="">
									<input type="submit" value="Enviar">
							{!! Form::close() !!}
								<div class="w3-bottom-text">
								</div>
								<div class="clear"></div>
						</div>


		</div>
	<div class="clear"></div>
     <div class="copy-right w3l-agile">
		<p> © 2017. All Rights Reserved | Design by <a href="github/antonio1394">Antonio Rivera Merida</a></p>
	</div>
	<div class="clear"></div>
</div>
</div>

    {!! Html::script('cliente/js/jquery.vide.min.js') !!}


</body>
</html>
