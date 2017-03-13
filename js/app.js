$(document).ready(function() {
	
	$(".pokemon").draggable({
		cursor: "move",
		revert: "invalid",
		snap: "section#container article div",
		containment: "section#container",
		drag: function(){
			if($(this).hasClass("firstEvo")) {
				$("#secondEvolution div").addClass("active");
			}
			if($(this).hasClass("secondEvo")) {
				$("#thirdEvolution div").addClass("active");
			}
		},
		stop: function() {
			$("#secondEvolution div, #thirdEvolution div").removeClass("active");
		}
	});

	$("#secondEvolution div").droppable({
		accept: ".firstEvo",
		drop: function(e, ui){
			$(ui.draggable).removeClass("firstEvo").addClass("secondEvo");
		}
	});
	$("#thirdEvolution div").droppable({
		accept: ".secondEvo",
		drop: function(e, ui){
			$(ui.draggable).removeClass("secondEvo").addClass("thirdEvo");
		}
	});

});