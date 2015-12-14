<html>
    <head>
        <script src="{{ url('js/jquery-2.1.4.min.js') }}"></script>
        <script src="{{ url('js/jquery.form.min.js') }}"></script>
        <script src="{{ url('js/equilibrium.js') }}"></script>
    </head>
    <body>
        <form action="{{ url('user/login') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <label for="username">Usuario:
                <input type="text" name="username" />
            </label>
            <label for="password">Contraseña:
                <input type="password" name="password" />
            </label>
            <input type="submit" value="Entrar" />
        </form>
    </body>
</html>
