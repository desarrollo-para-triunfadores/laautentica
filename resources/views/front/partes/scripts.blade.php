
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>

		<script src="{{asset('plantillas/Avada/assets/js/html5shiv.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/respond.js')}}"></script>
		<![endif]-->

		<!--[if IE 8]>
	    <script src="{{asset('plantillas/Avada/assets/js/selectivizr.js')}}"></script>
	    <![endif]-->

        <script src="{{asset('plantillas/Avada/assets/js/jquery-2.1.3.min.js') }}"> </script>
		<script src="{{asset('plantillas/Avada/assets/js/bootstrap.js')}}"></script>


		<script src="{{asset('plantillas/Avada/assets/js/jquery.actual.min.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/jquery.scrollTo.min.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/contact.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/script.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/smoothscroll.js')}}"></script>

		<script type="text/javascript">
		jQuery(document).ready(function($){

		  	$(window).scroll(function() {
		  		
		  		console.log("asdf");

				if ($(window).scrollTop() > 100 ){
		    
		 		$('.top-header').addClass('shows');
		    
		  		} else {
		    
		   	 	$('.top-header').removeClass('shows');
		    
		 		};   	
			});
0..
		.
		000.000000000000.
				.
		  });

		jQuery('.scroll').on('click', function(e){		
				e.preventDefault()
		    
		  jQuery('html, body').animate({
		      scrollTop : jQuery(this.hash).offset().top
		    }, 1500);
		});
		</script>