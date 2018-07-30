<div id="login" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login to continue</h4>
            </div>
            <div class="modal-body">
                 <form  id="loginform">
                    <div class="label-group">
                        <input style="margin-bottom:5px;" type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required autofocus>
                        <label for="inputEmail">Email</label>
                        <span class="text-danger" style=" font-style: italic; text-decoration-color: red;" id="login_error"></span>
                        
                    </div>
                    <div class="label-group">
                        <input type="password" style="margin-bottom:5px;" name="password" placeholder="****" class="form-control" id="inputPassword" required autofocus>
                        <label for="inputPassword">Password</label>
                        <span class="text-danger"  style=" font-style: italic; text-decoration-color: red;" id="login_error2"></span>
                    </div>
                    <div class="text-right mb-3" id="not">
                         <a href="javascript:void(0)" id="createaccount">Dont't have an account yet ?</a>
                     </div>
                     <button type="submit" class="btn btn-primary" id="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

