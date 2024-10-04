<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ ('Homepage') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ ('Dashboard') }}</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Conditional Rendering for User Management -->
    @if(Auth::user() && Auth::user()->hasRole('Admin'))  <!-- Check if the user is an admin -->
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUserManagement" aria-expanded="true"
                aria-controls="collapseUserManagement">
                <span>{{ ('User Management') }}</span>
            </a>
            <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item {{ request()->is('admin/permissions') ? 'active' : '' }}"
                        href="{{ route('admin.permissions.index') }}">
                        <i class="fa fa-briefcase mr-2"></i> {{ ('Permissions') }}
                    </a>
                    <a class="collapse-item {{ request()->is('admin/roles') ? 'active' : '' }}"
                        href="{{ route('admin.roles.index') }}">
                        <i class="fa fa-briefcase mr-2"></i> {{ ('Roles') }}
                    </a>
                    <a class="collapse-item {{ request()->is('admin/users') ? 'active' : '' }}"
                        href="{{ route('admin.users.index') }}">
                        <i class="fa fa-user mr-2"></i> {{ ('Users') }}
                    </a>
                </div>
            </div>
        </li>
    @endif

    <!-- Expense Management accessible to all users -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseExpense" aria-expanded="true"
            aria-controls="collapseExpense">
            <span>{{ ('Expense Management') }}</span>
        </a>
        <div id="collapseExpense" class="collapse" aria-labelledby="headingExpense" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin/expense_categories') ? 'active' : '' }}"
                    href="{{ route('admin.expense_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Expense category') }}</a>
                <a class="collapse-item {{ request()->is('admin/income_categories') ? 'active' : '' }}"
                    href="{{ route('admin.income_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Income category') }}</a>
                <a class="collapse-item {{ request()->is('admin/expenses') ? 'active' : '' }}"
                    href="{{ route('admin.expenses.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Expense') }}</a>
                <a class="collapse-item {{ request()->is('admin/incomes') ? 'active' : '' }}"
                    href="{{ route('admin.incomes.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Income') }}</a>
                <a class="collapse-item {{ request()->is('admin/monthly_reports') ? 'active' : '' }}"
                    href="{{ route('admin.monthly_reports.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ ('Monthly Reports') }}</a>
            </div>
        </div>
    </li>

</ul>