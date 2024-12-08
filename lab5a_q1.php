About Me
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 5a Q1</title> 
</head> 
<style>

    table{
        border-color: black;
        border-style: dotted;
        padding: 10px;
    }

</style>
<body> 
    <?php  
        $name = "Muhammad Fauzan Bin Saiful Amin";
        $matric = "AI220188";
        $course = "Software Engineering";
        $yearofstudy = "3";
        $address = "Seksyen 24, Shah Alam.";
    ?> 
    <table> 
        <tr> 
            <td>Name</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
        <tr>
            <td>Matric No.</td>
            <td><?php echo "$matric"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo "$yearofstudy"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table> 
</body> 
</html>