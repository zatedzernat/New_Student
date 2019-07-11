<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    @yield('header')
    <style>
        body {
            background-color: gray;
        }
    </style>
</head>

<body>
    <br>
    <TABLE WIDTH=816 BORDER=0 CELLPADDING=0 CELLSPACING=0 align="center">
        <TR>
            <TD>
                <IMG SRC="images/head_new_msc_01.jpg" WIDTH=224 HEIGHT=150 ALT=""></TD>
            <TD>
                <IMG SRC="images/head_new_msc_02.jpg" WIDTH=268 HEIGHT=150 ALT=""></TD>
            <TD>
                <IMG SRC="images/head_new_msc_03.jpg" WIDTH=181 HEIGHT=150 ALT=""></TD>
            <TD>
                <IMG SRC="images/head_new_msc_04.jpg" WIDTH=143 HEIGHT=150 ALT=""></TD>
        </TR>
    </TABLE>
    @yield('content')
</body>

</html>