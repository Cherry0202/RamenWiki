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
<div id="app" v-bind:class="{ active: ActiveBtn}">
    <!--ハンバーガーメニュー（ログイン済み）-->
{{--    <humberger-logged-component></humberger-logged-component>--}}
    <humberger-menu-component></humberger-menu-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
