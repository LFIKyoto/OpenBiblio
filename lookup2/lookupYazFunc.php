<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

	##-----------
	function extract_marc_fields($ar, $postit, $hit, $host) {
		global $my_callNmbrType;
    $nl = "";
    reset($ar);
		$nHost = "host$host";
		$nHit = "hit$hit";
		$rslt = array();
		
    while(list($key,list($tagpath,$data))=each($ar)) {
        $data = trim(htmlspecialchars($data, ENT_SUBSTITUTE, 'UTF-8' ));
	//echo "tagpath=$tagpath data=$data<br>\n";
        // Title
	if ($tagpath == '(3,200)(3,1 )(3,a)') 
	    $rslt['245a'] .= $data;
        // ISBN
        elseif ($tagpath == '(3,073)(3, 0)(3,a)')
	    $rslt['020a'] .= $data;
	// Author (First Name)
        elseif ($tagpath == '(3,700)(3, |)(3,b)') {
	    if (empty($rslt['100a']))
		$rslt['100a'] = $data;
	    else
                $rslt['100a'] = $data . ' ' . $rslt['100a'];
	}
	// Author (Last Name)
	elseif ($tagpath == '(3,700)(3, |)(3,a)') {
	    if (empty($rslt['100a']))
	        $rslt['100a'] = $data;
            else
                $rslt['100a'] .= ' ' . $data;
	}
	// Publication
        elseif (preg_match("/^\(3,210\)\(3,.*\)\(3,c\)$/", $tagpath))
	    $rslt['260b'] .= $data;
	// Date of publication
        elseif (preg_match("/^\(3,210\)\(3,.*\)\(3,d\)$/", $tagpath))
	    $rslt['260c'] .= $data;
	// Location of publication
        elseif (preg_match("/^\(3,210\)\(3,.*\)\(3,a\)$/", $tagpath))
	    $rslt['260a'] .= $data;
	// Purchase price
	elseif (preg_match("/^\(3,010\)\(3,.*\)\(3,d\)$/", $tagpath))
	    $rslt['541h'] .= $data;
	// Physical Description (Extent)
	elseif (preg_match("/^\(3,215\)\(3,.*\)\(3,a\)$/", $tagpath))
	    $rslt['300a'] .= $data;
	// Physical Description (Other)
	elseif (preg_match("/^\(3,215\)\(3,.*\)\(3,c\)$/", $tagpath))
	    $rslt['300b'] .= $data;
	// Physical Description (Dim)
	elseif (preg_match("/^\(3,215\)\(3,.*\)\(3,d\)$/", $tagpath))
	    $rslt['300c'] .= $data;
	// Summary (part 1)
	elseif (preg_match("/^\(3,200\)\(3,1.*\)\(3,b\)$/", $tagpath)) {
	    if (empty($rslt['520a']))
		$rslt['520a'] = $data;
	    else
                $rslt['520a'] = $data . ' ' . $rslt['520a'];
	}
	// Summary (part 2)
	elseif (preg_match("/^\(3,200\)\(3,1.*\)\(3,g\)$/", $tagpath)) {
	    if (empty($rslt['520a']))
		$rslt['520a'] = $data;
	    else
                $rslt['520a'] .= ' ' . $data;
	}
    }
    return $rslt;
	}


?>
