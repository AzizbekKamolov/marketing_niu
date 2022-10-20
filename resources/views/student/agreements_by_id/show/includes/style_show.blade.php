@if($which_process == 'show')
    <style>
        body {
            font-family: DejaVu Sans, sans-serif !important;
        }

        .text-bold {
            font-weight: bold;
            /*font-weight: bolder;*/
        }

        * {
            font-family: "Times New Roman";
        }

        /*body{*/
        /*    padding-left: 30px;*/
        /*    padding-right: 30px;*/
        /*}*/
        .mt-1 {
            margin-top: 7px;
        }

        .mb-1 {
            margin-bottom: 7px;
        }

        .word-line {
            /*padding-top: 30px;*/
            border-bottom: 1px solid black
        }

        td {
            vertical-align: top;
            padding: 7px;
        }

        .page-break {
            page-break-after: always;
        }

        .text-center {
            text-align: center;
        }

        .col-md-8 {
            width: 80%;
            display: inline-block;
        }

        .col-md-2 {
            width: 10%;
            display: inline-block;
        }

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
@endif
@if($which_process == 'pdf')
    <style>
        body {
            font-family: DejaVu Sans, sans-serif !important;
            font-size: 11px;
        }

        .text-bold {
            font-weight: bold;
            /*font-weight: bolder;*/
        }

        * {
            font-family: "Times New Roman";
        }

        /*body{*/
        /*    padding-left: 30px;*/
        /*    padding-right: 30px;*/
        /*}*/
        .mt-1 {
            margin-top: 2px;
        }

        .mb-1 {
            margin-bottom: 2px;
        }

        .word-line {
            /*padding-top: 30px;*/
            border-bottom: 1px solid black
        }

        td {
            vertical-align: top;
            padding: 2px;
        }

        .page-break {
            /*page-break-after: always;*/
        }

        .text-center {
            text-align: center;
        }

        .col-md-8 {
            width: 100%;
            display: inline-block;
        }

        .col-md-6 {
            width: 49%;
            display: inline-block;
        }


        .text-right {
            text-align: right;
        }
        h4{
            margin-top: 2px;
        }

    </style>
@endif