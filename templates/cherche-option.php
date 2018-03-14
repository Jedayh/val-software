<div class="row">
	<center>
		<form id="searchform" name="searchform" method="get" action="index.html">
		  <div class="fieldcontainer">
		    <input type="text" name="s" id="s" class="searchfield" placeholder="Recherche de Formation" tabindex="1">
		    <input type="submit" name="searchbtn" id="searchbtn" value="">
		  </div>
		  <div class="wrapper">
		  <div class="half">
		    <div class="tab">
		      <input id="tab-one" type="checkbox" name="tabs">
		      <label for="tab-one">Afficher plus de critères</label>
		      <div class="tab-content">
		        
		      </div>
		    </div>
		  </div>
		</div>
		</form>
	</center>
</div>
yjtutuytyujt
<style type="text/css">
	
/** Structure de la Page **/
#Search1Form {
  display: block;
  width: 750px;
  margin: 0 auto;
  padding-top: 30px;
}

#content {
  display: block;
  width: 100%;
  background: #fff;
  padding: 25px 20px;
  padding-bottom: 35px;
  box-shadow: rgba(0, 0, 0, 0.09) 0px 1px 2px 0px;

}

/** Formulaire de Recherche **/
#searchform, #searchform2 {
  display: block;
  margin-bottom: 15px;
}

.fieldcontainer {
  display: block;
  position: relative;
  width: 90%;
  margin: 0 auto;
}

.searchfield {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  width: 45%;
  padding: 11px 7px;
  padding-right: 43px;
  background-color: #fff;
  font-size: 1.6em;
  color: #ccc;
  border: 1px solid #c8c8c8;
  border-bottom-color: #d2e2e7;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;  
  -webkit-transition: all 0.4s linear;
  -moz-transition: all 0.4s linear;
  transition: all 0.4s linear;
  height: 50px;
}

.searchfield:focus {
  width: 100%;
  color: #666;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
}

#searchbtn {
  position: absolute;
  right: 282px;
	top: -16px;
  height: 32px;
  width: 32px;
  border: 0;
  cursor: pointer;
  zoom: 1;
	filter: alpha(opacity=65);
	opacity: 0.65;
  background: transparent url('<?php echo site_url("/wp-content/themes/thegem/")?>images/magnifier.png') top left no-repeat;
  background-size: 32px;
  
  -webkit-transition: all 0.4s linear;
  -moz-transition: all 0.4s linear;
  transition: all 0.4s linear;
}
#searchbtn:hover, #searchbtn:focus, #search2btn:hover, #search2btn:focus {
	filter: alpha(opacity=90);
	opacity: 0.9;  
}
.searchfield:focus + #searchbtn {
  right: 10px; 
}

/** Animation Expandable en Javascript **/
.searchfieldjs {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block;
  width: 45%;
  padding: 11px 7px;
  padding-right: 43px;
  background-color: #fff;
  border: 1px solid #c8c8c8;
  color: #ccc;
  font-size: 1.6em;
  border-bottom-color: #d2e2e7;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1), 0 0 0 6px #f0f0f0;
}
.searchfieldjs:focus {
  color: #666;
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.2), 0 0 0 6px #e0e0e0;
}
/* Acordeon styles */
.tab {
  position: relative;
  margin-bottom: 1px;
  width: 100%;
  color: #fff;
  overflow: hidden;
}
/*input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}*/
label {
  position: relative;
  display: block;
  padding: 0 0 0 1em;
  background: #16a085;
  font-weight: bold;
  line-height: 3;
  cursor: pointer;
}
.blue label {
  background: #2980b9;
}
.tab-content {
  max-height: 0;
  overflow: hidden;
  background: #1abc9c;
  -webkit-transition: max-height .35s;
  -o-transition: max-height .35s;
  transition: max-height .35s;
}
.blue .tab-content {
  background: #3498db;
}
.tab-content p {
  margin: 1em;
}
/* :checked */
input:checked ~ .tab-content {
  max-height: 10em;
}
/* Icon */
label::after {
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  width: 3em;
  height: 3em;
  line-height: 3;
  text-align: center;
  -webkit-transition: all .35s;
  -o-transition: all .35s;
  transition: all .35s;
}
input[type=checkbox] + label::after {
  content: "+";
}
input[type=radio] + label::after {
  content: "\25BC";
}
input[type=checkbox]:checked + label::after {
  transform: rotate(315deg);
}
input[type=radio]:checked + label::after {
  transform: rotateX(180deg);
}
#tab-one{
	display: none;
}

</style>