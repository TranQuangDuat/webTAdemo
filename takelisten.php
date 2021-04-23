<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<link rel="stylesheet" type="text/css" href="stylelisten.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="jquery-3.6.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
	
</head>
<body>
<div class="box-content">
	<div id="menu-content">
		<div class="menu-bar">
			<ul class="menu-list" id="one">
				<li><a href="index.html">mini-Toeic</a></li>
				<li><a href="reading.html">Listening</a></li>
				<li><a href="listen.html">Reading</a></li>
			</ul>
		</div>
		<div class="menu-bar">
			<ul class="menu-list" id="two">
				<li>
					<a id="btn-intro" href="#">Instruction</a>
				</li>
				<li>
					<a id="btn-modal" href="#">Exit</a>
					<div id="modal" class="hidden">
						<div class="modal-box" id="box">
							<div class="modal-menu">
								<h2>Are you sure want to exit?</h2>
								<button class="btn-X">X</button>
							</div>
							<hr>
							<div class="modal-content">
								<ul class="nav-item">
									<li class="item1"><a href="#">Exit</a></li>
									<li class="item2"><a href="#">Retake the test</a></li>
									<li class="item3"><a class="btn-X" href="#">Cancel</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
    <!--Listening-->
    <div id="box-listening">
        <div id="contentLeft">
            <div id="video">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ZFMY96B7W4Q" 
				title="YouTube video player" frameborder="0"
				 allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
				</iframe>
            </div>
			
            <!--Cau hoi-->
			<form method="POST" action="passexam.php" autocomplete="off">
          		<div id="showbox">
                	<div class="box1">
						<h3>Question 1-6</h3>
						<p>Complete the form below.</p>
						<p>Write<span> NO MORE THAN THREE WORDS AND/OR A NUMBER </span>for each answer.</p>
						<h2>CUSTOMER ORDER FORM</h2>
							<div class="example">
								<p>Example:</p>
								<p>ORDER PLACED BY: John Carter</p>
							</div>
							<div class="q12">
								<p id="aws1">
									<strong>Account number 1 </strong>
									<input type="text" value=""  name="text1" >
								</p>
					
								<p id="aws2">
									<strong>Company Name 2 </strong>
									<input type="text" value=""  name="text2">
								</p>
							</div>
							<div class="q34">
								<p>Envelopes</p>
								<p id="aws4">
									<strong>Quantity &nbsp; &nbsp; <b>3</b> </strong>
									<input type="text" value=""  name="text3">
								</p>
					
								<p id="aws4">
									<strong>Quantity &nbsp; &nbsp; <b>4</b> </strong>
									<input type="text" value=""  name="text4">
								</p>
							</div>
							<div class="q56">
								<p>Photocopy paper</p>
								<p id="aws5">
									<strong>Colour      &nbsp; &nbsp; <b>5</b> </strong>
									<input type="text" value=""  name="text5">
								</p>

								<p id="aws6">
									<strong>Quantity &nbsp; &nbsp; <b>6</b> </strong>
									<input type="text" value=""  name="text6">
								</p>
							</div>
					</div>
              	  <div class="box2">
						<div>
							<h3>Question 7-9</h3>
							<p>List  <span> THREE </span> additional things that the man requests. </p>
							<p>Write <span> NO MORE THAN THREE WORDS </span> for each answer.</p>
						</div>
					<div class="q79">
						<p id="aws7">
							<strong> <b>7</b> </strong>
							<input type="text" value=""  name="text7">
						</p>
				
						<p id="aws8">
							<strong> <b>8</b> </strong>
							<input type="text" value=""  name="text8">
						</p>

						<p id="aws9">
							<strong> <b>9</b> </strong>
							<input type="text" value=""  name="text9">
						</p>
					</div>
				</div>
                <div class="box3">
					<div>
						<h3>Question 10</h3>
						<p>Complete the notes.</p>
						<p>Write <span> NO MORE THAN THREE WORDS </span> for your answer.</p>
					</div>
					<div class="q10">
						<p id="aws10">
							<strong>Special instructions: &nbsp; &nbsp; <b>Deliver goods 10</b> </strong>
							<input type="text" value=""  name="text10">
						</p>
					</div>
				</div>
				<div class="box4">
					<h2>---End of the Test---</h2>
					<p>Please Submit to view your score, solution and explanations.</p>
					<button class="btn-Sub" type="submit">Submit</button>
				</div>
				</form>
            </div>
        </div>
        <div id="contentRight">
			<h3>Question Pallete</h3>
			<hr>
            <ul class="noidung">
				<li id="noidung1">
					<a id="quest1" aria-label="Question 1">01</a>
				</li>
				<li id="noidung2">
					<a id="quest2" aria-label="Question 2">02</a>
				</li>
				<li id="noidung3">
					<a id="quest3" aria-label="Question 3">03</a>
				</li>
				<li id="noidung4">
					<a id="quest4" aria-label="Question 4">04</a>
				</li>
				<li id="noidung5">
					<a id="quest5" aria-label="Question 5">05</a>
				</li>
				<li id="noidung6">
					<a id="quest6" aria-label="Question 6">06</a>
				</li>
				<li id="noidung7">
					<a id="quest7" aria-label="Question 7">07</a>
				</li>
				<li id="noidung8">
					<a id="quest8" aria-label="Question 8">08</a>
				</li>
				<li id="noidung9">
					<a id="quest9" aria-label="Question 9">09</a>
				</li>
				<li id="noidung10">
					<a id="quest10" aria-label="Question 10">10</a>
				</li>
			</ul>
			<hr>
			<div>
				
				<a class="solution" href="#">Solution</a>
			</div>
        </div>
    </div>
</div>


<script type="text/javascript" src="takelisten.js"></script>

</body>
</html>

