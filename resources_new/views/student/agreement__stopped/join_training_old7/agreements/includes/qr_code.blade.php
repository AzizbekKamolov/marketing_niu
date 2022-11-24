
@if(isset($qrcode) && $type_show == 'pdf')
<img src="data:image/png;base64, {{$qrcode}} ">
@endif
