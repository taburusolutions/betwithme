<div class="span3">
    <ul class="nav nav-tabs nav-stacked nav-coupon-category">
        <li {{(Request::url() ===  route('public.category', ['category' => 'all']))?'class=active':'' }}><a href="{{ route('public.category', ['category' => 'all']) }}"><i class="icon-ticket"></i>All</a>
        </li>
        <li {{(Request::url() ===  route('public.category', ['category' => 'football']))?'class=active':'' }}><a href="{{ route('public.category', ['category' => 'football']) }}"><i class="icon-food"></i>Football / Soccer</a>
        </li>
        <li {{(Request::url() ===  route('public.category', ['category' => 'politics']))?'class=active':'' }}><a href="{{ route('public.category', ['category' => 'politics']) }}"><i class="icon-bolt"></i>Politics</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'boxing']) }}"><i class="icon-headphones"></i>Boxing</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'rugby']) }}"><i class="icon-calendar"></i>Rugby</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'tennis']) }}"><i class="icon-female"></i>Tennis</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'cricket']) }}"><i class="icon-picture"></i>Cricket</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'television']) }}"><i class="icon-picture"></i>Television</a>
        </li>
        <li><a href="{{ route('public.category', ['category' => 'social']) }}"><i class="icon-umbrella"></i>Social</a>
        </li>
    </ul>
</div>