@extends('master')
@section('content')
    <div class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="icon-li">
                                <strong>Liên hệ</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="contact-content">
                        <h1 class="title">
                            <span>Thông tin liên hệ</span>
                        </h1>
                    </div>
                    <div class="contact-block">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#">
                                    <img src="images/logo.png">
                                </a>
                            </div>
                            <div class="col-md-9">
                                <div class="docs">
                                    <b class="name-binding">
                                        Công ty bán quần áo Vô danh VCL
                                    </b>
                                </div>
                                <div class="contact-info">
                                    <div class="docs">
                                        <i class="fa fa-map-marker">
                                            <b>Địa chỉ : </b>
                                            Khu I thị trấn Kim Tân - huyện Thạch Thành - Thanh Hóa
                                        </i>
                                    </div>
                                    <div class="docs">
                                        <i class="fa fa-phone">
                                            <b>Điện thoại : </b>
                                            0983 807 784
                                        </i>
                                    </div>
                                    <div class="docs">
                                        <i class="fa fa-mobile">
                                            <b>Hotline : </b>
                                            0983 807 784
                                        </i>
                                    </div>
                                    <div class="docs">
                                        <i class="fa fa-envelope">
                                            <b>Email :</b>
                                            <a href="#">sonphamfr2017@gmail.com</a>
                                        </i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr class>
                        <h3 class="title">Gửi thông tin liên hệ</h3>
                        <div class="description">
                            <p>Xin vui lòng điền các yêu cầu vào mẫu dưới đây và gửi cho chúng tôi. Chúng tôi sẽ trả lời bạn ngay sau khi nhận được. Xin chân thành cảm ơn!</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 customer-feedback col-ms-12 col-xs-12">
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="txtName" type="text" class="form-control" name="txtName" placeholder="Họ tên">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                    <input id="txtAddress" type="text" class="form-control" name="txtAddress" placeholder="Địa chỉ">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="txtEmail" type="email" class="form-control" name="txtEmail" placeholder="Email">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="txtPhone" type="text" class="form-control" name="txtPhone" placeholder="Số điện thoại">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <input id="txtTitle" type="text" class="form-control" name="txtTilte" placeholder="Tiêu đề">
                                </div>
                                <div class="form-group">
                                    <label for="comment">Nội dung :</label>
                                    <textarea class="form-control" rows="4" id="comment"></textarea>
                                </div>
                                <div class="form-send-button">
                                    <button type="button" class="btn btn-primary btn-sm active">Gửi</button>
                                </div>
                            </div>
                            <div class="map col-md-6 col-xs-12 col-ms-12">
                                <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Cyberborg%20Bodyart%2C%20Bangka%2C%20Jakarta%2C%20Indonesia&key={{env('GOOGLE_API_KEY')}}"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hidden-xs hidden-sm">
                    <div class="online-support">
                        <div class="title">
                            <span>Hỗ trợ trực tuyến</span>
                        </div>
                        <div class="content">
                            <div class="hotline">
                                Hotline
                                <br>
                                <span>0983 807 784</span>
                            </div>
                            <div class="support-item">
                                <div class="name">Mr.Siro <span>0983807784</span></div>
                                <ul>
                                    <li>
                                        <a href="#" title="Mr Sơn">
                                            <i class="fa fa-skype" style="font-size: 36px;color: #3097D1;"></i>
                                            <span>Chat</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
