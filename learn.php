<?php

// functions.php

// Our custom post type function
function create_posttype() {

    register_post_type( 'fake_sale',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Fake Sale' ),
                'singular_name' => __( 'Faker' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'fake_sale'),
            'show_in_rest' => false,

        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

add_action('init', 'kj_rem_editor_from_post_type');
function kj_rem_editor_from_post_type() {
    remove_post_type_support( 'fake_sale', 'editor' );
}


function kj_add_custom_meta_box()
{
    add_meta_box("kj-demo-meta-box", "Sales", "kj_custom_meta_box_markup", "fake_sale", "normal", "high", null);
}

add_action("add_meta_boxes", "kj_add_custom_meta_box");

function kj_custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "kj-meta-box-nonce");

    ?>
<div class="sales-container">
    <div class="row">
        <h3>First Sold Details (00 Min.)</h3>
        <label for="kj-first-name">Name</label>
        <input name="kj-first-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-first-name", true); ?>">

        <br>

        <label for="kj-first-country">Country</label>
        <input name="kj-first-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-first-country", true); ?>">

        <br>

        <label for="kj-first-image-url">Image URL</label>
        <input name="kj-first-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-first-image-url", true); ?>">

        <br>

        <label for="kj-first-buy-link">Buy Link</label>
        <input name="kj-first-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-first-buy-link", true); ?>">

        <br>
    </div>
    <hr>

    <div class="row">
        <h3>Second Sold Details (10 Min.)</h3>
        <label for="kj-second-name">Name</label>
        <input name="kj-second-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-second-name", true); ?>">

        <br>

        <label for="kj-second-country">Country</label>
        <input name="kj-second-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-second-country", true); ?>">

        <br>

        <label for="kj-second-image-url">Image URL</label>
        <input name="kj-second-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-second-image-url", true); ?>">

        <br>

        <label for="kj-second-buy-link">Buy Link</label>
        <input name="kj-second-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-second-buy-link", true); ?>">

        <br>
    </div>
    <hr>

    <div class="row">
        <h3>Third Sold Details (20 Min.)</h3>
        <label for="kj-third-name">Name</label>
        <input name="kj-third-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-third-name", true); ?>">

        <br>

        <label for="kj-third-country">Country</label>
        <input name="kj-third-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-third-country", true); ?>">

        <br>

        <label for="kj-third-image-url">Image URL</label>
        <input name="kj-third-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-third-image-url", true); ?>">

        <br>

        <label for="kj-third-buy-link">Buy Link</label>
        <input name="kj-third-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-third-buy-link", true); ?>">

        <br>
    </div>
    <hr>

    <div class="row">
        <h3>Fourth Sold Details (30 Min.)</h3>
        <label for="kj-fourth-name">Name</label>
        <input name="kj-fourth-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fourth-name", true); ?>">

        <br>

        <label for="kj-fourth-country">Country</label>
        <input name="kj-fourth-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fourth-country", true); ?>">

        <br>

        <label for="kj-fourth-image-url">Image URL</label>
        <input name="kj-fourth-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fourth-image-url", true); ?>">

        <br>

        <label for="kj-fourth-buy-link">Buy Link</label>
        <input name="kj-fourth-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fourth-buy-link", true); ?>">

        <br>
    </div>
    <hr>

    <div class="row">
        <h3>Fifth Sold Details (40 Min.)</h3>
        <label for="kj-fifth-name">Name</label>
        <input name="kj-fifth-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fifth-name", true); ?>">

        <br>

        <label for="kj-fifth-country">Country</label>
        <input name="kj-fifth-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fifth-country", true); ?>">

        <br>

        <label for="kj-fifth-image-url">Image URL</label>
        <input name="kj-fifth-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fifth-image-url", true); ?>">

        <br>

        <label for="kj-fifth-buy-link">Buy Link</label>
        <input name="kj-fifth-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-fifth-buy-link", true); ?>">

        <br>
    </div>
    <hr>

    <div class="row">
        <h3>Sixth Sold Details (50 Min.)</h3>
        <label for="kj-sixth-name">Name</label>
        <input name="kj-sixth-name" type="text" style="margin-left:33px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-sixth-name", true); ?>">

        <br>

        <label for="kj-sixth-country">Country</label>
        <input name="kj-sixth-country" type="text" style="margin-left:22px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-sixth-country", true); ?>">

        <br>

        <label for="kj-sixth-image-url">Image URL</label>
        <input name="kj-sixth-image-url" type="text" style="margin-left:5px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-sixth-image-url", true); ?>">

        <br>

        <label for="kj-sixth-buy-link">Buy Link</label>
        <input name="kj-sixth-buy-link" type="text" style="margin-left:20px; margin-bottom: 10px"
            value="<?php echo get_post_meta($object->ID, "kj-sixth-buy-link", true); ?>">

        <br>
    </div>
    <hr>
</div>

<?php
}


function save_kj_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["kj-meta-box-nonce"]) || !wp_verify_nonce($_POST["kj-meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "fake_sale";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";
    $meta_box_dropdown_value = "";
	$meta_box_checkbox_value = "";

	if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

    if(isset($_POST["meta-box-dropdown"]))
    {
        $meta_box_dropdown_value = $_POST["meta-box-dropdown"];
    }
    update_post_meta($post_id, "meta-box-dropdown", $meta_box_dropdown_value);

    if(isset($_POST["meta-box-checkbox"]))
    {
        $meta_box_checkbox_value = $_POST["meta-box-checkbox"];
    }
	update_post_meta($post_id, "meta-box-checkbox", $meta_box_checkbox_value);


	// first section
	$first_meta_box_name_value = "";
    $first_meta_box_country_value = "";
    $first_meta_box_image_url_value = "";
    $first_meta_box_buy_link_value = "";

    if(isset($_POST["kj-first-name"]))
    {
        $first_meta_box_name_value = $_POST["kj-first-name"];
    }
	update_post_meta($post_id, "kj-first-name", $first_meta_box_name_value);

	if(isset($_POST["kj-first-country"]))
    {
        $first_meta_box_country_value = $_POST["kj-first-country"];
    }
	update_post_meta($post_id, "kj-first-country", $first_meta_box_country_value);

	if(isset($_POST["kj-first-image-url"]))
    {
        $first_meta_box_image_url_value = $_POST["kj-first-image-url"];
    }
	update_post_meta($post_id, "kj-first-image-url", $first_meta_box_image_url_value);

	if(isset($_POST["kj-first-buy-link"]))
    {
        $first_meta_box_buy_link_value = $_POST["kj-first-buy-link"];
    }
	update_post_meta($post_id, "kj-first-buy-link", $first_meta_box_buy_link_value);


	// second section
	$second_meta_box_name_value = "";
    $second_meta_box_country_value = "";
	$second_meta_box_image_url_value = "";
	$second_meta_box_buy_link_value = "";

    if(isset($_POST["kj-second-name"]))
    {
        $second_meta_box_name_value = $_POST["kj-second-name"];
    }
	update_post_meta($post_id, "kj-second-name", $second_meta_box_name_value);

	if(isset($_POST["kj-second-country"]))
    {
        $second_meta_box_country_value = $_POST["kj-second-country"];
    }
	update_post_meta($post_id, "kj-second-country", $second_meta_box_country_value);

	if(isset($_POST["kj-second-image-url"]))
    {
        $second_meta_box_image_url_value = $_POST["kj-second-image-url"];
    }
	update_post_meta($post_id, "kj-second-image-url", $second_meta_box_image_url_value);

	if(isset($_POST["kj-second-buy-link"]))
    {
        $second_meta_box_buy_link_value = $_POST["kj-second-buy-link"];
    }
	update_post_meta($post_id, "kj-second-buy-link", $second_meta_box_buy_link_value);


	// third section
	$third_meta_box_name_value = "";
    $third_meta_box_country_value = "";
    $third_meta_box_image_url_value = "";
	$third_meta_box_buy_link_value = "";

    if(isset($_POST["kj-third-name"]))
    {
        $third_meta_box_name_value = $_POST["kj-third-name"];
    }
	update_post_meta($post_id, "kj-third-name", $third_meta_box_name_value);

	if(isset($_POST["kj-third-country"]))
    {
        $third_meta_box_country_value = $_POST["kj-third-country"];
    }
	update_post_meta($post_id, "kj-third-country", $third_meta_box_country_value);

	if(isset($_POST["kj-third-image-url"]))
    {
        $third_meta_box_image_url_value = $_POST["kj-third-image-url"];
    }
	update_post_meta($post_id, "kj-third-image-url", $third_meta_box_image_url_value);

	if(isset($_POST["kj-third-buy-link"]))
    {
        $third_meta_box_buy_link_value = $_POST["kj-third-buy-link"];
    }
	update_post_meta($post_id, "kj-third-buy-link", $third_meta_box_buy_link_value);


	// fourth section
	$fourth_meta_box_name_value = "";
    $fourth_meta_box_country_value = "";
    $fourth_meta_box_image_url_value = "";
    $fourth_meta_box_buy_link_value = "";

    if(isset($_POST["kj-fourth-name"]))
    {
        $fourth_meta_box_name_value = $_POST["kj-fourth-name"];
    }
	update_post_meta($post_id, "kj-fourth-name", $fourth_meta_box_name_value);

	if(isset($_POST["kj-fourth-country"]))
    {
        $fourth_meta_box_country_value = $_POST["kj-fourth-country"];
    }
	update_post_meta($post_id, "kj-fourth-country", $fourth_meta_box_country_value);

	if(isset($_POST["kj-fourth-image-url"]))
    {
        $fourth_meta_box_image_url_value = $_POST["kj-fourth-image-url"];
    }
	update_post_meta($post_id, "kj-fourth-image-url", $fourth_meta_box_image_url_value);

	if(isset($_POST["kj-fourth-buy-link"]))
    {
        $fourth_meta_box_buy_link_value = $_POST["kj-fourth-buy-link"];
    }
	update_post_meta($post_id, "kj-fourth-buy-link", $fourth_meta_box_buy_link_value);


	// fifth section
	$fifth_meta_box_name_value = "";
    $fifth_meta_box_country_value = "";
	$fifth_meta_box_image_url_value = "";
	$fifth_meta_box_buy_link_value = "";

    if(isset($_POST["kj-fifth-name"]))
    {
        $fifth_meta_box_name_value = $_POST["kj-fifth-name"];
    }
	update_post_meta($post_id, "kj-fifth-name", $fifth_meta_box_name_value);

	if(isset($_POST["kj-fifth-country"]))
    {
        $fifth_meta_box_country_value = $_POST["kj-fifth-country"];
    }
	update_post_meta($post_id, "kj-fifth-country", $fifth_meta_box_country_value);

	if(isset($_POST["kj-fifth-image-url"]))
    {
        $fifth_meta_box_image_url_value = $_POST["kj-fifth-image-url"];
    }
	update_post_meta($post_id, "kj-fifth-image-url", $fifth_meta_box_image_url_value);

	if(isset($_POST["kj-fifth-buy-link"]))
    {
        $fifth_meta_box_buy_link_value = $_POST["kj-fifth-buy-link"];
    }
	update_post_meta($post_id, "kj-fifth-buy-link", $first_meta_box_buy_link_value);


	// sixth section
	$sixth_meta_box_name_value = "";
    $sixth_meta_box_country_value = "";
    $sixth_meta_box_image_url_value = "";
    $sixth_meta_box_buy_link_value = "";

    if(isset($_POST["kj-sixth-name"]))
    {
        $sixth_meta_box_name_value = $_POST["kj-sixth-name"];
    }
	update_post_meta($post_id, "kj-sixth-name", $sixth_meta_box_name_value);

	if(isset($_POST["kj-sixth-country"]))
    {
        $sixth_meta_box_country_value = $_POST["kj-sixth-country"];
    }
	update_post_meta($post_id, "kj-sixth-country", $sixth_meta_box_country_value);

	if(isset($_POST["kj-sixth-image-url"]))
    {
        $sixth_meta_box_image_url_value = $_POST["kj-sixth-image-url"];
    }
	update_post_meta($post_id, "kj-sixth-image-url", $sixth_meta_box_image_url_value);

	if(isset($_POST["kj-sixth-buy-link"]))
    {
        $sixth_meta_box_buy_link_value = $_POST["kj-sixth-buy-link"];
    }
	update_post_meta($post_id, "kj-sixth-buy-link", $sixth_meta_box_buy_link_value);

}

add_action("save_post", "save_kj_custom_meta_box", 10, 3);

// footer.php

$args = array(
	'post_type'=> 'fake_sale',
	'post_status' => 'publish',
	'posts_per_page' => 1,
    'order'    => 'DESC'
);

$the_query = new WP_Query( $args );
$metas = get_post_meta($the_query->post->ID);

echo "<pre>"; print_r($metas);die;

if($the_query->have_posts() ) :
    while ( $the_query->have_posts() ) :
		$metas = get_post_meta($the_query->post->ID);
		break;
    endwhile;
    wp_reset_postdata();
else:
endif;