<h1>Are you sure you want to delete this birthday?</h1>
    <form action="<?= URL ?>calendar/deleteSave/<?= $calendar["id"]; ?>" method="POST">
    <input name="submit" type="submit" value="delete">
    <a href="calendar/index"><button type="button">Go back</button></a></form>
