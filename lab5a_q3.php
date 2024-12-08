<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
    <?php  
        
        function multiplication($multiplier) {
        
            $total = [];
            for ($i = 1; $i <= 12; $i++) {
                $total[] = [
                    "no" => $i,
                    "multiplier" => $multiplier,
                    "answer" => $i * $multiplier
                ];
            }
            return $total;
        }


        $multiplier = 2; 
        
        $table = multiplication($multiplier);
    ?> 

    <table border="1" cellpadding="3" cellspacing="0">
       
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
       
        </tr>
       
        <?php foreach ($table as $row): ?>
       
            <tr>
            <td><?php echo $row["no"]; ?></td>
            <td><?php echo $row["multiplier"]; ?></td>
            <td><?php echo $row["answer"]; ?></td>
       
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
