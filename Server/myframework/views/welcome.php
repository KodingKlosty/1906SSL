<body>
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
                echo "<li class='nav-item'><a class='nav-link' href='welcome'>$data[$x]</a></li>";
            }
            elseif($x == 4)
            {
              echo "<li class='nav-item'><a class='nav-link' href='/api/getApi'>API</a></li>";
            }
            else{
                echo "<li class='nav-item'><a class='nav-link' href='welcome/$data[$x]'>$data[$x]</a></li>";
            }
        }
      ?>
    </ul>
    <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]=="1"){?>
    <ul class="navbar-nav ml-auto">
      <li class='nav-item'><a class='nav-link' href='/welcome/profile'>Profile</a></li>
      <li class="nav-item"><a class='nav-link' href='/data'>Database</a></li>
      <li class='nav-item'><a class='nav-link' href='#'>Logout</a></li>
    </ul>
      <?} else {?>
    <ul class="navbar-nav ml-auto">
        <li class='nav-item'><a class='nav-link' href='welcome/signInReq'>Sign In</a></li>
    </ul>
    <?}?>
  </div>
</nav>

<div role="main" class="container">

  <div class="starter-template">
    <h1>Welcome Paige</h1>
    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover" data-content="This is a popover comment!">Pop Me!</button>
  </div>

</div><!-- /.container -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Popover Script -->
  <script> $(function () { $('[data-toggle="popover"]').popover() })</script>

</body>

