
		
		<div class="footer__top__09">
			
			<div class="container">
			
			<div class="h__09">
				<h3>Get started now!</h3>
				<p>Take the first step to manage your health better!
</p>
<p>Download the app now and make sure you never miss a dose.</p>
				
				<ul class="admission_open_l">
                     <li><a class="adm" href="https://play.google.com/store/apps/details?id=com.caredose.caredose_patient_app&hl=en_IN"><img src="images/w12.png"></a></li>
                     <li><a class="adm changeback" href="https://apps.apple.com/in/app/caredose/id1468529008"><img src="images/w13.png"></a></li>
                  </ul>
				
				</div>
				
				<div class="footer__logo__and__content">
				
				<div class="col-md-5">
				<div class="left_logo__footer">
					<img src="images/logo__f.png"/>
					</div>
					
					
				</div>
				<div class="col-md-7">
				
				<div class="footer__contents">
				<ul class="menus_ection">
        
<!--
        <li><a href="index.php">Home</a></li> 
        <li><a href="about.php">  About us  </a></li> 
-->
                       
<!--                       <li><a href="organize.php">  How we organise </a></li>-->
<!--        <li><a href="contact.php"> Contact Us</a></li> -->
       
            
            </ul>
					</div>
				</div>
				 </div>
			</div>
		
		
		</div>

      <footer class="ada">
          <div class="container">
			  
			  
			  
			  
			  
          <div class="lower-footer">

              <div class="copyright is-hidden-mobile"><small class="copya">Copyright © 2020 caredose. All rights reserved. Designed by <a href="https:://www.makemaya.com">Makemaya</a></small>
              </div>
          </div>
			  </div>
        </footer> 
  

        
        
        
        
        
        

  
 

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="js/jquery.bxslider.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
        
          <script type="text/javascript">
    $(document).on('ready', function() {
 $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 80,
        slidesToScroll: 3
      });
 
 
    });
</script>
    <script>
		var disable_scroll = false;
$(window).scroll(function(event) {
    if(disable_scroll == false){
        if($(window).scrollTop()+400 >= $("#page-1").offset().top){
           var pagenum = $("#page-1").attr('data-page-no');
			//alert(pagenum);
        }
        if($(window).scrollTop()+240 >= $("#page-2").offset().top){
           var pagenum = $("#page-2").attr('data-page-no');
        }
        if($(window).scrollTop()+240 >= $("#page-3").offset().top){
           var pagenum = $("#page-3").attr('data-page-no');
        }
        $("#pagenum").val(pagenum);
    }
});
$("#pagenum").on('input',function(){
    $(".page").each(function(){
        if($(this).attr('data-page-no') == $("#pagenum").val()){
            disable_scroll = true;
            var selected = $(this);
            $('html,body').animate({
                scrollTop: $(this).offset().top + 1
            }, function(){
                var pagenum = $(selected).attr('data-page-no');
                $("#pagenum").val(pagenum);
                disable_scroll = false;
            });
            return;
        }
    });
});

		</script>   
        
<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 40,
			infiniteLoop: true,
			slideWidth: 660,
			minSlides: 5,
			maxSlides: 5,
			speed: 800,
		});
	});
</script>
        
        <script>
	$(document).ready(function(){
		$('.bxslider_ourclients').bxSlider({
			mode: 'horizontal',
			moveSlides: 1,
			slideMargin: 0,
			infiniteLoop: true,
			slideWidth: 660,
			minSlides: 4,
			maxSlides: 4,
			speed: 800,
		});
	});
</script>

<script>
        
$(function(){
  $('.content_bxslider').bxSlider({
    mode: 'fade',
    captions: true,
   // slideWidth: 600
  });
});
        </script>


	   <script>
      $(document).ready(function() {



        $(".toggle-accordion").on("click", function() {
          var accordionId = $(this).attr("accordion-id"),
            numPanelOpen = $(accordionId + ' .collapse.in').length;

          $(this).toggleClass("active");

          if (numPanelOpen == 0) {
            openAllPanels(accordionId);
          } else {
            closeAllPanels(accordionId);
          }
        })

        openAllPanels = function(aId) {
          console.log("setAllPanelOpen");
          $(aId + ' .panel-collapse:not(".in")').collapse('show');
        }
        closeAllPanels = function(aId) {
          console.log("setAllPanelclose");
          $(aId + ' .panel-collapse.in').collapse('hide');
        }

      });

   </script>	
	
<script>
		$(document).ready(function() {

// Gets the video src from the data-src on each button

var $videoSrc;  
$('.video-btn').click(function() {
    $videoSrc = $(this).data( "src" );
});
console.log($videoSrc);

  
  
// when the modal is opened autoplay it  
$('#myModal').on('shown.bs.modal', function (e) {
    
// set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
$("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
})
  


// stop playing the youtube video when I close the modal
$('#myModal').on('hide.bs.modal', function (e) {
    // a poor man's stop video
    $("#video").attr('src',$videoSrc); 
}) 
    
    


  
  
// document ready  
});

		</script>
		
		<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
		
		
		
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<style>
	   .video_carousel_control_left, .video_carousel_control_right {
	border: none;
}
	   </style>
        
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      
      <div class="modal-body">

       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>        
        
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
</div>
        
        
      </div>

    </div>
  </div>
</div> 
  
	</body>

</html> 
