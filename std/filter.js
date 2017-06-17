/*clicking tht filter evetnt*/
$("#wrap").on("click","#a", function(e){
 	filter = $(this).attr("name");
    alert('click :'+filter);
  $(".display").empty();
    load(filter);

});
/*code to change  img source with javascript*/







/*function defining*/
function load(filter)
{
	 $.ajax({
 		type: "POST",
  		url: "load.php",
		data: { filter : filter },
						success: function(a)
						{
							//var jsonString = '[{"mid":"7","msg":"maafssf","user":"ama"},{"mid":"32","msg":"jo","user":"ama"}]';
						var a = $.parseJSON(a);
						$.each(a, function(key, val)
							{
							//	alert(val.rid);
								/*send data index file to display*/
					 		display(val.rid, val.rent, val.lname, val.discription);
							});


						}
			});
}


         

/*finction for displaying*/
function display(rid,rent,loc,discription) {

var room = '<div class="col-sm-4 col-lg-4 col-md-4"><div class="thumbnail"><div id="imgdiv"><img id="img" src="uploads/';
room += rid+'.jpg"' + 'alt=""></div>';
room += ' <div class="caption"><h4 class="pull-right">'+rent+'</h4>';
//room += '<h4><a href="single_room.php?rid='+rid+'>'+loc+'</a>';
room += '<h4><a href="single_room.php?rid='+rid+'">'+loc+'</a></h4>';
room += '<p>'+discription+'</p> </div>';
room += '<div class="ratings"><p class="pull-right">6 reviews</p><p><span class="glyphicon glyphicon-star"></span>';
room += '<span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span>';
room += '<span class="glyphicon glyphicon-star-empty"></span>';
room += '<span class="glyphicon glyphicon-star-empty"></span></p></div></div></div>';
//alert(discription);
    $(".display").append(room);
//alert('ok');







//	s = $('#img').attr('src');
//	img.src = 'uploads/' + img +'.jpg';
//	alert(s);

}





/* java script for status toggle  effect*/
$('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})

/* for slider*/
