<nav class="sidebar-menu">
    <ul class="nav flex-column">
        @can('dashboard')
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('admin_dashboard')}}">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
        @endcan
        @canany(['permission-group-list','permission-group-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="permission_group" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Permission Group
                </a>
                <ul class="dropdown-menu" aria-labelledby="permission_group">
                    @can('permission-group-create')
                        <li><a class="dropdown-item" href="{{route('permission_group.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('permission-group-list')
                        <li><a class="dropdown-item" href="{{route('permission_group.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['permission-list','permission-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="permission" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Permission
                </a>
                <ul class="dropdown-menu" aria-labelledby="permission">
                    @can('permission-create')
                        <li><a class="dropdown-item" href="{{route('permission.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('permission-list')
                        <li><a class="dropdown-item" href="{{route('permission.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['role-list','role-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="users" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Roles
                </a>
                <ul class="dropdown-menu" aria-labelledby="users">
                    @can('role-create')
                        <li><a class="dropdown-item" href="{{route('role.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('role-list')
                        <li><a class="dropdown-item" href="{{route('role.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['user-list','user-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Users
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('user-create')
                        <li><a class="dropdown-item" href="{{route('user.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('user-list')
                        <li><a class="dropdown-item" href="{{route('user.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['campus-list','campus-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Campuses
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('campus-create')
                        <li><a class="dropdown-item" href="{{route('campuses.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('campus-list')
                        <li><a class="dropdown-item" href="{{route('campuses.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['session-list','session-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Session
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('session-create')
                        <li><a class="dropdown-item" href="{{route('session.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('session-list')
                        <li><a class="dropdown-item" href="{{route('session.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['venue-list','venue-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Venue
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('venue-create')
                        <li><a class="dropdown-item" href="{{route('venue.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('venue-list')
                        <li><a class="dropdown-item" href="{{route('venue.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['seat-list','seat-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Seats
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('seat-create')
                        <li><a class="dropdown-item" href="{{route('conv-seats.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('seat-list')
                        <li><a class="dropdown-item" href="{{route('conv-seats.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['medal-list-category-list','medal-list-category-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Medal List Category
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('medal-list-category-create')
                        <li><a class="dropdown-item" href="{{route('medal-category.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('medal-list-category-list')
                        <li><a class="dropdown-item" href="{{route('medal-category.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['medal-list-list','medal-list-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Medal List
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('medal-list-create')
                        <li><a class="dropdown-item" href="{{route('medal-list.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('medal-list-list')
                        <li><a class="dropdown-item" href="{{route('medal-list.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['medal-list','medal-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Medals
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('medal-create')
                        <li><a class="dropdown-item" href="{{route('medals.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('medal-list')
                        <li><a class="dropdown-item" href="{{route('medals.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['convocation-config-list','convocation-config-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Config
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('convocation-config-create')
                        <li><a class="dropdown-item" href="{{route('con-config.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('convocation-config-list')
                        <li><a class="dropdown-item" href="{{route('con-config.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['eligible-type-list','eligible-type-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eligible Types
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('eligible-type-create')
                        <li><a class="dropdown-item" href="{{route('eligible-types.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('eligible-type-list')
                        <li><a class="dropdown-item" href="{{route('eligible-types.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['eligible-list','eligible-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eligibles
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('eligible-create')
                        <li><a class="dropdown-item" href="{{route('eligibles.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('eligible-list')
                        <li><a class="dropdown-item" href="{{route('eligibles.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['doc-type-list','doc-type-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Doc Types
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('doc-type-create')
                        <li><a class="dropdown-item" href="{{route('doc-types.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('doc-type-list')
                        <li><a class="dropdown-item" href="{{route('doc-types.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['candidate-registration-list','candidate-registration-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Candidate Registration
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('candidate-registration-create')
                        <li><a class="dropdown-item" href="{{route('candidate_registration.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('candidate-registration-list')
                        <li><a class="dropdown-item" href="{{route('candidate_registration.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['guest-list','guest-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Guest Registration
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('guest-create')
                        <li><a class="dropdown-item" href="{{route('guest.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('guest-list')
                        <li><a class="dropdown-item" href="{{route('guest.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['eligible-voucher-list','eligible-registered-list'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Eligible Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('eligible-voucher-list')
                        <li><a class="dropdown-item" href="{{route('account.index')}}"><i class="fa fa-caret-right me-2"></i>Eligible List</a></li>
                    @endcan
                    @can('eligible-registered-list')
                        <li><a class="dropdown-item" href="{{route('getAccountEligible')}}"><i class="fa fa-caret-right me-2"></i>Registered List</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['regalia-list','regalia-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Regalias
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('regalia-create')
                        <li><a class="dropdown-item" href="{{route('regalias-list.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('regalia-list')
                        <li><a class="dropdown-item" href="{{route('regalias-list.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['user-ledger-list','user-ledger-create'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="role" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    User Ledger
                </a>
                <ul class="dropdown-menu" aria-labelledby="role">
                    @can('user-ledger-create')
                        <li><a class="dropdown-item" href="{{route('users-ledger-list.create')}}"><i class="fa fa-caret-right me-2"></i>Add New</a></li>
                    @endcan
                    @can('user-ledger-list')
                        <li><a class="dropdown-item" href="{{route('users-ledger-list.index')}}"><i class="fa fa-caret-right me-2"></i>View All</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
        @canany(['paid-eligibles-list','not-paid-eligibles-list','final-summary-report'])
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="report" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reports
                </a>
                <ul class="dropdown-menu" aria-labelledby="report">
                    @can('paid-eligibles-list')
                        <li><a class="dropdown-item" href="{{route('paidEligibles')}}"><i class="fa fa-caret-right me-2"></i>Paid Candidates</a></li>
                    @endcan
                    @can('not-paid-eligibles-list')
                        <li><a class="dropdown-item" href="{{route('notPaidEligibles')}}"><i class="fa fa-caret-right me-2"></i>Not Paid Candidates</a></li>
                    @endcan
                    @can('final-summary-report')
                        <li><a class="dropdown-item" href="{{route('finalSummary')}}"><i class="fa fa-caret-right me-2"></i>Final Summary</a></li>
                    @endcan
                    @can('register-candidate-report')
                        <li><a class="dropdown-item" href="{{route('registerCandidates')}}"><i class="fa fa-caret-right me-2"></i>Registered Candidates</a></li>
                    @endcan
                    @can('register-guest-report')
                        <li><a class="dropdown-item" href="{{route('registerGuests')}}"><i class="fa fa-caret-right me-2"></i>Registered Guests</a></li>
                    @endcan
                    @can('attendance-candidate-report')
                        <li><a class="dropdown-item" href="{{route('attendanceCandidates')}}"><i class="fa fa-caret-right me-2"></i>Attendance Candidates</a></li>
                    @endcan
                    @can('attendance-guest-report')
                        <li><a class="dropdown-item" href="{{route('attendanceGuests')}}"><i class="fa fa-caret-right me-2"></i>Attendance Guests</a></li>
                    @endcan
                    @can('user-position-report')
                        <li><a class="dropdown-item" href="{{route('userPositions')}}"><i class="fa fa-caret-right me-2"></i>Barrier Report</a></li>
                    @endcan
                </ul>
            </li>
        @endcanany
    </ul>
</nav>
