<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table>
    <thead>
    <tr>
        <th>#</th>
        <th>F.I.O</th>
        <th>Ota onasi(F.I.O)</th>
        <th>Ota onasi (Pasport)</th>
        <th>Ariza holati</th>
        <th>Shartnoma summasi</th>
        <th>Til</th>
        <th>Ball</th>
        <th>Telefon</th>
        <th>id</th>
        <th>id-kod-marketing</th>
    </tr>
    </thead>
    <tbody>
    @php
        $i = 1;
    @endphp
    @foreach($data as $item)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$item->fio()}}</td>
            <td>{{$item->parent_name}}</td>
            <td>{{$item->parent_pass_seria}}{{$item->parent_pass_number}}</td>
            <td>{{ $item->getStatus() }}</td>
            <td> {{$item->amount? $item->amount->name:'' }}</td>
            <td>
                @if($item->lang())
                    {{ $item->lang()->name }}
                @endif
            </td>
            <td>{{$item->ball}}</td>
            <td>
                {{$item->tel1}}/
                {{$item->tel2}}
            </td>
            <td>{{$item->id_code}}</td>
            <td>{{$item->id_code_marketing}}</td>
        </tr>

    @endforeach
    </tbody>
</table>
</body>
</html>
