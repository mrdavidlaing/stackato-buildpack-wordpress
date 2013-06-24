<?php
function sbw_inject_debug_footer() {
	if (DOING_AJAX) return;
?>
<style>
	#debug_footer {
	   position:fixed;
	   left:0px;
	   bottom:0px;
	   height:50px;
	   width:100%;
	   background:#999;
	   padding:10px;
	}
	#debug_footer .inner {
	  background: #FFF;
		width: 98%;
		text-align: center;
		padding: 5px;
	}
</style>
<div id="debug_footer">
	<div class="inner">
		<a href='http://localhost:9222' target="_blank" 
			 onclick="setTimeout(function() { window.location.reload(); },2000);">
			 Launch debugger (Chrome only)
		</a>
	</div>
</div>
<?php
}

add_action( 'shutdown', 'sbw_inject_debug_footer' );