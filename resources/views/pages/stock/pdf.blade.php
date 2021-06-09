<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <style>
@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: normal;
    src: url("{{ asset('fonts/THSarabunNew.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: bold;
    src: url("{{ asset('fonts/THSarabunNewBold.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: normal;
    src: url("{{ asset('fonts/THSarabunNewItalic.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: bold;
    src: url("{{ asset('fonts/THSarabunNewBoldItalic.ttf') }}") format('truetype');
}

body {
        font-family: "THSarabunNew";
        font-size: 28px;
}
.tg{
    position: fixed;

    left: 20px;
    top:-30px;
}
.tg-02ax{
    position: absolute;
    top:-30px;
    bottom: 0;
    right: 0;
    left:190px;

}

    </style>

</head>
<body>
    <div>
        <div class="tg"><img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(160)->generate(url("/stock/schedule/{$match->id}"))) }}"></div>

        <div class="tg-02ax">
            <b>ชื่ออุปกรณ์ :</b> {{ $match->name }} <br>
            <b>หมายเลขเครื่อง :</b> {{ $match->number }}<br>
            <b>ปีงบประมาณ :</b> {{ $match->expenditure }} ปี {{$match->year}}
        </div>
    </div>


</body>
</html>
