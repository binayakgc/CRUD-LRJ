@if(Auth::check())
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">{{ Auth::user()->name }}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <svg class="bi"><use xlink:href="#house-door"/></svg>
                    Home
                </a>
              </li>
                @if(Auth::user()->isAdmin())
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">
                            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                            Manage Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
                            <svg class="bi"><use xlink:href="#people"/></svg>
                            Manage Users
                        </a>
                    </li>
                @elseif(Auth::user()->isAuthor())
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('author.posts.*') ? 'active' : '' }}" href="{{ route('author.posts.index') }}">
                            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                            My Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('author.posts.create') ? 'active' : '' }}" href="{{ route('author.posts.create') }}">
                            <svg class="bi"><use xlink:href="#plus-circle"/></svg>
                            Create New Post
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center gap-2 {{ request()->routeIs('posts.index') ? 'active' : '' }}" href="{{ route('posts.index') }}">
                            <svg class="bi"><use xlink:href="#file-earmark-text"/></svg>
                            View Posts
                        </a>
                    </li>
                @endif
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <svg class="bi"><use xlink:href="#door-closed"/></svg>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif