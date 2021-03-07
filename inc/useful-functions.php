<?php 

    function getData (){
        return get_query_var( 'component_data',[] );
    }

    function setData ($data){
        return set_query_var( 'component_data',$data );
    }

?>