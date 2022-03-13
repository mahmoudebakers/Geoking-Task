<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Requests\AddLocationFormRequest;

class LocationController extends Controller
{

  public function index(User $user)
  {
    $locations = $user->locations;
    return view('locations.index', compact('user', 'locations'));
  }

  public function create(User $user)
  {
    return view('locations.create', compact('user'));
  }

  public function store(AddLocationFormRequest $request, User $user)
  {
    $user->locations()->create([
      'lat' => $request->lat,
      'lng' => $request->lng,
      'title' => $request->title,
    ]);
    return redirect()->route('users.locations.index', ['user' => $user]);
  } // end of store

  public function destroy(User $user, Location $location)
  {
    $user->locations()->find($location->id)->delete();

    return redirect()->route('users.locations.index', ['user' => $user]);
  } //end of destroy


}
