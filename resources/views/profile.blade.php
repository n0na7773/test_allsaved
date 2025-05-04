@extends('layouts.app')

@section('title','Profile')

@section('content')
  <section id="main">
    <header class="major">
      <h2>Profile</h2>
    </header>
    <div class="container">
      <div class="row">
        <!-- Example profile info card -->
        <div class="col-6 col-12-medium">
          <section class="box">
            <h3>Account Details</h3>
            <ul class="alt">
              <li><strong>Name:</strong> John</li>
              <li><strong>Email:</strong> mail@mail.com</li>
              <li><strong>Joined:</strong> 04.05.2025</li>
            </ul>
          </section>
        </div>
        <!-- Example change-password form stub -->
        <div class="col-6 col-12-medium">
          <section class="box">
            <h3>Update Password</h3>
            <form method="POST" action="{{ route('profile.update') }}">
              @csrf
              <div class="row gtr-uniform">
                <div class="col-12">
                  <input type="password" name="current_password" placeholder="Current Password" />
                </div>
                <div class="col-12">
                  <input type="password" name="password" placeholder="New Password" />
                </div>
                <div class="col-12">
                  <input type="password" name="password_confirmation" placeholder="Confirm New Password" />
                </div>
                <div class="col-12">
                  <ul class="actions">
                    <li><input type="submit" value="Save Changes" class="primary" /></li>
                  </ul>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </section>
@endsection