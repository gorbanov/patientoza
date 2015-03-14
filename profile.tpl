{extends file="Layout.tpl"}
{block name=body}
    <center>
        <b id="welcome">Welcome : {$login_session} <br /><br />
        </b>
    </center>
    <div class="writtencontent">
        <form action="upload file.php" method="post"
              enctype="multipart/form-data">
            <center>
                <label for="file">Filename:</label>
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" value="Submit"><br /><br />
        </form>
    </center>
</div>
{/block}