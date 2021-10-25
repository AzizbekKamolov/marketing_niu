<style type="text/css">
    li a {
        cursor: pointer;
    }
</style>

@if(Auth::user()->role == 6 )

    <li class="sidebar-item"><a class="sidebar-link active" href="/backoffice/student" aria-expanded="false"><i
                data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (bakalavr) </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @php
                $types_bakalavr_super = 'Test\Model\Type'::where('degree' , 1)->where('contract_type' , 'super')->get();
            @endphp
            @foreach($types_bakalavr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('amount_type_marketing' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (magister)</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @php
                $types_magistr_super = 'Test\Model\Type'::where('degree' , 2)->where('contract_type' , 'super')->get();
            @endphp
            @foreach($types_magistr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('super_for_marketing_magister_by_amount' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"> {{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> (sirtqi)</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @php
                $types_sirtqi_super = 'Test\Model\Type'::where('degree' , 3)->where('contract_type' , 'super')->get();
            @endphp
            @foreach($types_sirtqi_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('amount_type_marketing' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu"> {{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> bakalavr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @foreach($types_bakalavr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('super_mar_type_sum' , ['type' => $item->id ])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> magistr <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @foreach($types_magistr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('super_mar_type_sum' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>
    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Superkontraktlar <br> sirtqi <br> id berilganlar</span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @foreach($types_sirtqi_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('super_mar_type_sum' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
        </ul>
    </li>

@endif

@if(Auth::user()->role == 7)

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/student" aria-expanded="false"><i
                data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontrakt <br> (bakalavr)</span></a>
    </li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontraktlar <br> (magister)</span></a></li>
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/command" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Buyruq chiqqanlar</span></a></li>
@endif

@if(Auth::user()->role == 5)

    {{--  <li class="sidebar-item"> <a class="sidebar-link " href="/backoffice/student" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Barcha Talabalar</span></a></li>--}}
    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontrakt <br> (bakalavr)</span></a>
    </li>
    @php
        $bak_sup_dirs = 'Test\Model\Direction'::where('type' , 1)->orWhere('type' , 3)->get();
    @endphp
    @foreach($bak_sup_dirs as $it)
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">{{$it->name}} </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('dir_lang_type' , ['dir' => $it->id , 'lang' => 1])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('dir_lang_type' , ['dir' => $it->id , 'lang' => 2])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    @endforeach
    {{--<li class="sidebar-item">--}}
    {{--    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">--}}
    {{--      <i data-feather="file-text" class="feather-icon"></i>--}}
    {{--      <span class="hide-menu">Davlat-huquqiy faoliyat </span>--}}
    {{--    </a>--}}
    {{--    <ul aria-expanded="false" class="collapse  first-level base-level-line">--}}
    {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 1 , 'lang' => 1])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">O'zbek</span></a></li>--}}
    {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 1 , 'lang' => 2])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Rus</span></a></li>--}}

    {{--    </ul>--}}
    {{--  </li>--}}
    {{--  <li class="sidebar-item">--}}
    {{--    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">--}}
    {{--      <i data-feather="file-text" class="feather-icon"></i>--}}
    {{--      <span class="hide-menu">Jinoyat-huquqiy faoliyat </span>--}}
    {{--    </a>--}}
    {{--    <ul aria-expanded="false" class="collapse  first-level base-level-line">--}}
    {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 2 , 'lang' => 1])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">O'zbek</span></a></li>--}}
    {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 2 , 'lang' => 2])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Rus</span></a></li>--}}

    {{--    </ul>--}}
    {{--  </li>--}}
    {{--  <li class="sidebar-item">--}}
    {{--    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">--}}
    {{--      <i data-feather="file-text" class="feather-icon"></i>--}}
    {{--      <span class="hide-menu">Xalqaro huquq va qiyosiy huquqshunoslik </span>--}}
    {{--    </a>--}}
    {{--    <ul aria-expanded="false" class="collapse  first-level base-level-line">--}}
    {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 3 , 'lang' => 1])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">O'zbek</span></a></li>--}}
    {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 3 , 'lang' => 2])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Rus</span></a></li>--}}

    {{--    </ul>--}}
    {{--  </li>--}}
    {{--  <li class="sidebar-item">--}}
    {{--    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">--}}
    {{--      <i data-feather="file-text" class="feather-icon"></i>--}}
    {{--      <span class="hide-menu">Fuqarolik va biznes huquqi </span>--}}
    {{--    </a>--}}
    {{--    <ul aria-expanded="false" class="collapse  first-level base-level-line">--}}
    {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 4 , 'lang' => 1])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">O'zbek</span></a></li>--}}
    {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('dir_lang_type' , ['dir' => 4 , 'lang' => 2])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">Rus</span></a></li>--}}

    {{--    </ul>--}}
    {{--  </li>--}}


    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @php
                $types_bakalavr_super = 'Test\Model\Type'::where('degree' , 1)->where('contract_type' , 'super')->get();
            @endphp
            @foreach($types_bakalavr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('amount_type' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
            {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 7])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">1.5 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 8])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">2 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 9])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">2.5 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 10])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">3 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 11])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">25 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_type' , ['type' => 12])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">50 barobar</span></a></li>--}}
        </ul>
    </li>

    <li class="sidebar-item"><a class="sidebar-link " href="/backoffice/super-magister" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Superkontraktlar <br> (magistr)</span></a></li>
    @php
        $mag_sup_dirs = 'Test\Model\Direction'::where('type' , 2)->get();
    @endphp
    @foreach($mag_sup_dirs as $it)
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">{{$it->name}} </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{ route('magister_dir_lang_super' , ['dir' => $it->id , 'lang' => 1]) }}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{ route('magister_dir_lang_super' , ['dir' => $it->id , 'lang' => 2]) }}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    @endforeach


    <li class="sidebar-item">
        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i data-feather="file-text" class="feather-icon"></i>
            <span class="hide-menu">Tasdiqlanganlar <br> magistr </span>
        </a>
        <ul aria-expanded="false" class="collapse  first-level base-level-line">
            @php
                $types_magistr_super = 'Test\Model\Type'::where('degree' , 2)->where('contract_type' , 'super')->get();
            @endphp
            @foreach($types_magistr_super as $item)
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('amount_magistr_type' , ['type' => $item->id])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">{{$item->name}}</span></a></li>
            @endforeach
            {{--       <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 13])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">1.5 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 14])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">2 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 15])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">2.5 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 16])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">3 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 17])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">7.5 barobar</span></a></li>--}}
            {{--      <li class="sidebar-item"> <a class="sidebar-link "  href="{{route('amount_magistr_type' , ['type' => 18])}}"   aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span class="hide-menu">15 barobar</span></a></li>--}}
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
    <li class="sidebar-item"><a class="sidebar-link " href="{{route('payment_admin.student_types')}}"
                                aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                class="hide-menu">Shartnoma narxlari </span> </a></li>
@endif
@if(Auth::user()->role == 12)
    <li class="sidebar-item @if(Request::is('backoffice/ttj-admin/ttj-admin-students')) selected @endif"><a
            class="sidebar-link  " href="{{route('ttj_admin.students')}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barcha talabalar </span> </a>
    </li>
    <li class="sidebar-item bg-success text-white"><a class="sidebar-link text-white"
                                                      href="{{route('ttj_admin.students.type' , ['type' => 1])}}"
                                                      aria-expanded="false"><i data-feather="tag"
                                                                               class="feather-icon text-white"></i><span
                class="hide-menu">Ruxsat berilganlar </span> </a></li>
    <li class="sidebar-item bg-orange text-white"><a class="sidebar-link text-white"
                                                     href="{{route('ttj_admin.students.type' , ['type' => 0])}}"
                                                     aria-expanded="false"><i
                data-feather="tag" class="feather-icon text-white"></i><span
                class="hide-menu">Ruxsat berilmaganlar </span> </a></li>

@endif
@if(Auth::user()->role == 13)
    @php
        $user = \Illuminate\Support\Facades\Auth::user();
        $dirs = \Test\Model\Direction::where('type' , $user->type)->get();
        $types = \Test\Model\Type::where('contract_type' , 'super')->where('degree' , $user->type)->get();
    @endphp
    <li class="sidebar-item @if(Request::is('backoffice/super')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.index')}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    @foreach($dirs as $dir)
        <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                <i data-feather="file-text" class="feather-icon"></i>
                <span class="hide-menu">{{$dir->name}} </span>
            </a>
            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('dir_lang_type' , ['dir' => $dir->id , 'lang' => 1])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">O'zbek</span></a></li>
                <li class="sidebar-item"><a class="sidebar-link "
                                            href="{{route('dir_lang_type' , ['dir' => $dir->id , 'lang' => 2])}}"
                                            aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                            class="hide-menu">Rus</span></a></li>

            </ul>
        </li>
    @endforeach
    <hr>
    <li class="sidebar-item @if(Request::is('backoffice/super-index-accepteds')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.index.accepteds')}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanganlar </span> </a>
    </li>
    @foreach($types as $item)
        <li class="sidebar-item"><a class="sidebar-link "
                                    href="{{route('amount_type' , ['type' => $item->id])}}"
                                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">{{$item->name}}</span></a></li>
    @endforeach

@endif
@if(Auth::user()->role == 14)
    @php

        $types = \Test\Model\LyceumAmount::all();
    @endphp
    <li class="sidebar-item @if(Request::is('backoffice/lyceum-admin/super/index')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.lyceum.index')}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    <hr>
    <li class="sidebar-item @if(Request::is('backoffice/lyceum-admin/super/index-parent-data/0')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.lyceum.index.parent.data' , ['status' => 0])}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Ota onasining <br> ma'lumoti yoki ID <br> yo'qlar </span> </a></li>
    <hr>
    <li class="sidebar-item @if(Request::is('backoffice/lyceum-admin/super/index-status/1')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.lyceum.index.by_status' , ['status' => 1])}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanmaganlar </span> </a></li>
    <hr>
    <li class="sidebar-item @if(Request::is('backoffice/lyceum-admin/super/index-status/2')) selected @endif"><a
            class="sidebar-link  " href="{{route('super.lyceum.index.by_status' , ['status' => 2])}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Tasdiqlanganlar </span> </a></li>
     @foreach($types as $item)
        <li class="sidebar-item"><a class="sidebar-link "
                                    href="{{route('super.lyceum.index.by_amount' , ['amount' => $item->id])}}"
                                    aria-expanded="false"><i data-feather="tag" class="feather-icon"></i><span
                    class="hide-menu">{{$item->name}}</span></a></li>
    @endforeach
@endif
@if(Auth::user()->role == 15)

    <li class="sidebar-item @if(Request::is('backoffice/lyceum-admin/students/index')) selected @endif"><a
            class="sidebar-link  " href="{{route('students.lyceum.index')}}" aria-expanded="false"><i
                data-feather="tag" class="feather-icon"></i><span class="hide-menu">Barchasi </span> </a></li>
    @endif
