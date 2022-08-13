@extends('layouts.home')
@section('content-home')
    <div class="main-content">
        <div class="container">
            <div class="main-search">
                <div class="list-filter">
                    <div class="box-position">
                        <div class="top-filter">
                            <h3>
                                <span class="desktop">Kết quả</span>
                                <span class="mobile">Lọc kết quả</span>
                            </h3>
                            <a href="javscript:void(0)" class="mobile close-filter filter-btn">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.1429 0.856934L0.857178 11.1426" stroke="#3C3C3B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                    <path d="M0.857178 0.856934L11.1429 11.1426" stroke="#3C3C3B" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div class="list-item-filter">
                            <p class="title-filter">Thương hiệu</p>
                            <ul>
                                <li>
                                    <label class="form-check-label" for="Type1">
                                        <input class="form-check-input check-type-hotel" type="checkbox" value="1"
                                            id="Type1">
                                        Luxury </label>
                                </li>
                                <li>
                                    <label class="form-check-label" for="Type3">
                                        <input class="form-check-input check-type-hotel" type="checkbox" value="3"
                                            id="Type3">
                                        Holiday </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="load-list">

                    <div class="list-search-item">
                        <div class="count-sort bg-white">
                            <div class="count text-uppercase text-success desktop">Có <span id="total_hotel">6</span> khách
                                sạn gần/ tại <b>"Quảng Ninh"</b></div>
                            <div class="filter-btn mobile">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.5 2.25H1.5L7.5 9.345V14.25L10.5 15.75V9.345L16.5 2.25Z" stroke="#002864"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                Lọc kết quả
                            </div>
                            <div class="sort">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1.33 4.538L3.21004 2.65799V15.2196C3.21004 15.6496 3.55798 15.9977 3.98808 15.9977C4.41804 15.9977 4.76612 15.6497 4.76612 15.2196V2.65799L6.64616 4.538C6.79822 4.69006 6.99814 4.76595 7.19609 4.76595C7.39404 4.76595 7.59413 4.68992 7.74602 4.538C8.05001 4.23401 8.05001 3.74001 7.74602 3.43605L4.54008 0.230016C4.46809 0.158031 4.38006 0.0999961 4.28408 0.0599573C4.28003 0.0580042 4.27613 0.0580042 4.27208 0.0559116C4.18405 0.0199192 4.08807 -3.05176e-05 3.98804 -3.05176e-05C3.88801 -3.05176e-05 3.79203 0.0199188 3.704 0.0559116C3.69996 0.0578647 3.69605 0.0578648 3.692 0.0599573C3.59602 0.0999961 3.50799 0.157892 3.436 0.230016L0.227993 3.43798C-0.0759976 3.74196 -0.0759976 4.23597 0.227993 4.53993C0.531983 4.84182 1.026 4.84182 1.32996 4.53784L1.33 4.538Z"
                                        fill="black" fill-opacity="0.6"></path>
                                    <path
                                        d="M14.67 11.4622L12.79 13.3422V0.778423C12.79 0.348464 12.4421 0.000396729 12.012 0.000396729C11.582 0.000396729 11.2339 0.348328 11.2339 0.778423V13.3401L9.35389 11.46C9.0499 11.1561 8.55785 11.1561 8.25192 11.46C7.94793 11.764 7.94793 12.258 8.25192 12.562L11.4599 15.77C11.5319 15.8419 11.6199 15.9 11.7159 15.94C11.72 15.942 11.7239 15.942 11.7279 15.9441C11.816 15.9801 11.9119 16 12.012 16C12.112 16 12.208 15.9801 12.296 15.9441C12.3001 15.9421 12.304 15.9421 12.308 15.94C12.404 15.9 12.492 15.8421 12.564 15.77L15.772 12.562C16.076 12.258 16.076 11.764 15.772 11.46C15.468 11.1582 14.974 11.1582 14.67 11.4621L14.67 11.4622Z"
                                        fill="black" fill-opacity="0.6"></path>
                                </svg>
                                <b>Sắp xếp:</b>
                                <select name="" id="">
                                    <option value="">Giá tăng dần</option>
                                    <option value="">Giá giảm dần</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-count">
                            <div class="count text-uppercase text-success">Có <span id="total_hotel_mb">6</span> khách sạn
                                gần/ tại <b>"Quảng Ninh"</b>
                            </div>
                        </div>
                        <div id="list-hotels" class="list-hotels" data-total="6">
                            <div class="item-hotel bg-white" data-type="1">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=60"
                                        title="Mường Thanh Luxury Hạ Long Centre">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/hotels/hotels/original/mthlc-1_1619490620_1653822698.jpeg"
                                            alt="Mường Thanh Luxury Hạ Long Centre" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Luxury Hạ Long Centre"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=60">Mường
                                            Thanh Luxury Hạ Long Centre</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Tiểu khu 2, đường Hạ Long, phường Bãi Cháy, thành phố Hạ Long, tỉnh
                                        Quảng Ninh
                                    </p>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        <svg class="me-1" width="28" height="18" viewBox="0 0 28 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.83301 3.87563C7.45856 3.53674 14.908 3.30341 12.8669 14.0679L15.1819 13.8795C14.168 7.24452 16.2891 3.86119 22.9213 3.53674C11.9213 -2.55492 5.65801 3.76897 4.83301 3.87563Z"
                                                fill="#FAC415"></path>
                                            <path
                                                d="M6.92379 11.2572C7.5672 11.2572 8.08879 10.7357 8.08879 10.0922C8.08879 9.44884 7.5672 8.92725 6.92379 8.92725C6.28038 8.92725 5.75879 9.44884 5.75879 10.0922C5.75879 10.7357 6.28038 11.2572 6.92379 11.2572Z"
                                                fill="#EE6946"></path>
                                            <path
                                                d="M20.9696 11.2567C21.6127 11.2567 22.1341 10.7353 22.1341 10.0922C22.1341 9.44914 21.6127 8.9278 20.9696 8.9278C20.3265 8.9278 19.8052 9.44914 19.8052 10.0922C19.8052 10.7353 20.3265 11.2567 20.9696 11.2567Z"
                                                fill="#00AF87"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.61 6.0034C26.9033 4.99618 27.3694 4.04784 27.9883 3.20118L23.3111 3.19729C20.5144 1.44618 17.2678 0.545064 13.9689 0.603953C10.5889 0.53173 7.25944 1.44451 4.38889 3.23062L0 3.23284C0.613333 4.0734 1.07722 5.0134 1.37167 6.01118C0.486667 7.2134 0.00888889 8.6684 0.00888889 10.1617C0.00888889 14.0028 3.16944 17.1634 7.01056 17.1634C9.13667 17.1634 11.1511 16.1945 12.4789 14.5334L13.9706 16.7667L15.4767 14.5145C16.8039 16.209 18.8406 17.2001 20.9928 17.2001C24.8367 17.2001 28 14.0367 28 10.1928C28 8.6834 27.5122 7.2134 26.61 6.0034ZM20.7611 3.17784C17.2006 3.28117 14.2611 6.09229 13.9983 9.64451C13.7333 6.05784 10.7506 3.22729 7.155 3.15062C9.31333 2.25395 11.6317 1.8034 13.9689 1.82562C16.3028 1.79062 18.6183 2.25117 20.7611 3.17784V3.17784ZM7.01444 15.7473H7.01389C3.945 15.7473 1.42 13.2223 1.42 10.1534C1.42 7.08395 3.945 4.55895 7.01389 4.55895C10.0828 4.55895 12.6083 7.08395 12.6083 10.1534V10.1545C12.6044 13.2217 10.0817 15.744 7.01444 15.7473V15.7473ZM22.9222 15.4301C20.0433 16.4912 16.8006 14.9973 15.7361 12.119V12.1173C15.5078 11.4973 15.3906 10.8423 15.3906 10.1817C15.3906 7.11229 17.9161 4.58729 20.985 4.58729C24.0544 4.58729 26.5794 7.11229 26.5794 10.1817C26.5794 12.519 25.115 14.6206 22.9222 15.4301ZM6.92833 6.63062H6.92333C5.02389 6.63062 3.46167 8.1934 3.46167 10.0923C3.46167 11.9917 5.02389 13.554 6.92333 13.554C8.82222 13.554 10.385 11.9917 10.385 10.0923V10.0917C10.3817 8.19618 8.82389 6.63618 6.92833 6.63062V6.63062ZM6.92833 12.3617H6.92389C5.67889 12.3617 4.65389 11.3373 4.65389 10.0923C4.65389 8.84729 5.67889 7.82284 6.92389 7.82284C8.16833 7.82284 9.19278 8.84729 9.19333 10.0917C9.19056 11.3345 8.17055 12.3562 6.92833 12.3617V12.3617ZM20.9694 6.63062H20.9678C19.0683 6.63062 17.5061 8.1934 17.5061 10.0923C17.5061 11.9917 19.0683 13.554 20.9678 13.554C22.8667 13.554 24.4294 11.9917 24.4294 10.0923V10.0917C24.4267 8.19451 22.8667 6.63395 20.9694 6.63062V6.63062ZM20.9694 12.3617H20.9683C19.7233 12.3617 18.6989 11.3373 18.6989 10.0923C18.6989 8.84729 19.7233 7.82284 20.9683 7.82284C22.2133 7.82284 23.2378 8.84729 23.2383 10.0917C23.2367 11.3362 22.2133 12.3595 20.9694 12.3617Z"
                                                fill="black"></path>
                                        </svg>
                                        &nbsp;
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        &nbsp;
                                        <p class="mb-0 fw-bold green-color ranking-hotel">5/5</p>
                                        &nbsp;
                                        <p class="mb-0">(30 reviews)</p>
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">

                                    <div class="content-price">
                                        <div class="d-price">
                                            <p class="text">Chỉ từ</p>
                                            <p class="c_price">24,000,000 <span>VNĐ</span></p>
                                            <p class="text">phòng/đêm</p>
                                        </div>
                                        <a title="Đặt ngay"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=60"
                                            class="book_hotel book_link">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-hotel d-block bg-white text-uppercase text-success">KHÁCH SẠN
                                MƯỜNG THANH KHÁC TRONG KHU VỰC</div>
                            <div class="item-hotel bg-white" data-type="2">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=40"
                                        title="Mường Thanh Grand Hạ Long">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/brands/2019/06/20/original/mthlo_1561017198.jpg"
                                            alt="Mường Thanh Grand Hạ Long" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Grand Hạ Long"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=40">Mường
                                            Thanh Grand Hạ Long</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Ô 7, lô 20 Đông Hùng Thắng, Bãi Cháy, thành phố Hạ Long, tỉnh Quảng
                                        Ninh, Việt Nam
                                    </p>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        <svg class="me-1" width="28" height="18" viewBox="0 0 28 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.83301 3.87563C7.45856 3.53674 14.908 3.30341 12.8669 14.0679L15.1819 13.8795C14.168 7.24452 16.2891 3.86119 22.9213 3.53674C11.9213 -2.55492 5.65801 3.76897 4.83301 3.87563Z"
                                                fill="#FAC415"></path>
                                            <path
                                                d="M6.92379 11.2572C7.5672 11.2572 8.08879 10.7357 8.08879 10.0922C8.08879 9.44884 7.5672 8.92725 6.92379 8.92725C6.28038 8.92725 5.75879 9.44884 5.75879 10.0922C5.75879 10.7357 6.28038 11.2572 6.92379 11.2572Z"
                                                fill="#EE6946"></path>
                                            <path
                                                d="M20.9696 11.2567C21.6127 11.2567 22.1341 10.7353 22.1341 10.0922C22.1341 9.44914 21.6127 8.9278 20.9696 8.9278C20.3265 8.9278 19.8052 9.44914 19.8052 10.0922C19.8052 10.7353 20.3265 11.2567 20.9696 11.2567Z"
                                                fill="#00AF87"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.61 6.0034C26.9033 4.99618 27.3694 4.04784 27.9883 3.20118L23.3111 3.19729C20.5144 1.44618 17.2678 0.545064 13.9689 0.603953C10.5889 0.53173 7.25944 1.44451 4.38889 3.23062L0 3.23284C0.613333 4.0734 1.07722 5.0134 1.37167 6.01118C0.486667 7.2134 0.00888889 8.6684 0.00888889 10.1617C0.00888889 14.0028 3.16944 17.1634 7.01056 17.1634C9.13667 17.1634 11.1511 16.1945 12.4789 14.5334L13.9706 16.7667L15.4767 14.5145C16.8039 16.209 18.8406 17.2001 20.9928 17.2001C24.8367 17.2001 28 14.0367 28 10.1928C28 8.6834 27.5122 7.2134 26.61 6.0034ZM20.7611 3.17784C17.2006 3.28117 14.2611 6.09229 13.9983 9.64451C13.7333 6.05784 10.7506 3.22729 7.155 3.15062C9.31333 2.25395 11.6317 1.8034 13.9689 1.82562C16.3028 1.79062 18.6183 2.25117 20.7611 3.17784V3.17784ZM7.01444 15.7473H7.01389C3.945 15.7473 1.42 13.2223 1.42 10.1534C1.42 7.08395 3.945 4.55895 7.01389 4.55895C10.0828 4.55895 12.6083 7.08395 12.6083 10.1534V10.1545C12.6044 13.2217 10.0817 15.744 7.01444 15.7473V15.7473ZM22.9222 15.4301C20.0433 16.4912 16.8006 14.9973 15.7361 12.119V12.1173C15.5078 11.4973 15.3906 10.8423 15.3906 10.1817C15.3906 7.11229 17.9161 4.58729 20.985 4.58729C24.0544 4.58729 26.5794 7.11229 26.5794 10.1817C26.5794 12.519 25.115 14.6206 22.9222 15.4301ZM6.92833 6.63062H6.92333C5.02389 6.63062 3.46167 8.1934 3.46167 10.0923C3.46167 11.9917 5.02389 13.554 6.92333 13.554C8.82222 13.554 10.385 11.9917 10.385 10.0923V10.0917C10.3817 8.19618 8.82389 6.63618 6.92833 6.63062V6.63062ZM6.92833 12.3617H6.92389C5.67889 12.3617 4.65389 11.3373 4.65389 10.0923C4.65389 8.84729 5.67889 7.82284 6.92389 7.82284C8.16833 7.82284 9.19278 8.84729 9.19333 10.0917C9.19056 11.3345 8.17055 12.3562 6.92833 12.3617V12.3617ZM20.9694 6.63062H20.9678C19.0683 6.63062 17.5061 8.1934 17.5061 10.0923C17.5061 11.9917 19.0683 13.554 20.9678 13.554C22.8667 13.554 24.4294 11.9917 24.4294 10.0923V10.0917C24.4267 8.19451 22.8667 6.63395 20.9694 6.63062V6.63062ZM20.9694 12.3617H20.9683C19.7233 12.3617 18.6989 11.3373 18.6989 10.0923C18.6989 8.84729 19.7233 7.82284 20.9683 7.82284C22.2133 7.82284 23.2378 8.84729 23.2383 10.0917C23.2367 11.3362 22.2133 12.3595 20.9694 12.3617Z"
                                                fill="black"></path>
                                        </svg>
                                        &nbsp;
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating  me-1"></span>
                                        &nbsp;
                                        <p class="mb-0 fw-bold green-color ranking-hotel">4/5</p>
                                        &nbsp;
                                        <p class="mb-0">(64 reviews)</p>
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">

                                    <div class="content-price">
                                        <div class="d-price">
                                            <p class="text">Chỉ từ</p>
                                            <p class="c_price">1,500,000 <span>VNĐ</span></p>
                                            <p class="text">phòng/đêm</p>
                                        </div>
                                        <a title="Đặt ngay"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=40"
                                            class="book_hotel book_link">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-hotel bg-white" data-type="1">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=64"
                                        title="Mường Thanh Luxury Hạ Long Residence">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/hotels/hotels/original/278845382_1656403292.jpg"
                                            alt="Mường Thanh Luxury Hạ Long Residence" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Luxury Hạ Long Residence"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=64">Mường
                                            Thanh Luxury Hạ Long Residence</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Khu 2, đường Hạ Long, phường Bãi Cháy, thành phố Hạ Long, tỉnh Quảng
                                        Ninh
                                    </p>
                                    <div class="service">
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Internet">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/internet_1653880176.svg"
                                                alt="Internet" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Đồ ăn thức uống">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/do-an-thuc-uong_1653880213.svg"
                                                alt="Đồ ăn thức uống" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Hoạt động">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/hoat-dong_1653880121.svg"
                                                alt="Hoạt động" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="An ninh">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/an-ninh_1653880147.svg"
                                                alt="An ninh" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Ngôn ngữ sử dụng">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/ngon-ngu-sd_1653880093.svg"
                                                alt="Ngôn ngữ sử dụng" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Dịch vụ doanh nhân">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/dv-doanh-nhan_1653880064.svg"
                                                alt="Dịch vụ doanh nhân" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Hồ bơi ngoài trời">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/phong-tam_1653879731.svg"
                                                alt="Hồ bơi ngoài trời" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Phương tiện đi lại">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/phuong-tien_1653879765.svg"
                                                alt="Phương tiện đi lại" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Lối vào dành cho người khuyết tật">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/nguoi-khuyet-ta_1653879803.svg"
                                                alt="Lối vào dành cho người khuyết tật" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Phòng ngủ">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/phong-ngu_1653879832.svg"
                                                alt="Phòng ngủ" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Dịch vụ lễ tân">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/dich-vu-le-tan_1653879873.svg"
                                                alt="Dịch vụ lễ tân" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Hồ bơi trong nhà">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/ho-boi-trong-nha_1653879904.svg"
                                                alt="Hồ bơi trong nhà" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Nhà bếp">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/nha-bep_1653879931.svg"
                                                alt="Nhà bếp" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Dịch vụ lau dọn">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/dv-lau-don_1653879959.svg"
                                                alt="Dịch vụ lau dọn" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Chăm sóc sức khỏe">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/cham-soc-sk_1653879993.svg"
                                                alt="Chăm sóc sức khỏe" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Tiện ích trong phòng">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/tien-ich-trong-phong_1653880032.svg"
                                                alt="Tiện ích trong phòng" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Truyền thông và công nghệ">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/truyen-thong-cong-nghe_1653880341.svg"
                                                alt="Truyền thông và công nghệ" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Chỗ đậu xe">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/cho-dau-xe_1653880279.svg"
                                                alt="Chỗ đậu xe" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Tổng quát">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/tong-quat_1653880243.svg"
                                                alt="Tổng quát" class="img-responsive">
                                        </div>
                                        <div class="item-service" data-toggle="tooltip" data-placement="top"
                                            title="" data-bs-original-title="Phòng tắm">
                                            <img height="20" width="20"
                                                src="https://booking.muongthanh.com/images/hotels/service/2022/05/original/phong-tam_1653881993.svg"
                                                alt="Phòng tắm" class="img-responsive">
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        &nbsp;
                                        &nbsp;
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">

                                    <div class="content-price">
                                        <div class="d-price">
                                            <p class="text">Chỉ từ</p>
                                            <p class="c_price">2,103,400 <span>VNĐ</span></p>
                                            <p class="text">phòng/đêm</p>
                                        </div>
                                        <a title="Đặt ngay"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=64"
                                            class="book_hotel book_link">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-hotel bg-white" data-type="3">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=58"
                                        title="Mường Thanh Holiday Suối Mơ">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/brands/2020/08/06/original/mt_suoimo_1596683785.jpg"
                                            alt="Mường Thanh Holiday Suối Mơ" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Holiday Suối Mơ"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=58">Mường
                                            Thanh Holiday Suối Mơ</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Đường Hạ Long, P.Bãi Cháy, TP. Hạ Long, T.Quảng Ninh
                                    </p>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        <svg class="me-1" width="28" height="18" viewBox="0 0 28 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.83301 3.87563C7.45856 3.53674 14.908 3.30341 12.8669 14.0679L15.1819 13.8795C14.168 7.24452 16.2891 3.86119 22.9213 3.53674C11.9213 -2.55492 5.65801 3.76897 4.83301 3.87563Z"
                                                fill="#FAC415"></path>
                                            <path
                                                d="M6.92379 11.2572C7.5672 11.2572 8.08879 10.7357 8.08879 10.0922C8.08879 9.44884 7.5672 8.92725 6.92379 8.92725C6.28038 8.92725 5.75879 9.44884 5.75879 10.0922C5.75879 10.7357 6.28038 11.2572 6.92379 11.2572Z"
                                                fill="#EE6946"></path>
                                            <path
                                                d="M20.9696 11.2567C21.6127 11.2567 22.1341 10.7353 22.1341 10.0922C22.1341 9.44914 21.6127 8.9278 20.9696 8.9278C20.3265 8.9278 19.8052 9.44914 19.8052 10.0922C19.8052 10.7353 20.3265 11.2567 20.9696 11.2567Z"
                                                fill="#00AF87"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.61 6.0034C26.9033 4.99618 27.3694 4.04784 27.9883 3.20118L23.3111 3.19729C20.5144 1.44618 17.2678 0.545064 13.9689 0.603953C10.5889 0.53173 7.25944 1.44451 4.38889 3.23062L0 3.23284C0.613333 4.0734 1.07722 5.0134 1.37167 6.01118C0.486667 7.2134 0.00888889 8.6684 0.00888889 10.1617C0.00888889 14.0028 3.16944 17.1634 7.01056 17.1634C9.13667 17.1634 11.1511 16.1945 12.4789 14.5334L13.9706 16.7667L15.4767 14.5145C16.8039 16.209 18.8406 17.2001 20.9928 17.2001C24.8367 17.2001 28 14.0367 28 10.1928C28 8.6834 27.5122 7.2134 26.61 6.0034ZM20.7611 3.17784C17.2006 3.28117 14.2611 6.09229 13.9983 9.64451C13.7333 6.05784 10.7506 3.22729 7.155 3.15062C9.31333 2.25395 11.6317 1.8034 13.9689 1.82562C16.3028 1.79062 18.6183 2.25117 20.7611 3.17784V3.17784ZM7.01444 15.7473H7.01389C3.945 15.7473 1.42 13.2223 1.42 10.1534C1.42 7.08395 3.945 4.55895 7.01389 4.55895C10.0828 4.55895 12.6083 7.08395 12.6083 10.1534V10.1545C12.6044 13.2217 10.0817 15.744 7.01444 15.7473V15.7473ZM22.9222 15.4301C20.0433 16.4912 16.8006 14.9973 15.7361 12.119V12.1173C15.5078 11.4973 15.3906 10.8423 15.3906 10.1817C15.3906 7.11229 17.9161 4.58729 20.985 4.58729C24.0544 4.58729 26.5794 7.11229 26.5794 10.1817C26.5794 12.519 25.115 14.6206 22.9222 15.4301ZM6.92833 6.63062H6.92333C5.02389 6.63062 3.46167 8.1934 3.46167 10.0923C3.46167 11.9917 5.02389 13.554 6.92333 13.554C8.82222 13.554 10.385 11.9917 10.385 10.0923V10.0917C10.3817 8.19618 8.82389 6.63618 6.92833 6.63062V6.63062ZM6.92833 12.3617H6.92389C5.67889 12.3617 4.65389 11.3373 4.65389 10.0923C4.65389 8.84729 5.67889 7.82284 6.92389 7.82284C8.16833 7.82284 9.19278 8.84729 9.19333 10.0917C9.19056 11.3345 8.17055 12.3562 6.92833 12.3617V12.3617ZM20.9694 6.63062H20.9678C19.0683 6.63062 17.5061 8.1934 17.5061 10.0923C17.5061 11.9917 19.0683 13.554 20.9678 13.554C22.8667 13.554 24.4294 11.9917 24.4294 10.0923V10.0917C24.4267 8.19451 22.8667 6.63395 20.9694 6.63062V6.63062ZM20.9694 12.3617H20.9683C19.7233 12.3617 18.6989 11.3373 18.6989 10.0923C18.6989 8.84729 19.7233 7.82284 20.9683 7.82284C22.2133 7.82284 23.2378 8.84729 23.2383 10.0917C23.2367 11.3362 22.2133 12.3595 20.9694 12.3617Z"
                                                fill="black"></path>
                                        </svg>
                                        &nbsp;
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-half me-1"></span>
                                        &nbsp;
                                        <p class="mb-0 fw-bold green-color ranking-hotel">4.5/5</p>
                                        &nbsp;
                                        <p class="mb-0">(6 reviews)</p>
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">

                                    <div class="content-price">
                                        <div class="d-price">
                                            <p class="text">Chỉ từ</p>
                                            <p class="c_price">3,200,000 <span>VNĐ</span></p>
                                            <p class="text">phòng/đêm</p>
                                        </div>
                                        <a title="Đặt ngay"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=58"
                                            class="book_hotel book_link">Đặt ngay</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-hotel bg-white" data-type="1">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=39"
                                        title="Mường Thanh Luxury Quảng Ninh">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/brands/2019/05/15/original/lux_quangninh_1557913053.jpg"
                                            alt="Mường Thanh Luxury Quảng Ninh" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Luxury Quảng Ninh"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=39">Mường
                                            Thanh Luxury Quảng Ninh</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Số 1, khu vực Bãi Cháy 2, phường Bãi Cháy, thành phố Hạ Long, tỉnh
                                        Quảng Ninh, Việt Nam
                                    </p>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        <svg class="me-1" width="28" height="18" viewBox="0 0 28 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.83301 3.87563C7.45856 3.53674 14.908 3.30341 12.8669 14.0679L15.1819 13.8795C14.168 7.24452 16.2891 3.86119 22.9213 3.53674C11.9213 -2.55492 5.65801 3.76897 4.83301 3.87563Z"
                                                fill="#FAC415"></path>
                                            <path
                                                d="M6.92379 11.2572C7.5672 11.2572 8.08879 10.7357 8.08879 10.0922C8.08879 9.44884 7.5672 8.92725 6.92379 8.92725C6.28038 8.92725 5.75879 9.44884 5.75879 10.0922C5.75879 10.7357 6.28038 11.2572 6.92379 11.2572Z"
                                                fill="#EE6946"></path>
                                            <path
                                                d="M20.9696 11.2567C21.6127 11.2567 22.1341 10.7353 22.1341 10.0922C22.1341 9.44914 21.6127 8.9278 20.9696 8.9278C20.3265 8.9278 19.8052 9.44914 19.8052 10.0922C19.8052 10.7353 20.3265 11.2567 20.9696 11.2567Z"
                                                fill="#00AF87"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.61 6.0034C26.9033 4.99618 27.3694 4.04784 27.9883 3.20118L23.3111 3.19729C20.5144 1.44618 17.2678 0.545064 13.9689 0.603953C10.5889 0.53173 7.25944 1.44451 4.38889 3.23062L0 3.23284C0.613333 4.0734 1.07722 5.0134 1.37167 6.01118C0.486667 7.2134 0.00888889 8.6684 0.00888889 10.1617C0.00888889 14.0028 3.16944 17.1634 7.01056 17.1634C9.13667 17.1634 11.1511 16.1945 12.4789 14.5334L13.9706 16.7667L15.4767 14.5145C16.8039 16.209 18.8406 17.2001 20.9928 17.2001C24.8367 17.2001 28 14.0367 28 10.1928C28 8.6834 27.5122 7.2134 26.61 6.0034ZM20.7611 3.17784C17.2006 3.28117 14.2611 6.09229 13.9983 9.64451C13.7333 6.05784 10.7506 3.22729 7.155 3.15062C9.31333 2.25395 11.6317 1.8034 13.9689 1.82562C16.3028 1.79062 18.6183 2.25117 20.7611 3.17784V3.17784ZM7.01444 15.7473H7.01389C3.945 15.7473 1.42 13.2223 1.42 10.1534C1.42 7.08395 3.945 4.55895 7.01389 4.55895C10.0828 4.55895 12.6083 7.08395 12.6083 10.1534V10.1545C12.6044 13.2217 10.0817 15.744 7.01444 15.7473V15.7473ZM22.9222 15.4301C20.0433 16.4912 16.8006 14.9973 15.7361 12.119V12.1173C15.5078 11.4973 15.3906 10.8423 15.3906 10.1817C15.3906 7.11229 17.9161 4.58729 20.985 4.58729C24.0544 4.58729 26.5794 7.11229 26.5794 10.1817C26.5794 12.519 25.115 14.6206 22.9222 15.4301ZM6.92833 6.63062H6.92333C5.02389 6.63062 3.46167 8.1934 3.46167 10.0923C3.46167 11.9917 5.02389 13.554 6.92333 13.554C8.82222 13.554 10.385 11.9917 10.385 10.0923V10.0917C10.3817 8.19618 8.82389 6.63618 6.92833 6.63062V6.63062ZM6.92833 12.3617H6.92389C5.67889 12.3617 4.65389 11.3373 4.65389 10.0923C4.65389 8.84729 5.67889 7.82284 6.92389 7.82284C8.16833 7.82284 9.19278 8.84729 9.19333 10.0917C9.19056 11.3345 8.17055 12.3562 6.92833 12.3617V12.3617ZM20.9694 6.63062H20.9678C19.0683 6.63062 17.5061 8.1934 17.5061 10.0923C17.5061 11.9917 19.0683 13.554 20.9678 13.554C22.8667 13.554 24.4294 11.9917 24.4294 10.0923V10.0917C24.4267 8.19451 22.8667 6.63395 20.9694 6.63062V6.63062ZM20.9694 12.3617H20.9683C19.7233 12.3617 18.6989 11.3373 18.6989 10.0923C18.6989 8.84729 19.7233 7.82284 20.9683 7.82284C22.2133 7.82284 23.2378 8.84729 23.2383 10.0917C23.2367 11.3362 22.2133 12.3595 20.9694 12.3617Z"
                                                fill="black"></path>
                                        </svg>
                                        &nbsp;
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating  me-1"></span>
                                        &nbsp;
                                        <p class="mb-0 fw-bold green-color ranking-hotel">4/5</p>
                                        &nbsp;
                                        <p class="mb-0">(136 reviews)</p>
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">
                                    <div class="content-price">
                                        <a title="Hết phòng" href="javascript:void(0)" class="book_hotel">Hết phòng</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item-hotel bg-white" data-type="2">
                                <div class="images">
                                    <a href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=56"
                                        title="Mường Thanh Grand Bãi Cháy">
                                        <img loading="lazy" width="300" height="200"
                                            onerror="this.src='/images/not_picture.png'"
                                            src="https://booking.muongthanh.com/images/brands/2021/02/22/original/mtbc-2_1596684103_1613965358.jpg"
                                            alt="Mường Thanh Grand Bãi Cháy" class="img-responsive">
                                    </a>
                                </div>
                                <div class="content">
                                    <h2><a class="book_link" title="Mường Thanh Grand Bãi Cháy"
                                            href="https://booking.muongthanh.com/booking/room?location=1498&amp;checkin=2022-08-12&amp;checkout=2022-08-13&amp;room=2&amp;voucher=&amp;hotel=56">Mường
                                            Thanh Grand Bãi Cháy</a></h2>
                                    <p class="address">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14 6.66666C14 11.3333 8 15.3333 8 15.3333C8 15.3333 2 11.3333 2 6.66666C2 5.07536 2.63214 3.54923 3.75736 2.42402C4.88258 1.2988 6.4087 0.666656 8 0.666656C9.5913 0.666656 11.1174 1.2988 12.2426 2.42402C13.3679 3.54923 14 5.07536 14 6.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path
                                                d="M8 8.66666C9.10457 8.66666 10 7.77123 10 6.66666C10 5.56209 9.10457 4.66666 8 4.66666C6.89543 4.66666 6 5.56209 6 6.66666C6 7.77123 6.89543 8.66666 8 8.66666Z"
                                                stroke="#626262" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        Số 20, đường Hạ Long, phường Bãi cháy, TP HạLong, Quảng Ninh
                                    </p>
                                    <div class="d-flex align-items-center justify-content-start vote">
                                        <svg class="me-1" width="28" height="18" viewBox="0 0 28 18"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.83301 3.87563C7.45856 3.53674 14.908 3.30341 12.8669 14.0679L15.1819 13.8795C14.168 7.24452 16.2891 3.86119 22.9213 3.53674C11.9213 -2.55492 5.65801 3.76897 4.83301 3.87563Z"
                                                fill="#FAC415"></path>
                                            <path
                                                d="M6.92379 11.2572C7.5672 11.2572 8.08879 10.7357 8.08879 10.0922C8.08879 9.44884 7.5672 8.92725 6.92379 8.92725C6.28038 8.92725 5.75879 9.44884 5.75879 10.0922C5.75879 10.7357 6.28038 11.2572 6.92379 11.2572Z"
                                                fill="#EE6946"></path>
                                            <path
                                                d="M20.9696 11.2567C21.6127 11.2567 22.1341 10.7353 22.1341 10.0922C22.1341 9.44914 21.6127 8.9278 20.9696 8.9278C20.3265 8.9278 19.8052 9.44914 19.8052 10.0922C19.8052 10.7353 20.3265 11.2567 20.9696 11.2567Z"
                                                fill="#00AF87"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M26.61 6.0034C26.9033 4.99618 27.3694 4.04784 27.9883 3.20118L23.3111 3.19729C20.5144 1.44618 17.2678 0.545064 13.9689 0.603953C10.5889 0.53173 7.25944 1.44451 4.38889 3.23062L0 3.23284C0.613333 4.0734 1.07722 5.0134 1.37167 6.01118C0.486667 7.2134 0.00888889 8.6684 0.00888889 10.1617C0.00888889 14.0028 3.16944 17.1634 7.01056 17.1634C9.13667 17.1634 11.1511 16.1945 12.4789 14.5334L13.9706 16.7667L15.4767 14.5145C16.8039 16.209 18.8406 17.2001 20.9928 17.2001C24.8367 17.2001 28 14.0367 28 10.1928C28 8.6834 27.5122 7.2134 26.61 6.0034ZM20.7611 3.17784C17.2006 3.28117 14.2611 6.09229 13.9983 9.64451C13.7333 6.05784 10.7506 3.22729 7.155 3.15062C9.31333 2.25395 11.6317 1.8034 13.9689 1.82562C16.3028 1.79062 18.6183 2.25117 20.7611 3.17784V3.17784ZM7.01444 15.7473H7.01389C3.945 15.7473 1.42 13.2223 1.42 10.1534C1.42 7.08395 3.945 4.55895 7.01389 4.55895C10.0828 4.55895 12.6083 7.08395 12.6083 10.1534V10.1545C12.6044 13.2217 10.0817 15.744 7.01444 15.7473V15.7473ZM22.9222 15.4301C20.0433 16.4912 16.8006 14.9973 15.7361 12.119V12.1173C15.5078 11.4973 15.3906 10.8423 15.3906 10.1817C15.3906 7.11229 17.9161 4.58729 20.985 4.58729C24.0544 4.58729 26.5794 7.11229 26.5794 10.1817C26.5794 12.519 25.115 14.6206 22.9222 15.4301ZM6.92833 6.63062H6.92333C5.02389 6.63062 3.46167 8.1934 3.46167 10.0923C3.46167 11.9917 5.02389 13.554 6.92333 13.554C8.82222 13.554 10.385 11.9917 10.385 10.0923V10.0917C10.3817 8.19618 8.82389 6.63618 6.92833 6.63062V6.63062ZM6.92833 12.3617H6.92389C5.67889 12.3617 4.65389 11.3373 4.65389 10.0923C4.65389 8.84729 5.67889 7.82284 6.92389 7.82284C8.16833 7.82284 9.19278 8.84729 9.19333 10.0917C9.19056 11.3345 8.17055 12.3562 6.92833 12.3617V12.3617ZM20.9694 6.63062H20.9678C19.0683 6.63062 17.5061 8.1934 17.5061 10.0923C17.5061 11.9917 19.0683 13.554 20.9678 13.554C22.8667 13.554 24.4294 11.9917 24.4294 10.0923V10.0917C24.4267 8.19451 22.8667 6.63395 20.9694 6.63062V6.63062ZM20.9694 12.3617H20.9683C19.7233 12.3617 18.6989 11.3373 18.6989 10.0923C18.6989 8.84729 19.7233 7.82284 20.9683 7.82284C22.2133 7.82284 23.2378 8.84729 23.2383 10.0917C23.2367 11.3362 22.2133 12.3595 20.9694 12.3617Z"
                                                fill="black"></path>
                                        </svg>
                                        &nbsp;
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        <span class="rating rating-active me-1"></span>
                                        &nbsp;
                                        <p class="mb-0 fw-bold green-color ranking-hotel">5/5</p>
                                        &nbsp;
                                        <p class="mb-0">(7 reviews)</p>
                                    </div>
                                    <!-- <div class="tags d-inline-flex align-items-center justify-content-center">
                <div class="item-tag">Gần bãi biển</div>
                <div class="item-tag">Gần trung tâm</div>
            </div> -->
                                </div>
                                <div class="price">
                                    <div class="content-price">
                                        <a title="Hết phòng" href="javascript:void(0)" class="book_hotel">Hết phòng</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
