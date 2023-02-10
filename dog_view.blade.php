<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My application</title>
    <!-- font awesome (required) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- progress bar (not required, but cool) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css" />
    <!-- bootstrap (required) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
    <!-- date picker (required if you need date picker & date range filters) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <!-- grid's css (required) -->
    <link rel="stylesheet" type="text/css" href="" />

    <style type="text/css">
        .glyphicon { margin-right:5px; }
.thumbnail
{
    margin-bottom: 20px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 10px;
}
.item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
{
    background: #428bca;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
}
.item.list-group-item .caption
{
    padding: 9px 9px 0px 9px;
}
.item.list-group-item:nth-of-type(odd)
{
    background: #eeeeee;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item img
{
    float: left;
}
.item.list-group-item:after
{
    clear: both;
}
.list-group-item-text
{
    margin: 0 0 11px;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="/" style="background-color:Black;font-family:Bold;font-size:20px;">BCD Pinpoint
Test Exercise
</a>
        </li>

         <li class="nav-item">
            <a class="navbar-brand"  href="#" onclick='myFunction_test()'>Cats</a>
        </li>

         <li class="nav-item">
            <a class="navbar-brand"  href="#" onclick='myFunction_dogs()'>Dogs</a>
        </li>
    </ul>
</nav>

<div class="container" id="exampleid">
   @yield('content')
</div>


<script type="text/javascript">
        function myFunction_dogs(){
    // var table = $('#exampleids').DataTable();
    

       $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    }),
        $.ajax({
            url: "/get_dogs",
            method: "GET",
            success: function (response) {
$.each(response.data, function( index, value ) {
                // alert(value.re_upload);
               
$('#exampleid').append("      <div class='item  col-xs-4 col-lg-4'>\
              <div class='thumbnail'>\
                <img class='group list-group-image' src="+value.image['url']+" width='400px' height='250px' />\
                <div class='caption'>\
                    <h4 class='group inner list-group-item-heading'>\
                        "+value.name +"</h4>\
                    <p class='group inner list-group-item-text'>\
                        "+value.temperament +"</p>\
                    <div class='row'>\
                        <div class='col-xs-12 col-md-6'>\
                            <p class='lead'>\
                                Life Span: "+value.life_span +"</p>\
                        </div>\
                        <div class='col-xs-12 col-md-6'>\
                            <a class='btn btn-success' >View Details</a>\
                        </div>\
                    </div>\
                </div>\
            </div>\
        </div>\
        ");
         
            });
            console.log(response.data);
         
            
         
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        
            },
        });
       
    

}
   
</script>
<script type="text/javascript">
        function myFunction_test(){
    // var table = $('#exampleids').DataTable();
    

       $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    }),
        $.ajax({
            url: "/get_form",
            method: "GET",
            success: function (response) {
$.each(response.data, function( index, value ) {
                // alert(value.re_upload);
               
$('#exampleid').append(" <img src="+value.url +" height='400px' width=height='250px' />\
        ");
            });
            console.log(response.data);
         
            
         
        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        
            },
        });
       
    

}
   
</script>
<script> 
    $(document).ready(function() {
    $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
    $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"></script>
<!-- moment js (required by datepicker library) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<!-- jquery (required) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- popper js (required by bootstrap) -->
<script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>
<!-- bootstrap js (required) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!-- pjax js (required) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<!-- datepicker js (required for datepickers) -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<!-- required to supply js functionality for the grid -->
<script src=""></script>
<script>
    // send csrf token (see https://laravel.com/docs/5.6/csrf#csrf-x-csrf-token) - this is required
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // for the progress bar (required for progress bar functionality)
    $(document).on('pjax:start', function () {
        NProgress.start();
    });
    $(document).on('pjax:end', function () {
        NProgress.done();
    });
</script>
<!-- entry point for all scripts injected by the generated grids (required) -->
@stack('grid_js')
</body>
</html>