@extends('master')
@section('title','Đăng nhập')
@section('content')
    <div class="login-form">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="login-menu">
                        <h3 class="title">
                            <span>Tài khoản</span>
                        </h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-sign-in"></i>
                                    <span>Đăng nhập</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-key"></i>
                                    <span>Đăng ký</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-key"></i>
                                    <span>Quên mật khẩu</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="icon-li">
                                <span>Đăng nhập</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="title clearfix">
                        <span>Đăng nhập hệ thống</span>
                    </h1>


                    <div class="row omb_login">
                        <h3 class="omb_authTitle">Đăng nhập hoặc <a href="#"><span>Đăng ký</span></a></h3>
                            <div class="row omb_row-sm-offset-3 omb_socialButtons">
                                <div class="col-xs-4 col-sm-2">
                                    <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                                        <i class="fa fa-facebook visible-xs"></i>
                                        <span class="hidden-xs">Facebook</span>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-sm-2">
                                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                        <i class="fa fa-twitter visible-xs"></i>
                                        <span class="hidden-xs">Twitter</span>
                                    </a>
                                </div>
                                <div class="col-xs-4 col-sm-2">
                                    <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                        <i class="fa fa-google-plus visible-xs"></i>
                                        <span class="hidden-xs">Google+</span>
                                    </a>
                                </div>
                            </div>

                            <div class="row omb_row-sm-offset-3 omb_loginOr">
                                <div class="col-xs-12 col-sm-6">
                                    <hr class="omb_hrOr">
                                    <span class="omb_spanOr">Hoặc</span>
                                </div>
                            </div>

                            <div class="row omb_row-sm-offset-3">
                                <div class="col-xs-12 col-sm-6">
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger error-login" id="error_login">
                                            @foreach($errors->all() as $err)
                                                <div>{{ $err}}</div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(Session::has('flag'))
                                            <div class="alert alert-{{Session::get('flag')}}" role="alert">{{ Session::get('message') }}</div>
                                        @endif
                                    <form class="omb_loginForm" action="{{route('post-login')}}" method="POST">
                                        {{ csrf_field()}}
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="email" class="form-control" name="email" placeholder="Địa chỉ Email">
                                        </div>
                                        <span class="help-block"></span>

                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input  type="password" class="form-control" name="password" placeholder="Mật khẩu">
                                        </div>
                                        <span class="help-block"></span>

                                        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row omb_row-sm-offset-3">
                                <div class="col-xs-12 col-sm-3">
                                    <label class="checkbox">
                                        <input type="checkbox" value="1" name="remember_password" id="remember_password">Ghi nhớ mật khẩu
                                    </label>
                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <p class="omb_forgotPwd">
                                        <a  data-toggle="modal" data-target="#myModal" onclick="resetForm();">
                                            Quên mật khẩu
                                        </a>
                                    </p>
                                    <form class="reset-password-form ng-untouched ng-pristine ng-invalid">
                                        {{ csrf_field()}}
                                        <div id="myModal"  class="modal fade" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Đặt lại mật khẩu</h4>
                                                    </div>
                                                    <div class="form-modal">
                                                        <div class="alert-reset-email" id="alert_reset_email">
                                                        </div>
                                                        @if(count($errors)>0)
                                                            <div class="alert alert-danger">
                                                                @foreach($errors->all() as $err)
                                                                    {{ $err}}
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <i aria-hidden="true" class="fa fa-envelope"></i>
                                                            </div>
                                                            <input id="input_reset_password" class="form-control form-control-solid placeholder-no-fix"  type="email"  placeholder="Nhập Email" name="email_reset" required>
                                                        </div>
                                                        <p>Chúng tôi sẽ gửi link xác nhận thay đổi mật khẩu đến Email bạn đã đăng ký.</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                                                        <button type="button" class="btn btn-primary" id="btn_send_reset_password">Gửi</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        setTimeout(function () {
            $('#error_login').remove();
        },4000);

        function hideMessage() {
            setTimeout(function(){
                $('#myModal').modal('hide');
                $('#alert_reset_email').html('');
                $('#alert_reset_email').hide();
                $("#myModal input[name='email_reset']").val('');
            },3000);
        }

        $('#btn_send_reset_password').click(function(){
            $.ajax({
                url:"/reset-password?email=" + $("#myModal input[name='email_reset']").val(),
                type: 'GET',
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                context:this,
                dataType: "json",
                success: function (returndata)
                {
                    $('#alert_reset_email').show();
                    $('#alert_reset_email').html(returndata.success);
                    if(!$('#alert_reset_email').hasClass('alert-success')){
                        $('#alert_reset_email').addClass('alert-success');
                    }
                    $('#alert_reset_email').removeClass('alert-danger');
                    hideMessage();
                },
                error: function(data)
                {
                    var errorMessage = '';
                    if(data && data.responseJSON && data.responseJSON.error)
                    {
                        errorMessage = data.responseJSON.error;
                    }
                    else {
                        errorMessage = data.responseJSON.email[0];
                    }
                    $('#alert_reset_email').show();
                    $('#alert_reset_email').html(errorMessage);
                    if(!$('#alert_reset_email').hasClass('alert-danger')){
                        $('#alert_reset_email').addClass("alert-danger");
                    }
                    $('#alert_reset_email').removeClass('alert-success');
                }
            });
        });

        function resetForm() {
            $('#alert_reset_email').html('');
            $('#alert_reset_email').hide();
            $('#alert_reset_email').removeClass('alert-danger alert-success');
            $("#myModal input[name='email_reset']").val('');
        }
    </script>
@endsection

