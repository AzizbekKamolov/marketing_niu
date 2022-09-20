<ul>
    <li class="title">Asosiy</li>
    <li><a href="{{ route('admin') }}"><span class="nav-icon-hexa text-bloody-100"><i class="fa fa-home"></i></span> Dashboard</a></li>
    @if(\Auth::user()->role==7)
    <li>
        <a href="{{ route('masters.index') }}"><span class="nav-icon-hexa text-orange-100">M</span>Magistratura<span class="label label-success label-bordered label-ghost"></span></a>
        <a href="{{ route('overseas.index') }}"><span class="nav-icon-hexa text-orange-100">F</span>Chet el fuqarolari<span class="label label-success label-bordered label-ghost"></span></a>
        <a href="#"><span class="nav-icon-hexa text-orange-100"><i class="fa fa-envelope"></i></span>Mail<span class="label label-success label-bordered label-ghost"></span></a>
        <a href="{{ route('export.index')}}"><span class="nav-icon-hexa text-orange-100"><i class="fa fa-file-excel-o"></i></span>Excel Export<span class="label label-success label-bordered label-ghost"></span></a>
    </li>
    @endif
    @if(Auth::user()->role == 6)
    <li>
        <a href="#"><span class="nav-icon-hexa text-orange-100">M</span>Talabalar <span class="label label-success label-bordered label-ghost"></span></a>
    </li>
    @endif
</ul>