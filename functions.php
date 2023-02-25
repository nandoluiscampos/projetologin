<?php
    
    function formatDate($date)
    {
        return date('d/m/y', strtotime($date));



    }

    function getYear()
    {

        return date('Y');

    }



?>