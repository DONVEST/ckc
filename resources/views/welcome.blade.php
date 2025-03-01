<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/boot.css')}}">
    <title> CKC Alter Knight Association</title>
</head>
<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
    <!-- Register -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-6">
                <form action="{{route('print')}}" method="post" enctype="multipart/form-data"
                    class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                    @csrf


                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="#" class="">
                            <h3 class="text-black align-items-center">Membership Renewal Form</h3>
                        </a>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name"
                            value="" id="floatingText" placeholder="Surname Firstname Lastname">
                        <label for="floatingText">Full Names:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="state"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">State:</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="town"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Town: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="school"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">School:</label>
                    </div>


                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="class"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Class/Level: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="date"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Date of Birth: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="parent_name"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Name of Parents/Guardian: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="father_number"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Father's number: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="mother_number"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Mother's number: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="personal_number"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Personal number: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <p for="floatingSelect">I have received sacrament of</p>
                        <select class="form-select" name="sacraments" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected value="Yes">
                            </option>
                            <option selected disabled>Please Select an option</option>
                            <option value="None">None</option>
                            <option value="Baptism only">Baptism only</option>
                            <option value=" Baptism/Holy_Communion">Baptism and Holy_Communion</option>
                            <option value="Baptism/Holy_Communion/Confirmation">Baptism, Holy_Communion and Confirmation</option>
                        </select>
                        
                    </div>
                    
                    <div class="form-floating mb-3">
                        <p for="floatingSelect">Are you willing to assist in the sacred liturgy</p>
                        <select class="form-select" name="sacred_liturgy" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected value="Yes">
                            </option>
                            <option selected disabled>Please Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
                    </div>

                    <div class="form-floating mb-3">
                        <p for="floatingSelect">Are you ready to render personal participate in liturgy</p>
                        <select class="form-select" name="personal_liturgy" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected value="Yes">
                            </option>
                            <option selected disabled>Please Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
                    </div>

                    <div class="form-floating mb-3">
                        <p for="floatingSelect">Are you ready to obey the executive arms of the association</p>
                        <select class="form-select" name="obey_executive" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected value="Yes">
                            </option>
                            <option selected disabled>Please Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="occupation"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Occupation: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="address"
                            value="" id="floatingText" placeholder="">
                        <label for="floatingText">Address: </label>
                    </div>

                    <div class="form-floating mb-3">
                        <p for="floatingSelect">Do you agree to participate in all activities of the association</p>
                        <select class="form-select" name="agreement" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected value="Yes">
                            </option>
                            <option selected disabled>Please Select an option</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        
                    </div>

                    <button type="submit" name="submitButton" class="btn btn-primary py-3 w-100 mb-4 register-btn">Upload & Print Form</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Register End -->
    </div>
</div>

@if (session('message'))
    @foreach (session('message') as $msg)
      <script>
          window.onload = function(){
            Swal.fire({
            title: "{{$msg[0]}}",
            text: "{{$msg[1]}}",
            icon: "{{$msg[2]}}"
            })
          }
      </script>
    @endforeach
@endif 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
