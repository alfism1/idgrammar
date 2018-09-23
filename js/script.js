var clickedItem;	// mengambil error/warning yang di klik

$(document).mouseup(function(e)
{
    var container = $(".idgrammar");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0)
    {
				var target = $( e.target );
				if ( !target.is( "a" ) ) {
					$("div.popover").remove();
				}
    }
});

$(document).ready(function(){

	// load kamus
	// loadKamus();

	// $(".warning, .error").click(function(){
	$("[data-status='Error']").click(function(){
		clickedItem = $(this).html();

		$('body').popover('dispose');

		// if (status=="Error") {
		var correction = $(this).data("correction");
		var message = $(this).data("message");
    var id = $(this).data("id");
		var content = "<div id='correction'>Pembenaran : "+
      "<br><u><a style='color:blue;cursor:pointer;font-size:150%;' onclick='fixError(\""+id+"\",\""+correction+"\")'>"+correction+"</a></u>"+
      "<br><br><u><a style='color:blue;cursor:pointer;font-size:80%;' onclick='ignore(\""+id+"\")'>Abaikan</a></u>"+
      "<br><hr>Pesan : <br><i>"+message+"</i></div>";
		// } else{
		// 	var text = $(this).data("text");
		// 	var content = "<div>"+status+" : <br><u><a style='color:blue;cursor:pointer;' onclick='tambahKamus()'>Tambah ke kamus</a></u><br><i><hr>Tidak ditemukan di kamus kata</i></div>";
		// }

		$('body').popover({
		    selector: "[data-status='Error']",
		    trigger: 'click',
		  	content : content,
		    placement: "bottom",
		    html: true,
		});

	});
});

function fixError(id, correction){
	// console.log($("#correction").html());

	var tag = $("[data-status='Error'][data-id='"+id+"']");
	tag.html(correction);
	tag.removeAttr("class");

	$(".popover").remove();
}

function ignore(id){
	// console.log($("#correction").html());

	var tag = $("[data-status='Error'][data-id='"+id+"']");
	// tag.html(correction);
	tag.removeAttr("class");

	$(".popover").remove();
}

// function tambahKamus(){
// 	var tag = $("[class='warning'][data-text='"+clickedItem+"']");
// 	var value = tag.html();
// 	$(".popover").remove();
//
// 	// ajax proses
// 	$.ajax({
// 	  type: "POST",
// 	  url: "http://localhost/idgrammar/cookie.php",
// 	  data: "kata="+value,
// 	  success: function(msg){
// 			loadKamus();
// 		}
// 	});
// }
//
// function loadKamus(){
// 	// ajax proses
// 	$.ajax({
// 	  type: "GET",
// 	  url: "http://localhost/idgrammar/cookie.php?act=load",
// 	  success: function(msg){
// 			$("#kamus").html(msg);
// 		}
// 	});
// }
//
// function removeKamus(kata){
// 	// ajax proses
// 	$.ajax({
// 	  type: "GET",
// 	  url: "http://localhost/idgrammar/cookie.php?act=remove&kata="+kata,
// 	  success: function(msg){
// 			loadKamus();
// 		}
// 	});
// }
//
// function escapeHtml(text) {
//   var map = {
//     '&': '&amp;',
//     '<': '&lt;',
//     '>': '&gt;',
//     '"': '&quot;',
//     "'": '&#039;'
//   };
//
//   return text.replace(/[&<>"']/g, function(m) { return map[m]; });
// }
