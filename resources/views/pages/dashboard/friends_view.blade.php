@extends('layouts.dashboard')
@section('title')
{{'Friends - Betwithme'}}
@endsection
@section('content')
<section class="wrapper main-wrapper" style=''>
    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <h1 class="title">All Friends</h1>                            </div>


        </div>
    </div>
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <section class="box ">
            <header class="panel_header">
                <h2 class="title pull-left">All Friends</h2>
                <div class="actions panel_actions pull-right">
                    <i class="box_toggle fa fa-chevron-down"></i>
                    <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                    <i class="box_close fa fa-times"></i>
                </div>
            </header>
            <div class="content-body">    <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-1.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Brodeur</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 45<br>Occupation: HouseWife</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-2.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Latshaw</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 39<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-3.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Clementina</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 34<br>Occupation: Journalist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-4.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-5.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-6.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-7.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-8.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-9.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-10.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-11.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-12.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Jonh A.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-1.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Brodeur</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 45<br>Occupation: HouseWife</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-2.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Latshaw</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 39<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-3.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Clementina</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 34<br>Occupation: Journalist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-4.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-5.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-6.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-7.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-8.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-9.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-10.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-11.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-12.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Jonh A.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-1.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Brodeur</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 45<br>Occupation: HouseWife</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-2.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Latshaw</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 39<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-3.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Clementina</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 34<br>Occupation: Journalist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-4.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-5.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-6.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-7.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-8.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Carri Busey</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Industrialist</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-9.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Ms. Clay Dock</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Book Writer</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-10.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Mark Peskin</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 57<br>Occupation: Ex. Armyman</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-11.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mr. Arthur John.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 65<br>Occupation: Carpenter</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="team-member ">
                                    <div class="team-img">
                                        <img class="img-responsive" src="data/soc-members/member-12.jpg" alt="">
                                    </div>
                                    <div class="team-info">
                                        <h4><a href="soc-member-profile.html">Mrs. Jonh A.</a></h4>
                                        <span class='team-member-edit'><a href="soc-friend-edit.html"><i class='fa fa-pencil icon-xs'></i></a></span>
                                        <span>Age: 29<br>Occupation: Teacher</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section></div>
</section>
@endsection