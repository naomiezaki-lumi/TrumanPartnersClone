@extends('layouts.app')

@section('content')
<!--First Section-->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="">Contact Us</h1>
            </div>
            <div class="col-md-3">
                <span class="pagenation">
                    &nbsp;
                    <a href="/">Home</a> 
                    <i> / </i> 
                    Contact Us
                </span>
            </div>
        </div>  
    </div>
</div>

<div class="clearfix"></div>

<!--Second Section-->
<div class="contact-us-section2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Contact Form</h2>
                <div class="clearfix"></div>
                <div class="contact-form">
                    <form action="">
                        <div class="row">
                            <div class="col col-6">
                                <label class="label">Name</label>
                                <div class="input">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col col-6">
                                <label class="label">Email</label>
                                <div class="input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col col-12">
                                <label class="label">Subject</label>
                                <div class="input">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12">
                                <label class="label">Message</label>
                                <div class="input">
                                    <textarea name="" id="" cols="40" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-12">
                                <input class="button" type="submit" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="address-info">
                    <ul>
                        <li>
                            <strong>Truman Partners</strong>
                        </li>
                        <li>
                            Rome, Europarco
                        </li>
                        <li>
                            Viale Giorgio Ribotta 11
                        </li>
                        <li>
                            Email: <a href="#">info@trumanpartners.com</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>

                <div class="address-map">
                    <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2973.3729326739235!2d12.456949714812577!3d41.820267077011465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13258b12431d55fb%3A0xc067d58271dc484b!2sRegus+-+Roma%2C+Europarco!5e0!3m2!1sen!2sph!4v1552444054768" width="100%" height="340" frameborder="0" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection