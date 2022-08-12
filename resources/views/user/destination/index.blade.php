@extends('layouts.home')
@section('content-home')
    <div class="main mb-4">
        <div class="container mb-4">
            <h1 class="text-center fw-bold text-uppercase mb-5 title-destination">
                <span>Điểm đến </span>
                nổi bật
            </h1>
            <div class="destination-wrapper">
                <div class="item">
                    <a style="display: block" href="diem-den-ha-noi.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/du-lich-ho-hoan-kiem-gan-ha-noi_1653627253.jpeg"
                            alt="Hà Nội">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Hà Nội</span>
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
                <div class="item">
                    <a style="display: block" href="diem-den-tp-hcm.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/3018543_0_97_1920_1182_600x0_80_0_0_9e7f20dd1bec801816587f7e72f1a907_1653635923.jpeg"
                            alt="TP Hồ Chí Minh">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">TP Hồ Chí Minh</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-grand-sai-gon-centre.htm" class="name mb-0">Mường Thanh Grand
                            Sài Gòn Centre</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-sai-gon.htm" class="name mb-0">Mường Thanh Luxury Sài
                            Gòn</a>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-da-nang.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/da-nang_1653644753.jpg"
                            alt="Đà Nẵng">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Đà Nẵng</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-luxury-da-nang.htm" class="name mb-0">Mường Thanh Luxury Đà
                            Nẵng</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-da-nang.htm" class="name mb-0">Mường Thanh Grand Đà
                            Nẵng</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-song-han.htm" class="name mb-0">Mường Thanh Luxury
                            Sông Hàn</a>
                        <div class="line"></div>
                    </div>
                    <div class="seemore">
                        Xem thêm </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-khanh-hoa.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/nha-trang_1653645898.jpg"
                            alt="Khánh Hòa">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Khánh Hòa</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-grand-nha-trang.htm" class="name mb-0">Mường Thanh Grand Nha
                            Trang</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-nha-trang.htm" class="name mb-0">Mường Thanh Luxury
                            Nha Trang</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-vien-trieu.htm" class="name mb-0">Mường Thanh Luxury
                            Viễn Triều</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-khanh-hoa.htm" class="name mb-0">Mường Thanh Luxury
                            Khánh Hòa</a>
                        <div class="line"></div>
                    </div>
                    <div class="seemore">
                        Xem thêm </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-lao-cai.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/sapa_1653647016.jpg"
                            alt="Lào Cai">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Lào Cai</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-grand-lao-cai.htm" class="name mb-0">Mường Thanh Grand Lào
                            Cai</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-sa-pa.htm" class="name mb-0">Mường Thanh Sa Pa</a>
                        <div class="line"></div>
                    </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-quang-ninh.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/quang-ninh_1653646313.jpg"
                            alt="Quảng Ninh">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Quảng Ninh</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-luxury-quang-ninh.htm" class="name mb-0">Mường Thanh Luxury
                            Quảng Ninh</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-ha-long.htm" class="name mb-0">Mường Thanh Grand Hạ
                            Long</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-bai-chay.htm" class="name mb-0">Mường Thanh Grand Bãi
                            Cháy</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-holiday-suoi-mo.htm" class="name mb-0">Mường Thanh Holiday
                            Suối Mơ</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-ha-long-centre.htm" class="name mb-0">Mường Thanh
                            Luxury Hạ Long Centre</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-ha-long-residence.htm" class="name mb-0">Mường Thanh
                            Luxury Hạ Long Residence</a>
                        <div class="line"></div>
                    </div>
                    <div class="seemore">
                        Xem thêm </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-nghe-an.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/nghe-an_1653646245.jpg"
                            alt="Nghệ An">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Nghệ An</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-vinh.htm" class="name mb-0">Mường Thanh Vinh</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-song-lam.htm" class="name mb-0">Mường Thanh Luxury
                            Sông Lam</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-luxury-dien-lam.htm" class="name mb-0">Mường Thanh Luxury
                            Diễn Lâm</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-holiday-con-cuong.htm" class="name mb-0">Mường Thanh Holiday
                            Con Cuông</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-cua-lo.htm" class="name mb-0">Mường Thanh Grand Cửa
                            Lò</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-phuong-dong.htm" class="name mb-0">Mường Thanh Grand
                            Phương Đông</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-grand-hoang-mai.htm" class="name mb-0">Mường Thanh Grand
                            Hoàng Mai</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-thanh-nien-vinh.htm" class="name mb-0">Mường Thanh Thanh Niên
                            Vinh</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-dien-chau.htm" class="name mb-0">Mường Thanh Diễn Châu</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-cua-dong.htm" class="name mb-0">Mường Thanh Cửa Đông</a>
                        <div class="line"></div>
                    </div>
                    <div class="seemore">
                        Xem thêm </div>
                </div>
                <div class="item">
                    <a style="display: block" href="diem-den-quang-binh.htm" class="img-box">
                        <img src="{{ url('/css') }}/images/cities/2022/05/27/original/quang-binh_1653646488.jpg"
                            alt="Quảng Bình">
                        <div class="location">
                            <svg width="16" height="16" viewbox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 6.66663C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66663C2 5.07533 2.63214 3.5492 3.75736 2.42399C4.88258 1.29877 6.4087 0.666626 8 0.666626C9.5913 0.666626 11.1174 1.29877 12.2426 2.42399C13.3679 3.5492 14 5.07533 14 6.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path
                                    d="M8 8.66663C9.10457 8.66663 10 7.7712 10 6.66663C10 5.56206 9.10457 4.66663 8 4.66663C6.89543 4.66663 6 5.56206 6 6.66663C6 7.7712 6.89543 8.66663 8 8.66663Z"
                                    stroke="white" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="ms-md-2">Quảng Bình</span>
                        </div>
                    </a>
                    <div class="list-hotel-box">
                        <a href="khach-san-muong-thanh-luxury-nhat-le.htm" class="name mb-0">Mường Thanh Luxury Nhật
                            Lệ</a>
                        <div class="line"></div>
                        <a href="khach-san-muong-thanh-holiday-quang-binh.htm" class="name mb-0">Mường Thanh Holiday
                            Quảng Bình</a>
                        <div class="line"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="location-wrapper">
                @foreach ($province as $p)
                    <a href="diem-den-ha-noi.htm" class="img-box-2 item mt-2">
                        <p class="mb-0">{{ $p->name }}</p>
                    </a>
                @endforeach
                <a href="diem-den-tp-hcm.htm" class="img-box-2 item mt-2">
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
                </a>
            </div>
        </div>
    </div>
@endsection
