@extends('layouts.pub')

@push('page-css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Yeseva+One&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap');

        .c-container {
            display: flex;
            flex-direction: column;
            height: 90vh;
            justify-content: center;
        }

        .box {
            margin-top: -10px;
            position: relative;
        }

        .box_title {
            background-color: #D9FDFF;
            color: #000;
            font-family: 'Yeseva One', cursive;
            padding: 10px;
            border-radius: 50px;
            box-shadow: 2.32127px 3.09502px 7.73756px rgba(0, 0, 0, 0.25);
        }

        .c-left, .c-right {
            text-align: center;
        }

        .footer {
            background-color: #00C2CB;
            color: #fff;
            bottom: 0;
            position: absolute;
            width: 100%;
            padding: 10px 0;
            font-family: 'Montserrat', sans-serif;
        }

        .c-footer-left, .c-footer-right {
            text-align: center;
        }

        @media only screen and (min-width: 768px) {
            .box {
                padding: 0 20%;
            }

            .c-right, .c-footer-right {
                text-align: right !important;
            }

            .c-left, .c-footer-left {
                text-align: left !important;
            }
        }

        @media only screen and (max-width: 768px) {
            .c-image {
                width: 50% !important;
            }
        }
    </style>
@endpush

@section('main')
<div class="container c-container">
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <img src="{{url('/assets/images/logo.png')}}" alt="mooti app logo" width="80">
        </div>
    </div>
    <div class="row py-4">
        <div class="col-lg-12 text-center">
            <img src="{{url('/assets/images/banner.png')}}" alt="mooti app banner">
            <div class="box">
                <h4 class="box_title">This site is under construction</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mb-2 c-right">
            <a href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                <img class="c-image" src="{{url('/assets/images/apple.svg')}}" alt="apple store logo">
            </a>
        </div>
        <div class="col-md-6 c-left">
            <a href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                <img class="c-image" src="{{url('/assets/images/google.svg')}}" alt="play store logo">
            </a>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection