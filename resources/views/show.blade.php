<!DOCTYPE html>
<html>
<head>
    <title>Short URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
        <div class="card-body" method="POST" action="{{ url('/') }}">

            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif

            <table class="table table-bordered table-sm">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Short Link</th>
                    <th>Link</th>
                </tr>
                </thead>
                <tbody>
                @foreach($short as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td><a href="{{ ulr('/', $row->ShortUrl) }}" target="_blank">{{ ulr('/', $row->ShortUrl) }}</a></td>
                        <td>{{ $row->LongUrl }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
