<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<div id="app" class="wrap">
    <wiki-page></wiki-page>
    <ai-page></ai-page>
    
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
