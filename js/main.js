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

	$('.bottonClickDiv').click(function() {
		$("#catagoryNameId").text("← " + $(this).attr("id"));
	    $('#target').show(0);
	    $('.home').hide(0);

		$.getJSON("data/" + $(this).attr("id") + ".json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            for (var i = 0; i < arrItems.length; i++) {
				$(".parent").append(
					'<div class="col-sm-4 cardPad">' + 
						'<div>' + 
							'<div class="qoCard" style="background-image: url(' + arrItems[i].quoteImgPath + ');">' +
								'<div class="transbox">' +
									'<p id = "' + arrItems[i].quoteId + '">“' + 
										arrItems[i].quoteText
									 + '”</p>' +
								'</div>' +
							'</div>' +
							'<div>' +
								'<button onclick="copyToClipboard(' + String("'#") + arrItems[i].quoteId + String("'") + ')">Copy</button>'+
							'</div>' +
						'</div>' +
					'</div>');
            }
		});	    
	});

	$('.backToHome').click(function(){
		$('#target').hide(0);
		$('.home').show(0);
		$(".parent").empty();
	});	

	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myDIV *").filter(function() {
	      $(this).toggle($(this).attr("name").toLowerCase().indexOf(value) > -1)
	    });
	  });
	});

	/*$('.test').click( {categoryName:"test"}, function(event) {
		$("#catagoryNameId").text("←" + event.data.categoryName);
		console.log($(this).attr("id"))
	    $('#target').show(0);
	    $('.home').hide(0);
	});*/
		