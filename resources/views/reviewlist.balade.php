<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
<div id="app" class="wrap">
    <header-component></header-component>
    <shopname-component></shopname-component>
    <websubtitle-component></websubtitle-component>
    <userprofilepic-component></userprofilepic-component>
    <username-component></username-component>
    <graph-component></graph-component>
    <reviewtext-component></reviewtext-component>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>