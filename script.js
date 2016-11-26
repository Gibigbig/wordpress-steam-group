jQuery(document).ready(function($) {

  $.ajax({
                	type: "POST",
                	url: "steam.php",
                	data: {
                		
                	},
                	cache: false,
                	success: function(html){
                		$("#steam_group_gib").html(html);
                	}
                });	
 

});
