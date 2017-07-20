<?php
// DONT THINK I REALLY NEED ANYHTING HERE 
function thumbnail_size_add_custom_metabox(){

	add_meta_box(
		'thumbnail_size_meta', /*$id*/
		'Thumbnail Size', /*NAME*/ 
		// 'thumbnail_size_meta_callback', //callback function responsible for how metabox is displyed
		'thumbnail-size', //post type
		'side',
		'low'
	);

};

// add_action( 'add_meta_boxes', 'thumbnail_size_add_custom_metabox');


/* this creates the meta box on the bottom right corner – not like categories */
function thumbnail_size_meta_callback(){
	/*create fields*/

	?>
	<!-- wrap fields -->
		<div>
			<div class="meta-row">
				<!-- meta "table" head -->
				<div class="meta-th">
					<!-- thumb-id will relate to an input field -->
					<label for="thumb-id" class="thumbnail_size-row-title">Thumb ID</label>
				</div>
				<div class="meta-td">
					<input type="text" name="thumb-id" id="thumb-id" value="">
				</div>
				<div class="meta-th">
					<input type="text" name="" placeholder="figuring shit out">
				</div>
			</div>
		</div>

	<?php
}

?>