<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\student;

class TestController extends Controller
{
    public function getstudent()
    {
        return view('intern.student');
    }
    public function poststudent(Request $request)
    {
        $fname = $request->input('fname');
        $mname = $request->input('mname');
        $lname = $request->input('lname');
        $provience = $request->input('provience');
        $district = $request->input('district');
        $muncipality = $request->input('muncipality');
        $tole = $request->input('tole');
        $ward = $request->input('ward');
        $phoneno = $request->input('phoneno');
        $citizenship_no = $request->input('citizenship_no');
        $email_address = $request->input('email_address');
        $driving_license = $request->input('driving_license');
        $college_name = $request->input('college_name');
        $location = $request->input('location');
        $start_year = $request->input('start_year');
        $completion_year = $request->input('completion_year');
        $major = $request->input('major');
        $gname = $request->input('gname');
        $grelation = $request->input('grelation');
        $gaddress = $request->input('gaddress');
        $gphoneno = $request->input('gphoneno');
        $gsignature = $request->input('gsignature');
        $rname = $request->input('rname');
        $rposition = $request->input('rposition');
        $rcollegecompany = $request->input('rcollege/company');
        $rphoneno = $request->input('rphoneno');
        $rsignature = $request->input('rsignature');
        $signature = $request->input('signature');
        $ppsizephoto = $request->input('ppsizephoto');




        $Intern = new student;
        $Intern->fname = $fname;
        $Intern->mname = $mname;
        $Intern->lname = $lname;
        $Intern->provience = $provience;
        $Intern->district = $district;
        $Intern->muncipality = $muncipality;
        $Intern->tole = $tole;
        $Intern->ward = $ward;
        $Intern->phoneno = $phoneno;
        $Intern->citizenship_no = $citizenship_no;
        $Intern->email_address = $email_address;
        $Intern->driving_license = $driving_license;
        $Intern->college_name = $college_name;
        $Intern->location = $location;
        $Intern->start_year = $start_year;
        $Intern->completion_year = $completion_year;
        $Intern->major = $major;
        $Intern->gname = $gname;
        $Intern->grelation = $grelation;
        $Intern->gaddress = $gaddress;
        $Intern->gphoneno = $gphoneno;
        $Intern->gsignature = $gsignature;
        $Intern->rname = $rname;
        $Intern->rposition = $rposition;
        $Intern->rcollegecompany = $rcollegecompany;
        $Intern->rphoneno = $rphoneno;
        $Intern->rsignature = $rsignature;
        $Intern->signature = $signature;
        $Intern->ppsizephoto = $ppsizephoto;

        $Intern->save();
    }
    public function getanswer()
    {
        $data = [
            'students' => Student::all()
        ];
        return view('intern.answer', $data);
    }
}
