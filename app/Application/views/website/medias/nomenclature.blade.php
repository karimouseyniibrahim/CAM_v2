@extends(layoutExtend('website'))

@section('title')
     {{ trans('medias.medias') }} {{ trans('home.control') }}
@endsection

@section('content')

	   
<!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div class="view view-cascade gradient-card-header blue-gradient  py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

	<h2 class="h1-responsive font-weight-bold text-center"> {{trans('medias.nomenclature')}}</h2>    
  </div>
  <!--/Card image-->

  <div class="px-12">

    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
          <tr>
            <th class="th-lg col-md-8">
              {{trans("medias.name")}}
            </th>
            
            <th class="th-lg col-md-4">
              {{trans("medias.action")}}
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
		
		@if (count($items) > 0) 
			@foreach ($items as $d) 
				@php $count =  1 @endphp
				@foreach ($d->filesmedia as $f) 

				<tr>
					<td class="col-md-8"><strong class="font-weight-bold"> {{$d->name_lang}} : {{trans('medias.element') }} {{$count}}</strong> {!!str_limit($d->description_lang,70)!!}</td>
					<td class="col-md-4 form-group">
						<button type="button" class="btn btn-outline-primary btn-rounded btn-sm px-3">
							<i class="fas fa-eye ml-1"></i>
						</button>
						
						<a  href="{{$f->url}}" target="_blank" class="btn btn-outline-primary btn-sm m-0 waves-effect btn-rounded px-3" download>
							<i class="fa fa-download"></i>
						</a>
					</td>				
				</tr>
				@php $count = $count+ 1 @endphp
				@endforeach
			@endforeach
		@else
			<tr>
				<td class="text-center">
				<h2 class="card-header-title mb-3 font-weight-bold">{{ trans('medias.empty-nomenclature') }}</h2>
				</td>
			</tr>
		@endif		
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->

	@include(layoutPaginate() , ["items" => $items])
		
</div>
@endsection
