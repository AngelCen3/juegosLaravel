<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @livewireStyles    <!--agregamos esta directiva en cada archivo que usaremos livewire-->

    </head>
    <body>

        <livewire:counter/>

        @livewireScripts <!--agregamos esta directiva en cada archivo que usaremos livewire-->
    </body>
</html>
