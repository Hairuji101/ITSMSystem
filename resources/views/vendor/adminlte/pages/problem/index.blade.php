@extends('adminlte::layouts.app')

@section('contentheader_title')
	Problem Management
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Problem 
@endsection

@section('main-content')
<div class="container-fluid spark-screen">

<!-- Add Problem Button-->
<div class="no-print col-md-9">
  <a href="{{route('problems.create')}}"><button class="btn btn-success pull-left" ><span class="glyphicon glyphicon-plus"></span> New Problem</button></a>
  
</div>
<!--end_button-->
<br>
<br>

  <div class="col-md-12">
    <!-- Primary box -->
    <div class="box box-solid box-primary">
       
     <!-- Box Header-->
     <div class="box-header">
        <h3 class="box-title">Problems</h3>
     </div>

          
    <!-- Body Filter Tool-->
    <div class="box-body no-print"> 
      <div class="box-tools pull-left">
        <div class="btn-group">
          <button type="button" class="btn btn-default btn-sm">Sort By</button> 
          <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
          </button>
         
          <ul class="dropdown-menu" role="menu">
              <li class=""><a href="{{ route('problems.index',['status' => request('status'), 'sort_id' => 'asc']) }}">#ID- ascending</a></li>
              <li class=""><a href="{{ route('problems.index',['status' => request('status'), 'sort_id' => 'desc']) }}">#ID- decending</a></li>
              <li class=""><a href="{{ route('problems.index',['status' => request('status'), 'sort_status' => 'asc']) }}">Status</a></li>
              <li class=""><a href="{{ route('problems.index',['status' => request('status'), 'sort_assignee' => 'asc']) }}">Assignee</a></li>
              <li class=""><a href="{{ route('problems.index',['status' => request('status'), 'sort_date' => 'asc']) }}">Date</a></li>
          </ul>
        </div> &nbsp;
      </div>
      
      <div class="box-tools pull-right">
        <form action="#" method="get" role="form" id="filterform">
            <input type="hidden" name="status" value="">
            <input type="hidden" name="filterbyAssignee" value="">

          
          <b>Filter by :</b>
          <form method="GET">

              <select style="width:200px" class="btn btn-default btn-sm" id="filterStatus" name='status' >
                <option disabled selected>Status</option>
                  <option value="New">New</option>
                  <option value="In progress">In Progress</option>
                  <option value="Closed">Closed</option>
                  <option value="Duplicated">Duplicated</option>
                  <option value="Postponed">Postponed</option>
                  <option value="Resolved">Resolved</option>
                  <option value="Undefined">Undefined</option>
              </select> &nbsp;
              
              <select style="width:200px" class="btn btn-default btn-sm" id="filterAssignee" name="assignee">
                <option value="" selected="selected">Assignee</option>
                <option value="Afiq">Afiq</option>
                <option value="Alex">Alex</option>
                <option value="Emy">Emy</option>
                <option value="Eric">Eric</option>
                <option value="Fatihah">Fatihah</option>
                <option value="Fatin Liyan">Fatin Liyana</option>
                <option value="IT trainee">IT trainee</option>
                <option value="Khairul Faiz Zohan (IT)">Khairul Faiz Zohan (IT)</option>
                <option value="Masturah">Masturah</option>
                <option value="Muamar">Muamar</option>
                <option value="Nancy Ng">Nancy Ng</option>
                <option value="Nazli">Nazli</option>
                <option value="Norhamin">Norhamin</option>
                <option value="Nurhakimah">Nurhakimah</option>
                <option value="Razif Jemaat">Razif Jemaat</option>
              </select> &nbsp;
              <input type="submit" name="filterForm" class='btn btn-sm btn-warning' value="Apply Filter">
              <a href="?" class="btn btn-sm bg-gray"><span class="fa fa-undo"  title="" data-original-title="Reset"></span></a>
          </form> 

      </div>        
  </div>
  <!-- End Body Filter Tool-->

<!--Table Header -->
<div class="box-body table-responsive padding" id="table_format">
  <table class="table table-hover">
    <tbody id='myTable'><tr class="bg-gray">
          <th>#ID</th>
          <th>Subject</th>
          <th class="col-md-1">Status</th>
          <th class="col-md-1">Assignee</th>                                    
          <th class="col-md-2">Resolution Date</th>
          <th class="col-md-2">Action</th>
    </tr> 

   
 
    
  @foreach ($problems as $problem)
    <tr class="content">
      <td>{{ $problem -> id}}</td>
      <td>{{ $problem -> subject}}</td>
      
      <td>  @if ($problem -> status == 'New')
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
            </td>

      <td>{{ $problem -> assignee}}</td>
      <td>{{ date('d F, Y', strtotime($problem -> resolutionDate)) }}</td>
      <td>
        <a href="{{ route('problems.show', $problem-> id  )}}"><button value="Open" class="btn btn-primary btn-sm form-spacing-bottom"><i class="fa fa-folder-open"></i> open</button></a>

        <a href="{{ route('problems.edit', $problem-> id  )}}"><button value="Edit" class="btn btn-success btn-sm form-spacing-bottom"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>

        {{--  ///Delete function in table which are taken off temporarily until further notice///

               <button href="#delete" data-toggle="modal" data-target="#delete5" value="Delete" class="btn btn-danger btn-sm form-spacing-bottom"><i class="glyphicon glyphicon-trash"></i> Delete</button>

               @include('adminlte::layouts.partials._deleteModal')    
          --}}
      </td>
    </tr>

  @endforeach

    

  </tbody></table><!--Table End
        </div><!-- /.box-body -->
    </div><!-- /.box -->  
  </div><!-- /.col -->


      <div class="text-center">
          {!! $problems -> links() !!}                     
      </div>
	</div>
</div>




@endsection
