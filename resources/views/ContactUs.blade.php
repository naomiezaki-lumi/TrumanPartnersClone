@extends('layouts.app')

@section('content')

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

<div class="container pt-5">
    <br><br>
    <div class="row col-lg-12">
        <div class="container col-md-6">
            <h4 class="font-weight-normal">Contact Form</h4>
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            {{ Form::open(['route'=>'contactus.store']) }}
        
            <hr>
            <div class="form-group row">
                <div class="form-group col-md-6  {{ $errors->has('name') ? 'has-error' : '' }}">
                    {{ Form::label('Name:') }}
                    {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) }}
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            
                <div class="form-group col-md-6 {{ $errors->has('email') ? 'has-error' : '' }}">
                    {{ Form::label('Email:') }}
                    {{ Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) }}
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="form-group col-md-12  {{ $errors->has('subject') ? 'has-error' : '' }}">
                    {{ Form::label('Subject:') }}
                    {{ Form::text('subject', old('subject'), ['class'=>'form-control']) }}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>
            </div>
        
            <div class="form-group row">
                <div class="form-group col-md-12  {{ $errors->has('message') ? 'has-error' : '' }}">
                    {{ Form::label('Message:') }}
                    {{ Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) }}
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                </div>
            </div>
            
            <div class="form-group">
                <button class="btn btn-success">Contact US!</button>
            </div>
                {{ Form::close() }}
        </div>

        <div class="container col-md-6">
            <div style="background-color:#f9f9f9; width:100%; border:1px solid #e1e1e1;" class="">
                <div class="m-4">
                    <p class="font-weight-bold m-0">Truman Partners</p>
                    <p class="text-left m-0">Rome, Europarco</p>
                    <p class="text-left m-0">Viale Giorgio Ribotta 11</p>
                    <p class="text-left m-0">E-mail: info@trumanpartners.com</p>
                </div>
            </div>

            <div class="py-4">
                <!--Google map-->
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="width:100%;height:385px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5946.781346918781!2d12.459503!3d41.819885!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc067d58271dc484b!2sRegus%20-%20Rome%2C%20Europarco!5e0!3m2!1sen!2sph!4v1579678150208!5m2!1sen!2sph" 
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
  
  <!--Google Maps-->
            </div>

            

        </div>

    </div>
</div>



@endsection