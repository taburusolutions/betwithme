@extends('layouts.dashboard')
@section('title')
@endsection
@section('content')
    <section id="main-content" class=" ">
        <section class="wrapper main-wrapper" style=''>

            <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <h1 class="title">Dashboard</h1>                            </div>

                </div>
            </div>
            <div class="clearfix"></div>


            <div class="col-lg-12">
                <section class="box nobox">
                    <div class="content-body">

                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="r1_graph1 db_box db_box_large">
                                    <span class='bold'>68.95%</span>
                                    <span class='pull-right'><small>New/Repeating Users</small></span>
                                    <div class="clearfix"></div>
                                    <span class="db_dynamicbar">Loading...</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">

                                <div class="r1_graph2 db_box db_box_large">
                                    <span class='bold'>2332</span>
                                    <span class='pull-right'><small>Links Shared</small></span>
                                    <div class="clearfix"></div>
                                    <span class="db_linesparkline">Loading...</span>
                                </div>

                            </div>

                            <div class="col-md-4 hidden-sm col-sm-12 col-xs-12">

                                <div class="r1_graph1 db_box db_box_large">
                                    <span class='bold'>67/98</span>
                                    <span class='pull-right'><small>Total / Unique visitors</small></span>
                                    <div class="clearfix"></div>
                                    <span class="db_compositebar">Loading...</span>
                                </div>
                            </div>

                        </div> <!-- End .row -->

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="wid-vectormap">
                                    <h4>Visitor's Statistics</h4>
                                    <div class="row">
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <figure>
                                                <div id="db-world-map-markers" style="width: 100%; height: 300px"></div>
                                            </figure>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-12 map_progress">
                                            <h4>Unique Visitors</h4>
                                            <span class='text-muted'><small>Last Week Rise by 62%</small></span>
                                            <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%"></div></div>
                                            <br>
                                            <h4>Registrations</h4>
                                            <span class='text-muted'><small>Up by 57% last 7 days</small></span>
                                            <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%"></div></div>
                                            <br>
                                            <h4>Direct Sales</h4>
                                            <span class='text-muted'><small>Last Month Rise by 22%</small></span>
                                            <div class="progress"><div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> <!-- End .row -->

                    </div>
                </section></div>


            <div class="col-lg-6">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">New Registrations</h2>
                        <div class="actions panel_actions pull-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width:60%">Name</th>
                                <th style="width:30%">Profile Progress</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Harry P.</td>
                                <td><span class="playlist_song2">...</span></td>
                            </tr>
                            <tr>

                                <td>Will Mark</td>
                                <td><span class="playlist_song3">...</span></td>
                            </tr>
                            <tr>

                                <td>Jason D.</td>
                                <td><span class="playlist_song4">...</span></td>
                            </tr>

                            <tr>

                                <td>Nik P.</td>
                                <td><span class="playlist_song6">...</span></td>
                            </tr>
                            <tr>

                                <td>Kate Wilson</td>
                                <td><span class="playlist_song7">...</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section></div>

            <div class="col-lg-6">
                <section class="box ">
                    <header class="panel_header">
                        <h2 class="title pull-left">Trending Users</h2>
                        <div class="actions panel_actions pull-right">
                            <i class="box_toggle fa fa-chevron-down"></i>
                            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                            <i class="box_close fa fa-times"></i>
                        </div>
                    </header>
                    <div class="content-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th style="width:60%">Name</th>
                                <th style="width:30%">Trending</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td>Harry P.</td>
                                <td><span class="playlist_song2">...</span></td>
                            </tr>
                            <tr>

                                <td>Will Mark</td>
                                <td><span class="playlist_song3">...</span></td>
                            </tr>
                            <tr>

                                <td>Jason D.</td>
                                <td><span class="playlist_song4">...</span></td>
                            </tr>

                            <tr>

                                <td>Nik P.</td>
                                <td><span class="playlist_song6">...</span></td>
                            </tr>
                            <tr>

                                <td>Kate Wilson</td>
                                <td><span class="playlist_song7">...</span></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </section></div>
        </section>
    </section>
@endsection