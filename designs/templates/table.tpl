<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Table</title>
    </head>
    <body>
       <form method = 'POST'action="">
        <table border="1" align="center">
        <tr>
            <th>name</th>
            <th>address</th>
            <th>gender</th>
            <th>email</th>
        </tr>
            {foreach from =$data item="d"}
        <tr>
            <td>{$d.name}</td>
            <td>{$d.address}</td>
            <td>{$d.gender}</td>
            <td>{$d.email}</td>
            <td><a href="">EDIT</a></td>
            <td><a href="delete.php?id={$d.id}">DELETE</a></td>
        </tr>
    {/foreach}
    </table>
        </form>
        </body>
</html>
        