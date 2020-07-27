<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
    <title></title>
</head>
<<<<<<< HEAD

<div id="app" v-bind:class="{ active: ActiveBtn}">
    <!--ハンバーガーメニュー（ログイン済み）-->
    <humberger-logged-component></humberger-logged-component>
    
    <!--ハンバーガーメニュー（未ログイン）-->
    <!--<humberger-menu-component></humberger-menu-component>-->

    <!--検索画面（TOP)-->
    <!--<searchview-component></searchview-component>-->

=======
<div id="app" class="wrap">
{{--    <search-form-component></search-form-component>--}}
{{--    <menubar-not-login-component></menubar-not-login-component>--}}
    <search-view></search-view>
>>>>>>> c427d5f646d153f995ac38659e36e9b84e36d210
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
