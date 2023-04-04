
<header id="header-section" class="header-section position-relative" style="height:100vh; width: 100%; background-image: url({{ asset('upload/bg/bg2.jpg') }}); background-size: cover;">
   

        <div id="header-content-1" style="position: absolute; top: 25%; left: 35%; transform: translate(-50%, -50%);display: none;" class="d-flex flex-column justify-content-center align-items-center mt-5  " >
            <div class="bg-primary-c rounded-circle" style="width: 1.5rem; height: 1.5rem;"></div>
            <div class="violet-gradient" style="width: 0.15rem; height: 20rem;"></div>
        </div>
        
        <div id="header-content-2" style="position: absolute; top: 26%; left: 36%; transform: translate(0, -60%); display: none;" >
            <h1 class="font-black text-white lg-text-80px md-text-60px sm-text-50px text-40px lg-leading-98px mt-2">
                Hi, I'm <span class="text-purple">Saeid</span>
            </h1>
            <p style="line-height: 40px; font-size: 30px; " class="text-gray font-medium h5 lg-text-30px md-text-26px sm-text-20px text-16px lg-leading-40px mt-2">
                I develop Websites, Backends </br> and web applications
            </p>

        </div>
         <a href="" class="btn btn-grad" id="header-content-3" style="position: absolute; top: 46%; left:36%; transform: translate(0, -60%); display: none;">
            Try it Yourself
        </a>

 
    
    <!---------------- Cards  ------------------------>

        <section id="cards" style="display: none;" >
            <ul>
                <li>home</li>
                <li>products</li>
                <li>services</li>
                <li>contact</li>
              </ul>
        </section>


    <!---------------- Cards  ------------------------>


    <!---------------- scroll down  ------------------------>
        <section class="ScrollDown" style="display: none;">

            <svg class="arrows">
                <path class="a1" d="M0 0 L30 32 L60 0"></path>
                <path class="a2" d="M0 20 L30 52 L60 20"></path>
                <path class="a3" d="M0 40 L30 72 L60 40"></path>
            </svg>
                  
        </section>
    <!---------------- Cards  ------------------------>

</header>

<script>
    window.onload = function() {
        // Show the header content
        document.getElementById("header-content-1").classList.add("animate__animated", "animate__fadeInLeft");
        document.getElementById("header-content-1").style.display = "block";

        document.getElementById("header-content-2").classList.add("animate__animated", "animate__fadeInRight");
        document.getElementById("header-content-2").style.display = "block";

        document.getElementById("header-content-3").classList.add("animate__animated", "animate__fadeInRight");
        document.getElementById("header-content-3").style.display = "block";

        document.getElementById("cards").classList.add("animate__animated", "animate__fadeInBottom");
        document.getElementById("cards").style.display = "block";

        document.querySelector(".ScrollDown").classList.add("animate__animated", "animate__fadeIn");
        document.querySelector(".ScrollDown").style.display = "block";


        // Set the height of the header section dynamically
        if ('scrollRestoration' in history) {
            history.scrollRestoration = 'manual';
        }
        // var header = document.getElementById("header-section");
        // var contentHeight = document.getElementById("header-content-2").offsetHeight + document.getElementById("cards").offsetHeight + document.querySelector(".ScrollDown").offsetHeight;
        // header.style.height = contentHeight + "px";
    };
</script>