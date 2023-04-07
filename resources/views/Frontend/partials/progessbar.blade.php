

<section class="section-progressbar">
    <div class="container" style="width: 1280">
        <div class="row">
            <div class="col-md-12">
                <p>WHAT I HAVE DONE SO FAR</p>
                <h2>Work Experience.</h2>
            </div>
        </div>
    </div>

    <div class="progress-box col-md-8">
        <img src="{{asset('upload/progress_icons/work-in-progress.png')}}" class="ronded" alt="">
        <div class="left-div">
            <div class="card-div card-div-left">
                <h3>React.js Developer</h3>
                <p>Starbucks</p>
                <ul>
                    <li>Developing and maintaining web applications using React.js and other related technologies.</li>
                    <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
                    <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
                    <li>Participating in code reviews and providing constructive feedback to other developers.</li>
                </ul>
            </div>
        </div>
        <div class="right-div ">
        </div>
    </div>
    <div class="progress-box col-md-8">
        <img src="{{asset('upload/progress_icons/work-in-progress.png')}}" class="ronded" alt="">
        <div class="left-div"> </div>
        <div class="right-div">
            <div class="card-div card-div-right">
                <h3>React.js Developer</h3>
                <p>Starbucks</p>
                <ul>
                    <li>Developing and maintaining web applications using React.js and other related technologies.</li>
                    <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
                    <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
                    <li>Participating in code reviews and providing constructive feedback to other developers.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-box col-md-8">
        <img src="{{asset('upload/progress_icons/work-in-progress.png')}}" class="ronded" alt="">
        <div class="left-div">
            <div class="card-div card-div-left">
                <h3>React.js Developer</h3>
                <p>Starbucks</p>
                <ul>
                    <li>Developing and maintaining web applications using React.js and other related technologies.</li>
                    <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
                    <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
                    <li>Participating in code reviews and providing constructive feedback to other developers.</li>
                </ul>
            </div>
        </div>
        <div class="right-div">
        </div>
    </div>
    <div class="progress-box col-md-8">
        <img src="{{asset('upload/progress_icons/work-in-progress.png')}}" class="ronded" alt="">
        <div class="left-div"> </div>
        <div class="right-div">
            <div class="card-div card-div-right">
                <h3>React.js Developer</h3>
                <p>Starbucks</p>
                <ul>
                    <li>Developing and maintaining web applications using React.js and other related technologies.</li>
                    <li>Collaborating with cross-functional teams including designers, product managers, and other developers to create high-quality products.</li>
                    <li>Implementing responsive design and ensuring cross-browser compatibility.</li>
                    <li>Participating in code reviews and providing constructive feedback to other developers.</li>
                </ul>
            </div>
        </div>
    </div>


</section>


<script>
    const progressBoxes = document.querySelectorAll('.progress-box');
    
    function animateCards() {
      progressBoxes.forEach(progressBox => {
        const cardDivs = progressBox.querySelectorAll('.card-div');
        cardDivs.forEach(cardDiv => {
          const rect = cardDiv.getBoundingClientRect();
          if (rect.left < progressBox.getBoundingClientRect().left) {
            cardDiv.classList.add('animate-left');
          } else if (rect.right > progressBox.getBoundingClientRect().right) {
            cardDiv.classList.add('animate-right');
          }
        });
      });
    }
    
    // Trigger the animation when the page loads
    animateCards();
    
    // Trigger the animation again when the user scrolls
    window.addEventListener('scroll', () => {
      animateCards();
    });
</script>
    