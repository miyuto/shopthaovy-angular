@extends('master')
@section('content')
    <div class="checkorder-page">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="icon-li">
                                <strong>Kiểm tra đơn hàng</strong>
                            </li>
                        </ul>
                    </div>
                    <h1 class="title">
                        <span>Kiểm tra đơn hàng</span>
                    </h1>
                    <div class="order-tracking-block">
                        <form class="form-inline order-input ng-pristine ng-invalid ng-invalid-required">
                            <div class="form-group">
                                <label>Nhập mã đơn hàng</label>
                                <input type="text" class="form-control ng-pristine ng-invalid ng-invalid-required ng-touched" placeholder="Mã số đơn hàng (VD:123456789)" ng-model="AutoCode" ng-required="true" required="required">

                                <button class="btn btn-primary">Xem ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection