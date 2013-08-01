<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>



	<div class="site-info text-center">
		<?php do_action( 'twentytwelve_credits' ); ?>
		<div id="copyright">
		 Copyright © 
		 <a href="<?php echo site_url() ?>">OStonBox</a> 2013. All rights reserved.
		 <br/>
		 Powered by 
		 <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>">WordPress</a>
		</div>
	</div><!--/.site-info-->

	
</div><!--/.fluid-container-->



<div style="display: none;" id="gotop">Back to top</div>
<script type='text/javascript'>
	backTop=function (btnId){
		var btn=document.getElementById(btnId);
		var d=document.documentElement;
		var b=document.body;
		window.onscroll=set;
		btn.onclick=function (){
			btn.style.display="none";
			window.onscroll=null;
			this.timer=setInterval(function(){
				d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.1);
				if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
			},10);
		};
		function set(){btn.style.display=(d.scrollTop+b.scrollTop>100)?'block':"none"}
	};
	backTop('gotop');
</script>
<!-- #gotop -->

<?php wp_footer(); ?>
</body>
</html>