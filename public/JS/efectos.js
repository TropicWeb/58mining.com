$(document).ready(function(){
	$("#test").click(function(){
		if ($(".estacal").hasClass("key")){
			$(".estacal").removeClass("fadeInUp");
			$(".estacal").addClass("fadeOutDown");
			var delayInMilliseconds = 750; //Half second
			setTimeout(function() {
  				$(".estacal").removeClass("key");
  				$(".estares").removeClass("key2");
  				console.log("Entro in this");
			}, delayInMilliseconds);
		}else{			
			$(".estacal").removeClass("fadeOutDown");
			$(".estares").addClass("key2");
			$(".estacal").addClass("key");
			$(".estacal").addClass("fadeInUp");
			console.log("Entro en la !=");
		};
	});	
});
      
