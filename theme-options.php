<?php




//admin menu tabs
add_action('admin_menu', 'add_global_custom_options');

function add_global_custom_options()
{
    add_options_page('Theme Options', 'Theme Options', 'manage_options', 'functions','global_custom_options');
}

?>

<?php
function global_custom_options()
{
?>
    <div class="wrap">
        <h2>Theme Options</h2>
        <form method="post" action="options.php">
            <?php wp_nonce_field('update-options') ?>
            <p><strong>Main Title:</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #1d1d1d;
    color: #fff;
    width: 90%;"type="text" name="maintittle" size="45" value="<?php echo get_option('maintittle'); ?>" />
            </p>

            <p><strong>Main Subtitle:</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #1d1d1d;
    color: #fff;
    width: 90%;"type="text" name="mainsubtittle" size="45" value="<?php echo get_option('mainsubtittle'); ?>" />
            </p>


            <p><strong>Main Button Link:</strong> (paste link with http:// or https://)<br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #1d1d1d;
    color: #fff;
    width: 90%;"type="text" name="buttonlink" size="45" value="<?php echo get_option('buttonlink'); ?>" />
            </p>


            <p><strong>Main Button Text:</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #1d1d1d;
    color: #fff;
    width: 90%;"type="text" name="mainbuttontext" size="45" value="<?php echo get_option('mainbuttontext'); ?>" />
            </p>


            <p><input style="    color: #fff;
    border-radius: 3px;
    border: none;
    padding: 10px;
    background: #1d1d1d;" type="submit" name="Submit" value="Save All" /></p>

<h2 style="margin-top:50px;">Section with fa-icons</h2>

            <p><strong>First Section Heading:</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #21B2A6;
    color: #fff;
    width: 90%;"type="text" name="firstsectionheading" size="45" value="<?php echo get_option('firstsectionheading'); ?>" />
            </p>


            <p><strong>First Section Subheading:</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #21B2A6;
    color: #fff;
    width: 90%;"type="text" name="firstsectionsubheading" size="45" value="<?php echo get_option('firstsectionsubheading'); ?>" />
            </p>


            <p><strong>Fa Icons: (visit this link to see other fa-icons https://fortawesome.github.io/Font-Awesome/icons/)</strong><br />
                <input style="border-radius: 6px;
    padding: 10px;
    background: #21B2A6;
    color: #fff;
    width: 30%;"type="text" name="fafirst" size="45" value="<?php echo get_option('fafirst'); ?>" />

                <input style="border-radius: 6px;
    padding: 10px;
    background: #21B2A6;
    color: #fff;
    width: 30%;"type="text" name="fasecond" size="45" value="<?php echo get_option('fasecond'); ?>" />



                <input style="border-radius: 6px;
    padding: 10px;
    background: #21B2A6;
    color: #fff;
    width: 30%;"type="text" name="fathird" size="45" value="<?php echo get_option('fathird'); ?>" />
            </p>


            <p><input style="    color: #fff;
    border-radius: 3px;
    border: none;
    padding: 10px;
    background: #21B2A6;" type="submit" name="Submit" value="Save All" /></p>


<h2 style="margin-top:50px;">Section with Pic. and Text</h2>

<p> <strong>First picture link:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="pictext1" size="45" value="<?php echo get_option('pictext1'); ?>" />
            </p>

<p> <strong>First heading text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="headingtext1" size="45" value="<?php echo get_option('headingtext1'); ?>" />
            </p>


<p> <strong>First paragraph text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="firstparagraphtext1" size="45" value="<?php echo get_option('firstparagraphtext1'); ?>" />
            </p>

<p> <strong>Second picture link:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="pictext2" size="45" value="<?php echo get_option('pictext2'); ?>" />
            </p>


<p> <strong>Second heading text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="headingtext2" size="45" value="<?php echo get_option('headingtext2'); ?>" />
            </p>


<p> <strong>Second paragraph text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="secondparagraphtext2" size="45" value="<?php echo get_option('secondparagraphtext2'); ?>" />
            </p>


<p> <strong>Third picture link:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="pictext3" size="45" value="<?php echo get_option('pictext3'); ?>" />
            </p>


<p> <strong>Third heading text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="headingtext3" size="45" value="<?php echo get_option('headingtext3'); ?>" />
            </p>


<p> <strong>Third paragraph text:<br>               <input style="border-radius: 6px;
    padding: 10px;
    background: #2B343D;
    color: #fff;
    width: 90%;"type="text" name="thirdparagraphtext3" size="45" value="<?php echo get_option('thirdparagraphtext3'); ?>" />
            </p>


            <p><input style="    color: #fff;
    border-radius: 3px;
    border: none;
    padding: 10px;
    background: #2B343D;" type="submit" name="Submit" value="Save All" /></p>


            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="maintittle , mainsubtittle , buttonlink , mainbuttontext , firstsectionheading , firstsectionsubheading , fafirst , fasecond , fathird , pictext1 , headingtext1 , firstparagraphtext1 , pictext2 , headingtext2 , secondparagraphtext2 , pictext3 , headingtext3 , thirdparagraphtext3" />
        </form>
    </div>
<?php
    }
?>


