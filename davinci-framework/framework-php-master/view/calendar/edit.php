<h2>Edit Birthday</h2>
    <form action="<?= URL ?>calendar/editSave/<?= $calendar["id"] ?>" method="POST">
    <p>person</p><input type="text" name="person" required value=""><br>
    <p>day</p><input type="number" name="day" required value=""><br>
    <p>month</p><input type="number" name="month" required value=""><br>
    <p>year</p><input type="number" name="year" required value=""><br>
    <input type="submit">
    <a href="<?= URL ?>calendar/index"><button type="button">Go back</button></a>
