<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

        $Database_Name = 'MyDatabase3';
        $Version = 1.0;
        $Text_Description = 'My First Web-SQL Example';
        $Database_Size = 2 * 1024 * 1024;
        $dbObj = openDatabase($Database_Name, $Version, $Text_Description, $Database_Size);
        $dbObj.transaction(function ($tx) {
            $tx.executeSql('CREATE TABLE IF NOT EXISTS student (id unique, Name, Location)');
        });
        
    


    //    function Insert() {
    //         $id = '107';
    //         $name = 'Habib';
    //         $location = 'Saver';

    //         $dbObj.transaction(function ($tx) {
    //             $tx.executeSql('insert into student(id, Name, Location) values(' + $id + ',"' + $name + '","' + $location + '")');
    //         });

    //     }


?>
       


</body>
</html>