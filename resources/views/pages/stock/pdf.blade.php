<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <style>
@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: normal;
    src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: bold;
    src: url("{{ public_path('fonts/THSarabunNewBold.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: normal;
    src: url("{{ public_path('fonts/THSarabunNewItalic.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: bold;
    src: url("{{ public_path('fonts/THSarabunNewBoldItalic.ttf') }}") format('truetype');
}

.page-break{
    page-break-before: always;
}

        body {
            font-family: "THSarabunNew";
        }
.tg{
    position: fixed;
    left: 0cm;
    top:0cm;
}
.tg-0lax{
    position: fixed;
    left: 0cm;
    top:0cm;

}
.tg-02ax{
    position: fixed;
    font-size:30px;
    left: 8cm;
    top: 50px;
}
.tg-03ax{
    position: fixed;
    font-size:30px;
    left: 8cm;
    top: 120px;
}
.tg-04ax{
    position: fixed;
    font-size:30px;
    left: 8cm;
    top: 190px;
    font-family: "THSarabunNew";
}
    </style>

</head>
<body>

@foreach ($match as $result)

    {{-- <div class="tg-02ax" style=""><b>test :</b> test</div>
    <div class="tg-03ax" style=""><b>test2 :</b> {{ $result->number }}</div>
    <div class="tg-04ax" style=""><b>test2 :</b> {{ $result->number }}</div> --}}
    <div class="tg-0lax"><img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(280)->generate(url("/repair/seach/{$result->id}"))) }}"></div>
    <div class="tg-02ax" style=""><b>ชื่ออุปกรณ์ :</b> {{ $result->name }}</div>
    <div class="tg-03ax" style=""><b>หมายเลขเครื่อง :</b> {{ $result->number }}</div>
   <div class="tg-04ax" style=""><b>ปีงบประมาณ :</b> {{ $result->expenditure }} ปี {{$result->year}}</div>
  @endforeach

</body>
</html>
7
