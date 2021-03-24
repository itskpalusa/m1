<!DOCTYPE html>

<!-- You must have a homepage with a modern design that includes
basic welcome information and contains useful links to get to
the other pages on the site. -->

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../assets/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>GoreTex - Home</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Goretex Professionals LLC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="color-generator.php">Color Generator</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <h1 class='text-center'>Goretex Professionals LLC
            <img src='https://i.pinimg.com/originals/ca/57/5b/ca575bc595713822b92880db4219881a.png' alt='logo'
                width='32'>
        </h1>
    </header>

    <div class="container" id="content">

        <div class="text-center" id=welcome>
            <h1>Outstanding Designers & Website Developers</h1>
            <p>Our team has been crafting beautiful websites since 2021. We create sites that are lightning fast and
                tailored to your needs.</p>
        </div>

        <div class="text-center" id=contact>
            <!-- the email doesn't get sent anywhere -->
            <form action="index.php" method="post">
                <label for="email">
                    <p>Contact us for a free consultation!</p>
                </label>
                <br /> <input type="email" id="email" name="email" placeholder="Enter your email">
                <input type="submit" value="submit">
            </form>
        </div>
        <?php
    if (isset($_POST['email'])) {
      echo "Thank you! You'll hear form us shortly.";
    }
    ?>
    </div>
    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-center">Copyright "GoreTex Professionals LLC" 2021</span>
        </div>
    </footer>
</body>

</html>