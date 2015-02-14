<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>The Opinion Point</title>
<meta name="viewport" content="initial-scale=1.0" />
</script>
</head>
<body id="blogPage">
<header class="blogHeader pageHeader">
  <h1>&nbsp;</h1>
  <nav id="pageNav" class="cf"> </nav>
</header>
<div id="contentWrapper">
  <article id="mainContent">
    <h1>Sign Up!</h1>
    <article class="post">
      <h2>New User Registration</h2>
      {{ Form::open(array('url' => 'register')) }}
        {{Form::label('firstname', 'Your First Name')}}
        {{Form::text('firstname')}}
        {{Form::label('lastname', 'Your Last Name')}}
        {{Form::text('lastname')}}
        {{Form::label('username', 'Create a Username')}}
        {{Form::text('username')}}
        {{Form::label('email', 'Email Address')}}
        {{Form::text('email')}}
        {{Form::label('password', 'Create a password')}}
        {{Form::password('password')}}
        {{Form::submit('Sign Up')}}

      {{Form::close()}}
</article>
  </article>
  <aside>
    <section class="info">
      <div class="widget">
        <h2>&nbsp;</h2>
      </div>
    </section>
  </aside>
</div>
</body>
</html>
