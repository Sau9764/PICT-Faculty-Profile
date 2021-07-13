<?php

$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank' class='search-result'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a><hr class='search-res-hr'>";
        } else {
          $hint=$hint . "<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank' class='search-result'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a><hr>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="<span class='search-result'><b>-- No suggestion -- </b></span>";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>