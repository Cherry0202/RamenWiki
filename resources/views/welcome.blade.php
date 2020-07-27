<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app" class="wrap">
    Email:<input type="text" name="Email" size="20">
    Password:<input type="password" name="password" size="20">
    <input type="submit" name="CONTINUE" value="CONTINUE" size="10" style="background-color:#5b8bd0">
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
