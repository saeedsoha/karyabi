


 <section class="section-contact" style="min-height: 500px; width: 100vw">
    <div class="canvas-wrapper">
      <canvas id="stars"></canvas>
    </div>
    <div class="container position-relative">
      <div class="row justify-content-between">
        {{-- Left side column --}}
        <div class="col-lg-6 col-md-6">
          <div class="contact-form ">
            <p class="card-description main-p"> GET IN TOUCH </p>
            <h4 class="card-title main-h2">Contacts. </h4>
            <br><br><br>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1 pb-1">Your Name</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="What i your Name?">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Your Email</label>
                <input type="email" class="form-control" id="exampleInputEmail3" placeholder="What's your Email">
              </div>
  
  
              <div class="form-group">
                <label for="exampleTextarea1">Your Message</label>
                <textarea class="form-control" id="exampleTextarea1" rows="4"> What do you want share with us?</textarea>
              </div>
              <br><br>
              <button type="submit" class="btn mr-2">Submit</button>
            </form>
          </div>
        </div>
  
        <div class="col-lg-6 col-md-6" style="height:700px;">
          <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center" style="height:700px;" >
              <video id="video-background" autoplay loop muted>
                <source src="{{asset('upload/contact-files/world2.mp4')}}" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  






 <script>
    // DOM selectors
const stars = document.getElementById('stars');
const starsCtx = stars.getContext('2d');
const slider = document.querySelector(".slider input");
const output = document.querySelector("#speed");

// global variables
let screen, starsElements, starsParams = { speed: 2, number: 300, extinction: 4 };

// run stars
setupStars();
updateStars();

// handle slider
output.innerHTML = slider.value;
slider.oninput = function() {
    output.innerHTML = this.value;
    starsParams.speed = this.value;
};

// update stars on resize to keep them centered
window.onresize = function() {
    setupStars();
};

// star constructor
function Star() {
    this.x = Math.random() * stars.width;
    this.y = Math.random() * stars.height;
    this.z = Math.random() * stars.width;

    this.move = function() {
        this.z -= starsParams.speed;
        if (this.z <= 0) {
            this.z = stars.width;
        }
    };

    this.show = function() {
        let x, y, rad, opacity;
        x = (this.x - screen.c[0]) * (stars.width / this.z);
        x = x + screen.c[0];
        y = (this.y - screen.c[1]) * (stars.width / this.z);
        y = y + screen.c[1];
        rad = stars.width / this.z;
        opacity = (rad > starsParams.extinction) ? 1.5 * (2 - rad / starsParams.extinction) : 1;

        starsCtx.beginPath();
        starsCtx.fillStyle = "rgba(255, 255, 255, " + opacity + ")";
        starsCtx.arc(x, y, rad, 0, Math.PI * 2);
        starsCtx.fill();
    }
}

// setup <canvas>, create all the starts
function setupStars() {
    screen = {
        w: window.innerWidth,
        h: window.innerHeight,
        c: [ window.innerWidth * 0.5, window.innerHeight * 0.5 ]
    };
    window.cancelAnimationFrame(updateStars);
    stars.width = screen.w;
    stars.height = screen.h;
    starsElements = [];
    for (let i = 0; i < starsParams.number; i++) {
        starsElements[i] = new Star();
    }
}

// redraw the frame
function updateStars() {
    starsCtx.fillStyle = "black";
    starsCtx.fillRect(0, 0, stars.width, stars.height);
    starsElements.forEach(function (s) {
        s.show();
        s.move();
    });
    window.requestAnimationFrame(updateStars);
}
 </script>