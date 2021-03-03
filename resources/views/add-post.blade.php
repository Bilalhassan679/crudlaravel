<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<div class="container col-sm-4">
    <div class="Back">
        <i class="fa fa-arrow-left" onclick="Back()"></i>
    </div>
    <p class="h2 text-center">Form</p>
    @if(Session::has('post_created'))
        <div class="alert alert-success" role="alert">
            {{Session::get('post_created')}}
        </div>
    @endif
    <form action="{{route('post.create')}}" method="post">
        @csrf
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" type="text" name="title" required />
            <span class="Error"></span>
        </div>
        <div class="form-group">
            <label>Body</label>
            <input class="form-control" type="text" name="body" required />
            <span class="Error"></span>
        </div>
        <br>
        <div class="form-group" style="float: left">
            <input class="btn btn-primary btn-block" type="submit" value="Add Post"/>
        </div>
        <a href="/posts" class="btn btn-success" style="float: right">All Post</a>
    </form>
</div>
</body>
</html>
