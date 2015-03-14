{extends file="Layout.tpl"}
{block name=body}
    <h3>Login</h3>
    <center>
        <table align="center" border="0">
            <form action="login.php" method="post">
                <tr>All fields must be fill!
                    <td>User Name:</td>
                    <td><input type="text" name="username" /></td>
                </tr>
                <tr>
                    <td valign="top">Password:</td>
                    <td><input type="password" name="password" /><br />
                        <input type="submit" value="login">
                    </td>
                </tr>
        </table><br />
    </center>
{/block}