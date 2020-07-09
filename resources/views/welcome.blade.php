<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app" class="wrap">
    <example-component></example-component>
    <sample-component></sample-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
