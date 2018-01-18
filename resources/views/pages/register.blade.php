@extends('master')
@section('content')
    <div class="register-form">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="register-menu">
                        <h3 class="title">
                            <span>Tài khoản</span>
                        </h3>
                        <ul>
                            <li>
                                <a href="{{route('login')}}">
                                    <i class="fa fa-sign-in"></i>
                                    <span>Đăng nhập</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}">
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
                                <span>Đăng ký tài khoản</span>
                            </li>
                        </ul>
                    </div>
                    <h1 class="title clearfix">
                        <span>Đăng ký tài khoản</span>
                    </h1>
                        <form method="POST" action="{{route('post-register')}}">
                            {{ csrf_field()}}
                            <div class="register-content col-md-8 col-md-offset-2 col-xs-12 col-sm-12 col-xs-offset-0 col-sm-offset-0 ">
                                <div class="form-horizontal ng-pristine ng-invalid ng-invalid-required ng-valid-email">
                                    @if(count($errors)>0)
                                        <div class="alert alert-danger" id="alert_register">
                                            @foreach($errors->all() as $err)
                                                <div>{{ $err}}</div>
                                            @endforeach
                                        </div>
                                    @endif

                                    @if(Session::has('success'))
                                        <div class="alert alert-success" id="alert_register">{{Session::get('success')}}
                                        </div>
                                        @endif
                                    <h2>
                                        <span>Thông tin tài khoản</span>
                                    </h2>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Tài khoản
                                            <span class="warning"></span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="account_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Email
                                            <span class="warning">(*)</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Mật khẩu
                                            <span class="warning">(*)</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Nhập lại mật khẩu
                                            <span class="warning">(*)</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="password" name="re_password"  class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <h2>
                                        <span>Thông tin cá nhân (Thông tin sử dụng để giao hàng)</span>
                                    </h2>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Họ tên
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="full_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Giới tính
                                        </label>
                                        <div class="col-sm-9">
                                            <select name="sex" class="form-control">
                                                <option value="number:0" label="Nữ" selected="selected">Nữ</option>
                                                <option value="number:1" label="Nam">Nam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Ngày sinh
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" id="datepicker" name="date" class="form-control" style="width: 40%;">
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <label for="Code" class="col-sm-3 control-label">
                                                Số điện thoại
                                            </label>
                                            <div class="col-sm-9">
                                                <input type="number" name="phone" class="form-control">
                                            </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Địa chỉ 1
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="city" class="form-control" placeholder="Ví dụ : Huyện Thạch Thành, TP Thanh Hóa">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Code" class="col-sm-3 control-label">
                                            Địa chỉ 2
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="district" class="form-control" placeholder="Ví dụ : Số nhà 10,Khu I thị trấn Kim Tân">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-offset-4 col-sm-8 ">
                                    <button type="submit" class="btn btn-primary">Đăng ký</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $( function() {
            $( "#datepicker" ).datepicker();
        } );

    </script>
@endsection
