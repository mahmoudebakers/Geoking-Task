<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
    return view('home');
  }

  public function listUsers()
  {
    $users = User::get();
    return view('list-users', compact('users'));
  }

  public function userMap(User $user)
  {
    $locations = $user->locations()->select(['lat', 'lng', 'title'])->get();
    $zommed = $locations->first();

    return view('user-map', compact('locations', 'zommed', 'user'));
  }

  public function userLocations(User $user)
  {
    $locations = $user->locations;
    return view('user-locations', compact('locations'));
  }
}
