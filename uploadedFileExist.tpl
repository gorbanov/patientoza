{extends file="Layout.tpl"}
{block name=body}
    <center>
        <b id="welcome">File  {$file_name}  exist! <br /><br />upload new file :<br /><br />
        </b>
    </center>
    <div class="writtencontent">
        <form action="uploadFile.php" method="post"
              enctype="multipart/form-data">
            <center>
                <label for="file">Filename:</label>
                <input type="file" name="file" id="file">
                <input type="submit" name="submit" value="Submit"><br /><br />
            </center>
    </div>
{/block}