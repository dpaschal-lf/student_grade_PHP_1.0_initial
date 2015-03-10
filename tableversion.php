<!doctype html>
<?php
require_once('includes/data.php');

$highest = $students[0]['Grade'];
$lowest = $students[0]['Grade'];
$grade_total = 0;
for($i = 1 ; $i< count($students); $i++)
{
    if($students[$i]['Grade']>$highest)
    {
        $highest = $students[$i]['Grade'];
    }
    if($students[$i]['Grade']<$lowest)
    {
        $lowest = $students[$i]['Grade'];
    }
    $grade_total+=$students[$i]['Grade'];
}
$average = $grade_total / count($students);
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student Grade Table PHP</title>
<style>
#student_grade_table td{
    padding: 5px;
}
#student_grade_table tr:nth-child(even){
    background-color: lightgray;;
}
.lowest_row{
    background-color: red!important;
}
.highest_row{
    background-color: green!important;
}
.average_row{
    font-weight: bold;
    background-color: black!important;
    color: white;
}
.function_row{
    text-align: center;
}
</style>
</head>
<body>
    <table id="student_grade_table">
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Grade</td>
            <td>Functions</td>
        </tr>
<?php
    for($i = 0; $i<count($students); $i++)
    {
        $row_class='';
        if($students[$i]['Grade']==$lowest)
        {
            $row_class='lowest_row';
        }
        if($students[$i]['Grade']==$highest)
        {
            $row_class='highest_row';
        }
        echo "<tr class='".$row_class."'>
            <td>".$students[$i]['name']."</td>
            <td>".$students[$i]['Class']."</td>
            <td>".$students[$i]['Grade']."</td>
            <td class='function_row'><button type='button'>X</button></td>
        </tr>";
    }
    echo "The class average is $average";
?>
        <tr class='average_row'>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><?php echo $average;?></td>
            <td>&nbsp;</td>
        </tr>
        
    </table>


</body>
</html>