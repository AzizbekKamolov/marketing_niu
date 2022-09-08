<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style media="all" type="text/css">
    body{
        margin-top: 20px;
    }
    .div{
        margin: 0%;
        clear: both;
        padding: 0;
    }
    .div1{
        width: 67%;
        padding: 0;
        margin: 0;
    }
    .logo_image{
        width: 32%;
        height: auto;
    }
    .student_image
    {
        width: 90%;
        height: auto;
        border:3px dimgrey solid;
        margin-top: 60px;
        margin-bottom: 0px;
    }
    .div2
    {
        width: 35%;
       display: inline-block;
    }
    .div3{
        width: 60%;
        display: inline-block;
    }
    .div4
    {
        margin: 5px;
    }
    .student-name
    {
        font-size: 20px;
    }
    .content{
        margin: 5px;
        border:1px solid lightcoral;
        max-height: 300px;
    }
    .row{
        margin: 10px;
    }
    .barcode
    {
        width: 95%;
        height: auto;
        margin-top: 5px;
    }
    .string
    {
        padding: 0px;
        margin: 0px;
        font-family: "Courier New", Courier, monospace
    }
    .footer
    {
        clear: both;
        background: whitesmoke;
        margin-top: -30px;
        font-size: 12px;
        padding: 5px;
        margin-bottom: 0px;
    }
    .header{

    }
</style>
</head>
    <body>
            <div class="div" style="clear: both">
                @php $i=0; @endphp
                @foreach($data as $student)
                    <div class="div1" style="@if($i!=0 && $i%2==1 and $i+1 != count($data)) page-break-after:always @endif">
                    <div class="content">
                        <div class="row">
                            <header class="header">
                                <img src="{{ asset('extra/logo.png') }}" class="logo_image" style="max-width: 35px;height: auto">
                                <img src="{{ asset('extra/word.png') }}" class="logo_image" style="margin-top: 0px;margin-left: 10px;">
                            </header>
                            <div class="div2">
                                <div>
                                    <img src="{{ asset($student->student->image) }}" class="student_image">
                                    <img src="{{ asset('extra/barcode.png') }} " class="barcode">
                                    <p class="string" style="text-align: center">{{ $student->student->student_number }}</p>
                                </div>
                            </div>
                            <div class="div3">
                                <div class="div4">
                                    <strong class="student-name">{{ $student->student->last_name." ".$student->student->first_name }}</strong>
                                </div>
                                <div style="clear: both;margin: 0;padding: 0">
                                    <div style="float: left;width: 45%">
                                        <p style="padding: 0px;margin: 0px;">Guruh:</p>
                                    </div>
                                    <div style="float: left;width: 55%">
                                        <p class="string">{{ $student->group->name_uz }}</p>
                                    </div>
                                </div>
                                <div style="clear: both;margin: 0;padding: 0">
                                    <div style="float: left;width: 45%">
                                        <p style="padding: 0px;margin: 0px;">Bosh/sanasi:</p>
                                    </div>
                                    <div style="float: left;width: 55%">
                                        <p class="string">{{ $student->group->edu_starting_date }}</p>
                                    </div>
                                </div>
                                <div style="clear: both;padding: 0;">
                                    <div style="float: left;width: 45%">
                                        <p  style="padding: 0px;margin: 0px;">Yak/sanasi:</p>
                                    </div>
                                    <div style="float: left;width: 55%">
                                        <p class="string">{{ $student->group->edu_ending_date }}</p>
                                    </div>
                                </div>
                                <div style="clear: both;padding: 0;">
                                    <div style="float: left;width: 45%">
                                        <p  style="padding: 0px;margin: 0px;">Login:</p>
                                    </div>
                                    <div style="float: left;width: 55%">
                                        <p class="string">{{ $student->student->user->username }}</p>
                                    </div>
                                </div>
                                <div style="clear: both;padding: 0;">
                                    <div style="float: left;width: 45%">
                                        <p  style="padding: 0px;margin: 0px;">Parol:</p>
                                    </div>
                                    <div style="float: left;width: 55%">
                                        <p class="string">{{ $student->student->getPassword() }}</p>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                            <div class="footer">
                                <span>{{ $student->group->branch->name_uz }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @php $i++; @endphp
                @endforeach
            </div>
    </body>
</html>