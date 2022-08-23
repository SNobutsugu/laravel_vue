<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Vue Laravel SPA') }}</title>
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app" >
    <header-component class="header"></header-component>
    <router-view class="component"/>
</div>
<!-- Scripts -->
<script src="{{ mix('/js/app.js') }}" defer></script>
<script type="application/javascript" src="https://dev-view.fullstar10.com/js/review.js"></script>
<script> fs.clear();fs.show("4bb52e8d-125d-4fb1-9918-613c9b9d2765", "uuid", { company_name: "nobu", user_name: "nobu", user_email: "test@gmail.com", plan_name: "test"});fs.tracking();fs.survey();fs.guide();fs.checklist();fs.tooltip();</script>
<!-- Style -->
<style scoped>
    #app {
        padding-top: 70px;
    }
    .header {
        position: fixed;
        /*基準を画面の左上に*/
        top: 0;
        left: 0;
    }

</style>
</body>
</html>

