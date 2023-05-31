@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Supp</h1>
    <div class="row justify-content-center">
        <div class="col-md-12" style="padding-top: 0px;">
            <div class="card">
                <div class="card-header">{{ __('Output Result') }}</div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">fname</th>
                                <th scope="col">mname</th>
                                <th scope="col">lname</th>
                                <th scope="col">provience</th>
                                <th scope="col">district</th>
                                <th scope="col">muncipality</th>
                                <th scope="col">tole</th>
                                <th scope="col">ward</th>
                                <th scope="col">phoneno</th>
                                <th scope="col">citizenship_no</th>
                                <th scope="col">email_address</th>
                                <th scope="col">driving_license</th>
                                <th scope="col">college_name</th>
                                <th scope="col">location</th>
                                <th scope="col">start_year</th>
                                <th scope="col">completion_year</th>
                                <th scope="col">major</th>
                                <th scope="col">gname</th>
                                <th scope="col">grelation</th>
                                <th scope="col">gaddress</th>
                                <th scope="col">gphoneno</th>
                                <th scope="col">gsignature</th>
                                <th scope="col">rname</th>
                                <th scope="col">rposition</th>
                                <th scope="col">rcollegename</th>
                                <th scope="col">rsignature</th>
                                <th scope="col">signature</th>
                                <th scope="col">ppsizephoto</th>




                            </tr>
                        </thead>


                        <tbody>

                            @foreach ($students as $student)



                            <tr>
                                <th scope="col">{{$student->student}}</th>
                                <td scope="row">{{$student->fname}}</td>
                                <td scope="row">{{$student->mname}}</td>
                                <td scope="row">{{$student->lname}}</td>
                                <td scope="row">{{$student->provience}}</td>
                                <td scope="row">{{$student->district}}</td>
                                <td scope="row">{{$student->muncipality}}</td>
                                <td scope="row">{{$student->tole}}</td>
                                <td scope="row">{{$student->ward}}</td>
                                <td scope="row">{{$student->phoneno}}</td>
                                <td scope="row">{{$student->citizenship_no}}</td>
                                <td scope="row">{{$student->email_address}}</td>
                                <td scope="row">{{$student->driving_license}}</td>
                                <td scope="row">{{$student->college_name}}</td>
                                <td scope="row">{{$student->location}}</td>
                                <td scope="row">{{$student->start_year}}</td>
                                <td scope="row">{{$student->completion_year}}</td>
                                <td scope="row">{{$student->major}}</td>
                                <td scope="row">{{$student->gname}}</td>
                                <td scope="row">{{$student->grelation}}</td>
                                <td scope="row">{{$student->gaddress}}</td>
                                <td scope="row">{{$student->gphoneno}}</td>
                                <td scope="row">{{$student->gsignature}}</td>
                                <td scope="row">{{$student->rname}}</td>
                                <td scope="row">{{$student->rposition}}</td>
                                <td scope="row">{{$student->rcollegecompany}}</td>
                                <td scope="row">{{$student->rphoneno}}</td>
                                <td scope="row">{{$student->rsignature}}</td>
                                <td scope="row">{{$student->signature}}</td>
                                <td scope="row">{{$student->ppsizephoto}}</td>
                                <td>

                                </td>

                            </tr>

                            @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('js')

@stop