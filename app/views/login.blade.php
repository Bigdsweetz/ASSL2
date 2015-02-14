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
    <h1>Loggin in to The Opinion Point!</h1>
    <article class="post">
    <h2>Please login</h2>
    {{ Form::open(array('url' => 'login')) }}
    {{Form::label('username', 'Username')}}
    {{Form::text('username')}}
    {{Form::label('password', 'Password')}}
    {{Form::password('password')}}

    {{Form::submit('Login')}}

    {{Form::close()}}
    </article>
    </article>
    <aside>
    <section class="info">
    <div class="widget">
    <h2>Search</h2>
    <form>
    <input type="search" id="searchField" placeholder="Enter keyword(s)" />
    <input type="submit" name="search" id="search" value="">
    </form>
    </div>
    <div class="widget">
    <h2>&nbsp;</h2>
    </div>
    </section>
    </aside>
    </div>
    <footer id="pageFooter" class="cf">
      <nav class="footerNav">
        <section class="col">
          <div class="col2">
          </div>
  </section>
    </nav>
    <p>&nbsp;</p>
    </footer>
    </body>
    </html>
