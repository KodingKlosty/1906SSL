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
            <ul class="navbar-nav ml-auto">
                <li class='nav-item'><a class='nav-link' href='signInReq'>Sign In</a></li>
            </ul>
        </div>
    </nav>
    <div role="main" class="container">
        <h1>Successful!</h1>
        <p>Thanks for submitting your information! We will be in touch soon!</p>
    </div>
</body>