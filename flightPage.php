<?php include 'attachments/head.php'; ?>
<?php include 'attachments/header.php'; ?>

<section class="flight-sec-one">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-reservation-tabs mtb-30">
                    <ul class="br-tabs">
                        <li class="active br-item"><a href="javascript:;">Round Trip</a></li>
                        <li class="br-item"><a href="javascript:;">One Way</a></li>
                        <li class="br-item"><a href="javascript:;">Multiple Destinations</a></li>
                    </ul><!-- .br-tabs end -->
                    <ul class="br-tabs-content" style="height: 135px;">
                        <li class="active" style="display: list-item;">
                            <form class="form-banner-reservation form-inline style-2 form-h-50">
                                <div class="form-group">
                                    <input type="text" name="brPlaceStart" class="form-control" placeholder="From">
                                    <i class="fas fa-plane"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
                                    <i class="fas fa-plane"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brTimeStart" class="form-control hasDatepicker" id="datepicker-time-start" placeholder="2024/10/05">
                                    <i class="far fa-calendar"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brTimeEnd" class="form-control hasDatepicker" id="datepicker-time-end" placeholder="2024/10/05">
                                    <i class="far fa-calendar"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers" placeholder="Passengers">
                                    <i class="fas fa-user"></i>
                                    <ul class="list-dropdown-passengers">
                                        <li>
                                            <ul class="list-persons-count">
                                                <li>
                                                    <span>Adults:</span>
                                                    <div class="counter-add-item">
                                                        <a class="decrease-btn" href="javascript:;">-</a>
                                                        <input type="text" value="1">
                                                        <a class="increase-btn" href="javascript:;">+</a>
                                                    </div><!-- .counter-add-item end -->
                                                </li>
                                                <li>
                                                    <span>Childs:</span>
                                                    <div class="counter-add-item">
                                                        <a class="decrease-btn" href="javascript:;">-</a>
                                                        <input type="text" value="0">
                                                        <a class="increase-btn" href="javascript:;">+</a>
                                                    </div><!-- .counter-add-item end -->
                                                </li>
                                            </ul><!-- .list-persons-count end -->
                                        </li>
                                        <li>
                                            <ul class="list-select-grade">
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        Economy Class
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        Business Class
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        First Class
                                                    </label>
                                                </li>
                                            </ul><!-- .list-select-grade end -->
                                        </li>
                                        <li>
                                            <ul class="list-reservation-options">
                                                <li>
                                                    <label class="label-container checkbox-default">
                                                        <span>
                                                            Nonstop
                                                        </span>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container checkbox-default">
                                                        <span>
                                                            Refundable
                                                        </span>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul><!-- .list-reservation-options end -->
                                        </li>
                                        <li>
                                            <a class="btn-reservation-passengers btn x-small colorful hover-dark" href="javascript:;">Done</a>
                                        </li>
                                    </ul><!-- .list-dropdown-passengers end -->
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
                                </div><!-- .form-group end -->
                            </form><!-- .form-banner-reservation end -->
                        </li>
                        <li>
                            <form class="form-banner-reservation form-inline style-2 form-h-50">
                                <div class="form-group">
                                    <input type="text" name="brPlaceStart" class="form-control" placeholder="From">
                                    <i class="fas fa-plane"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
                                    <i class="fas fa-plane"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brTimeStart" class="form-control datepicker-2-time-start hasDatepicker" placeholder="2019/09/30" id="dp1728166116508">
                                    <i class="far fa-calendar"></i>
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers" placeholder="Passengers">
                                    <i class="fas fa-user"></i>
                                    <ul class="list-dropdown-passengers">
                                        <li>
                                            <ul class="list-persons-count">
                                                <li>
                                                    <span>Adults:</span>
                                                    <div class="counter-add-item">
                                                        <a class="decrease-btn" href="javascript:;">-</a>
                                                        <input type="text" value="1">
                                                        <a class="increase-btn" href="javascript:;">+</a>
                                                    </div><!-- .counter-add-item end -->
                                                </li>
                                                <li>
                                                    <span>Childs:</span>
                                                    <div class="counter-add-item">
                                                        <a class="decrease-btn" href="javascript:;">-</a>
                                                        <input type="text" value="0">
                                                        <a class="increase-btn" href="javascript:;">+</a>
                                                    </div><!-- .counter-add-item end -->
                                                </li>
                                            </ul><!-- .list-persons-count end -->
                                        </li>
                                        <li>
                                            <ul class="list-select-grade">
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        Economy Class
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        Business Class
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="radio-container radio-default">
                                                        <input type="radio" checked="checked" name="radio">
                                                        <span class="checkmark"></span>
                                                        First Class
                                                    </label>
                                                </li>
                                            </ul><!-- .list-select-grade end -->
                                        </li>
                                        <li>
                                            <ul class="list-reservation-options">
                                                <li>
                                                    <label class="label-container checkbox-default">
                                                        <span>
                                                            Nonstop
                                                        </span>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="label-container checkbox-default">
                                                        <span>
                                                            Refundable
                                                        </span>
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
                                            </ul><!-- .list-reservation-options end -->
                                        </li>
                                        <li>
                                            <a class="btn-reservation-passengers btn x-small colorful hover-dark" href="javascript:;">Done</a>
                                        </li>
                                    </ul><!-- .list-dropdown-passengers end -->
                                </div><!-- .form-group end -->
                                <div class="form-group">
                                    <button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
                                </div><!-- .form-group end -->
                            </form><!-- .form-banner-reservation end -->
                        </li>
                        <li>
                            <div class="multiple-destinations">
                                <form class="form-banner-reservation form-inline style-2 form-h-50">
                                    <div class="form-group">
                                        <div class="fields-row fields-4">
                                            <div class="box-field">
                                                <input type="text" name="brPlaceStart" class="form-control" placeholder="From">
                                                <i class="fas fa-plane rotate-90-pos"></i>
                                            </div><!-- .box-field end -->
                                            <div class="box-field">
                                                <input type="text" name="brPlaceEnd" class="form-control" placeholder="To">
                                                <i class="fas fa-plane rotate-90-neg"></i>
                                            </div><!-- .box-field end -->
                                            <div class="box-field">
                                                <input type="text" name="brTimeStart" class="form-control datepicker-2-time-start hasDatepicker" placeholder="2019/09/30" id="dp1728166116509">
                                                <i class="far fa-calendar"></i>
                                            </div><!-- .box-field end -->
                                            <div class="box-field">
                                                <input type="text" name="brPassengerNumber" class="form-control show-dropdown-passengers" placeholder="Passengers">
                                                <i class="fas fa-user"></i>
                                                <ul class="list-dropdown-passengers">
                                                    <li>
                                                        <ul class="list-persons-count">
                                                            <li>
                                                                <span>Adults:</span>
                                                                <div class="counter-add-item">
                                                                    <a class="decrease-btn" href="javascript:;">-</a>
                                                                    <input type="text" value="1">
                                                                    <a class="increase-btn" href="javascript:;">+</a>
                                                                </div><!-- .counter-add-item end -->
                                                            </li>
                                                            <li>
                                                                <span>Childs:</span>
                                                                <div class="counter-add-item">
                                                                    <a class="decrease-btn" href="javascript:;">-</a>
                                                                    <input type="text" value="0">
                                                                    <a class="increase-btn" href="javascript:;">+</a>
                                                                </div><!-- .counter-add-item end -->
                                                            </li>
                                                        </ul><!-- .list-persons-count end -->
                                                    </li>
                                                    <li>
                                                        <ul class="list-select-grade">
                                                            <li>
                                                                <label class="radio-container radio-default">
                                                                    <input type="radio" checked="checked" name="radio">
                                                                    <span class="checkmark"></span>
                                                                    Economy Class
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="radio-container radio-default">
                                                                    <input type="radio" checked="checked" name="radio">
                                                                    <span class="checkmark"></span>
                                                                    Business Class
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="radio-container radio-default">
                                                                    <input type="radio" checked="checked" name="radio">
                                                                    <span class="checkmark"></span>
                                                                    First Class
                                                                </label>
                                                            </li>
                                                        </ul><!-- .list-select-grade end -->
                                                    </li>
                                                    <li>
                                                        <ul class="list-reservation-options">
                                                            <li>
                                                                <label class="label-container checkbox-default">
                                                                    <span>
                                                                        Nonstop
                                                                    </span>
                                                                    <input type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="label-container checkbox-default">
                                                                    <span>
                                                                        Refundable
                                                                    </span>
                                                                    <input type="checkbox">
                                                                    <span class="checkmark"></span>
                                                                </label>
                                                            </li>
                                                        </ul><!-- .list-reservation-options end -->
                                                    </li>
                                                    <li>
                                                        <a class="btn-reservation-passengers btn x-small colorful hover-dark" href="javascript:;">Done</a>
                                                    </li>
                                                </ul><!-- .list-dropdown-passengers end -->
                                            </div><!-- .box-field end -->
                                        </div><!-- .fields-row end -->
                                    </div><!-- .form-group end -->
                                    <div class="form-group">
                                        <button type="submit" class="form-control icon"><i class="fas fa-search"></i></button>
                                    </div><!-- .form-group end -->
                                </form><!-- .form-banner-reservation end -->
                                <a class="btn-multiple-destinations btn x-small colorful hover-dark" href="javascript:;">
                                    <i class="fas fa-plus"></i>
                                    Add Another Flight
                                </a>
                            </div><!-- .multiple-destinations end -->
                        </li>
                    </ul><!-- .br-tabs-content end -->
                </div>
            </div>


        </div>
    </div>
</section>
<section class="flight-sec-two">
    <div class="container">
        <div class="row plr-120 mt-20">
            <div class="col-md-3">
                <div class="flight-box" style="padding: 10px;">
                    <div style="display: flex;justify-content: space-between;align-items: center;">
                        <div>
                            <p class="mb-0 text-bold">Our Advice</p>
                            <h6 class="text-blue mb-0">Watch</h6>
                            <p>Prices are likely to fall within 7 days</p>
                        </div>
                        <div>
                            <img src="./images/icons/bar-chart.png" alt="icons" style="width: 40px;">
                        </div>
                    </div>
                </div>
                <div class="flight-box mt-20 pt-20">
                    <div class="filter-container">
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">Stops</h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Non Stop</label>
                                    </div>
                                    <div>
                                        $3000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">1 Stop</label>
                                    </div>
                                    <div>
                                        $4000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">2+ Stop</label>
                                    </div>
                                    <div>
                                        $5000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold" style="font-size: 14px;">Booking On Booking.com</h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <p>Show offers instantly bookable on Booking.com.</p>
                                    </div>
                                    <div>
                                        <div class="checkbox-wrapper-6">
                                            <input class="tgl tgl-light" id="cb1-6" type="checkbox" />
                                            <label class="tgl-btn" for="cb1-6">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold" style="font-size: 14px;">Times</h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="">
                                    <p>
                                        Take-off Karachi (KHI)
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>Sun 1:00 AM</p>
                                        <p>11:59 PM</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                                <div class="">
                                    <p>
                                        Take-off Jeddah (JED)
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>Sun 12:00 AM</p>
                                        <p>11:59 PM</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                                <div class="">
                                    <p>
                                        Landing Jeddah (JED)
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>Sun 5:00 AM</p>
                                        <p>Tue 8:30 AM</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                                <div class="">
                                    <p>
                                        Landing Karachi (KHI)
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>Sun 8:30 AM</p>
                                        <p>Wed 5:00 AM</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Airlines
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Air Arabia</label>
                                    </div>
                                    <div>
                                        $100
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">airblue
                                        </label>
                                    </div>
                                    <div>
                                        $200
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Egyptair
                                        </label>
                                    </div>
                                    <div>
                                        $300
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">
                                            Emirates

                                        </label>
                                    </div>
                                    <div>
                                        $400
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Ethiopian Air</label>
                                    </div>
                                    <div>
                                        $500
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Etihad Airways

                                        </label>
                                    </div>
                                    <div>
                                        $600
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">flyadeal
                                        </label>
                                    </div>
                                    <div>
                                        $700
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">flydubai

                                        </label>
                                    </div>
                                    <div>
                                        $800
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">
                                            flynas
                                        </label>
                                    </div>
                                    <div>
                                        $900
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Gulf Air
                                            only
                                        </label>
                                    </div>
                                    <div>
                                        $1000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Airports
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <p class="text-bold text-black">Karachi</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px;">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Quaid-e-azam Airport</label>
                                    </div>
                                    <div>
                                        $100
                                    </div>
                                </div>
                                <p class="text-bold text-black">Jeddeh</p>
                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px; ">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">JED: King Abdul Aziz</label>
                                    </div>
                                    <div>
                                        $5458
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Duration
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="">
                                    <p>
                                        Flight leg
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>4h 30m</p>
                                        <p>51h 55m</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                                <div class="">
                                    <p>
                                        Layover
                                    </p>
                                    <div class="d-flex items-center justify-between">
                                        <p>0h 55m</p>
                                        <p>39h 10m</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Fee Assitant
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="">
                                    <p>
                                        <i class="fas fa-suitcase"></i>
                                        Carry-on bag
                                    </p>
                                    <select name="" id="" class="mt-10">
                                        <option value="select-bag">Select Bag</option>
                                        <option value="0">0 Bag</option>
                                        <option value="1">1 Bag</option>
                                    </select>

                                </div>

                                <div class="mt-20">
                                    <p>
                                        <i class="fa-solid fa-bag-shopping"></i>
                                        Carry-on bag
                                    </p>
                                    <select name="" id="" class="mt-10">
                                        <option value="select-bag">Select Bag</option>
                                        <option value="0">0 Bag</option>
                                        <option value="1">1 Bag</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Price
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="">

                                    <div class="d-flex items-center justify-between">
                                        <p>$337</p>
                                        <p>$4,456</p>
                                    </div>
                                    <div>
                                        <input type="range">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Cabin
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Basic Economy
                                        </label>
                                    </div>
                                    <div>
                                        $3000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Economy
                                        </label>
                                    </div>
                                    <div>
                                        $4000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Business
                                        </label>
                                    </div>
                                    <div>
                                        $5000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">
                                            First

                                        </label>
                                    </div>
                                    <div>
                                        $6000
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">
                                            Mixed


                                        </label>
                                    </div>
                                    <div>
                                        $7000
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Layover airports
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <p class="text-bold text-black">Bahrain</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px;">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Manama (BAH)</label>
                                    </div>

                                </div>

                                <p class="text-bold text-black">Egypt</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px; ">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Cairo (CAI)</label>
                                    </div>

                                </div>
                                <p class="text-bold text-black">Bahrain</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px;">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Manama (BAH)</label>
                                    </div>

                                </div>

                                <p class="text-bold text-black">Egypt</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px; ">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Cairo (CAI)</label>
                                    </div>

                                </div>
                                <p class="text-bold text-black">Bahrain</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px;">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Manama (BAH)</label>
                                    </div>

                                </div>

                                <p class="text-bold text-black">Egypt</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px; ">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Cairo (CAI)</label>
                                    </div>

                                </div>
                                <p class="text-bold text-black">Bahrain</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px;">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Manama (BAH)</label>
                                    </div>

                                </div>

                                <p class="text-bold text-black">Egypt</p>

                                <div class="d-flex justify-between items-center" style="padding-bottom: 6px; ">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Cairo (CAI)</label>
                                    </div>

                                </div>



                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="filterHead d-flex justify-between items-center plr-10 text-black">
                                <h6 class="text-bold ">
                                    Aircraft
                                </h6>
                                <i class="fas fa-chevron-down filter-icon"></i>
                            </div>
                            <div class="filterOption pt-10  pr-10 pl-10">
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Narrow-body jet</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Wide-body jet
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Airbus A320neo
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Airbus A350</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-between items-center">
                                    <div class="d-flex items-center justify-center">
                                        <input type="checkbox" style="margin-top: 0px !important; height: 20px !important; margin-right: 4px !important; ">
                                        <label for="checkbox" class="text-blue mb-0" style="text-wrap: nowrap; ">Mixed</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 ">
                <div class="flight-top ">
                    <div class="row bg-white" style="border-radius: 12px;">
                        <div class="col-md-3 flight-cate current ">
                            <a href="#tab-1">
                                <div class="flight-cate-content">
                                    <h6 class="text-bold">
                                        Cheapest
                                    </h6>
                                    <p>$338</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 flight-cate ">
                            <a href="#tab-2">
                                <div class="flight-cate-content">
                                    <h6 class="text-bold">
                                        Best
                                    </h6>
                                    <p>$422</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 flight-cate">
                            <a href="#tab-3">
                                <div class="flight-cate-content">
                                    <h6 class="text-bold">
                                        Quickest
                                    </h6>
                                    <p>$422</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 flight-cate d-flex items-center" style="border-right: none;">
                            <p>
                                <i class="fas fa-sort"></i>
                                Other sort
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flightInfoCard mtb-20 tab-content" id="tab-1">
                    <div class="flightInfoCard-container">
                        <h1>Tab 1</h1>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                    </div>
                </div>

                <div class="flightInfoCard mtb-20 tab-content d-none" id="tab-2">
                    <div class="flightInfoCard-container">
                        <h1>Tab 2</h1>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                    </div>
                </div>


                <div class="flightInfoCard mtb-20 tab-content d-none" id="tab-3">
                    <div class="flightInfoCard-container">
                    <h1>Tab 3</h1>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">
                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                    </div>
                </div>
                <!-- <div class="flightInfoCard mtb-20" id="tab-2">
                    <div class="flightInfoCard-container">
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>s
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                        <div class="flightInfoCard-item mtb-10">
                            <div class="flightInfoCard-head flight-box">
                                <div class="row">
                                    <div class="col-md-9" style="border-right: 1px solid #E9E9E9;">
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flight-detail mtb-10">
                                            <div class="row items-center d-flex">
                                                <div class="col-md-3 text-center">
                                                    <img src="./images/flight/PK.png" alt="" class="flight-info-img">
                                                    <div class="flight-name text-center">
                                                        <p>
                                                            Pakistan International Airline
                                                        </p>

                                                    </div>
                                                </div>
                                                <div class="col-md-6 d-flex justify-between items-center">
                                                    <div>
                                                        <p>8:15 pm</p>
                                                        <p class="text-end">KHI</p>
                                                    </div>
                                                    <div>
                                                        <div class="flight-bar"></div>
                                                        <p class="text-center" style="padding-top: 6px;">Non Stop</p>
                                                    </div>
                                                    <div>
                                                        <p>10:45 pm</p>
                                                        <p>JED</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <p>
                                                        4h 30m

                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3 ptb-20">
                                        <div style="padding-bottom: 6px">
                                            <a href="#">
                                                <img src="./images/icons/share.png" alt="icon" style="width: 16px;">
                                            </a>

                                        </div>
                                        <div class="text-end pb-10">
                                            <p>Light</p>
                                        </div>
                                        <div class=" pb-10">
                                            <p class="text-bold text-end">$890</p>
                                        </div>
                                        <div>
                                            <button class="detail-btn">
                                                View Details
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flightInfoCard-option">

                            </div>



                        </div>
                    </div>
                </div> -->
            </div>
        </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // jQuery to handle FAQ toggle functionality
    $('.filterHead').click(function() {
        $(this).next('.filterOption').slideToggle(300);
        var icon = $(this).find('.filter-icon');
        icon.toggleClass('rotate');
    });
</script>

<script>
    // jQuery to handle FAQ toggle functionality
    $('.flightInfoHead').click(function() {
        $(this).next('.flightInforOption').slideToggle(300);

    });
</script>


<script>
    $(document).ready(function() {
        $('.flight-cate a').click(function(e) {
            e.preventDefault();
            $('.flight-cate').removeClass('current');
            $(this).addClass('current');
            $('.flight-cate').removeClass('current');
            $('.tab-content').hide();
            $('.tab-content').addClass('d-none');
            var targetTab = $(this).attr('href');
            $(targetTab).removeClass('d-none');
            $(targetTab).fadeIn(400);
            $(targetTab).show();
            console.log(targetTab);


        });
    });
</script>

<?php include 'attachments/footer.php'; ?>
<?php include 'attachments/foot.php'; ?>