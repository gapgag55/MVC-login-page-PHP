<!DOCTYPE html>
 <html>
  <head>
    <title>Login and Registration Form</title>
    <link rel="stylesheet" type="text/css" href="/static/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/animate-custom.css" />
  </head>
  <body>
    <div class="container">
      <header>
        <h1>Login and Registration Form <span>with HTML5 and CSS3</span></h1>
          <nav class="codrops-demos">
            <span>Click <strong>"Join us"</strong> to see the form switch</span>
          </nav>
      </header>
      <section>				
        <div id="container_demo" >
          <div id="wrapper">
            <div id="login" class="animate form">
              <form  action="/login" autocomplete="on" method="post"> 
                <h1>Log in</h1> 
                <p> 
                  <label for="username" class="uname" data-icon="u" > Your email or username </label>
                  <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                </p>
                <p> 
                  <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                  <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                </p>
                <!-- display error message when login failed -->
                <p class="errormsg"> 
                  <?= $_SESSION['errormsg']; ?>
                </p>
                <p class="login button"> 
                  <input type="submit" value="Login" /> 
                </p>
                <p class="change_link">
                  Not a member yet ?
                  <a href="/signup" class="to_register">Join us</a>
                </p>
              </form>
            </div>
          </div>
        </div>  
      </section>
    </div>
  </body>
</html>
