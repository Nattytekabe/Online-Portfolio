<!DOCTYPE html>
<html>
<head>
    
<link rel="icon" href="http://example.com/avatar.png">

  <meta charset="utf-8">
<style type="text/css">
  
/*SLIDER*/
.banner {
    position: relative;
    color: #006082;}
.banner {
     margin-top: 75px;
}
.banner img.img-responsive{
    width: 100%;
    height: 100%;
    position: relative;
    }
.banner .welcome-message{position: absolute;left: 0;right:0;bottom:0;top:0;text-align: center;}
.banner .welcome-message .wrap-info{display: table;height: 100%;width: 100%;}
.banner .welcome-message .wrap-info .information{display: table-cell;vertical-align: middle;}
.banner .arrow-nav{position: absolute;bottom:-3.5em;background-color: #bfa145;height: 7em;width: 7em;display: inline-block;z-index: 100;left: 50%;margin-left: -52px;color: #fff;border-radius: 30%;}
.banner .arrow-nav i{font-size: 5em;line-height:105px;}
.banner .arrow-nav:hover{background: #756534;}

a.download-resume,
a.hair-me{
    color: #1D345F;
    font-size: 14px;
    font-weight: 600;
    padding: 8px 15px 10px 15px;
    display: inline-block;
    margin: 5px;
}


a.download-resume {
    border: 1px solid rgba(255,255,255,0.7);
}


a.hair-me {
    background: #1CB9C8;
    border: 1px solid #1CB9C8;
}


/*Button Hover*/
a.download-resume:hover,
a.download-resume:focus,
a.hair-me:hover,
a.hair-me:focus{
    border-color: #232323;
    background: #232323;
}


a.download-resume i,
a.hair-me i{
    margin-right: 8px;
}

</style>
</head>
<body id=home>

<div class="banner" id="home">         
    <img src="assets/images/bannerh.png"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                   <a class="download-resume wow fadeInLeft" href="CV-PDF.pdf">
        <i class="fa fa-download" aria-hidden="true"></i> 
        Download Resume</a> 
      <a class="hair-me wow fadeInRight" href="#contact">
        <i class="fa fa-user" aria-hidden="true"></i> 
        Hair Me
      </a>
            </div>
            <a href="#objective" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div>
<!-- banner-->