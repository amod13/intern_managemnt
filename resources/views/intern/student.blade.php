@extends('layouts.app')

@section('content')

<style>
    .table td input:focus-within,
    .table td input {
        background-color: transparent;
        border: none;
        outline: none;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Internship Form') }}</div>

                <div class="card-body" style="">
                    <form method="POST" action="{{route('intern.getstudent')}}">
                        @csrf
                        <div class="form-group">
                            <label for="fname">Fname</label>
                            <input type="text" name="fname" id="fname">

                            <label for="mname">Mname</label>
                            <input type="text" name="mname" id="mname">

                            <label for="lname">Lname</label>
                            <input type="text" name="lname" id="lname">
                        </div>

                        <div class="form-group">
                            <label for="provience">Provience</label>
                            <select class="" id="inlineFormCustomSelect" name="provience" id="provience">
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>

                            </select>
                            <label for="district">District</label>
                            <input type="text" name="district" id="district">

                            <label for="muncipality">Muncipality</label>
                            <input type="text" name="muncipality" id="muncipality">
                            <br>
                            <label for="tole">Tole</label>
                            <input type="text" name="tole" id="tole">

                            <label for="ward">Ward</label>
                            <input type="number" name="ward" id="ward">
                        </div>

                        <div class="form-group">
                            <label for="phoneno">Phone-no</label>
                            <input type="number" name="phoneno" id="phoneno">

                            <label for="citisenship_no">Citizenship-no</label>
                            <input type="text" name="citizenship_no" id="citizenship_no">
                        </div>

                        <div class="form-group">
                            <label for="email_address">Email-address</label>
                            <input type="email" name="email_address" id="email_address">

                            <label for="driving_license">Driving-License</label>
                            <input type="radio" name="driving_license" id="drivinglicense" value="Y">Yes
                            <input type="radio" name="driving_license" id="drivinglicense" value="N"> NO
                        </div>
                </div>

                <button>EDUCATION</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">College-Name</th>



                            <th scope="col">Location</th>


                            <th scope="col">Start-Year</th>


                            <th scope="col">Completion-Year</th>


                            <th scope="col">Major</th>


                        </tr>
                    </thead>
                    <tbody class="table">
                        <tr>
                            <td style="padding: 0;" scope="row"><input type="text" name="college_name" id="college_name" cols="12" rows="2" style="border: none; resize: none; overflow:hidden;width:132px "></td>
                            <td scope="row"><input type="text" name="location" id="location"></td>
                            <td scope="row"><input type="number" name="start_year" id="start_year"></td>
                            <td scope="row"><input type="number" name="completion_year" id="completion_year"></td>
                            <td scope="row"><input type="text" name="major" id="major"></td>

                        </tr>
                    </tbody>
                </table>

                <button>GUARDIAN DETAILS</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Relation</th>
                            <th scope="col">Address</th>
                            <th scope="col">Phoneno</th>
                            <th scope="col">Signature</th>


                        </tr>
                    </thead>
                    <tbody class="table">
                        <tr>
                            <td scope="row"><input type="text" name="gname" id="gname"></td>
                            <td scope="row"><input type="text" name="grelation" id="grelation"></td>
                            <td scope="row"><input type="text" name="gaddress" id="gaddress"></td>
                            <td scope="row"><input type="number" name="gphoneno" id="gphoneno"></td>
                            <td scope="row"><input type="file" name="gsignature" id="gsignature" value="Signature">
                            </td>




                        </tr>
                    </tbody>
                </table>


                <button>REFERENCES</button>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>


                            <th scope="col">Position</th>


                            <th scope="col">College/Company</th>


                            <th scope="col">Phoneno</th>

                            <th scope="col">Signature</th>

                        </tr>
                    </thead>
                    <tbody class="table" name>
                        <tr>
                            <td scope="row"><input type="text" name="rname" id="rname"></td>
                            <td scope="row"><input type="text" name="rposition" id="rposition"></td>
                            <td scope="row"><input type="text" name="rcollege/company" id="rcollege/company"></td>
                            <td scope="row"><input type="number" name="rphoneno" id="rphoneno"></td>
                            <td scope="row"><input type="file" name="rsignature" id="rsignature" value="Signature"></td>
                        </tr>
                    </tbody>
                </table>


                <div class="d-flex">
                    <input type="checkbox" style="margin-top:-60px;" name="checkbox" id="checkbox">
                    <p>
                        I hereby declare that all the information provided in this intership form is true,accurate,and complete to the best of my knowledge and belief.I will fully obey
                        the rules and regulation of the company and I understand that any false or misleading information provided may result in the rejection of my application or
                        termination of my intership.
                    </p>
                </div>

                <div class="d-flex justify-content-between">
                    <div>

                        <input type="file" name="signature" id="signature" value="signature"><br>
                        <div style="height:2px; width:100px; border:1px solid black;margin-top:15px;"></div>
                        <label for="signature">Signature</label>
                    </div>
                    <div>

                        <input type="file" name="ppsizephoto" id="ppsizephoto" style="height:90px;width:90px; border:solid black;margin-right:30px;font-size:15px;"><br>
                        <Label class="ml-4">Photo</Label>
                    </div>



                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
</div>
@endsection