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
<script type="application/javascript" src="http://localhost:9082/js/review.js"></script>
<script type="application/javascript" src="https://stage-view.fullstar10.com/js/review.js"></script>
<script> fs.show("3df3c97a-78a9-4814-b1d1-b661ce752ed9", "nobu_test_scroll", { company_name: "nobu_com", user_name: "satonobu", user_email: "st.nobutsugu+001@cloudcircus.co.jp"});fs.tracking();fs.survey();fs.guide();fs.checklist();</script>
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

