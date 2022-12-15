<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eComm</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/02e7483790.js" crossorigin="anonymous"></script>

</head>
<body>
    @include('sweetalert::alert')
    {{ View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
.custom-login{
    padding:100px;
    hight:1000px;
}
img.slider-img{
  height: 400px !important;
  padding-left: 100px;
}
h3.Pro-name{
    color:#000000;
}
p.description{
    color: #ffffff;
}
.custom-product{
    height: 600px !important;
}
.sider-text{
    background-color: #00800024 !important;
    border: 2px  ;
  padding: 10px;
  border-radius: 25px;
}
.trending-wrapper{
    margin: 30px;
}
.tranding-item{
    float: left;
    width:25%;
}
.trending-img{
    height: 100px;
}
.pro-name{
    margin: 30px 0 30px 0;
}
.detai-img{
    height: 200px;
    margin:30px;
}
.crt-button{
    margin-top:20px;
    display: flex;
    flex-direction: column;
}
.detail-descr{
    margin-right:140px;
}
.search-item{
    padding-bottom:40px;
}
.ordernow{
    width: 60%;
    height: auto;
    background-color: #eaf3f2;
    border-radius: 10px
}
.radio{
    margin-right: 5px;
}
.orderbtn{
    margin-bottom: 20px;
}
</style>


</html>
