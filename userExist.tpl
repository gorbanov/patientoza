{extends file="Layout.tpl"}
{block name=body}
    <h3>Registraton</h3>
    <center> User exist! <br /> Please choice diferent user name!
        <table align="center" border="0">
            <form action="registerUser.php" method="post">
                <tr>
                    <td>User Name:</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                    <td valign="top">Password:</td>
                    <td><input type="password" name="password" /><br />
                    </td>
                </tr>
                <tr>
                    <td valign="top">Confirm Password:</td>
                    <td><input type="password" name="conf_password" /><br />
                    </td>
                </tr>
                <tr>
                    <td valign="top">Email:</td>
                    <td><input type="email" name="email" /><br />
                        <input type="submit" value="Register"></td>
                </tr>
        </table>
    </center>
{/block}