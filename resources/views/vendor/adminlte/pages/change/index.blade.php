@extends('adminlte::layouts.app')

@section('contentheader_title')
	Change Management
@stop

@section('contentheader_description')
	ITSM System
@stop

@section('htmlheader_title')
	Changes
@endsection

@section('main-content')
	<div class="container-fluid spark-screen">


<!-- Add Problem Button-->
<div class="no-print col-md-9">
  <a href="{{route('changes.create')}}"><button class="btn btn-success pull-left" ><span class="glyphicon glyphicon-plus"></span> New Change</button></a>
  
</div>
<!--end_button-->
<br>
<br>

  <div class="col-md-12">
    <!-- Primary box -->
    <div class="box box-solid box-primary">
       
     <!-- Box Header-->
     <div class="box-header">
        <h3 class="box-title">Changes</h3>
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
              <li class=""><a href="{{ route('changes.index',['status' => request('status'), 'sort_id' => 'asc']) }}">#ID- ascending</a></li>
              <li class=""><a href="{{ route('changes.index',['status' => request('status'), 'sort_id' => 'desc']) }}">#ID- decending</a></li>
              <li class=""><a href="{{ route('changes.index',['status' => request('status'), 'sort_status' => 'asc']) }}">Status</a></li>
              <li class=""><a href="{{ route('changes.index',['status' => request('status'), 'sort_implementer' => 'asc']) }}">Assignee</a></li>
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
                  <option value="Open">Open</option>
                  <option value="Planning">Planning</option>
                  <option value="Awaiting Approval">Awaiting Approval</option>
                  <option value="Pending Release">Pending Release</option>
                  <option value="Pending Review">Pending Review</option>
                  <option value="Closed">Closed</option>
              </select> &nbsp;
              
              <select style="width:200px" class="btn btn-default btn-sm" id="filterImplementer" name="implementer">
                <option value="" selected="selected">Implementer</option>
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
          <th class="col-md-2">Change Type</th>                                    
          <th class="col-md-1">Implementer</th>
          <th class="col-md-2">Action</th>
    </tr> 

   
 
    
  @foreach ($changes as $change)
    <tr class="content">
      <td>{{ $change -> id}}</td>
      <td>{{ $change -> subject}}</td>
      
      <td>  @if ($change -> status == 'Open')
                  <span class="label label-primary">Open</span>
              @elseif ($change -> status == 'Planning')
                  <span class="label label-info">Planning</span>
              @elseif ($change -> status == 'Awaiting Approval')
                  <span class="label label-danger">Awaiting Approval</span>
              @elseif ($change -> status == 'Pending Review')
                  <span class="label label-warning">Pending Review</span>
              @elseif ($change -> status == 'Pending Release')
                  <span class="label label-success">Pending Release</span>
              @elseif ($change -> status == 'Closed')
                  <span class="label label-default" style="background-color: #000; color: #fff;">Closed</span>
              @endif 
            </td>

      <td>{{ $change -> changeType}}</td>
      <td>{{ $change -> implementer}}</td>
      <td>
        <a href="{{ route('changes.show', $change-> id  )}}"><button value="Open" class="btn btn-primary btn-sm form-spacing-bottom"><i class="fa fa-folder-open"></i> open</button></a>

        <a href="{{ route('changes.edit', $change-> id  )}}"><button value="Edit" class="btn btn-success btn-sm form-spacing-bottom"><i class="glyphicon glyphicon-edit"></i> Edit</button></a>

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
          {!! $changes -> links() !!}                     
      </div>
	</div>

		
	</div>
@endsection
