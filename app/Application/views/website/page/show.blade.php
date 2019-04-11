@extends(layoutExtend('website'))
@section('title')
    {{ trans('page.page') }} {{ trans('home.view') }}
@endsection
@section('content')
    <!-- Section: Page -->
	<section class="text-center">
		<!-- Section heading -->
		<h2 class="h1-responsive font-weight-bold">{{ nl2br($item->title_lang) }}</h2>
    
        {!! getDefaultValueKey(nl2br($item->body))  !!}
    </section>
@endsection
