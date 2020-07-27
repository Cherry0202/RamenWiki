<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app">
    <!-- <router-view /> -->
    <member-register-component></member-register-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>