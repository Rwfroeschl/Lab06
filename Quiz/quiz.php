<!DOCTYPE html>
<html>
 
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 
	<div id="page-wrap">
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "B") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 4 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>
