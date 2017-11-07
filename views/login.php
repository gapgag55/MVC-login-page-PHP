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
        <?php if ($data['authenticated']): ?>
          <?php Redirect::to('/welcome'); ?>
        <?php endif; ?>

        <?php $_SESSION['errormsg'] = 'Wrong username or password'; ?>

        <p>Wrong username or password!</p>
        <p>Please go back to re enter them again</p>
        <a href="/" style="margin: 20px; display: block;">Go Back to Login</a>
      </div>
    </body>
</html>
