<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Learning Path {{$banner_value[$page_value_index]['page_name']}}</title>
<style type="text/css">
@charset "utf-8";
body {
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
ul {
    float: left;
    list-style-type: none;
    margin: 1em;
    padding: 1em;
}
li {
    float: left;
}
li a {
    width: 220px;
    display: block;
    text-align: center;
    color: #ffffff;
    margin: 0.5em;
    padding: 1em;
    text-decoration: none;
    border-radius: 30px;
    background: #734c74;
}
h1 img {
    vertical-align: text-bottom;
}
.sshero * {
    box-sizing: border-box;
}
.sshero {
    padding: 24px;
}
.sshero main {
    display: block;
}
.ss-mid {
    align-items: center;
    text-align: center;
    padding-top: 1em;
    padding-right: 5em;
    padding-left: 5em;
    padding-buttom: 5em;
}
.sshero-content h1 {
    margin: 0;
    font-weight: normal;
    font-size: 60px;
    font-weight: bold;
    color: #000000;
}
.sshero-content h2 {
    margin: 0;
    font-weight: normal;
    font-size: 48px;
    color: #848484;
}
.sshero-content h3 {
    margin: 0;
    font-weight: bold;
    font-size: 36px;
}
.sshero-content p {
    color: inherit;
    font-size: 20px;
}
.sshero-nav {
    text-align: center;
}
.sshero-nav a {
    display: block;
    margin-bottom: 1em;
    border-radius: 30px;
    padding: 1em;
    text-decoration: none;
    box-shadow: 0 0px 0px rgba(0, 0, 0, 0);
    color: #ffffff !important;
    background: #734c74;
    background-repeat: no-repeat;
    background-position: 10% 50%;
    border: 2px solid #734c74;
}
.sshelp-background-color {
    background-color: #CBB0CF;
}
.sshero-content h2 {
    color: #734c74;
}

@media (min-width: 35.5em) {
.sshero {
    display: flex;
    flex-direction: column;
}
.sshero-content, .sshero-nav {
    width: 60%;
    padding: 24px;
}
.ss-right {
    align-items: flex-end;
    text-align: right;
}
.ss-right .sshero-nav {
    justify-content: flex-end;
}
.ss-left-alt {
    flex-direction: row-reverse;
    justify-content: center;
}
.ss-left-alt .sshero-content {
    text-align: right;
}
.ss-left-alt .sshero-nav, .ss-right-alt .sshero-nav {
    width: 33%;
}
.ss-right-alt {
    flex-direction: row;
    justify-content: center;
}
}

@media (min-width: 48em) {
.sshero-content, .sshero-nav {
    width: 60%;
}
.sshero-nav {
    display: flex;
    flex-wrap: wrap;
}
.sshero-nav a {
    flex: 0 1 45%;
}
.sshero-nav a:nth-child(odd) {
    margin-right: 1em;
}
.ss-right .sshero-nav a:nth-child(odd) {
    margin-right: 0;
}
.ss-right .sshero-nav a:nth-child(even) {
    margin-left: 0.5em;
}
.ss-mid .sshero-nav {
    justify-content: center;
}
.ss-mid .sshero-nav a {
    margin-left: 0.5em;
    margin-right: 0.5em;
}
.ss-left-alt .sshero-nav, .ss-right-alt .sshero-nav {
    display: block;
    width: 25%;
}
.ss-left-alt .sshero-nav a, .ss-right-alt .sshero-nav a {
    margin-right: 0;
}
}
</style>
</head>
<body>
<main class="sshero ss-mid">
  <h1 class="title"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Community-b.png?v=136261" alt="" height="40" border="0"> {{$banner_value[$page_value_index]['page_catagory']}}</h1>
  <h3>For the role-specific training click on the relevant job title below:</h3>
  <ul>
    @foreach ($banner_value as $button_arr)
    <li><a href="{{$button_arr['page_link']}}">{{$button_arr['page_title']}}</a></li>
    @endforeach
  </ul>
</main>
<main class="sshero ss-right-alt sshelp-background-color">
  <div class="sshero-content">
    <h2><strong>{{$banner_value[$page_value_index]['page_title']}}<br>
      New Starter Experience</strong></h2>
    <h3><strong>First 90 Day Roadmap</strong></h3>
    <ul>
      <li><a href="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/First-90-days-Roadmap.jpg?v=929980" target="popup">View Roadmap</a></li>
    </ul>
  </div>
  <div class="sshero-content"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/super_genie.png?v=750712" width="402" height="330" border="0"></div>
</main>
<h1 class="sshero ss-mid"><strong>{{$banner_value[$page_value_index]['page_title']}} Learning Requirements</strong></h1>
<main class="sshero ss-right-alt">
  @foreach ($button_value as $button_catagory => $button_arr)
  @if($button_arr)
  <div class="sshero-nav"><img src="{{$image_links[$button_catagory]}}" alt="" width="156" height="95" border="0">
    <h3>{{$button_catagory}}</h3>
    @foreach ($button_arr as $button_arr_info)
    <a href="{{$button_arr_info['button_link']}}">{{$button_arr_info['button_name']}}</a>
    @endforeach
  </div>
  @endif
  @endforeach
</main>
<main class="sshero ss-mid sshelp-background-color">
  <h1  class="ss-mid"><strong>Additional Learnings</strong></h1>
</main>
<main class="sshero ss-right-alt sshelp-background-color">
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001383/local000000000000008/images/DiversityInclusionSABA_HomePage_Image.png?v=28908" alt="" width="220" height="97" border="0">
    <h3>Diversity and Inclusion</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/catalog/search?selectedTab=LEARNINGEVENT&amp;filter=%7B%22CATEGORY%22%3A%5B%7B%22id%22%3A%22categ000000000003661%22%2C%22uiname%22%3A%22Diversity%20and%20Inclusion%22%2C%22displayColumns%22%3A%5B%22Diversity%20and%20Inclusion%22%5D%7D%5D%2C%22advsearch%22%3Afalse%7D">View Courses</a></div>
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Button_handlingwithcare2.png?v=830497" alt="" width="220" height="97" border="0">
    <h3>HandlingWith Care</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/workspace/detail/pgcnt000000000013860">Visit Page</a></div>
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Leadership.jpg?v=489887" alt="" width="220" height="97" border="0">
    <h3>Leadership</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/catalog/search?selectedTab=LEARNINGEVENT&amp;filter=%7B%22CATEGORY%22%3A%5B%7B%22id%22%3A%22categ000000000003641%22%2C%22uiname%22%3A%22Leadership%22%2C%22displayColumns%22%3A%5B%22Leadership%22%5D%7D%5D%2C%22advsearch%22%3Afalse%7D">View Courses</a></div>
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001383/local000000000000008/images/Button_BCSystems_Workspace.png?v=117194" alt="" width="220" height="97" border="0">
    <h3>Blue Care Systems</h3>
    <a href="https://unitingcare.sabacloud.com/Saba/Web_spf/A501PRD0005/app/workspace/detail/pgcnt000000000041315">View Page</a></div>
</main>
<h1 class="sshero ss-mid"><strong>Download</strong></h1>
<main class="sshero ss-right-alt">
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/Orientation-book.png?v=908885" alt="" width="108" height="80" border="0">
    <h3>Orientation Manual</h3>
    <a href="https://unitingcaresb-fads.sabacloud.com/Saba/Web_spf/A501SNB0005/app/workspace/detail/pgcnt000000000017302?selectedFirstContainerId=pgcnt000000000025596">Download</a></div>
  <div class="sshero-nav"><img src="https://unitingcare.sabacloud.com/production/A501PRD0005/CertificateTemplates/crttp000000000001561/local000000000000008/images/book.png?v=249140" alt="" width="104" height="80" border="0">
    <h3>File Name</h3>
    <a href="https://unitingcaresb-fads.sabacloud.com/Saba/Web_spf/A501SNB0005/app/workspace/detail/pgcnt000000000017302?selectedFirstContainerId=pgcnt000000000025596">Download</a></div>
</main>
</body>
</html>
