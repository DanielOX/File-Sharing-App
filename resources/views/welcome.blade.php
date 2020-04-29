<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                background:#eee;

            }
        /* E-commerce */
        .product-box {
        padding: 0;
        border: 1px solid #e7eaec;
        }
        .product-box:hover,
        .product-box.active {
        border: 1px solid transparent;
        -webkit-box-shadow: 0 3px 7px 0 #a8a8a8;
        -moz-box-shadow: 0 3px 7px 0 #a8a8a8;
        box-shadow: 0 3px 7px 0 #a8a8a8;
        }
        .product-imitation {
        text-align: center;
        padding: 90px 0;
        background-color: #f8f8f9;
        color: #bebec3;
        font-weight: 600;
        }
        .cart-product-imitation {
        text-align: center;
        padding-top: 30px;
        height: 80px;
        width: 80px;
        background-color: #f8f8f9;
        }
        .product-imitation.xl {
        padding: 120px 0;
        }
        .product-desc {
        padding: 20px;
        position: relative;
        }
        .ecommerce .tag-list {
        padding: 0;
        }
        .ecommerce .fa-star {
        color: #d1dade;
        }
        .ecommerce .fa-star.active {
        color: #f8ac59;
        }
        .ecommerce .note-editor {
        border: 1px solid #e7eaec;
        }
        table.shoping-cart-table {
        margin-bottom: 0;
        }
        table.shoping-cart-table tr td {
        border: none;
        text-align: right;
        }
        table.shoping-cart-table tr td.desc,
        table.shoping-cart-table tr td:first-child {
        text-align: left;
        }
        table.shoping-cart-table tr td:last-child {
        width: 80px;
        }
        .product-name {
        font-size: 16px;
        font-weight: 600;
        color: #676a6c;
        display: block;
        margin: 2px 0 5px 0;
        }
        .product-name:hover,
        .product-name:focus {
        color: #1ab394;
        }
        .product-price {
        font-size: 14px;
        font-weight: 600;
        color: #ffffff;
        background-color: #1ab394;
        padding: 6px 12px;
        position: absolute;
        top: -32px;
        right: 0;
        }
        .product-detail .ibox-content {
        padding: 30px 30px 50px 30px;
        }
        .image-imitation {
        background-color: #f8f8f9;
        text-align: center;
        padding: 200px 0;
        }
        .product-main-price small {
        font-size: 10px;
        }
        .product-images {
        margin: 0 20px;
        }

        .ibox {
        clear: both;
        margin-bottom: 25px;
        margin-top: 0;
        padding: 0;
        }
        .ibox.collapsed .ibox-content {
        display: none;
        }
        .ibox.collapsed .fa.fa-chevron-up:before {
        content: "\f078";
        }
        .ibox.collapsed .fa.fa-chevron-down:before {
        content: "\f077";
        }
        .ibox:after,
        .ibox:before {
        display: table;
        }
        .ibox-title {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background-color: #ffffff;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 3px 0 0;
        color: inherit;
        margin-bottom: 0;
        padding: 14px 15px 7px;
        min-height: 48px;
        }
        .ibox-content {
        background-color: #ffffff;
        color: inherit;
        padding: 15px 20px 20px 20px;
        border-color: #e7eaec;
        border-image: none;
        border-style: solid solid none;
        border-width: 1px 0;
        }
        .ibox-footer {
        color: inherit;
        border-top: 1px solid #e7eaec;
        font-size: 90%;
        background: #ffffff;
        padding: 10px 15px;
        }
        </style>
        </head>
    <body>
        {{-- NAVIGATION BAR --}}

        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <a class="navbar-brand" href="#">LazerCut</a>
            </div>
          
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="col-sm-8 col-md-8" >
                  <form class="navbar-form"  action="{{route('home')}}" method="get" role="search">
                  <div class="input-group" style="width:100%">
                      <input type="text" class="form-control" placeholder="Search" name="q">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                      </div>
                  </div>
                  </form>
              </div>
            </div><!-- /.navbar-collapse -->
          </nav>

          
        {{-- NAVIGATION BAR END --}}
 
          <div class="container row">
                <div class="col-sm-2 col-md-2">
                <ul class="list-group" style="width:80%">
                        @foreach($categories as $category)                       
                            <li class="list-group-item" >
                                <a href="{{route('home.extension',['extension' => $category])}}">{{$category}}</a>
                            </li>
                        @endforeach
 
                </ul>
                </div>
                <div class="col-sm-10 col-md-10">
                        <div class="container">
                            <div class="row">
                                @foreach($files as $file)
                                <a href="{{ route('list.file',['file_id' => $file->id]) }}">
                                        <div class="col-md-3">
                                                <div class="ibox">
                                                    <div class="ibox-content product-box">
                                                        <div class="product-imitation" style="background-image:url({{asset("storage/")}}/{{$file->firstImage()}})">
                                                        </div>
                                                        <div class="product-desc">
                                                            <span class="product-price">
                                                                .{{ $file->extension }}
                                                            </span>
                                                            <small class="text-muted">
                                                                    .{{ $file->extension }}
                                                            </small>
                                                            <a href="{{ route('list.file',['file_id' => $file->id]) }}" class="product-name">
                                                                {{ $file->title }}
                                                            </a>
                                        
                                                            <div class="small m-t-xs">
                                                                {{ \Illuminate\Support\Str::limit($file->description, 100, $end='...') }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>        
        
                                </a>
                                @endforeach
                                <div class="pull-right">
                                        {!! $files->render() !!}
                                </div>
                            </div>
                        </div>
                        
                </div>
          </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
    </body>
</html>
