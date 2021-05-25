<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>hamidurShoag.com</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{ View::make("header") }}
     @yield('content')
     {{ View::make("footer") }}
</body>
<style>
    .navbar_design{
       box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
       font-size: 16px;
    }

    .custom-login{
       height: 500px;
       padding-top: 100px;
    }
    .btn1{
        margin-top: 10px;
    }
    img.slider-img{
       height: 400px !important;
    }
    .custom-product{
        height:600px ;
        margin-top: 30px;
    }
    .silder-text{
        background-color: #94979485 !important;
    }
    .trending-img{
        height: 110px;
    }
    .trendig-item{
      float: left;
      width: 20%;
    }
    .container .trending-wrapper{
        margin-top: 80px;
    }
    .container .trending-wrapper .trendig-item,.search_product  .trendig-item{
       box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
       margin-left:50px;
       padding:10px;
       margin-top: 40px;
       transition: all 0.3s ease;

    }
    .container .trending-wrapper .trendig-item .trending-img,.search_product  .trendig-item img{
         margin-top: 20px;
        transition: transform 0.7s;
    }
     .container .trending-wrapper .trendig-item .trending-img:hover,.search_product  .trendig-item img:hover{
       transform: scale(1.4);
     }
    .container .trending-wrapper .trendig-item:hover,.search_product .trendig-item:hover{
      box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      transform: translateY(-5px);
    }
    .detail-img{
        height: 300px;
        margin-bottom: 200px !important;
    }
    .search-box{
       width: 500px !important;
    }
    .cartlist-diveder{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }
    .details{
        margin-top: 50px;
    }
    .details .col_1{
     padding-top:20px;
     text-align: center;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
      width: 500px;
      height: 500px;
      margin-left: 20px;
    }
     .details .col_2{
         padding-top:20px;
         margin-left: 100px;
         width: 500px;
         height: 500px;
      box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
    }
     .details .col_1 img{
         margin-top: 60px;
         transition: all 0.7s ease;
     }
     .details .col_1 img:hover{
      transform: scale(1.5);
     }
  .details .col_2 h2{
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;
  }
.details .col_2 h3{
    font-weight: 300;
       font-size: 18px;
      line-height: 40px;
     color: rgb(8, 8, 8);

}
.details .col_2 h4{
       font-size: 16px;
      line-height:18px;
      color: rgb(104, 100, 100);
}
.details .col_2 h5{
       font-size: 14px;
      line-height:20px;
      color: rgb(44, 42, 42);
}
.custom-product .col-sm-10{
     margin-left: 100px;
     box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;

}
.custom-product .col-sm-10 .trending-wrapper h3{
      margin-bottom: 50px;
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;

}
.custom-product .col-sm-10 .trending-wrapper .search-item{
    padding: 20px 10px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
.custom-product .col-sm-10 .trending-wrapper .search-item .col-sm-3{

    width: 140px;
    padding: 2px;
    margin-left: 20px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
.custom-product .col-sm-10 .trending-wrapper .search-item .col-sm-5{
    background: white;
    margin-left: 50px;
    margin-top: 10px;
     box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
.custom-product .col-sm-10 .trending-wrapper .search-item .col-sm-4{
    background: white;
    margin-left: 20px;
    margin-top: 40px;

}

.order .col-sm-10 h3{
      margin-bottom: 50px;
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;
}
.order .col-sm-10 .col-sm-6{
    padding: 20px;
}
.order .col-sm-10 .col-sm-6 img{
    margin-left: 150px;
    margin-top: 40px;
}
.order .col-sm-10 .col-sm-6 h2{
    margin-bottom:20px;
      font-size: 20px;
      line-height: 10px;
      color: rgb(241, 93, 155);
      font-weight: 600;
}
.order .col-sm-10 .col-sm-6 h5
{
    font-size: 16px;
      line-height:18px;
      color: rgb(104, 100, 100);
}
.order-price{

     box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
.order-price h1{
    margin-bottom: 50px;
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;
      text-align: center;
}
.order-price .col-sm-6 table{
    margin-top: 20px;
    font-size: 18px;
    margin-left: 300px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    margin-bottom: 40px;
}
.order-price .col-sm-6 form{
   margin-left: 300px;


}
.order-price .col-sm-6 form textarea{
    width: 550px;
    margin-bottom: 10px;
}
.order-price .col-sm-6 form label{
    font-size: 18px;
}
.order-price .col-sm-6 form input span{
    font-size: 18px;
}
.search_product h3{
      font-size: 32px;
      line-height: 40px;
      color: rgb(241, 93, 155);
      font-weight: 600;
      text-align: center;
      margin-bottom: 40px;
}

.search_product .trendig-item{
  margin-left: 20px;
  text-align: center;
  padding-top: 5px;

}
</style>
</html>
