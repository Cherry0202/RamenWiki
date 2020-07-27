<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>

<div id="app" class="wrap">
    <wiki-page></wiki-page>
    <wiki-edit></wiki-edit>
    <ai-page></ai-page>
    <mypage-passchange></mypage-passchange>
    <!--
    <goodbye-page></goodbye-page>
    <goodbyebye-page></goodbye-page>
    -->

</div>
<script src="{{ mix('/js/app.js')  }}"></script>
