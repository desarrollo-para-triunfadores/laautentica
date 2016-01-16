<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-65677009-1', 'auto');
	ga('send', 'pageview');

</script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="{{asset('plantillas/Avada/assets/js/jquery-2.1.3.min.js') }}"> </script>
		<script src="{{asset('plantillas/Avada/assets/js/bootstrap.js')}}"></script>
		<script src="{{asset('plantillas/Avada/assets/js/bootstrap.min.js')}}"></script>

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