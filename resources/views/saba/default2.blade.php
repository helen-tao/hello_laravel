<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Learning Path {{$banner_value[$page_value_index]['page_name']}}</title>
<style type="text/css">
@charset    "utf-8";
body {
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
.saba_header{
    padding-top: 1em;
}
.saba_header_nav {
    padding: 1em;
}
.saba_header_nav a {
    width: 250px;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    margin: 0.5em;
    padding: 1em 0.5em;
    border-radius: 30px;
    color: #ffffff;
    background: #734c74;
    text-decoration:none;
}
h1 img {
    vertical-align: text-bottom;
}
.ss-mid {
    align-items: center;
    text-align: center;
    padding-top: 1em 5em 5em 5em;
}
.sshero_banner_content{
    width: 850px;
    display: inline-block;
    vertical-align: middle;
}
.sshero_banner_content h2 {
    margin: 10px;
    font-size: 48px;
    color: #734c74;
}
.sshero_banner_content h3 {
    margin: 20px 10px;
    font-size: 36px;
}
.sshero-nav, .sshero-nav-bottom{
    width: 15%;
    text-align: center;
    display: inline-block;
    vertical-align: text-top;
    margin: 20px 10px 50px 10px;
}
.sshero-nav-bottom{
    width: 20%;
    margin-right: 30px;
}
.sshero_banner_content a, .sshero-nav a, .sshero-nav-bottom a{
    display: block;
    margin-bottom: 1em;
    border-radius: 30px;
    padding: 1em;
    text-align: center;
    color: #ffffff;
    background: #734c74;
    text-decoration:none;
}
.sshero_banner_content a{
    margin: 50px 10px;
    width: 250px;
}
.sshero_banner_img{
    margin:50px 0px 50px 200px;
    vertical-align: middle;
}
.ss_container, .ss_bottom h1{
    padding: 30px 0px;
}
.sshelp-background-color {
    background-color: #CBB0CF;
}
.container-foot {
    color: #333;
    height: 50px;
    line-height: 50px;
	  text-align: center;
}

@media (max-width: 1550px) {
  .sshero_banner_img{
    margin:50px 0px;
  }
  .sshero-nav{
    width: 230px;
  }
}

@media (max-width: 1200px) {
  .sshero-nav-bottom{
    width: 230px;
  }
}

@media (max-width: 900px) {
  .sshero_banner_content{
    width: auto;
  }
}
</style>
</head>
<body>
  <div class="saba_header ss-mid">
  <h1><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Community-b.png?v=136261" alt="" height="40" border="0"> {{$banner_value[$page_value_index]['page_catagory']}}</h1>
  <h3>For the role-specific training click on the relevant job title below:</h3>
  <div class="saba_header_nav">
    @foreach ($banner_value as $button_arr)
    <a href="{{$button_arr['page_link']}}"><span>{{$button_arr['page_title']}}</span></a>
    @endforeach
  </div>
</div>
<div class="sshelp-background-color">
  <div class="sshero_banner_content">
    <h2>{{$banner_value[$page_value_index]['page_title']}}<br>
      New Starter Experience</h2>
    <h3>First 90 Day Roadmap</h3>
    <a href="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/First-90-days-Roadmap.jpg?v=929980" target="popup">View Roadmap</a>
  </div>
  <img class="sshero_banner_img" src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/super_genie.png?v=750712" width="402" height="330" border="0">
</div>
<div class="ss_container ss-mid">
  <h1><strong>{{$banner_value[$page_value_index]['page_title']}} Learning Requirements</strong></h1>
  @foreach ($button_value as $button_catagory => $button_arr)
  @if($button_arr)
  <div class="sshero-nav"><img src="{{$image_links[$button_catagory]}}" alt="" width="156" height="95" border="0">
    <h3>{{$button_catagory}}</h3>
    @foreach ($button_arr as $button_arr_info) <a href="{{$button_arr_info['button_link']}}">{{$button_arr_info['button_name']}}</a> @endforeach </div>
  @endif
  @endforeach
</div>
<div class="ss_bottom ss-mid sshelp-background-color">
  <h1>Additional Learnings</h1>
  <div class="sshero-nav-bottom"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001383/local000000000000008/images/DiversityInclusionSABA_HomePage_Image.png?v=28908" alt="" width="220" height="97" border="0">
    <h3>Diversity and Inclusion</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/catalog/search?selectedTab=LEARNINGEVENT&amp;filter=%7B%22CATEGORY%22%3A%5B%7B%22id%22%3A%22categ000000000003661%22%2C%22uiname%22%3A%22Diversity%20and%20Inclusion%22%2C%22displayColumns%22%3A%5B%22Diversity%20and%20Inclusion%22%5D%7D%5D%2C%22advsearch%22%3Afalse%7D">View Courses</a></div>
  <div class="sshero-nav-bottom"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Button_handlingwithcare2.png?v=830497" alt="" width="220" height="97" border="0">
    <h3>HandlingWith Care</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/workspace/detail/pgcnt000000000013860">Visit Page</a></div>
  <div class="sshero-nav-bottom"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Leadership.jpg?v=489887" alt="" width="220" height="97" border="0">
    <h3>Leadership</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/catalog/search?selectedTab=LEARNINGEVENT&amp;filter=%7B%22CATEGORY%22%3A%5B%7B%22id%22%3A%22categ000000000003641%22%2C%22uiname%22%3A%22Leadership%22%2C%22displayColumns%22%3A%5B%22Leadership%22%5D%7D%5D%2C%22advsearch%22%3Afalse%7D">View Courses</a></div>
  <div class="sshero-nav-bottom"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/MyCMS_(2).png?v=499139" alt="" width="220" height="97" border="0">
    <h3>MyCMS</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/workspace/detail/pgcnt000000000043497">View Page</a></div>
  </div>
<div class="container-foot">For any issues or queries please contact the Saba team at Learning@ucareqld.com.au </div>
</body>
</html>
