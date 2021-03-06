
<section id="vdsm" class=" vdsm">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
                <div class="section-title text-left"><h2><?php echo $this->lang->line('videos'); ?></h2></div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active video-box">
                            <img src="https://mnre.gov.in/img/documents/uploads/ea730c394a9c49a08a82be910f80edf0.jpg" class="img-fluid w-100" alt="">
                            <a href="https://mnre.gov.in/img/documents/uploads/f87388c6a64548229a4f565a78aa7698.mp4" class="play-btn mb-4"  data-fancybox="video" data-width="640" data-height="360"></a>
                        </div>
                        <div class="carousel-item video-box">
                            <img src="https://mnre.gov.in/img/documents/uploads/df2c76c171e74012ba8d73eafcd2d652.jpg" class="img-fluid w-100" alt="">
                            <a href="https://mnre.gov.in/img/documents/uploads/fb3e3e56a80c4df1bd2fb16eda152173.mp4" class="play-btn mb-4" data-fancybox="video" data-width="640" data-height="360"></a>
                        </div>
                        <div class="carousel-item video-box">
                            <img src="https://mnre.gov.in/img/documents/uploads/0db0bfba342f40989f8987384b0f034e.jpg" class="img-fluid w-100" alt="">
                            <a  href="https://mnre.gov.in/img/documents/uploads/57de54e300b243d58e257cc1805fd3e5.mp4" class="play-btn mb-4" data-fancybox="video" data-width="640" data-height="360"></a>
                        </div>                
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 aos-init aos-animate" data-aos="zoom-out" data-aos-delay="100">
                <div class="section-title  text-left"><h2><?php echo $this->lang->line('socials'); ?></h2></div>
                <div class="tab" role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            
                            <a class="nav-link active" id="smtab2-tab" data-toggle="tab" href="#smtab2" role="tab" aria-controls="smtab2" aria-selected="true"><i class="fa fa-facebook"></i> <?php echo $this->lang->line('facebook'); ?></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="smtab1-tab" data-toggle="tab" href="#smtab1" role="tab" aria-controls="smtab1" aria-selected="false"><i class="fa fa-twitter"></i> <?php echo $this->lang->line('twitter'); ?></a>
                        </li>                
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="smtab3-tab" data-toggle="tab" href="#smtab3" role="tab" aria-controls="smtab3" aria-selected="false"><i class="fa fa-instagram"></i> <?php echo $this->lang->line('instagram'); ?></a>
                        </li>
                    </ul>
                    <div class="tab-content"> 
                        <div class="tab-pane fade active show" style="overflow: scroll;height: 370px;" id="smtab2" role="tabpanel" aria-labelledby="smtab2-tab">
                            
                            <div id="fb-root"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="tdMCpz3o"></script>
                            <div class="fb-page" data-href="https://www.facebook.com/roshnisolarpower" data-tabs="timeline" data-width="410" data-height="370" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/roshnisolarpower" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/roshnisolarpower"><?php echo $this->lang->line('roshni_solarpower'); ?></a></blockquote></div>
                            
                        </div>
                        
                        
                        <div class="tab-pane fade" style="overflow: scroll;height: 370px;" id="smtab1" role="tabpanel" aria-labelledby="smtab1-tab">
                            <a class="twitter-timeline"  href="https://twitter.com/Roshni_Solar?ref_src=twsrc%5Etfw"><?php echo $this->lang->line('tweet_by_roshni_solar'); ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  
                        </div>
                        
                        
                        <div class="tab-pane fade" style="overflow: scroll;height: 370px;" id="smtab3" role="tabpanel" aria-labelledby="smtab3-tab">
                            <div class='embedsocial-instagram' data-ref="158801ec7bebc04f3536037bc3ecbd8f0ca473ab"></div><script>(function(d, s, id){var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/embedscript/in.js"; d.getElementsByTagName("head")[0].appendChild(js);}(document, "script", "EmbedSocialInstagramScript"));</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
.powered-by{
display: none !important
}
.developed-mob{
display: none !important
}
</style>