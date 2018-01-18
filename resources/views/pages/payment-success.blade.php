@extends('master')
@section('content')
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb clearfix">
                        <ul>
                            <li class="home">
                                <a href="#">Trang chủ</a>
                            </li>
                            <li class="icon-li">
                                <strong>Hoàn tất</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="payment-end">
                        <div class="alert alert-success fade in">
                            <i class="fa-fw fa fa-check"></i>
                            <strong>Success!</strong>
                            <span>Đơn hàng của bạn đã được mua thành công</span>
                        </div>
                        <div class="payment-order clearfix">
                            <h3>
                                Mã đơn hàng của bạn :
                                <b>#10000003</b>
                            </h3>
                            <p>
                                <b>Ngày đặt : </b>
                                <i>24/02/2018</i>
                            </p>
                            <p>
                                <b>Phương thức thanh toán : </b>
                                <i>Trả tiền khi nhận hàng</i>
                            </p>
                            <h1>Thông tin đơn hàng</h1>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><span>Áo khoác len lông xù kiểu Hàn Quốc</span></td>
                                    <td>247.500</td>
                                    <td>1</td>
                                    <td>247.500 đ</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="4" class="text-right label-payment">
                                        <b>Tổng thanh toán : </b>
                                    </td>
                                    <td class="total-payment">287.500 đ</td>
                                </tr>
                                </tfoot>
                            </table>
                            <span class="print-order">
                            <a href="#">
                                <i class="fa fa-print"></i>
                                In đơn hàng
                            </a>
                        </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection