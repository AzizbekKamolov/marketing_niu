<html>
<head>
    <meta charset="UTF-8">
    <title>Masters Excel Export</title>
</head>
<body>
<table class="table table-striped table-bordered datatable-extended">
    <thead>
    <tr>
        <th>Familya</th>
        <th>Ismi</th>
        <th>Sharifi</th>
        <th>Tug'ilgan yili</th>
        <th>Jinsi</th>
        <th>Tug'ilgan joyi</th>
        <th>Fuqaroligi</th>
        <th>Yashash manzili</th>
        <th>Noyob raqam</th>
        <th>Pasport seriya</th>
        <th>Pasport nomer</th>
        <th>Pasport berilgan sana</th>
        <th>Kim tomonidan berilgan</th>
        <th>Pochta</th>
        <th>Telefon1</th>
        <th>Telefon2</th>
        <th>Diplom turi</th>
        <th>Ta'lim Muassasaisining nom</th>
        <th>Tamomlagan yili</th>
        <th>Diplom seriyasi</th>
        <th>Diplom nomeri</th>
        <th>O'zlashtirgan tili</th>
        <th>Mutaxasislik</th>
        <th>Mutaxasislik kodi</th>
        <th>Ta'lim tili</th>
        <th>Oliy ta'lim diplomi</th>
        <th>Oliy ta'lim muassasasi nomi</th>
        <th>Yutuqlari</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>{{$item->last_name}}</td>
            <td>{{$item->first_name}}</td>
            <td>{{$item->middle_name}}</td>
            <td>{{$item->birth_date}}</td>
            <td>{{$item->getGender()}}</td>
            <td>{{ $item->getBirthPlace() }}</td>
            <td>{{ $item->getCitizenship() }}</td>
            <td>{{ $item->living_address }}</td>
            <td>{{ $item->student_id }}</td>
            <td>{{ $item->passport_serial }}</td>
            <td>{{ $item->passport_number }}</td>
            <td>{{ $item->passport_expiration_date }}</td>
            <td>{{ $item->passport_issued_by }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone1." " }}</td>
            <td>{{ $item->phone2." " }}</td>
            <td>{{ $item->getDegree() }}</td>
            <td>{{ $item->background_study }}</td>
            <td>{{ $item->backgraund_grad_year }}</td>
            <td>{{ $item->back_cert_series }}</td>
            <td>{{ $item->back_cert_numbers }}</td>
            <td>{{ $item->getForeignLang() }}</td>
            <td>{{ $item->getSpeciality() }}</td>
            <td>{{ $item->getSpec_code() }}</td>
            <td>{{ $item->getStudyLang() }}</td>
            <td>{{ $item->getHighEducation() }}</td>
            <td>{{ $item->getHighEducationName() }}</td>
            <td>{{ $item->more_info }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>