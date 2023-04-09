
<link rel="stylesheet" href="{{asset('css/convas.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<section id="canvas" class="dark">
    
    <div class="headers">
        <p class="main-p">WHAT I HAVE DONE SO FAR</p>
        <h2 class="main-h2">Work Experience.</h2>
    </div>
      
    <div class="canvas dark" >
        <div class="options">
            <div class="option active"
                style="--optionBackground:url(https://66.media.tumblr.com/6fb397d822f4f9f4596dff2085b18f2e/tumblr_nzsvb4p6xS1qho82wo1_1280.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-walking"></i>
                    </div>
                    <div class="info">
                        <div class="main">Blonkisoaz</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(https://66.media.tumblr.com/8b69cdde47aa952e4176b4200052abf4/tumblr_o51p7mFFF21qho82wo1_1280.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon" style="width: 80px">
                        <img src="{{asset('upliad/canvas-files/1.png')}}" alt="" width="80px">
                    </div>
                    <div class="info">
                        <div class="main">Oretemauw</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(https://66.media.tumblr.com/5af3f8303456e376ceda1517553ba786/tumblr_o4986gakjh1qho82wo1_1280.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <img src="{{asset('upliad/canvas-files/1.png')}}" alt="" width="80px">
                    {{-- <div class="icon">
                    </div> --}}
                    <div class="info">
                        <div class="main">Iteresuselle</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(https://66.media.tumblr.com/5516a22e0cdacaa85311ec3f8fd1e9ef/tumblr_o45jwvdsL11qho82wo1_1280.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-tint"></i>
                    </div>
                    <div class="info">
                        <div class="main">Idiefe</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
            <div class="option"
                style="--optionBackground:url(https://66.media.tumblr.com/f19901f50b79604839ca761cd6d74748/tumblr_o65rohhkQL1qho82wo1_1280.jpg);">
                <div class="shadow"></div>
                <div class="label">
                    <div class="icon">
                        <i class="fas fa-sun"></i>
                    </div>
                    <div class="info">
                        <div class="main">Inatethi</div>
                        <div class="sub">Omuke trughte a otufta</div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section>

<script>
    $(".option").click(function(){
    $(".option").removeClass("active");
    $(this).addClass("active");
    
    });


</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
