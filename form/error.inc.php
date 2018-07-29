<style type="text/css">
* {
  margin: 0;
  padding: 0;
  border: 0;
}

.hero-images-section {
  background-image: url("../images/backgroundimage.jpg");
  background-size: cover;
  padding: 500px 0;
}

#contactme {
  margin: 0 auto;
}

label,
.label_input_wrap {
  vertical-align: top;
  display: block;
}

input,
textarea {
  border: 1px solid blue;
  padding: 9px 11px;
  margin: 0 auto;
}

input[type="submit"] {
  padding: 6px 52px;
  background:  #0ca;
  color: white;
  font-family: 'Chelsea Market', cursive;
  border: none;
}

</style>

<h1>Missing fields</h1>
<p>Sorry, you have not completed all of the required fields.</p>
<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

<ul>
<?php
	for($i=0; $i<count($this->missing_required_fields); $i++){
		echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
	}
?>
</ul>

<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
