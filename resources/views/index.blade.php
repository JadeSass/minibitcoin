<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mini Bitcoin | </title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            @include('addon.header')
            <div class="bg-particles black darken-3" id="particles-js">
                <div class="container">
                    <div class="panel transparent" style="padding-top:12px;">
                        <div class="img-block center-align">
                        <img src="{{asset('img/logo.png')}}" alt="" width="165px" height="165px">
                        </div>
                        <h4 class="orange-text text-darken-3 center-align"><b>Mini <i class="fa fa-bitcoin"></i>itcoin</b></h4>
                        <h5 class="white-text center-align"><b>THE BRAND NEW COIN ON BINANCE SMART CHAIN</b></h5>
                        <h6 class="white-text center-align" style="line-height:1.9rem;"><i class="fa fa-bitcoin"></i>itcoin is getting older these days, as it has been the father of crypto for a long time and it has used the best out of him.
                        Now is the time to hand over the power to its little energetic sister to push the family name in a new more exciting and furistic icetiNgz direction and puts the family name in good market conditions and the commu want to go. </h6><br>
                        <div class="center-align">
                            <a href="#mb-about" class="btn-flat orange darken-3 white-text waves-effect"><b>Start Exploring</b></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about orange darken-3" id="mb-about">
                <div class="container">
                    <h4 class="white-text text-darken-3 left-align"><b>WHAT IS MINI <i class="fa fa-bitcoin"></i>ITCOIN?</b></h4>
                    <h6 class="white-text text-darken-3 left-align" style="line-height:1.9rem;">Being on the BSC network <b>Mini Bitcoin</b> would require less energy than her uncle ever did, she can do things much faster than him and is more versatile in what she can offer.<br><br>
                    We welcome you all to her Mini world welcome her into the world.<br><br>
                    She has a lot of futuristic ideas for future developments and has been keeping an eye on how her uncle ruled the world for so long, but she feels she has new ideas and new direction.</h6>
                    <h6 class="white-text text-darken-3 left-align" style="line-height:1.9rem;">She will be looking for a successful launch and paves the way for the future.</h6>
                </div>
            </div>
            <div class="use-case" id="mb-use">
                <div class="container">
                    <h4 class="orange-text text-darken-3 center-align"><b>MINI <i class="fa fa-bitcoin"></i>TC USECASE</b></h4>
                    <h6 class="orange-text text-darken-3 center-align" style="line-height:1.9rem;"><b>With the less gas fee. Our token will evolve into could be a wallet with a built in bridge that will easily convert ERC-20 Tokens for BEP-20 or vice versa.</b><br><br><i class="fa fa-arrow-down orange-text text-darken-3 center-align"></i></h6>

                    <h6 class="orange-text text-darken-3 center-align" style="line-height:1.9rem;"><b>1% fee = Distributed to all existing holders<br><br>4% fee = Auto liquidity safety step by step plan to ensure 100% safety. <br><br>Total Supply: 10,000,000,000,000,000,000 Quadrillion.</b><br><br>CONTRACT ADDRESS:<br><br></h6>
                    <a href="https://bscscan.com/token/0xaf8f936151ed89a180931e4013b78024c43c238a" target="_blank" class="blue-text text-darken-3 text-center">https://bscscan.com/token/0xaf8f936151ed89a180931e4013b78024c43c238a</a>
                </div>
            </div>
            <div class="use-timeline" id="mb-timeline">
                <div class="container">
                    <h4 class="orange-text text-darken-3 center-align"><b>OUR TEAM</b></h4>
                    <h6 class="orange-text text-darken-3 center-align" style="line-height:1.9rem;"><b>Here's our timeline, some of these dates may change however due to market conditions..</b><br><br></h6>
                    <div class="carousel">
                        <a class="carousel-item" href="#one!"><img src="{{asset('img/IMG-20210710-WA0072.jpg')}}"></a>
                        <a class="carousel-item" href="#two!"><img src="{{asset('img/IMG-20210710-WA0073.jpg')}}"></a>
                        <a class="carousel-item" href="#three!"><img src="{{asset('img/IMG-20210711-WA0002.jpg')}}"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>          
        <script src="{{asset('js/particles.min.js')}}"></script>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
