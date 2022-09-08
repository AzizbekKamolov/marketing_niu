@extends('layouts.admin')
@section('content')
    <div class="app-heading-container app-heading-bordered bottom">
        <ul class="breadcrumb">
            <li><a href="/backoffice">Dashboard</a></li>
            <li><a>Export</a></li>
        </ul>
        <a href="{{ url()->previous() }}" class="pull-right">Orqaga</a>
    </div>
    <div class="container">
        <div class="row" style="margin-right: 12px;margin-left: 12px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h5 style="float: left"> Ma'lumotlarni excelga export qilish uchun menyuni tanlang</h5>
                        </div>
                    </div>

                    @if(session('message'))
                        <div class="col-md-10">
                            <div class="alert alert-success alert-icon-block alert-dismissible" role="alert">
                                <div class="alert-icon">
                                    <span class="icon-checkmark-circle"></span>
                                </div>
                                {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="block block-condensed">
                <br>
                <div class="block-content">
                    <a href="{{ route('export.masters') }}" class="btn btn-default form-control">Magistratura a'rizachilari</a>
                    <p>&nbsp;</p>
                    <a href="{{ route('export.overseas') }}" class="btn btn-default form-control">Chet el fuqarolari</a>
                </div>

            </div>
        </div>
    </div>
@endsection