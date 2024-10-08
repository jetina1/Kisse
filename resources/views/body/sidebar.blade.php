<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ ('Homepage') }}</div>
    </a> -->
    <!-- Divider -->
    <!-- <hr class="sidebar-divider my-0"> -->

    <!-- Nav Item - Dashboard -->

    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i id="dashboaedIcon" class="fas fa-fw fa-tachometer-alt"></i>
            <span id="dashboardd">{{ ('Dashboard') }}</span>
        </a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Conditional Rendering for User Management -->
    @if(Auth::user() && Auth::user()->hasRole('Admin')) <!-- Check if the user is an admin -->
        <li class="nav-item">
            <!-- <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUserManagement" aria-expanded="true"
                                                                                                                                                                        aria-controls="collapseUserManagement"> -->
            <span>{{ ('User Management') }}</span>
            <!-- </a> -->
            <!-- <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement"
                                                                                                                                                                        data-parent="#accordionSidebar"> -->
            <!-- <div class="bg-white py-2 collapse-inner rounded"> -->
            <ul id="sidebarUserManagnment">
                <!-- <li>
                                                            <a class="collapse-item {{ request()->is('admin/permissions') ? 'active' : '' }}"
                                                                href="{{ route('admin.permissions.index') }}">
                                                                <i class="fa fa-briefcase mr-2"></i> {{ ('Permissions') }}
                                                            </a>
                                                        </li> -->
                <li id="roles">
                    <a class="collapse-item {{ request()->is('admin/roles') ? 'active' : '' }}"
                        href="{{ route('admin.roles.index') }}">
                        <i class="fa fa-briefcase mr-2"></i> {{ ('Roles') }}
                    </a>
                </li>
                <li id="users">
                    <a class="collapse-item {{ request()->is('admin/users') ? 'active' : '' }}"
                        href="{{ route('admin.users.index') }}">
                        <i class="fa fa-user mr-2"></i> {{ ('Users') }}
                    </a>
                </li>
            </ul>
            <!-- </div> -->
            <!-- </div> -->
        </li>
    @endif
    <!-- Expense Management accessible to all users -->
    <li class="nav-item">
        <!-- <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseExpense" aria-expanded="true"
            aria-controls="collapseExpense"> -->
        <span>{{ ('Expense Management') }}</span>
        <!-- </a> -->
        <!-- <div id="collapseExpense" class="collapse" aria-labelledby="headingExpense" data-parent="#accordionSidebar"> -->
        <!-- <div class="bg-white py-2 collapse-inner rounded"> -->
        <ul id="sidebarEspenseManagnment">
            <li>
                <a class="collapse-item {{ request()->is('admin/expense_categories') ? 'active' : '' }}"
                    href="{{ route('admin.expense_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Expense category') }}</a>
            </li>
            <li>
                <a class="collapse-item {{ request()->is('admin/income_categories') ? 'active' : '' }}"
                    href="{{ route('admin.income_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Income category') }}</a>
            </li>
            <li>
                <a class="collapse-item {{ request()->is('admin/expenses') ? 'active' : '' }}"
                    href="{{ route('admin.expenses.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Expense') }}</a>

            </li>
            <li>
                <a class="collapse-item {{ request()->is('admin/incomes') ? 'active' : '' }}"
                    href="{{ route('admin.incomes.index') }}">
                    <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Income') }}</a>
            </li>
            <li>
                <a class="collapse-item {{ request()->is('admin/monthly_reports') ? 'active' : '' }}"
                    href="{{ route('admin.monthly_reports.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Monthly Reports') }}</a>
            </li>
        </ul>
        <!-- </div> -->
        <!-- </div> -->
    </li>

</ul>

<style>
    #accordionSidebar {
        background-color: whitesmoke;
    }

    #roles,
    {
    padding-top: 20;
    }

    #dashboaedIcon {
        color: black;

    }

    #sidebarEspenseManagnment,
    #sidebarUserManagnment {
        list-style-type: none;
        /* Remove default bullets */
        padding: 100;
        /* Remove default padding */
        margin: 0;
        /* Remove default margin */
        background-color: #f8f9fa;
        /* Light background color */
        width: 250px;
        /* Set a fixed width for the sidebar */
        border-right: 1px solid #dee2e6;
        /* Right border for separation */
    }

    #sidebarEspenseManagnment li {
        border-bottom: 1px solid #dee2e6;
        /* Bottom border for each item */
    }

    #sidebarEspenseManagnment li:last-child {
        border-bottom: none;
        /* Remove border from the last item */
    }

    #dashboardd {
        color: black;
    }

    #sidebarEspenseManagnment a {
        display: flex;
        /* Use flexbox for alignment */
        align-items: center;
        /* Center items vertically */
        padding: 15px;
        /* Add padding for clickable area */
        text-decoration: none;
        /* Remove underline from links */
        color: #343a40;
        /* Dark text color */
        transition: background-color 0.3s;
        /* Smooth background transition */
    }

    #sidebarUserManagnment a {
        align-items: center;
        padding: 15px;
        text-decoration: none;
        color: #343a40;
        transition: background-color 0.3s;
    }

    #sidebarEspenseManagnment a:hover {
        background-color: #556270;
        /* Light gray background on hover */
    }

    #sidebarEspenseManagnment a:hover {
        background-color: #556270;
        /* Light gray background on hover */
    }

    #sidebarEspenseManagnment a i {
        margin-right: 10px;
        /* Space between icon and text */
    }
</style>