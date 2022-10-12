<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $page_title }}</title>
<style type="text/css">
@charset "utf-8";
body {
    margin: 0;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #000;
    text-align: center;
    background-color: #fff;
}
.sshelp-banner {
    padding: 24px;
    background-color: #{{$background_color}};
}
.sshelp-banner-title {
    display: inline-block;
    vertical-align: middle;
    text-align: left;
    width: 50%;
    color: #{{$banner_title_color}};
    font-weight: bolder;
    font-size: 48px;
}
.sshelp-banner-subtitle {
    margin-top: 30px;
    color: #000;
    font-size: 24px;
    font-weight: bolder;
}
.sshelp-banner img {
    vertical-align: middle;
    margin-left: 50px;
}
.sshelp-container {
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}
.container-title {
    margin-top: 50px;
    font-weight: bold;
    font-size: 36px;
}
.sub-container {
    display: flex;
    flex-wrap: wrap;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
    margin-top: 30px;
}
.sshelp-nav {
    width: 330px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 30px;
}
.sshelp-nav h3 {
    height: 65px;
}
.sshelp-banner-subtitle a, .sshelp-nav a {
    width: 170px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 0.5em;
    text-align: center;
    color: #ffffff;
    padding: 0.5em;
    text-decoration: none;
    border-radius: 30px;
    background: #619EAC;
}
.sshelp-banner-subtitle a {
    display: inline-block;
    width: 350px;
    font-size: 18px;
    margin-left: 10px;
}
.sshelp-banner-subtitle a:hover, .sshelp-nav a:hover {
    background: #A5BECE;
}
.sshelp-foot {
    color: #333;
    background-color: #{{$background_color}};
    height: 50px;
    line-height: 50px;
}

@media (max-width: 1270px) {
.sshelp-container {
    width: 100%;
}
}

@media (max-width: 1020px) {
.sub-container {
    display: block;
}
}
</style>
</head>

<body>
<div class="sshelp-banner">
  <div class="sshelp-banner-title">{{$banner_title}}
    <div class="sshelp-banner-subtitle"> <a href="#Residentia">Click here to enrol</a> <a href="#Residentia">Basic Functions Instruction</a></div>
  </div>
  <img src="https://unitingcaresb.sabacloud.com/production/A501SNB0005/CertificateTemplates/crttp000000000001540/local000000000000008/images/learner-header-image.png?v=628324" alt="" width="271" height="" /></div>
<div class="sshelp-container">
  <div class="container-title">{{$content_title}}</div>
  <div class="sub-container">
    @foreach ($contents as $content)
    <div class="sshelp-nav">
      <img src="{{$content['nav_image']}}" alt="" width="200" height="" />
      <h3>{{$content['nav_title']}}</h3>
      @foreach ($content['nav_button'] as $button_name => $button_link)
      <a href="{{$button_link}}">{{$button_name}}</a>
      @endforeach
    </div>
    @endforeach
  </div>
</div>
<p>
<div class="sshelp-foot">For any issues or queries please contact the Saba team at Learning@ucareqld.com.au </div>
</body>
</html>
