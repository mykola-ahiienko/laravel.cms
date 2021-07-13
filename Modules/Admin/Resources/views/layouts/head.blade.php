<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow">

<title>Matrix Admin Lite Free Versions Template by WrapPixel</title>

<link rel="icon" type="image/png" sizes="16x16" href="{{ config('admin.images_path') }}/favicon.png">

@if(in_array(Route::current()->getName(), ['admin.pages.main', 'admin.content-groups.main']))
    <link rel="stylesheet" type="text/css" href="{{ config('admin.libraries_path') }}/multicheck/multicheck.css">
    <link href="{{ config('admin.libraries_path') }}/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endif
@if(in_array(Route::current()->getName(),['admin.content-groups.create']))
    <link rel="stylesheet" type="text/css" href="{{ config('admin.libraries_path') }}/select2/dist/css/select2.min.css">
@endif
<link href="{{ config('admin.styles_path') }}/style.min.css" rel="stylesheet">
<link href="{{ config('admin.styles_path') }}/custom.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

