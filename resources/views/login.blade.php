<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app">
    <!-- <router-view /> -->
    <login-component></login-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>