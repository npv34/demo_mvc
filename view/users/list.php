<?php

?>

<table>
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td></td>
    </tr>
    <?php foreach ($users as $key => $user): ?>
        <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $user['username']?></td>
            <td><?php echo $user['email']?></td>
            <td><?php echo $user['address']?></td>
            <td><a href="index.php?page=users&action=delete&user-id=<?php echo $user['id'] ?>">Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="index.php?page=users&action=create">Create</a>
