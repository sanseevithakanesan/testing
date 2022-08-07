<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <style>
    div .errors{
        color: red;
    }
  </style>
  <body>
  <section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-12">
              <div class="card-body p-md-5 text-black">
                <form action="storeData" method="post" id="reggister_form" >
                 @csrf
                <h3 class="mb-5 text-uppercase">Registration form</h3>
                <div class="row">
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                       @if ($errors -> first('firstname'))
                            <div class="errors">
                                {!!  $errors -> first('firstname')!!}
                            </div>
                      @endif
                      <input type="text" id="form3Example1m" name="firstname" class="form-control form-control-lg" placeholder="Ex: Roy" />
                      <label class="form-label" for="form3Example1m">First name</label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      @if ($errors -> first('lastname'))
                            <div class="errors">
                                {!!  $errors -> first('lastname')!!}
                            </div>
                      @endif
                      <input type="text" id="form3Example1n" name="lastname" class="form-control form-control-lg" placeholder="Ex: Peter" />
                      <label class="form-label" for="form3Example1n">Last name</label>
                    </div>
                  </div>
                  <div class="col-md-4 mb-4">
                    <div class="form-outline">
                      @if ($errors -> first('phone'))
                            <div class="errors">
                                {!!  $errors -> first('phone')!!}
                            </div>
                      @endif
                      <input type="text" id="form3Example1n" name="phone" class="form-control form-control-lg" placeholder="Ex: 0762536956" />
                      <label class="form-label" for="form3Example1n">Phone Number</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="col-md-8 mb-4">
                  <div class="form-outline ">
                    @if ($errors -> first('Email'))
                            <div class="errors">
                                {!!  $errors -> first('Email')!!}
                            </div>
                      @endif
                    <input type="email" id="form3Example8" name="Email" class="form-control form-control-lg" placeholder="Ex: xlents@gamil.com" />
                    <label class="form-label" for="form3Example8">Email Address</label>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                    @if ($errors -> first('gender'))
                    <div class="errors">
                        {!!  $errors -> first('gender')!!}
                    </div>
                 @endif
                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                  <h6 class="mb-0 me-4">Gender: </h6>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="Female" />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>
                  <div class="form-check form-check-inline mb-0 me-4">
                    <input class="form-check-input" type="radio" name="gender" id="maleGender" value="Male" />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>
                  <div class="form-check form-check-inline mb-0">
                    <input class="form-check-input" type="radio" name="gender" id="otherGender" value="Other" />
                    <label class="form-check-label" for="otherGender">Other</label><br>
                  </div>
                </div>
                </div>
                </div>
                <div class="row">
                    @if ($errors -> first('password'))
                        <div class="errors">
                            {!!  $errors -> first('password')!!}
                        </div>
                    @endif
                <div class="col-md-6 mb-4">
                  <div class="form-outline mb-6">
                    <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" />
                    <label class="form-label" for="password">Password</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline mb-6">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" placeholder="Confirm password" />
                    <label class="form-label" for="form3Example9">Confirm Password</label>
                  </div>
                </div>
                {{-- @if ($errors -> first('password'))
                    <div class="errors">
                        {!!  $errors -> first('password')!!}
                    </div>
                @endif --}}
                </div>
                <div class="row">
                <div class="form-outline mb-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="PasswordShow" />
                  <label class="form-check-label" for="flexCheckDefault">Show Password</label>
                </div>
                </div>
                </div>
                <div class="d-flex justify-content-end pt-3">
                  <button type="reset" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<script>
  $(document).ready(function(){
    $('#PasswordShow').click(function(){
        var password = $('#password');
        var confirmPassword = $('#password_confirmation')
        if(confirmPassword.attr('type') === 'password'){
            confirmPassword.attr('type','text');
        }else{
            confirmPassword.attr('type','password');
        }
        if(password.attr('type') === 'password'){
          password.attr('type','text');
        }else{
          password.attr('type','password');
        }
    });
  });
</script>

