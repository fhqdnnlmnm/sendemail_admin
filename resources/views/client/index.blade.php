<html>
    <head>
        <title>{{ config('eapp.title') }}</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>{{ config('eapp.title') }}</h1>
            <hr>
            <ul>
            @foreach ($clients as $client)
                <li>
                    <a href="#">{{ $client->name }}</a>
                    <em>({{ $client->contacts[0]->name }})</em>
                   
                </li>
            @endforeach
            </ul>
            <hr>
        </div>
    </body>
</html>