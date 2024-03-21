<html>
    <head>
        <title>Website .: Profile</title>
        <!-- UIkit CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
    </head>
    <body>
        <div class="uk-container uk-container-small">
            <form method="post" action="/chat">
                @csrf

                <h2 class="uk-margin">My Profile {{ Auth::user()->name }}</h2>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" type="text" placeholder="name" disabled value="{{ Auth::user()->name }}">
                    </div>
                    <div class="uk-margin">
                        <textarea class="uk-textarea" name="message" placeholder="type in here"></textarea>
                    </div>
                    {{-- <div class="uk-margin">
                        <input class="uk-input" name="password" type="password" placeholder="Change password" aria-label="Input">
                    </div> --}}
                    <hr/>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary">Change Profile</button>
                    </div>
                </fieldset>
            </form>
            <hr>
            @foreach ($chats as $item)
            <div class="uk-margin">
                <h3>{{$item->user->name}} - {{$item->user->email}}</h3>
                <p>{{$item->message}}</p>
                @if(Auth::user()->id==$item->user->id)
                <a href="/chat/delete/{{$item->id}}">Hapus Chat</a>
                @endif
            </div>
            @endforeach
            <a href="login/logout"><button type="button" class="btn btn-danger" style="color: white">logout</button></a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>
    </body>
</html>
