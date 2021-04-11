<!DOCTYPE html>
<html>
<head>
    <title>Short URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body class="container">
    <br>

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <strong>{{ $message }} !</strong> บันทึกข้อมูลเรียบร้อยแล้ว.
        </div>
    @endif

    <br>

    <center>
        <div class="col-12">
            <div class="row">
                <p class="col-11">Your Quota Remaining {{ 10-count($urls) }}/10</p>
                <button type="button" class="col-1 btn btn-success" onclick="window.location.href='/new'">Create</button>
{{--                <a class="col-6 justify-end" href="/new">Create</a>--}}
            </div>
        </div>
    </center>

    <br>

    @if(!$urls->isEmpty())
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th class="text-center">Long URL</th>
                    <th class="text-center">Short URL</th>
                    <th class="text-center">Created_at</th>
                </tr>
            </thead>

            <tbody>
                @foreach($urls as $url)
                    <tr>
                        <td>{{ $url->long_url }}</td>
                        <td class="text-center"><a href="/gt/{{ $url->short_url }}" target="_bank">{{ $url->short_url }}</td>
                        <td class="text-center">{{ $url->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>
