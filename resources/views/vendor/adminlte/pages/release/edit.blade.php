@extends('adminlte::layouts.app')

@section('contentheader_title')
	Edit Release
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Edit Release
@endsection

@section('main-content')
 <!--Form Start-->
{!! Form::model($release,['route'=> [ 'releases.update', $release->id], 'method' =>'PUT'] ) !!}
{{ csrf_field() }}


	<div class="container-fluid spark-screen">
    <section class="content-header">     
        <!--Save Changes Button-->
       <button type="submit" class="btn btn-success btn-m pull-right-containerl"><i class="glyphicon glyphicon-save"></i> Save Changes</button>

       <!--Cancel Button-->
       <a class="btn btn-danger btn-m pull-right-container" href="{{  URL::previous()  }}"><span class='glyphicon glyphicon-remove'></span> Cancel</a>
    </section>

  <section class="content">
    <div class="row-md-7">   
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Information Form</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>
        
        <div class="box-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <!-- Subject -->
                  {{ Form::label('subject', 'Subject:', array('class' => 'required'))}}              
                  {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' =>'Subject','required' => ''))}}  
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-group">
                  <!-- Plan Start Date -->
                  {{ Form::label('planStartDate', 'Planned Start Date:')}}        
                  {{ Form::text('planStartDate', null, array('class' => 'form-control', 'placeholder' =>'--Select Date--','id' =>'datepicker'))}}  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
              </div>
              <div class="col-lg-6">
                <!-- Plan End Date -->
                  {{ Form::label('planEndDate', 'Planned End Date:')}}        
                  {{ Form::text('planEndDate', null, array('class' => 'form-control', 'placeholder' =>'--Select Date--','id' =>'datepicker'))}}
              </div>
            </div>
          &nbsp;

          <div class="row">
              <div class="col-lg-4">
              <div class="form-group">
                {{ Form::label('status', 'Status:', array('class' => 'required'))}}              
                {{ Form::select('status', 
                    ['Planning' => 'Planning', 
                     'Testing' => 'Testing',
                     'Development' => 'Development',
                     'Deployment' => 'Deployment',
                     'Released' => 'Released'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--','required' => ''))}}
              </div>
              </div>
              <div class="col-lg-4">
              <div class="form-group">
                <!-- Plan End Date -->
                  {{ Form::label('priority', 'Priority:', array('class' => 'required'))}}              
                  {{ Form::select('priority', 
                    ['Low' => 'Low', 
                     'Medium' => 'Medium',
                     'High' => 'High'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--', 'style' => 'width: 100%','required' => ''))}}

              </div>
              </div>
              <div class="col-lg-4">
              <div class="form-group">
                {{ Form::label('type', 'Release Type:', array('class' => 'required'))}}              
                {{ Form::select('type', 
                    ['Non-Standard' => 'Non-Standard',
                     'Standard' => 'Standard',
                     'Minor' => 'Minor',
                     'Major' => 'Major', 
                     'Emergency' => 'Emergency'],null,
                      array('class' =>'form-control', 'placeholder'=>'--Select--', 'style' => 'width: 100%','required' => ''))}}
                </div>
              </div>
            </div>
          &nbsp;

          <div class="row">
            <!-- Description -->
            <div class="col-lg-12">
            <div class="form-group"> 
                {{ Form::label('description', 'Description:')}}                        
                {{ Form::textarea('description', null, array('class' => 'form-control', 'placeholder' =>'Description' ))}}
            </div>  
          </div>
          </div>
          &nbsp;
          <!-- /.row -->
           &nbsp;
        </div><!-- end box-body-->  
      </div><!-- end box-info-->
    </div><!-- end row-md-7-->
  </section>
</div>

{!!Form::close()!!}

<script>
  $('#form').parsley();
</script>

@endsection
