@extends(layoutExtend())

@section('title')
    {{ trans('galery.galery') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('style')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
	{{ Html::style('css/mediastable.css') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('galery.galery') , 'model' => 'galery' , 'action' => isset($item) ? trans('home.edit')  : trans('home.add')  ])
         @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/galery/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

 		 <div class="form-group  {{  $errors->has("name.en")  &&  $errors->has("name.ar")  ? "has-error" : "" }}" >
			<label for="name">{{ trans("galery.name")}}</label>
				{!! extractFiled(isset($item) ? $item : null , "name", isset($item->name) ? $item->name : old("name") , "text" , "galery") !!}
		</div>
			@if ($errors->has("name.en"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("name.en") }}</strong>
					</span>
				</div>
			@endif
			@if ($errors->has("name.ar"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("name.ar") }}</strong>
					</span>
				</div>
			@endif

			<div class="form-group ">
				<label for="">{{trans("galery.type")}}</label> 
				<select class="form-control" id="type" name="type">
					<option value="1">{{trans("galery.galery")}}</option>
					<option value="2">{{trans("galery.nomenclature")}}</option>
				</select>
			</div>


			<div class="form-group {{  $errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : "" }}">
				<label for="description">{{ trans("formation.description")}}</label>
				{!! extractFiled(isset($item) ? $item : null , "description", isset($item->description) ? $item->description : old("description") , "textarea" , "formation", "tinymce") !!}
			</div>
			@if ($errors->has("description.en"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("description.en") }}</strong>
					</span>
				</div>
			@endif
			@if ($errors->has("description.ar"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("description.ar") }}</strong>
					</span>
				</div>
			@endif
			<div class="form-group">
				<div class="form-line">
					<label for="">{{ adminTrans('galery' , 'images') }}</label>
					@if(isset($item) && $item->images != '')
						<img src="{{ url('/'.env('UPLOAD_PATH').'/'.$item->images) }}" class="img-responsive thumbnail" alt="">
						<br>
					@endif    
					{!! csrf_field() !!}
					<div class="form-group">
						<div class="file-loading">
							{!! Form::file('images[]', array('multiple'=>true,'accept'=>'image/*','class'=>'file','data-overwrite-initial'=>'false','data-min-file-count'=>'1','data-max-file-count'=>'500','id'=>'file-1'))  !!}                                      
						</div>
					</div>
				</div>
			</div>            

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ trans('home.save') }}  {{ trans('galery.galery') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
@section('script')
	@include(layoutPath('layout.helpers.tynic'))
	{{ Html::script('/admin/plugins/momentjs/moment.js') }}
	@include('admin.shared.script_uploads')
	<script src="{{ url('js/mediastable.js') }}" ></script>
	
@endsection