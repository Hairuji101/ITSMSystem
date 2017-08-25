@extends('adminlte::layouts.app')

@section('contentheader_title')
	Dashboard
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Dashboard
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-aqua"><i class="fa fa-key" aria-hidden="true"></i></span>

	            <div class="info-box-content">
		              <span class="info-box-text"></span>
		              <span class="info-box-number">6</span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	        <div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-red"><i class="fa fa-key" aria-hidden="true"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text"></span>
	              <span class="info-box-number">1</span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->
	        <!-- fix for small devices only -->
	        <div class="clearfix visible-sm-block"></div>

	        <div class="col-md-3 col-sm-6 col-xs-12">
	          <div class="info-box">
	            <span class="info-box-icon bg-green"><i class="fa fa-key" aria-hidden="true"></i></span>

	            <div class="info-box-content">
	              <span class="info-box-text"></span>
	              <span class="info-box-number">1</span>
	            </div>
	            <!-- /.info-box-content -->
	          </div>
	          <!-- /.info-box -->
	        </div>
	        <!-- /.col -->

		</div>
	</div>
@endsection
