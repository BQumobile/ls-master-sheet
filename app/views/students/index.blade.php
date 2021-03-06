@extends('layouts.main')


@section('content')

<div class="m-b-md">
	<form class="navbar-form navbar-left " role="search">
        <div class="form-group">
             <div class="input-group" style="min-width:1080px;">
                     <span class="input-group-btn">
                       <span class="btn btn-sm bg-white b-white btn-icon" style="min-height:50px;font-size:24px;"><i class="fa fa-search"></i></span>
                     </span>
                     <input type="text" style="min-height:50px;font-size:24px;" id="search_text" class="form-control input-sm no-border" placeholder="Search SAN , LS SN , Name ...">
                   </div>

        </div>
      </form>
      </div>

              <br>
              <br>


 <section class="panel panel-default">

                <div class="table-responsive">
                  <table class="table table-striped m-b-none" data-ride="datatables" id="student_datatable">
                    <thead>
                      <tr>
                        <th width="20%">SAN</th>
                        <th width="20%">LS SN</th>
                        <th width="35%">NAME(s)</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($students as $student)
                    <?php
                    $s = DB::table('students')->where('id','=',$student->id)->first();

                    ?>
                       <tr>
                           <td>{{ $s->san }}</td>
                           <td>{{ $s->ls_student_number }}</td>
                           <td>{{ $s->title.' '.$s->initials_1.' '.$s->initials_2.' '.$s->initials_3.' '.$s->forename_1.' '.$s->forename_2.' '.$s->forename_3.' '.$s->surname }}</td>
                           <td style="min-width: 120px;">
@if (Sentry::getUser()->hasAccess('students.more'))
                           <a class="btn btn-sm btn-primary" href="{{ URL::to('/students/'.$s->san) }}">More</a>
@endif
                           </td>
                         </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </section>
@stop


@section('post_css')
{{ HTML::style('js/datatables/datatables.css'); }}
@stop

@section('post_js')
  {{ HTML::script('js/datatables/jquery.dataTables.min.js'); }}
  <script>

    $('#student_datatable').dataTable({
"sPaginationType": "full_numbers"
    });


    oTable = $('#student_datatable').dataTable();
  $('#search_text').keyup(function(){
         oTable.fnFilter($(this).val());
  })

  $('#student_datatable_filter').hide();
  </script>

@stop

@section('main_menu')

 @stop

 @section('breadcrumb')
   <li class="active"><a href="{{ URL::to('/students') }}">Applications</a></li>

 @stop