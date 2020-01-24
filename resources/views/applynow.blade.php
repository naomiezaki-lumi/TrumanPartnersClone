@extends('layouts.app')

@section('content')

<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 class="">Your Truman Account</h1>
            </div>
            <div class="col-md-3">
                <span class="pagenation">
                    &nbsp;
                    <a href="/">Home</a> 
                    <i> / </i> 
                    Apply Now
                </span>
            </div>
        </div>  
    </div>
</div>

<div class="container pt-5">
   <h1 class="pt-5">Let's Get Started!</h1>
   <p class="pt-4 text-justify">Truman Partners will provide you with a complimentary portfolio 
       analysis and review. To learn how we can help you reach your financial goals, 
       simply fill out the form below and an analyst will be in touch immediately.</p>


    <h2 class="pt-4">Primary Client</h2>

    {{-- primary client --}}
    <div class="form-group row">
        <div class="form-group col-md-4  {{ $errors->has('name') ? 'has-error' : '' }}">
            {{ Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'First Name*']) }}
            <span class="text-danger">{{ $errors->first('name') }}</span>
        </div>
    
        <div class="form-group col-md-4 {{ $errors->has('email') ? 'has-error' : '' }}">
            {{ Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Last Name*']) }}
            <span class="text-danger">{{ $errors->first('email') }}</span>
        </div>

        <div class="form-group col-md-4 {{ $errors->has('country') ? 'has-error' : '' }}">
            @include('country')
            <span class="text-danger">{{ $errors->first('country') }}</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-6  {{ $errors->has('address') ? 'has-error' : '' }}">
            {{ Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Address*']) }}
            <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
    
        <div class="form-group col-md-3 {{ $errors->has('city') ? 'has-error' : '' }}">
            {{ Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'City*']) }}
            <span class="text-danger">{{ $errors->first('city') }}</span>
        </div>

        <div class="form-group col-md-3 {{ $errors->has('country') ? 'has-error' : '' }}">
            @include('country')
            <span class="text-danger">{{ $errors->first('country') }}</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4  {{ $errors->has('phone') ? 'has-error' : '' }}">
            {{ Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Phone*']) }}
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        </div>
    
        <div class="form-group col-md-4 {{ $errors->has('mphone') ? 'has-error' : '' }}">
            {{ Form::text('mphone', old('mphone'), ['class'=>'form-control', 'placeholder'=>'Mobile Phone*']) }}
            <span class="text-danger">{{ $errors->first('mphone') }}</span>
        </div>

        <div class="form-group col-md-4 {{ $errors->has('pemail') ? 'has-error' : '' }}">
            {{ Form::text('pemail', old('pemail'), ['class'=>'form-control', 'placeholder'=>'Personal Email Address*']) }}
            <span class="text-danger">{{ $errors->first('pemail') }}</span>
        </div>
    </div>

    {{-- business contact --}}
    <h2 class="pt-4">Business Contact</h2>

    <div class="form-group row">
        <div class="form-group col-md-6  {{ $errors->has('waddress') ? 'has-error' : '' }}">
            {{ Form::text('waddress', old('waddress'), ['class'=>'form-control', 'placeholder'=>'Work Address*']) }}
            <span class="text-danger">{{ $errors->first('waddress') }}</span>
        </div>
    
        <div class="form-group col-md-3 {{ $errors->has('city') ? 'has-error' : '' }}">
            {{ Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'City*']) }}
            <span class="text-danger">{{ $errors->first('city') }}</span>
        </div>

        <div class="form-group col-md-3 {{ $errors->has('country') ? 'has-error' : '' }}">
            @include('country')
            <span class="text-danger">{{ $errors->first('country') }}</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4  {{ $errors->has('wphone') ? 'has-error' : '' }}">
            {{ Form::text('wphone', old('wphone'), ['class'=>'form-control', 'placeholder'=>'Work Phone*']) }}
            <span class="text-danger">{{ $errors->first('wphone') }}</span>
        </div>
    
        <div class="form-group col-md-4 {{ $errors->has('fax') ? 'has-error' : '' }}">
            {{ Form::text('fax', old('fax'), ['class'=>'form-control', 'placeholder'=>'Work Fax']) }}
            <span class="text-danger">{{ $errors->first('fax') }}</span>
        </div>

        <div class="form-group col-md-4 {{ $errors->has('wemail') ? 'has-error' : '' }}">
            {{ Form::text('wemail', old('wemail'), ['class'=>'form-control', 'placeholder'=>'Work Email Address*']) }}
            <span class="text-danger">{{ $errors->first('wemail') }}</span>
        </div>  
    </div>

    {{-- secondary client --}}
    <h2 class="pt-4">Secondary Client</h2>

    <div class="form-group row">
        <div class="form-group col-md-4  {{ $errors->has('2name') ? 'has-error' : '' }}">
            {{ Form::text('2name', old('2name'), ['class'=>'form-control', 'placeholder'=>'First Name*']) }}
            <span class="text-danger">{{ $errors->first('2name') }}</span>
        </div>
    
        <div class="form-group col-md-4 {{ $errors->has('2email') ? 'has-error' : '' }}">
            {{ Form::text('2email', old('2email'), ['class'=>'form-control', 'placeholder'=>'Last Name*']) }}
            <span class="text-danger">{{ $errors->first('2email') }}</span>
        </div>

        <div class="form-group col-md-4 {{ $errors->has('2country') ? 'has-error' : '' }}">
            @include('country')
            <span class="text-danger">{{ $errors->first('2country') }}</span>
        </div>
    </div>
    
    <div class="form-group row">
        <div class="form-group col-md-6  {{ $errors->has('address') ? 'has-error' : '' }}">
            {{ Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=>'Address*']) }}
            <span class="text-danger">{{ $errors->first('address') }}</span>
        </div>
    
        <div class="form-group col-md-3 {{ $errors->has('city') ? 'has-error' : '' }}">
            {{ Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'City*']) }}
            <span class="text-danger">{{ $errors->first('city') }}</span>
        </div>

        <div class="form-group col-md-3 {{ $errors->has('country') ? 'has-error' : '' }}">
            @include('country')
            <span class="text-danger">{{ $errors->first('country') }}</span>
        </div>
    </div>

    <div class="form-group row">
        <div class="form-group col-md-4  {{ $errors->has('phone') ? 'has-error' : '' }}">
            {{ Form::text('phone', old('phone'), ['class'=>'form-control', 'placeholder'=>'Phone*']) }}
            <span class="text-danger">{{ $errors->first('phone') }}</span>
        </div>
    
        <div class="form-group col-md-4 {{ $errors->has('mphone') ? 'has-error' : '' }}">
            {{ Form::text('mphone', old('mphone'), ['class'=>'form-control', 'placeholder'=>'Mobile Phone*']) }}
            <span class="text-danger">{{ $errors->first('mphone') }}</span>
        </div>

        <div class="form-group col-md-4 {{ $errors->has('pemail') ? 'has-error' : '' }}">
            {{ Form::text('pemail', old('pemail'), ['class'=>'form-control', 'placeholder'=>'Personal Email Address*']) }}
            <span class="text-danger">{{ $errors->first('pemail') }}</span>
        </div>
    </div>

    {{-- personal assets --}}
    <h2 class="pt-4">Personal Assets</h2>
    <div class="form-group row ">
        <div class="form-check">
            {{ Form::radio('passets', 'Below 250K', ['class' => 'form-check-input'])}}
            {{ Form::label('Below 250K' ,'Below 250K') }}
        </div>

        <div class="form-check">
            {{ Form::radio('passets', '250K - 500K', ['class' => 'form-check-input'])}}
            {{ Form::label('250K - 500K' ,'250K - 500K') }}
        </div>

        <div class="form-check">
            {{ Form::radio('passets', '500K - 1M', ['class' => 'form-check-input'])}}
            {{ Form::label('500K - 1M' ,'500K - 1M') }}
        </div>
          
        <div class="form-check">
            {{ Form::radio('passets', '1M - 5M', ['class' => 'form-check-input'])}}
            {{ Form::label('1M - 5M' ,'1M - 5M') }}
        </div>
          
        <div class="form-check">
            {{ Form::radio('passets', '5M+', ['class' => 'form-check-input'])}}
            {{ Form::label('5M+' ,'5M+') }}
        </div>
    </div>

     {{-- personal income --}}
     <h2 class="pt-4">Personal Income</h2>
     <div class="form-group row ">
         <div class="form-check">
             {{ Form::radio('pincome', 'Below 100K', ['class' => 'form-check-input'])}}
             {{ Form::label('Below 100K' ,'Below 100K') }}
         </div>
 
         <div class="form-check">
            {{ Form::radio('pincome', '100K to 250K', ['class' => 'form-check-input'])}}
            {{ Form::label('100K to 250K' ,'100K to 250K') }}
        </div>

        <div class="form-check">
            {{ Form::radio('pincome', '250K to 500K', ['class' => 'form-check-input'])}}
            {{ Form::label('250K to 500K' ,'250K to 500K') }}
        </div>

        <div class="form-check">
            {{ Form::radio('pincome', '500K to 1M', ['class' => 'form-check-input'])}}
            {{ Form::label('500K to 1M' ,'500K to 1M') }}
        </div>

        <div class="form-check">
            {{ Form::radio('pincome', '1M+', ['class' => 'form-check-input'])}}
            {{ Form::label('1M+' ,'1M+') }}
        </div>
     </div>

     {{-- How do you want to invest?--}}
     <h2 class="pt-4">How do you want to invest?</h2>
     <div class="form-group row ">
         <div class="form-check">
             {{ Form::radio('invest', 'Steady', ['class' => 'form-check-input'])}}
             {{ Form::label('Steady' ,'Steady') }}
         </div>

         <div class="form-check">
            {{ Form::radio('invest', 'Balanced', ['class' => 'form-check-input'])}}
            {{ Form::label('Balanced' ,'Balanced') }}
        </div>

        <div class="form-check">
            {{ Form::radio('invest', 'Growth', ['class' => 'form-check-input'])}}
            {{ Form::label('Growth' ,'Growth') }}
        </div>
     </div>

     {{-- Describe your current investments:--}}
     <h2 class="pt-4">Describe your current investments:</h2>
     <div class="form-group row ">
        <div class="form-group col-md-12  {{ $errors->has('currentinvestment') ? 'has-error' : '' }}">
            {{ Form::textarea('currentinvestment', old('currentinvestment'), ['class'=>'form-control']) }}
            <span class="text-danger">{{ $errors->first('currentinvestment') }}</span>
        </div>
     </div>

     <div class="form-group d-flex align-items-center">
        <button class="btn btn-success">Submit</button>
    </div>

</div>



@endsection