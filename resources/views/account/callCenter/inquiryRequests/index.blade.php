<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry Requests</title>
</head>

<body>
    <header>
        <h1>Inquiry Requests</h1>
    </header>

    <main>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Worker ID</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inquiryRequests as $inquiryRequest)
                <tr>
                    <td>{{ $inquiryRequest->id }}</td>
                    <td>{{ $inquiryRequest->name }}</td>
                    <td>{{ $inquiryRequest->email }}</td>
                    <td>{{ $inquiryRequest->phone }}</td>
                    <td>{{ $inquiryRequest->worker_id }}</td>
                    <td>
                        <form action="{{ route('account.callCenter.inquiryRequests.destroy', $inquiryRequest->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 Your App</p>
    </footer>
</body>

</html>