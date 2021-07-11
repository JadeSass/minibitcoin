<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mini Bitcoin | The Sister Bitcoin ready to take over from her uncle.</title>
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
                    <h4 class="orange-text text-darken-3 center-align"><b>THE LEADERSHIP TEAM</b></h4>
                    <h6 class="orange-text text-darken-3 center-align" style="line-height:1.9rem;"><b>We know how important it is for investors to know who they're trusting their money with. We're doing at launch so you'll have full visibility on the team and their backgrounds.</b><br></h6>
                    <div class="carousel">
                        <a class="carousel-item" href="https://t.me/Crypto_mooner"><img src="{{asset('img/IMG-20210711-WA0014.jpg')}}"><b class="orange-text text-darken-3 text-center">Steve David ~ C.E.O <i class="fa fa-telegram"></i></b></a>
                        <a class="carousel-item" href="https://t.me/De_ve_loper"><img src="{{asset('img/IMG-20210711-WA0016.jpg')}}"><b class="orange-text text-darken-3 text-center">Brad Brown ~ Developer <i class="fa fa-telegram"></i></b></a>
                        <a class="carousel-item" href="https://t.me/nuel01"><img src="{{asset('img/IMG-20210711-WA0002.jpg')}}"><b class="orange-text text-darken-3 text-center">Neulz ~ Graphics Designer <i class="fa fa-telegram"></i></b> </a>
                    </div>
                </div>
            </div>
            <div class="about orange darken-3" id="roadmap">
                <div class="container">
                    <h4 class="white-text text-darken-3 left-align"><b>ROADMAP</b></h4>
                    <h6 class="white-text text-darken-3 left-align" style="line-height:1.9rem;"><b> Q1 2021 </b><br><br>
                    Safe launch, Coin distribution, Presale and Marketing
                    </h6>
                     <h6 class="white-text text-darken-3 left-align" style="line-height:1.9rem;"><b> Q2 2021 </b><br><br>
                      Listing on Coin market cap, Coin gecko and website upgrade
                    </h6>
                    <h6 class="white-text text-darken-3 left-align" style="line-height:1.9rem;"><b> Q3 2021 </b><br><br>
                      Listing on more exchange and development of our mind blowing exchange
                    </h6>
                </div>
            </div>
            <div class="use-timeline" id="mb-timeline">
                <div class="container">
                    <h4 class="orange-text text-darken-3 center-align"><b>SOFTCAP BUDGET ALLOCATION</b></h4>
                    <div class="col s12 m12 l6 xl6">
                        <div class="center-align responsive-img" style="line-height:1.9rem;"><img class="responsive-img" src="{{asset('img/IMG-20210711-WA0022.jpg')}}" alt="allocation"></div>
                    </div>
                    <div class="info col s12 m12 l6 xl6 ">
                       <ul class="collection">
                           <li class="collection-item purple-text text-darken-3"><b>Core Team 7%</b><br>7% of total supply goes to the core team which includes the dev, the advisor and the ceo</li>
                           <li class="collection-item blue-text text-lighten-1"><b>Burn 25%</b><br>25% of total supply would be burnt overtime as time goes on</li>
                           <li class="collection-item green-text text-darken-2"><b>ICO Sale 150%</b></li>
                           <li class="collection-item green-text text-lighten-3"><b>Store 18%</b><br>18% of the total supply would be stored, thereby causing scarcity to boost the value of the either during listing on big exchanges</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=faq" id="mb-faq">
            <h4 class="orange-text text-darken-3 left-align">FAQ</h4>
            <h5 class="grey-text left-align">Here are the answers to some of the most common questions we get in the group - come say hello if you want any more information. </h5>
              <div class="row">
                  <div class="col s12 m6 l4 xl4">
                      <div class="card darken-3 orange">
                         <div class="card-content white-text">
                            <span class="card-title"><b>Why Binance Smart Chain?</b></span>
                            <p>Binance Smart Chain has the greatest reach and lower cost of entry. We did consider ETH we think overall, BSC was the right choice.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l4 xl4">
                      <div class="card orange darken-3">
                         <div class="card-content white-text">
                            <span class="card-title"><b>Why have a private pre-sale?</b></span>
                            <p>Launching a coin is very tricky, stealth launches get no interest, pre-sales are usually overly botted and are dumped quickly. We think a whitelisted private pre-sale is the best way to launch a coin.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l4 xl4">
                      <div class="card orange darken-3">
                         <div class="card-content white-text">
                            <span class="card-title"><b>What's with the token burn?</b></span>
                            <p>We’ll start with 10Quadrillion coins, which is a lot but we’ll be burning approximately 21 Trillion coins a week. Pretty unique we think.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l4 xl4">
                      <div class="card orange darken-3">
                         <div class="card-content white-text">
                            <span class="card-title"><b>Will you lock liquidity?</b></span>
                            <p>Yes – we’ll lock PCS liquidity for over a year – probably more. We’re allocating 75% of the pre-sale to the PCS liquidity pool to give investors assurance that we’re a solid coin.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l4 xl4">
                      <div class="card orange darken-3">
                         <div class="card-content white-text">
                            <span class="card-title"><b>Will you renounce the contract?</b></span>
                            <p>Contract renouncement isn’t a silver bullet to a secure coin. Like Safemoon and lots of other coins, we need to retain ownership of the contract to burn the tokens on a weekly basis. The functions of the contract will be safe however and will limit the devs to only verified safe operations.</p>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="col s12 m6 l4 xl4">
                      <div class="card orange darken-3">
                         <div class="card-content white-text">
                            <span class="card-title"><b>What are the future plans??</b></span>
                            <p>Firstly we need to launch and get a solid foundation of investors. After that, we’ll be going for staking, contract audits, exchange listings – the usual stuff tbh.</p>
                          </div>
                        </div>
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
