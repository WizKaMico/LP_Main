<section id="home" class="welcome-hero">
   <div class="container">  
		<?php if(!empty($_GET['step'])) { ?>
		<?php switch($_GET['step']) { 
			
			case "STEP2":
				$code = $_GET['code'];
			    $consultation = $portCont->checkConsultation($code);
				include('./route/web/route/step2.php');
				break;
			case "STEP3":
				$code = $_GET['code'];
				$consultation = $portCont->checkConsultation($code);
				include('./route/web/route/step3.php');
				break;
			case "FINAL":
				$code = $_GET['code'];
				$consultation = $portCont->checkConsultation($code);
				include('./route/web/route/final.php');
				break;
			
	    } ?>
		<?php } else {  ?>
		<?php include('./route/web/route/step1.php'); ?>
	    <?php } ?>
	</div>
</section>

<style>


#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #000;
	display: block;
	font-size: 1.8em;
	font-weight: 500;
  padding: 12px 0;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="date"], #contact input[type="number"], #contact select, #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="date"]:hover, #contact input[type="number"]:hover, #contact select, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#ff545a;
	color:#FFF;
	margin:0 0 5px;
	padding: 12px 24px;
	font-size:15px;
	border-radius:20px;
	font-weight: bold; 
}

#contact button[type="submit"]:hover {
	background:#ff545a;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}


</style>

		