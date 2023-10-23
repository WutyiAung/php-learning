<?php require "view/partial/heading.php";  ?>
<?php foreach($users as $user) : ?>
  <li><?= $user->name ?></li>
<?php endforeach; ?>
    <h2>Submit your name</h2>
    <form action="/name" method="POST">
        <input type="text" name="name">
        <input type="submit" value="insert"><br><br>
    </form>
    <form action="/delete" method="POST">
        <input type="text" name="name">
        <input type="submit" value="Delete">
    </form><br><br>
    <form action="/update" method="POST">
      <label for="name">Enter Name</label>
        <input type="text" name="name"><br>
      <label for="update">Update name</label>
        <input type="text" name="update">
        <input type="submit" value="update">
    </form>
<?php require "view/partial/footer.php";  ?>  