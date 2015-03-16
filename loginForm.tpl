{extends file="Layout.tpl"}
{block name=body}
    <div class="mainheadingbg">
        <h3>Login</h3>
    </div>
    <div class="writtencontent">
        <center>
            <table align="center" border="0">
                <form action="login.php" method="post">
                    <tr>
                        <td>User Name:</td>
                        <td><input type="text" name="username" /></td>
                    </tr>
                    <tr>
                        <td valign="top">Password:</td>
                        <td><input type="password" name="password" /><br />
                            <input type="submit" value="login"><br /><br />
                        </td>
                    </tr>
            </table>
            </form>
        </center>
    </div>
{/block}