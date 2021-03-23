<?php
    function getFromRequest($param){
	return isset($_REQUEST [$param]) ? $_REQUEST [$param] : null;
    }   