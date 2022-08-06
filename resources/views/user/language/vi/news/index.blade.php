@extends('layouts.home')
@section('content-home')
<!-- <input type="hidden" id="lang" value="vi"> -->
<div class="container mb-3">
    <div class="d-flex flex-md-row flex-column">
        <h1 class="text-uppercase fw-bold title-news">Tin tức du lịch</h1>
        <div class="list-cat-news ms-md-auto">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                        <a href="danh-muc-tin-tuc/tin-tuc-du-lich.htm" class="nav-link active btn-tab">
                            Tin tức du lịch                        </a>
                    </li>
                                    <li class="nav-item" role="presentation">
                        <a href="danh-muc-tin-tuc/uu-dai-khuyen-mai.htm" class="nav-link  btn-tab">
                            Ưu đãi - Khuyến mại                        </a>
                    </li>
                            </ul>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-offer" role="tabpanel" aria-labelledby="pills-offer-tab">
            <div class="list-news block-home-1 d-flex flex-column flex-md-row">
                <div class="mb-md-5 col-md-6 left">
                    			<a href="tin-tuc/kien-giang-nhung-dia-diem-phai-ghe-qua-ban-da-biet-chua.htm" class="item1">
				<div class="item1-image" title="alo">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657785216.png" alt="kien-giang-nhung-dia-diem-phai-ghe-qua-ban-da-biet-chua" class="img-responsive">
				</div>
				<div class="item1-description" style="padding: 0 20px 20px 20px">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 14-07-2022 ~ 14-07-2022						</p>
										<p title="Kiên Giang - Những địa điểm phải ghé qua bạn đã biết chưa?" class="name text-uppercase mt-3">
						Kiên Giang - Những địa điểm phải ghé qua bạn đã biết chưa?					</p>
					<p class="sum">
											</p>
					<div class="d-flex align-items-center mt-3">
						<span class="fw-bold me-1 ">Xem chi tiết</span>
						<svg width="14" height="14" viewbox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.58301 9.91671L10.4997 7.00004L7.58301 4.08337" stroke="#002864" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
							<path d="M3.5 9.91671L6.41667 7.00004L3.5 4.08337" stroke="#002864" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
						</svg>
					</div>

				</div>
			</a>
		                </div>
                <div class="right col-md-6">
                                                                                        			<a class="news-item" href="tin-tuc/top-diem-den-tai-trung-tam-sai-gon-hoa-le-ban-da-ghe-qua-chua.htm" class="d-flex">
				<div class="news-item-image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657782334.jpg" alt="top-diem-den-tai-trung-tam-sai-gon-hoa-le-ban-da-ghe-qua-chua" class="img-responsive">
				</div>
				<div class="ms-md-3">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 14-07-2022 ~ 14-07-2022						</p>
										<p class="fw-bold name mt-3">
						Top điểm đến tại trung tâm Sài Gòn hoa lệ, bạn đã ghé qua chưa?					</p>
				</div>
			</a>
		                                            			<a class="news-item" href="tin-tuc/top-nhung-diem-tham-quan-tai-lao.htm" class="d-flex">
				<div class="news-item-image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657782001.jpg" alt="top-nhung-diem-tham-quan-tai-lao" class="img-responsive">
				</div>
				<div class="ms-md-3">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 14-07-2022 ~ 14-07-2022						</p>
										<p class="fw-bold name mt-3">
						Top những điểm tham quan tại Lào					</p>
				</div>
			</a>
		                                            			<a class="news-item" href="tin-tuc/dia-diem-du-lich-can-tho-nhung-dia-diem-du-lich-can-tho-noi-tieng.htm" class="d-flex">
				<div class="news-item-image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657773799.jpg" alt="dia-diem-du-lich-can-tho-nhung-dia-diem-du-lich-can-tho-noi-tieng" class="img-responsive">
				</div>
				<div class="ms-md-3">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 14-07-2022 ~ 14-07-2022						</p>
										<p class="fw-bold name mt-3">
						Địa điểm du lịch Cần Thơ - Những địa điểm du lịch Cần Thơ nổi tiếng					</p>
				</div>
			</a>
		                                            			<a class="news-item" href="tin-tuc/da-nang-di-dau-cho-dang-top-nhung-diemmust-gocho-chuyen-di-cua-ban.htm" class="d-flex">
				<div class="news-item-image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657768373.jpg" alt="da-nang-di-dau-cho-dang-top-nhung-diemmust-gocho-chuyen-di-cua-ban" class="img-responsive">
				</div>
				<div class="ms-md-3">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 14-07-2022 ~ 14-07-2022						</p>
										<p class="fw-bold name mt-3">
						Đà Nẵng đi đâu cho đáng? Top những điểm "must - go" cho chuyến đi của bạn					</p>
				</div>
			</a>
		                                                                                                                                                                                                                                                                                                                                                                                                    </div>
            </div>
            <div class="news-box">
                                                                                                                                                                                                                        			<a href="tin-tuc/tuyen-quang-co-gi-choi-den-tuyen-quang-co-gi.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657706121.jpg" alt="tuyen-quang-co-gi-choi-den-tuyen-quang-co-gi" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						Tuyên Quang có gì chơi? Đến Tuyên Quang có gì?					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/nhung-diem-den-phai-di-1-lan-trong-doi-khi-toi-hue.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657699092.jpg" alt="nhung-diem-den-phai-di-1-lan-trong-doi-khi-toi-hue" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						Những điểm đến phải đi 1 lần trong đời khi tới Huế					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/top-nhung-diem-den-khong-the-bo-qua-o-thanh-hoa.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657696094.jpg" alt="top-nhung-diem-den-khong-the-bo-qua-o-thanh-hoa" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						Top những điểm đến không thể bỏ qua ở Thanh Hóa					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/son-la-co-gi-di-dau-choi-o-son-la-top-dia-diem-du-lich-son-la-hap-dan-nhat.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657695283.jpeg" alt="son-la-co-gi-di-dau-choi-o-son-la-top-dia-diem-du-lich-son-la-hap-dan-nhat" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						Sơn La có gì? Đi đâu chơi ở Sơn La? Top địa điểm du lịch Sơn La hấp dẫn nhất					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/quang-tri-co-gi-di-dau-o-quang-tri.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657694456.jpg" alt="quang-tri-co-gi-di-dau-o-quang-tri" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						Quảng Trị có gì? Đi đâu ở Quảng Trị					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/cam-nang-du-lich-quang-ninh.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657683653.jpg" alt="cam-nang-du-lich-quang-ninh" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 13-07-2022 ~ 13-07-2022						</p>
										<p class="name fw-bold">
						cẩm nang du lịch Quảng Ninh					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/den-quang-ngai-nen-di-dau-dia-danh-dep-o-quang-ngai.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657617102.jpg" alt="den-quang-ngai-nen-di-dau-dia-danh-dep-o-quang-ngai" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 12-07-2022 ~ 12-07-2022						</p>
										<p class="name fw-bold">
						Đến Quảng Ngãi nên đi đâu? Địa danh đẹp ở Quảng Ngãi?					</p>
				</div>

			</a>
		                                    			<a href="tin-tuc/dia-diem-du-lich-quang-nam-quang-nam-co-gi-choi.htm" class="news-item-3">
				<div class="image-box">
					<img onload="this.style.opacity = 1" onerror="this.src='{{url('/css')}}/images/not_picture.png'" src="{{url('/css')}}/images/news/2022/07/original/thumbnail_1657615160.jpg" alt="dia-diem-du-lich-quang-nam-quang-nam-co-gi-choi" class="img-responsive">
				</div>
				<div style="padding: 20px" class="item3-description">
											<p class="mb-0 d-flex align-items-center date-time-news">
							<svg width="13" height="14" viewbox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 13V10.75H3.25V13H1ZM3.75 13V10.75H6.25V13H3.75ZM1 10.25V7.75H3.25V10.25H1ZM3.75 10.25V7.75H6.25V10.25H3.75ZM1 7.25V5H3.25V7.25H1ZM6.75 13V10.75H9.25V13H6.75ZM3.75 7.25V5H6.25V7.25H3.75ZM9.75 13V10.75H12V13H9.75ZM6.75 10.25V7.75H9.25V10.25H6.75ZM4 3.5C4 3.63281 3.88281 3.75 3.75 3.75H3.25C3.11719 3.75 3 3.63281 3 3.5V1.25C3 1.11719 3.11719 1 3.25 1H3.75C3.88281 1 4 1.11719 4 1.25V3.5ZM9.75 10.25V7.75H12V10.25H9.75ZM6.75 7.25V5H9.25V7.25H6.75ZM9.75 7.25V5H12V7.25H9.75ZM10 3.5C10 3.63281 9.88281 3.75 9.75 3.75H9.25C9.11719 3.75 9 3.63281 9 3.5V1.25C9 1.11719 9.11719 1 9.25 1H9.75C9.88281 1 10 1.11719 10 1.25V3.5ZM13 3C13 2.45313 12.5469 2 12 2H11V1.25C11 0.5625 10.4375 0 9.75 0H9.25C8.5625 0 8 0.5625 8 1.25V2H5V1.25C5 0.5625 4.4375 0 3.75 0H3.25C2.5625 0 2 0.5625 2 1.25V2H1C0.453125 2 0 2.45313 0 3V13C0 13.5469 0.453125 14 1 14H12C12.5469 14 13 13.5469 13 13V3Z" fill="#777777"></path>
							</svg>
							&nbsp; 12-07-2022 ~ 12-07-2022						</p>
										<p class="name fw-bold">
						Địa điểm du lịch Quảng Nam - Quảng Nam có gì chơi?					</p>
				</div>

			</a>
		                            </div>
        </div>
        <div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">...</div>
    </div>
    <div class='pagination justify-content-end'><a class='current' title='Page 1'>1</a><a rel='nofollow' class='other-page' title='Page 2' href='tin-tuc/page-2.htm'>2</a><a rel='nofollow' class='other-page' title='Page 3' href='tin-tuc/page-3.htm'>3</a><a rel='nofollow' class='next-page' title='Next page' href='tin-tuc/page-2.htm'> <i class="fa fa-angle-right" aria-hidden="true"></i></a><a class='last-page' title='Last page' href='tin-tuc/page-3.htm'><i class='fa fa-angle-double-right'></i></a></div>
</div> 
@endsection