@extends('layouts.app')

@section('content')
    <!--Slider-->
    <div class="home-section1 slider container">
        <div id="HomeSectionOneSlider" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#HomeSectionOneSlider" data-slide-to="0" class="active"></li>
                <li data-target="#HomeSectionOneSlider" data-slide-to="1"></li>
                <li data-target="#HomeSectionOneSlider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-75 float-right" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider1.gif" alt="First slide">
                    <div class="carousel-caption d-block">
                        <h1 class="float-left text-left">Happy with your portfolio?</h1>
                        <p class="float-left text-left">Truman Partners’ clients report consistent growth.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-75 float-left" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider2a.gif" alt="Second slide">
                    <div class="carousel-caption d-block">
                        <h1 class="float-right text-right">Investing with insight?</h1>
                        <p class="float-right text-right">Research and acumen mean our proposals are high profit with acceptable risk.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-75 float-left" src="https://trumanpartners.com/wp-content/themes/tru/images/sliders/TMAN-Site-Image-Home-Slider3a.gif" alt="Third slide">
                    <div class="carousel-caption d-block">
                        <h1 class="float-right text-right">Do your investments follow or <br> lead the market?</h1>
                        <p class="float-right text-right">Truman Partners’ consolidates years of understanding and first-rate <br> maret intelligence to assure long-haul value.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#HomeSectionOneSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#HomeSectionOneSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!--SECOND SECTION-->
    <div class="second-section-home">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Integrity.gif') }}">
                        <h3>Integrity</h3>
                    </div>
                    
                    <div class="content">
                        <p>Our work stands for itself. We take pride in our history of dedicated, effective client guidance and overall portfolio performance.</p>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Insight.gif') }}">
                        <h3>Insight</h3>
                    </div>
                    
                    <div class="content">
                        <p>Informed by our core values of integrity and objectivity tempered by deep market experience, Truman Partners offers insights that truly enrich our clients.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Courage.gif') }}">
                        <h3>Courage</h3>
                    </div>
                    
                    <div class="content">
                        <p>Our advisors and research staff are committed to delivering the right recommendations irrespective of market whimsy and faddish trends.</p>
                    </div>
                </div>
            </div>
            <div class="margin_top7"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Experience.gif') }}">
                        <h3>Experience</h3>
                    </div>
                    
                    <div class="content">
                        <p>Truman Partners develops long standing relationships with its partners, its clients, and the industry at large. Our longevity gives you the edge.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Objectivity.gif') }}">
                        <h3>Objectivity</h3>
                    </div>
                    
                    <div class="content">
                        <p>As a fee-based wealth advisor, our suggestions are based on unbiased market examination filtered through your objectives.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="title">
                        <img src="{{ URL::asset('images/TRUM-Site-Image-Home-Icon-Transparency.gif') }}">
                        <h3>Transparency</h3>
                    </div>
                    
                    <div class="content">
                        <p>Truman Partners prides itself on simple, direct, timely communication and regular reporting. We are available to discuss your account whenever you like.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--THIRD SECTION-->
    <div class="parallax_section4">
        <div id="sec2" class="container">
            <h1>Truman Partners</h1>
            <p>Truman Partners is a group of fellow expatriates dedicated to your financial success. Our capabilities are typified by a combination of real-word experience, complete transparency, thoughtful investing, and industry leadership.</p>
            <a href="#" class="button transp2">Read More</a>
        </div>
    </div>

    <!--FOURTH SECTION-->
    <div class="features_sec4">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="unline">
                        <i class="fa fa-comments"></i> 
                        Tru-Insights
                    </h3>

                    <div class="clearfix"></div>

                    <div class="lblogs">
                        <div class="lbimg">
                            <img width="282" height="178" src = "https://trumanpartners.com/wp-content/uploads/2018/11/TMAN-Site-Image-Haier.jpg"/>
                            <span>
                                <strong>Nov</strong>
                                    20
                            </span>
                        </div>
                        
                        <h5>Qingdao Haier</h5>
                        <p>
                            Truman – Tru Insights –&nbsp;Qingdao Haier &nbsp; &nbsp; &nbsp; Qingdao Haier (Haier, 600690 CH) is listed on the 
                            Shanghai Stock Exchange. The company is a leading white goods maker engaged in the R&amp;D and sale of major household 
                            electrical appliances. Haier manufactures refrigerators, air-conditioners, washing machines, water heaters and other 
                            kitchen appliances with a significant
                        </p>
                        <p>
                            <a class="remobut" href="#"> Read More</a>
                        </p>
                    </div>

                    <div class="lblogs">
                        <div class="lbimg">
                            <img width="282" height="178" src="https://trumanpartners.com/wp-content/uploads/2019/01/bigstock-Singapore-December-261226690.jpg"/>
                            <span>
                                <strong>Nov</strong>
                                    20
                            </span>
                        </div>
                        
                        <h5>Singapore Banking Sector – Continued Strength</h5>
                        <p>
                            Truman – Tru Insight –&nbsp;Singapore Banking Sector – Continued Strength &nbsp; &nbsp; &nbsp; Investment summary Banking 
                            stocks have performed well this year, up some 9% YTD at the high, as measured by the FTSE ST Financial Index (FSTFN). The
                                outlook is definitely improving with several quarters of improvement as allowances declined, NPLs plateaued and margins
                        </p>
                        <p>
                            <a class="remobut" href="#"> Read More</a>
                        </p>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <h3 class="unline">
                        <i class="fa fa-users"></i> 
                        Truman Clients
                    </h3>
                    
                    <div class="clearfix"></div>

                    <div id="truman-clients-slider" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators truman-slide-indicator">
                            <li data-target="#truman-clients-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#truman-clients-slider" data-slide-to="1"></li>
                            <li data-target="#truman-clients-slider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slide-box">
                                    <div class="ppimg">
                                        <img src="https://trumanpartners.com/wp-content/themes/tru/images/TRUM-Site-Image-Pierre.jpg" alt="">
                                        <h6>Pierre-Yves
                                            <em>Belgium</em>
                                        </h6>
                                    </div>
                                    <p>
                                        I’ve been consistently impressed with the quality of Truman’s team. 
                                        Well-researched recommendations, highly responsive communications, 
                                        genuine concern for my plans are what keep me at Truman.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-box">
                                    <div class="ppimg">
                                        <img src="https://trumanpartners.com/wp-content/themes/tru/images/TRUM-Site-Image-Alistar.jpg" alt="">
                                        <h6>Alistar 
                                            <em>Dubai</em>
                                        </h6>
                                    </div>
                                    <p>
                                        Smooth transactions and good customer service.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slide-box">
                                    <div class="ppimg">
                                        <img src="https://trumanpartners.com/wp-content/themes/tru/images/TRUM-Site-Image-Freddy.jpg" alt="">
                                        <h6>Freddy 
                                            <em>Gulf of Suez</em>
                                        </h6>
                                    </div>
                                    <p>
                                        After three years with Truman, I’m very happy with their outcomes.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#truman-clients-slider" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#truman-clients-slider" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
