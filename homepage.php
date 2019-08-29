<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/stylesheet.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="action.php" method="POST" enctype="multipart/form-data">
            <label for="fullname">Username: </label><br>
            <input type="text" name="username" id="fullname"  required><br><br>

            <label for="pwd">Password: </label><br>
            <input type="password" name="password" id="pwd" required><br><br>

            <label for="phone">Phone Number: </label><br>
            <input type="number" name="phone" id="phone" required><br><br>

            <label for="email">Email Address: </label><br>
            <input type="email" name="email" id="email" required><br><br>

            <label for="gender">Gender: </label><br>
            <input type="radio" name="gender" value="Male" checked>Male <br>
            <input type="radio" name="gender" value="Female">Female <br><br>

            <label for="province">Province: </label><br>
            <select name="province" id="province">
                <option value="Phnom Penh">Phnom Penh</option>
                <option value="Pursat">Pursat</option>
                <option value="Battambang">Battambang</option>
            </select><br><br>

            <label for="interest">Interest Subjects: </label><br>
            <input type="checkbox" name="interest[]" value="No Interest" checked style="display: none;">
            <input type="checkbox" name="interest[]" value="PHP">PHP
            <input type="checkbox" name="interest[]" value="Database">Database
            <input type="checkbox" name="interest[]" value="JavaScript">JavaScript <br>

            <label for="file">Picture Profile: </label><br>
            <input type="file" name="picture" id="file"><br>

            <label for="message">Messages: </label><br>
            <textarea name="message" id="message" cols="30" rows="5" required></textarea><br>

            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Clear Information" name="clear">                         
        </form>
    </div>
</body>
</html>