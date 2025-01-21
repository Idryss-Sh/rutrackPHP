<!DOCTYPE html>
<html>
<head>
    <title>Formulaire de Style</title>
    <?php
        $selectedStyle = isset($_POST['style']) ? $_POST['style'] : 'style1';
        echo "<link id='pagestyle' rel='stylesheet' href='{$selectedStyle}.css'>";
    ?>
</head>
<body>
    <form method="POST" action="">
        <label for="style">Sélectionnez un style:</label>
        <select id="style" name="style">
            <option value="style1" <?php echo $selectedStyle == 'style1' ? 'selected' : ''; ?>>Style 1</option>
            <option value="style2" <?php echo $selectedStyle == 'style2' ? 'selected' : ''; ?>>Style 2</option>
            <option value="style3" <?php echo $selectedStyle == 'style3' ? 'selected' : ''; ?>>Style 3</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</body>
</html>