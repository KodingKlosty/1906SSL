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
              echo "<li class='nav-item'><a class='nav-link' href='/'>$data[$x]</a></li>";
            }
            else{
              echo "<li class='nav-item'><a class='nav-link' href='$data[$x]'>$data[$x]</a></li>";
            }
        }
      ?>
    </ul>
    <?if(@$_SESSION["loggedin"] && @$_SESSION["loggedin"]==1){?>
    <ul class="navbar-nav ml-auto">
      <li class='nav-item'><a class='nav-link' href='/welcome/profile'>Profile</a></li>
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
    <h1>Contact</h1>
    <div class="shadow p-3 mb-5 rounded">
        <!-- Captcha -->
        <?
    function create_image($cap)
    {
        unlink("/assets/image1.png");
        global $image;
        $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");
        $background_color = imagecolorallocate($image, 255, 255, 255);
        $text_color = imagecolorallocate($image, 0, 255, 255);
        $line_color = imagecolorallocate($image, 64, 64, 64);
        $pixel_color = imagecolorallocate($image, 0, 0, 255);
        imagefilledrectangle($image, 0, 0, 200, 50, $background_color);
    
        for ($i = 0; $i < 3; $i++) 
        {
            imageline($image, 0, rand() % 50, 200, rand() % 50, $line_color);
        }
        for ($i = 0; $i < 1000; $i++) 
        {
            imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
        }
        $text_color = imagecolorallocate($image, 0, 0, 0);
        ImageString($image, 22, 30, 22, $cap, $text_color);
        imagepng($image, "/assets/image1.png");
    }   

        create_image($data["cap"]);
        echo "<img src='/assets/image1.png'>";
    
    ?>
      <form action="/welcome/contactSubmit" method="POST">
      <div class="form-group">
        <p>Your Contact Information</p>
        <input type='text' name='usersName' id='usersName' placeholder='Name' required>
        <input type='email' name='usersEmail' id='usersEmail' placeholder='Email'required>
      </div>
      <div class="form-group">
        <p> Please select perferred sex </p>
          <input type='radio' name='sex' value='male'>Male
          <input type='radio' name='sex' value='female'>Female
          <input type='radio' name='sex' value='either'>Doesn't Matter I just want a Husky
      </div>
      <div class="form-group">
      <p> Please select a primary color </p>
          <label for="ColorSelect">Primary Color</label>
          <select class="form-control" id="ColorSelect">
            <option>White</option>
            <option>Black</option>
            <option>Brown</option>
            <option>Tan</option>
            <option>Gray</option>
          </select>
        </div>
        <p> Please leave us a note if you would like. </p>
        <div class="form-group">
          <label for="userNotes">Your Special Note</label>
          <textarea class="form-control" id="userNotes" rows="3"></textarea>
        </div>
        <div>
        <label for="exampleInputEmail1">Enter Captcha </label>
        <input name="captcha" type="captcha" id="captcha"  placeholder="">
        </div>
        <button type='submit' class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

</div><!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>