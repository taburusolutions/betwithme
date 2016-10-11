@extends('layouts.dashboard')
@section('title')
    {{'Dashboard - Betwithme'}}
@endsection
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <h1 class="title">Activity</h1></div>
                </div>
            </div>
            <div class="clearfix"></div>


            <div class="col-lg-12">
                <section class="box nobox">
                    <div class="content-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                                <div class="uprofile-content">

                                    <div class="">

                                        <br><h4>Profile Activity:</h4>

                                        <div class="enter_post col-md-12 col-sm-12 col-xs-12">

                                            <div class="form-group">
                                                <div class="controls">
                                                    <textarea class="form-control autogrow" id="field-7"
                                                              placeholder="What's on your mind?"></textarea>
                                                </div>
                                            </div>
                                            <div class="enter_post_btns col-md-12 col-sm-12 col-xs-12">
                                                <a href="#" class="btn btn-md pull-right btn-primary">Post</a>
                                                <a href="#" class="btn btn-md pull-right btn-link"><i
                                                            class="fa fa-image"></i></a>
                                                <a href="#" class="btn btn-md pull-right btn-link"><i
                                                            class="fa fa-map-marker"></i></a>
                                            </div>
                                        </div>

                                        <div class="clearfix"></div>


                                        <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
                                            <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                <img src="{{asset('/assets/dashboard/data/profile/avatar-2.png')}}" class="" alt="">
                                            </div>
                                            <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                <div class="username">
                                                    <span class="bold">John Smith</span> post in group <span
                                                            class="bold">work</span>
                                                </div>
                                                <div class="info text-muted">
                                                    "Balance" is a concept based on human perception and the complex
                                                    nature of the human senses of weight and proportion. Humans can
                                                    evaluate these visual elements in several situations to find a sense
                                                    of balance.
                                                </div>
                                                <div class="info-details">
                                                    <ul class="list-unstyled list-inline">
                                                        <li><a href="#" class="text-muted">15 Minutes ago</a></li>
                                                        <li><a href="#" class="text-muted"><i class="fa fa-comment"></i>
                                                                584</a></li>
                                                        <li><a href="#" class="text-orange"><i class="fa fa-heart"></i>
                                                                12k</a></li>
                                                        <li><a href="#" class="text-info"><i class="fa fa-reply"></i>
                                                                Reply</a></li>
                                                        <li><a href="#" class="text-warning"><i class="fa fa-star"></i>
                                                                Favourite</a></li>
                                                        <li><a href="#" class="text-muted">More</a></li>
                                                    </ul>

                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment">
                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/avatar-3.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/avatar-3.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/avatar-3.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="username">
                                                            <span class="bold">Fin</span>
                                                        </div>
                                                        <div class="info text-muted">
                                                            Perfect info for the project. Great work :)
                                                        </div>
                                                        <div class="info-details">
                                                            <ul class="list-unstyled list-inline">
                                                                <li><a href="#" class="text-muted">10 Minutes ago</a>
                                                                </li>
                                                                <li><a href="#" class="text-orange"><i
                                                                                class="fa fa-heart-o"></i> Like</a></li>
                                                                <li><a href="#" class="text-muted">More</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="comment">
                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/avatar-4.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/avatar-4.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/avatar-4.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="username">
                                                            <span class="bold">Arun</span>
                                                        </div>
                                                        <div class="info text-muted">
                                                            Keep it up. Much appreciated effort.
                                                        </div>
                                                        <div class="info-details">
                                                            <ul class="list-unstyled list-inline">
                                                                <li><a href="#" class="text-muted">8 Minutes ago</a>
                                                                </li>
                                                                <li><a href="#" class="text-orange"><i
                                                                                class="fa fa-heart"></i> Liked</a></li>
                                                                <li><a href="#" class="text-muted">More</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="comment comment-input">

                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/profile.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/profile.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/profile.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="input-group primary  col-md-6">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Post a comment">
                                                            <span class="input-group-addon">
                                                                        <i class="fa fa-rocket"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>


                                        <div class="uprofile_wall_posts col-md-12 col-sm-12 col-xs-12">
                                            <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                <img src="{{asset('/assets/dashboard/data/profile/avatar-1.png')}}" class="" alt="">
                                            </div>
                                            <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                <div class="username">
                                                    <span class="bold">John Smith</span> post in group <span
                                                            class="bold">work</span>
                                                </div>
                                                <div class="info text-muted">
                                                    "Balance" is a concept based on human perception and the complex
                                                    nature of the human senses of weight and proportion. Humans can
                                                    evaluate these visual elements in several situations to find a sense
                                                    of balance.
                                                </div>
                                                <div class="info-details">
                                                    <ul class="list-unstyled list-inline">
                                                        <li><a href="#" class="text-muted">15 Minutes ago</a></li>
                                                        <li><a href="#" class="text-muted"><i class="fa fa-comment"></i>
                                                                584</a></li>
                                                        <li><a href="#" class="text-orange"><i class="fa fa-heart"></i>
                                                                12k</a></li>
                                                        <li><a href="#" class="text-info"><i class="fa fa-reply"></i>
                                                                Reply</a></li>
                                                        <li><a href="#" class="text-warning"><i class="fa fa-star"></i>
                                                                Favourite</a></li>
                                                        <li><a href="#" class="text-muted">More</a></li>
                                                    </ul>

                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="comment">
                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/avatar-2.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/avatar-2.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/avatar-2.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="username">
                                                            <span class="bold">Fin</span>
                                                        </div>
                                                        <div class="info text-muted">
                                                            Perfect info for the project. Great work :)
                                                        </div>
                                                        <div class="info-details">
                                                            <ul class="list-unstyled list-inline">
                                                                <li><a href="#" class="text-muted">10 Minutes ago</a>
                                                                </li>
                                                                <li><a href="#" class="text-orange"><i
                                                                                class="fa fa-heart-o"></i> Like</a></li>
                                                                <li><a href="#" class="text-muted">More</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="comment">
                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/avatar-3.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/avatar-3.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/avatar-3.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="username">
                                                            <span class="bold">Arun</span>
                                                        </div>
                                                        <div class="info text-muted">
                                                            Keep it up. Much appreciated effort.
                                                        </div>
                                                        <div class="info-details">
                                                            <ul class="list-unstyled list-inline">
                                                                <li><a href="#" class="text-muted">8 Minutes ago</a>
                                                                </li>
                                                                <li><a href="#" class="text-orange"><i
                                                                                class="fa fa-heart"></i> Liked</a></li>
                                                                <li><a href="#" class="text-muted">More</a></li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>

                                                <div class="comment comment-input">

                                                    <div class="pic-wrapper col-md-1 col-sm-1 col-xs-2 text-center">
                                                        <img data-src-retina="data/profile/profile.png')}}"
                                                             data-src="{{asset('/assets/dashboard/data/profile/profile.png')}}"
                                                             src="{{asset('/assets/dashboard/data/profile/profile.png')}}" alt="">
                                                    </div>
                                                    <div class="info-wrapper col-md-11 col-sm-11 col-xs-10">
                                                        <div class="input-group primary  col-md-6">
                                                            <input type="text" class="form-control"
                                                                   placeholder="Post a comment">
                                                            <span class="input-group-addon">
                                                                        <i class="fa fa-rocket"></i>
                                                                    </span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </section>
@endsection