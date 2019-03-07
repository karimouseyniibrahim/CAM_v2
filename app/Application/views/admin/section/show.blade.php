@extends(layoutExtend())

@section('title')
    {{ trans('section.section') }} {{ trans('home.view') }}
@endsection

@section('content')
    @component(layoutForm() , ['title' => trans('section.section') , 'model' => 'section' , 'action' => trans('home.view')  ])
		 <table class="table table-bordered  table-striped" > 
				<tr>
				<th width="200">{{ trans("section.name") }}</th>
					<td>{{ nl2br($item->name_lang) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("section.description") }}</th>
					<td>{{ nl2br($item->description_lang) }}</td>
				</tr>
				<tr>
				<th width="200">{{ trans("section.image") }}</th>
					<td>
					<img src="{{ small($item->image) }}" width="100" />
					</td>
				</tr>
		</table>

        @include('admin.section.buttons.delete' , ['id' => $item->id])
        @include('admin.section.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
