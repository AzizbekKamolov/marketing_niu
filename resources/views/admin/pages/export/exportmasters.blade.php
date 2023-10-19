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
        <th>Millati</th>
        <th>Yashash manzili</th>
        <th>Pasport seriya</th>
        <th>Pasport nomer</th>
        <th>Pasport berilgan sana</th>
        <th>Kim tomonidan berilgan</th>
        <th>Pochta</th>
        <th>Telefon1</th>
        <th>Telefon2</th>
        <th>Telefon3</th>
        <th>Tamomlagan oliy ta'lim muassasasi nomi</th>
        <th>Tamomlagan yili</th>
        <th>Diplom seriyasi</th>
        <th>Diplom nomeri</th>
        <th>O'zlashtirgan tili</th>
        <th>Mutaxasislik</th>
        <th>Ta'lim tili</th>
        <th>Otasining ismi</th>
        <th>Otasining familyasi</th>
        <th>Otasining sharifi</th>
        <th>Otasining yashash manzili</th>
        <th>Otasining ish joyi</th>
        <th>Otasining lavozimi</th>
        <th>Otasining telefon raqami</th>
        <th>Otasining ish telefon raqami</th>
        <th>Onasining ismi</th>
        <th>Onasining familyasi</th>
        <th>Onasining sharifi</th>
        <th>Onasining yashash manzili</th>
        <th>Onasining ish joyi</th>
        <th>Onasining lavozimi</th>
        <th>Onasining telefon raqami</th>
        <th>Onasining ish telefon raqami</th>
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
            <td>{{ $item->getNationality() }}</td>
            <td>{{ $item->living_address }}</td>
            <td>{{ $item->passport_serial }}</td>
            <td>{{ $item->passport_number }}</td>
            <td>{{ $item->passport_given_date }}</td>
            <td>{{ $item->passport_issued_by }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->getPrettyPhone($item->phone1) }}</td>
            <td>{{ $item->phone2." " }}</td>
            <td>{{ $item->phone3 }}</td>
            <td>{{ $item->background_study }}</td>
            <td>{{ $item->backgraund_grad_year }}</td>
            <td>{{ $item->back_cert_series }}</td>
            <td>{{ $item->back_cert_numbers }}</td>
            <td>{{ $item->foreignLang() }}</td>
            <td>{{ $item->getCourse() }}</td>
            <td>{{ $item->getCourseLang() }}</td>
            <td>{{ $item->f_first_name }}</td>
            <td>{{ $item->f_last_name }}</td>
            <td>{{ $item->f_middle_name }}</td>
            <td>{{ $item->f_living_address }}</td>
            <td>{{ $item->f_job_org }}</td>
            <td>{{ $item->f_position }}</td>
            <td>{{ $item->getPrettyPhone($item->f_phone) }}</td>
            <td>{{ $item->getPrettyPhone($item->f_job_phone) }}</td>
            <td>{{ $item->m_first_name }}</td>
            <td>{{ $item->m_last_name }}</td>
            <td>{{ $item->m_middle_name }}</td>
            <td>{{ $item->m_living_address }}</td>
            <td>{{ $item->m_job_org }}</td>
            <td>{{ $item->m_position }}</td>
            <td>{{ $item->getPrettyPhone($item->m_phone) }}</td>
            <td>{{ $item->getPrettyPhone($item->m_job_phone) }}</td>

        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>