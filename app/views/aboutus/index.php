<?php var_dump($user); ?>

<h3>About Us</h3>
    <div class="mycontainer">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Tel</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php $user['email']?><td>
                <td><?php $user['email']?></td>
                <td><?php $user['tel']?></td>
            </tr>
            </tbody>
        </table>
    </div>