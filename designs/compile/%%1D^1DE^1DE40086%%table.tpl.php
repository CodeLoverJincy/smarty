<?php /* Smarty version 2.6.26, created on 2023-01-27 16:50:02
         compiled from table.tpl */ ?>
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
            <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
        <tr>
            <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
            <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
            <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
            <td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
            <td><a href="">EDIT</a></td>
            <td><a href="delete.php?id=<?php echo $this->_tpl_vars['d']['id']; ?>
">DELETE</a></td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
        </form>
        </body>
</html>
        