<!-- need to remove -->



<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <img src="{{ asset('images/dashboard.jpg') }}" class="nav-icon">
        <p>Home</p>
    </a>
</li>
@hasanyrole('Admin|Manager')


<li class="nav-item">
    <a href="{{ route('users') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <img src="{{ asset('images/users.png') }}" class="nav-icon">
        <p>Users</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('clients') }}" class="nav-link {{ Request::is('clients') ? 'active' : '' }}">
        <img src="{{ asset('images/clients.png') }}" class="nav-icon">
        <p>Clients</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('projects') }}" class="nav-link {{ Request::is('projects') ? 'active' : '' }}">
        <img src="{{ asset('images/projects.png') }}" class="nav-icon">
        <p>Projects</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('tasks') }}" class="nav-link {{ Request::is('tasks') ? 'active' : '' }}">
        <img src="{{ asset('images/tasks.png') }}" class="nav-icon">
        <p>Tasks</p>
    </a>
</li>
@else

@endhasanyrole
