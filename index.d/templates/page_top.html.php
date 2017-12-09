<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Sample page of DEROWA">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    <!--
        var $DEjQuery = $.noConflict(true);
    -->
    </script>
    <script src="./js/script.js"></script>
    <title>Top page | Sample site</title>
</head>

<body>
    <h1>Top page</h1>
    
<?php if ($this->get_from()) : ?>
    <p>From: <?php echo $this->get_from("html"); ?></p>
<?php endif; ?>
    
    <h2>0. Go to defaulr page</h2>
    <p>
        <a href="./">Go</a>
    </p>
    
    
    
    <h2>1. Go to this page self</h2>
    
    <h3>1-1. Direct link</h3>
    <p>
        <a href="./?rc=top">Go</a>
    </p>
    
    <h3>1-2. Action on this page</h3>
    <p>
        <a href="./?rc=top&ra=link1_2">Go</a>
    </p>
    
    <h3>1-3. Action with FORM tag</h3>
    <p>
        <form action="./" method="post">
            <input type="hidden" name="rc" value="top">
            <input type="hidden" name="ra" value="submit1_3">
            <input type="text" name="text1_3" value="<?php echo htmlentities($this->text1_3); ?>">
            <input type="submit">
        </form>
    </p>
    
    <h3>1-4. Action with FORM and tags</h3>
    <p>
        <form action="./" method="post">
            <input type="hidden" name="rc" value="top">
            <ul class="form_ul">
                <li>1-4-1. Submit Button
                    <input type="submit" name="ra" value="submit1_4_1">
                </li>
                <li>1-4-2. Disappeared Submit button
                    <label class="button"><input type="submit" name="ra" value="submit1_4_2">Submit</label>
                </li>
                <li>1-4-3. Button
                    <input type="button" name="ra" value="submit1_4_3">
                </li>
                <li>1-4-4. Disappeared Button
                    <label class="button"><input type="button" name="ra" value="submit1_4_4">Button</label>
                </li>
            </ul>
        </form>
    </p>
    
    <h3>1-5. Action to this page self</h3>
    <p>
        <a href="./?rc=top&ra=submit1_5">Invoke Action</a>
        <div class="result_form">
<?php foreach ($this->data_submit1_5 as $r) : ?>
            <p>
<?php foreach ($r as $c): ?>
                <span><?php echo htmlentities($c); ?></span>
<?php endforeach; ?>
            </p>
<?php endforeach; ?>
        </div>
    </p>
    
    <h3>1-6. Action width Ajax</h3>
    <p>
        <span class="button_ajax button">Invoke Ajax Action</span>
        <div class="result_ajax"></div>
    </p>
    
    <h3>1-7. Action redirect on this page self</h3>
    <p>
        <a href="./?rc=top&ra=redirect">Go</a>
    </p>



    <h2>2. Go to Next page</h2>
    
    <h3>2-1. Direct next page link</h3>
    <p>
        <a href="./?rc=next">Go</a>
    </p>
    
    <h3>2-2. Action to next page on this page</h3>
    <p>
        <a href="./?rc=top&ra=link_next">Go</a>
    </p>
    
    <h3>2-3. Action to next page with param on this page</h3>
    <p>
        <a href="./?rc=top&ra=link_next_with_param">Go</a>
    </p>

</body>

</html>