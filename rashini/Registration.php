<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
    </head>
    <body>
        <p><h1> SIGN UP </h1><p>
        <p><strong> Create my pet account, OR <a href="login.php">LOG IN >> </a></strong></p>
        
        <form>
            <table>
                
                <tr>
                    <td>
                        Name
                    </td>
                    
                    <td>
                        <input type="text" placeholder="first name" >
                    </td>
                    <td>
                        <input type="text" placeholder="last name">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Email Address
                    </td>
                    <td>
                        <input type="mail" placeholder="email"
                    </td>
                      
                </tr>
                <tr>
                    <td>
                         Telephone Number
                    </td>
                    <td>
                        <input type="phone" placeholder="telephone number">
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        Gender
                    </td>
                    <td>
                        <input type="radio" name="Gender" >Male
                        <input type="radio" name="Gender" >Female
                    </td>
                </tr>
               
                <tr>
                    <td>
                        Username
                    </td>
                    <td>
                        <input type="text" placeholder="username" >
                    </td>
                </tr>
                <tr>
                    <td>
                        Password
                    </td>
                    <td>
                        <input type="password" placeholder="password" >
                     
                    </td>
                </tr>

                
                <tr>
                    <td>
                         <a href="payment.php"> Next </a>
                    </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>
