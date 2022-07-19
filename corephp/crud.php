<?PHP
 $obj = new mysqli("localhost","root","","crud_db");

 if(isset($_POST['submit']))
 {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $obj->query("INSERT INTO form('name','email','password') VALUES('$name','$email','$password');");
    
    if($result == true)
    {
        echo "record added successfully";
    }
 
 else
 {
    echo "Error in Query";
 }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table border="2" align="center">
            <caption>Register Form</caption>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" id="">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Bio:</td>
                <td><textarea name="Bio"></textarea></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td><input type="file" name="photo"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="female">Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                </td>
            </tr>
            <tr>
                <td>Language</td>
                <td><input type="checkbox" name="language" value="Hindi">Hindi
                    <input type="checkbox" name="language" value="Gujarati">Gujarati
                    <input type="checkbox" name="language" value="English">English
                    <input type="checkbox" name="language" value="Other">Other
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <select name="Country">
                        <option value="Select">Select</option>
                        <option value="India">India</option>
                        <option value="USA">USA</option>
                        <option value="Brazil">Brazil</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="submit">
               
                </td>
            </tr>
            
        </table>
    </form>
</body>
</html>