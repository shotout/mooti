@extends('layouts.pub')

@push('page-css')
    <style>
        .c-title {
            font-family: 'Yeseva One', cursive;
        }
        .c-subtitle {
            font-family: 'Yeseva One', cursive;
        }
        .c-content {
            font-family: 'Inter', sans-serif;
            text-align: justify;
        }
        .c-bg-skyblue {
            background-color: #D9FDFF;
        }
        .c-text-center {
            text-align: center;
        }
        .c-border {
            border: 1px solid #B7B7B7;
            border-radius: 10px;
        }

        @media only screen and (min-width: 768px) {
            .c-text-center {
                text-align: left !important;
            }
        }
        @media only screen and (min-width: 900px) {
            .c-padding {
                padding: 0 50px !important;
            }
        }
    </style>
@endpush

@section('main')
<div>
    <div class="container-fluid">
        <div class="row py-3">
            <div class="col-md-4 c-text-center">
                <img src="{{url('/assets/images/logo.png')}}" alt="Mooti App Logo" width="70">
            </div>
            <div class="col-md-8 d-flex align-items-center justify-content-end">
                <div class="c-hmobile c-border p-2">
                    <span class="f-inter">Available on : </span>
                    <a href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/apple.svg')}}" class="ml-2" alt="App Store Logo">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="c-title text-center">Mooti - motivation & quotes</h2>
            </div>
        </div>
    </div>

    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-4 mb-4 text-center">
                <img src="{{url('/assets/images/mooti1.png')}}" alt="Mooti App Image">
                <div class="c-dmobile">
                    <div class="f-inter mb-1">Download now :</div>
                    <div>
                        <a href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="c-text-center">
                    <img src="{{url('/assets/images/five_star.png')}}" alt="five Star Image">
                    <h4 class="c-subtitle mt-1">
                        A daily dose of positivity - The Happiness App with daily motivational quotes & affirmations!
                    </h4>
                </div>
                <p class="c-content">
                    Affirmations are a powerful tool that can help you rewire your brain and change negative thought patterns. By verbally affirming your dreams and ambitions, you can empower yourself and build self-esteem. With daily affirmations, you can set reminders to be delivered throughout the day and choose from many intentions to focus on.
                </p>
            </div>
        </div>
    </div>

    <div class="c-bg-skyblue mb-4 py-4">
        <div class="container c-padding">
            <div class="row">
                <div class="col-lg-8">
                    <div class="c-text-center">
                        <img src="{{url('/assets/images/five_star.png')}}" alt="five Star Image">
                        <h4 class="c-subtitle mt-1">
                            MOOTI - Self Care Made Easy - A daily dose of positivity!
                        </h4>
                    </div>
                    <p class="c-content">
                        Positive affirmations not only help shift your mindset, but they also serve as prompts and reminders of what you are truly capable of. By practicing affirmations every day, you can strengthen the connection between your conscious and unconscious mind, making you more resilient in challenging circumstances.
                    </p>
                    <p class="c-content">
                        Buddha once said, "You become what you believe." By using affirmations as part of your daily routine, you can increase your awareness of your thoughts and words, making it easier to recognize and overcome negative patterns. Affirmations also help define your focus, allowing you to concentrate on achieving your goals and creating an abundance mindset.
                    </p>
                </div>
                <div class="col-lg-4 text-center">
                    <img src="{{url('/assets/images/mooti2.png')}}" alt="Mooti App Image">
                    <div class="f-inter mb-1">Download now :</div>
                    <div>
                        <a href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                            <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="container c-padding mb-4">
        <div class="row">
            <div class="col-lg-4 text-center mb-4">
                <img src="{{url('/assets/images/mooti3.png')}}" alt="Mooti App Image">
                <div class="f-inter mb-1">Download now :</div>
                <div>
                    <a href="https://apps.apple.com/us/app/mooti/id6443447216" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/apple.svg')}}" alt="App Store Logo">
                    </a>
                    <a href="https://play.google.com/store/apps/details?id=com.mooti" target="_blank" rel="noopener noreferrer">
                        <img src="{{url('/assets/images/google.svg')}}" class="ml-2" alt="Play Store Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="c-text-center">
                    <img src="{{url('/assets/images/five_star.png')}}" alt="five Star Image">
                    <h4 class="c-subtitle mt-1">
                        Optimize Your Life -  Upgrade your mindset!
                    </h4>
                </div>
                <p class="c-content">
                    In addition, affirmations open you up to possibility. Too often, we get stuck in a mindset of impossibility, but affirmations can help turn this around. When you positively affirm what is possible, a whole world of opportunity can open up to you.
                </p>
                <p class="c-content">
                    In short, using affirmations can help you build resilience, overcome negative thought patterns, and achieve your goals. By practicing daily affirmations, you can empower yourself and create a positive mindset that will help you succeed in all areas of your life
                </p>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
@endsection