<nav class="navbar navbar-inverse" role="navigation">
   <div class="container-fluid">
      <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Go Babbe</a>
          </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    @if(Auth::check())
                        <form class="navbar-form navbar-left" style="margin-left: 300px;" role="search">
                                <div class="form-group">
                                  <input type="text" style="width: 500px; color: #777777; outline: none;" class="form-control" placeholder="Find... john Doe">
                                </div>

                              </form>
                    @endif

                  <ul class="nav navbar-nav navbar-right">
                  @if(Auth::check())
                  <li><a href="register"><i class="fa fa-cog fa-lg"></i></a></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-lg"></i></a></li>

                  @else
                   <li><a href="login">Login</a></li>
                                       <li><a href="register">Register</a></li>
                   @endif

                   <li><a href="contact">Contact</a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->

    </div>
</nav>