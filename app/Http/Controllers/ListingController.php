<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
  // Show all listings
  public function index()
  {
    return view('listings.index', [
      'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6)
    ]);
  }

  // Show single listing
  public function show(Listing $listing)
  {
    return view('listings.show', [
      'listing' => $listing
    ]);
  }

  // Show Create Form
  public function create() {
    return view('listings.create');
  }

  // Store Listing Data
  public function store(Request $request) {
    $formFields = $request->validate([
      'title' => 'required',
      'company' => ['required', Rule::unique('listings', 'company')],
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'required',
      'tags' => 'required',
      'description' => 'required'
    ]);

    if($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $formFields['user_id'] = Auth::id();

    Listing::create($formFields);

    return redirect('/')->with('message', 'Snippet added successfully');
  }

  // Show Edit Form
  public function edit(Listing $listing) {

    return view('listings.edit', ['listing' => $listing]);
  }

  // Update Listing Data
  public function update(Request $request, Listing $listing) {

    // Make sure logged in user is owner of listings available to update
    if($listing->user_id != Auth::id()) {
      abort(403, 'Unauthorised Action');
    }

    $formFields = $request->validate([
      'title' => 'required',
      'company' => 'required',
      'location' => 'required',
      'email' => ['required', 'email'],
      'website' => 'required',
      'tags' => 'required',
      'description' => 'required'
    ]);

    if($request->hasFile('logo')) {
      $formFields['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $listing->update($formFields);

    return redirect('/listings/manage')->with('message', 'Snippet updated');
  }

  // Delete Listing
  public function destroy(Listing $listing) {

    // Make sure logged in user is owner of listings available to delete
    if ($listing->user_id != Auth::id()) {
      abort(403, 'Unauthorised Action');
    }

    if ($listing->logo && Storage::disk('public')->exists($listing->logo)) {
      Storage::disk('public')->delete($listing->logo);
    }

    $listing->delete();
    return redirect('/listings/manage')->with('message', 'Snippet deleted');
  }

  // Manage Listings
  public function manage() {
    $user = Auth::user();
    return view('listings.manage', [
      'listings' => ($user instanceof User) ? $user->listings()->get() : collect()
    ]);
  }

// End of controller
}