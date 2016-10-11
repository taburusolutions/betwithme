<div class="page-sidebar ">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <!-- USER INFO - START -->
        <div class="profile-info row">

            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                <a href="ui-profile.html">
                    <img src="{{asset('assets/dashboard/data/profile/profile-socialmedia.jpg')}}" class="img-responsive img-circle">
                </a>
            </div>

            <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                <h3>
                    <a href="ui-profile.html">{{ Auth::user()->first_name.' '.Auth::user()->last_name }}</a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                <p class="profile-title">Administrator</p>

            </div>

        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>


            <li class="open">
                <a href="index-socialmedia.html">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-envelope"></i>
                    <span class="title">Messaging</span>
                    <span class="arrow "></span><span class="label label-orange">4</span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="soc-mail-inbox.html" >Inbox</a>
                    </li>
                    <li>
                        <a class="" href="soc-mail-compose.html" >Compose</a>
                    </li>
                    <li>
                        <a class="" href="soc-mail-view.html" >View</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="soc-activity.html">
                    <i class="fa fa-comments"></i>
                    <span class="title">Activity</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-user"></i>
                    <span class="title">Members</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="soc-members.html" >All Members</a>
                    </li>
                    <li>
                        <a class="" href="soc-member-add.html" >Add Member</a>
                    </li>
                    <li>
                        <a class="" href="soc-member-edit.html" >Edit Member</a>
                    </li>
                    <li>
                        <a class="" href="soc-member-profile.html" >Member Profile</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-upload"></i>
                    <span class="title">Media</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="soc-media.html" >All Media</a>
                    </li>
                    <li>
                        <a class="" href="soc-upload.html" >Upload</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-group"></i>
                    <span class="title">Groups</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="soc-groups.html" >All Groups</a>
                    </li>
                    <li>
                        <a class="" href="soc-group-add.html" >Add Group</a>
                    </li>
                    <li>
                        <a class="" href="soc-group-edit.html" >Edit Group</a>
                    </li>
                    <li>
                        <a class="" href="soc-group-view.html" >View Group</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-lock"></i>
                    <span class="title">Access pages</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="ui-login.html" >Login</a>
                    </li>
                    <li>
                        <a class="" href="ui-register.html" >Registration</a>
                    </li>
                    <li>
                        <a class="" href="ui-lockscreen.html" >Lock Screen</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-bar-chart"></i>
                    <span class="title">Reports</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="soc-report-site.html" >Site</a>
                    </li>
                    <li>
                        <a class="" href="soc-report-visitors.html" >Visitors</a>
                    </li>
                    <li>
                        <a class="" href="soc-report-statistics.html" >Statistics</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="soc-friends.html">
                    <i class="fa fa-smile-o"></i>
                    <span class="title">Friends</span>
                </a>
            </li>
            <li class="">
                <a href="soc-account-settings.html">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Settings</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">Multi Purpose</span>
                    <span class="arrow "></span><span class="label label-orange">NEW</span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="general.html"  target = '_blank' >General Admin</a>
                    </li>
                    <li>
                        <a class="" href="hospital.html"  target = '_blank' >Hospital Admin</a>
                    </li>
                    <li>
                        <a class="" href="music.html"  target = '_blank' >Music Admin</a>
                    </li>
                    <li>
                        <a class="" href="crm.html"  target = '_blank' >CRM Admin</a>
                    </li>
                    <li>
                        <a class="" href="socialmedia.html"  target = '_blank' >Social Media Admin</a>
                    </li>
                    <li>
                        <a class="" href="freelancing.html"  target = '_blank' >Freelancing Admin</a>
                    </li>
                    <li>
                        <a class="" href="university.html"  target = '_blank' >University Admin</a>
                    </li>
                    <li>
                        <a class="" href="ecommerce.html"  target = '_blank' >Ecommerce Admin</a>
                    </li>
                    <li>
                        <a class="" href="blog.html"  target = '_blank' >Blog Admin</a>
                    </li>
                </ul>
            </li>

        </ul>

    </div>
    <!-- MAIN MENU - END -->



    <div class="project-info">

        <div class="block1">
            <div class="data">
                <span class='title'>Users</span>
                <span class='total'>7745</span>
            </div>
            <div class="graph">
                <span class="sidebar_orders">...</span>
            </div>
        </div>

        <div class="block2">
            <div class="data">
                <span class='title'>Uptime</span>
                <span class='total'>99%</span>
            </div>
            <div class="graph">
                <span class="sidebar_visitors">...</span>
            </div>
        </div>

    </div>



</div>
