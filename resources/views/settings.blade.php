@extends('layouts.app')

@section('title','Settings')

@section('content')
  <section id="main">
    <header class="major">
      <h2>Settings</h2>
    </header>
    <div class="container">
      <form method="POST" action="{{ route('settings.update') }}">
        @csrf
        <div class="row gtr-uniform">
        <div class="col-6 col-12-medium">
          <input
            class="checkbox"
            id="newsletter"
            type="checkbox"
            name="newsletter"
          >
          <label for="newsletter">Receive Newsletters</label>
        </div>

        <div class="col-6 col-12-medium">
          <input
            class="checkbox"
            id="notifications"
            type="checkbox"
            name="notifications"
          >
          <label for="notifications">Enable Notifications</label>
        </div>
          <div class="col-12">
            <label for="setting-3">Language</label>
            <select id="setting-3" name="language">
              <option value="en" selected>English</option>
              <option value="uk">Українська</option>
            </select>
          </div>
          <div class="col-12">
            <ul class="actions">
              <li><input type="submit" value="Save Settings" class="primary" /></li>
              <li><input type="reset" value="Reset" /></li>
            </ul>
          </div>
        </div>
      </form>
    </div>
  </section>
@endsection