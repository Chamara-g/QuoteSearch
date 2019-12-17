	$('.test').click(function() {
	    $('#target').show(500);
	    $('.home').hide(0);
	    $('.Hide').show(0);
	});

	function copyToClipboard(element) {
	  var $temp = $("<input>");
	  $("body").append($temp);
	  $temp.val($(element).text()).select();
	  document.execCommand("copy");
	  $temp.remove();
	}	