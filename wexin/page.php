<?php get_header(); ?>
<div class="grid_8">
        <!-- Contact Form -->
        <form id="comment_form" action="" method="post">
            <h3>Add a comment</h3>
            <div class="hr dotted clearfix">&nbsp;</div>
            <ul>
                <li class="clearfix">
                    <label for="name">Your Name</label>
                    <input id="name" name="name" type="text" />
                </li>
                <li class="clearfix">
                    <label for="email">Your Email</label>
                    <input id="email" name="email" type="text" />
                </li>
                <li class="clearfix">
                    <label for="email">Your Website</label>
                    <input id="website" name="website" type="text" />
                </li>
                <li class="clearfix">
                    <label for="message">Comment</label>
                    <textarea id="message" name="message" rows="3" cols="40"></textarea>
                </li>
                <li class="clearfix">
                    <!-- Add Comment Button -->
                    <a type="submit" class="button medium black right">Add comment</a> </li>
            </ul>
        </form>
    </div>
