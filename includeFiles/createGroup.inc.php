
    <form action="includeFiles\functions\createGroup.function.php" method="get">
        <input name="teamName" id="teamName" type="text" placeholder="Group Name">
        <!-- <input type="file" name="groupLogo" id="groupLogo"> -->
        <label for="teamGame">Choose A Game</label>
        <select name="teamGame" id="teamGame">
            <option value="RainbowSix">Rainbow Six: Siege</option>
            <option value="Overwatch">Overwatch</option>
            <option value="Lol">League Of Legends</option>
            <input type="submit" value="createGroup">
        </select>
    </form>