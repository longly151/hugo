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
                <p class="
                @if (session()->get('admin')['role'] == 'admin')
                text-primary font-weight-bold
                @elseif (session()->get('admin')['role'] == 'moderator')
                text-warning
                @elseif (session()->get('admin')['role'] == 'poster')
                text-success
                @elseif (session()->get('admin')['role'] == 'customer')
                text-secondary
                @endif
                text-uppercase small">{{ session()->get('admin')['role'] }}</p>

                <a href="javascript:void(0);" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="true"><i class="mdi mdi-settings"></i></a>
                <div class="dropdown-menu animated flipInY">
                    <!-- text-->
                    <a href="/admin/profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <!-- text-->
                    <a href="/admin/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
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
                <li> <a class="waves-effect waves-dark" href="/" aria-expanded="false" target="_blank"><i class="mdi mdi-account-multiple"></i><span
                            class="hide-menu" >View Client Page</a>
                </li>
                <li class="nav-small-cap">ADMIN</li>
                <li> <a class="waves-effect waves-dark" href="/admin" aria-expanded="false"><i class="mdi mdi-gauge"></i><span
                            class="hide-menu">Dashboard</a>
                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-newspaper"></i><span
                            class="hide-menu">Post</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/post/add">Add Post</a></li>
                        <li><a href="/admin/post/manage">Manage Posts</a></li>
                        <li><a href="/admin/post/manage-by-author">My Posts</a></li>
                        <li><a href="/admin/post/bin">Trash</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i><span
                            class="hide-menu">Category</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/category/add">Add Category</a></li>
                        <li><a href="/admin/category/manage">Manage Categories</a></li>
                        <li><a href="/admin/category/bin">Trash</a></li>
                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-tag-multiple"></i><span
                            class="hide-menu">Tag</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/tag/add">Add Tag</a></li>
                        <li><a href="/admin/tag/manage">Manage Tags</a></li>
                        <li><a href="/admin/tag/bin">Trash</a></li>
                    </ul>
                </li>
                @if(session('admin'))
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0);" aria-expanded="false"><i class="mdi mdi-account"></i><span
                    class="hide-menu">User</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="/admin/user/list">User List</a></li>
                @if(session()->get('admin')['role'] === 'admin')
                        <li><a href="/admin/user/manage">Manage Users</a></li>
                        <li><a href="/admin/user/inactive">Inactive Users</a></li>
                        <li><a href="/admin/user/bin">Trash</a></li>
                @endif
                    </ul>
                </li>
                @endif
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
