	$(function(){
	$('#sidebtn').click(function(){
	$('#accNav').toggleClass('red');

	var $menu = $('#accNav');

	if($menu.hasClass('red')){$menu.animate({left:'-25px'},500,'easeInBack');
								$('#sidebtn img').attr('src','img/Nav_rbtn.png');} 

	else {$menu.animate({left:'-100px'},500,'easeOutBack');
		$('#sidebtn img').attr('src','img/Nav_lbtn.png');};
	
		});
	});
