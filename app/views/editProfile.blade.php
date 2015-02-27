<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Opinion Point Log in Page</title>
    <link rel="stylesheet" type="text/css" href="_css/main.css">
    <meta name="viewport" content="initial-scale=1.0" />
    </script>
    </head>
    <body id="blogPage">
    <header class="blogHeader pageHeader">
    <h1>Welcom to the Opinion Point <a href="/index.htm" title="home"></a></h1>

    <nav id="pageNav" class="cf">
    <ul>
    <li>{{ HTML::link('profile', 'PROFILE') }}</li>
    <li>{{ HTML::link('blog', 'BLOG') }}</li>
    <li>{{ HTML::link('chat', 'CHAT') }}</li>
    <li>{{ HTML::link('logout', 'LOGOUT') }}</li>
    </ul>
    </nav>
    </header>
    <div id="contentWrapper">
    <article id="mainContent">
    <h1>Edit {{Auth::user()->username}} Profile page</h1>

    {{ Form::open(array('url' => 'editProfile')) }}

    {{Form::label('about', 'tell us about you')}}
    {{Form::textarea('about')}}
    {{Form::submit('update')}}

    {{Form::close()}}


    </article>
    </article>
    <aside>
    <section class="info">
    <!-- No need for search at this time...will add later
    <div class="widget">
    <h2>Search</h2>
    <form>
    <input type="search" id="searchField" placeholder="Enter keyword(s)" />
    <input type="submit" name="search" id="search" value="">
    </form>
    </div> -->
    <div class="widget">
    <h2>Hot Links</h2>
    <ul>
    <li><a href="#">Anime Con's</a></li>
    <li><a href="#">Winter Manga List</a></li>
    <li><a href="#">Feburary Releases</a></li>
    </ul>
    </div>
    <div class="widget">
    <h2>Blog Archive</h2>
    <ul>
    <li><a href="#">February 2015</a></li>
    <li><a href="#">January 2015</a></li>
    <li><a href="#">December 2014</a></li>
    <li><a href="#">November 2014</a></li>
    </ul>
    </div>
    <div class="widget">
    <h2>Categories</h2>
    <ul>
    <li><a href="#">Games</a></li>
    <li><a href="#">Movies</a></li>
    <li><a href="#">Books</a></li>
    <li><a href="#">Cons</a></li>
    </ul>
    </div>
    </section>
    </aside>
    </div>
    <footer id="pageFooter" class="cf">
    <nav class="footerNav">
    <section class="col">
    <h3>About The Opinion Point</h3>
    <div class="col1">
    <ul>
    <li><a href="#" title="Our mission">Mission Statement</a></li>
    <li><a href="#" title="Humble Beginnings">Humble Beginnings</a></li>
    <li><a href="#" title="People who like us">People who like us</a></li>
    <li><a href="#" title="The Team">The Team</a></li>
    </div>
    <!--
    <div class="col2">
    <ul>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    </ul>
    </div> -->
    </section>

        <!-- Links to affiliate sites -->

    <section class="col">
    <h3>Other Sites</h3>
    <div class="col1">
    <ul>
    <li><a href="#" title="Twitter">Twitter</a></li>
    <li><a href="#" title="Facebook">Facebook</a></li>
    <li><a href="#" title="tumblr">tumblr</a></li>
    <li><a href="#" title="Deviant Art">Deviant Art</a></li>
    </ul>
    </div>
    <div class="col2">
    <ul>
    <li><a href="#" title="youtube">YouTube</a></li>
    <li><a href="#" title="Viemo">Viemo</a></li>
    <li><a href="#" title="Blogger">Blogger</a></li>
    <li><a href="#" title="Google +">Google +</a></li>
    </ul>
    </div>
    </section>
    <section class="col">
    <h3>Other Cool Sites</h3>
    <!--
    <div class="col1">
    <ul>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    <li><a href="#" title="place holder">place holder</a></li>
    </ul>
    </div> -->
    <div class="col2">
    <ul>
    <li><a href="#" title="Manga Fox">Manga Fox</a></li>
    <li><a href="#" title="Bleach Exile">Bleach Exile</a></li>
    <li><a href="#" title="Manga Town">Manga Town</a></li>
    <li><a href="#" title="Anime Eden">Anime Eden</a></li>
    </ul>
    </div>
    </section>
    </nav>
    <p>&copy;Copyright  The Opinion Point &amp; Design.  All rights reserved. <a href="#" title="privacy statement">Privacy Statement</a> |<a href="#" title="legal terms"> Legal Terms and Conditions</a> |<a href="#" title="Placeholder"> Place holder</a></p>
    </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="../../js/editProfile.js"></script>
    </body>
    </html>