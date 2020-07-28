<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=375" >
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
    <title></title>
</head>

<div id="app" class="wrap">
    <wiki-edit></wiki-edit>
    <!--
        <ai-page></ai-page>
    <wiki-page></wiki-page>
    <ai-page></ai-page>
    <mypage-passchange></mypage-passchange>
    <goodbye-page></goodbye-page>
    <goodbyebye-page></goodbye-page>
    -->

</div>
<script src="{{ mix('/js/app.js')  }}"></script>
