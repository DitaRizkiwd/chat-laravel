<html>
    <head>
        <title>Website .: Login</title>
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/css/uikit.min.css" />
    </head>
    <body>
        <div class="uk-container uk-container-small">
            <form method="post" action="/login" >
                @csrf
                <h2 class="uk-margin">Login to website</h2>
                <fieldset class="uk-fieldset">
                    <div class="uk-margin">
                        <input class="uk-input" name="email" type="email" placeholder="your email" aria-label="Input">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input" name="password" type="password" placeholder="password" aria-label="Input">
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="uk-button uk-button-primary">Login</button>
                    </div>
                </fieldset>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.18.0/dist/js/uikit-icons.min.js"></script>
    </body>
</html>
