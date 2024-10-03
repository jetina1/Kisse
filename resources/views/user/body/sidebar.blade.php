<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
        <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Dashboard') }}</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- @can('user_management_access') -->

    <!-- @endcan -->

    <!-- <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUserManagement" aria-expanded="true"
            aria-controls="collapseUserManagement">
            <span>{{ __('User Management') }}</span>
        </a>
        <div id="collapseUserManagement" class="collapse" aria-labelledby="headingUserManagement"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}"
                    href="{{ route('admin.permissions.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Permissions') }}</a>
                <a class="collapse-item {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}"
                    href="{{ route('admin.roles.index') }}"><i class="fa fa-briefcase mr-2"></i> {{ __('Roles') }}</a>
                <a class="collapse-item {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}"
                    href="{{ route('admin.users.index') }}"> <i class="fa fa-user mr-2"></i> {{ __('Users') }}</a>
            </div>
        </div>
    </li> -->

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseExpense" aria-expanded="true"
            aria-controls="collapseExpense">
            <span>{{ __('Expense Management') }}</span>
        </a>
        <div id="collapseExpense" class="collapse" aria-labelledby="headingExpense" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{ request()->is('admin/expense_categories') || request()->is('admin/expense_categories/*') ? 'active' : '' }}"
                    href="{{ route('admin.expense_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Expense category') }}</a>
                <a class="collapse-item {{ request()->is('admin/income_categories') || request()->is('admin/income_categories/*') ? 'active' : '' }}"
                    href="{{ route('admin.income_categories.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Income category') }}</a>
                <a class="collapse-item {{ request()->is('admin/expenses') || request()->is('admin/expenses/*') ? 'active' : '' }}"
                    href="{{ route('admin.expenses.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Expense') }}</a>
                <a class="collapse-item {{ request()->is('admin/incomes') || request()->is('admin/incomes/*') ? 'active' : '' }}"
                    href="{{ route('admin.incomes.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Income') }}</a>
                <a class="collapse-item {{ request()->is('admin/monthly_reports') || request()->is('admin/monthly_reports/*') ? 'active' : '' }}"
                    href="{{ route('admin.monthly_reports.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                    {{ __('Monthly Reports') }}</a>
                @can('currency_access')
                    <a class="collapse-item {{ request()->is('admin/currencies') || request()->is('admin/currencies/*') ? 'active' : '' }}"
                        href="{{ route('admin.currencies.index') }}"> <i class="fa fa-briefcase mr-2"></i>
                        {{ __('Currency') }}</a>
                @endcan
            </div>
        </div>
    </li>

</ul>