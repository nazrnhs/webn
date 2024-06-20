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
        <h1>Blogs</h1>

        <a href="{{route('blogs.create')}}">

            <button type="button">New blogs</button>
        </a>

        <h2>Titles:</h2>

        @foreach ($blogs as $blog)

            <div style="display:flex; justify-content:space-between">

                <a href="{{ route('blogs.show', $blog->id)}}">{{$blog->title}}</a>

                <a href="{{ route('blogs.show', $blog->id)}}">{{$blog->content}}</a>
                {{--                <span>{{$category->title}}</span>--}}
                <div style="display: flex; gap: 4px">
                    <form action="{{route('blogs.destroy', $blog->id)}}" method="post">
                        @csrf
                        @method('delete')

                        <button type="submit">Delete</button>
                    </form>
                    <a href="{{route('blogs.edit', $blog->id)}}">

                        <button type="button">Edit</button>
                    </a>
                </div>
            </div>


        @endforeach

</body>
</html>
