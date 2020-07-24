<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
    <div id="app">
        <menubar-notlogin-component></menubar-notlogin-component>
    </div>
<script src="{{ mix('/js/app.js')  }}"></script>