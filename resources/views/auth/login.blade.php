
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<style>
    div .errors
    {
      color: rgb(214, 50, 50);
    }
  </style>
<body>
    <div class="container" style = "margin-top:100px;margin-left:500px"  >
        <div class="card" style="width: 28rem;">
            <img src="img/logo3.png" style="width: 6rem;class="card-img-top" alt="...">
            <div class="card-body">
                <h4 class="card-title"><b>Login to your Account ? </b></h5>
              <form action ="authenticate" method ="POST" >
                <div class="mb-2">
                  <label for="exampleInputEmail1" class="form-label">Email</label><br>
                  <input type="email" class="form-control" id="exampleInputEmail1" name ='email' aria-describedby="emailHelp">
                  @if ($errors -> first('email'))
                    <div class="errors">
                        {!!  $errors -> first('email')!!}
                    </div>
                  @endif
                </div>
                <div class="mb-2">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name= "password">
                  @if ($errors -> first('password'))
                    <div class="errors">
                        {!!  $errors -> first('password')!!}
                    </div>
                  @endif
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="checkbox">
                  <label class="form-check-label" for="exampleCheck1" id="checkbox">show password</label>
                </div>
                    <input type="submit" class="btn btn-primary" value= "submit" name="login">
                    <input type="reset" class="btn btn-secondary" value= "reset" name="reset">
                    @if ( !$errors -> first('email') && !$errors -> first('password') )
                        <div class="errors">
                             {!! implode('',$errors -> all('<li>:message</li>'))!!}
                        </div>
                    @endif
                    @csrf
              </form>
            </div>
                <div class="card-body">
                   <a href="#" class="card-link" style ="color:black">Forgot password </a>
                </div>
        </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#checkbox').on('click', function(){
            $('#password').attr('type',$('#checkbox').prop('checked')==true?"text":"password");
        });
    });
</script>