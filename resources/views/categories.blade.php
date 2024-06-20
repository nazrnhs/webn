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
        <h1>Categories</h1>

        <a href="{{route('categories.create')}}">

            <button type="button">New Creation</button>
        </a>

        <h2>Titles: </h2>
        @foreach ($categories as $category)

            <div style="display:flex; justify-content:space-between">

                <a href="{{ route('categories.show', $category->id)}}">{{$category->title}}</a>
{{--                <span>{{$category->title}}</span>--}}
                <div style="display: flex; gap: 4px">
                      <form action="{{route('categories.destroy', $category->id)}}" method="post">
                            @csrf
                            @method('delete')

                            <button type="submit">Delete</button>
                      </form>
                    <a href="{{route('categories.edit', $category->id)}}">

                        <button type="button">Edit</button>
                    </a>
                </div>
            </div>

        @endforeach
</body>
</html>
