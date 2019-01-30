<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="user-profile">
            <!-- User profile image -->
            <div class="profile-img"> <img src="{{ session()->get('admin')['avatar'] }}" alt="user" />
                <!-- this is blinking heartbit-->
                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <h4>{{ session()->get('admin')['fullname']}}</h4>
                <p class="text-primary text-uppercase small">{{ session()->get('admin')['role'] }}</p>
                <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="{{ url('admin/profile') }}" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="{{ url('admin/logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    <!-- text-->
                </div>
            </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-small-cap">CLIENT</li>
                <li> <a class="waves-effect waves-dark" href="{{ url('/') }}" aria-expanded="false" target="_blank"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu" >View Client Page</a>
                </li>
                <li class="nav-small-cap">ADMIN</li>
                <li> <a class="waves-effect waves-dark" href="{{ url('admin') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                            class="hide-menu">Dashboard</a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span
                            class="hide-menu">Post</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/post/add') }}">Add Post</a></li>
                        <li><a href="{{ url('admin/post/manage') }}">Manage Posts</a></li>
                        <li><a href="{{ url('admin/post/manage-by-author') }}">My Posts</a></li>
                        <li><a href="{{ url('admin/post/bin') }}">Recycle</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span
                            class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/category/add') }}">Add Category</a></li>
                        <li><a href="{{ url('admin/category/manage') }}">Manage Categories</a></li>
                        <li><a href="{{ url('admin/category/bin') }}">Recycle</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-tag-multiple"></i><span
                            class="hide-menu">Tag</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/tag/add') }}">Add Tag</a></li>
                        <li><a href="{{ url('admin/tag/manage') }}">Manage Tags</a></li>
                        <li><a href="{{ url('admin/tag/bin') }}">Recycle</a></li>
                    </ul>
                </li>
                @if(session('admin'))
                @if(session()->get('admin')['role'] === 'admin')
                <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span
                            class="hide-menu">User</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('admin/user/manage') }}">Manage Users</a></li>
                        <li><a href="{{ url('admin/user/inactive') }}">Inactive Users</a></li>
                        <li><a href="{{ url('admin/user/bin') }}">Recycle</a></li>
                    </ul>
                </li>
                @endif
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
