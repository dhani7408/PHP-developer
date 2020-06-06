	<script>
 	new WOW().init();
 	</script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$(".menu-icon").on("click", function(){
 				$("nav ul").toggleClass("showing");
 				$("nav ul li").css("background","#dc332b");
 				$("nav ul li").css("transition","all ease 1s");
 				$("nav ul").toggle();
 			});
 		});
 	</script>