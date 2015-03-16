{extends file="Layout.tpl"}
{block name=body}
    <div class="date1"><br /><br /><br />
        <h3>Contact Us:</h3>
    </div>
    <form action method="post">
        Feedback Failed!<br>
        Enter Your Email: <input type="email" name="subject"><br>
        <textarea rows="10" cols="45" name="message"></textarea><br><br>
        <center>
            <input type="submit" name="submit" value="Submit Feedback"><br /><br />
        </center>
    </form> 
{/block}