<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <script>
        window.Laravel = {
            csrfToken: "{{ csrf_token() }}"
        };
    </script>
    <title></title>
</head>

<div id="app" class="wrap">
<search-view></search-view>
</div>
<script src="{{ mix('/js/app.js')  }}"></script>
