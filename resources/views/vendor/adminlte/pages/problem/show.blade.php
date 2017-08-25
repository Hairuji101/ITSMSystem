@extends('adminlte::layouts.app')

@section('contentheader_title')
	Show Problem
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Show Problem 
@endsection

@section('main-content')
 <!--Form Start-->

<div class="container-fluid spark-screen">

<section class="content">
<!--Edit Button-->

{!! Html::linkRoute('problems.edit', 'Edit Record', array($problem->id), array('class' => 'btn btn-success btn-m pull-right-containerl form-spacing-bottom' )) !!}

 <!--Delete Button-->
 <button href='#delete' data-toggle="modal" data-target="#delete5" class="btn btn-danger btn-m pull-right-containerl form-spacing-bottom"><i class="glyphicon glyphicon-trash"></i> Delete</button>

<!--Cancel Button-->
<a href='{{ route('problems.index') }}'><button class="btn btn-primary btn-m pull-right "><span class="glyphicon glyphicon-remove"></span> Close</button></a>  


<br>
<!--///////////////////////////////////////////-->
<div class="box box-primary">
    <div class="box-header">
        <h2 class="box-title">
            Subject: {{ $problem -> subject }}  
        </h2>
        <div class="pull-right">
            <!-- <button type="button" class="btn btn-default"><i class="fa fa-edit" style="color:green;"> </i> Edit</button> -->

            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-spinner fa-spin" style="color:teal; display:none;" id="spin"></i>
                    Update <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                    <li><a href="#rootcause"  data-toggle="modal" data-target="#rootcause5">Root Cause</a></li>
                    <li><a href="#impact"  data-toggle="modal" data-target="#impact5">Impact</a></li>
                    <li><a href="#symptoms" data-toggle="modal" data-target="#symptoms5">Symptoms</a></li>
                    <li><a href="#solution" data-toggle="modal" data-target="#solution5">Solution</a></li>
                </ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" ><i class="fa fa-spinner fa-spin" style="color:teal; display:none;" id="spin"></i>
                    Change <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                     
                    <li><a href="#change-detach"  data-toggle="modal" data-target="#change-detach5">Deatach test3</a></li>
                                    </ul>
            </div>


       </div>
    </div>
    <!-- ticket details Table -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-12">

      @include('adminlte::layouts.partials._modalPr')               

            </div>
        </div>

        <div class="row">
            <section class="content">
                <div class="col-md-12">
                    <div class="callout" style="  background-color: #3c8dbc; color: #fff; border-color: :#3c8dbc">
                        <div class="row">

                            <div class="col-md-3">
                                <b>Created Date: </b> 
                                {{ date('d F, Y', strtotime($problem -> created_at)) }}
                            </div>
                            <div class="col-md-3">
                                <b>Status: </b>
                                  @if ($problem -> status == 'New')
                                  <span class="label label-primary">New</span>
                              @elseif ($problem -> status == 'Closed')
                                  <span class="label label-default" style="background-color: #000; color: #fff;">Closed</span>
                              @elseif ($problem -> status == 'Duplicated')
                                  <span class="label label-default">Duplicated</span>
                              @elseif ($problem -> status == 'In Progress')
                                  <span class="label label-warning">In Progress</span>
                              @elseif ($problem -> status == 'Postponed')
                                  <span class="label label-danger">Postponed</span>
                              @elseif ($problem -> status == 'Resolved')
                                  <span class="label label-success">Resolved</span>
                              @elseif ($problem -> status == 'Undefined')
                                  <span class="label label-default">Undefined</span>
                              @endif 
                            </div>
                            <div class="col-md-3">
                                <b>Requester: </b> 
                                {{ $problem -> requester }} 
                            </div>
                            <div class="col-md-3">
                                <b>Assigned:</b> 
                                {{ $problem -> assignee }} 
                            </div>
                        </div>
                    </div>
                </div>

                <div id="hide2">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tbody>

                                <tr>
                                    <td class="col-md-1"><b>Description:</b></td>   
                                    <td class="col-md-10">{{ $problem -> description }}</td>
                                </tr>
                                <tr>
                                    <td><b>Problem Type:</b></td> 
                                    <td>{{ $problem -> type }}</td>
                                </tr>

                                <tr>
                                    <td><b>Resolution Date:</b></td>
                                    <td>{{ date('d F, Y', strtotime($problem -> resolutionDate)) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>

  <div class="row">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Tickets</a></li>

            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    <div class="box box-primary">
<!--                        <div class="box-header">
                            <h3 class="box-title">Condensed Full Width Table</h3>
                        </div>-->
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table class="table table-condensed">
                                <tr>
                                    <th>#</th>
                                    <th>Ticket Number</th>
                                    <th>Subject</th>
                                    <th>Action</th>
                                </tr>
                               
                                                                                                <tr>
                                    <td>1</td>
                                    <td>AAEH-0111-0000111</td>
                                    <td>Re: Autheticated Use...</td>
                                    <td><a href="http://www.faveohelpdesk.com/demo/servicedesk/public/thread/113" class="btn btn-info">View</a></td>
                                </tr>
                                                                                               
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
<!--///////////////////////////////////////////////////////-->

<div class="col-md-12">
<!-- The time line -->
<ul class="timeline">
      

<!--root-cause-->
@if (!empty($problem -> rootCause))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Root Cause 
    </span> 
</li>
<li>
  <i class="fa fa-ambulance bg-purple" title="Root Cause"></i>
  <div class="timeline-item">
      <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deleteroot-cause5"> </a>
                  &nbsp;
                  <a href="#delete" data-toggle="modal" data-target="#rootcause5"><i class="fa fa-pencil"></i></a>
              </div>
          </div>
      </div>
      <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
          {{ strip_tags($problem -> rootCause) }}
      </div>
      
  </div>
</li>
@endif


<!--impact-->
@if (!empty($problem -> impact))
  <li class="time-label">
      <p> &nbsp; </p>
      <span class="bg-green">
          Impact
      </span>     
  </li>

  <li>
    <i class="fa fa-anchor bg-purple" title="Impact"></i>
      <div class="timeline-item">
        <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deleteimpact5"> </a>
                  &nbsp;<a href="#delete" data-toggle="modal" data-target="#impact5"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
        </div>
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            {{ strip_tags($problem -> impact) }}
        </div>
    </div>
  </li>
@endif

<!--symptoms-->
@if (!empty($problem -> symptoms))
  <li class="time-label">
      <p> &nbsp; </p>
      <span class="bg-green">
          Symptoms
      </span>     
  </li>

  <li>
    <i class="fa fa-battery-0 bg-purple" title="Symptoms"></i>
      <div class="timeline-item">
        <div class="timeline-header">
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deletesymptoms5"> </a>
                  &nbsp;<a href="#delete" data-toggle="modal" data-target="#symptoms5"><i class="fa fa-pencil"></i></a>
              </div>
            </div>
        </div>
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            {{ strip_tags($problem -> symptoms) }}
        </div>
    </div>
  </li>
@endif

<!--solution-->                               
@if (!empty($problem -> solutionTitle))
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Solution
    </span>     
</li>

<li>
<i class="fa fa-thumbs-up bg-purple" title="Solution"></i>
  <div class="timeline-item">
      <!--<span  class="time" style="color:#fff;"><i class="fa fa-clock-o"> </i> 25.05.2016 11:01:01</span>-->
      <div class="timeline-header">
          <h3>{{ strip_tags($problem -> solutionTitle) }}</h3>
            <div class="row">
              <div class="col-md-offset-11">
                  <a href="#delete" class="fa fa-remove" data-toggle="modal" data-target="#deletesolution5"> </a>
                  &nbsp;<a href="#delete" data-toggle="modal" data-target="#solution5"><i class="fa fa-pencil"></i></a>
              </div>
          </div>
      </div>
      <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
          {{ strip_tags($problem -> solution) }}
      </div>
  </div>
</li>
@endif


<!--Change-->
{{--@if (!empty($problem -> changeId))--}}
<li class="time-label">
    <p> &nbsp; </p>
    <span class="bg-green">
        Change
    </span>     
</li>
<li>
    <i class="fa fa-refresh bg-purple" title="change"></i>
    <div class="timeline-item">
        <!--<span  class="time" style="color:#fff;"><i class="fa fa-clock-o"> </i> 25.05.2016 11:01:01</span>-->
        <div class="timeline-body" style="padding-left:30px;margin-bottom:-20px">
            <a href="#">Change Link</a>
        </div>
        <br><br>
    </div>
</li>
{{--@endif--}}


</ul>
</div>




<!---->
</section></div>






@endsection
