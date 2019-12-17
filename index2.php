<!DOCTYPE html>

<html>

<head>

	<title></title>

	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--bootstrap-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--navBar-->
	<link rel="stylesheet" type="text/css" href="css/navbar_normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/navbar_demo.css" />
	<link rel="stylesheet" type="text/css" href="css/navbar_component.css" />
	<script src="js/navbar_modernizr.custom.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

<button>Create a new div</button>

<div class="row parent">

</div>

<div id="id01"></div>
<div id="showData"></div>
</body>

</html>

<!--navBar-->
<script src="js/navbar_classie.js"></script>
<script src="js/gnmenu.js"></script>

<script src="js/main.js"></script>

<script type="text/javascript">

      $("button").click(function(){
		$.getJSON("sample.json", function (data) {

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


</script>

<script>
/*function adventure(arr) {
  var out = "";
  var i;
  for(i = 0; i<arr.length; i++) {
    out += '<a href="' + arr[i].quoteImgPath + '">' + 
    arr[i].quoteId + '</a><br>';
  }
  document.getElementById("id01").innerHTML = out;
}*/
</script>

<script>
    $(document).ready(function () {
        $.getJSON("sample.json", function (data) {

            var arrItems = [];      // THE ARRAY TO STORE JSON ITEMS.
            $.each(data, function (index, value) {
                arrItems.push(value);       // PUSH THE VALUES INSIDE THE ARRAY.
            });

            // EXTRACT VALUE FOR TABLE HEADER.
            var col = [];
            for (var i = 0; i < arrItems.length; i++) {
                for (var key in arrItems[i]) {
                    if (col.indexOf(key) === -1) {
                        col.push(key);
                    }
                }
            }

            // CREATE DYNAMIC TABLE.
            var table = document.createElement("table");

            // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.

            var tr = table.insertRow(-1);                   // TABLE ROW.

            for (var i = 0; i < col.length; i++) {
                var th = document.createElement("th");      // TABLE HEADER.
                th.innerHTML = col[i];
                tr.appendChild(th);
            }

            // ADD JSON DATA TO THE TABLE AS ROWS.
            for (var i = 0; i < arrItems.length; i++) {

                tr = table.insertRow(-1);

                for (var j = 0; j < col.length; j++) {
                    var tabCell = tr.insertCell(-1);
                    tabCell.innerHTML = arrItems[i][col[j]];
                }
            }

            // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
            var divContainer = document.getElementById("showData");
            divContainer.innerHTML = "";
            divContainer.appendChild(table);
        });
    });
</script>
