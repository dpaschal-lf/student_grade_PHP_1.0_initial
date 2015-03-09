<!doctype html>
<?php
$students = [
    ['name'=>'George Takei', 'Class'=>'Warp Physics', 'Grade'=>75],
    ['name'=>'Leonard Nimoy', 'Class'=>'Anger Management', 'Grade'=>98],
    ['name'=>'William Shatner', 'Class'=>'Ethics & the Chain of Command', 'Grade'=>69],
    ['name'=>'James Doohan', 'Class'=>'Warp Physics', 'Grade'=>92],
    ['name'=>'George Takei', 'Class'=>'Piloting', 'Grade'=>95],
    ['name'=>'Leonard Nimoy', 'Class'=>'Warp Physics', 'Grade'=>95],
    ['name'=>'Deforest Kelley', 'Class'=>'Botony', 'Grade'=>85],
    ['name'=>'Nichelle Nichols', 'Class'=>'Communications', 'Grade'=>95],
    ['name'=>'Zoe Saldana', 'Class'=>'Communications', 'Grade'=>35],
    ['name'=>'William Shatner', 'Class'=>'Trible Care', 'Grade'=>100],
];
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
</style>
</head>
<body>
    <table id="student_grade_table">
        <tr>
            <td>Name</td>
            <td>Class</td>
            <td>Grade</td>
        </tr>
        <tr>
            <td>George Takei</td>
            <td>Warp Physics</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Leonard Nimoy</td>
            <td>Anger Management</td>
            <td>98</td>
        </tr>
<?php
    for($i = 0; $i<count($students); $i++)
    {
        echo "<tr>
            <td>".$students[$i]['name']."</td>
            <td>".$students[$i]['Class']."</td>
            <td>".$students[$i]['Grade']."</td>
        </tr>";
    }
?>
    </table>


</body>
</html>