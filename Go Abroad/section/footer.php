<!-- footer -->
<section id="contact" >
    <div class="container-fluid padding">
        <div class="col-md-12">
            <h1 class="text-center color-white letter-space shadow"> <strong> Contact Us </strong> </h1>
        </div>
        <div class="content text-center bgcolor-4">
            <div class="col-md-8 col-md-offset-2">
                <span class="input input--kuro">
                    <input class="input__field input-text input__field--kuro" type="text" id="input-7" required/>
                    <label class="input__label input__label--kuro" for="input-7">
                        <span class="input__label-content input__label-content--kuro">Tell Us Your Name</span>
                    </label>
                </span>
                <span class="input input--kuro">
                    <input class="input__field input-text input__field--kuro" type="email" id="input-8" required/>
                    <label class="input__label input__label--kuro" for="input-8">
                        <span class="input__label-content input__label-content--kuro">Email</span>
                    </label>
                </span>
                <span class="input input--kuro">
                    <input class="input__field input-text input__field--kuro" type="textarea" rows="2" cols="10" id="input-9" required/>
                    <label class="input__label input__label--kuro" for="input-9">
                        <span class="input__label-content input__label-content--kuro">Comments</span>
                    </label>
                </span>
            </div>
            <div class="col-md-12 margin-top">
                <button type="submit" class="btn btn-primary btn-lg">SEND MESSAGE</button>
            </div>
        </div>
    </div>
        
    <div class="col-md-12 padding" style="bottom:0; background: #fff">
        
        <div class="col-md-12"> 
                
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container text-center">
            <hr>
                © 2016 GoAbroad All rights reserved

            </div>
        </div>
        <!--/.Copyright-->
        </div>
    </div>
</section>


<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
<script type="text/javascript">

    $(document).ready(function(){
        // alert('working');
        $(window).bind('scroll',function(e){
            parallax();
        });
        $("#toContact").click(function(){
            window.location='contact.php';
        });
        $(".prospect_options").click(function(){
            $(".option_ans").stop(true,true).slideUp();
            $(this).next(".option_ans").stop(true,true).slideDown(800);
        });
    });
    $(function(){

        var $window = $(window);
        var scrollTime = 1.5;
        var scrollDistance = 600;

        $window.on("mousewheel DOMMouseScroll", function(event){

            event.preventDefault();

            var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
            var scrollTop = $window.scrollTop();
            var finalScroll = scrollTop - parseInt(delta*scrollDistance);

            TweenMax.to($window, scrollTime, {
                scrollTo : { y: finalScroll, autoKill:true },
                ease: Power1.easeOut,
                overwrite: 5
            });

        });
    });
    function parallax(){
        var scrollPosition = $(window).scrollTop();
        if(scrollPosition > 200){
            $("#left_pencil,#right_books").fadeIn(100);
        }else{
            $("#left_pencil,#right_books").stop(true).fadeOut(1000);
        }
        $("#left_pencil,#right_books").css('top',(400 + (scrollPosition * .5)) +'px' );
    }
</script>
</body>
</html>