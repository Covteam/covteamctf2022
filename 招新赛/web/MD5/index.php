
<code><span style="color: #000000">

<br /><span style="color: #0000BB">&lt;?php
<br />&nbsp;&nbsp;&nbsp;&nbsp;error_reporting</span><span style="color: #007700">(</span><span style="color: #0000BB">0</span><span style="color: #007700">);
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">highlight_file</span><span style="color: #007700">(</span><span style="color: #DD0000">"index.php"</span><span style="color: #007700">);
<br />&nbsp;&nbsp;&nbsp;&nbsp;if(isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'md4'</span><span style="color: #007700">])&nbsp;&amp;&amp;&nbsp;isset(</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">])){
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$md4&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'md4'</span><span style="color: #007700">];
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$md5</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_POST</span><span style="color: #007700">[</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">];
<br />
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(</span><span style="color: #0000BB">$md4&nbsp;</span><span style="color: #007700">!=&nbsp;</span><span style="color: #0000BB">$md5&nbsp;</span><span style="color: #007700">&amp;&amp;&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$md4</span><span style="color: #007700">)&nbsp;==&nbsp;</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">md5</span><span style="color: #007700">(</span><span style="color: #0000BB">$md5</span><span style="color: #007700">))){
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #0000BB">file_get_contents</span><span style="color: #007700">(</span><span style="color: #DD0000">'./配置文件.php'</span><span style="color: #007700">);
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"&lt;a&nbsp;href='./你来试试啊.php'&gt;可恶啊，那我给你flag吧&lt;/a&gt;"</span><span style="color: #007700">;
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"嘿嘿，看来还是差了点"</span><span style="color: #007700">;
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br />
<br />&nbsp;&nbsp;&nbsp;&nbsp;}else{
<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"再试试"</span><span style="color: #007700">;
<br />&nbsp;&nbsp;&nbsp;&nbsp;}
<br /></span><span style="color: #0000BB">?&gt;</span>
</span>
<?php
	error_reporting(0);
        
	if(isset($_POST['md4']) && isset($_POST['md5'])){
		$md4 = $_POST['md4'];
		$md5= $_POST['md5'];

		if($md4 != $md5 && md5($md4) == md5(md5($md5))){
			echo file_get_contents('./wo,haoxiangyujianleweilai.php');
			echo "<a href='./haonigexiaozi.php'>可恶啊，那我给你flag吧</a>";
		}else{
			echo "嘿嘿，看来还是差了点";
		}

	}else{
		echo "再试试";
	}
?>