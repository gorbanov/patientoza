{extends file="Layout.tpl"}
{block name=body}
    <div class="writtencontent">
        <center>
            {while $row = mysql_fetch_assoc($result)}
                <a href={$pic_path}{$row['pic']}>
                    <img src={$thumbs}{$row['pic']}>
                {/while}
                <br /><br />
        </center>
    </div>
{/block}