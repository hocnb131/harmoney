@extends('layouts.home')
@section('content-home')
<!-- <input type="hidden" id="lang" value="vi"> -->
<div class="main mb-4">
    <div class="container mb-4">
        <h1 class="text-center fw-bold text-uppercase mb-5 title-destination">
            <span>Điểm đến </span>
            nổi bật
        </h1>
        <div class="destination-wrapper">
            @foreach($province as $p)
            <div class="item">
                <a style="display: block" href="" class="img-box">
                    <img src="{{url('/uploads')}}/{{$p->thumbnail}}" alt="">
                    <div class="location">
                        <svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z" stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="ms-md-2">{{$p->name}}</span>
                    </div>
                </a>
                <div class="list-hotel-box">
                    <a href="khach-san-muong-thanh-grand-ha-noi-centre.htm" class="name mb-0">Mường Thanh Grand
                        Hà Nội Centre</a>
                    <div class="line"></div>
                    <a href="khach-san-muong-thanh-grand-xa-la.htm" class="name mb-0">Mường Thanh Grand Xa
                        La</a>
                    <div class="line"></div>
                    <a href="khach-san-muong-thanh-grand-ha-noi.htm" class="name mb-0">Mường Thanh Grand Hà
                        Nội</a>
                    <div class="line"></div>
                </div>
                <div class="seemore">
                    Xem thêm </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="location-wrapper">
            @foreach($province as $p)
            <a href="diem-den-ha-noi.htm" class="img-box-2 item mt-2">
                <p class="mb-0">{{$p->name}}</p>
            </a>
            @endforeach
            <!-- <a href="diem-den-tp-hcm.htm" class="img-box-2 item mt-2">
                <p class="mb-0">TP Hồ Chí Minh</p>
            </a>
            <a href="diem-den-da-nang.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Đà Nẵng</p>
            </a>
            <a href="diem-den-khanh-hoa.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Khánh Hòa</p>
            </a>
            <a href="diem-den-can-tho.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Cần Thơ</p>
            </a>
            <a href="diem-den-bac-giang.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Bắc Giang</p>
            </a>
            <a href="diem-den-bac-ninh.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Bắc Ninh</p>
            </a>
            <a href="diem-den-dien-bien.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Điện Biên</p>
            </a>
            <a href="diem-den-ha-nam.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Hà Nam</p>
            </a>
            <a href="diem-den-lai-chau.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Lai Châu</p>
            </a>
            <a href="diem-den-lang-son.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Lạng Sơn</p>
            </a>
            <a href="diem-den-lao-cai.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Lào Cai</p>
            </a>
            <a href="diem-den-phu-tho.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Phú Thọ</p>
            </a>
            <a href="diem-den-quang-ninh.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Quảng Ninh</p>
            </a>
            <a href="diem-den-son-la.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Sơn La</p>
            </a>
            <a href="diem-den-thanh-hoa.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Thanh Hóa</p>
            </a>
            <a href="diem-den-tuyen-quang.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Tuyên Quang</p>
            </a>
            <a href="diem-den-binh-dinh.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Bình Định</p>
            </a>
            <a href="diem-den-binh-thuan.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Bình Thuận</p>
            </a>
            <a href="diem-den-dak-lak.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Đắk Lắk</p>
            </a>
            <a href="diem-den-ha-tinh.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Hà Tĩnh</p>
            </a>
            <a href="diem-den-lam-dong.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Lâm Đồng</p>
            </a>
            <a href="diem-den-nghe-an.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Nghệ An</p>
            </a>
            <a href="diem-den-quang-binh.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Quảng Bình</p>
            </a>
            <a href="diem-den-quang-nam.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Quảng Nam</p>
            </a>
            <a href="diem-den-quang-ngai.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Quảng Ngãi</p>
            </a>
            <a href="diem-den-quang-tri.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Quảng Trị</p>
            </a>
            <a href="diem-den-thua-thien-hue.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Thừa Thiên Huế</p>
            </a>
            <a href="diem-den-ba-ria-vung-tau.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Bà Rịa - Vũng Tàu</p>
            </a>
            <a href="diem-den-ca-mau.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Cà Mau</p>
            </a>
            <a href="diem-den-kien-giang.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Kiên Giang</p>
            </a>
            <a href="diem-den-vientiane-lao.htm" class="img-box-2 item mt-2">
                <p class="mb-0">Vientiane / Lào</p>
            </a> -->
        </div>
    </div>
</div>
@endsection