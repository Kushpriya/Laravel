<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <header>
            <h1>{{$title}}</h1>
        </header>

        @if($is_expired)
        <h1 style = "color:red;">This website is expired</h1>
        @endif

        <section>
            <ul>
                @foreach($news as $single_news) 
                <h1><a href ="/news/1">{{$single_news}}</h1>
                @endforeach
         </ul>
</section>
</main>
</body>
</html>/