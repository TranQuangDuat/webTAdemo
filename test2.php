<!DOCTYPE html>
<html>
<head>
	<title>App</title>
	<link rel="stylesheet" type="text/css" href="passexam.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<script src="jquery-3.6.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    $mark = '0';
    $text1 = $_POST['text1'];
    if($text1 == "692411"){
        $mark+=1;
    }
    $text2 = $_POST['text2'];
    if(strtolower($text2)=='rainbow communications'){
        $mark+=1;
    }
    $text3 = $_POST['text3'];
    if(strtolower($text3)=='white'){
        $mark+=1;
    }
    $text4 = $_POST['text4'];
    if(strtolower($text2)=='two boxes' or strtolower($text2)=='2 boxes' ){
        $mark+=1;
    }
    $text5 = $_POST['text5'];
    if(strtolower($text5)=='light blue'){
        $mark+=1;
    }
    $text9 = $_POST['text9'];
    if(strtolower($text9)=='catalogue'){
        $mark+=1;
    }
    $text6 = $_POST['text6'];
    if(strtolower($text6)=='10 packs' or strtolower($text6)=='10 packets'){
        $mark+=1;
    }
    $text7 = $_POST['text7'];
    if(strtolower($text7)=='disks'){
        $mark+=1;
    }
    $text8 = $_POST['text8'];
    if(strtolower($text8)=='wall calender'){
        $mark+=1;
    }
    $text10 = $_POST['text10'];
    if(strtolower($text10)=='by 11.30'){
        $mark+=1;
    }
        
    ?>
<div class="container">
        <div id="header">
            <header>
                <nav class="navbar">
                    <div id="Logo">
                        <h1><a href="index.html">mini-Toeic</a></h1>
                    </div>
                    <div class="navbar__toggle" id="mobile-menu">
                        <span class="row"></span>
                        <span class="row"></span>
                        <span class="row"></span>
                    </div>
                    <ul class="menu">
                        <li class="navbar__item">
                            <a class="link" href="index.html">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a class="link" href="reading.html">
                                <span>Reading</span>
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a class="link" href="listen.html">
                                <span>Listening</span>
                            </a>
                        </li>
                        <li class="navbar__item">
                            <a class="link" id="click"  href="Contact.html">
                                <span>Contact Us</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
    <!--Danh gia-->
        <div id="evaluated">
            <h1>Your Exam Performance</h1>
            <h3>Solution for: Customer Order</h3>
            <p> Your Band Score: <b><?php echo $mark ?>  / 9</b></p>

            <div id="evaluate">
                <div id="progress">
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            0% Correct
                        </div>
                    </div>
                    <div class="left-lower">
                        <div class="stats-block">
                            <span class="stats-value">10</span>
                            <span class="stats-title">Total Questions</span>
                        </div>
                        <div class="stats-block">
                            <span class="stats-value"><?php echo $mark ?>/10 </span>
                            <span class="stats-title">Marks</span>
                        </div>
                        <div class="stats-block">
                            <span class="stats-value">00:03</span>
                            <span class="stats-title">Time Taken</span>
                        </div>
                    </div>
                    <div id="chartContainer" data-highcharts-chart="0" style="overflow: hidden;">
                        <div id="highcharts-xae8c5d-0" dir="ltr" class="highcharts-container " style="position: relative; overflow: hidden; width: 273px; height: 300px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none;">
                            <svg version="1.1" class="highcharts-root" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="273" height="300" viewBox="0 0 273 300"><desc>Created with Highcharts 9.0.1</desc><defs><clipPath id="highcharts-xae8c5d-4-"><rect x="0" y="0" width="253" height="275" fill="none"></rect></clipPath></defs><rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="273" height="300" rx="0" ry="0"></rect><rect fill="none" class="highcharts-plot-background" x="10" y="10" width="253" height="275"></rect><rect fill="none" class="highcharts-plot-border" data-z-index="1" x="10" y="10" width="253" height="275"></rect><g class="highcharts-series-group" data-z-index="3"><g class="highcharts-series highcharts-series-0 highcharts-pie-series highcharts-tracker" data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)" style="cursor:pointer;"><path fill="#FFF263" d="M 126.47627207176951 21.0000024163716 A 116.5 116.5 0 1 1 126.33818383721466 21.000112379756075 M 126.33957281715273 22.000111415122987 A 115.5 115.5 0 1 0 126.4764757449732 22.00000239563022" class="highcharts-halo highcharts-color-2" data-z-index="-1" fill-opacity="0.25" visibility="hidden"></path><path fill="#64E572" d="M 126.47627207176951 21.0000024163716 A 116.5 116.5 0 0 1 126.35977210546652 21.000084394289814 L 126.42988605273327 79.25004219714491 A 58.25 58.25 0 0 0 126.48813603588475 79.25000120818581 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-0"></path><path fill="#FF9655" d="M 126.47627207176951 21.0000024163716 A 116.5 116.5 0 0 1 126.35977210546652 21.000084394289814 L 126.42988605273327 79.25004219714491 A 58.25 58.25 0 0 0 126.48813603588475 79.25000120818581 Z" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-1"></path><path fill="rgb(255,242,99)" d="M 126.47627207176951 21.0000024163716 A 116.5 116.5 0 1 1 126.33818383721466 21.000112379756075 M 126.41909191860734 79.25005618987804 A 58.25 58.25 0 1 0 126.48813603588475 79.25000120818581" transform="translate(0,0)" stroke="#ffffff" stroke-width="1" opacity="1" stroke-linejoin="round" class="highcharts-point highcharts-color-2"></path></g><g class="highcharts-markers highcharts-series-0 highcharts-pie-series" data-z-index="0.1" opacity="1" transform="translate(10,10) scale(1 1)"></g></g><text x="137" text-anchor="middle" class="highcharts-title" data-z-index="4" style="color:#333333;font-size:4.5em;fill:#333333;" y="126"><tspan style="font-weight:bold;">0.0</tspan></text><text x="137" text-anchor="middle" class="highcharts-subtitle" data-z-index="4" style="color:#666666;fill:#666666;" y="24"></text><text x="10" text-anchor="start" class="highcharts-caption" data-z-index="4" style="color:#666666;fill:#666666;" y="297"></text><g class="highcharts-legend" data-z-index="7"><rect fill="none" class="highcharts-legend-box" rx="0" ry="0" x="0" y="0" width="8" height="8" visibility="hidden"></rect><g data-z-index="1"><g></g></g></g><text x="263" class="highcharts-credits" text-anchor="end" data-z-index="8" style="cursor:pointer;color:#999999;font-size:9px;fill:#999999;" y="295">Highcharts.com</text><g class="highcharts-label highcharts-tooltip highcharts-color-2" style="cursor:default;white-space:nowrap;pointer-events:none;" data-z-index="8" transform="translate(38,-9999)" opacity="0" visibility="hidden"><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 72.5 0.5 C 75.5 0.5 75.5 0.5 75.5 3.5 L 75.5 44.5 C 75.5 47.5 75.5 47.5 72.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 72.5 0.5 C 75.5 0.5 75.5 0.5 75.5 3.5 L 75.5 44.5 C 75.5 47.5 75.5 47.5 72.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" class="highcharts-label-box highcharts-tooltip-box highcharts-shadow" d="M 3.5 0.5 L 72.5 0.5 C 75.5 0.5 75.5 0.5 75.5 3.5 L 75.5 44.5 C 75.5 47.5 75.5 47.5 72.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#000000" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(247,247,247,0.85)" class="highcharts-label-box highcharts-tooltip-box" d="M 3.5 0.5 L 72.5 0.5 C 75.5 0.5 75.5 0.5 75.5 3.5 L 75.5 44.5 C 75.5 47.5 75.5 47.5 72.5 47.5 L 3.5 47.5 C 0.5 47.5 0.5 47.5 0.5 44.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#FFF263" stroke-width="1"></path><text x="8" data-z-index="1" y="20" style="color:#333333;font-size:12px;fill:#333333;"><tspan style="font-size: 10px">Unanswered</tspan><tspan class="highcharts-br" dy="15" x="8">​</tspan><tspan style="font-weight:bold;">10</tspan></text></g></svg></div></div>
                    <div class="right-lower">
                        <div class="stats-block border-green">
                            <span class="stats-value"><?php echo $mark ?></span>
                            <span class="stats-title">Correct</span>
                        </div>
                        <div class="stats-block border-orange">
                            <span class="stats-value"><?php echo 10-$mark ?></span>
                            <span class="stats-title">Incorrect</span>
                        </div>
                        <div class="stats-block border-yellow">
                            <span class="stats-value">10</span>
                            <span class="stats-title">Unanswered</span>
                        </div>
                    </div>
                </div>
                <div id="bandScore">
                    <h3>Band Score</h3>
                    <div id="tableBand">
                        <ul class="row1">
                            <li>Level</li>
                            <li>Expert</li>
                            <li>Very Good</li>
                            <li>Very Good</li>
                            <li>Good</li>
                            <li>Good</li>
                            <li>Competent</li>
                            <li>Competent</li>
                            <li>Modest</li>
                            <li>Modest</li>
                            <li>Limited</li>
                            <li>Limited</li>
                            <li>Extremely Limited</li>
                        </ul>
                        <ul class="row2">
                            <li>Band</li>
                            <li>9</li>
                            <li>8.5</li>
                            <li>8</li>
                            <li>7.5</li>
                            <li>7</li>
                            <li>6.5</li>
                            <li>6</li>
                            <li>5.5</li>
                            <li>5</li>
                            <li>4.5</li>
                            <li>4</li>
                            <li>3.5</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!--solution-->
        <div class="DapAn">
            <table class="table table-bordered table-condensed text-left" style="width: 100%">
                <tbody>
                    <tr>
                        <td style="width: 0%"><b>1.</b> 692411
                                                                                                                                                    :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text1;
                                                                                                                                                    
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
        </td>

                        <td style="width: 10%"><b>6.</b> 10 packs/10 packets                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    
                                                                                                                                                    echo $text2;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                </tr>
                <tr>
                            <td style="width: 10%"><b>2.</b> Rainbow Communications                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text3;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                            <td style="width: 10%"><b>7.</b> (coloured) floppy disks/computer disks/discs/disks                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text4;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                </tr>
                <tr>
                            <td style="width: 10%"><b>3.</b> white                                                                                                                               :<?php 
                                                                                                                                                   
                                                                                                                                                    echo $text5;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                            <td style="width: 10%"><b>8.</b> (a/one) wall calendar                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text6;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                </tr>
                <tr>
                            <td style="width: 10%"><b>4.</b> two/2 boxes                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text7;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                            <td style="width: 10%"><b>9.</b> (a/new) catalogue                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text8;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                </tr>
                <tr>
                            <td style="width: 10%"><b>5.</b> light blue                                                                                                                               :<?php 
                                                                                                                                                   
                                                                                                                                                    echo $text9;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                            <td style="width: 10%"><b>10.</b> before 11.30/not after 11.30/by 11.30                                                                                                                               :<?php 
                                                                                                                                                    
                                                                                                                                                    echo $text10;
                                                                                                                                                    ?> <span style="font-style: italic"></span> <span class="glyphicon glyphicon-remove" style="color: red"></span>
    </td>
                </tr>

    </tbody></table>
        </div>

    <!--content -->
        
        <div class="wrapper-outer">
            <h2>Other Test</h2>
            <div class="wrapper-inner">
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
                <div class="item-content">
                    <div>
                        <a href="#">
                            <img src="#">
                        </a>
                    </div>
                    <div class="choice-content">
                        <h4>
                            <a href="takelisten.html">Content Listening</a>
                        </h4>
                        <a href="takelisten.html" class="btn__click test">
                            <i class="fas fa-eye"></i>
                            <span>Take Test</span>
                        </a>
                        <a href="viewsolution.html" class="btn__click solution">
                            <i class="fas fa-key"></i>
                            <span>View Solution</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<footer>
	<div id="footer">
		<ul>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Privacy Policy</a></li>
			<li><a href="#">Terms and Conditions</a></li>
		</ul>
	</div>
</footer>

<script type="text/javascript" src="app.js"></script>
</body>
</html>