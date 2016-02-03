<?php wp_footer(); ?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','//connect.facebook.net/en_US/fbevents.js');

fbq('init', '895733740496413');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=895733740496413&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<script type="text/javascript">(window.Image ? (new Image()) : document.createElement('img')).src = location.protocol + '//vk.com/rtrg?r=mGaqdmloT6tdMqwKVLzLRgi4YyxA34S*uWI/3SBJ9*epa8GHTkxZzkeFGv85YcCGeDcUK03iXmh*XQWkn8RQsb33LGvL99zumYwAJ6e7kr9Y*CbPlQKRjxLBpTVdyCVnqb3Qou0ldTec7avoKiXSeVetrg9VDIaMlC5/xQ19L/g-';</script>
<script src="<?php echo get_template_directory_uri() . '/jquery.js'?>"></script>
<script src="<?php echo get_template_directory_uri() . '/scroll.js'?>"></script>
<script src="<?php echo get_template_directory_uri() . '/smooth.js'?>"></script>
<script src="<?php echo get_template_directory_uri() . '/FancyBox/jquery.mousewheel-3.0.6.pack.js'?>"></script>
<script src="<?php echo get_template_directory_uri() . '/FancyBox/source/jquery.fancybox.js'?>"></script>
<script>
$(function() {
    $(".various").click(function(){
        $(".various").fancybox({
            maxWidth    : 800,
            maxHeight   : 600,
            fitToView   : false,
            width       : '70%',
            height      : '70%',
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'none',
            closeEffect : 'none'
        });
    })
});
    var hoverCall = document.querySelector('#attr-call'),
        call = document.querySelector('#trubka');
    
    hoverCall.onmousemove = function(){
        call.setAttribute('class', 'animRotate2');
    }
    hoverCall.onmouseout = function() {
        call.setAttribute('class', 'animRotate');        
    }
</script>
<script>
var leftArrow = document.querySelector('#leftA'),
    rightArrow = document.querySelector('#rightA'),
    carousel = document.querySelector('#Carousel');
var i = 1,
    left = 0,
    scrolliter = 0;

    window.onscroll = function(){
       if(window.pageYOffset > 680 && scrolliter == 0 ){
           header.setAttribute('class','fixed-head');
           scrolliter = 1;
       } else if(window.pageYOffset < 680 && scrolliter == 1){
           header.setAttribute('class','normal-head');
           scrolliter = 0;
       }
    }
    window.onload = function() {
        var body = document.querySelector('body'),
            menus = document.querySelectorAll('.attr-menus'),
            header_logo = document.querySelector('#logotype-block h1'),
            h3_first = document.querySelector('#h3-first'),
            h3_second = document.querySelector('#h3-second'),
            video = document.querySelector('#movie'),
            form = document.querySelector('#form-content');

        window.scrollTo(0,0);
        carousel.setAttribute('style','left:'+left+'px;');
        body.removeAttribute('style');

        // for(var i=0; i<menus.length;i++){
        //     menus[i].setAttribute('class','attr-menus elem'+(i+1) );
        // }
        header_logo.setAttribute('class', 'logotype-block-h1');
        h3_first.setAttribute('class','h3-first');
        h3_second.setAttribute('class','h3-second');
        video.setAttribute('class','video');
        form.setAttribute('class','form-content');
    }

    leftArrow.onclick = function() {
        if (i > 1){
            left += 900;
            i -= 1;
            carousel.removeAttribute('style');
            carousel.setAttribute('style', 'left:'+left+'px;');
        } 
        console.log(i);
    }
    rightArrow.onclick = function() {
        if (i < 4){
            left -= 900;
            i += 1;
            carousel.removeAttribute('style');
            carousel.setAttribute('style', 'left:'+left+'px;');
        }
    }
</script>
<script async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/9abafef422ce263df0776c36258d91f9/connect" id="check-code-pozvonim" charset="UTF-8"></script>
</body>
</html>