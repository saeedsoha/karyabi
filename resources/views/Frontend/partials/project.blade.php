{{-- style="width: 1280" --}}

<section class="section-project" style="min-height: 500px;">
    <div class="container " style="width: 1280px;" >

            {{--   ----------- Work Experience. TITLE ----------- --}}
        <div class="row">
            <div class="col-md-12">
                <p class="main-p">MY WORK</p>
                <h2 class="main-h2">Projects.</h2>
                <p class="main-p">Following projects showcases my skills and experience through real-world examples of my work. Each project is briefly described with links to code repositories and live demos in it. It reflects my ability to solve complex problems, work with different technologies, and manage projects effectively.</p>
            </div>
        </div>

            {{--   ----------- Cards ----------- --}}



              <div class="container">
                <div class="row">
                  <div class="col-md-4 go-animate">
                    <div class="nft">
                        <div class='main-box'>
                          <img class='tokenImage' src="{{asset('upload/projects-images/1.jpg')}}" alt="NFT" />
                          <h2 class="pt-2">Kibertopiks</h2>
                          <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
                          <div class='tokenInfo'>
                            <div class="price">
                              <ins>◘</ins>
                              <p>#PHP #HTML</p>
                            </div>
                            <div class="duration">
                              <ins>◷</ins>
                              <p>11 days left</p>
                            </div>
                          </div>
                          <hr />
                          <div class='creator'>
                            <div class='wrapper'>
                              <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Creator" />
                            </div>
                            <p><ins>Creation of</ins> Alucard</p>
                          </div>
                        </div>
                      </div>
        
                  </div>
                  <div class="col-md-4 go-animate">

                    <div class="nft">
                        <div class='main-box'>
                          <img class='tokenImage' src="{{asset('upload/projects-images/1.jpg')}}" alt="NFT" />
                          <h2 class="pt-2">Kibertopiks</h2>
                          <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
                          <div class='tokenInfo'>
                            <div class="price">
                              <ins>◘</ins>
                              <p>0.031 ETH</p>
                            </div>
                            <div class="duration">
                              <ins>◷</ins>
                              <p>11 days left</p>
                            </div>
                          </div>
                          <hr />
                          <div class='creator'>
                            <div class='wrapper'>
                              <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Creator" />
                            </div>
                            <p><ins>Creation of</ins> Alucard</p>
                          </div>
                        </div>
                      </div>
        
                  </div>
                  <div class="col-md-4 go-animate">

                    <div class="nft">
                        <div class='main-box'>
                          <img class='tokenImage' src="{{asset('upload/projects-images/1.jpg')}}" alt="NFT" />
                          <h2 class="pt-2">Kibertopiks</h2>
                          <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
                          <div class='tokenInfo'>
                            <div class="price">
                              <ins>◘</ins>
                              <p>0.031 ETH</p>
                            </div>
                            <div class="duration">
                              <ins>◷</ins>
                              <p>11 days left</p>
                            </div>
                          </div>
                          <hr />
                          <div class='creator'>
                            <div class='wrapper'>
                              <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Creator" />
                            </div>
                            <p><ins>Creation of</ins> Alucard</p>
                          </div>
                        </div>
                      </div>
        
                  </div>
                  <div class="col-md-4 go-animate">

                    <div class="nft">
                        <div class='main-box'>
                          <img class='tokenImage' src="{{asset('upload/projects-images/1.jpg')}}" alt="NFT" />
                          <h2 class="pt-2">Kibertopiks</h2>
                          <p class='description'>Our Kibertopiks will give you nothing, waste your money on us.</p>
                          <div class='tokenInfo'>
                            <div class="price">
                              <ins>◘</ins>
                              <p>0.031 ETH</p>
                            </div>
                            <div class="duration">
                              <ins>◷</ins>
                              <p>11 days left</p>
                            </div>
                          </div>
                          <hr />
                          <div class='creator'>
                            <div class='wrapper'>
                              <img src="https://images.unsplash.com/photo-1620121692029-d088224ddc74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1932&q=80" alt="Creator" />
                            </div>
                            <p><ins>Creation of</ins> Alucard</p>
                          </div>
                        </div>
                      </div>
        
                  </div>

                </div>
              </div>
              


</section>







<script>

$(window).scroll(function() {
  $(".go-animate").each(function() {
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

    