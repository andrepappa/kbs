@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rws') }}">Rw</a> :
@endsection
@section("contentheader_description", $rw->$view_col)
@section("section", "Rws")
@section("section_url", url(config('laraadmin.adminRoute') . '/rws'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rws Edit : ".$rw->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($rw, ['route' => [config('laraadmin.adminRoute') . '.rws.update', $rw->id ], 'method'=>'PUT', 'id' => 'rw-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'rw')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rws') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#rw-edit-form").validate({
		
	});
});
</script>
@endpush
