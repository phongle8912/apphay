@extends('backend')
@section('title', 'App')
@section('breadcrumb', '<li><a href="/admin/dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li><li class="active">App</li>')
@section('content')
<div class="row">
  <div class="col-sm-12">
    <div class="box">

      <div class="box-body">
        
        <div class="table-responsive">
          
          @if(isset($message))
          <div class="col-md-12">
            <span class="label label-warning">{{$message}}</span>
          </div>
          @endif
        
          {!! Form::open(array('url' => URL('backend/app/update/'.$app->id), 'method' => 'POST', 'role' => 'form', 'files'=>true)) !!}
          <fieldset class="form-group">
           <?php echo Form::label('name', 'Name', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            <?php echo Form::text('name', old('name', $app->name), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('name')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('slug', 'Slug', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            <?php echo Form::text('slug', old('Slug', $app->slug), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('slug')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('keywords', 'Keywords', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            <?php echo Form::text('keywords', old('Keywords', $app->keywords), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('keywords')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('meta_desc', 'Meta Description', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            <?php echo Form::text('meta_desc', old('Meta Description', $app->meta_desc), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('meta_desc')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('short_description', 'Short Description', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            <?php echo Form::text('short_description', old('Short Description', $app->short_description), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('short_description')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('description', 'Description', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
            {{Form::textarea('description', old('description', $app->description), array('class'=>'form-control input-lg'))}}
              <span class="label label-danger">{{$errors->first('description')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
           <?php echo Form::label('code', 'HTML Code', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-9">
              {{ Form::textarea('code', old('code', $app->code), array('class' => 'form-control input-lg')) }}
            <span class="label label-danger">{{$errors->first('code')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <?php echo Form::label('status', 'Status', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-4">
            <?php echo Form::select('status', array('active' => 'Active', 'inactive' => 'Inactive'), old('status', $app->status), array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('status')}}</span>
            </div>
          </fieldset>
          <fieldset class="form-group">
            <?php echo Form::label('script', 'Script', array('class' => 'control-label col-sm-3'));?>
            <div class="col-sm-4">
            <?php echo Form::file('script', array('class'=>'form-control input-lg'));?>
              <span class="label label-danger">{{$errors->first('script')}}</span>
              @if(!empty($app->script) && file_exists(public_path('uploads/js/'.$app->script)))
              {{$app->script}}
              @endif 
            </div>
          </fieldset>
          <fieldset class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
              <?php echo Form::submit('Save', array('class' => 'btn btn-success'));?>
            </div>
            
          </fieldset>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>

<script src="<?php echo URL('/vendor/unisharp/laravel-ckeditor/ckeditor.js');?>"></script>
<script>
    CKEDITOR.replace( 'description', {
    //   filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    // filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    // filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    // filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
       filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
       filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
    });
    CKEDITOR.replace( 'code', {
       removePlugins: 'toolbar',
       startupMode: 'source',
       // filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
//        filebrowserBrowseUrl: '/laravel-filemanager?type=Files'
    });
</script>
@endsection
