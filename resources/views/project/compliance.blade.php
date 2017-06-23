<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Al Sulaiti Law Firm</title>

<meta name="Keywords" content="Qatar Law Firm, Sports Law firms in qatar, legal consultant in qatar, Employment and Immigration Law firm in Qatar, commercial law firms qatar,
legal consultant in qatar, lawyer services in qatar, international law firms in qatar, Immigration Law firm in Qatar, qatar lawyers association, Tax law firms in qatar,
Construction Law  firm in Qatar, Real Estate & Construction Law  firm in Qatar, qatari advocates firm, registered law firms qatar">

<meta name="Descriptions" content="Al Sulaiti Law Firm is a International law firms in Qatar. Our Services are  Sports Law firms, Employment and Immigration Law firm, Construction Law  firm in Qatar etc...">

<link href="{{url('project/css/dflip.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('project/css/themify-icons.css')}}" rel="stylesheet" type="text/css">
<style>
    body, html {
        height:100%;
        margin:0;
    }
</style>

</head>
<body>
<div id="flipbookContainer"></div>

<script src="{{url('project/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{url('project/js/dflip.min.js')}}" type="text/javascript"></script>

<script>
    var flipBook;
    jQuery(document).ready(function () {
        var pdf = 'pdf/compliance.pdf';

        var options = {height: 979, duration: 800};

        flipBook = $("#flipbookContainer").flipBook(pdf, options);

    });
</script>
</body>

</html>
