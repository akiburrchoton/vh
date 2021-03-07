<?php 
add_action('admin_head', function(){
    echo "
    <style>
    .cf-block__fields {
        padding: 30px;
	}
	
    .block-editor-block-list__block:nth-child(even){
		background-color: #eff4fc;
	}
	.block-editor-block-list__block:nth-child(odd){
		background-color: rgba(16, 49, 107, 0.01);
	}
	
    </style>
    ";
});
