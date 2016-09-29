@extends('layouts.app')
@section('title')
    {{$page_title.' :: Betwithme'}}
@endsection
@section('content')
        <div class="row row-reverce coupon">
            <div class="span9">
                <div class="box">
                    <h4>HILLARY CLINTON WILL WIN 2016 PRESIDENTIAL RACE..</h4>
                    <p>Molestie nostra nulla est maecenas sodales per mi dictum nisl eros dignissim commodo a nostra class dolor nulla ligula nec</p><a class="btn btn-primary btn-large btn-block" href="#">225$ Buy Now</a>
                    <ul class="list coupon-meta">
                        <li>
                            <ul class="list coupon-list-prices">
                                <li><span class="coupon-meta-title">List Price</span><span class="coupon-price">1000$</span>
                                </li>
                                <li><span class="coupon-meta-title">Discount</span><span class="coupon-price">77.5%</span>
                                </li>
                                <li><span class="coupon-meta-title">Savings</span><span class="coupon-price">775$</span>
                                </li>
                            </ul>
                        </li>
                        <li><span class="coupon-meta-title">Time Left to Buy</span>
                            <!-- COUNTDOWN -->
                            <div data-countdown="1475532739770" class="countdown countdown-inline"><div class="days"><span class="count">05</span><span class="title">Days</span></div><div class="hours"><span class="count">09</span><span class="title">Hours</span></div><div class="minutes"><span class="count">59</span><span class="title">Minutes</span></div><div class="seconds"><span class="count">16</span><span class="title">Seconds</span></div></div>
                        </li>
                        <li><span class="coupon-meta-title">5000+ bought</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="span9">
                <!-- START BOOTSTRAP CAROUSEL -->
                <div id="my-carousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/cascada_960x540.jpg" alt="Image Alternative text" title="cascada">
                        </div>
                        <div class="item">
                            <img src="img/waipio_valley_960x540.jpg" alt="Image Alternative text" title="waipio valley">
                        </div>
                        <div class="item">
                            <img src="img/the_best_mode_of_transport_here_in_maldives_960x540.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives">
                        </div>
                    </div>
                    <a class="carousel-control left" href="#my-carousel" data-slide="prev"></a>
                    <a class="carousel-control right" href="#my-carousel" data-slide="next"></a>
                </div>
                <!-- END BOOTSTRAP CAROUSEL -->
                <div class="gap gap-small"></div>
                <div class="row">
                    <div class="span6">
                        <h5>About Awesome Vacation Pack</h5>
                        <p>Posuere mauris habitant facilisis in ridiculus vulputate montes curae dictumst lobortis volutpat suscipit praesent habitant habitasse senectus sollicitudin proin suspendisse tristique molestie egestas egestas lectus enim tristique pellentesque eu venenatis himenaeos torquent ridiculus cum praesent cubilia quis quisque mollis consequat nascetur eu urna ante arcu phasellus maecenas parturient natoque ipsum</p>
                    </div>
                    <div class="span3">
                        <h5>In a Nutshell</h5>
                        <p>Facilisi cubilia vel litora vel eleifend mollis euismod mus curae dictum taciti platea nullam dui parturient litora suspendisse magna nunc</p>
                    </div>
                </div>
                <div class="gap gap-mini"></div>
                <div class="row row-wrap">
                    <div class="span6">
                        <h5>Location</h5>
                        <!-- GOOGLE MAP -->
                        <div class="gmap" id="gmap" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;"><div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 245px; top: -172px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 245px; top: 84px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -11px; top: -172px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -11px; top: 84px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 501px; top: -172px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 501px; top: 84px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 245px; top: -172px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 245px; top: 84px;"><canvas draggable="false" height="256" width="256" style="-webkit-user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -11px; top: -172px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -11px; top: 84px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 501px; top: -172px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 501px; top: 84px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 570px; height: 300px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i2180363&amp;2i1390252&amp;2e1&amp;3u14&amp;4m2&amp;1u570&amp;2u300&amp;5m5&amp;1e0&amp;5sen-US&amp;6sus&amp;10b1&amp;12b1&amp;token=107712" style="width: 570px; height: 300px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 245px; top: -172px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8518!3i5430!4i256!2m3!1e0!2sm!3i366036169!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=84971" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 245px; top: 84px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8518!3i5431!4i256!2m3!1e0!2sm!3i366036169!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=120992" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -11px; top: -172px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8517!3i5430!4i256!2m3!1e0!2sm!3i366035774!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=53720" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -11px; top: 84px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8517!3i5431!4i256!2m3!1e0!2sm!3i366035774!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=89741" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 501px; top: -172px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8519!3i5430!4i256!2m3!1e0!2sm!3i366036169!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=31428" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 501px; top: 84px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i8519!3i5431!4i256!2m3!1e0!2sm!3i366036169!3m9!2sen-US!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!4e0&amp;token=67449" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;"><p class="gm-style-pbt">Use two fingers to move the map</p></div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=51.737154,7.166513&amp;z=14&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 135px; top: 60px; background-color: white;"><div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div><div style="font-size: 13px;">Map data ©2016 GeoBasis-DE/BKG (©2009), Google</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 245px;"><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Map Data</a><span style="">Map data ©2016 GeoBasis-DE/BKG (©2009), Google</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2016 GeoBasis-DE/BKG (©2009), Google</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 95px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="width: auto; height: 100%; margin-left: 1px; background-color: rgb(245, 245, 245);"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@51.7371535,7.1665131,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; -webkit-user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; width: 28px; height: 55px; background-color: rgb(255, 255, 255);"><div title="Zoom in" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; top: 0px; background-color: rgb(230, 230, 230);"></div><div title="Zoom out" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; cursor: pointer; display: none; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show street map" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; min-width: 22px; font-weight: 500; background-color: rgb(255, 255, 255); background-clip: padding-box;">Map</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; left: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Show satellite imagery" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-left: 0px; min-width: 40px; background-color: rgb(255, 255, 255); background-clip: padding-box;">Satellite</div><div style="z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; position: absolute; right: 0px; top: 36px; text-align: left; display: none; background-color: white;"><div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; -webkit-user-select: none; font-size: 11px; padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap; background-color: rgb(255, 255, 255);"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle; background-color: rgb(255, 255, 255);"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div></div></div></div></div></div></div>
                    </div>
                    <div class="span3">
                        <h5>How It's Work</h5>
                        <p class="small">
                            Ligula natoque habitasse eros rhoncus viverra orci mattis vulputate senectus porttitor suspendisse egestas facilisi iaculis est aptent conubia accumsan dolor</p>
                        <a href="#" class="btn btn-primary">Ask Question</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gap gap-small"></div>
        <div class="row-fluid">
            <div class="span10">
                <h3>Similar Bets</h3>
            </div>
            <div class="span2">
                <ul class="wilto-controls pull-right top">
                    <li>
                        <a href="#wilto-slider" class="prev"></a>
                    </li>
                    <li>
                        <a href="#wilto-slider" class="next"></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- START CONTENT SLIDER -->
        <div class="wilto-slider-wrap" id="wilto-slider-wrap" role="application" style="overflow-x: hidden; width: 100%;">
            <div id="wilto-slider" class="wilto-slider" aria-activedescendant="carousel-1-0-slide0" style="margin-left: 0px; float: left; width: 300%; transition: margin-left 0.6s ease;">
                <div class="wilto-slide row-fluid row-wrap wilto-active-slide" role="tabpanel document" id="carousel-1-0-slide0" aria-hidden="false" style="float: left; width: 33.3333%;">
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="wilto-slide row-fluid row-wrap" role="tabpanel document" id="carousel-1-0-slide1" aria-hidden="true" style="float: left; width: 33.3333%;">
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="span3">
                        <!-- COUPON THUMBNAIL -->
                        <a href="#" class="coupon-thumb">
                            <img src="{{asset('/assets/img/game_profile/geingob.jpg')}}" alt="Image Alternative text" title="Gamer Chick" />
                            <div class="coupon-inner">
                                <h5 class="coupon-title">WILL THE HARAMBEE PROSPERITY PLAN SUCCEED</h5>
                                <p class="coupon-desciption">Custom Bet - 01 Jan 2017 12:00 CAT <br/>I bet that the Harambee Properity Plan will create 10 000 jobs by the year 2017</p>

                                <div class="coupon-meta"><span class="coupon-time">1 Year 2 Months 5 days 46 h remaining</span>Wensey Khoases
                                    <div class="coupon-price"><span class="coupon-old-price"></span><span class="coupon-new-price">BET</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END CONTENT SLIDER -->
        <div class="gap gap-small"></div>

@endsection