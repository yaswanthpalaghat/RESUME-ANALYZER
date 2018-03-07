<html>
<head>
<title>RESUME ANALYZER</title>
<script>
function forprint(){
if (!window.print){
 
return
}
window.print()
}
</script
</head>
<body>
<div style="width:1000px; border:2px blue dashed; margin:0 auto; padding:10px;">

<h1 class="b" align="center"> RESUME</h1>
<?php echo $_POST["Honorofics"]; ?>&nbsp<?php echo $_POST["firstname"]; ?>&nbsp<?php echo $_POST["lastname"]; ?><br>
<?php echo $_POST["dob"]; ?><br>
<?php echo $_POST["City"]; ?><br>
<?php echo $_POST["email"]; ?><br>
<?php echo $_POST["Mobile"]; ?><br></body><hr/>
<h1 class="b">Academic info</h1>
            <div><table border="5" cellpadding="15" cellspacing="20" bordercolor="blue" bgcolor="white">
                <tr>
                    <th><b>course</b>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>college</b>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</th>
                    <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>year of completion</b>&nbsp &nbsp</th>
                    <th>&nbsp&nbsppercentage</th>
                   
              
                </tr>
                <tr>
                    <td><?php echo $_POST["name0"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Institute0"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Year0"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Percentage0"]; ?><br></td>
                    
                 
                </tr>
                <tr>
                    <td><?php echo $_POST["name00"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Institute00"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Year00"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Percentage00"]; ?><br></td>
                    
                    
                </tr>
                <tr>
                    <td><?php echo $_POST["name01"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Institute01"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Year01"]; ?><br></td>
                    <td>&nbsp&nbsp&nbsp&nbsp<?php echo $_POST["Percentage01"]; ?><br></td>
                    
                </tr>
                
            </table></div>
<h1 class="b">Academic Skills</h1>
<ul>
<li><?php echo $_POST["name1"];  ?></li>
<li><?php echo $_POST["name2"];  ?></li>
<li><?php echo $_POST["name3"]; ?></li>
<li><?php echo $_POST["name4"];  ?></li>
<li><?php echo $_POST["name5"]; ?></li>
<li><?php echo $_POST["name6"]; ?></li>
<li><?php echo $_POST["name7"]; ?></li>
</ul>			

<h1 class="b">Internships and work experience</h1>
<ul>
<li><?php echo $_POST["namea"]; ?><br><?php echo $_POST["authority"]; ?><br><?php echo $_POST["duration"]; ?><br><?php echo $_POST["link"]; ?></li>
<li><?php echo $_POST["nameb"]; ?><br><?php echo $_POST["authorityb"]; ?><br><?php echo $_POST["durationb"]; ?><br><?php echo $_POST["linkb"]; ?></li>
<li><?php echo $_POST["namec"]; ?><br><?php echo $_POST["authorityc"]; ?><br><?php echo $_POST["durationc"]; ?><br><?php echo $_POST["linkc"]; ?></li>
</ul>

<h1 class="b">Projects</h1>
<ul>
<li><?php echo $_POST["named"]; ?><br><?php echo $_POST["descriptiond"]; ?><br>Team size:<?php echo $_POST["sized"]; ?><br><?php echo $_POST["linkd"]; ?></li>
<li><?php echo $_POST["namee"]; ?><br><?php echo $_POST["descriptione"]; ?><br>Team size:<?php echo $_POST["sizee"]; ?><br><?php echo $_POST["linke"]; ?></li>
<li><?php echo $_POST["namef"]; ?><br><?php echo $_POST["descriptionf"]; ?><br>Team size:<?php echo $_POST["sizef"]; ?><br><?php echo $_POST["linkf"]; ?></li>
</ul>
<h1 class="b">Positions of Responsibilty</h1>
<ul>
<li><?php echo $_POST["nameg"]; ?></li>
<li><?php echo $_POST["nameh"]; ?></li>
<li><?php echo $_POST["namei"]; ?></li>
</ul>
<h1 class="b">Achievements</h1>
<ul>
<li><?php echo $_POST["namej"]; ?></li>
<li><?php echo $_POST["namek"]; ?></li>
<li><?php echo $_POST["namel"]; ?></li>
<li><?php echo $_POST["namem"]; ?></li>
<li><?php echo $_POST["namen"]; ?></li>
<li><?php echo $_POST["nameo"]; ?></li>
<li><?php echo $_POST["namep"]; ?></li>
<li><?php echo $_POST["nameq"]; ?></li>
<li><?php echo $_POST["namer"]; ?></li>
<li><?php echo $_POST["names"]; ?></li>
</ul>
<h1 class="b">Hobbies</h1>
<ul>
<li><?php echo $_POST["namet"]; ?></li>
<li><?php echo $_POST["nameu"]; ?></li>
<li><?php echo $_POST["namev"]; ?></li>
</ul>
<h1 class="b">Strengths</h1>
<ul>
<li><?php echo $_POST["namew"]; ?></li>
<li><?php echo $_POST["namex"]; ?></li>
<li><?php echo $_POST["namey"]; ?></li>
</ul>
<h1 class="b">Career Objective</h1>
<ul>
<li><?php echo $_POST["namez"]; ?></li>
</ul>
</div>
<div align="center">
				<a href="pdf_server.php?file=pdffilename">Download</a>
		</div>

</body>
</html> 
