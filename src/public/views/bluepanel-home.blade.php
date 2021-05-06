<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bluepanel</title>

        <link rel="stylesheet" href="{{ asset('css/bluepanel.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <div class="wrapper">

            <!-- Sidebar -->
            <nav id="sidebar">
                @include('bluepanel::left-sidebar')
            </nav>

            <!-- Page Content -->
            <div id="content">
                <div class="left float-left">
                    <button type="button" id="sidebarCollapse" class="">
                        {{-- <i class="fas fa-align-left"></i> --}}
                    </button>
                </div>
                <div class="right ml-3 mt-3">
                    @include('bluepanel::main-contents')
                </div>
            </div>

        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#sidebarCollapse').on('click', function () {
                // open or close navbar
                $('#sidebar').toggleClass('active');
                
            });

        });
    </script>
</html>
