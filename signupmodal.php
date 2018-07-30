<div id="signup" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title">Sign Up</h4>
            </div>
            <div class="modal-body">
                <form id="signupform">
                    <div class="label-group">
                        <input type="text" name="name" id="inputname" class="form-control" placeholder="john joe"  required autofocus>
                        <label for="inputname">Name</label>
                    </div>
                    <div class="label-group">
                        <input type="email" style="margin-bottom:5px;" name="email" id="inputemail" class="form-control" placeholder="name@email.com" required autofocus>
                        <label for="inputemail"> Email</label>
                        <span style=" font-style: italic; text-decoration-color: red;" class="text-danger" id="sign_error"></span>
                    </div>
                    <div class="label-group">
                        <input type="password" name="password" placeholder="*****" class="form-control" id="inputpassword" required autofocus>
                        <label for="inputpassword">Password</label>
                    </div>
                    <div class="text-right mb-3" id="not">
                         <a href="javascript:void(0)" id="loginmodal">Already have an account</a>
                     </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
</div>