@extends(layoutExtend())
 @section('title')
    {{ trans('user.user') }} {{  isset($item) ? trans('curd.edit')  : trans('curd.add') }}
@endsection
 @section('style')
     <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ url('/admin/plugins/multi-select/css/multi-select.css') }}">
 @endsection
 @section('content')
    @component(layoutForm() , ['title' => trans('user.user')  , 'model' => 'user' , 'action' => isset($item) ? trans('curd.edit') : trans('curd.add') ])
    @include(layoutMessage())
        <form action="{{ concatenateLangToUrl('admin/user/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
           
            <div class="form-group {{  $errors->has("name")   ? "has-error" : "" }}">
                <div class="form-line">
                    <input type="text" name="name" id="name" placeholder="{{ trans('user.name') }}" class="form-control" value="{{ isset($item) ? $item->name : old('name') }}"/>
                    @if ($errors->has("name"))
                        <div class="alert alert-danger">
                        <span class='help-block'>
                            <strong>{{ $errors->first("name") }}</strong>
                        </span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group {{  $errors->has("email")   ? "has-error" : "" }}">
                <div class="form-line">
                     <input type="email" name="email" id="email" {{ isset($item) ? '' : 'required' }} placeholder="{{ trans('user.email') }}"  class="form-control" value="{{ isset($item) ? $item->email : old('email')  }}"/>
                    @if ($errors->has("email"))
                        <div class="alert alert-danger">
                        <span class='help-block'>
                            <strong>{{ $errors->first("email") }}</strong>
                        </span>
                        </div>
                    @endif
                 </div>
            </div>
            <div class="form-group {{  $errors->has("password")   ? "has-error" : "" }}">
                <div class="form-line">
                    <input type="password" name="password" id="password" placeholder="{{ trans('user.password') }}"    class="form-control"/>
                    @if ($errors->has("password"))
                        <div class="alert alert-danger">
                        <span class='help-block'>
                            <strong>{{ $errors->first("password") }}</strong>
                        </span>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group">
				<div class="form-line">
					<label for="">{{ adminTrans('section' , 'image') }}</label>
					@if(isset($item) && $item->image != '')
                    <div class="row">
                    <div class="file-preview-frame krajee-default  kv-preview-thumb"   data-fileindex="0" data-template="image">
                        <div class="kv-file-content">
                            <img class="img-responsive" style="height: 150px;" alt="" src="{{ url('/'.env('UPLOAD_PATH').'/users/'.$item->id.'/'.$item->image) }}" />
                        </div>                                   

                                <div class="clearfix"></div>
                    </div>
                    </div>

                        
					@endif    
					{!! csrf_field() !!}
					<div class="form-group">
						<div class="file-loading">
							{!! Form::file('image', array('multiple'=>false,'accept'=>'image/*','class'=>'file','data-overwrite-initial'=>'false','data-min-file-count'=>'1','data-max-file-count'=>'1','id'=>'file-1'))  !!}                                      
						</div>
					</div>
				</div>
			</div> 
			@if ($errors->has("image"))
				<div class="alert alert-danger">
					<span class='help-block'>
						<strong>{{ $errors->first("image") }}</strong>
					</span>
				</div>
			@endif 
            @section('content')
            @php
                $p = permissionArray();
            @endphp
    @if(array_intersect(['0'=>'App\Application\Controllers\Admin\GroupController'] ,$p))            
            
            <div class="form-group {{  $errors->has("group_id")   ? "has-error" : "" }}">
                <div class="">
                    @php $gourp = isset($item) && $item->group_id != 0 ? $item->group_id : null @endphp
                    <label for="">{{ trans('user.group') }} </label>
                    {!! Form::select('group_id' , $data['groups'] , $gourp , ['class' => 'form-control'] ) !!}
                    @if ($errors->has("group_id"))
                        <div class="alert alert-danger">
                        <span class='help-block'>
                            <strong>{{ $errors->first("group_id") }}</strong>
                        </span>
                        </div>
                    @endif
                </div>
            </div>
            @endif

    @if(array_intersect(['0'=>'App\Application\Controllers\Admin\RoleController'] ,$p))            

             <div class="form-group">
                <div class="">
                    <label for="">{{ trans('user.role') }}</label>
                    @php $roles = isset($data['roles_permission']) ? $data['roles_permission']->role->pluck('id')->all() : null @endphp
                    {!! Form::select('roles[]' , $data['roles'] , $roles, ['multiple' => true  , 'id' => 'roles' ] ) !!}
                </div>
            </div>
            @endif

    @if(array_intersect(['0'=>'App\Application\Controllers\Admin\PermissionController'] ,$p))            

             <div class="form-group">
                <div class="">
                    <label for="">{{ trans('user.permission') }}</label>
                    @php $permission = isset($data['roles_permission']) ? $data['roles_permission']->permission->pluck('id')->all()  : null @endphp
                    {!! Form::select('permission[]' , $data['permissions'] , $permission , ['multiple' => true , 'id' => 'permissions' ] ) !!}
                </div>
            </div>
            @endif

             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="material-icons">check_circle</i>
                    {{ trans('home.save') }} {{ trans('user.user') }}
                </button>
            </div>
        </form>
    @endcomponent
@endsection
    @section('script')
    @include('admin.shared.script_uploads')
    <script src="{{ url('/admin/plugins/multi-select/js/jquery.multi-select.js') }}"></script>
    <script src="{{ url('/admin/js/search.js') }}"></script>
    <script>
        $('#roles').multiSelect(search("{{ trans('user.role') }}"));
        $('#permissions').multiSelect(search("{{ trans('user.permission') }}"));
        function search(name){
            return {
                selectableHeader: "<input type='text' class='form-control' autocomplete='off'  placeholder='"+name+"'>",
                selectionHeader: "<input type='text' class='form-control' autocomplete='off' placeholder='"+name+"'>",
                afterInit: function(ms){
                    var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#'+that.$container.attr('id')+' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#'+that.$container.attr('id')+' .ms-elem-selection.ms-selected';
                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function(e){
                                if (e.which === 40){
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });
                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function(e){
                                if (e.which == 40){
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                },
                afterSelect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function(){
                    this.qs1.cache();
                    this.qs2.cache();
                }
            }
        }
    </script>

	 
@endsection