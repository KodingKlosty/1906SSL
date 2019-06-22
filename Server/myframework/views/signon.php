<?php
  $_SESSION["loggedin"]="0";
  // Log in check

  
?>
<body class="text-center">
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/">PLH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
            <?
                for($x=0; $x < count($data); $x++)
                {
                    if($x == 0)
                    {
                    echo "<li class='nav-item'><a class='nav-link' href='/'>$data[$x]</a></li>";
                    }
                    else{
                    echo "<li class='nav-item'><a class='nav-link' href='$data[$x]'>$data[$x]</a></li>";
                    }
                }
            ?>
            </ul>
            <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]=="1"){?>
    <ul class="navbar-nav ml-auto">
      <li class='nav-item'><a class='nav-link' href='/profile'>Profile</a></li>
      <li class='nav-item'><a class='nav-link' href='#'>Logout</a></li>
    </ul>
      <?} else {?>
    <ul class="navbar-nav ml-auto">
        <li class='nav-item'><a class='nav-link' href='/welcome/signInReq'>Sign In</a></li>
    </ul>
    <?}?>
        </div>
    </nav>
<span style="color:red"><?=@$_REQUEST["msg"]?$_REQUEST["msg"]:'';?> </span>
<form class="form-signin shadow p-3 mb-5 rounded" method="POST" action="/auth/login">
  <img class="mb-4" src="https://via.placeholder.com/150" alt="" width="75" height="75">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address">
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password">
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" name="submit" value="submit" type="submit" >Sign in</button>
  <p class="mt-5 mb-3 text-muted">Pagie's Lil Huskies |  &copy; 2018-2019</p>
</form>

</div><!-- /.container -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- ajax submit script -->
  <script>
    $("#ajaxbutton").click(function(){
        $.ajax({
            method:"POST",
            url: "/welcome/ajaxParms",
            data:{"inputEmail":$("#inputEmail").val(),"inputPassword":$("#inputPassword").val()},
            success:function(msg){
                if(msg =="Welcome"){
                    alert("Login Successful");
                }
                else{
                    alert("Login is invalid")
                }
            }
        })
    })
  </script>
</body>