<h1>Users</h1>
    <table class="table my-0">
    <tr>
        <th>UID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user->id . "</td>";
        echo "<td>" . $user->first_name . "</td>";
        echo "<td>" . $user->last_name . "</td>";
        echo "<td>" . $user->email . "</td>";
        echo "<td><a href='/user/view?id=".$user->id."'><i class='bi-eye'></i></a></td>'";
        echo "</tr>";
    }
    ?>
        <tr>
            <th>Total: <?=$userCount?></th>
            <th></th>
            <th><?php if($pageNumber > 1) echo "<a href='/users?pg=".($pageNumber-1)."'><i class='bi-chevron-left'></i></a>"; ?></th>
            <th>Page <?=$pageNumber?> of <?=$pageCount?></th>
            <th><?php if($pageNumber < $pageCount) echo "<a href='/users?pg=".($pageNumber+1)."'><i class='bi-chevron-right'></i></a>"; ?></th>
        </tr>
</table>