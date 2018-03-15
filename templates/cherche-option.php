<div class="row">
	<center>
		<form id="searchform" name="searchform" method="get" action="index.html">
		  <div class="fieldcontainer">
		    <input type="text" name="s" id="s" class="searchfield" placeholder="Nom ou domaine de la formation souhaitée..." tabindex="1">
		    <span id="searchbtn"></span>
		  </div>
		  <div class="wrapper">
		  <div class="half">
		    <div class="tab">
		      <input id="tab-one" type="checkbox" name="tabs">
		      <label class="lab_" for="tab-one">Afficher plus de critères</label>
		      <div class="tab-content">
		        
		      </div>
		    </div>
		  </div>
		</div>
		<button type="submit" class="btn btn_subs" name="sub_">RECHERCHE</button>
		</form>
	</center>
</div>

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
  margin-bottom: 11px;
    margin-top: -40px;
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
  width: 80%;
  right: 10px; 
  padding: 11px 7px;
  padding-right: 43px;
  background-color: rgba(236, 150, 49, 0.3215686274509804) !important;
  font-size: 1.6em;
  color: #ccc;
  border: 1px solid rgba(236, 150, 49, 0.3215686274509804) !important;
  -webkit-border-radius: 1px;
  -moz-border-radius: 1px;
  border-radius: 1px;
  height: 50px;
}

#searchbtn {
	position: absolute;
	height: 32px;
	width: 32px;
	border: 0;
	cursor: pointer;
	zoom: 1;
	filter: alpha(opacity=65);
	opacity: 0.65;
	background: transparent url('<?php echo site_url("/wp-content/themes/thegem/")?>images/magnifier.png') top left no-repeat;
	background-size: 32px;
	top: 8px;
	right: 129px;
	-webkit-transition: all 0.4s linear;
	-moz-transition: all 0.4s linear;
	transition: all 0.4s linear;
}

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
.tab {
  position: relative;
  margin-bottom: 1px;
  width: 100%;
  color: #fff;
  overflow: hidden;
}
.lab_ {
  display: block;
    padding: 0 0 0 1em;
    background: transparent;
    font-weight: bold;
    line-height: 3;
    cursor: pointer;
    color: #6b6363;
    width: 21%;
    float: right;
    position: relative;
    right: 158px;
}
.blue .lab_ {

}
label:before{

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
.lab_::after {
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
input[type=checkbox] + .lab_::after {
  content: "+";
}
input[type=radio] + .lab_::after {
  content: "\25BC";
}
input[type=checkbox]:checked + .lab_::after {
  transform: rotate(315deg);
}
input[type=radio]:checked + .lab_::after {
  transform: rotateX(180deg);
}
#tab-one{
	display: none;
}
.btn_subs{
	background: #ff8a00;
    border: none;
    padding: 9px;
    width: 17%;
    color: #FFF;
    font-size: 21px;
    float: left;
    position: relative;
    left: 176px;
}

</style>