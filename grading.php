<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>CISC - Final Grade Calculation Assignment 1</title>

    </head>

    <body>
        <?php
            $assignmentTotal = $_POST['grade1'] + $_POST['grade2'] + $_POST['grade3'] + $_POST['grade4'] + $_POST['grade5'] + $_POST['grade6'];
                // Total average of all 6 assignments
                $assignmentAverage = ($assignmentTotal / 6) * round(.50, 2);
                
                // Capstone Grade Calculation
                $capstoneGrade = $_POST['capstone'] * round(.30, 2);

                // Final Exam Grade Calculation
                $finalExamGrade = $_POST['finalExam'] * round(.20, 2);

                // Final Grade Averages
                $averageGrade = $assignmentAverage + $capstoneGrade + $finalExamGrade;

                echo '<h2> Your Grade Breakdown</h2>';
                echo "<p>Your assignment average is: $capstoneGrade</p><br />";
                echo "<p>Your capstone project grade is: $assignmentAverage</p><br />";
                echo "<p>Your final exam grade is: $finalExamGrade</p><br />";
                echo "<p>Your final grade for CISC 257 is: $averageGrade</p>";

               /* ' . round($assignmentAverage / .30, 2) .'</p><br />";*/

        ?>
    </body>

</html>