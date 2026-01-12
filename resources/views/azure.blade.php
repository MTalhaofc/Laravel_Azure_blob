<!DOCTYPE html>
<html>
<head>
    <title>Azure Blob Storage Test</title>
</head>
<body>
    <h1>Test Azure Blob Storage</h1>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form action="{{ route('azure.create') }}" method="POST">
        @csrf
        <button type="submit">Create Test File</button>
    </form>

    <form action="{{ route('azure.delete') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Test File</button>
    </form>
</body>
</html>
