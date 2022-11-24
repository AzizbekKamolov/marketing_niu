<style media="all" type="text/css">
    .studentimage
    {
        height: auto;
        max-width: 100%;
        min-width: 70%;

    }
    .divimage
    {
        width: 20%;
        float: left;
        padding: 10px;
        margin: 10px;
    }
    .divinfo
    {
        width: 72%;
        float: left;
        padding: 10px;
        margin-left: 10px;
    }
    .info1
    {
        float: left;
        min-width: 40%;
    }
    .info2
    {
        float: left;
        min-width: 40%;
    }

</style>
<div class="container">
    <div class="block block-arrow-top padding-top-20">
        <div class="row">
            <div class="col-md-12">

                <div class="listing listing-separated margin-bottom-0">
                    <div class="row">
                        <div class="panel panel-default">
                            <div class="divimage">
                                <img src="{{ asset($data->image) }}" class="studentimage">
                            </div>
                            <div class="divinfo">
                                <div style="margin-top: 5px;">
                                    <h4 style="text-transform: uppercase !important;font-size: 15px;line-height: 22px;margin: 0">Shaxsiy ma'lumotlari</h4>
                                    <hr style="color: lightgrey;font-weight: 400;margin-top: 0">
                                    <table>
                                        <tr>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Ismi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->first_name }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Familyasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->last_name }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Otasining ismi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->middle_name }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Jinsi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getGender() }}</strong>
                                                </div>
                                            </td>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Tug'ilgan sanasi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->birth_date }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Millati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getNationality() }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Fuqaroligi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getCitizenship() }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Yashash mamlakati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getLivingCountry() }}</strong>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="clear: both"></div>
                                <div>
                                    <h4 style="text-transform: uppercase !important;font-size: 16px;line-height: 22px;margin: 0;margin-top: 65px;">Passport va manzil ma'lumotlari</h4>
                                    <hr style="color: lightgrey;font-weight: 400;margin-top: 0">
                                    <table>
                                        <tr>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Passport seriyasi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->passport_serial }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Passport raqami:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_number }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Kim tomonidan berilgan:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_issued_by }}</strong>
                                                </div>
                                            </td>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Passport berilgan sana:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->passport_issued_date }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Passport amal qilish muddati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->passport_expiration_date }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Doimiy manzil:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->home_address }}</strong>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="clear: both;margin-top: 30px;">
                                    <h4 style="text-transform: uppercase !important;font-size: 15px;line-height: 22px;margin: 0">Ta'lim haqida ma'lumot</h4>
                                    <hr style="color: lightgrey;font-weight: 400;margin-top: 0">
                                    <table>
                                        <tr>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Ta'lim turi:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->edu_type }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Boshlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_starting_date }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Yakunlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_ending_date }}</strong>
                                                </div>
                                            </td>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Qabul hujjat raqami:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->application_number }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Student ID:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->student_number }}</strong>
                                                </div>
                                                <div style="margin-top: 10px;">
                                                    <span>Hoziri holati:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->getStatus() }}</strong>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="clear: both;margin-top: 30px;">
                                    <h4 style="text-transform: uppercase !important;font-size: 15px;line-height: 22px;margin: 0">Qo'shimcha ma'lumotlar</h4>
                                    <hr style="color: lightgrey;font-weight: 400;margin-top: 0">
                                    <table>
                                        <tr>
                                            <td style="width: 50%">
                                                <div style="margin-top: 10px;">
                                                    <span>Telefon:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->phone1 }}</strong>
                                                </div>
                                                @if(!empty($data->phone2))
                                                    <div style="margin-top: 10px;">
                                                        <span>Qo'shimcha telefon:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->edu_starting_date }}</strong>
                                                    </div>
                                                @endif
                                                @if(!empty($data->phone3))
                                                    <div style="margin-top: 10px;">
                                                        <span>Yakunlanish sanasi:</span>&nbsp;&nbsp;&nbsp;<strong> {{ $data->phone3 }}</strong>
                                                    </div>
                                                @endif
                                            </td>
                                            <td style="width: 50%">
                                                @if(!empty($data->military_doc_number))
                                                    <div style="margin-top: 10px;">
                                                        <span>Xarbiy guvohnoma raqami:</span><strong> &nbsp;&nbsp;&nbsp;{{ $data->military_doc_number }}</strong>
                                                    </div>
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <br>
                            </div>
                        </div>
                        <div id="editor"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>