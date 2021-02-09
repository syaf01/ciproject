<!DOCTYPE html>
<html lang="en">

<head>
    <title>User : Check if you are eligible to donate blood</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS-->
    <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
    <!-- Custom fonts for this template-->
    <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
    <!-- Page level plugin CSS-->
    <?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
    <!-- Pogo Slider CSS -->
    <?php echo link_tag('assests/css/pogo-slider.min.css'); ?>
	  <!-- Site CSS -->
    <?php echo link_tag('assests/css/style.css'); ?>
    <!-- Responsive CSS -->
    <?php echo link_tag('assests/css/responsive.css'); ?> 
    <!-- Custom CSS -->
	<?php echo link_tag('assests/css/customm.css'); ?>
	<?php echo link_tag('assests/css/custom13.css'); ?>
    <?php echo link_tag('assests/css/custom17.css'); ?>
    <!-- Custom styles for this template-->
    <?php echo link_tag('assests/css/sb-admin.css'); ?>

</head>
    <body id="page-top">

    <!-- Sticky Header -->
    <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">
                <div class="container">
                    <div id="quizzie"> 
                        <h1>Are you eligible to give blood?</h1>
                        <ul class="quiz-step step1 current">
                            <li class="question">
                                <div class="question-wrap"> 
                                    <h2>Question 1: Are you under 18 years old?</h2>
                                </div>
                            </li>
                            <li class="quiz-answer low-value" data-quizIndex="2">
                                <div class="answer-wrap"> 
                                    <p class="answer-text">Yes</p>
                                </div>
                            </li>
                            <li class="quiz-answer high-value" data-quizIndex="4">
                                <div class="answer-wrap"> 
                                    <p class="answer-text">No</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="quiz-step step2">
                            <li class="question">
                                <div class="question-wrap">
                                    <p>Question #2: Are you more...</p>
                                </div>
                            </li>
                            <li class="quiz-answer low-value" data-quizIndex="2">
                                <div class="answer-wrap"> 
                                    <p class="answer-text">First Thing</p>
                                </div>
                            </li>
                            <li class="quiz-answer high-value" data-quizIndex="4">
                                <div class="answer-wrap">
                                    <p class="answer-text">Second Thing</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="quiz-step step3">
                            <li class="question">
                                <div class="question-wrap">
                                    <p>Question #3: Are you more...</p>
                                </div>
                            </li>
                            <li class="quiz-answer low-value" data-quizIndex="2">
                                <div class="answer-wrap">
                                    <p class="answer-text">One Thing</p>
                                </div>
                            </li>
                            <li class="quiz-answer high-value" data-quizIndex="4">
                                <div class="answer-wrap">
                                    <p class="answer-text">Another Thing</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="quiz-step step4">
                            <li class="question">
                                <div class="question-wrap">
                                    <p>Question #4: Are you more...</p>
                                </div>
                            </li>
                            <li class="quiz-answer low-value" data-quizIndex="2">
                                <div class="answer-wrap">
                                    <p class="answer-text">Thing 1</p>
                                </div>
                            </li>
                            <li class="quiz-answer high-value" data-quizIndex="4">
                                <div class="answer-wrap">
                                    <p class="answer-text">Thing 2</p>
                                </div>
                            </li>
                        </ul>
                        <ul id="results">
                            <li class="results-inner">
                                <p>Your result is:</p>
                                <h1></h1>
                                <p class="desc"></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sticky Footer -->
    <?php include APPPATH.'views/user/includes/footer.php';?>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>
<script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
<script src="<?php echo base_url('assests/js/custom14.js '); ?>"></script>

</body>

</html>
