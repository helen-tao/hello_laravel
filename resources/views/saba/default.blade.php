<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Saba Help {{$final_info['page_title']}}</title>
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
    background-color: #{{$page_color['background_color']}};
}
.sshelp-banner-title {
    margin-top: 20px;
    display: inline-block;
    vertical-align: middle;
    text-align: left;
    width: 50%;
    color: #{{$page_color['banner_title_color']}};
    font-weight: bolder;
    font-size: 40px;
}
.sshelp-banner-subtitle {
    margin-top: 10px;
    color: #000;
    font-size: 28px;
    font-weight: bolder;
}
.sshelp-banner img {
    vertical-align: middle;
    margin-left: 50px;
}
.sshelp-container {
    width: 95%;
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
    margin-bottom: 80px;
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
    width: 250px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 1em;
    padding: 1em;
    text-align: center;
    color: #ffffff;
    text-decoration: none;
    border-radius: 30px;
    background: #{{$page_color['button_color']}};
}
.sshelp-banner-subtitle a {
    font-size: 18px;
    margin-left: 10px;
}
.sshelp-banner-subtitle a:hover, .sshelp-nav a:hover {
    background: #{{$page_color['hover_color']}};
}
.sshelp-foot {
    color: #333;
    background-color: #{{$page_color['background_color']}};
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
  <div class="sshelp-banner-title">{{$final_info['page_title']}} Staff<br/>
    New Starter Experience
    <div class="sshelp-banner-subtitle">First 90 Day Roadmap<p/>
    <a href="{{$image_links['roadmap_link']}}" target="popup">View Roadmap</a></div>
  </div>
  <img src="{{$image_links['banner_image']}}" alt="" width="402" height="330" /></div>
<div class="sshelp-container">
  <div class="container-title">{{$final_info['page_title']}} Staff Learning Requirements</div>
  <div class="sub-container">
    @foreach ($final_info['contents'] as $name => $button_arr)
    <div class="sshelp-nav">
      <img src="{{$image_links[$name]}}" alt="" width="200" height="" />
      <h3>{{$name}}</h3>
      @foreach ($button_arr as $button_name)
      <a href="#">{{$button_name}}</a>
      @endforeach
    </div>
    @endforeach
  </div>
</div>
<p>
<div class="sshelp-foot">For any issues or queries please contact the Saba team at Learning@ucareqld.com.au </div>
</body>
</html>
