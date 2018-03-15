<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="row">
	<center>
		<form id="searchform" name="searchform" method="get" action="index.html">
		  <div class="fieldcontainer">
		    <input type="text" name="s" id="s" class="searchfield" placeholder="Nom ou domaine de la formation souhaitée..." tabindex="1">
		    <span id="searchbtn"></span>
		  </div>
      <div class="container">
          <div class="accordion">
            <dl>
              <dt><a class="accordionTitle" href="#">Afficher plus de critères</a></dt>
              <dd class="accordionItem accordionItemCollapsed">
                  <div class="search-container collapsed">
                    <div class="search">
                        <div class="row">
                            <div class="col-sm-4 col-md-4">
                                <div class="form-item form-item-domain form-type-select form-group">
                                    <label class="control-label" for="edit-domain">Domaine de formation</label>
                                    <select class="csp-form-element form-control form-select ajax-processed" id="edit-domain" name="domain">
                                        <option value="" selected="selected">Tout</option>
                                        <option value="12">Formations diplômantes et certifiantes</option>
                                        <option value="710">Développement des compétences</option>
                                        <option value="1">Leadership et Management</option>
                                        <option value="2">Management de projet</option>
                                        <option value="3">Formation et Ressources Humaines</option>
                                        <option value="5">Communication écrite et orale</option>
                                        <option value="711">Efficacité</option>
                                        <option value="6">Développement professionnel</option>
                                        <option value="712">Marketing</option>
                                        <option value="7">Vente et Relation Client</option>
                                        <option value="8">QSE et santé au travail</option>
                                        <option value="11">Finance et achats</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div id="family-wrapper">
                                    <div class="form-item form-item-family form-type-select form-group">
                                        <label class="control-label" for="edit-family">Thème</label>
                                        <select class="csp-form-element form-control form-select" id="edit-family" name="family">
                                            <option value="" selected="selected">Tout</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div class="form-item form-item-type form-type-select form-group">
                                    <label class="control-label" for="edit-type">Type de formation</label>
                                    <select class="csp-form-element form-control form-select" id="edit-type" name="type">
                                        <option value="" selected="selected">Tout</option>
                                        <option value="cat">Formations catalogue</option>
                                        <option value="cer">Formations certifiantes</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <h5>Période</h5>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-4 col-md-12">
                                        <div class="form-group m-t-10">
                                            <div class="container-inline-date">
                                                <div class="form-item form-item-start-date form-type-date-popup form-group">
                                                    <label class="control-label" for="edit-start-date">À partir du</label>
                                                    <div id="edit-start-date" class="date-padding clearfix">
                                                        <div class="form-item form-item-start-date-date form-type-textfield form-group">
                                                            <input class="csp-form-element form-control form-text" title="" data-toggle="tooltip" type="date" id="edit-start-date-datepicker-popup-0" name="start_date[date]" value="" size="20" maxlength="30" data-original-title=" Par ex., 15/03/2018">
                                                            <label class="control-label element-invisible" for="edit-start-date-datepicker-popup-0">Date</label>
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-4 col-md-12 todate">
                                        <div class="form-group">
                                            <div class="container-inline-date">
                                                <div class="form-item form-item-end-date form-type-date-popup form-group">
                                                    <label class="control-label" for="edit-end-date">Jusqu'au</label>
                                                    <div id="edit-end-date" class="date-padding clearfix">
                                                        <div class="form-item form-item-end-date-date form-type-textfield form-group">
                                                            <input class="csp-form-element form-control form-text" title="" data-toggle="tooltip" type="date" id="edit-end-date-datepicker-popup-0" name="end_date[date]" value="" size="20" maxlength="30" data-original-title=" Par ex., 15/03/2018">
                                                            <label class="control-label element-invisible" for="edit-end-date-datepicker-popup-0">Date</label>
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-item form-item-duration form-type-checkboxes form-group">
                                    <label class="control-label" for="edit-duration">Durée</label>
                                    <div id="edit-duration" class="form-checkboxes csp-form-element">
                                        <div class="form-item form-item-duration-1 form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-duration-1" name="duration[1]" value="1">
                                            <label class="control-label" for="edit-duration-1"><span></span>1 jour</label>
                                        </div>
                                        <div class="form-item form-item-duration-2 form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-duration-2" name="duration[2]" value="2">
                                            <label class="control-label" for="edit-duration-2"><span></span>2 jours</label>
                                        </div>
                                        <div class="form-item form-item-duration-3 form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-duration-3" name="duration[3]" value="3">
                                            <label class="control-label" for="edit-duration-3"><span></span>3 jours</label>
                                        </div>
                                        <div class="form-item form-item-duration-4 form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-duration-4" name="duration[4]" value="4">
                                            <label class="control-label" for="edit-duration-4"><span></span>4 jours</label>
                                        </div>
                                        <div class="form-item form-item-duration-4 form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-duration-4--2" name="duration[4+]" value="4+">
                                            <label class="control-label" for="edit-duration-4--2"><span></span>4+ jours</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-item form-item-cities form-type-checkboxes form-group">
                                    <label class="control-label" for="edit-cities">Ville</label>
                                    <div id="edit-cities" class="form-checkboxes csp-form-element">
                                        <div class="form-item form-item-cities-paris form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-paris" name="cities[PARIS]" value="PARIS">
                                            <label class="control-label" for="edit-cities-paris"><span></span>Paris</label>
                                        </div>
                                        <div class="form-item form-item-cities-lille form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-lille" name="cities[LILLE]" value="LILLE">
                                            <label class="control-label" for="edit-cities-lille"><span></span>Lille</label>
                                        </div>
                                        <div class="form-item form-item-cities-lyon form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-lyon" name="cities[LYON]" value="LYON">
                                            <label class="control-label" for="edit-cities-lyon"><span></span>Lyon</label>
                                        </div>
                                        <div class="form-item form-item-cities-bordeaux form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-bordeaux" name="cities[BORDEAUX]" value="BORDEAUX">
                                            <label class="control-label" for="edit-cities-bordeaux"><span></span>Bordeaux</label>
                                        </div>
                                        <div class="form-item form-item-cities-marseille form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-marseille" name="cities[MARSEILLE]" value="MARSEILLE">
                                            <label class="control-label" for="edit-cities-marseille"><span></span>Marseille</label>
                                        </div>
                                        <div class="form-item form-item-cities-nice form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-nice" name="cities[NICE]" value="NICE">
                                            <label class="control-label" for="edit-cities-nice"><span></span>Nice</label>
                                        </div>
                                        <div class="form-item form-item-cities-rennes form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-rennes" name="cities[RENNES]" value="RENNES">
                                            <label class="control-label" for="edit-cities-rennes"><span></span>Rennes</label>
                                        </div>
                                        <div class="form-item form-item-cities-strasbourg form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-cities-strasbourg" name="cities[STRASBOURG]" value="STRASBOURG">
                                            <label class="control-label" for="edit-cities-strasbourg"><span></span>Strasbourg</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="form-item form-item-flags form-type-checkboxes form-group">
                                    <label class="control-label" for="edit-flags">Caractéristiques</label>
                                    <div id="edit-flags" class="form-checkboxes csp-form-element">
                                        <div class="form-item form-item-flags-inc form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-flags-inc" name="flags[inc]" value="inc">
                                            <label class="control-label" for="edit-flags-inc"><span></span>Best</label>
                                        </div>
                                        <div class="form-item form-item-flags-nouv form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-flags-nouv" name="flags[nouv]" value="nouv">
                                            <label class="control-label" for="edit-flags-nouv"><span></span>Nouveauté</label>
                                        </div>
                                        <div class="form-item form-item-flags-garanteed form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-flags-garanteed" name="flags[garanteed]" value="garanteed">
                                            <label class="control-label" for="edit-flags-garanteed"><span></span>Sessions garanties</label>
                                        </div>
                                        <div class="form-item form-item-flags-cpf form-type-checkbox checkbox">
                                            <input class="csp-form-element form-checkbox" type="checkbox" id="edit-flags-cpf" name="flags[cpf]" value="cpf">
                                            <label class="control-label" for="edit-flags-cpf"><span></span>Eligible CPF</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
              </dd>
            </dl>
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
    left: 173px;
    top: -78px;
}



.accordion dl {
}

.accordion dt > a {
  text-align: right;
  font-weight: 700;
  padding: 2em;
  display: block;
  text-decoration: none;
  color: #000;
  -webkit-transition: background-color 0.5s ease-in-out;
}
.accordion dd {
  background-color: transparent;
  color:#fafafa;
  font-size: 1em;
  line-height: 1.5em;
  margin-top: -27px;
  margin-bottom: 41px;
}
.accordion dd > p {
  padding: 1em 2em 1em 2em;
}

.accordion {
  position: relative;
  background-color: transparent;
  top: -28px;
  width: 77%;
  right:0px;
}

.accordionTitle {
  background-color: transparent;
  border-bottom: 1px solid transparent;
}
.accordionTitle:before {
  content: "+";
  font-size: 1.5em;
  line-height: 0.5em;
  float: right;
  -moz-transition: -moz-transform 0.3s ease-in-out;
  -o-transition: -o-transform 0.3s ease-in-out;
  -webkit-transition: -webkit-transform 0.3s ease-in-out;
  transition: transform 0.3s ease-in-out;
  margin-top: 6px;
  margin-left: 5px;
}
.accordionTitle:hover {
  background-color: transparent;
}

.accordionTitleActive {
  background-color:transparent;
}
.accordionTitleActive:before {
  -webkit-transform: rotate(-225deg);
  -moz-transform: rotate(-225deg);
  transform: rotate(-225deg);
}

.accordionItem {
  height: auto;
  overflow: hidden;
}
@media all {
  .accordionItem {
    max-height: auto;
    -moz-transition: max-height 1s;
    -o-transition: max-height 1s;
    -webkit-transition: max-height 1s;
    transition: max-height 1s;
  }
}
@media screen and (min-width: 48em) {
  .accordionItem {
    max-height: auto;
    -moz-transition: max-height 0.5s;
    -o-transition: max-height 0.5s;
    -webkit-transition: max-height 0.5s;
    transition: max-height 0.5s;
  }
}

.accordionItemCollapsed {
  max-height: 0;
}

.animateIn {
  -webkit-animation-name: accordionIn;
  -webkit-animation-duration: 0.65s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-direction: normal;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-fill-mode: both;
  -webkit-animation-delay: 0s;
  -moz-animation-name: normal;
  -moz-animation-duration: 0.65s;
  -moz-animation-iteration-count: 1;
  -moz-animation-direction: alternate;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-fill-mode: both;
  -moz-animation-delay: 0s;
  animation-name: accordionIn;
  animation-duration: 0.65s;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-timing-function: ease-in-out;
  animation-fill-mode: both;
  animation-delay: 0s;
}

.animateOut {
  -webkit-animation-name: accordionOut;
  -webkit-animation-duration: 0.75s;
  -webkit-animation-iteration-count: 1;
  -webkit-animation-direction: alternate;
  -webkit-animation-timing-function: ease-in-out;
  -webkit-animation-fill-mode: both;
  -webkit-animation-delay: 0s;
  -moz-animation-name: accordionOut;
  -moz-animation-duration: 0.75s;
  -moz-animation-iteration-count: 1;
  -moz-animation-direction: alternate;
  -moz-animation-timing-function: ease-in-out;
  -moz-animation-fill-mode: both;
  -moz-animation-delay: 0s;
  animation-name: accordionOut;
  animation-duration: 0.75s;
  animation-iteration-count: 1;
  animation-direction: alternate;
  animation-timing-function: ease-in-out;
  animation-fill-mode: both;
  animation-delay: 0s;
}

@-webkit-keyframes accordionIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.8);
  }
  100% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
}
@-moz-keyframes accordionIn {
  0% {
    opacity: 0;
    -moz-transform: scale(0.8);
  }
  100% {
    opacity: 1;
    -moz-transform: scale(1);
  }
}
@keyframes accordionIn {
  0% {
    opacity: 0;
    transform: scale(0.8);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}
@-webkit-keyframes accordionOut {
  0% {
    opacity: 1;
    -webkit-transform: scale(1);
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.8);
  }
}
@-moz-keyframes accordionOut {
  0% {
    opacity: 1;
    -moz-transform: scale(1);
  }
  100% {
    opacity: 0;
    -moz-transform: scale(0.8);
  }
}
@keyframes accordionOut {
  0% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0;
    transform: scale(0.8);
  }
}


@import url(https://fonts.googleapis.com/css?family=Lato:400,700,900,900italic,700italic,300);
@import url(https://fonts.googleapis.com/css?family=Montserrat:700,400);
@import url('https://fonts.googleapis.com/css?family=Montserrat');


@font-face {
    font-family: 'Nova';
    src: url('../fonts/ProximaNova-Regular.otf') format('truetype');
}

@font-face {
    font-family: "Nova";
    src: url("../fonts/ProximaNova-Bold.otf");
    font-weight: bold;
}

@font-face {
    font-family: "Nova";
    src: url("../fonts/ProximaNova-RegularItalic.otf");
    font-weight: normal;
    font-style: italic;
}

@font-face {
    font-family: "Nova";
    src: url("../fonts/ProximaNova-BoldIt.otf");
    font-weight: bold;
    font-style: italic;
}

body {
    color: #6d6f71;
    font-family: 'Nova', sans-serif;
}

img {
    max-width: 100%;
    height: auto;
}

.m-l-10 {
    margin-left: 10px !important;
}

.m-r-5 {
    margin-right: 5px !important;
}

.m-r-10 {
    margin-right: 10px !important;
}

.m-r-15 {
    margin-right: 15px !important;
}

.m-r-25 {
    margin-right: 25px !important;
}

.m-b-10 {
    margin-bottom: 10px !important;
}

.m-b-20 {
    margin-bottom: 20px !important;
}

.m-t-10 {
    margin-top: 10px !important;
}

.m-t-20 {
    margin-top: 20px !important;
}

.p-0 {
    padding: 0;
}

.strong {
    font-weight: bold;
}

.catalogue-link img {
    width: 100%;
}

h1 {
    font-size: 27px;
    color: #000;
    margin-bottom: 20px;
    font-weight: bold;
}

h1 span {
    color: #466306;
}

span.newline {
    display: block;
}

p {
    text-align: justify;
}

ul {
    margin: 0;
    padding: 0;
    margin-left: 14px;
    list-style: none;
    list-style-image: url('../images/puce.png');
    color: #073953;
}
a {
    color: #6d6f71;
}
a:hover{
    color: #a1b201;
}

ul a{color: #073953;}
ul a:hover{text-decoration:none}
.stickytop {
    position: fixed;
    top: 0;
    left: 0;
}
.slider-customers a,#statistics a{color:#ffffff;}
#statistics a:hover{text-decoration:none;}
header {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 100;
    width: 100%;
}

select.form-control {
    font-weight: bold;
}

.perso-top {
    top: -1px;
    position: relative;
}

.page > .container {
    margin-bottom: 40px;
}

.breadcrumb {
    font-style: italic;
    font-weight: normal;
    font-size: 12px;
  background:none;
  padding:0;
}

.breadcrumb a {
    color: #6d6f71;
    text-decoration: underline;
    font-weight: bold;
    font-style: normal;
}

header .header-top-mobile {
    background-color: #ffffff;
    height: 50px;
    margin-top: 0px;
    color: #FFF;
}

header .header-top-mobile a {
    color: #FFF;
}

header .header-top-mobile i {
    font-size: 27px;
}

header .header-top-mobile span {
    display: inline-block;
    font-size: 15px;
    height: 50px;
}

header .header-top-mobile span.cart {
    background-color: #ec6000;
    padding: 20px;
    padding-top: 11px;
}

header #wsnavtitle {
    position: absolute;
    top: 22px;
    left: 28px;
    font-size: 17px;
    font-weight: bold;
    color: #FFF;
}

@media (max-width: 767px){
    header #wsnavtitle {
        display:none;
    }
}

header .header-top-mobile span.phone {
    color: #000;
    font-weight: bold;
    margin-left: 10px;
    margin-top: 8px;
}
header .header-top-mobile span.phone a {
  color: #000;
}

header .header-top-mobile span.contact i {
    color: #c3d53b;
    text-decoration: none;
}

header .logo {
    text-align: center;
}

header .header-top-mobile span.phone i {
    color: #c3d53b;
}

header .header-top-mobile span.contact {
    margin-left: 15px;
}

header .header-top-mobile span.languages {
    margin-left: 15px;
}

header .header-top-mobile span.languages img {
    height: 21px;
    margin-top: -8px;
}

header .header-top-mobile span.account {
    background-color: #f27f2e;
    padding: 20px;
    padding-top: 11px;
}


header .header-top {
    background-color: #ffffff;
    height: 31px;
    margin-top: 0px;
    padding-top: 5px;
}

header .header-top .links-container {
    position: relative;
    z-index: 999;
}

header .header-top span {
    display: inline;
    font-size: 15px;
}

header .header-top span.phone{
    color: #333333;
}

header .header-top span.account {
    position: absolute;
    right: 17px;
    font-size: 23px;
    top: -3px;

}
header .header-top span.account a{
    color: #6f6f6f;
}


header .header-top span.phone i {
    color: #c1cd00;
    font-size: 19px;
}

header .header-top span.contact{
    margin-left: 50px;
    font-weight: bold;
    border-bottom: dotted thin #000;
}

header .header-top span.social-icons{
    margin-left: 45px;
}

header .header-top span.social-icons i{
    margin-left: 10px;
    font-size: 22px;
}

header .header-top span.social-icons .fa-linkedin {
    color: #0090ce;
}

header .header-top span.social-icons .fa-twitter {
    color: #5ea9dd;
}

header .header-top span.social-icons .fa-youtube-play {
    color: #cd1216;
}

header .header-top span.social-icons .fa-facebook {
    color: #39579b;
}

header .header-top span.social-icons .fa-google-plus {
    color: #de4931;
}

header .header-top span.social-icons .fa-viadeo {
    color: #f3972b;
}

header .header-top span.newsletter {
    margin-left: 50px;
    font-size: 12px;
}

header .header-top span.newsletter a, header .header-top span.languages a{
    color: #1b1b1b;
    text-decoration: none;
}

header .header-top span.newsletter i {
    color: #c1cd00;
    font-size: 19px;
}

header .header-top span.languages {
    margin-left: 45px;
    font-size: 12px;
  top: -3px;
  position:relative;
}

header .header-top span.contact a {
    font-weight: bold;
    border-bottom: dotted thin #000;
    color: #6d6f71;
}

header .header-middle {
    background-color: #f6f5fa;
    height: 165px;
    border-bottom: solid 2px #a1b201;
}

header .header-middle .header-middle-left .logo {
    top: 35px;
    position: relative;
    max-width: 200px;
}

header .header-middle input::-webkit-input-placeholder, footer input::-webkit-input-placeholder {
    font-style: italic;
}
header .header-middle input:-moz-placeholder, footer input:-moz-placeholder {
    font-style: italic;
}
header .header-middle input::-moz-placeholder, footer input::-moz-placeholder {
    font-style: italic;
}
header .header-middle input:-ms-input-placeholder, footer input:-ms-input-placeholder {
    font-style: italic;
}


footer .input-group .form-control:first-child {
    background-color: #dbdbdb;
    color: #646464;
    border-radius: 0;
}

header .header-middle .header-middle-right {
    background-image: url('../images/bg-middle-right.jpg');
    background-size: contain;
    background-repeat: no-repeat;
    background-color: #A1B201;
    height: 165px;
}

header .header-navbar {
    background-color: #FFF;
    width: 100%;
    z-index: 100;
  position: relative;
}

.wsoffcanvasopener .animated-arrow {
  /* position: fixed;*/
    top: 10px;
    padding: 5px;
    /*background-color: #EA600B;*/
    height: 27px;
    width: 32px;
    top:8px;
    left:-20px;
}

.wsmobileheader .logo{
    height: 49px;
    margin-top: 9px;
    /*margin-left: 32%;*/
}

.wsmobileheader .shopping-cart {
    position: absolute;
    right: -15px;
    top: 22px;
}

.wsmobileheader .shopping-cart i{
    font-size: 31px;
    position: relative;
    top: -6px;
}

.wsmobileheader .shopping-cart span{
    position: relative;
    color: #FFF;
    left: -21px;
    top: -6px;
    font-weight: bold;
}

.wsmobileheader .search {
    position: absolute;
    top: 11px;
    font-size: 29px;
    color: #FFF;
    right: 10px;
}

.wsmobileheader .search a {
    color: #FFF;
}

.animated-arrow span, .animated-arrow span:before, .animated-arrow span:after {
    cursor: pointer;
    height: 3px;
    width: 23px;
    background: #ffffff;
    position: absolute;
    display: block;
    content: '';
}

.animated-arrow {
    position: absolute;
    left: -18px;
    top: 7px;
}

header .header-navbar .container {
    background-color: #A1B201;
    border-bottom: solid 4px #d3e546;
    height: 70px;
  width: 100%;
}

.bg-330-formations {
    background-image: url('../images/bg-330-formations.png');
    background-size: contain;
    background-repeat: no-repeat;
    height: 306px;
    width: 356px;
    color: #6d6f71;
    margin-left: 25px;
}

.bg-330-formations .btn-green, .bg-sur-mesure .btn-green{
    color: #FFF;
    background: none;
    background-color: #c7d124;
    padding-right: 26px;
    padding-left: 40px;
}

.btn-green:hover {
    color: #ea600b;
}

.bg-330-formations .btn-green {
    margin-left: 22px;
    padding-left: 52px;
}

.bg-330-formations .btn span, .bg-sur-mesure .btn span {
    margin-right: 18px;
}

.bg-330-formations ul {
    margin: 0;
    padding: 0;
    list-style: none;
    margin-top: 29px;
    margin-left: 22px;
}

.bg-330-formations ul li {
    margin-bottom: 11px;
    color: #6d6f71;
}

.bg-330-formations h2{
    text-transform: uppercase;
    font-size: 22px;
    word-spacing: 7px;
    margin-top: 30px;
}

.bg-sur-mesure {
    background-image: url('../images/bg-sur-mesure.png');
    background-size: contain;
    background-repeat: no-repeat;
    height: 306px;
    width: 356px;
    color: #6d6f71;
    margin-left: 4px;
    padding-right: 72px;
}

.bg-sur-mesure .btn-green {
    margin-top: 17px;
}

.bg-sur-mesure p{
    font-size: 17px;
    margin-top: 22px;
    font-weight: bold;
  text-align:left;
}

.bg-sur-mesure p span{
    display: block;
}

.bg-sur-mesure h2{
    text-transform: uppercase;
    font-size: 22px;
    margin-top: 30px;
}

.bg-330-formations h2 span{
    display: block;
    word-spacing: -1px;
}



.link-list li a {
    line-height: 18px;
    border-right: none;
    text-align: left;
    padding: 6px 0px;
    color: #fff !important;
    border-right: 0 none !important;
    display: block;
    border-right: 1px solid #e7e7e7;
    background-color: transparent !important;
    background: initial;
    text-decoration: none;
    font-size: 13px;
  border:none;
}
.wsmenu-list .megamenu li .fa {
    color: #fff;
}
.wsmenu-list .megamenu li .wsmenu-click02 .fa-angle-down {font-size: 15px;}
.link-list li a:hover {
    text-decoration: none;
}

.link-list li .wsmenu-submenu-sub a{text-transform:none;}

.wsmenu-submenu li a {
    background: #fff !important;
}

.subfooter {
    border-bottom: solid 6px #00ABCF;
}

.subfooter .main-title.pink {
    background-color: #b60064;
}

.subfooter > .buttons {
    top: 6px;
    position: relative;
    overflow: visible;
    height: 30px;
    margin-left: 0%;
    top: -14px;
}

.subfooter #customers {
    padding-top: 0px;
    padding-bottom: 0px;
}

.subfooter .main-title-container.numbers {
    top: -18px;
}

.subfooter #statistics {
    display: none;
}

.subfooter .content {
    margin-top: 30px;
    margin-bottom: 30px;
}

.subfooter #customers, .subfooter #statistics {
    /*z-index: 999;*/z-index:10;
    position: relative;
}

.subfooter .main-title-container {
    text-align: center;
    display: inline;
    position: relative;
    overflow: visible;
}

.subfooter .main-title {
    background-color: #00ABCF;
    color: #FFF;
    width: 166px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    border-radius: 17px;
    height: 64px;
    padding-top: 4px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: normal;
    font-weight: bold;
    display: inline-block;
}

footer {

}

footer .footer-top {
    background-color: #eeeeee;
    padding-top: 30px;
    padding-bottom: 80px;
    text-align: center;
}

footer .footer-bottom {
    background-color: #333333;
    padding-top: 6px;
}

footer h3 {
    color: #333333;
    font-size: 23px;
    border-left: none;
    padding-left: 13px;
    margin-bottom: 26px;
    font-weight: bold;
}

.footer-link{
    display: block;
    width: 100%;
    text-align: center;
    color: #FFF;
}

.footer-link a {
    color: #b1b1b1;
}

.footer-address {
    color: #FFF;
    display: block;
    width: 100%;
    text-align: center;
}

ul.unstyle {
    list-style: none !important;
    margin-left: 0px;
    padding-left: 0px;
    list-style-image: none;
}

ul.unstyle, ul.unstyle a, ul.unstyle a:hover{
    text-decoration: none;
    color: #6b6b6b;
    line-height: 31px;
    font-size: 15px;
  display: inline-block;
}

ul.unstyle.reference-info li{
    line-height: 19px;
    font-weight: bold;
}
ul.unstyle a:hover{
    color: #A1B201;
}

#goto-newsletter input {
    height: 45px;
}
#goto-newsletter .input-group-addon {
  padding: 0;
  border: none;
}
#goto-newsletter .input-group-addon input {
    background-color: #e10174;
    color: #FFF;
    font-weight: bold;
    border: none;
    width: 45px;
}


.formation ul.unstyle.informations {
    line-height: 18px;
    margin-bottom: 15px;
}
.bg-blue {
    background-color: #00abcf;
}

.bg-pink {
    background-color: #b60064;
}

#statistics {
    font-size: 32px;
    color: #FFF;
    padding-top: 50px;
    padding-bottom: 30px;
    text-align: center;
    font-weight: bold;
}

#statistics .main-title-container {
    text-align: center;
    display: block;
    position: relative;
    top: -76px;
}

#statistics .main-title {
    background-color: #00ABCF;
    color: #FFF;
    width: 300px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    border-radius: 17px;
    height: 39px;
    padding-top: 10px;
    text-transform: uppercase;
    font-size: 17px;
    font-weight: normal;
    font-weight: bold;
}

#statistics .item{
    text-align: center;
    margin-bottom: 30px;
    cursor: pointer;
}

#statistics .item .image{
    display: block;
    margin-bottom: 19px;
    height: 55px;
}

#statistics em {
    font-size: 15px;
    display: block;
    font-style: normal;
    font-weight: normal;
    color: rgba(255, 255, 255, 0.82);
}

.homepage h1 {
    text-align: center;
    font-size: 20px;
    line-height: 31px;
    text-transform: uppercase;
    color: #ff7207;
  margin-bottom: 30px;
}

.homepage  h1 span {
    display: block;
    color: #6d6f71;
    font-size: 18px;
    text-transform: none;
    margin-bottom: 12px;
  line-height: 23px;
}

.homepage h3 {
    margin-bottom: 40px;
    margin-top: 40px;
    text-align: center;
    text-transform: uppercase;
    font-size: 23px;
    font-weight: bold;
    color: #424242;
}

.homepage h3:before {
    content:url(../images/puce-h3.png);
    margin-right: 15px;
}

#wrapper {
    margin-top: 303px;
    margin-bottom: 50px;
}

ul.colorline {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

ul.colorline li {
    padding-left: 15px;
    border-left: solid 2px red;
    margin-bottom: 30px;
}

ul.colorline li.line-blue {
    border-left: solid 2px #3c8fd6;
}

ul.colorline li.line-orange {
    border-left: solid 2px #ea7632;
}

ul.colorline li.line-green {
    border-left: solid 2px #77d63c;
}

/*news border color*/
ul.colorline li.news-actualite{
    border-left: solid 2px #c7d124;
}

ul.colorline li.news-matinales{
    border-left: solid 2px #00abcf;
}

ul.colorline li.news-journees-speciales{
    border-left: solid 2px #337ab7;
}

ul.colorline li.news-autres-evenements{
    border-left: solid 2px #ea7632;
}

ul.colorline li .title {
    text-transform: uppercase;
    font-size: 12px;
    margin-bottom: 6px;
    display: block;
    color: #5aad42;
    font-weight: 700;
}

ul.colorline li p {
    font-size: 13px;
    display: block;
}

ul.colorline li .btn , ul.calendarline li .btn{
    font-size: 12px;
    margin-top: 22px;
}

ul.calendarline {
    list-style: none;
    margin: 0px;
    padding: 0px;
}

ul.calendarline li{
    margin-bottom: 30px;
}

ul.calendarline li .date{
    background-color: #800750;
    float: left;
    color: #FFF;
    text-align: center;
    font-weight: bold;
    margin-right: 10px;
}

ul.calendarline li .date .day{
    font-size: 26px;
}

ul.calendarline li .date .month{
    background-color: #b80b74;
    padding: 3px;
    font-size: 12px;
    padding-left: 5px;
    width: 100%;
    padding-right: 5px;
    float: left;
}

ul.calendarline li .title {
    color: #b80b74;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 0px;
    display: block;
}

ul.calendarline li p {
    font-size: 13px;
    display: block;
    margin-bottom: 1px;
    color: #424344;
    font-weight: bold;
}

ul.calendarline li em {
    font-style: normal;
    font-size: 12px;
    color: #8a8a8a;
}

ul.calendarline li btn {
    font-size: 12px;
}

.btn {
    border-radius: 0px;
}

.btn-orange {
    color: #ea7632;
    background: none;
    background-color: #FFF;
    border-color: #cecece;
}

.btn-orange:hover {
    color: #fff;
    background: none;
    background-color: #ea7632;
    border-color: #ea7632;
}

.btn-orange-full > a{
    text-decoration: none;
}

.btn-orange-full, .btn-orange-full > a {
    color: #FFF;
    background: none;
    background-color: #ea7632;
    border-color: #ea7632;
}

.btn-orange-full:hover {
    color: #ea7632;
    background: none;
    background-color: #FFF;
    border-color: #ea7632;
}

.btn-orange-full:hover > a{
    color: #ea7632;
    background: none;
    background-color: #FFF;
    border-color: #ea7632;
}

.btn-big {
    text-transform: uppercase;
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: bold;
    width: 100%;
}

.buttons-top {
    z-index: 999;
    color: #FFF;
    font-weight: bold;
  width:100%;
  position:absolute;
}

.buttons-top .items-container {
    position: relative;
    z-index: 999;
}

.buttons-top .buttons-container {
    width: 330px;
}
@media (max-width: 1199px){
    .buttons-top .buttons-container {
        width: 300px;
    }
}

.buttons-top a {
    color: #FFF;
    text-decoration: none;
}

.buttons-top a:hover {
    color: #466306;
}

.buttons-top .container {
    padding-right: 50px;
}

.buttons-top .item-1 {
    background-color: #f07f3a;
    height: 70px;
}

.buttons-top .item-1, .buttons-top .item-2 {
    padding-top: 23px;
    padding-left: 23px;
    font-size: 12px;
    line-height: 15px;
}

.buttons-top .item-1 > .row i, .buttons-top .item-2 > .row i {
    font-size: 18px;
}

.buttons-top .item-2 {
    background-color: #ea600b;
    height: 70px;
}

.search-block {
    padding-left: 91px;
    padding-top: 36px;
    padding-right: 80px;
}

.search-block span.title {
    margin-bottom: 9px;
    display: block;
    text-transform: uppercase;
    color: #FFF;
    font-size: 13px;
    font-weight: bold;
}

.search-mobile {
    background-color: #a1b200;
    padding-bottom: 10px;
    margin-top: 10px;
    display: none;
}

.search-block input {
    border-radius: 0px;
}

.search-block a {
    color: #000;
    text-decoration: none;
}

.search-block a:hover {
    color: #EA600B;
}

/*.search-block .input-group-addon a,.search-block .input-group-addon button{
    display: block;
    width: 50px;
  background:none;
  border:none;
}*/

#basic-search-form .form-submit {
    width: 16px;
    height: 22px;
    padding: 2px 2px;
    color: white;
}
.search-block #advance-search {
    display: block;
    width: 100%;
    text-align: right;
    margin-top: 10px;
    font-size: 12px;
}

.search-block .input-group-addon {
    padding: 0;
    font-size: 19px;
    font-weight: 400;
    line-height: 1;
    color: #FFF;
    text-align: center;
    background-color: #466306;
    border: 1px solid #466306;
    border-radius: 0px;
}

.search-block .input-group-addon a,.search-block .input-group-addon button{
    color: #FFF;
    background-color: transparent;
    border: none;
}

.slider-customers .item {
    color: #FFF;
}

.testimony-teaser {
  text-align: center;
}

.testimony-teaser .logo {
    text-align: center;
    margin-bottom: 12px;
    height: 80px;
}

.testimony-teaser .picture {
    margin-bottom: 12px;
}

.round {
    overflow:hidden;
    -webkit-border-radius:50px;
    -moz-border-radius:50px;
    border-radius:50px;
    width:90px;
    height:90px;
}

.node-training-center .picture img,
.node-type-testimony .picture img,
.testimony-teaser .picture img {
    text-align: center;
    overflow:hidden;
    -webkit-border-radius:50px;
    -moz-border-radius:50px;
    border-radius:50px;
    width:90px;
    height:90px;
    border: solid 2px #FFF;
}

.testimony-teaser .title {
    font-size: 13px;
    font-weight: bold;
}

.testimony-teaser .poste {
    display: block;
    font-size: 13px;
    font-weight: bold;
}

.testimony-teaser .desc {
    margin-top: 15px;
    display: block;
    font-weight: lighter;
    font-size: 13px;
}

#customers {
    padding-top: 0px;
    padding-bottom: 75px;
}

#customers .buttons {
    margin-top: 40px;
    display: block;
    text-align: center;
}

#customers .main-title {
    background-color: #b60064;
    color: #FFF;
    width: 300px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    border-radius: 17px;
    height: 39px;
    padding-top: 10px;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 17px;
}

#customers .main-title-container {
    text-align: center;
    display: block;
    position: relative;
    top: -26px;
    margin-bottom: 20px;
}

.btn-grey-transparent {
    background-color: rgba(0, 0, 0, 0.39);
    color: #FFF;
}

.btn-grey-transparent:hover {
    color: #00ABCF;
}

.btn-round {
    border-radius: 20px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 12px;
}


/* SLIDER */

/* Hack to hide the double title -
  TODO line below should be removed when strategy is ok to render the 2 pink and blue blocks
  in the footer top on the frontpage differently as on the other pages (tabs) */
.not-front .bg-pink .main-title-container {display: none !important;}

#customers li.item {
  padding: 0 1em;
  max-width: 357px;
  margin-bottom: 1000px;
}

.bx-wrapper .bx-viewport {
    background: transparent;
}

.bx-wrapper {
    margin: 0 auto 0px;
    left: 5px;
}

.bx-wrapper .bx-viewport {
    box-shadow: none;
    border: none;
}

ul.slider {
    margin: 0;
    padding: 0;
}

.bx-wrapper .bx-next, .bx-wrapper .bx-next:hover {
    right: 10px;
    background: url(../images/nextHome.png) no-repeat;
    background-position: 0;
}

.bx-wrapper .bx-prev, .bx-wrapper .bx-prev:hover {
    left: auto;
    right: 10px !important;
    margin-top: 23px !important;
    background: url(../images/previousHome.png) no-repeat;
    background-position: 0;
}

.bx-wrapper .bx-pager {
    text-align: right;
    margin-top: -15px;
    position: relative;
    top: -30px;
    right: 25px;
    color: transparent;
}

.bx-wrapper .bx-pager a , .bx-wrapper .bx-pager.bx-default-pager a{
    color: transparent;
    background-color: #c2c3c2;
}

.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active {
    background: #FFF;
}





/* SLIDER */
.bx-wrapper .bx-controls-direction a {
    z-index: 99;
}
@media(max-width: 768px){
    .bx-wrapper .bx-controls-direction a {
        top: 30%;
    }
}
#customers .bx-wrapper .bx-viewport {
    background: transparent;
}

#customers .bx-wrapper {
    margin: 0 auto 0px;
}

#customers .bx-wrapper .bx-viewport {
    box-shadow: none;
    border: none;
}

#customers .bx-wrapper .bx-next {
    right: 10px;
    background: url(../images/next.png) no-repeat;
}

#customers .bx-wrapper .bx-prev {
    left: 10px;
    right: auto;
    margin-top: -18px !important;
    background: url(../images/previous.png) no-repeat;
}

#customers .bx-wrapper .bx-pager {
    text-align: center;
    margin-top: -15px;
    position: relative;
    top: 20px;
    right: 0px;
    color: transparent;
}

#customers .bx-wrapper .bx-pager a{
    color: transparent;
    background-color: #c2c3c2;
}

#customers .bx-wrapper .bx-pager.bx-default-pager a:hover, #customers .bx-wrapper .bx-pager.bx-default-pager a.active{
    background: #FFF;
}

.bx-wrapper .bx-pager.bx-default-pager a{
    color: transparent;
    background-color: #2e2e2e;
}

.bx-wrapper .bx-pager.bx-default-pager a.active {
    background: #575757;
}

/* LISTE */

.liste p{
    line-height: 16px;
}

.liste h3 {
    font-weight: bold;
    font-size: 17px;
    color: #4c4c4c;
}

.liste p a {
    color: #466306;
    text-decoration: none;
    font-style: italic;
}

.liste p a:hover {
    color: #EA600B;
}

.search-container {
    background-color: #bece36;
    padding: 15px;
    margin-bottom: 20px;
}

.formations-container {
    margin-top: 20px;
}

.formation-container {
    background-color: #e4e4e4;
    padding: 15px;
    margin-bottom: 20px;
}

.search-container {
    margin-top: 30px;
    float: left;
    width: 100%;
}

.search-container .input-group.date input,.search-container .container-inline-date input {
    border-right: transparent;
    border-radius: 0;
    background-color: #fbfbfb;
}

.search-container .checkbox label, .search-container .radio label,.form-checkboxes label,.form-type-date-popup label {
    min-height: 20px;
    padding-left: 0px;
    margin-bottom: 0;
    font-weight: 400;
    cursor: pointer;
    font-size: 15px;
  text-transform:none;
}

.search-container input[type="checkbox"] {
    display:none;
}
.search-container input[type="checkbox"] + label span {
    display:inline-block;
    width:12px;
    height:12px;
    margin:-1px 4px 0 0;
    vertical-align:middle;
    background-color: #bece36;
    border: solid 3px #FFF;
    cursor:pointer;
}
.search-container input[type="checkbox"]:checked + label span {
    background-color: #ee7101;
    border: none;
}

.search-container input[type="checkbox"]:checked + label {
    font-weight: bold;
    font-style: italic;
}

.search-container .input-group.date .input-group-addon{
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #fbfbfb;
    border: 1px solid #ccc;
    border-radius: 0;
    border-left: transparent;
}
.search-container .date-padding .input-group-addon {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    border: medium none;
    border-radius: 0;
    color: #555;
    float: right;
    font-size: 14px;
    font-weight: 400;
    line-height: 1;
    margin-right: 11px;
    margin-top: -31px;
    padding: 6px 12px;
    text-align: center;
}
.search-container .title, .formation-container .title {
    color: #000;
    font-weight: bold;
}

.search-container h5 ,.search-container label{
    text-transform: uppercase;
    color: #1b1b1b;
    font-size: 15px;
  margin-bottom: 2px;
}

.search-container label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: normal;
    color: #1b1b1b;
}

.search-container .search {
    margin-top: 10px;
}

.search-container .search-buttons {
    text-align: center;
    width: 100%;
    margin-top: 15px;
    float: left;
}

.search-container .search-buttons .btn-delete, .search-container .search-buttons .btn-validate {
    display: block;
    width: 80%;
    margin-left: auto;
    margin-right: auto;
}


.search-container .search-buttons .btn-delete {
    background-color: #ededed;
    color: #ee7101;
    border: 1px solid transparent;
    margin-bottom: 10px;
}

.search-container .search-buttons .btn-delete:hover {
    border: 1px solid #ea7632;
}

.search-container .search-buttons .btn-validate {
    background-color: #FFF;
    color: #466306;
    border: 1px solid transparent;
    font-weight: bold;
    padding: 6px 2px;
}

.search-container .search-buttons .btn-validate:hover {
    border: 1px solid #ea7632;
}

.search-container .count, .formation-container .count {
    text-align: right;
    font-weight: normal;
}

.formation .title {
    background-color: #3580a6;
    color: #FFF;
    text-transform: uppercase;
    padding: 15px;
    font-size: 13px;
}

.formation .content {
    background-color: #23698c;
    color: #FFF;
    padding: 20px;
    padding-bottom: 0px;
}

.formation .footer {
    background-color: #23698c;
    color: #FFF;
}

.formation .footer .btn-orange {
    background-color: #ea7632;
    color: #FFF;
    width: 100%;
    padding-top: 12px;
    border: none;
    padding-bottom: 12px;
}

.formation .footer a.btn-orange:hover {
    color: #23698c;
}

.formation .content ul{
    margin: 0;
    padding: 0;
    list-style-image: url('../images/puce-white.png');
}

.formation .content ul li{
    padding-left: 10px;
    margin-bottom: 8px;
    font-size: 15px;
    color: #FFF;
}

.formations {
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 30px;
    display: none;
}

.formation {
    margin-top: 15px;
}

.user .content{
    background-color: #d0efff;
    text-align: center;
    padding: 15px;
}

.user .title {
    display: block;
    text-transform: uppercase;
    color: #05354d;
    font-weight: bold;
    font-size: 15px;
}

.user .title em {
    display: block;
    font-style: normal;
    text-transform: lowercase;
    font-weight: bold;
}

.user .picture {
    width: 100px;
    height: 100px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 15px;
}

.user .name {
    display: block;
    text-transform: uppercase;
    color: #05354d;
    font-weight: bold;
    margin-top: 15px;
    text-decoration: underline;
    font-size: 16px;
}

.user .poste {
    display: block;
    color: #05354d;
    font-weight: bold;
    font-size: 14px;
}

.user p.desc {
    font-size: 13px;
    margin-top: 10px;
    color: #05354d;
}

.user .footer i, .user .footer a, .user .footer a:hover  {
    color: #FFF;
}

.user .footer {
    text-align: center;
    background-color: #006ab6;
    color: #FFF;
    padding: 5px;
    padding-top: 20px;
    padding-bottom: 20px;
    text-decoration: none;
}

.user .footer i {
    font-size: 26px;
}

.user .footer span {
    display: block;
    font-size: 12px;
}

.sidebar-block.bg-blue {
    background-color: #d0efff;
}

.sidebar-block.bg-green {
    background-color: #f2f8af;
  width: 100%;
}

.sidebar-block {
    padding: 5px;
    padding-left: 0px;
    margin-top: 20px;
    color: #314504;
  float: left;
    width: 100%;
}

.sidebar-block a {
    color: #314504;
}

.sidebar-block h4 {
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    font-weight: bold;
    margin-bottom: 30px;
}

.sidebar-block ul{
    margin: 0;
    padding: 0;
    list-style: none;
}

.sidebar-block ul li{
    border-left: solid 2px #314504;
    padding-left: 20px;
}

.sidebar-block ul li .title{
    text-transform: uppercase;
    font-size: 13px;
    color: #314504;
}

.bg-blue.sidebar-block ul li{
    border-left: solid 2px #073953;
    padding-left: 20px;
}

.bg-blue.sidebar-block ul li .title{
    text-transform: uppercase;
    font-size: 13px;
    color: #073953;
}


.sidebar-block ul li p {
    font-size: 17px;
    font-weight: bold;
  color: #073953;
}

#sidebar-contact {
    padding: 20px;
    background-color: #ffec8d;
    color: #000;
}

#sidebar-contact .content {
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
    margin-top: 15px;
}

#sidebar-contact .title {
    font-size: 15px;
    text-transform: uppercase;
    padding-left: 23px;
    font-weight: bold;
}

#sidebar-contact img {
    width: 33px;
    max-width: inherit;
}

#sidebar-contact a {
    text-decoration: underline;
    color: #000;
    font-weight: bold;
}

#sidebar-contact a:hover {
    color: #EA600B;
}

.tools-sidebar-mobile {
    background-color: #e4e4e4;
    display: block;
    float: left;
    width: 100%;
    padding-top: 20px;
    margin-bottom: 20px;
}

.tools-sidebar-mobile ul li {
    margin-bottom: 2px;
    display: inline;
    width: 33%;
    float: left;
    text-align: center;
}

.tools-sidebar-mobile ul li a{
    font-weight: 300;
    font-size: 14px;
    color: #424242;
}

.tools-sidebar-mobile ul li a img{
    display: block;
    margin-left: auto;
    margin-right: auto;

}



.social-sidebar {
    margin-top: 30px;
    margin-bottom: 20px;
    text-align: center;
    font-size: 17px;
}

.social-sidebar span {
    font-weight: bold;
    margin-bottom: 15px;
    display: block;
}

.social-sidebar ul li {
    display: inline;
    margin-right: 25px;
}

.social-sidebar ul li.last {
    margin-right: 0px;
}

.catalogue-link, .pub-link {
    margin-top: 20px;
    display: block;
}

.pub-link img{
    width: 100%;
}

.catalogue-link a:hover img{
    opacity: 0.8;
}

.fiche h2 {
    font-size: 20px;
    color: #424242;
  margin-top: 9px;
}

.fiche .rating .star {
    display: inline;
    margin-right: 10px;
    color: #f07f3a;
}

.fiche p.desc {
    margin-top: 24px;
    line-height: 17px;
}

.fiche h3 {
    font-size: 15px;
    text-transform: uppercase;
    color: #073953;
    margin-top: 30px;
    font-weight: bold;
}

.fiche ul.objectifs {
    margin: 0;
    padding: 0;
    margin-left: 14px;
    list-style: none;
    list-style-image: url('../images/puce-blue.png');
    color: #073953;
    font-weight: bold;
}

.fiche ul.objectifs li {
    padding-left: 14px;
    margin-bottom: 10px;
}

.fiche .rating a {
    color: #f07f3a;
    text-decoration: underline;
}

.link-to-customer-ratings{
    display:inline-block;
}

/*.fiche .rating #link-ratings, .fiche .rating #link-ratings-mobile{*/
    /*color: #6d6f71;*/
    /*text-decoration: none;*/
/*}*/

.fiche ul.logos {
    margin: 0;
    padding: 0;
    list-style: none;
}

.fiche ul.logos li {
    margin-bottom: 20px;
}

.fiche ul.logos li img.border {
    border: solid thin #dadada;
    padding: 3px;
    width: 100%;
}

.nav-tabs {
    background-color: #f8f8f8;
    margin-top: 20px;
    margin-left: 0;
    border: none;
}

.nav-tabs>li {
    float: left;
    margin-bottom: -1px;
    width: 121px;
    text-align: center;
    height: 61px;
    border-right: solid thin #dedede;
}

.nav-tabs>li.last {
    border-right: none;
}


.tab-pane {
    background-color: #d7f2ff;
    padding: 1px 30px 30px;
}

.tab-pane h4 {
    margin-left: -30px;
    color: #033954;
    text-transform: uppercase;
    font-size: 15px;
    font-weight: bold;
    margin-top: 30px;
}

.tab-pane h4:before {
    content:url(../images/puce-h4.png);
    margin-right: 20px;
}

.tab-pane h5 {
    color: #033954;
    margin-top: 30px;
    margin-bottom: 30px;
    font-size: 16px;
    font-weight: bold;
}

.tab-pane ul {
    color: #597882;
}

.tab-pane ul li {
    font-size: 15px;
    margin-bottom: 7px;
    padding-left: 10px;
    color: #033954;
}

.tab-pane .puce {
    color: #b1490a;
    margin-left: 13px;
    font-size: 15px;
    margin-top: 20px;
    display: block;
    font-weight: bold;
    font-style: italic;
}

.tab-pane .puce:before {
    content:url(../images/puce-orange.png);
    margin-right: 10px;
}

.tab-content {
    margin-bottom: 40px;
}

@media (min-width:768px) {
  .booking-sidebar {
    padding-left: 0;
    padding-right: 0;
  }
}

.booking-sidebar .nav-tabs {
    background-color: #f8f8f8;
    margin-top: 20px;
    margin-left: 0;
    border: none;
}

.booking-sidebar select.form-control {
    font-weight: bold;
    font-size: 12px;
}

.booking-sidebar .nav-tabs>li.active>a, .booking-sidebar .nav-tabs>li.active>a:focus, .booking-sidebar .nav-tabs>li.active>a:hover {
    color: #FFF;
    height: 100%;
    cursor: default;
    background-color: #a1b122;
    border: none;
    border-bottom-color: transparent;
}

.booking-sidebar .nav-tabs>li {
    float: left;
    margin-bottom: -5px;
    min-width: 100px;
    text-align: center;
    height: 32px;
    border: none;
    width: 50%;
}

.booking-sidebar .nav-tabs>li>a {
    margin-right: 0px;
    line-height: 1.42857143;
    border-radius: 0;
    background-color: #f8f8f8;
    color: #9e9e9e;
    height: 100%;
}

.booking-sidebar .tab-pane {
    background-color: #a1b122;
    padding-top: 10px;
    padding-bottom: 30px;
    padding-left: 15px;
    padding-right: 15px;
}

.booking-sidebar .form-group {
    margin-bottom: 2px;
    color: #333333;
}

.booking-sidebar .btn-orange {
    background-color: #ea600b;
    color: #FFF;
    position: absolute;
    width: 50%;
    left: 26%;
    margin-top: 12px;
    text-transform: uppercase;
    font-size: 20px;
    border: none;
}

.booking-sidebar a.btn-orange:hover {
    color: #23698c;
}

.booking-sidebar h3 {
    text-transform: uppercase;
    width: 100%;
    text-align: center;
    font-size: 22px;
    color: #000;
    margin-top: 0px;
}

.booking-sidebar h3:before {
    content:url(../images/puce-h3-booking.png);
    position: relative;
    top: -5px;
    left: -5px;
}

.booking-sidebar h3:after {
    content:url(../images/puce-h3-booking.png);
    position: relative;
    top: -5px;
    left: 5px;
}

.nav-tabs>li>a {
    margin-right: 0px;
    line-height: 1.42857143;
    border-radius: 0;
    background-color: #f8f8f8;
    color: #404040;
    height: 100%;
    font-size: 12px;
}

.nav>li>a:focus, .nav>li>a:hover {
    text-decoration: none;
    background-color: #eee;
    height: 100%;
}

.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #004857;
    height: 100%;
    cursor: default;
    background-color: #d7f2ff;
    border: none;
    border-bottom-color: transparent;
}



.panel-group .panel-heading+.panel-collapse>.panel-body {
    border: none;
    background-color: #d7f2ff;
    margin-top: 4px;
    padding-top: 1px;
    padding-bottom: 30px;
    padding-left: 30px;
    padding-right: 15px;
}

.tab-accordion .panel {
    border-width: 0 0 0 0;
    border-style: solid;
    border-color: #fff;
    background: none;
    box-shadow: none;
}

.tab-accordion  .panel:last-child {
    border-bottom: none;
}

.tab-accordion  .panel-group > .panel:first-child .panel-heading {
    border-radius: 4px 4px 0 0;
}

.tab-accordion .panel-group .panel {
    border-radius: 0;
}

.tab-accordion .panel-group .panel + .panel {
    margin-top: 0;
}

.tab-accordion .panel-heading {
    background-color: #e4e4e4;
    border-radius: 0;
    border: none;
    color: #fff;
    padding: 0;
}

.tab-accordion .panel-title a {
    display: block;
    color: #000;
    padding: 15px;
    position: relative;
    font-size: 18px;
    font-weight: bold;
    text-decoration: none;
}

.tab-accordion .panel-body {
    background: #fff;
}

.tab-accordion .panel .panel-heading.active {
    border-radius: 0;
    transition: border-radius linear 0s;
    background-color: #d7f2ff;
    border: none;
    color: #033954;
}
/* #bs-collapse icon scale option */

.tab-accordion .panel-heading a:before {
    content: '\f107';
    position: absolute;
    font-family: 'FontAwesome';
    right: 5px;
    top: 10px;
    font-size: 24px;
    transition: all 0.5s;
    transform: scale(1);
    padding-right: 10px;
}

.tab-accordion .panel-heading.active a:before {
    content: '\f106';
    position: absolute;
    font-family: 'FontAwesome';
    right: 5px;
    top: 10px;
    font-size: 24px;
    transition: all 0.5s;
    transform: scale(1);
    padding-right: 10px;
}

.tab-accordion #bs-collapse .panel-heading a:after {
    content: ' ';
    font-size: 24px;
    position: absolute;
    font-family: 'Material Icons';
    right: 5px;
    top: 10px;
    transform: scale(0);
    transition: all 0.5s;
}

.tab-accordion #bs-collapse .panel-heading.active a:after {
    content: '\e909';
    transform: scale(1);
    transition: all 0.5s;
}
/* #accordion rotate icon option */

.tab-accordion #accordion .panel-heading a:before {
    content: '\e316';
    font-size: 24px;
    position: absolute;
    font-family: 'Material Icons';
    right: 5px;
    top: 10px;
    transform: rotate(180deg);
    transition: all 0.5s;
}

.tab-accordion #accordion .panel-heading.active a:before {
    transform: rotate(0deg);
    transition: all 0.5s;
}

.formation .content ul.informations li {
    margin-bottom: 7px;

}

.user {
    margin-top: 20px;
}

.show-more-rs{cursor:pointer;}
header .header-top .menu-rs-more{position:absolute;display:block;background:#ffffff;-ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=90, Color=#333333)";/*IE 8*/
  -moz-box-shadow: 0px 0px 3px #333333;/*FF 3.5+*/
  -webkit-box-shadow: 0px 0px 3px #333333;/*Saf3-4, Chrome, iOS 4.0.2-4.2, Android 2.3+*/
  box-shadow: 0px 0px 3px #333333;/* FF3.5+, Opera 9+, Saf1+, Chrome, IE10 */
  filter: progid:DXImageTransform.Microsoft.Shadow(Strength=3, Direction=90, Color=#333333); /*IE 5.5-7*/right: 0;
top: 30px;padding:15px 15px 12px 10px;display:none ;}
.social-icons{position:relative;}
header .header-top .menu-rs-more-block{display:inline-block;height: 37px;}
header .header-top .menu-rs-more-block:hover .menu-rs-more{display:block !important;}
.menu-rs-more img{margin:0 3px;}

.linked-in-footer img{width:24px;}
.twitter-footer img{width:25px;}
.you-tube-footer img{width:30px;margin-top: -2px;}
.facebook-footer img{width:25px;}
.google-footer img{width:25px;}
.viadeo-footer img{width:25px;}

.subfooter > .buttons {
  top: 6px;
  position: relative;
  overflow: hidden;
  height: 30px;
  width: 630px;
  margin: auto;
}
.subfooter > .buttons span,.display-search,.hide-search,.display-button,.hide-button{cursor:pointer}

.bg-330-formations ul a {
    color: #6d6f71;
    font-size: 16px;
}
.catalogue-link img{margin-bottom:7px;}
/***slider home***/
.text-slider,.text-slider:hover{position:absolute;top:53px;left:32px;color:#ffffff;}
.title-slide{font-size:18px;width:260px;text-transform:uppercase;font-weight:bold;background: rgb(0, 0, 0);
  background: transparent;
  background: rgba(0, 0, 0, 0.7);/* FF3+,Saf3+,Opera 10.10+,Chrome,IE9*/
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000);/*IE 5.5-7*/
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000)";/*IE8*/
zoom: 1;padding:24px 18px 10px 18px;}
.desc-slide{width:370px;background: rgb(0, 0, 0);
  background: transparent;
  background: rgba(0, 0, 0, 0.7);/* FF3+,Saf3+,Opera 10.10+,Chrome,IE9*/
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000);/*IE 5.5-7*/
  -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#b2000000,endColorstr=#b2000000)";/*IE8*/
zoom: 1;padding:14px 18px;}
.cta-slide{width:40px;height:40px;text-align:center;display:block;font-size:26px;line-height:40px;color:#fff;background:#f07f3a;position:absolute;bottom:-20px;right:-20px;-moz-border-radius: 40px;/*Firefox*/
  -webkit-border-radius: 40px;/*Safari, Chrome*/
border-radius: 40px;}
.text-slider:hover .cta-slide{background:#C7D124}
/***liste***/
.formation ul.unstyle a{color:#ffffff;}
.user a:hover{text-decoration:none;}
.checkbox, .radio {
    margin-bottom: 12px;
}
.voir-plus{cursor:pointer;color: #466306;
font-style: italic;}
.voir-plus:hover{color: #ea600b;}
.text-hidden{display:none;}
/***fiche***/
.nav-tabs > li > a {
    font-size: 13px;
    line-height: 14px;
}
.nav-tabs > li {
    min-width:120px;
    width: auto;height: 50px;
}
.nav-tabs > li.last {
    float: right;
    width: 124px;
}
.tab-pane p{color:#033954}

.videoWrapper {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  padding-top: 25px;
  height: 0;
  margin-bottom:50px;
}
.videoWrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.formation ul.unstyle a {
    line-height: 17px;
}
/* Small devices (tablets, 768px and up) */
@media (min-width: 768px) {

  #incontournable {
        height: 397px;
  }
    header .header-middle .header-middle-right {
        background-size: cover;
  }


    header .header-top-mobile span.contact a {
        font-weight: bold;
        border-bottom: dotted thin #000;
        color: #6d6f71 !important;
        text-decoration: none;
  }

    .pub-link {
        margin-top: 0px;
  }

    .colorline .col-sm-4, .calendarline .col-sm-4{
        text-align: right;
  }

    .btn-big {
        width: 60%;
  }

    .search-container .search-buttons .btn-delete, .search-container .search-buttons .btn-validate {
        display:inline-block;
        width: 39%;
        margin-left: auto;
        margin-right: auto;
  }

    .bg-blue.sidebar-block ul li {
        border-left: solid 2px #073953;
        padding-left: 20px;
        margin-bottom: 29px;
  }

    .formation .content ul.informations li {
        margin-bottom: 12px;
  }

    .subfooter .main-title-container.numbers {
        top: 0px;
  }

    .social-sidebar {
    margin-top: 20px;
  }

    .register-link {
    margin-top: 10px;
        width: auto;
        padding: 17px;
  }

    .wsmenu-submenu {
        top: 69px;
  }

    .wsmobileheader {
        text-align: center;
  }

    header .header-top-mobile span.phone, header .header-top-mobile span.phone a {
        color: #000;
        font-weight: bold;
        margin-left: 10px;
        margin-top: 8px;
  }

    .wsmobileheader .logo {
        height: 49px;
        margin-top: 9px;
        margin-left: auto;
        margin-right: auto;
  }

    header .header-top {
        background-color: #ffffff;
        height: 50px;
        margin-top: 0px;
        padding-top: 13px;
  }

    header .header-navbar .container, header .header-middle .container  {
        width: 100%;
  }

    .wsmenu {
        z-index: 999;
  }

    .wsoffcanvasopener .animated-arrow {
        z-index: 999;
  }

    #wrapper {
        margin-top: 15px;
  }


  .homepage .pub-link img {
        width: 100%;
        height: 233px;
  }
    .search-container .search-buttons .btn-delete {
        margin-bottom: 0px;
  }

    .search-container .search-buttons .btn-delete {
        margin-right: 25px;
  }

    .catalogue-link {
        margin-top: 0;
  }

    .btn-agenda {
        margin-left: 23%;
  }

    ul.calendarline li p {
        font-size: 13px;
  }

    .homepage h1 span {
        margin-bottom: 8px;
  }

    .bg-330-formations {
        margin-left: 0px;
  }

    .pub-link img{
        width: 100%;
  }

    .btn-agenda {
        margin-left: 0%;
  }

    .perso-top {
        top: 3px;
  }

    .bg-sur-mesure {
        margin-left: 38px;
  }

    .catalogue-link {
        /*padding-left: 0px;*/
  }

    footer span.newline {
        display: inline;
  }

    header .logo {
        text-align: left;
  }

    header {
        position: relative;
        top: auto;
        left: auto;
  }

    .subfooter {
        border-bottom: solid 6px #00ABCF;
    position: relative;
    z-index: 10;
  }

    .subfooter .main-title.pink {
        background-color: #b60064;
  }

    .subfooter > .buttons {
        top: 6px;
        position: relative;
        overflow: hidden;
        height: 30px;
        margin-left:auto;
    width: 630px;
  }

    .subfooter #customers {
        padding-top: 20px;
        padding-bottom: 20px;
  }

    .subfooter #statistics {
        display: none;
  }

    .subfooter .content {
        margin-top: 30px;
        margin-bottom: 30px;
  }

    .subfooter #customers, .subfooter #statistics {
        z-index: 999;
        position: relative;
  }

    .subfooter .main-title-container {
        text-align: center;
        display: inline;
        position: relative;
        overflow: hidden;
        height: 30px;
  }

    .subfooter .main-title {
        background-color: #00ABCF;
        color: #FFF;
        width: 300px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        border-radius: 17px;
        height: 39px;
        padding-top: 4px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: normal;
        font-weight: bold;
        display: inline-block;
  }

    .reference-info {
        margin-top: 20px;
  }

    .reference-info li{
        display: inline;
        float: left;
        margin-right: 10px;
        font-weight: bold;
        color: #000;
  }

    .liste #incontournable {
        height: 343px;
        margin-top: 11px;
        overflow: hidden;
  }

    .catalogue-link img {
        /*margin-top: 11px;*/
  }

    ul.colorline li .btn, ul.calendarline li .btn {
        font-size: 12px;
        margin-top: 22px;
        width: 100%;
    max-width:150px;
  }

    .fiche img.callback  {
        width: 63%;
        float: right;
        margin-top: 8px;
        margin-right: 34px;
  }

    .fiche ul.logos {
        margin-top: 15px;
    }
}

/* Medium devices (desktops, 992px and up) */

@media (min-width: 992px) {

  .fiche img.callback  {
        width: 100%;
        float: left;
        margin-top: 0px;
        margin-right: 0px;
  }

    .reference-info li{
        color: #6b6b6b;
  }

    ul.colorline li .btn, ul.calendarline li .btn {
        width: auto;
  }

    .homepage .pub-link img {
        width: 100%;
        height: auto;
  }

    .homepage .catalogue-link {
        margin-top: -11px;
  }

    .liste #incontournable {
        height: auto;
        margin-top: 11px;
  }

    .catalogue-link img {
        margin-top: 11px;
  }

    .search-container .checkbox label, .search-container .radio label,.form-checkboxes label,.form-type-date-popup label {
        min-height: 20px;
        padding-left: 0px;
        margin-bottom: 0;
        font-weight: 400;
        cursor: pointer;
        font-size: 13px;
    text-transform:none;
  }

    #incontournable {
        height: auto;
  }

    .fiche h2 {
        margin-top: 20px;
  }

    h1 {
        font-size: 27px;
        color: #000;
        margin-bottom: 20px;
        font-weight: bold;
  }

    .reference-info li{
        display: inline;
        float: left;
        margin-right: 10px;
        font-weight: normal;
  }

    footer .footer-top ul.unstyle li:last-child {
        padding-left: 0%;
  }

    footer .footer-top ul.unstyle li:last-child .input-group{
        max-width: 100%;
  }

    .search-block {
        padding-left: 91px;
        padding-top: 36px;
        padding-right: 80px;
  }
    .bg-blue.sidebar-block ul li {
        margin-bottom: 12px;
  }

    .register-link {
        margin-top: 0px;
  }

    .subfooter .main-title-container.numbers {
        top: initial;
  }

    .tools-sidebar ul li {
        margin-bottom: 2px;
  }

    .tools-sidebar ul li a{
        font-weight: 300;
        font-size: 13px;
        color: #424242;
  }

    .tools-sidebar ul li a:hover{
        font-size: 13px;
  }

    .perso-top {
        top: -1px;
  }

    .wsmenu {
        width: 100%;
        float: left;
        padding-top: 10px;
        padding-bottom: 0px;
  }

    .wsmenu-list > li > a {
        font-size: 16px;
        font-weight: bold;
        text-transform: uppercase;
        line-height: 19px;
  }

    .wsmenu-list > li > a .fa {
        display: inline-block;
        font-size: 36px;
        line-height: inherit;
        margin-right: 4px;
  }

    .wsmenu-list > li > a {
        font-size: 14px;
  }

    .wsmenu-list > li > a span {
        display: block;
  }
  ul.mobile-sub.wsmenu-list {
    height: 60px;
  }
  .wsmenu-list > li {
    height: 100%;
  }

    .wsmenu-list li:hover>a, .wsmenu-list > li > a:hover {
        background-color: transparent !important;
        color: #466306;
  }

    .wsmenu-submenu li a:hover {
        color: #A1B201 !important;
  }

    .wsmenu-list > li > a {
        color: #FFF;
  }

    .wsmenu-list li:hover > .megamenu {
        top: 66px;
        background-color: #466306;
        border-top: 4px solid #d3e546;
  }

    .wsmenu-list .megamenu li a:hover {
        background: transparent !important;
        text-decoration: none;
        color: #d4e740 !important;
        font-weight: bold;
  }

    .megamenu .title {
        border-bottom: none;
        padding: 9px 5px 9px 0px;
        font-size: 17px;
        color: #FFF;
        margin-bottom: 7px;
        text-align: left;
        /*height: 39px;*/
        text-transform: uppercase;
        font-weight: bold;
        font-size: 16px;
  }

    .wsmenu-list > li.icon {
        top: 14px;
        position: relative;
  }

    .wsmenu-submenu {
        top: 275px;
  }

    header .header-navbar .container {
        height: 70px;
  }

    .bg-330-formations {
        background-image: url('../images/bg-330-formations.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 306px;
        width: 356px;
        color: #6d6f71;
        margin-left: 0px;
  }

    .bg-330-formations h2{
        text-transform: uppercase;
        font-size: 22px;
        word-spacing: 7px;
        margin-top: 30px;
        padding-top: auto;
  }

    .bg-sur-mesure {
        background-image: url('../images/bg-sur-mesure.png');
        background-size: contain;
        background-repeat: no-repeat;
        height: 309px;
        width: 755px;
        margin-left: 58px;
        color: #6d6f71;
        padding-left: 177px;
    padding-right: 5px;
  }

    .bg-sur-mesure .btn-green {
        margin-top: 65px;
  }

    .bg-sur-mesure p{
        font-size: 20px;
        margin-top: 22px;
        font-weight: bold;
  }


    .catalogue-link img {
        width: auto;
  }

    .homepage h3 {
        font-size: 17px;
  }

    ul.calendarline li .date{
        margin-right: auto;
  }

    .btn-big {
        width: auto;
  }

    #statistics .item{
        margin-bottom: 10px;
  }

    footer .footer-top {
        text-align: left;
  }

    footer h3 {
        color: #333333;
        font-size: 17px;
        border-left: solid 2px #333333;
        padding-left: 13px;
        margin-bottom: 26px;
        font-weight: bold;
  }

    footer span.newline {
        display: block;
  }

    .link-list li a {
        color: #ffffff !important;
  }

    .pub-link {
        /*margin-top: 2px;*/
        display: block;
        /*padding-left: 0px;*/
  }

  .sidebar .pub-link {
        margin-top: 15px;
  }
    header .header-navbar .container, header .header-middle .container  {
        width: 970px;
  }

    .social-sidebar {
        text-align: left;
        font-size: 14px;
  }

    .subfooter > .buttons {
        top: 6px;
        position: relative;
        overflow: hidden;
        height: 30px;
    width: 630px;
    margin: auto;
  }
  .subfooter > .buttons .display-numbers{cursor:pointer}
    header .header-middle .header-middle-right {
        background-size: contain;
  }

  .booking-sidebar .btn-orange {
        background-color: #ea600b;
        color: #FFF;
        position: absolute;
        width: 193px;
        left: inherit;
        margin: 10px;
        text-transform: uppercase;
        font-size: 17px;
        border: none;
  }

    ul.unstyle.reference-info li{
        font-weight: normal;
  }

    .second-column {
        margin-top: -14px;
  }
}

/* Large devices (large desktops, 1200px and up) */
@media (min-width: 1200px) {
    header .header-top {
        background-color: #ffffff;
        height: 50px;
        /*margin-top: -69px;*/
        padding-top: 13px;
  }

    header .header-navbar .container, header .header-middle .container  {
        width: 1170px;
  }
  .booking-sidebar .btn-orange {
        background-color: #ea600b;
        color: #FFF;
        position: absolute;
        width: 242px;
        left: inherit;
        margin: 10px;
        text-transform: uppercase;
        font-size: 20px;
        border: none;
  }
}



/****/
@media (max-width:1200px) {

    header .header-top-mobile span.languages {
        position: absolute;
        right: 160px;
        top: 17px;
        border: none;
  }

  header .header-top span.contact {
  margin-left: 20px;}

  header .header-top span.social-icons {
  margin-left: 20px;}

  header .header-top span.newsletter {
  margin-left: 20px;}

  /**home**/
  .bg-sur-mesure {
    height: 269px;
    margin-left:0;
    float: right;
    padding-left: 126px;
    padding-right: 85px;
  width:657px;}
  .bg-sur-mesure p {
    font-size: 15px;
    font-weight: bold;
  margin-top: 2px;}
  .bg-sur-mesure .btn-green {
    margin-top: 38px;
  padding-left: 40px;}
  .bg-330-formations .btn span, .bg-sur-mesure .btn span {
  margin-right: 10px;}
  .bg-330-formations .btn-green {
    margin-left: 22px;
  padding-left: 18px;}
  .bg-330-formations ul {
  margin:24px 0 0 22px;}
  .bg-330-formations ul li {
  margin-bottom: 7px;}
  .bg-330-formations {
    height: 265px;
  width: 305px;}
  .bg-330-formations h2 {
  font-size: 20px;}
  /***slider home***/
  .text-slider,.text-slider:hover{top:40px;left:25px;}
  .title-slide{font-size:16px;width:260px;padding:12px 15px 5px 15px;}
  .desc-slide{width:370px;padding:10px 15px;}
  /***temoignages***/
  #customers .bx-wrapper{width:770px;}

  /***fiche***/
  .nav-tabs > li {
  min-width: 94px;}
  .nav-tabs > li.last {width: 95px;}

  .user .footer .col-xs-6{width: 100%;}
}
.only-mobile{display: none !important;}
@media (max-width:992px) {
  body{overflow-x: hidden;width: 100%;}
  .wsoffcanvasopener {
    width: 100%;
  }
  .footer-top .m-t-20 {
    margin: auto;
  width: 460px;}
  .footer-top .unstyle .strong{line-height:22px;}
  footer .footer-bottom {
  padding: 20px 0;}
  header .header-navbar {
    position: relative;
  top: -7px;}

  .wsmenu-list{background-color: #a1b201;}
  .wsmenu-click i {
    color: #ffffff;
  }
  .wsmenucontainer{margin-left:0}
  .wsmenu > .wsmenu-list > li > a > .fa {
    color: #ffffff;
  }
  .wsmenu > .wsmenu-list > li > a {
    color: #ffffff;
  }
  .wsmenu-list .megamenu,.megamenu > ul > li > a{background-color: #466306 !important;color:#ffffff !important}
  .megamenu ul li.title{border:none}
  .wsmenu > .wsmenu-list > li > a,.wsmenu-list .title a{
    text-transform: uppercase;
  }
  footer .footer-top {
    padding-bottom: 50px;
  }
  .footer-top .unstyle .strong {
    margin-top: 30px;
  }

  .wsmobileheader .search-visible{display:block !important;}
  header {
    position: fixed;
    top: 0;
  }
  #wrapper {
  margin-top:300px;}
  .search-mobile {
  margin-top: -20px;}

  .search-block {
    padding-left: 20px;
  padding-right: 20px;}
  .wsmobileheader .search span{cursor:pointer}

  .header-middle .search-block {
    padding-left: 50px;
    padding-right: 30px;
  }
  .only-mobile{display: block !important;}
  .link-rs-menu-mobile{float: left !important;
  width: 20% !important;}
  .link-rs-menu-mobile a{border:none !important;}
  .link-rs-menu-mobile .fa{font-size: 20px !important;}

  /***home**/
  .bg-sur-mesure {
    background-size: cover;
    float: right;
    height: 225px;
    margin-left: 0;
    padding-left: 95px;
    padding-right: 85px;
    width: 485px;
  }
  .bg-330-formations {
    height: 225px;
    width: 255px;
    font-size: 15px;
  }
  .bg-330-formations h2 {
    font-size: 17px;margin-top: 17px;
  }
  .bg-330-formations ul {
    margin: 0 0 0 8px;
  }
  .bg-330-formations ul li {
    margin-bottom: 0;
  }
  .bg-330-formations .btn-green,.bg-sur-mesure .btn-green{
    margin-left: 2px;
    margin-top:21px;
    padding: 2px 10px 3px 18px;
  }
  .bg-sur-mesure .btn-green {
    margin-top: 32px;padding: 2px 22px 3px 18px;
  }
  .bg-330-formations .btn span, .bg-sur-mesure .btn span {
    margin-right: 2px;
  }
  .bg-330-formations h2 {
    font-size: 15px;
    margin-bottom: 11px;
    margin-top: 20px;
  }
  .bg-sur-mesure h2 {
    font-size: 16px;
    margin-top: 19px;
  }

  /***temoignages***/
  #customers .bx-wrapper{width:390px;}
  .subfooter > .buttons {
  height: 60px;top:16px;}
  .subfooter .main-title {
  padding-top: 13px;}
  .subfooter .main-title {
  height: 60px;}

  /***fiche***/
  ul.unstyle.reference-info li {
  font-weight: normal;}
  .register-link {
  width: 63%;}
  .tools-sidebar-mobile .unstyle {
  width: 100%;}
  .social-sidebar {
    margin-bottom: 30px;
  margin-top: 3px;}

  .fiche #incontournable {
    height: 397px;
  margin-top: 9px;}

  #statistics .item {
    display: inline-block;
  float: none;vertical-align: top;}
  #statistics .main-title,#customers .main-title{
  height: 43px;width: 280px;}
  .bg-330-formations h2 span {
  display:inline;}
  .bg-330-formations h2 {
  word-spacing: 0;}

  .user .footer .col-xs-6{width:50%;}
  .todate{margin-top:10px;}
  .sidebar-block {
    margin-top: 10px;
  }
  #sidebar-contact {
  padding: 20px 60px;}

    #training-register-block{
        visibility: hidden;
        position: absolute;
    }
}
.wsmobileheader .search .search-close-icon{display:none;}
@media (max-width:767px) {
  .homepage h1 {
    margin-bottom:5px;
  }
  .wsmobileheader .search{display:block !important;}

    header .header-top-mobile span.languages {
        position: absolute;
        right: 160px;
        top: 17px;
        border: none;
  }

  header .header-middle .header-middle-left .logo {
  top: 10px;
    margin: 0 auto;}

  header .header-middle {
  height: 120px;}

  #wrapper {
  margin-top: 260px;}

  .wsoffcanvasopener header{
    margin-left:240px;
  }

  /***home***/
  .catalogue-link img{margin:30px 0;}
  .bg-sur-mesure {
  background-image: url("../images/bg-sur-mesure-mobile.png");}
  .bg-330-formations{
  background-image: url("../images/bg-330-formations-mobile.png");}

  .bg-330-formations,.bg-sur-mesure{
    background-position: center center;
    background-size: 100% auto;
    height: auto;
    margin-right: 15px;
    width: 93%;
    margin-bottom:15px;
    margin-left: 15px;
    float: none;
    padding: 15px 125px 15px 25px;
  }
  .bg-330-formations{
    padding: 15px 25px;
  }
  .bg-330-formations .btn-green:after{background-image: url("../images/bg-330-formations-mobile-picto.png");content:"";display:block;width:70px;height:132px;position:absolute;right:-22px;bottom:-29px;background-size: 100% auto;background-repeat:no-repeat;}
  .bg-sur-mesure h2,.bg-330-formations h2 {
    font-size: 23px;
    margin-bottom: 22px;
  margin-top: 20px;}

  .subfooter .main-title {
  width: 245px;}
  .subfooter > .buttons {
  width: 540px;}
  .subfooter .main-title-container.numbers {
  top: 0;}
  .bg-330-formations .btn-green,.bg-sur-mesure .btn-green{
    position: relative;margin-left: 2px;
    margin-top:21px;
    padding: 2px 50px 3px 30px;
    margin-bottom: 20px;
  }
  .bg-sur-mesure .btn-green {
    margin-top:5px;padding: 2px 32px 3px 28px;
  }
  /***slider home***/
  .text-slider,.text-slider:hover{top:20px;left:15px;}
  .title-slide{font-size:14px;width:240px;padding:8px 12px 5px 12px;}
  .desc-slide{width:340px;padding:8px 12px;}
  /***sidebar***/
  .user,#sidebar-contact{
  margin-top:20px;text-align: center;}
  #sidebar-contact .col-xs-10,#sidebar-contact .col-xs-2{width:100%}

  /***search***/
  .search-container .pull-right {
    position: absolute;
  right: 14px;}
  .search-container .title,.formations-container .title{font-size:13px;padding-right:30px;}

  .formations .formation .col-sm-6{margin-bottom:30px;}

  .bg-330-formations .btn-green, .bg-sur-mesure .btn-green{font-size: 17px;}

  .bg-330-formations {
  font-size: 17px;}
  .bg-sur-mesure p {
    font-size: 18px;
  }

  ul.calendarline li p,ul.calendarline li em,ul.calendarline li .title,ul.colorline li .title,ul.colorline li p{
    font-size: 17px; text-align: left;
  }
  .slider-customers .item .title,.slider-customers .item .poste{
    font-size: 17px;
  }
  .slider-customers .item .desc{
    font-size: 16px;
  }
  ul.calendarline li .date {
    margin-bottom: 20px;
  }
  body{font-size: 16px;}
  .liste p {
    line-height: 24px;
  }

  .footer-link,.footer-address{font-size: 13px;}
  .search-container .title, .formations-container .title {
    font-size: 16px;
  }
  .display-button i,.display-search i,.hide-search i,.hide-button i{
    font-size: 24px;
  }
  .search-buttons .btn {
    font-size: 18px;
  }
  .user .title {
    font-size: 18px;
  }
  .user .name {
    font-size: 19px;
  }
  .user .poste {
    font-size: 15px;
  }
  .user p.desc {
    font-size: 17px;
  }
  .user .footer span {
    font-size: 16px;
  }
  ul.unstyle.reference-info li {
    font-size: 17px;
    line-height: 21px;
  }
  .fiche #incontournable {
    height: auto;
    padding-bottom: 30px;
  }
  .register-link {
    width: 100%;
    font-size: 20px;
    height: 70px;
    line-height: 46px;
  }
        .page-checkout .gototop{
            display: none;
        }

}


@media (max-width:640px) {
  .footer-top .m-t-20 {
  width: 270px;}
  .search-block {
    padding-left: 20px;
  padding-right: 20px;}

  header .header-top-mobile i {
  font-size: 22px;}

  header .header-top-mobile span.languages img {
    height: 16px;
  margin-top: -12px;}

  header .header-top-mobile span {
    font-size: 13px;
  height: 40px;}
  header .header-top-mobile{
  height:40px;}
  header .header-top-mobile span.account {
  padding: 7px 15px 15px;}
  header .header-top-mobile span.cart {
  padding: 7px 15px 15px;}
  header .header-top-mobile span.languages {
  right: 120px;}
  header .header-middle .header-middle-left .logo {
    margin: auto;
  width: 130px;}
  header .header-middle {
  height: 100px;}
  #wrapper {
  margin-top: 220px;}
  header .header-navbar {
  top: 0;}

  .calendarline a{text-decoration:none !important;display: block;
    float: left;
    text-decoration: none !important;
    /*width:calc(100% - 100px);*/
    width:80%;padding-right: 0;
  }
  .homepage h1 {
  line-height: 22px;}
  /***slider home***/
  .text-slider,.text-slider:hover{top:20px;left:15px;}
  .title-slide{font-size:14px;width:240px;padding:8px 12px 5px 12px;}
  .desc-slide{display:none;}



  #customers .bx-wrapper{width:100%;max-width:370px !important;}
  .slider-customers .item {
    margin-left: -15px;
  margin-right: 25px !important;}
  .slider-customers .item .desc {
    margin: auto;
  max-width: 200px;}

  .subfooter .main-title {
  width: 160px;}
  .subfooter > .buttons {
  width: 355px;}
  .subfooter .main-title-container.numbers {
  top: 0;}
  .subfooter .customers .main-title {
  padding-top: 6px;}
  .subfooter .main-title-container.numbers {
  top: -13px;}

  .btn {
  white-space: normal;}
  .btn-green{
  white-space: nowrap;}

  .user .footer .col-xs-6{width:100%;margin-bottom:20px;}

        body {
            font-size: 14px;
        }


}
@media (max-width:550px) {
  .register-link {
    font-size: 18px;
    height: 50px;
  line-height: 25px;}

  .calendarline a{
    width:70%;
  }
}


@media (max-width:440px) {
  .title-slide{font-size:15px;width:150px;padding:8px 12px 5px 12px;}
  #statistics .item {
  height: 180px;}

  .bg-sur-mesure .btn-green {
  padding: 2px 22px 3px 18px;}

  .bg-330-formations .btn-green{
  padding: 2px 20px 3px;}
  .bg-sur-mesure h2, .bg-330-formations h2 {
  margin-bottom: 10px;}

  .register-link {
    font-size: 18px;
    height: 40px;
  line-height: 20px;}
}

@media (max-width:400px) {
  /**search***/
  .search-container .pull-right {
  top: 30%;}

}
@media (max-width:380px) {
  /***home***/
  .bg-330-formations, .bg-sur-mesure {
    background-position: right top;
    background-size: cover;
  }
  .bg-sur-mesure {
    padding: 15px 125px 45px 25px;
  }
  .cta-slide {
    bottom: -5px;
    font-size: 16px;
    height: 20px;
    line-height: 20px;
    right: -10px;
  width: 20px;}

  .subfooter .main-title {
  font-size: 13px;}
  .subfooter .main-title {
  width:49%;}
  .subfooter > .buttons {
  width:92%;}
  .subfooter .main-title-container.numbers {
  top: -12px;}
  .subfooter .numbers .main-title{padding-top:13px;padding-right: 5px;
  padding-left:5px;}
  .subfooter .m-l-10{margin-left:2px !important;}

  .bg-330-formations .btn-green, .bg-sur-mesure .btn-green {
    padding: 2px 20px 3px;
  }

  .bg-330-formations .btn-green, .bg-sur-mesure .btn-green {
    padding: 2px 13px 3px;
  }

  #sidebar-contact {
  padding: 20px;}


}
@media (max-width:350px) {
  .register-link {
    font-size: 15px;
    height: 32px;
  line-height: 15px;}
}
@media (max-width:344px) {
  .subfooter > .buttons {
    top: 12px;
  }
  .subfooter .main-title-container.numbers {
    top: 0px;
  }
  .subfooter .numbers .main-title {
    padding-top: 6px;
  }
  .subfooter .main-title {
    height: 70px;
  }


}
@media (max-width:340px) {
  .header-top-mobile .phone i {
  display:none;}
  header .header-top-mobile span.contact i {
    color: #c3d53b;
    margin-top: 9px;
    text-decoration: none;
  }

  .bg-330-formations .btn-green, .bg-sur-mesure .btn-green {
    font-size: 15px;
  }

}
@media (max-width:320px) {
  .calendarline a{
    width:65%;
  }
}
@media (max-width:315px) {
  .register-link {
    font-size: 14px;
    height: 30px;
    line-height: 10px;
  }
}
@media (max-width:300px) {
  .footer-top .m-t-20 {
  width: 90%;}

  .calendarline a{
    width:60%;
  }
}
/***goToTop***/
.gototop {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.gototop.active {
  opacity: 1;
  visibility: visible;
}
.gototop a {
  width: 50px;
  height: 50px;
  display: table;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.gototop a i {
  height: 50px;
  display: table-cell;
  vertical-align: middle;
}
.gototop a:hover, .gototop a:active, .gototop a:focus {
  text-decoration: none;
  outline: none;
}

/***fiche onglet formateur***/
.tab-pane:after{content: "";display: block;clear:both;}
.tab-pane{color:#00323d}
.formateur{background:#ffffff;margin-top: 40px;padding-bottom: 30px;}
.formateur h4 {margin-left: -15px;margin-bottom: 28px;}
.left-formateur{text-align:center;}
.left-formateur .btn-orange{display:inline-block;}
.formateur h5 {
    margin-top: 0;
}
.formateur img{width:100%;}
.photo-formateur{margin-bottom:30px;
  width:130px;height:130px;overflow:hidden;display:inline-block;
  -moz-border-radius: 130px;/*Firefox*/
  -webkit-border-radius: 130px;/*Safari, Chrome*/
border-radius: 130px;}

/***fiche onglet plus**/
.plus-formation,.plus-formation .left-plus{padding-left:0}
.point-plus-formation{display:block;color:#00323d;background:url(../images/plus-form.png) no-repeat;padding-left:46px;min-height:16px;margin-bottom:32px;background-position:left 3px;}
#tab-pane-plus h4{
    margin-bottom:28px;
}

/***fiche onglet temoignages***/
.temoignage-fiche{border: 1px solid #eaeaea;
  /*Firefox*/
  -moz-border-top-left-radius: 15px;
  -moz-border-top-right-radius: 15px;
  -moz-border-bottom-right-radius: 15px;
  -moz-border-bottom-left-radius: 0px;
  /*Safari, Chrome*/
  -webkit-border-top-left-radius: 15px;
  -webkit-border-top-right-radius: 15px;
  -webkit-border-bottom-right-radius: 15px;
  -webkit-border-bottom-left-radius: 0px;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  border-bottom-right-radius: 15px;
  border-bottom-left-radius: 0px;
  padding:28px 21px;
  background:#ffffff;
  margin-bottom:22px;
}
.intro-temoignages{font-size:14px;margin:20px 0;}
.intro-temoignages .formation-name{font-weight:bold;font-style:italic;}
.details-temoignage{background:url(../images/icon-user.png) no-repeat;padding-left:63px;background-position:left top;}
.details-temoignage .rating{margin-bottom:24px;}
.details-temoignage .rating strong{color:#073953}
.logo-formaeva {
    display: inline-block;
    font-size: 11px;
    font-style: italic;
    vertical-align: top;
    width: 184px;
  margin-left: 10px;
  margin-top: -16px;
}
.partenaire-temoignages{float:right;margin-top: 8px;}
.comment-icon{display:inline-block;width:17px;height:15px;background:url(../images/comment-icon.png);background-repeat:no-repeat;margin-right:12px}
.btn-comment{text-transform:uppercase;}
.btn-comment:hover .comment-icon{background-position:left -15px;}

/***fiche onglet sessions***/
.ligne-session{background:#ffffff;border:1px solid #eaeaea;border-bottom:none;padding:15px;font-size:16px;}
.t-sessions{margin-top:28px;}
.ligne-session .btn{float:right;}
.ligne-session:after{content: "";display: block;clear:both;}
.ligne-session div{padding:0;padding-top:10px;}
.date-session{color:#878787;font-weight:bold}
.info-session{color:#a1b122;font-style:italic;}
.ligne-session i{margin:0 10px;font-size:18px;}
.place-session{font-weight:bold}
.green-text-session{font-style:italic;font-size:14px;color:#a1b122;margin-top:30px;}
.green-text-session .fa{margin-bottom:30px;float: left;margin-right:10px;}

/***images-menu***/
.image-menu{background-repeat:none;background-size:cover;height:196px;}

@media (max-width:1200px) {
  .date-session,.info-session,.place-session{
    width:50%;
  }
  .ligne-session .btn {
    margin-top: -30px;
  }
  .partenaire-temoignages {
    display: block;
    float: none;
    margin-top: 40px;
  }
}
@media (max-width:992px) {
  .image-menu{display:none;}
  .date-session{
    width:100%;
  }
  .place-session,.info-session{
    width:170px;
  }
  .date-session,.info-session,.place-session{
    float:left;
  }
  .ligne-session .btn {
    margin-top: 0;
    position: absolute;
    right: 20px;
    top: 20px;
    width: 30%;
  }
  .ligne-session{position:relative}
  .panel-group .panel-heading + .panel-collapse > .panel-body {
    padding: 1px 20px 30px;
  }
  .tab-pane h4 {
    margin-left: -20px;
  }
  .tab-pane h4:before {
    margin-right: 10px;
  }
  .left-plus{text-align:center;margin-bottom: 20px;}
  .photo-formateur {
    display: block;
    margin: auto auto 20px;
  }
  .left-formateur .btn-orange {
    margin-bottom: 20px;
  }
  .tab-pane .formateur h4 {
    margin-left: -15px;
  }
  .formateur{padding-top:1px;}

  .left-formateur{width:30%;float:left;}
  .desc-formateur{width:70%;float:left;}
  .formateur:after{content: "";display: block;clear:both;}
}

@media (max-width:640px) {
  .left-formateur{width:100%;float:none;}
  .desc-formateur{width:100%;float:none;}
  .ligne-session .btn {
    margin-bottom: 10px;
    margin-top: 12px;
    position: relative;
    right: 0;
    top: 0;
    width: 100%;
  }
  .info-session,.place-session{
    width:40%;
  }
  .place-session{
    width:60%;
  }
  .info-session .fa{
    float: left;
    margin: 6px 10px;
  }
  .info-session{line-height:14px;margin-top: -6px;
  width: 110px;float: right;}

}

@media (max-width:450px) {
  .place-session{
    width:40%;min-width: 130px;
  }
}

@media (max-width:370px) {
  .place-session{
    width:100%;
  }
  .info-session .fa{
    float:none;
    margin: 0 10px;
  }
  .info-session{line-height:14px;margin-top:0;
  width:100%;float:none;}
}

.element-invisible{display:none !important;}

/*** custom checkboxes ***/
.checkbox input[type="checkbox"] {
opacity: 1;display: inline-block; }
.checkbox input[type="checkbox"] {display:none;}

.form-item-start-date {
    margin-bottom: -10px;
}

#edit-cities{margin-top:7px;}
#edit-cities .form-item{width:50%;display: inline-block;margin: 3px 0;}

.formation .title a{color:#ffffff;}

.formations-container .expanded .formations{display:block;}

@media (max-width:992px) {
  #edit-tags .form-item,#edit-duration .form-item{width:50%;display: inline-block;margin: 3px 0;}
}

@media (min-width:992px) {.wsmenu-list > li > a{max-width: 150px;}
}

.page header{z-index: 998;}

.sidebar .btn {
  white-space: normal !important;
  word-wrap: break-word;
  margin-bottom: 20px;
}
@media (max-width:992px) {
  .sidebar .btn {
    display: block;
    max-width: 50%;
    margin-left: auto;
    margin-right: auto;
  }
}
@media (max-width:640px) {
  .sidebar .btn {
    max-width: 100%;
  }
}

@media (max-width:767px) {
  #wrapper .region-content .panel-pane.pane-entity-view.pane-node > .row {
    margin-left: inherit;
    margin-right: inherit;
  }
}

/*
 * Row with equal height columns
 * --------------------------------------------------
 */
@media (min-width:768px) {
  .row-eq-height {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
  .row-eq-height > .col-sm-4 {
    display: -ms-flex;
    display: -webkit-flex;
    display: flex;
  }
  .row-eq-height > .col-sm-4 > div {
    flex: 1;
  }
}

/* Fixes vertical alignment in Firefox */
.form-control.form-file {
  height: auto;
}

.centered {text-align: center;}

.delete-line-item {
    background:url(../images/trash-grey.png) no-repeat;
    height:26px;
    width:24px;
    border:none;
    text-indent:-9999px;
    cursor:pointer;
}

.delete-line-item:hover {
    background: url(../images/trash-red.png) no-repeat;
}

.link-orange {
    color: rgb(255, 46, 0);
    margin: 0 10px;
}

.field-introduction, .field-close_form {margin-bottom: 1em;}
.field-close_form a {text-decoration: underline;}

/* Week Planning */
.formation-container.accordion .field-commerce-price {
  display: inline;
}

#more_info .formation-container.accordion .pg2 {
  color: #033954;
  margin-top: 0;
  margin-bottom: 8px;
  margin-left: -15px;
  font-size: 15px;
  font-weight: normal;
  background: none;
  padding-left: 20px;
  background: url(../images/puce.png) no-repeat scroll left 7px;
  line-height: 20px;
}

.formation-container.accordion .subtitle-speaker {margin-bottom: 20px;}

.panel-separator {clear: both;}

/* Advanced search - collapsed class */
.collapsed .search {display: block;}
.collapsed .hide-search {display: block;}
.collapsed .display-search {display: none;}
.not-collapsed .search {display: none;}
.not-collapsed .hide-search {display: none;}
.not-collapsed .display-search {display: block;}

.formation .unstyle .picto-formation{
    width:60px;
}

.bt-tab{font-weight:bold;}

/* training tab panels */
.p4, #more_info .pg2 {
    font-weight: normal !important;
    background: url(../images/puce.png) no-repeat scroll left 7px !important;
    padding-left: 20px !important;
}

@media (max-width: 991px){
    .checkout_completion_message{
        margin-top:20px;
    }
}

.trainer-page-wrapper, .speaker-page-wrapper{
    text-align:left;
    color: #033954;
    font-weight: bold;
}
@media (max-width: 767px){
    .trainer-page-wrapper, .speaker-page-wrapper{
        text-align:center;
    }
    header .header-top-mobile span.contact a {
        font-weight: bold;
        color: #6d6f71 !important;
        text-decoration: none;
    }
}



.page-user .nav-tabs {
   border-bottom: 1px solid #ea600b;
    /*padding-bottom: 5px;*/
    margin-bottom: 20px;
}

.page-user .nav-tabs>li {
    display: block;
    margin: 10px 20px 10px 0px;
    width: auto;
    text-align: center;
    height: auto;
    border: 0;
}

.page-user .nav-tabs>li>a {
    background-color: #f8f8f8;
    color: #404040;
    /*border-radius: 0 12px 0 0;*/
    border: 1px solid #ea600b;
    font-weight: bold;
}

.page-user .nav>li>a:focus,
.page-user  .nav>li>a:hover {
    text-decoration: none;
    background-color: #eee;
    height: 100%;
}

.page-user .nav-tabs>li.active>a,
.page-user .nav-tabs>li.active>a:focus,
.page-user .nav-tabs>li.active>a:hover {
    color: #fff;
    height: 100%;
    cursor: default;
    background-color: #ea600b;
    /*border: none;*/
    border-bottom-color: transparent;

}

.contact_table{
    margin: 35px;
}

.contact_table th{
    text-align: right;
}

.contact_table td{
    border: 0px solid #6d6f71;
    padding: 5px;
}

.views-field-order-number a {
    width: 100%;
    display: block;
    height: 100%;
}

.page-cart .breadcrumb{
    display: none;
}

select.error{
    border: 1px solid red;
}

.error_msg{
    color:red;
}

#cart-goto-first-step{
    margin-right: 15px;
}

@media (max-width: 380px){
    #wrapper.page  .p-h-30 {
        padding-left: 20px;
        padding-right: 20px;
    }
}


@media (max-width: 320px){
    #wrapper.page  .p-h-30 {
        padding-left: 10px;
        padding-right: 10px;
    }
}

#map2007{
    width: 720px;
    height: 600px
}

@media (max-width: 992px){
    #map2007{
        width: 400px;
        height: 600px
    }
}

@media (max-width: 400px){
    #map2007{
        width: 200px;
        height: 600px
    }
}

@media (max-width:991px){
    .side-block-responsive{
        margin:0px -15px;
    }
}

@media (min-width:992px){
    .side-block-responsive{
        margin:0px -15px 10px -15px;
    }
}

.buttons-container .logout {
    margin-top: 2px;
    display: block;
    border-top: 1px solid #FFF;
    padding-top: 4px;
    width: 70px;
}

@media (max-width: 1200px){
    .details-livre-lien{
        text-align: center;
    }
}

.form-select{
    padding: 6px 25px 6px 12px;
}

#modalContent{
    height:88%;
}

#newsletter-form .form-checkboxes .form-type-checkbox{
    padding: 3px 0px;
}

#newsletter-form .form-checkboxes label{
    display: initial;
}

.pub-link-domain{
    margin-top: 10px;
    display:block;
}

.pub-link-domain img{
    width:100%;
}

@media (min-width:768px) and (max-width:991px){

    .user .footer {
        padding-bottom:36px;
    }

}

.btn-paragraph-link{
    width: auto !important;
    margin: 5px;
}

#catalog-form .form-checkboxes .form-type-checkbox{
    padding: 3px 0px;
}

#catalog-form .form-checkboxes label{
    display: initial;
}

#block-csp-core-news-headers .colorline .btn-orange, .calendarline .btn-orange{
  font-weight: bold;
}

#site-map .site-map-menu:first-child > li > a {
  font-weight: 600;
  font-size: 18px;
  display: block;
  background-color: #A1B201;
  color:white;
  padding-left: 5px;
  margin:5px;
}

#site-map .site-map-menu:first-child > li > ul > li > a{
  font-weight: 700;
  font-size: 16px;
}

#site-map .site-map-menu:first-child > li > ul > li > ul li a{
  font-weight: 300;
  font-size: 14px;
}

.separator-contact-mobile{
  display: none!important;
  color: #000;
}

@media (max-width: 991px){
  .separator-contact-mobile{
    display: inline-block!important;
  }
}

@media (max-width: 350px){
  header .header-top-mobile span.contact {
    margin-left: 5px;
  }
}

#more_info #tab-pane-trainings p {
    color: white;
}

#block-siderbar-term-domain-full .catalogue-link{
  margin-top: 10px;
}

.user {
    margin-top: 10px;
}

@media (max-width: 991px){
  #block-siderbar-term-domain-full div:nth-child(2n+3){
    clear: both;
  }
}

.testimony-teaser img:first-child{
  width: auto;
  max-height: 100%;
}

.breadcrumb>li+li:before {
    padding: 0 5px;
    color: #000;
    content: "\003e";
}

.find-more-button, .find-more-button-2{
  position: relative;
  top: 5px;
  color: white !important;
}

.find-more-button:hover, .find-more-button-2:hover{
  color: white !important;
}

.profile-info-bo{}
.profile-info-bo-title{
    font-weight:bold;
}

.ligne-session .tooltip {
}
.ligne-session .tooltip-inner {
    min-width: 300px;
    padding: 10px;
    background: #fff;
    color: #000;
}
.ligne-session .tooltip.top .tooltip-arrow {
    border-width: 0;
}
.form-select{
  max-width: 100%;
}
.form-checkboxes,.csp-form-element{
    text-align: left;
    position: relative;
    left: 32px;
}
</style>

<script type="text/javascript">
  /*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
/*!
 * classie - class helper functions
 * from bonzo https://github.com/ded/bonzo
 * 
 * classie.has( elem, 'my-class' ) -> true/false
 * classie.add( elem, 'my-new-class' )
 * classie.remove( elem, 'my-unwanted-class' )
 * classie.toggle( elem, 'my-class' )
 */

/*jshint browser: true, strict: true, undef: true */
/*global define: false */
( function( window ) {
'use strict';
function classReg( className ) {
  return new RegExp("(^|\\s+)" + className + "(\\s+|$)");
}
var hasClass, addClass, removeClass;

if ( 'classList' in document.documentElement ) {
  hasClass = function( elem, c ) {
    return elem.classList.contains( c );
  };
  addClass = function( elem, c ) {
    elem.classList.add( c );
  };
  removeClass = function( elem, c ) {
    elem.classList.remove( c );
  };
}
else {
  hasClass = function( elem, c ) {
    return classReg( c ).test( elem.className );
  };
  addClass = function( elem, c ) {
    if ( !hasClass( elem, c ) ) {
      elem.className = elem.className + ' ' + c;
    }
  };
  removeClass = function( elem, c ) {
    elem.className = elem.className.replace( classReg( c ), ' ' );
  };
}

function toggleClass( elem, c ) {
  var fn = hasClass( elem, c ) ? removeClass : addClass;
  fn( elem, c );
}
var classie = {
  hasClass: hasClass,
  addClass: addClass,
  removeClass: removeClass,
  toggleClass: toggleClass,
  has: hasClass,
  add: addClass,
  remove: removeClass,
  toggle: toggleClass
};
if ( typeof define === 'function' && define.amd ) {
  define( classie );
} else {
  window.classie = classie;
}
})( window );
var $ = function(selector){
  return document.querySelector(selector);
}
var accordion = $('.accordion');
accordion.addEventListener("click",function(e) {
  e.stopPropagation();
  e.preventDefault();
  if(e.target && e.target.nodeName == "A") {
    var classes = e.target.className.split(" ");
    if(classes) {
      for(var x = 0; x < classes.length; x++) {
        if(classes[x] == "accordionTitle") {
          var title = e.target;
          var content = e.target.parentNode.nextElementSibling;
          classie.toggle(title, 'accordionTitleActive');
          if(classie.has(content, 'accordionItemCollapsed')) {
            if(classie.has(content, 'animateOut')){
              classie.remove(content, 'animateOut');
            }
            classie.add(content, 'animateIn');
          }else{
             classie.remove(content, 'animateIn');
             classie.add(content, 'animateOut');
          }
          classie.toggle(content, 'accordionItemCollapsed');      
        }
      }
    }  
  }
});
</script>