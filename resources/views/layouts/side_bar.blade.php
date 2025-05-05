  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="logo">
        <img src="{{asset('img/logo.png') }}" alt="Welcome Image" style="width: 40px; height: 40px;">
        <span  style="color:white;">Fahax Connect</span">
    </div>
            <nav class="nav">
                <ul>
                    <li><a href="#" class="tab-link" data-url="{{ route('profile0.index') }}"><i class="material-icons">person</i> Profile</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ route('main-content') }}"><i class="material-icons">dashboard</i> Dashboard</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ route('academies.index') }}"><i class="material-icons">school</i> Academies</a></li>
                    <li><a href="#" class="tab-link" data-url=" "><i class="material-icons">work</i> Earn</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/gaspay') }}"><i class="fa-solid fa-fire"></i> GasPay</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/news') }}"><i class="material-icons">newspaper</i> News</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/security') }}"><i class="material-icons">security</i> Security</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/notification') }}"><i class="material-icons">notifications</i> Notification</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/customization') }}"><i class="material-icons">settings</i> Customization</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/help') }}"><i class="material-icons">help</i> Help & Support</a></li>
                    <li><a href="#" class="tab-link" data-url="{{ url('/developer') }}"><i class="material-icons">code</i> Developer</a></li>
                    <li><a href="{{ route('logout') }}"><i class="material-icons">logout</i> Log out</a></li>
                </ul>
            </nav>
                </ul>
            </nav>
        </aside>
