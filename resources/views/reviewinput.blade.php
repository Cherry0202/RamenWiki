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

    <priceinput-component></priceinput-component>
    <stronglevelinput-component></stronglevelinput-component>
    <sooplevelinput-component></sooplevelinput-component>
    <noodlesizeinput-component></noodlesizeinput-component>
    <amountinput-component></amountinput-component>
    <graphtitle-component></graphtitle-component>
    <graph-component></graph-component>
    <photouploadtitle-component></photouploadtitle-component>
    <photoupload-component></photoupload-component>
    <reviewtitle-component></reviewtitle-component>
    <reviewtext-component></reviewtext-component>
    <sendbutton-component></sendbutton-component>
    
</div>
<script src="{{ mix('/js/app.js')  }}"></script>