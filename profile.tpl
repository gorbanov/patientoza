{extends file="Layout.tpl"}
{block name=body}
    <center>
        <b id="welcome">Welcome : {$user}{$user_check} <br /><br />
        </b>
    </center>
    <div class="writtencontent">
        <form action="uploadFile.php" method="post"
              enctype="multipart/form-data">
            <center>
                <label for="file">Filename:</label>
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" value="Submit"><br /><br />
        </form>
    </center>
</div>
{/block}