<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
            <section id="search" class="alt">
                <input type="text" name="query" id="query" placeholder="Search" />
            </section>

        <!-- Menu -->
            <nav id="menu">
                <header class="major">
                    <h2>Menu</h2>
                </header>
                <ul>
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ route('profile') }}">Profile</a></li>
                    <li><a href="{{ route('settings') }}">Settings</a></li>
                </ul>
            </nav>

        <!-- Section -->
            <section>
                <header class="major">
                    <h2>Get in touch</h2>
                </header>
                <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                <ul class="contact">
                    <li class="icon solid fa-envelope"><a href="#">information@untitled.tld</a></li>
                    <li class="icon solid fa-phone">(000) 000-0000</li>
                    <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
                    Nashville, TN 00000-0000</li>
                </ul>
            </section>

        <!-- Footer -->
        @include('layouts.footer')

    </div>
</div>