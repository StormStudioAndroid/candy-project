
<!--Form with header-->
<div class="card">
    <div class="card-block">

        <!--Header-->
        <div class="form-header blue-gradient">
            <h3><i class="fa fa-user"></i> Register:</h3>
        </div>

        <!--Body-->
        <div class="md-form">
            <i class="fa fa-user prefix"></i>
            <input type="text" id="form3" class="form-control">
            <label for="form3">Имя</label>
        </div>
        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Пароль</label>
        </div>
        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Ключ для регистрации</label>
        </div>

        <div class="text-center">
            <button class="btn btn-indigo" id="button">Sign up</button>
            
        </div>

    </div>
</div>
<script>
       
        $('#button').click(function() {
             var name = $('#form2').val();
        var password = $('#form4').val();
            $(this).button('loading');
               
            $.post("authorization.php",{name: name, password: password}, function(data) {
                
              
            });
        });

</script>
<!--/Form with header-->
