<?php get_header(); ?>

<form action="/contact/postin" method="post" target="_self">
    <!-- name(author) -->
    <label for="user">Name:</label>
    <input type="text" name="user" id="user" required> 
    <!-- subject(title)  -->
    <label for="user_email">Email:</label>
    <input type="email" name="user_email" id="user_email" required>
    <!-- messge(content) -->
    <br>
    <label for="message">Message:</label><br>
    <textarea name="message" id="message" rows="10" cols="50">I would like to discuss...</textarea>
    <!-- submit  -->
    <br><br>
    <button type="submit">Send</button>
</form>


<?php get_footer(); ?>

