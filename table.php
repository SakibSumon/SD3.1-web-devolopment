
<!DOCTYPE html>

<html>

<head>
</head>

<body>

    <div class="container" id="container">
        <table class="gridtable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>fname</th>
                     <th>lname</th>
                    <th>mail</th>
                   
                    <th>message</th>
                   
               
                </tr>
            </thead>
            <tbody>
                <?php
                    //replace data.csv with your csv file
                    if (($csvfile = fopen("data.csv", "r")) !== FALSE) {
                        while (($csvdata = fgetcsv($csvfile, 1000, ",")) !== FALSE) {
                            echo '<tr>';
                                    //add more line if you have more than 4 data
                                    echo '<td>'.$csvdata[0].'</td>';
                                    echo '<td>'.$csvdata[1].'</td>';
                                    echo '<td>'.$csvdata[2].'</td>';
                                    echo '<td>'.$csvdata[3].'</td>';
                                    echo '<td>'.$csvdata[4].'</td>';
                                 //   echo '<td>'.$csvdata[5].'</td>';
                                  
                
                            echo '</tr>';
                        }
                        fclose($csvfile);
                    }
                ?>
            </tbody>
           </table>
    </div>

</body>
</html>