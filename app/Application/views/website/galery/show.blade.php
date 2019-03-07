@extends(layoutExtend('website'))

@section('title')
    {{ trans('galery.galery') }} {{ trans('home.view') }}
@endsection

@section('content')
<div class="pull-{{ getDirection() }} col-lg-9">
        <a href="{{ url('galery') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200">{{ trans("galery.name") }}</th>
					<td>{{ nl2br($item->name_lang) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("galery.description") }}</th>
					<td>{{ nl2br($item->description_lang) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("galery.images") }}</th>
					<td>{{ nl2br($item->images) }}</td>
				</tr>
		</table>

        @include('website.galery.buttons.delete' , ['id' => $item->id])
        @include('website.galery.buttons.edit' , ['id' => $item->id])
</div>
@endsection
