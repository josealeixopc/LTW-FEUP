<?php
    include('templates/html_header.html');
    include_once('database/reply.php');
?>

<h2> Write a reply </h2>

<form action ="/save_reply.php" method ="post" id ="reply_form">

    <!-- Using hidden inputs to send more information on the $_POST variable than what is in the form. -->
    <input type="hidden" name="review_id" value="<?php echo $_GET['review_id']?>" />
    <input type="hidden" name="user_id" value="1" />
    <input type="hidden" name="parent_id" value="0" />

    <div id="reply">
        <label>Reply
        <textarea name="reply_comment" required></textarea>
        </label>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>

</form>

<?php
    include('templates/html_footer.html');  
?>