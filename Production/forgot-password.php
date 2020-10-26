<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="../bootstrap-4.4.1-dist/css/bootstrap.min.css">
    <link rel='stylesheet' href='common-footer.css'>
    <link rel='stylesheet' href='../style.css'>
    <link rel='stylesheet' href='login-form.css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Muli|PT+Sans|Roboto+Mono|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

</head>
<body>`

<nav class="navbar navbar-expand-lg navbar-light navie">
    <a class="navbar-brand" href="/"><img class="log"src="../assets/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="../index.php">HOME <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#about">ELECTIONS</a>
        <a class="nav-item nav-link" href="./login.php">LOGIN</a>
      </div>
    </div>
  </nav>

    <div class='page-wrapper'>
  <div class="headline">Forgot Password</div>
  <div class="form-div container">
  
    <form>
        <div class="form-row ">
          <div class="col-md-12 mb-3">
            <label for="validationDefault01">Email*</label>
            <input type="email" class="form-control" id="validationDefault01" placeholder="Email" required>
          </div>
        </div>
        
        <button class="btn btn-primary" type="submit">Submit</button>
        <br/>
        <br/>
        <span class='forgot'>Submitting this will send reset link to your email!</a>
        <br/>
        * = required
    </span>
      </form>
      
    </div>
    
    </div>


    <?php include 'common-footer.php'; ?>
    
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/navshrink.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
       
    <script src="../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
</body>
</html>