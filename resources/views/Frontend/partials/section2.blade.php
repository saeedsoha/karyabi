
  <link rel="stylesheet" href="{{asset('css/overview.css')}}">


<section class="section2" >
  <div class="container-fluid text-center">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-10 " >
        <div class="text-center">
          <p class="sm-text-18 text-secondary tracking-wider uppercase ">Introduction</p>
        </div>
        <div class="text-center mt-4">
          <h2 class="md-text-60 sm-text-50 xs-text-40 text-white font-black pb-3">Overview</h2>
        </div>
        <div class="mx-auto mt-8 max-w-3xl ">
          <p class="text-secondary leading-30 text-17">I'm a skilled software developer with experience in TypeScript and JavaScript, and expertise in frameworks like React, Node.js, and Three.js. I'm a quick learner and collaborate closely with clients to create efficient, scalable, and user-friendly solutions that solve real-world problems. Let's work together to bring your ideas to life!</p>
        </div>
      </div>
    </div>
  </div>
<br><br><br>
<div class="container container-card card-animate">
  <div class="row mt-8 justify-content-center">
    <div class="col-md-4 col-lg-3 mb-4">
      <div class="card" style="width: 200px; height: 300px;">
        <div class="card-body">
          <img class="ronded " src="{{asset('upload/cards_icons/it.png')}}" width="100" alt="">
          <br>
          <h5 class="card-title">Step 1</h5>
          <p class="card-text">Web Developer</p>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 mb-4 card-animate">
      <div class="card" style="width: 200px; height: 300px;">
        <div class="card-body">
          <img class="ronded " src="{{asset('upload/cards_icons/it2.png')}}" width="100" alt="">
          <br>
          <h5 class="card-title">Step 1</h5>
          <p class="card-text">Web Developer</p>        </div>
      </div>
    </div>
    <div class="col-md-8 col-lg-3 mb-4 card-animate">
      <div class="card" style="width: 200px; height: 300px;">
        <div class="card-body">
          <img class="ronded " src="{{asset('upload/cards_icons/programmer.png')}}" width="100" alt="">
          <br>
          <h5 class="card-title">Step 1</h5>
          <p class="card-text">Web Developer</p>        </div>
      </div>
    </div>
    <div class="col-md-4 col-lg-3 mb-4 card-animate">
      <div class="card" style="width: 200px; height: 300px;">
        <div class="card-body">
          <img class="ronded " src="{{asset('upload/cards_icons/work-in-progress.png')}}" width="100" alt="">
          <br>
          <h5 class="card-title">Step 1</h5>
          <p class="card-text">Web Developer</p>        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script>

  $(window).scroll(function() {
    $(".card-animate").each(function() {
      var position = $(this).offset().top;
      var viewTop = $(window).scrollTop() + $(window).height() * 0.75;
      if (position < viewTop) {
        $(this).css({
          opacity: 1,
          transform: "translateY(0)"
        });
      }
    });
  });
</script>
