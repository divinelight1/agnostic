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
            <p><input style="    color: #fff;
    border-radius: 3px;
    border: none;
    padding: 10px;
    background: #1d1d1d;" type="submit" name="Submit" value="Save All" /></p>
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="page_options" value="maintittle , mainsubtittle" />
        </form>
    </div>
<?php
    }
?>

