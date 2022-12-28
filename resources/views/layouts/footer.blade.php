<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 c-footer-left">
                <a class="mr-3 f-inter" style="color: #fff; text-decoration: none;" href="{{url('/terms')}}">Terms of Use</a>
                <a class="f-inter" style="color: #fff; text-decoration: none;" href="{{url('/privacy')}}">Privacy Policy</a>
            </div>
            <div class="col-md-6 c-footer-right">
                <a href="https://instagram.com/mooti.app" target="_blank" style="text-decoration: none;" >
                    <img class="mr-2" src="{{url('/assets/images/instagram.png')}}" alt="instagram logo">
                </a>

                @mobile
                    @if (Browser::isAndroid())
                        <a href="intent://page/104850975778626?referrer=app_link#Intent;package=com.facebook.katana;scheme=fb;end" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                    @if (Browser::isMac())
                        <a href="fb://page/?id=104850975778626" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                @endmobile

                @tablet
                    @if (Browser::isAndroid())
                        <a href="intent://page/104850975778626?referrer=app_link#Intent;package=com.facebook.katana;scheme=fb;end" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                    @if (Browser::isMac())
                        <a href="fb://page/?id=104850975778626" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                            <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                        </a>
                    @endif
                @endtablet

                @desktop
                    <a href="https://facebook.com/MootiApp" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                        <img class="mr-2" src="{{url('/assets/images/facebook.png')}}" alt="facebook logo">
                    </a>
                @enddesktop

                <a href="https://twitter.com/MootiApp" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                    <img class="mr-2" src="{{url('/assets/images/twitter.png')}}" alt="twitter logo">
                </a>
                <a class="c-hmobile" href="https://mooti.app" target="_blank" style="color: #fff; text-decoration: none;" rel="noopener noreferrer">
                | <span class="ml-2 f-inter">©2022 Mooti</span>
                </a>
            </div>

            <div class="col-md-6 text-center c-dmobile mt-1">
                <a href="https://mooti.app" target="_blank" style="color: #fff; text-decoration: none;" rel="noopener noreferrer">
                    <span class="mr-3 f-inter">©2022 Mooti</span>
                </a>
            </div>
        </div>
    </div>
</footer>