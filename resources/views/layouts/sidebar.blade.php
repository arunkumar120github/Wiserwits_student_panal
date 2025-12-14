 <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <i class="fas fa-graduation-cap fa-3x text-white"></i>
            <h4>Wiserwits</h4>
        </div>
        <ul class="sidebar-menu">
            <li><a href="{{ route('dashboard') }}" class="{{ Request::is('dashboard*') ? 'active' : '' }}" onclick="showPage('dashboard')"><i class="fas fa-home"></i> Dashboard</a></li>
            <li><a href="{{ route('profile') }}" class="{{ Request::is('profile*') ? 'active' : '' }} " onclick="showPage('profile')"><i class="fas fa-user"></i> My Profile</a></li>
            <li><a href="{{ route('courses') }}" class="{{ Request::is('courses*') ? 'active' : '' }} " onclick="showPage('courses')"><i class="fas fa-book"></i> My Courses</a></li>
            <li><a href="#" class="{{ Request::is('performance*') ? 'active' : '' }} " onclick="showPage('performance')"><i class="fas fa-chart-line"></i> Performance</a></li>
            <li><a href="#" class="{{ Request::is('assignments*') ? 'active' : '' }} " onclick="showPage('assignments')"><i class="fas fa-tasks"></i> Assignments</a></li>
            <li><a href="#" class="{{ Request::is('schedule*') ? 'active' : '' }} " onclick="showPage('schedule')"><i class="fas fa-calendar"></i> Schedule</a></li>
            <li><a href="#" class="{{ Request::is('messages*') ? 'active' : '' }} " onclick="showPage('messages')"><i class="fas fa-envelope"></i> Messages</a></li>
            <li><a href="#" class="{{ Request::is('settings*') ? 'active' : '' }} " onclick="showPage('settings')"><i class="fas fa-cog"></i> Settings</a></li>
            <li><a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
        </ul>
    </div>