@extends(layoutExtend())

@section('title')
    {{ trans('galery.galery') }} {{ trans('home.view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('galery.galery') , 'model' => 'galery' , 'action' => trans('home.view')  ])
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

        @include('admin.galery.buttons.delete' , ['id' => $item->id])
        @include('admin.galery.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
