<style type="text/css">
    li a {
        cursor: pointer;
    }
</style>

@if(Auth::user()->role == 6 )

    <li class="sidebar-item"><a class="sidebar-link active" href="/backoffice/student" aria-expanded="false"><i
                    data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link active" href="/backoffice/student-magistr" aria-expanded="false"><i
                    data-feather="home" class="feather-icon"></i><span class="hide-menu">Magistrlar</span></a></li>

    {{--   <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('super_for_marketing') }}"  aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Superkontraktlar <br> (bakalavr)</span></a></li> --}}
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (bakalavr) </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 3])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 4])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 5])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">25 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type_marketing' , ['type' => 6])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">50 baravar</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (magister)</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 7])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 8])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 9])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 10])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 11])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">7.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_for_marketing_magister_by_amount' , ['type' => 12])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">15 baravar</span></a></li>
        </ul>
    </li>
    {{--  <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('super_for_marketing_magister') }}"  aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Superkontraktlar <br> (magister)</span></a></li> --}}
    {{--  <li class="sidebar-item"> <a class="sidebar-link" href="{{ route('index_super_id_berilgan') }}"  aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Superkontraktlar <br> magistr <br> id berilganlar</span></a></li>--}}
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> magistr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 7])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 8])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 9])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 10])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 11])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">7.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 4 , 'sum' => 12])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">15 baravar</span></a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> bakalavr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 3])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 4])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 5])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">25 baravar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('super_mar_type_sum' , ['type' => 3 , 'sum' => 6])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">50 baravar</span></a></li>
        </ul>
    </li>
@endif

@if(Auth::user()->role == 7)

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/student" aria-expanded="false"><i
                    data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Superkontrakt <br> (bakalavr)</span></a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Superkontraktlar <br> (magister)</span></a>
    </li>
@endif

@if(Auth::user()->role == 5)

    {{--  <li class="sidebar-item"> <a class="sidebar-link " href="/backoffice/student" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a></li>--}}
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Superkontrakt <br> (bakalavr)</span></a></li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Davlat-huquqiy faoliyat </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 1 , 'lang' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 1 , 'lang' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Jinoyat-huquqiy faoliyat </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 2 , 'lang' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 2 , 'lang' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Xalqaro huquq va qiyosiy huquqshunoslik </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 3 , 'lang' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 3 , 'lang' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Fuqarolik va biznes huquqi </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 4 , 'lang' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{route('dir_lang_type' , ['dir' => 4 , 'lang' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>


    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 1])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 2])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 3])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 4])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 5])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">25 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_type' , ['type' => 6])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">50 barobar</span></a></li>
        </ul>
    </li>

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Superkontraktlar <br> (magistr)</span></a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240101 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 5 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 5 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240102 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 6 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 6 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240107 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 7 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 7 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240108 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 8 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 8 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240110 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 9 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 9 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240115 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 10 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 10 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240116 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 11 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 11 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">5A240127 </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 12 , 'lang' => 1]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link "
                                        href="{{ route('magister_dir_lang_super' , ['dir' => 12 , 'lang' => 2]) }}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

        </ul>
    </li>

    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar <br> magistr </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 7])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">1.5 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 8])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 9])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">2.5 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 10])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">3 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 11])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">7.5 barobar</span></a></li>
            <li class="sidebar-item"><a class="sidebar-link " href="{{route('amount_magistr_type' , ['type' => 12])}}"
                                        aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">15 barobar</span></a></li>
        </ul>
    </li>


@endif

@if(Auth::user()->role == 9)

    <li class="sidebar-item"><a class="sidebar-link active" href="{{route('attendance.index')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Davomat qilish </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link active" href="{{route('attendance.all')}}" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha davomatlar </span> </a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link active" href="{{route('group.index')}}" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Guruhlar </span> </a></li>

@endif
@if(Auth::user()->role == 10)

    <li class="sidebar-item"><a class="sidebar-link active" href="{{route('statistic_by_faculty')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Fakultetlar bo'yicha </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link active" href="{{route('statistic_six_day')}}" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ohirgi 5 kun </span> </a></li>


@endif
@if(Auth::user()->role == 11)
    <li class="sidebar-item @if(Request::is('backoffice/payment-admin-students')) selected @endif"><a
                class="sidebar-link  " href="{{route('payment_admin.student.index')}}" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha talabalar </span> </a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="{{route('payment_admin.student.no_checkeds')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Tasdiqlanmaganlar </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="{{route('month.index')}}" aria-expanded="false"><i
                    data-feather="tag" class="feather-icon"></i><span class="hide-menu">Stipendiyalar </span> </a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="{{route('payment_admin.student_types')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">Talaba turlari </span> </a></li>
@endif
