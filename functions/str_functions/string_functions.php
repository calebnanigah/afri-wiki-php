<?php
// explode 
$sentence = "The boy is running. The girl is going.";
$arr = ['The', 'boy', 'is', 'running'];
// print_r(explode('.', $sentence)); 

// implode — Join array elements with a string
// print_r(implode(' ', $arr));

// htmlentities — Convert all applicable characters to HTML entities
$htmlCode= "This <b>word</b> is bold <script> alert('hello') </script>"; 
echo htmlentities($htmlCode); //prints -- This &lt;b&gt;word&lt;/b&gt; is bold &lt;script&gt; alert(&#039;hello&#039;) &lt;/script&gt;

// rtrim — Strip whitespace (or other characters) from the end of a string

// str_contains — Determine if a string contains a given substring