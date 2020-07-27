<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app" class="wrap">
    <test0-component></test0-component>
    <test1-component></test1-component>
    <test2-component></test2-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>