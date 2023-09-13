@include('admin.partial.link')



<body class=" d-flex flex-column bg-white">
    <script src="../dist/js/demo-theme.min.js"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark">
                        <!--  <img src="../static/logo.svg" height="36" alt=""> -->
                        Logo Here
                    </a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login to your account
                </h2>
                <div class="error-area d-none">
<span id="error-message" class="text-danger"></span>
</div>
<!-- <span class="text-danger error-text password_err"></span><br>
<span class="text-danger error-text email_err"></span> -->
                <form class="text-start mt-4" id="loginForm" method="post">
                            @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                      
                        <input type="email" class="form-control" placeholder="your@email.com" id="email" name="email" aria-describedby="username" autocomplete="off">
                      <br>
                        
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-flat">

                                       

                            <input   type="Password" name="password" id="password" class="form-control" aria-label="password" placeholder="Your password" autocomplete="off" >
                            <i class="toggle-password fa fa-fw fa-eye fa-eye-slash" id="toggler-eye"
                                        onclick="showHidePassword()"></i>
                                   
                            <!-- <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span> -->
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-check">
                            <input type="checkbox" class="form-check-input" />
                            <span class="form-check-label">Remember me on this device</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100"  id="loginForm_submit">Sign in</button>
                     
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100" style="background-image: url({{asset('assets/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg)')}}">
            </div>
        </div>
    </div>
  
</body>






@include('admin.partial.script')
<script>
    var password = document.getElementById('password');
    var toggler = document.getElementById('toggler-eye');

    showHidePassword = () => {
        if (password.type == 'password') {
            password.setAttribute('type', 'text');
            $(".toggle-password").addClass('fa-eye-slash');
            $(".toggle-password").removeClass('fa-eye');

            //   toggler.classList.add('fa-eye-slash');
        } else {
            //   toggler.classList.remove('fa-eye-slash');
            password.setAttribute('type', 'password');
            $(".toggle-password").addClass('fa-eye');
            $(".toggle-password").removeClass('fa-eye-slash');
        }
    };

    //   toggler.addEventListener('click', showHidePassword);
</script>
<script>
    $("#loginForm").submit(function(e)
    {
        e.preventDefault();
        $("#loginForm_submit").prop('disabled', true);
        var formdata = new FormData(this);
        $.ajax({
            url: '{{ route('admin.login') }}',
            type: 'POST',
            data: formdata,
            contentType: false,
            processData: false,
            success: function(data)
            {

                if (!data.error && !data.error2)
                {
                    // swal("Successfull!", data.success, "success")
                    // .then( (action) => {
                        window.location.href = '{{ route('admin.home') }}';
                    // });
                }
                else
                {
                    if(data.error2)
                    {
                        $('.error-area').removeClass('d-none');
                        $("#error-message").text(data.error2);
                        $("#loginForm_submit").prop('disabled', false);
                    }
                    else
                    {
                        $("#loginForm_submit").prop('disabled', false);
                        resetErrors();
                       // printErrMsg(data.error);
                    }
                }
            },
            error: function(error)
            {
                $("#loginForm_submit").prop('disabled', false);
                swal("Error occured!", "Something went wrong please try again", "error");
            },
        });

        function resetErrors()
        {
            var form = document.getElementById('loginForm');
            var data = new FormData(form);
            for (var [key, value] of data)
            {
                console.log(key, value)
                $('.'+key+'_err').text('');
                $('#'+key).removeClass('invalid');
                $('#'+key).addClass('valid');
            }
        }

        function printErrMsg (msg) {
            $.each( msg, function( key, value ) {
            console.log(key);
            $('.'+key+'_err').text(value);
            $('#'+key).addClass('invalid');
            });
        }

    });
</script>

</html>
