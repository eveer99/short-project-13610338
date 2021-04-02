<!DOCTYPE html>
<html>
<head>
    <title>Short URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>

<div class="container mt-5">
    <h1>Create url short</h1>
    <div class="card">
        <div class="card-header">
            <form method="POST" action="{{ url('/') }}">
                @csrf
                <div class="input-group">
                    <input type="url" name="org_link" class="form-control" placeholder="Past Long URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Create Short URL</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{--        <div class="card-body">--}}

{{--            @if (Session::has('success'))--}}
{{--                <div class="alert alert-success">--}}
{{--                    <p>{{ Session::get('success') }}</p>--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <table class="table table-bordered table-sm">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>ID</th>--}}
{{--                    <th>Short Link</th>--}}
{{--                    <th>Link</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($shortLinks as $row)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $row->id }}</td>--}}
{{--                        <td><a href="{{ route('shorten.link', $row->code) }}" target="_blank">{{ route('shorten.link', $row->code) }}</a></td>--}}
{{--                        <td>{{ $row->link }}</td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}

</body>
</html>
