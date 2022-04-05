<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.header')
    <body>
        <div class="container">
            @include('inc.nav')
            @include('inc.messages')
            @yield('content')
            @include('inc.footer')
        </div>
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>

        <script>
            ClassicEditor
            .create(document.querySelector('#article-ckeditor'))
            .catch(error=>{
                console.error(error);
            });
        </script>
    </body>
</html>
