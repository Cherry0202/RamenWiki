<head>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ mix('/css/mypage.css') }}" rel="stylesheet" type="text/css">
    <meta name="csrf-token" content="{{csrf_token()}}">
</head>
    <div id="app" class="wrap">
      <mypage></mypage>
    </div>
<script src="{{ mix('/js/app.js')  }}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>