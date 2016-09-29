<div class="span8">
    <!-- MAIN NAVIGATION -->
    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
    <nav>

        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
            <li {{(Request::url() === route('public.home'))?'class=active':'' }}><a href="{{ route('public.home')}}/">Home</a>
            </li>
            <li {{(Request::url() === route('public.how_it_works'))?'class=active':'' }}><a href="{{ route('public.how_it_works')}}">How it works</a>

            </li>
            <li {{(Request::url() === route('public.upcoming_matches'))?'class=active':'' }}><a href="{{ route('public.upcoming_matches')}}">Upcoming Matches</a>

            </li>
            <li {{(Request::url() === route('public.completed_matches'))?'class=active':'' }}><a href="{{ route('public.completed_matches')}}">Completed Matches</a>

            </li>
            <li {{(Request::url() === route('public.contact_us'))?'class=active':'' }}><a href="{{ route('public.contact_us')}}">Contact</a>
            </li>
        </ul>
    </nav>
    <!-- END MAIN NAVIGATION -->
</div>