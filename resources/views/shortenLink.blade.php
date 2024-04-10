<x-app-layout>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Shorten Link</title>
</head>
<body>
<div class="container mt-5">
    <h1>Project shorten Link</h1>
    @if(session('success'))
        <div class="alert alert-success">{{session('success')}} </div>
    @endif
    <div class="card">
        <div class="card-header">
            <form method="post" action="{{ route('generate.shorten.link.post')}}">
                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="link" class="form-control" placeholder="Enter url">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Generate shorten Link</button>
                    </div>
                </div>
                @error('link') {{ $message}} @enderror
            </form>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Short links</th>
            <th>Links</th>
            <th>Clicks</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($list as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td><a href="{{ route('shorten.link', ['code' => $row->code]) }}" target="_blank">{{ route('shorten.link', ['code' => $row->code]) }}</a></td>
                <td>{{ $row->link }}</td>
                <td>{{ $row->clicks }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
</x-app-layout>