<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>
</head>

<body>
    <header>
        <h1>App Name</h1>
    </header>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('workers') }}">Workers</a></li>
            @guest('account') <!-- Show login link only when the user is a guest (not logged in) -->
            <li><a href="{{ route('account.login') }}">Login</a></li>
            @else <!-- Show logout link only when the user is authenticated -->
            <li>
                <form id="logout-form" action="{{ route('account.logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @if(request()->user('account')->account_type_id == \App\Models\AccountType::CALL_CENTER)
            <li><a href="{{ route('account.callCenter.inquiryRequests.index') }}">Inquiry Requests</a></li>
            @elseif(request()->user('account')->account_type_id == \App\Models\AccountType::OFFICE)
            <li><a href="{{ route('account.office.cv.index') }}">list of cv,s</a></li>
            @endif
            @endguest
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Your App</p>
    </footer>
</body>

</html>