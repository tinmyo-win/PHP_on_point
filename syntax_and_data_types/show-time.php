<h1> Show Time</h1>
<?php $hour = date('h'); ?>
<p>
    <?php if($hour < 6 || $hour > 18) {
        echo "Night Time";
    } else {
        echo "Day Time";
    }
    ?>
</p>

<!-- Template style -->
<p>
    <?php if($hour < 6 || $hour > 18) { ?>
        <b>Night Time</b>
    <?php } else { ?>
        <i> Day Time</i>
    <?php } ?>
</p>

<!-- Alternative Syntax -->

<p>
    <?php if($hour < 6 || $hour > 18) : ?>
        <b> Night Time </b>
    <?php else : ?>
        <i> Day Time</i>
    <?php endif ?>



