<div id="topbar">
    <div class="container">
        <div class="topbar-left">
            <div class="social">
                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" title="google plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" title="pinter"><i class="fa fa-pinterest-p"></i></a>
                <a href="#" title="rss"><i class="fa fa-rss"></i></a>
            </div>
            <!-- End Social -->
        </div>
        <!-- End topBar-left -->
        <div class="topbar-right">
            <div class="sign-in">
                <a href="#" title="#"><i class="icons icon-envelope"></i><span>example@gmail.com</span></a>
                <a href="#" title="wishlist"><i class="icon-heart icons"></i><span>Wishlist</span></a>
                <div class="search dropdown" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <i class="icons icon-magnifier dropdown-toggle"></i><span>Search</span>
                </div>

                @if (Auth::guest())
                    <a href="{{ route('login') }}" title="login"><i class="icon-user icons"></i><span>Login</span></a>
                    <a href="{{ route('register') }}" title="register"><i
                                class="icon-user icons"></i><span>Register</span></a>
                @else
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @endif
            </div>
        </div>
        <!-- End search -->
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
             aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"
                                                                                    aria-hidden="true"></i>
                        </button>
                        <h4 class="modal-title" id="myLargeModalLabel">Search Here</h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" class="form-control control-search"
                                   placeholder="Type & hit enter...">
                            <span class="input-group-btn">
                                                    <button class="btn btn-default button_search" type="button"><i
                                                                data-toggle="dropdown"
                                                                class="icons icon-magnifier dropdown-toggle"></i></button>
                                                  </span>
                        </div><!-- /input-group -->

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
    <!-- End SignIn -->
</div>

