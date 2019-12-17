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
<div class="parent"></div>
</body>

</html>

<!--navBar-->
<script src="js/navbar_classie.js"></script>
<script src="js/gnmenu.js"></script>

<script src="js/main.js"></script>

<script type="text/javascript">


      $("button").click(function(){
		$(".parent").append(
			'<div class="col-sm-4 cardPad">' + 
				'<div>' + 
					'<div class="cat2 qoCard">' +
						'<div class="transbox">' +
							'<p id = "q1">“A lie can travel half way around the world while the truth is putting on its shoes.”</p>' +
						'</div>' +
					'</div>' +
					'<div>' +
						'<button onclick="copyToClipboard(' + String("'") + '#q1' + String("'") + ')">Copy</button>'+
					'</div>' +
				'</div>' +
			'</div>');
      });


</script>

<style type="text/css">
	        #parent { 
            height: 100px; 
            width: 300px; 
            background: green; 
            margin: 0 auto; 
        } 
        #newElement { 
            height: 40px; 
            width: 100px; 
            margin: 0 auto; 
            color: white 
        } 
</style>