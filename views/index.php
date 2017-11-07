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
      </header>Ï
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

            <div id="register" class="animate form">
              <form  action="signup.php" autocomplete="on" method="post"> 
                <h1> Sign up </h1> 
                <p> 
                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                </p>
                <p> 
                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                </p>
                <p> 
                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="eg. X8df!90EO"/>
                </p>
                <p> 
                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                </p>

                <!-- extra: check password matching -->
                <p class="signin button"> 
                  <input type="submit" value="Sign up"/> 
                </p>
                <p class="change_link">  
                  Already a member ?
                  <a href="#tologin" class="to_register"> Go and log in </a>
                </p>
              </form>
            </div>
        
          </div>
        </div>  
      </section>
    </div>
  </body>
</html>
