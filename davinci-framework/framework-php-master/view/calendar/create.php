<h1>Add new Birthday</h1>
    <form action="<?= URL ?>calendar/createSave" method="POST">
    <p>Name</p><input type="text" name="person" required value=""><br>
    <p>Day</p><input type="number" name="day" required value="" min ="1" max="31"><br>
    <p>Month</p><input type="number" name="month" required value="" min ="1" max="12"><br>
    <p>Year</p><input type="number" name="year" required value="" min ="1901" max="2018"><br>
    <input type="submit">
    <a href="<?= URL ?>calendar/index"><button type="button">cancel</button></a>
    </form>
