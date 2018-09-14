<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <title>Lojão2</title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css" />
    <link rel="stylesheet" href="libs/css/style.css" />
    <style>
    body {
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #eee;
    }

    .form-signin {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
      margin-bottom: 10px;
    }
    .form-signin .checkbox {
      font-weight: normal;
    }
    .form-signin .form-control {
      position: relative;
      height: auto;
      -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }

    </style>
  
</head>
<body>
 
    <div class="container">
     <form action="controller/login.php" method="POST" class="form-signin">
            <h2 class="form-signin-heading">Entrar no Lojão2</h2>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email" required autofocus>
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
            <label>
                <a href=#>Esqueci minha senha!</a>
              </label>
             <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
          </form>

    </div> <!-- /container -->

  </body>
</html>
