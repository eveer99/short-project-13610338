<!DOCTYPE html>
<html>
<head>
    <title>Short URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body class="container">
    <br>
    @if($message = Session::get('success'))
        <p>{{ $message }}</p>
    @endif

    <br>
    <a href="/new">Create</a>
    <br>
    <p>Your Quota Remaining {{ 10-count($urls) }}/10</p>

    @if(!$urls->isEmpty())
        <table class="table table-bordered table-sm">
            <tr>
                <td>Long URL</td>
                <td>Short URL</td>
                <td>Created_at</td>
            </tr>

            @foreach($urls as $url)
                <tr>
                    <td>{{ $url->long_url }}</td>
                    <td><a href="/gt/{{ $url->short_url }}" target="_bank">{{ $url->short_url }}</td>
                    <td>{{ $url->created_at }}</td>
                </tr>
            @endforeach
        </table>
    @endif
</body>
</html>
