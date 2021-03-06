@extends('layouts.main')


@section('content')
<div class="row" style="min-height: 50px;"></div>
<div class="row">
   <div class="col-sm-12">
   </div>
</div>
<div class="row">
   <div class="col-sm-5">

 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="47%">{{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'control-label'));  }}</td>
    <td width="53%">{{ $student->san  }}</td>
  </tr>
  <tr>
    <td> {{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ $student->ls_student_number }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentSource->app_date_date.'-'.$studentSource->app_date_month.'-'.$studentSource->app_date_year }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>{{ $studentSource->ams_date_date.'-'.$studentSource->ams_date_month.'-'.$studentSource->ams_date_year }}</td>
  </tr>
</table>


              


       </div>
  </section>
   </div>
   <!-- Edit -->
   <div class="col-sm-7">
 <section class="panel panel-default">
       <header class="panel-heading font-bold">STUDENT MAIN INFORMATION</header>
       <div class="panel-body">
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td> {{ Form::label('san', 'Student Application Number (SAN)', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('san',  $student->san ,['placeholder'=>'Student Application Number (SAN)','class'=>'form-control','data-required'=>'true','minlength'=>"5"]); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('ls_student_number', 'LS Student Number', array('class' => 'control-label'));  }}</td>
    <td>{{ Form::text('ls_student_number', $student->ls_student_number,['placeholder'=>'LS Student Number','class'=>'form-control']); }}</td>
  </tr>
  <tr>
    <td>{{ Form::label('app_date', 'App Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>{{ Form::text('app_date_date', $studentSource->app_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('app_date_month', $studentSource->app_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('app_date_year', $studentSource->app_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

    
                                   
                                    </td>
  </tr>
  <tr>
    <td>{{ Form::label('ams_date', 'AMS Date', array('class' => 'control-label'));  }}</td>
    <td>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> {{ Form::text('ams_date_date', $studentSource->ams_date_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td> {{ Form::text('ams_date_month', $studentSource->ams_date_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}</td>
    <td>{{ Form::text('ams_date_year', $studentSource->ams_date_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}</td>
  </tr>
</table>

    
                                      
                                       </td>
  </tr>
</table>

                      
       </div>
  </section>

   </div>
</div>


<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                     <div class="form-inline">
                        {{ Form::label('information_source', 'Information Source', array('class' => 'col-sm-6 control-label'));  }}
                        <div class="col-sm-6">
                       {{  DB::table('application_sources')->where('id', $studentSource->information_source)->pluck('name'); }}&nbsp;

                        </div>
                     </div>

 <div class="form-group">
   <div class="form-inline">
                {{ Form::label('admission_manager', 'Admission manager', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">{{  DB::table('application_admission_managers')->where('id', $studentSource->admission_manager)->pluck('name'); }}&nbsp; </div>

                              </div>
                              </div>

 <div class="form-group">
   <div class="form-inline">
                {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'col-sm-6 control-label'));  }}
                <div class="col-sm-6">@if ($studentSource->admission_manager == 6)
                     {{  DB::table('application_laps')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @else
                     {{  DB::table('application_agents')->where('id', $studentSource->admission_manager)->pluck('name'); }}
                @endif</div>

                              </div>
                              </div>

                                          </div>
               </section>
   </div>
   <div class="col-sm-7">

       <section class="panel panel-default">
                  <header class="panel-heading font-bold">AGENT/ ADMISSION MANAGER INFORMATION</header>
                  <div class="panel-body">
                     <div class="form-inline" style="padding-bottom:40px">
                        {{ Form::label('information_source', 'Information Source', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                        {{ Form::select('information_source', $information_sources,'',['class'=>'chosen-select col-sm-12']);  }}

                        </div>
                     </div>


   <div class="form-inline" style="padding-bottom:40px">
                {{ Form::label('admission_manager', 'Admission manager', array('class' => 'col-sm-3 control-label'));  }}
                <div class="col-sm-9">{{ Form::select('admission_manager',  $admission_managers,'',['class'=>'chosen-select col-sm-12']);  }}</div>

                              </div>
                              <div class="form-inline"><div class="col-sm-6"></div><div class="col-sm-6">{{ Form::text('admission_managers_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>


   <div class="form-inline">
                {{ Form::label('agents_laps', 'Agent/LAP', array('class' => 'col-sm-3 control-label'));  }}
                <div class="col-sm-9">{{ Form::select('agents_laps', $agents_laps,'',['class'=>'chosen-select col-sm-12']);  }}</div>

                              </div>
  <div class="form-inline"><div class="col-sm-6"></div><div class="col-sm-6">{{ Form::text('agents_laps_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div></div>
                  </div>
               </div></section>
   </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
     <div class="panel-body">
                                   <div class="form-inline">
                                      <label class="col-sm-3 control-label">Title</label>
                                      <div class="col-sm-9">
                                         <div class="radio-inline i-checks">
                                            {{ $student->title }}&nbsp;
                                         </div>
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="form-group">
                                         <div class="col-sm-2">{{ $student->initials_1 }}&nbsp;</div>

                                         <div class="col-sm-2">{{ $student->initials_2 }}&nbsp;</div>

                                         <div class="col-sm-2">{{ $student->initials_3 }}&nbsp;</div>
     &nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_1 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_2 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->forename_3 }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">{{ $student->surname }}&nbsp;</div>
                                   </div>
                                   <div class="form-inline">
                                      <label class="col-sm-3 control-label">Gender</label>
                                      <div class="col-sm-9">
                                         {{ $student->gender }}&nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9"><div class="form-inline">
                                                     {{ $student->date_of_birth_date.'-'.$student->date_of_birth_month.'-'.$student->date_of_birth_year }}&nbsp;
                                                  </div>
                                                  </div>
                                      </div>
                                   <div class="form-inline">
                                      {{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9">

                                         {{ StaticNationality::getNameByID($student->nationality)  }}&nbsp;
                                      </div>
                                   </div>
                                   <div class="form-inline">
                                      {{ Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  }}
                                      <div class="col-sm-9"> {{ $student->passport  }}&nbsp;</div>
                                   </div>
                                </div>
      </section>
  </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">PERSONAL DATA</header>
      <div class="panel-body">
                              <div class="form-inline">
                                 <label class="col-sm-3 control-label">Title</label>
                                 <div class="col-sm-9">
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Mr.',true); }}
                                       <i></i>
                                       Mr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Mrs.'); }}
                                       <i></i>
                                       Mrs
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Miss.'); }}
                                       <i></i>
                                       Miss
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Ms.'); }}
                                       <i></i>
                                       Ms
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Dr.'); }}
                                       <i></i>
                                       Dr
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('title', 'Other.'); }}
                                       <i></i>
                                       Other
                                       </label>
                                    </div>
                                 </div>&nbsp;
                              </div>
                              <div class="form-inline">
                                 {{ Form::label('initials', 'Initials', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="form-group">
                                    <div class="col-sm-2">{{ Form::text('initials_1',  $student->initials_1 ,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                                    <div class="col-sm-2">{{ Form::text('initials_2', $student->initials_2,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>

                                    <div class="col-sm-2">{{ Form::text('initials_3', $student->initials_3,['placeholder'=>'','class'=>'form-control','style'=>'width:60px !important']); }}</div>
&nbsp;
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_1', 'Forename 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_1', $student->forename_1,['placeholder'=>'Forename 1','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Forename 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_2', $student->forename_2,['placeholder'=>'Forename 2','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('forename_3', 'Forename 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('forename_3', $student->forename_3,['placeholder'=>'Forename 3','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('surname', $student->surname,['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Gender</label>
                                 <div class="col-sm-9">
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Male',true); }}
                                       <i></i>
                                       Male
                                       </label>
                                    </div>
                                    <div class="radio-inline i-checks">
                                       <label>
                                       {{ Form::radio('gender', 'Female'); }}
                                       <i></i>
                                       Female
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Date of birth', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('date_of_birth_date', $student->date_of_birth_date,['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                                {{ Form::text('date_of_birth_month', $student->date_of_birth_month,['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>"2",'data-parsley-type'=>'digits']); }}
                                                {{ Form::text('date_of_birth_year', $student->date_of_birth_year,['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>"4",'data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                 </div>
                              <div class="form-group">
                                 {{ Form::label('nationality', 'Nationality', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">

                                    {{ Form::select('nationality', $nationalities,$student->nationality,['class'=>'chosen-select col-sm-12']);  }}
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('passport', 'Passport number', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9"> {{ Form::text('passport', $student->passport,['placeholder'=>'Passport number','class'=>'form-control']); }}</div>
                              </div>
                           </div>
      </section>
  </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">CONTACT INFORMATION</header>
           <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>

                      <div class="panel-body">
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Address line 1</label>
                                     <div class="col-sm-9">&nbsp;
                                        {{ $ttStudentContactInformation->address_1  }}
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Address line 2</label>
                                     <div class="col-sm-9">&nbsp;
                                        {{ $ttStudentContactInformation->address_2  }}
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Town/City</label>
                                     <div class="col-sm-9">
                                         {{ $ttStudentContactInformation->city  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Post code</label>
                                     <div class="col-sm-9">
                                        {{ $ttStudentContactInformation->post_code  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Country</label>
                                     <div class="col-sm-9">
                                         {{ $ttStudentContactInformation->country  }}&nbsp;
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Mobile</label>
                                     <div class="col-sm-9">
                                        <div class="form-inline">
                                          +&nbsp;&nbsp;

                                       {{ $ttStudentContactInformation->mobile  }}&nbsp;
                                        </div>
                                     </div>
                                  </div>
                                  <div class="form-inline">
                                     <label class="col-sm-3 control-label">Landline</label>
                                     <div class="col-sm-9">
                                        <div class="form-inline">
                                        +&nbsp;&nbsp;
                                        {{ $ttStudentContactInformation->landline  }}&nbsp;

                                      </div>
                                     </div>

                                  </div>
                    </div>
                    <!-- Country of origin -->
                    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
                    <div class="line line-dashed b-b line-lg pull-in"></div>
                    <div class="panel-body">
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Address line 1</label>
                          <div class="col-sm-9">
                              {{ $studentContactInformation->address_1  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Address line 2</label>
                          <div class="col-sm-9">
                          {{ $studentContactInformation->address_2  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Town/City</label>
                          <div class="col-sm-9">
                             {{ $studentContactInformation->city  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Post code</label>
                          <div class="col-sm-9">
                             {{ $studentContactInformation->post_code  }}&nbsp;
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Country</label>
                          <div class="col-sm-9">


                                {{ $studentContactInformation->country  }}&nbsp;

                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Mobile</label>
                          <div class="col-sm-9">
                             <div class="form-inline">
                               + {{ $studentContactInformation->mobile  }}&nbsp;
                             </div>
                          </div>
                       </div>
                       <div class="form-inline">
                          <label class="col-sm-3 control-label">Landline</label>
                          <div class="col-sm-9">
                             <div class="form-inline">
                                                 + {{ $studentContactInformation->landline  }}&nbsp;
                                               </div>
                          </div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9"> + {{ $studentContactInformationOnline->email  }}&nbsp;</div>

                       </div>
                       <div class="form-inline">
                          {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">&nbsp;
                          {{ $studentContactInformationOnline->alternative_email  }}
                          </div>
                       </div>&nbsp;
        <div class="line line-dashed b-b line-lg pull-in"></div>


                       <div class="form-inline">
{{ Form::label('forename_3', 'Facebook', array('class' => 'col-sm-3 control-label'));  }}
                        <div class="col-sm-9">
                           {{ $studentContactInformationOnline->facebook  }}&nbsp;
                          </div>
                       </div>

                       <div class="form-inline">
                          {{ Form::label('forename_3', 'LinkedIn', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                                 {{ $studentContactInformationOnline->linkedin  }}&nbsp;</div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('forename_3', 'Twitter', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">
                          {{ $studentContactInformationOnline->twitter  }}&nbsp;</div>
                       </div>
                       <div class="form-inline">
                          {{ Form::label('forename_3', 'Other Social', array('class' => 'col-sm-3 control-label'));  }}
                          <div class="col-sm-9">{{ $studentContactInformationOnline->other_social  }}&nbsp;</div>
                       </div>
                    </div>
            </section>
     </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
      <header class="panel-heading font-bold">CONTACT INFORMATION</header>
    <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Term time</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>

               <div class="panel-body">
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Address line 1</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Address line 2</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Town/City</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Post code</label>
                              <div class="col-sm-9">
                                 {{ Form::text('tt_post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Country</label>
                              <div class="col-sm-9">
                                 {{ Form::select('tt_country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Mobile</label>
                              <div class="col-sm-9">
                                 <div class="form-inline">
                                   +&nbsp;&nbsp;
                                   {{ Form::text('tt_mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                   {{ Form::text('tt_mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                 </div>
                              </div>
                           </div>
                           <div class="form-group">
                              <label class="col-sm-3 control-label">Landline</label>
                              <div class="col-sm-9">
                                 <div class="form-inline">
                                                     +&nbsp;&nbsp;
                                                     {{ Form::text('tt_landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                     {{ Form::text('tt_landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits','data-parsley-type'=>'digits']); }}
                                                   </div>
                              </div>

                           </div>
             </div>
             <!-- Country of origin -->
             <div class="font-bold" style="padding: 10px 15px 0px 15px !important;" href="#">Permanent</div>
             <div class="line line-dashed b-b line-lg pull-in"></div>
             <div class="panel-body">
                <div class="form-group">
                   <label class="col-sm-3 control-label">Address line 1</label>
                   <div class="col-sm-9">
                      {{ Form::text('address_1', '',['placeholder'=>'Address line 1','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Address line 2</label>
                   <div class="col-sm-9">
                      {{ Form::text('address_2', '',['placeholder'=>'Address line 2','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Town/City</label>
                   <div class="col-sm-9">
                      {{ Form::text('city', '',['placeholder'=>'Town/City','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Post code</label>
                   <div class="col-sm-9">
                      {{ Form::text('post_code', '',['placeholder'=>'Post code','class'=>'form-control']); }}
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Country</label>
                   <div class="col-sm-9">

                         {{ Form::select('country', $countries,'',['class'=>'chosen-select col-sm-12']);  }}

                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Mobile</label>
                   <div class="col-sm-9">
                      <div class="form-inline">
                        +&nbsp;&nbsp;
                        {{ Form::text('mobile_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                        {{ Form::text('mobile', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                      </div>
                   </div>
                </div>
                <div class="form-group">
                   <label class="col-sm-3 control-label">Landline</label>
                   <div class="col-sm-9">
                      <div class="form-inline">
                                          +&nbsp;&nbsp;
                                          {{ Form::text('landline_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                          {{ Form::text('landline', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                        </div>
                   </div>
                </div>
                <div class="form-group">
                   {{ Form::label('email', 'Email ', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('email', '',['placeholder'=>'Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
                </div>
                <div class="form-group">
                   {{ Form::label('alternative_email', 'Alternative Email', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('alternative_email', '',['placeholder'=>'Alternative Email','class'=>'form-control','data-parsley-type'=>'email']); }}</div>
                </div>
 <div class="line line-dashed b-b line-lg pull-in"></div>


                <div class="form-group">
{{ Form::label('forename_3', 'Facebook', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('facebook', '',['placeholder'=>'Facebook','class'=>'form-control']); }}</div>
                </div>

                <div class="form-group">
                
{{ Form::label('forename_3', 'LinkedIn', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('linkedin', '',['placeholder'=>'LinkedIn','class'=>'form-control']); }}</div>
                </div>
                <div class="form-group">
                 {{ Form::label('forename_3', 'Twitter', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('twitter', '',['placeholder'=>'Twitter','class'=>'form-control']); }}</div>
                </div>
                <div class="form-group">
                   {{ Form::label('forename_3', 'Other Social', array('class' => 'col-sm-3 control-label'));  }}
                   <div class="col-sm-9">{{ Form::text('other_social', '',['placeholder'=>'Other','class'=>'form-control']); }}</div>
                </div>
             </div>
     </section>
     </div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>

                     <div class="panel-body">
                                     <div class="form-group" style="padding-bottom:20px">
                                        <label class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                           Mr.
                                           
                                          
                                           
                                           
                                        </div>
                                     </div>
                                     <div class="form-group" style="padding-bottom:40px">
                                        {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">asas</div>
                                     </div>
                                     <div class="form-group" style="padding-bottom:40px">
                                        {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">asas</div>
                                     </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Telephone</label>
                                          <div class="col-sm-9">
                                                         <div class="form-inline">
                                                                             +71526152
                                                                           </div>
                                                      </div>
                                     </div>
                                  </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">Next of Kin Details</header>
                   <div class="panel-body">
                                     <div class="form-group" style="padding-bottom:20px">
                                        <label class="col-sm-3 control-label">Title</label>
                                        <div class="col-sm-9">
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Mr.',true); }}
                                              <i></i>
                                              Mr
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Mrs.'); }}
                                              <i></i>
                                              Mrs
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Miss.'); }}
                                              <i></i>
                                              Miss
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Ms.'); }}
                                              <i></i>
                                              Ms
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Dr.'); }}
                                              <i></i>
                                              Dr
                                              </label>
                                           </div>
                                           <div class="radio-inline i-checks">
                                              <label>
                                              {{ Form::radio('next_of_kin_title', 'Other.'); }}
                                              <i></i>
                                              Other
                                              </label>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="form-group" style="padding-bottom:40px">
                                        {{ Form::label('next_of_kin_forename', 'Forename', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">{{ Form::text('next_of_kin_forename', '',['placeholder'=>'Forename','class'=>'form-control']); }}</div>
                                     </div>
                                     <div class="form-group" style="padding-bottom:40px">
                                        {{ Form::label('next_of_kin_surname', 'Surname', array('class' => 'col-sm-3 control-label'));  }}
                                        <div class="col-sm-9">{{ Form::text('next_of_kin_surname', '',['placeholder'=>'Surname','class'=>'form-control']); }}</div>
                                     </div>
                                     <div class="form-group">
                                        <label class="col-sm-3 control-label">Telephone</label>
                                          <div class="col-sm-9">
                                                         <div class="form-inline">
                                                                             +&nbsp;&nbsp;
                                                                             {{ Form::text('next_of_kin_telephone_1', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone_2', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone_3', '',['placeholder'=>'','class'=>'form-control','style'=>'width:40px !important','maxlength'=>'1','data-parsley-type'=>'digits']); }}
                                                                             {{ Form::text('next_of_kin_telephone', '',['placeholder'=>'','class'=>'form-control','style'=>'width:180px !important','data-parsley-type'=>'digits']); }}
                                                                           </div>
                                                      </div>
                                     </div>
                                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>

                     <div class="panel-body">
                                              <div class="form-group" style="padding-bottom:30px">
                                                 {{ Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">
                                                      <div class="form-inline">
                                                      asdfgdg




                                                 </div>
                                                 </div>
                                              </div>

                                              <div class="form-group" style="padding-bottom:20px">
                                                          <label class="col-sm-3 control-label"></label>
                                                          <div class="col-sm-9">
                                                          
                                                                  Top - Up
                                                                 

                                                          </div>
                                                       </div>
                                              <div class="form-inline">

                                              </div>
                                              <div class="form-group" >
                                                 {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">

                                                   asasas
                                                 </div>
                                              </div>
                                              <div class="form-group" style="padding-top:50px">
                                                                      {{ Form::label('intake1', 'Intake', array('class' => 'col-sm-3 control-label'));  }}
                                                                      <div class="col-sm-9">
                                                                         <div class="form-group">
                                                                           <div class="form-inline">
                                                                           <div class="col-sm-5">
                                                                                            
                                                                                              <div class="col-sm-4">

                                                                                                 2015
                                                                                              </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                           
                                                                                              <div class="col-sm-9">

                                                                                                 23
                                                                                              </div>
                                                                           </div>
                                                                           </div>
                                                                         </div>

                                                                      </div>
                                                                   </div>
                                                                   <div class="form-group">
                                                                      <label class="col-sm-3 control-label">Study mode</label>
                                                                      <div class="col-sm-9">
                                                                    
                                                                              
                                                                              Blended
                                                                              
                                                                          
                                                                         

                                                                      </div>
                                           </div>
                                           </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">COURSE DETAILS</header>
                      <div class="panel-body">
                                              <div class="form-group" style="padding-bottom:30px">
                                                 {{ Form::label('course_name', 'Course Name', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">
                                                      <div class="form-inline">
                                                      {{ Form::select('course_name', $course_names,'',['class'=>'chosen-select col-sm-12']);  }}




                                                 </div>
                                                 </div>
                                              </div>

                                              <div class="form-group" style="padding-bottom:20px">
                                                          <label class="col-sm-3 control-label"></label>
                                                          <div class="col-sm-9">
                                                          <div class="radio-inline i-checks">
                                                                  <label>
                                                                  {{ Form::radio('course_level', 'Top - Up',true); }}
                                                                  <i></i>
                                                                  Top - Up
                                                                  </label>
                                                               </div>
                                                             <div class="radio-inline i-checks">
                                                                <label>
                                                                {{ Form::radio('course_level', 'Advanced Entry'); }}
                                                                <i></i>
                                                                Advanced Entry
                                                                </label>
                                                             </div>

                                                          </div>
                                                       </div>
                                              <div class="form-inline">

                                              </div>
                                              <div class="form-group" >
                                                 {{ Form::label('awarding_body', 'Awarding Body', array('class' => 'col-sm-3 control-label'));  }}
                                                 <div class="col-sm-9">

                                                    {{ Form::select('awarding_body', $awarding_bodies,'',['class'=>'chosen-select col-sm-12']);  }}
                                                 </div>
                                              </div>
                                              <div class="form-group" style="padding-top:50px">
                                                                      {{ Form::label('intake1', 'Intake', array('class' => 'col-sm-3 control-label'));  }}
                                                                      <div class="col-sm-9">
                                                                         <div class="form-group">
                                                                           <div class="form-inline">
                                                                           <div class="col-sm-5">
                                                                                            {{ Form::label('intake_year', 'Year', array('class' => 'col-sm-1 control-label'));  }}
                                                                                              <div class="col-sm-4">

                                                                                                 {{ Form::select('intake_year', $intake_year,'',['class'=>'chosen-select']);  }}
                                                                                              </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                            {{ Form::label('intake_month', 'Month', array('class' => 'col-sm-3 control-label'));  }}
                                                                                              <div class="col-sm-9">

                                                                                                 {{ Form::select('intake_month', $intake_month,'',['class'=>'chosen-select']);  }}
                                                                                              </div>
                                                                           </div>
                                                                           </div>
                                                                         </div>

                                                                      </div>
                                                                   </div>
                                                                   <div class="form-group">
                                                                      <label class="col-sm-3 control-label">Study mode</label>
                                                                      <div class="col-sm-9">
                                                                      <div class="radio-inline i-checks">
                                                                              <label>
                                                                              {{ Form::radio('study_mode', 'Blended',true); }}
                                                                              <i></i>
                                                                              Blended
                                                                              </label>
                                                                           </div>
                                                                         <!--<div class="radio-inline i-checks">
                                                                            <label>
                                                                            {{ Form::radio('study_mode', 'Online'); }}
                                                                            <i></i>
                                                                            Online
                                                                            </label>
                                                                         </div>
                                                                         <div class="radio-inline i-checks">
                                                                            <label>
                                                                            {{ Form::radio('study_mode', 'Face to Face'); }}
                                                                            <i></i>
                                                                            Face to Face
                                                                            </label>
                                                                         </div>-->

                                                                      </div>
                                           </div>
                                           </div>
      </section>
</div>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                      <div class="form-group">
                                                       {{ Form::label('english_language_level1', 'English language level', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">
                                                          <div class="form-inline">
                                                             <div class="col-sm-5 ">
                                                                
                                                                   
                                                                   CITY & GUILDS
                                                                  
                                                               
                                                             </div>
                                                             
                                                             

                                                          </div>
                                                       </div>
                                                    </div><br>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                    <div class="form-inline" style="padding-bottom:40px">
                                                       {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">rert</div></div>
                                                    <div class="form-inline" style="padding-bottom:40px">
                                                       {{ Form::label('institution_1', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">yhjyu</div>
                                                    </div>
                                                  <div class="form-group">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}<div class="form-inline">
                                                        <div class="col-sm-4">
                                                        
                                                                    34/34/34
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="margin-bottom:0px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-1 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                      56/453/34
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                                  
                                                                   
                                                    <div class="form-inline" style="padding-top:50px" >
                                                    
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">pass</div>
                                                    </div>

                                                    <div class="line line-dashed b-b line-lg pull-in"></div><br />



                                                    

<br />


                                        <div id="qualification_container_3">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_2', 'Qualification 2', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">dfdf</div>
                                                       {{ Form::label('other', 'Other', array('class' => 'col-sm-3 control-label'));  }}
                                                         <div class="col-sm-3">fgfg</div>
                                                      </div><br />

                                                    <div class="form-group" style="padding-top:30px; padding-bottom:30px">
                                                       {{ Form::label('institution_2', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">fgfg</div>
                                                    </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4">
                                                        <div class="form-inline">
                                                                      23/34/34
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                     45/45/45
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">Pass</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>


                                                    
                                                 </div>

                                        <div id="qualification_container_3">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_3', 'Qualification 3', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">sd</div>
                                                       <div class="col-sm-4">fgfg</div>
                                                    </div>
                                                    <div class="form-group" style="padding-top:90px; padding-bottom:30px">
                                                       {{ Form::label('institution_3', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">fgfg</div>
                                                    </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4">
                                                        <div class="form-inline">
                                                                     435/34/34
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                    45/45/45
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-top:10px">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">Pass</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                 </div>
                  </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">EDUCATIONAL QUALIFICATIONS</header>

                      <div class="panel-body">
                      <div class="form-group">
                                                       {{ Form::label('english_language_level1', 'English language level', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">
                                                          <div class="form-inline">
                                                             <div class="col-sm-5 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'CITY & GUILDS',false); }}
                                                                   <i></i>
                                                                   CITY & GUILDS
                                                                   </label>
                                                                </div>
                                                             </div>
                                                             <div class="col-sm-3 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'IELTS',false); }}
                                                                   <i></i>
                                                                   IELTS
                                                                   </label>
                                                                </div>
                                                             </div>
                                                             <div class="col-sm-3 ">
                                                                <div class="checkbox i-checks">
                                                                   <label>
                                                                   {{ Form::checkbox('english_language_level[]', 'ESOL',false); }}
                                                                   <i></i>
                                                                   ESOL
                                                                   </label>
                                                                </div>
                                                             </div>

                                                          </div>
                                                       </div>
                                                    </div><br>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                    <div class="form-inline" style="padding-bottom:40px">
                                                       {{ Form::label('qualification_1', 'Qualification 1', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::select('qualification_1', $education_qualifications,'',['class'=>'chosen-select col-sm-12']);  }}</div></div>
                                                    <div class="form-inline" style="padding-bottom:40px">
                                                       {{ Form::label('institution_1', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_1', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                  <div class="form-group">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}<div class="form-inline">
                                                        <div class="col-sm-4">
                                                        
                                                                      {{ Form::text('qualification_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="margin-bottom:0px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-1 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                                  
                                                                   
                                                    <div class="form-inline" style="padding-top:50px" >
                                                    
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_1', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>

                                                    <div class="line line-dashed b-b line-lg pull-in"></div><br />



                                                    <div class="form-group">
                                                       <div class="col-sm-3"></div>
                                                       <div class="col-sm-9">
                                                          <p style="padding-bottom:10px; ">
                                                             <a href="#" id="add_more_qualifications" class="btn btn-default btn-sm">Add More Qualifications</a>
                                                          </p>
                                                       </div>
                                                    </div>

<br />


                                        <div id="qualification_container_3">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_2', 'Qualification 2', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">{{ Form::select('qualification_2', $education_qualifications,'',['style'=>'width:150px !important','class'=>'chosen-select']);  }}</div>
                                                       {{ Form::label('other', 'Other', array('class' => 'col-sm-3 control-label'));  }}
                                                         <div class="col-sm-3">{{ Form::text('qualification_2_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                                      </div><br />

                                                    <div class="form-group" style="padding-top:30px; padding-bottom:30px">
                                                       {{ Form::label('institution_2', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_2', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4">
                                                        <div class="form-inline">
                                                                      {{ Form::text('qualification_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_2', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>


                                                    <div class="form-group">
                                                       <div class="col-sm-3"></div>
                                                       <div class="col-sm-9">
                                                          <p style="padding-bottom:10px; ">
                                                             <a href="#" id="add_more_qualifications_2" class="btn btn-default btn-sm">Add More Qualifications</a>
                                                          </p>
                                                       </div>
                                                    </div>
                                                 </div>

                                        <div id="qualification_container_3">
                                                    <div class="form-group">
                                                       {{ Form::label('qualification_3', 'Qualification 3', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-4">{{ Form::select('qualification_3', $education_qualifications,'',['class'=>'chosen-select','style'=>'width:150px !important']);  }}</div>
                                                       <div class="col-sm-4">{{ Form::text('qualification_3_other', '',['placeholder'=>'Please Specify','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group" style="padding-top:90px; padding-bottom:30px">
                                                       {{ Form::label('institution_3', 'Institution', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('institution_3', '',['placeholder'=>'Institution','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('qualification_start_date', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4">
                                                        <div class="form-inline">
                                                                      {{ Form::text('qualification_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-bottom:30px">
                                                       {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                                        <div class="col-sm-4"><div class="form-inline">
                                                                      {{ Form::text('qualification_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                      {{ Form::text('qualification_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                                   </div>
                                                                   </div>
                                                                   </div>
                                                    <div class="form-group" style="padding-top:10px">
                                                       {{ Form::label('qualification_grade', 'Grade', array('class' => 'col-sm-3 control-label'));  }}
                                                       <div class="col-sm-9">{{ Form::text('qualification_grade_3', '',['placeholder'=>'Pass','class'=>'form-control']); }}</div>
                                                    </div>
                                                    <div class="line line-dashed b-b line-lg pull-in"></div>



                                                 </div>
                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                      <div id="occupation_container_1">

                              <div class="form-group" style="padding-bottom:30px">
                                 {{ Form::label('occupation_1', 'Occupation 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">dfdff</div>
                              </div>
                              <div class="form-group" style="padding-bottom:30px">
                                 {{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">ffgfgfg</div>
                              </div>
                              <div class="form-group" style="padding-bottom:60px">
                                 {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">fgfgfg</div>
                              </div>
                              <div class="form-group" style="padding-bottom:30px; padding-top:30px">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                2/12/12
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                               34/45/23
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_1', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              
                              </div>
                              
                              
                              <div id="occupation_container_2">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group" >
                                 {{ Form::label('forename_2', 'Occupation 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">sdsd</div>
                              </div>
                              <div class="form-group" >
                                 {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">rfgfg</div>
                              </div>
                              <div class="form-group" style="padding-top:275px">
                                 {{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">sdsd</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                               34/34/34
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                               52/32/34
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_2', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <p>
                                       <a href="#" class="btn btn-default btn-sm" id="add_more_occupations_2">Add More Occupations</a>
                                    </p>
                                 </div>
                              </div>
                              </div>
                              
                              <div id="occupation_container_3">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Occupation 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">wsdsd</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">sdsd</div>
                              </div>
                              <div class="form-group" style="padding-top:420px">
                                 {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">fgfg</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                43/4/45
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                               4/5/6
                                             </div>
                                             </div>
                              
                              </div>
                              
                              
                              
                              
                              
                              
                  </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">WORK EXPERIENCE</header>

                      <div class="panel-body">
                      <div id="occupation_container_1">

                              <div class="form-group" style="padding-bottom:30px">
                                 {{ Form::label('occupation_1', 'Occupation 1', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('occupation_1', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" style="padding-bottom:30px">
                                 {{ Form::label('company_name_1', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('company_name_1', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" style="padding-bottom:60px">
                                 {{ Form::label('main_duties_and_responsibilities_1', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::textarea('main_duties_and_responsibilities_1', '',['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" style="padding-bottom:30px; padding-top:30px">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_start_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_end_date_1', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_1', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_1', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_1', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <p>
                                       <a href="#" class="btn btn-default btn-sm" id="add_more_occupations_1">Add More Occupations</a>
                                    </p>
                                 </div>
                              </div>
                              </div>
                              
                              
                              <div id="occupation_container_2">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group" >
                                 {{ Form::label('forename_2', 'Occupation 2', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">{{ Form::text('occupation_2', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" >
                                 {{ Form::label('company_name_2', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">{{ Form::text('company_name_2', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" style="padding-top:275px">
                                 {{ Form::label('main_duties_and_responsibilities_2', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">{{ Form::textarea('main_duties_and_responsibilities_2', '',['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_start_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_end_date_2', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_2', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_2', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_2', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <p>
                                       <a href="#" class="btn btn-default btn-sm" id="add_more_occupations_2">Add More Occupations</a>
                                    </p>
                                 </div>
                              </div>
                              </div>
                              
                              <div id="occupation_container_3">
                           <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('forename_2', 'Occupation 3', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">{{ Form::text('occupation_3', '',['placeholder'=>'Occupation','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('company_name_3', 'Company Name - Address', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9" style="padding-bottom:10px">{{ Form::text('company_name_3', '',['placeholder'=>'Company Name - Address','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group" style="padding-top:420px">
                                 {{ Form::label('main_duties_and_responsibilities_3', 'Main duties and responsibilities', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::textarea('main_duties_and_responsibilities_3', '',['placeholder'=>'','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Start date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_start_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_start_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'End date', array('class' => 'col-sm-3 control-label'));  }}
                                  <div class="col-sm-9"><div class="form-inline">
                                                {{ Form::text('occupation_end_date_3', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_month_3', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                {{ Form::text('occupation_end_year_3', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                             </div>
                                             </div>
                                             </div>
                              <div class="form-group">
                                 <div class="col-sm-3"></div>
                                 <div class="col-sm-9">
                                    <div class="checkbox i-checks">
                                       <label>
                                      {{ Form::checkbox('currently_working_3', 'Yes',false); }}
                                       <i></i>
                                       Currently working
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              </div>
                              
                              
                              
                              
                              
                              
                  </div>
      </section>
</div>
</div>

<div class="row">
   <div class="col-sm-5">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                      <div class="panel-body">
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Course fees', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-4 ">
                                          fgfg
                                       </div>
                                       <div class="col-sm-6 ">
                                          fgf
                                       </div>
                                       <div class="col-sm-4 ">
                                          fg
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-4 ">
                                          fg
                                       </div>
                                       <div class="col-sm-4 ">
                                          fg
                                       </div>
                                       <div class="col-sm-4 ">
                                          fg
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-top:70px; padding-bottom:10px">
                                 {{ Form::label('total_fee', 'Total fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">fvfg</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group" style="padding-bottom:50px">
                                 <div class="form-inline">
                                    {{ Form::label('deposit', 'Deposit', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">fg</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  23
                                                                  23
                                                                 45
                                                               </div>
                                                               </div>
                                                               
                                                               {{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">

                                       dfdf
                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 1', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">fgfg</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                 45/
                                                                  45
                                                                  /45
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                      ffg

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 2', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">gh</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  12/21/34
                                                                  
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                     sdsd

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group"  style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 3', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">fgfg</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                 12/12/12
                                                               </div>
                                                               </div>{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                      sdsdsd

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">fcfg</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('late_fee', 'Late fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">fgfgfg</div>
                              </div>
                           </div>
              </section>
          </div>
   <div class="col-sm-7">
       <section class="panel panel-default">
             <header class="panel-heading font-bold">PAYMENT INFORMATION</header>

                     <div class="panel-body">
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Course fees', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Self funded',false); }}
                                             <i></i>
                                             Self funded
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-6 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Sponsored by the Company',false); }}
                                             <i></i>
                                             Sponsored by the Company
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('course_fees[]', 'Bank Loan',false); }}
                                             <i></i>
                                             Bank Loan
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('date_of_birth', 'Payment Status', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9 ">
                                    <div class="form-inline">
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Paid in full',false); }}
                                             <i></i>
                                             Paid in full
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Unpaid',false); }}
                                             <i></i>
                                             Unpaid
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-sm-4 ">
                                          <div class="checkbox i-checks">
                                             <label>
                                             {{ Form::checkbox('payment_status[]', 'Deposit paid',false); }}
                                             <i></i>
                                             Deposit paid
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-top:70px; padding-bottom:10px">
                                 {{ Form::label('total_fee', 'Total fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('total_fee', '',['placeholder'=>'Total fee','class'=>'form-control']); }}</div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group" style="padding-bottom:50px">
                                 <div class="form-inline">
                                    {{ Form::label('deposit', 'Deposit', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">{{ Form::text('deposit', '',['placeholder'=>'Deposit','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  {{ Form::text('deposit_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('deposit_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('deposit_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>
                                                               
                                                               {{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">

                                       {{ Form::select('deposit_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}
                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 1', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">{{ Form::text('instalment_1', '',['placeholder'=>'Instalment 1','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  {{ Form::text('instalment_1_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_1_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_1_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                       {{ Form::select('instalment_payment_method_1', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group" style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 2', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">{{ Form::text('instalment_2', '',['placeholder'=>'Instalment 2','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  {{ Form::text('instalment_2_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_2_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_2_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('nationality', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                       {{ Form::select('instalment_payment_method_2', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="form-group"  style="padding-bottom:50px;">
                                 <div class="form-inline">
                                    {{ Form::label('forename_3', 'Instalment 3', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-4">{{ Form::text('instalment_3', '',['placeholder'=>'Instalment 3','class'=>'form-control']); }}</div>
                                    {{ Form::label('date_of_birth', 'Date', array('class' => 'col-sm-1 control-label'));  }}
                                    <div class="col-sm-4"><div class="form-inline">
                                                                  {{ Form::text('instalment_3_date', '',['placeholder'=>'DD','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_3_month', '',['placeholder'=>'MM','class'=>'form-control','style'=>'width:50px !important','data-type'=>'number','maxlength'=>'2','data-parsley-type'=>'digits']); }}
                                                                  {{ Form::text('instalment_3_year', '',['placeholder'=>'YYYY','class'=>'form-control','style'=>'width:60px !important','data-type'=>'number','maxlength'=>'4','data-parsley-type'=>'digits']); }}
                                                               </div>
                                                               </div>{{ Form::label('instalment_payment_method_3', 'Method of payment', array('class' => 'col-sm-3 control-label'));  }}
                                    <div class="col-sm-9">
                                       {{ Form::select('instalment_payment_method_3', $method_of_payment,'',['class'=>'chosen-select col-sm-12']);  }}

                                    </div>
                                    <div class="line line-dashed b-b line-lg pull-in"></div>
                                 </div>
                              </div>
                              <div class="line line-dashed b-b line-lg pull-in"></div>
                              <div class="form-group">
                                 {{ Form::label('late_admin_fee', 'Late admin fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('late_admin_fee', '',['placeholder'=>'Late admin fee','class'=>'form-control']); }}</div>
                              </div>
                              <div class="form-group">
                                 {{ Form::label('late_fee', 'Late fee', array('class' => 'col-sm-3 control-label'));  }}
                                 <div class="col-sm-9">{{ Form::text('late_fee', '',['placeholder'=>'Late fee','class'=>'form-control']); }}</div>
                              </div>
                           </div>
                           
                           
                           
                           
                           
      </section>
      
      
</div>
</div>
 @stop

















@section('main_menu')

 @stop


 @section('post_css')
 {{ HTML::style('js/chosen/chosen.css'); }}

 @stop

 @section('post_js')
 <script type="text/javascript">

 $(function() {

 /*
 document.getElementById('tt_country').value = '236';

 $('#tt_country').trigger('chosen:updated');

 */
 // $( "#qualification_container_2" ).hide();
 // $( "#qualification_container_3" ).hide();
  $( "#occupation_container_2" ).hide();
  $( "#occupation_container_3" ).hide();



 $( "#san" ).keydown(function() {
     $('#top_san_display').html('SAN : '+this.value);
  // $('#top_san_display').append($(this).val());

 });
 $( "#ls_student_number" ).keydown(function() {
     $('#top_lssn_display').html('LS SN : '+this.value);
  // $('#top_lssn_display').append($(this).val());
 });



 $('[name="agents_laps"]').append("<option value='1000'>Other</option>");
 $('[name="agents_laps"]').prepend("<option value='0'>Not Applicable</option>");
  $('[name="agents_laps"]').trigger("chosen:updated");

 $('[name="admission_manager"]').append("<option value='1000'>Other</option>");
  $('[name="admission_manager"]').trigger("chosen:updated");

 $('[name="admission_manager"]').prepend("<option value='0'>Not Applicable</option>");
  $('[name="admission_manager"]').trigger("chosen:updated");

 $('[name="qualification_1"]').append("<option value='0'>Other</option>");
 $('[name="qualification_1"]').trigger("chosen:updated");

 $('[name="tt_country"]').prepend("<option value='0'>Please select a country</option>");

 $('[name="tt_country"]').trigger("chosen:updated");

 $('[name="country"]').prepend("<option value='0'>Please select a country</option>");

 $('[name="country"]').trigger("chosen:updated");

     $('[name="agents_laps"]').change(function(){
         if($(this).val() == 1000){
             $('[name="agents_laps_other"]').show();
         }else{
             $('[name="agents_laps_other"]').hide();
         }
  });

     $('[name="admission_manager"]').change(function(){
         if($(this).val() == 1000){
             $('[name="admission_managers_other"]').show();
         }else{
             $('[name="admission_managers_other"]').hide();
         }
  });

 //$('[name="agent_laps"]').trigger("chosen:updated");

 $('[name="qualification_1_other"]').hide();
 $('[name="agents_laps_other"]').hide();
 $('[name="admission_managers_other"]').hide();

     $('[name="qualification_1"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_1_other"]').show();
         }else{
             $('[name="qualification_1_other"]').hide();
         }
  });



 $('[name="qualification_2"]').append("<option value='0'>Other</option>");
 $('[name="qualification_2"]').trigger("chosen:updated");
 $('[name="qualification_2_other"]').hide();

     $('[name="qualification_2"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_2_other"]').show();
         }else{
             $('[name="qualification_2_other"]').hide();
         }
  });

 $('[name="qualification_3"]').append("<option value='0'>Other</option>");
 $('[name="qualification_3"]').trigger("chosen:updated");
 $('[name="qualification_3_other"]').hide();

     $('[name="qualification_3"]').change(function(){
         if($(this).val() == 0){
             $('[name="qualification_3_other"]').show();
         }else{
             $('[name="qualification_3_other"]').hide();
         }
  });



     $('#admssion_manager').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/admission_manager/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#admssion_manager').val()},
                   success: function (data) {console.log('success');
                   $('[name="agent_names"]').empty();

                       var model = $('[name="agent_names"]');
                         model.empty();
                          model.append("<option value=''>Not Applicable</option>");

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });



                         $('[name="agent_names"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});

     $('#agent_type').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/agent_type/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#agent_type').val()},
                   success: function (data) {console.log('success');
                   $('[name="admssion_manager"]').empty();

                       var model = $('[name="admssion_manager"]');
                         model.empty();
                          model.append("<option value='0'>Not Applicable</option>");

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });

                         $('[name="admssion_manager"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});



     $('#intake_year').change(function(){

 				$.ajax({
                   url: "{{ url('index.php/intake_month/dropdown')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#intake_year').val()},
                   success: function (data) {
                   $('[name="intake_month"]').empty();

                       var model = $('[name="intake_month"]');
                         model.empty();

                         $.each(data, function(index, element) {

                             model.append("<option value='"+ index +"'>" + element + "</option>");
                         });
                         $('[name="intake_month"]').trigger("chosen:updated");
                        },
                           type: "GET"

                 });
 		});


 });


/*

 $( "#add_more_qualifications" ).click(function() {
       $( "#qualification_container_2" ).show( "slow", function() { });
       $( "#add_more_qualifications" ).hide();
   });

 $( "#add_more_qualifications_2" ).click(function() {
       $( "#qualification_container_3" ).show( "slow", function() { });
       $( "#add_more_qualifications_2" ).hide();
   });
*/

 $( "#add_more_occupations_1" ).click(function() {
       $( "#occupation_container_2" ).show( "slow", function() { });
       $( "#add_more_occupations_1" ).hide();
   });

 $( "#add_more_occupations_2" ).click(function() {
       $( "#occupation_container_3" ).show( "slow", function() { });
       $( "#add_more_occupations_2" ).hide();
   });


 $( "#san" ).keydown(function() {
     $('#top_san_display').html('SAN : '+this.value);
  // $('#top_san_display').append($(this).val());

 });
 $( "#ls_student_number" ).keydown(function() {
     $('#top_lssn_display').html('LS SN : '+this.value);
  // $('#top_lssn_display').append($(this).val());
 });
 function checkSanAvailability(){
 	if(!isEmpty($('#san').val())){
 					$.ajax({
                   url: "{{ url('checkSanAvailability')}}",
                   data: {token: $('[name="_token"]').val(),option: $('#san').val()},
                   success: function (data) {
                   console.log(data);
 				  if(data =='Available'){
 					  $('#san').removeClass("parsley-error").addClass( "parsley-success" );
 					  $('#san_not_available').hide();

 				  }else{
 					  $('#san').removeClass("parsley-success").addClass( "parsley-error" );
 					   $('#san_not_available').show();
 				  }
                        },
                           type: "GET"

                 });}
 }
  $('#san_not_available').hide();

  function isEmpty(str) {
     // return (!str || 0 === str.length);
     return (!str || /^\s*$/.test(str));
  }

 </script>

  {{ HTML::script('js/chosen/chosen.jquery.min.js'); }}
   <!-- parsley -->
 {{ HTML::script('js/parsley/parsley.min.js'); }}
 {{ HTML::script('js/parsley/parsley.extend.js'); }}
 <style>
 #san.parsley-success{
   color: #468847;
   background-color: #DFF0D8;
   border: 1px solid #D6E9C6;
 }

 #san.parsley-error {
   color: #B94A48;
   background-color: #F2DEDE;
   border: 1px solid #EED3D7;
 }

 </style>
 @stop