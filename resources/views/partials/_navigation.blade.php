<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top " data-spy="affix" data-offset-top="60" data-offset-bottom="200">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">AFYA FITNESS</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav ">
        <li class="{{Request::is('/') ? "active" :''}}"><a href="/">Home</a></li>
        <li class="{{Request::is('article') ? "active" :''}}"><a href="/article">Articles</a></li>
        <li class="{{Request::is('about') ? "active" :''}}"><a href="/about">About</a></li>
        <li class="{{Request::is('contact') ? "active" :''}}"><a href="/contact">Contact</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{route('posts.index')}}">Articles</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Logout</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
