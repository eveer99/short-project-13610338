<!DOCTYPE html>
<html>
<head>
    <title>Short URL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
    <div class="container mt-5">
        <h1>Create URL Short</h1>

        <div class="card">
            <div class="card-header">
                <form method="POST" action="{{ url('/save') }}">
                    @csrf
                    <div class="input-group">
                        <input type="url" name="long_url" class="form-control" placeholder="Past Long URL" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit">Create Short URL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
