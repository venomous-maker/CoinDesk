<!-- MODAL  LOGIN -->
<div id="Login-form" class="modal fade " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header site-bg-primary">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Login Your Account</h4>
            </div>
            <div class="modal-body p-a30">
                <form id="log-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" name="email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Enter Password" name="password" type="password">
                        </div>
                    </div>
                    <button type="submit" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                    <div class="font-12">Don't have an account? <a href="javascript:;" class="site-text-primary">Register Here</a></div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div class="text-center"><img src="{{get_logo(theme: 'dark')}}" alt=""></div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL  REGISTER -->
<div id="Register-form" class="modal fade " role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header site-bg-primary">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Register here</h4>
            </div>
            <div class="modal-body p-a30">
                <form id="reg-form">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input class="form-control" placeholder="Enter Username" name="name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input class="form-control" placeholder="Enter email" name="email" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Enter Password" name="password" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input class="form-control" placeholder="Confirm Password" name="password_confirmation" type="password">
                        </div>
                    </div>
                    <button type="submit" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                    <div class="font-12">Already Have an Account? <a href="javascript:;" class="site-text-primary">Login</a></div>
                </form>
            </div>
            <div class="modal-footer text-center">
                <div class="text-center"><img src="{{get_logo(theme:'dark')}}" alt=""></div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL LOGOUT -->
<div id="Logout-form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header site-bg-primary">
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                <h4 class="modal-title text-white">Logout</h4>
            </div>
            <div class="modal-body text-center p-a30">
                <p>Are you sure you want to logout?</p>
                <div class="d-flex justify-content-center gap-2">
                    <button id="logout-confirm" class="site-button-secondry text-uppercase btn-block m-b10">Yes, Logout</button>
                    <button type="button" class="btn btn-secondary text-uppercase btn-block m-b10" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
