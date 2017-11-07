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
          <span>Click <strong>"Login"</strong> to see the form switch</span>
          </nav>
      </header>
      <section>				
        <div id="container_demo" >
          <div id="wrapper">
            <div id="login" class="animate form">
              <form action="/signup" autocomplete="on" method="post" onsubmit="return check()"> 
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
                <p style="color: red;"><?= $data['error']; ?></p>
                <p class="signin button"> 
                  <input type="submit" value="Sign up"/> 
                </p>
                <p class="change_link">  
                  Already a member ?
                  <a href="/" class="to_register"> Go and log in </a>
                </p>
              </form>
            </div>
        
          </div>
        </div>  
      </section>
    </div>
  </body>
</html>
