@extends('layouts.app')

@section('content')
<div class="tour padding--top">
    <!-- <div class="tour__slider overflow-hidden swiper-initialized swiper-horizontal swiper-pointer-events">
        <div class="swiper-wrapper" id="swiper-wrapper-f6c1acd3f69db1eb" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1262.25px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/01.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/02.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/03.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/04.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/01.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/02.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/03.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/04.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" role="group" aria-label="1 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/01.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1" role="group" aria-label="2 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/02.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="2" role="group" aria-label="3 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/03.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" role="group" aria-label="4 / 4" style="width: 217.5px; margin-right: 12px;">
                <div class="tour__item">
                    <div class="tour__thumb">
                        <img src="assets/images/tour/04.jpg" alt="Travel Thumb">
                    </div>
                </div>
            </div>
        </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div> -->
    <div class="container">
        <div class="tour__info mb-5">
            <div class="tour__info--title">
                <h2>Enjoy Beauty place in Bali City.</h2>
            </div>
            <div class="row g-4 row-cols-xl-5 row-cols-sm-3 row-cols-1">
                <div class="col">
                    <div class="tour__info--list">
                        <div class="left">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="right">
                            <p><span>place</span> Bali, indonesha</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tour__info--list">
                        <div class="left">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="right">
                            <p><span>Duration</span> 10 days</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tour__info--list">
                        <div class="left">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div class="right">
                            <p><span>join</span> 8 person</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tour__info--list">
                        <div class="left">
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <div class="right">
                            <p><span>Review</span> 4.8 (2.5k Review)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tour__info--list">
                        <a class="default__btn"><span>$250.00</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section__wrapper">
            <div class="row g-4">
                <div class="col-lg-9">
                    <div class="row g-4 row-cols-1">
                        <div class="col">
                            <div class="tour__item">
                                <div class="tour__inner">
                                    <div class="tour__content">
                                        <h3>Overview</h3>
                                        <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti gravida augue Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat a volutpat eleifend nibh Bibendum malesuada ridiculus Dapibus vel duis rhoncus socio Sollicitudin cubil of the rhoncus sociosqu Taciti gravidictudonec vivamus potenti cursus</p>
                                        <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti gravida augue Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat a volutpat eleifend nibh Bibendum malesuada ridiculus Dapibus vel duis rhoncus socio Sollicitudin cubil of the rhoncus sociosqu Taciti gravidictudonec vivamus potenti cursus</p>
                                        <div class="tour__content--info">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="tour__content--title">
                                                        <h3>Included</h3>
                                                    </div>
                                                    <div class="tour__content--details">
                                                        <ul>
                                                            <li><i class="fa-solid fa-circle-check"></i>Pick and Drop Services</li>
                                                            <li><i class="fa-solid fa-circle-check"></i>1 Meal Per Day</li>
                                                            <li><i class="fa-solid fa-circle-check"></i>Cruise Dinner &amp; Music Event</li>
                                                            <li><i class="fa-solid fa-circle-check"></i>Visit 7 Best Places in the City</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="tour__content--title">
                                                        <h3>Exclude</h3>
                                                    </div>
                                                    <div class="tour__content--details">
                                                        <ul>
                                                            <li><i class="fa-solid fa-circle-xmark"></i>Additional Services</li>
                                                            <li><i class="fa-solid fa-circle-xmark"></i>Insurance</li>
                                                            <li><i class="fa-solid fa-circle-xmark"></i>Food &amp; Drinks</li>
                                                            <li><i class="fa-solid fa-circle-xmark"></i>Tickets</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tour__content--accordion">
                                            <div class="tour__content--title">
                                                <h3>Day Tour Plan</h3>
                                            </div>
                                            <div class="tour__content--details">
                                                <div class="accordion" id="accordionExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingOne">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Day 1</button>
                                                        </h2>
                                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat  gravidictudonec vivamus potenti cursus cras cubil </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingTwo">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Day 2</button>
                                                        </h2>
                                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat  gravidictudonec vivamus potenti cursus cras cubil </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingThree">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Day 3</button>
                                                        </h2>
                                                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat  gravidictudonec vivamus potenti cursus cras cubil </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="headingFour">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Day 4</button>
                                                        </h2>
                                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <p>Aliquam euismod at potenti velit risus erat nulla blandit leo. Sagittis cubil of the rhoncus sociosqu Taciti Vestibulum Eu augue augue duis rhoncus sociosqu cubil of the rhoncus sociosqu Taciti gravidaduis rhoncuQuam nec erat  gravidictudonec vivamus potenti cursus cras cubil </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tour__location">
                                        <div class="tour__location--title">
                                            <h3>Location</h3>
                                        </div>
                                        <div class="tour__location--details">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.275578278180674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1648892863588!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="sidebar__search mb-4 bg-white">
                            <form action="#">
                                <input type="text" placeholder="Search here ................">
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                        </div>

                        <div class="sidebar__catagory mb-4 bg-white">
                            <div class="sidebar__catagory--area">
                                <div class="sidebar__catagory--title">
                                    <h4>Post Calegory</h4>
                                </div>
                                <div class="sidebar__catagory--body">
                                    <ul>
                                        <li>
                                            <a href="#">Action</a>
                                            <span>(20)</span>
                                        </li>
                                        <li>
                                            <a href="#">Adventure</a>
                                            <span>(15)</span>
                                        </li>
                                        <li>
                                            <a href="#">Fighting</a>
                                            <span>(16)</span>
                                        </li>
                                        <li>
                                            <a href="#">Flight Simulation</a>
                                            <span>(12)</span>
                                        </li>
                                        <li>
                                            <a href="#">platfrom</a>
                                            <span>(22)</span>
                                        </li>
                                        <li>
                                            <a href="#">Racing</a>
                                            <span>(30)</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__post mb-4 bg-white">
                            <div class="sidebar__post--area">
                                <div class="sidebar__post--title">
                                    <h4>popular Post</h4>
                                </div>
                                <div class="sidebar__post--body">
                                    <ul>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="assets/images/sidebar/post/01.jpg" alt="travel thumb"></a>
                                            </div>
                                            <div class="content">
                                                <a href="blog-single.html"><h6>Travellers History France</h6></a>
                                                <p>November 15,2022</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="assets/images/sidebar/post/02.jpg" alt="travel thumb"></a>
                                            </div>
                                            <div class="content">
                                                <a href="blog-single.html"><h6>Diving Atlantic Malvides</h6></a>
                                                <p>November 15,2022</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="assets/images/sidebar/post/03.jpg" alt="travel thumb"></a>
                                            </div>
                                            <div class="content">
                                                <a href="blog-single.html"><h6>Travellers History France</h6></a>
                                                <p>November 15,2022</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="thumb">
                                                <a href="blog-single.html"><img src="assets/images/sidebar/post/04.jpg" alt="travel thumb"></a>
                                            </div>
                                            <div class="content">
                                                <a href="blog-single.html"><h6>Diving Atlantic Malvides</h6></a>
                                                <p>November 15,2022</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__tag bg-white mb-4">
                            <div class="sidebar__tag--area">
                                <div class="sidebar__tag--title">
                                    <h4>Popular Tag</h4>
                                </div>
                                <div class="sidebar__tag--body">
                                    <ul>
                                        <li><a href="#">Travel</a></li>
                                        <li><a href="#">Tour</a></li>
                                        <li><a href="#">Maldivs</a></li>
                                        <li><a href="#">Thailand</a></li>
                                        <li><a href="#">Traveling</a></li>
                                        <li><a href="#">Hong Kong</a></li>
                                        <li><a href="#">Francisco</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="sidebar__offer">
                            <div class="sidebar__offer--thumb">
                                <a href="#"><img src="assets/images/offer/01.jpg" alt="travel thumb"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
