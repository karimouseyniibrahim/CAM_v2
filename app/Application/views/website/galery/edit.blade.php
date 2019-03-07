@extends(layoutExtend('website'))

@section('title')
    {{ trans('galery.galery') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
         @include(layoutMessage('website'))
         <a href="{{ url('galery') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
        <form action="{{ concatenateLangToUrl('galery/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
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
		 <div class="form-group  {{  $errors->has("description.en")  &&  $errors->has("description.ar")  ? "has-error" : "" }}" >
			<label for="description">{{ trans("galery.description")}}</label>
				<input type="text" name="description" class="form-control" id="description" value="{{ isset($item->description) ? $item->description : old("description") }}"  placeholder="{{ trans("galery.description")}}">
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
		 <div class="form-group {{ $errors->has("images") ? "has-error" : "" }}" > 
			<label for="images">{{ trans("galery.images")}}</label>
				<input type="text" name="images" class="form-control" id="images" value="{{ isset($item->images) ? $item->images : old("images") }}"  placeholder="{{ trans("galery.images")}}">
		</div>
			@if ($errors->has("images"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("images") }}</strong>
					</span>
				</div>
			@endif

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="fa fa-save"></i>
                    {{ trans('website.Update') }}  {{ trans('website.galery') }}
                </button>
            </div>
        </form>
</div>
@endsection
