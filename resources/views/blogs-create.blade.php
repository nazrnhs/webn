<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Blogs Creation</h1>

        <form action="{{route('blogs.store')}}" method="post">
            @csrf

            <div>

                <label for="title">
                    Blog Name
                </label>


                <input id="title" type="text" name="title">



                @error ('title')

                <div class="alert alert-danger">{{$message}}</div>

                @enderror


            </div>

            <div ">

                <label for="content">
                    Blog Content
                </label>

                <input id="content" type="text" name="content">

                @error ('content')

                <div class="alert alert-danger">{{$message}}</div>

                @enderror
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>

        </form>

</body>
</html>
