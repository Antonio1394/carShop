@extends('admin.layouts.principal')
@section('title', 'Administrador')
@section('userMenu', 'active')
@section('styles')
    {!! Html::style('assets/own/dist/dataTables.bootstrap.min.css') !!}
    {!! Html::style('assets/own/dist/responsive.bootstrap.min.css') !!}
    {!! Html::style('assets/own/dist/sweetalert.css') !!}
    {!! Html::script('assets/own/js/socket.io.js') !!}
@endsection
@section('content')
        <div class="row">
            <div class="col-lg-12">
    			<div class="panel panel-border panel-custom">
    				<div class="panel-heading">
    					<h3 class="panel-title">Registro de Clientes</h3>
    				</div>
    				<div class="panel-body">

                        <table id="datatable" class="table table-striped table-bordered display responsive no-wrap"  width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nombre Comercial</th>
                                    <th>Tipo Vehiculo</th>
                                    <th>Modelo</th>
                                    <th>Transmision</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($vehiculo as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->nombreCome }}</td>
                                        <td>{{ $value->tipoV->nombre }}</td>
                                        <td>{{ $value->modelo->nombre }}</td>
                                        <td>{{ $value->transmision->nombre }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
    				</div>
    			</div>
    		</div>
        </div>
    </div>
    @include('templates.administrator.components.modal')
@endsection

@section('scripts')
    @include('templates.administrator.components.footer')
    {!! Html::script('assets/plugins/datatables/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/plugins/datatables/dataTables.bootstrap.js') !!}
    {!! Html::script('assets/own/dist/dataTables.responsive.min.js') !!}
    {!! Html::script('assets/own/dist/responsive.bootstrap.min.js') !!}
    {!! Html::script('assets/plugins/parsleyjs/dist/parsley.min.js') !!}
    {!! Html::script('assets/own/dist/sweetalert.min.js') !!}
    {!! Html::script('assets/plugins/moment/moment.js') !!}
    {!! Html::script('assets/pages/jquery.chat.admin.js') !!}
    {!! Html::script('assets/own/js/vue.js') !!}
    {!! Html::script('assets/own/js/vue-resource.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable( {
                language: {
                    url: '/assets/own/json/spanish.json'
                }
            } );
        } );
    </script>
@endsection
