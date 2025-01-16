<div class="container">
    <div class="row">
        <div class="clearfix">
            <div class="wt-topbar-left">
                <ul class="list-unstyled e-p-bx pull-left">
                    <li><i class="fa fa-envelope"></i>info@mavexcrypt.com</li>
                    <li><i class="fa fa-phone"></i></li>
                </ul>
            </div>

            <div class="wt-topbar-right">
                <div class=" language-select pull-right">
                    <div class="dropdown">
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
