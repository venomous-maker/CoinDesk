<div class="container">
    <div class="row">
        <div class="clearfix">
            <div class="wt-topbar-left">
                <ul class="list-unstyled e-p-bx pull-left">
                    <li><i class="fa fa-envelope"></i>mail@bitinvest.com</li>
                    <li><i class="fa fa-phone"></i>(654) 321-7654</li>
                </ul>
            </div>

            <div class="wt-topbar-right">
                <div class=" language-select pull-right">
                    <div class="dropdown">
                        <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown">Language
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><img src="{{ get_imported_asset("images/united-states.png")}}" alt="">English</a></li>
                            <li><a href="#"><img src="{{ get_imported_asset("images/france.png")}}" alt="">French</a></li>
                            <li><a href="#"><img src="{{ get_imported_asset("images/germany.png")}}" alt="">German</a></li>
                        </ul>
                    </div>
                </div>

                <ul class="list-unstyled e-p-bx pull-right">
                    @if(!$user)
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#Login-form"><i class="fa fa-user"></i>Login</a></li>
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#Register-form"><i class="fa fa-sign-in"></i>Register</a></li>
                    @else
                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#Logout-form"><i class="fa fa-lock"></i>Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
