

<!--
<form method="POST" action="authorization.php">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>
<input name="submit" type="submit" value="Войти">
</form>
-->

<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="text-center">
            <h3><i class="fa fa-lock"></i> Login:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-deep-purple" id = "button"  data-text-loading="Loading...">Login</button>
        </div>
<script >

       
        $('#button').click(function() {
             var name = $('#form2').val();
        var password = $('#form4').val();
            $(this).button('loading');
                
            $.post("authorization.php",{name: name, password: password}, function(data) {
                alert(data);
              
            });
        });

    </script>
       
    </div>

    <!--Footer-->
    <div class="modal-footer">
        <div class="options">
            <p>Not a member? <div class = "ajax"><a href="index.php?option=registration" class="ajax">Sign Up</a></div></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
    

