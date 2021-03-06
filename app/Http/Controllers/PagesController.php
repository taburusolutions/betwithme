<?php namespace App\Http\Controllers;

use App\Logic\User\UserRepository;
use Auth;
use Illuminate\Contracts\Auth\Guard;

class PagesController extends Controller
{

    protected $auth;

    protected $userRepository;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;

    }

    public function getHome()
    {
        if (Auth::check()) {
            if ($this->auth->user()->hasRole('administrator')) {

                return redirect()->route('admin.home');
            } else {
                return redirect()->route('user.home');
            }

        }
        return view('pages.home_view', ['page_title' => '']);
    }

    public function getHowItWorks()
    {
        return view('pages.how_it_works_view', ['page_title' => 'How it Works']);
    }

    public function getUpcomingMatches()
    {
        return view('pages.upcoming_matches_view', ['page_title' => 'Upcoming Matches']);
    }

    public function getCompletedMatches()
    {
        return view('pages.completed_matches_view', ['page_title' => 'Completed Matches']);
    }

    public function getContactUs()
    {
        return view('pages.contact_us_view', ['page_title' => 'Contact Us']);
    }

    public function getCategory($category)
    {
        switch ($category) {
            case 'all': {
                return view('pages.category_view', ['page_title' => 'All']);
            }
            case 'football': {
                return view('pages.category_view', ['page_title' => 'Football']);
            }
            case 'politics': {
                return view('pages.category_view', ['page_title' => 'Politics']);
            }
            default: {
                return view('pages.home_view', ['page_title' => '']);
            }
        }
    }

    public function getSingleBet($category, $bet_id)
    {
        return view('pages.single_bet_view', ['page_title' => 'All']);
    }

    public function getDashboard()
    {
        return view('pages.dashboard.activity_view', ['page_title' => 'Activity View']);
    }

    public function getFriends()
    {
        return view('pages.dashboard.friends_view');
    }

    public function getSettings()
    {
        return view('pages.dashboard.settings_view');
    }
}
