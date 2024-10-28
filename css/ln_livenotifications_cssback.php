<?php header("Content-type: text/css"); ?>

@charset "utf-8";
/* CSS Document */

#media-upload #ln_livenotifications{
	display: none;
}
#ln_admin {
	padding: 15px;
	width: 96%;
	margin-top: 10px;
}
#ln_admin li{
	border-top: 1px solid #DFDFDF;
	padding: 5px;
	list-style: none; 
}
#ln_admin .full_right{
	float: left;
}
#ln_admin table{
	width:770px;
}
.ln_friend_form{
	border: 1px solid #DFDFDF;
	width: 95%;	
	padding: 10px;
	margin-top: 10px;
}
.ln_friend_form .submit{
	padding: 0;
}
.ln_friend_form select{
	height:auto;
	width:500px;
}
.form table tr{
	height:auto;
	marin-top:10px;
}
	
.form textarea{
	width:60% !important;
	height:90px !important;
	}

.form input,.form textarea,.form select{
	margin-left:50px;
	width:50%;
	height:30px;
    border: 1px solid #4195fc; /* some kind of blue border */
	font-size:16px;
    /* other CSS styles */

    /* round the corners */
    -webkit-border-radius: 4px;
       -moz-border-radius: 4px;
            border-radius: 4px;


    /* make it glow! */
    -webkit-box-shadow: 0px 0px 4px #4195fc;
       -moz-box-shadow: 0px 0px 4px #4195fc;
            box-shadow: 0px 0px 4px #4195fc; /* some variation of blue for the shadow */

}

#ln_admin table tr td{
	padding:5px 0;
}
#___gcse_0
{
width: 518px; float: left;
}
.cse .gsc-control-cse, .gsc-control-cse
{
  width: 500px !important;
  margin:5px !important;
  padding:0px !important;
}
#menuOrder
{
background:black;
margin-left: 29px;
margin-top: 44px;
border: 1px solid #000000;
position: absolute;
height: auto;
border-radius: 0 0 8px 8px;
width: 258px;
}
#menuOrder > ul
{
    float: left;
    list-style: none outside none;
    padding: 5px;
    position: relative;
    width: 250px;
}
#menuOrder ul li {
    display: inline;
    list-style: none outside none;
}

.topProperties {
    color: #9B9B9B !important;
    float: left;
    height: auto;
    margin-top: 5px;
    width: 100%;
}
.topProperties:hover {
    background-color: #666 !important;
   
}

.top_image {
    float: left;
    margin-right: 6px;
    padding: 5px;
    width: 100px;
    z-index: 1;
}

.top_title {
    float: right;
    margin: 9px 5px 0 0;
    width: 45%;
}
.socialButtonMenu{
float:right;
margin-top:-2px;
margin-left:67px;
position:absolute;
}

.top_image img {
    height: 23px;
   
}

#mysearch{
background-color: #3D3D3D;
/*-moz-box-shadow: 10px 10px 5px <?php echo $_GET['dropdown_bgcolor'];?>;
    -webkit-box-shadow: 10px 10px 5px <?php echo $_GET['dropdown_bgcolor'];?>;
	box-shadow: 10px 10px 5px <?php echo $_GET['dropdown_bgcolor'];?>;
	*/background-color: #3D3D3D;/
	border-bottom: 1px solid rgba(35, 35, 35, 0.2);
    border-radius: 0 0 9px 9px;
    box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1);
    display: none;
    float: right;
    height: 62px;
    position: absolute;
    right: 318px;
    top: 30px;
    width: 550px;
    z-index: 9;
}
#mysearch1{
background-color: #3D3D3D;
    display: none;
    float: right;
    height: 25px;
    position: absolute;
    right:0px;
    top: 48px;
    width: 315px;
    z-index: 9;
}
.socialdropdown
{
/*float:right;margin-left:18px;margin-top:-7px;*/
float:right;margin-top:-7px;
padding-left:10px;
}
.socialdropdownMenu{

margin-top:-15px;display:none;


}

@media screen and (-webkit-min-device-pixel-ratio:0)
{.socialdropdown
	{float:right;margin-top:-17px;
}
}

.socialdropdown1
{
float:right;margin-right:38px;margin-top:-7px;
}
@media only screen and (max-width: 875px) {
.toplinks{
	 margin-left:0px !important;
}
#ln_livenotifications  .ln_logo {
	 margin-left:0px !important;	
}
.ln_topsec{height:45px}
}
@media only screen and (max-width: 810px) and (min-width: 750px) {

#ln_livenotifications  .ln_logo {
width:32%;	
}
.ln_topsec{height:45px}
}

@media only screen and (max-width: 750px) {
#ln_livenotifications  .ln_logo {
	width:30%	
}
.ln_topsec{height:45px}
}

@media only screen and (max-width: 715px) and (min-width:645px){
#ln_livenotifications  .ln_logo {
width:28%;
}
.toplinks input#s{width:80%;}
.ln_topsec{height:45px;}
}

@media only screen and (max-width: 645px) and (min-width:590px){
.socialdropdown{display:none;}
.socialdropdownMenu{display:block}
.toplinks input#s{width:80%;}
.welcomelink{width:120px !important;}
.ln_topsec{height:45px;}

}
@media only screen and (min-width:590px){
.ln_topsec{height:45px}
.toplinks{display:block;}
.welcomelink{margin-top:-8px;}

}
@media only screen and (max-width: 590px){
       
        .toplinks{float:none !important;display:none ;}
       
        #ln_livenotifications  .ln_logo {
        width:45% !important;
        }
       
        .socialdropdown{display:none;}
       
        .socialdropdownMenu{display:block}
       
        .toplinks input#s{width:80%;}
        
        .welcomelink{width:120px !important;}
	
    	#mysearch{right:-17px;top:62px;}
	}

#ln_admin .desc{
	display: block;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 10px;
}

#ln_admin table input[type="text"],#ln_admin table textarea{
	width: 400px;
}

#ln_admin input[type="submit"]{
	margin-left: 132px;
}

#ln_push{
	position:relative;
}

#ln_livenotifications{
	display: block; 
	left: 0;
	position: fixed;
	top: 0;
	width: 100%;
	z-index: 999999;
	background-image:url('../images/bg.png');
	background-repeat:repeat-x;
	
	font-size: 12px;
	color: <?php echo $_GET['dropdown_color'];?>;
}
#TB_window{
	z-index: 9999999 !important;
}
#ln_livenotifications a{
	color: <?php echo $_GET['dropdown_color'];?>;
	text-decoration: none;
}
#ln_livenotifications .ln_topsec{
	width:100%;
	height:45px;
	background-color: <?php echo $_GET['banner_bgcolor']?>;
    background-image:url('../images/bg.png');
    background-repeat:repeat-x;
    box-shadow: 0 0 4px #333333;
}

#ln_livenotifications .ln_topsec  .ln_center{
	display: none;
	margin: 0 auto;
	padding-top: 8px;
	padding-top: 7px\9;
	text-align: center;
	width: 800px;
	color:#fafafa
}

#ln_livenotifications .ln_topsec .ln_center  .ln_block{
	margin:5px;
	display:inline;
}

#ln_livenotifications  a.ln_botsec{
	width:35px;
	height:0px;
	background-image:url("../images/down_arrow.png");
	border-radius:0px 0px 5px 5px;
	border-style: solid;
	border-color: #FFFFFF;
	border-width: 3px;
	box-shadow: 0 0 5px rgba(0, 0, 0, 0.35);
	display:block;
	position: absolute;
	right: 0;
	top:-43px;
	padding: 76px 0 0;
}

#ln_livenotifications  a.ln_botsec:hover{
	opacity:.8;
}

#ln_livenotifications  a.ln_close{
	background-image: url("../images/sprite.png");
	background-position: 0 58px;
	height:19px;
	position: absolute;
	right: 10px;
	top: 13px;
	width: 18px;
	z-index: 999999;
}

#ln_livenotifications  a.ln_close:hover {
	background-position: 0 77px;
}

#ln_livenotifications a.ln_button{
	border: 2px solid #FFFFFF;
	color: #FFFFFF;
	font-family: verdana;
	font-size: 12px;
	font-weight: bold;
	padding: 6px 20px;
	text-decoration: none;
	text-transform: uppercase;
	border-radius: 20px 20px 20px 20px;
	line-height:30px;
}

#ln_livenotifications  .ln_logo {
	float: left;
	margin-left: 40px;
}

@media only screen and (max-width: 450px) {
#ln_livenotifications  .ln_logo {
	width:70%;
    margin-left:0px !important;
}
}

@media only screen and (max-width: 300px) {
#ln_livenotifications  .ln_logo {
width:64%;
}
}

.SignUpBox{
right: 20px;
background-color: #FFF;
border-bottom: 1px solid rgba(35, 35, 35, 0.2);
border-radius: 0 0 9px 9px;
box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1);
display:none;
}


#ln_livenotifications  .ln_signin_dropdown{
	right: 20px;
}

#ln_livenotifications  .ln_signin{
	float: right;
	margin-right: 40px;
	margin-top: 10px;
	color: #fff;
    text-shadow: 1px 1px 1px #000000;
    font-size: 14px;
    font-weight: bold;
	padding: 2px;
}
#ln_livenotifications  .ln_register{
	float: right;
	margin-right: 60px;
	margin-top: 10px;
}
#ln_livenotifications  .ln_register_dropdown{
	right: 60px;
}
#ln_livenotifications .ln_dropdown_nouser{
	display: none;
	position: absolute;
	top: 44px;
	width: 200px;
	padding: 10px;
    margin-right:68px;
}
.popupbody{
    background-color: #FFF;
	display:none;
	-moz-box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1);
    -webkit-box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1);
	box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1)
	border-bottom: 1px solid rgba(35, 35, 35, 0.2);
    border-radius: 0 0 9px 9px;
    box-shadow: 4px 4px 0 0 rgba(35, 35, 35, 0.1);
    font: normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding: 2px;
	border: 1px solid #E1E1E1;
	position: absolute;
	margin: 0;
}
.popupbody li{
	list-style:none;
	margin-bottom: 3px;
}
.popupbody li a, .popupbody li label {
	color: #3E3E3E;
	padding: 6.235px 10px;
	text-decoration: none;
	text-align: left;
	white-space: nowrap;
}
.livenotificationbit p{
	margin: 0;
}
#ln_settings_window ul{
	margin: 0;
}
li.livenotifications_loading,
li.livenotificationbit,
li.livenotifications_link
{
	position: relative;
	clear:both;
}

#livenotifications_list,
#livenotifications_list_pm,
#livenotifications_list_moderation,
#livenotifications_list_friend{
	z-index:1;
	top: 35px; !important;
	text-align: left;
}
#livenotifications a.selected,
#livenotifications_pm a.selected,
#livenotifications_moderation a.selected,
#livenotifications_friend a.selected,
#livenotifications a:hover,
#livenotifications_pm a:hover,
#livenotifications_moderation a:hover,
#livenotifications_friend a:hover
{
	/*background: <?php echo $_GET['dropdown_hover_bgcolor'];?>;*/
}
#livenotifications a,
#livenotifications_pm a,
#livenotifications_moderation a,
#livenotifications_friend a{
	padding-top: 5px;
	padding-left: 3px;
}

li.livenotifications_loading {
	height: 40px;
	background-image: url(../images/ln-ajax-loader.gif);
	background-repeat: no-repeat;
	background-position: center center;
}
.livenotificationbit {
	min-height: 50px;
	margin: 0 ;
	padding:3px !important;
	color: inherit !important;
	font-size: 13px;
	font-family: Tahoma,Calibri,Verdana,Geneva,sans-serif;
	cursor: pointer;
	overflow: hidden;

}
li.livenotificationbit a {
	display: inline !important;
	padding: 0 !important;
	margin: 0 !important;
	background: inherit !important;
}
.livenotificationbit img {
	float: left;
	margin-right: 4px;
	cursor:pointer;
}

span.livenotifications_num {
    background-color: #DF0A0A;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4) inset, 0 1px #F1F1F1;
    color: #FFFFFF;
    font-size: 11px;
    line-height: 11px;
    margin-left: -8px;
    padding: 1px 4px;
    position: relative;
    text-shadow: 0 1px #505050;
}


span.livenotifications_num_moderation {
    background-color: #3ccf51;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4) inset, 0 1px #F1F1F1;
    color: #FFFFFF;
    font-size: 11px;
    line-height: 11px;
    margin-left: -8px;
    padding: 1px 4px;
    position: relative;
    text-shadow: 0 1px #505050;
    }
    
span.livenotifications_num_pm {
    background-color: #737373;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4) inset, 0 1px #F1F1F1;
    color: #FFFFFF;
    font-size: 11px;
    line-height: 11px;
    margin-left: -8px;
    padding: 1px 4px;
    position: relative;
    text-shadow: 0 1px #505050; 
    }
    
span.livenotifications_num_friend {
    background-color: #858bf3;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.4) inset, 0 1px #F1F1F1;
    color: #FFFFFF;
    font-size: 11px;
    line-height: 11px;
    margin-left: -8px;
    padding: 1px 4px;
    position: relative;
    text-shadow: 0 1px #505050;
}
li.livenotifications_link {
	background: <?php echo $_GET['dropdown_bit_bgcolor'];?>;
	color: <?php echo $_GET['dropdown_link_color']?>;
	display: block ;
	font-weight: regular;
	font-size: 12px;
	font-family: Arial,Calibri,Verdana,Geneva,sans-serif;
	min-height: 20px;
	text-align: center !important;
	padding-top:6px !important;
	cursor: pointer;
	width:330px;
}
li.livenotifications_link:hover {
	background: <?php echo $_GET['dropdown_hover_bgcolor'];?>;
	text-decoration: none;
	width:330px;
}

li.livenotifications_more {
	background: <?php echo $_GET['dropdown_bit_bgcolor'];?>;
	color: <?php echo $_GET['dropdown_link_color'];?>;
	font-weight: regular;
	font-size: 12px;
	font-family: Arial,Calibri,Verdana,Geneva,sans-serif;
	min-height: 20px;
	text-align: center !important;
	padding-top:6px !important;
	cursor: pointer;
	width:330px;
	z-index:9001;
}
li.livenotifications_more:hover {
	background: <?php echo $_GET['dropdown_hover_bgcolor'];?>;
	text-decoration: none;
	width:330px;
}
ul.ln_list_full {
	margin: 20px 0;
	padding: 0;
	border-top: 1px dotted #cccccc;
	border-bottom: 1px dotted #cccccc;
}

ul.ln_list_full li {
	margin: 20px 20px;
	padding: 5px;
	border-top: 1px solid #cccccc;
}
li.livebit {
	vertical-align: top;
	clear:left;
	min-height: 50px;
	cursor: pointer;
	position: relative;

}
#thickbox{

}
#livenotifications_list li.red,
#livenotifications_list_pm li.red,
#livenotifications_list_moderation li.red,
#livenotifications_list_friend li.red,
.ln_udd_maininfo,
ul.ln_list_full li.red {
	background: <?php echo $_GET['dropdown_bit_bgcolor'];?>;
}
#livenotifications_list li.red:hover,
#livenotifications_list_pm li.red:hover,
#livenotifications_list_moderation li.red:hover,
#livenotifications_list_friend li.red:hover,
	ul.ln_list_full li.red:hover {
	background-color: <?php echo $_GET['dropdown_bit_bgcolor'];?>;
}

#livenotifications_list li.unread,
#livenotifications_list_pm li.unread,
#livenotifications_list_moderation li.unread,
#livenotifications_list_friend li.unread,
	ul.ln_list_full li.unread {
	background-color: <?php echo $_GET['dropdown_hover_bgcolor'];?>;
}
#livenotifications_list li.unread:hover,
#livenotifications_list_pm li.unread:hover,
#livenotifications_list_moderation li.unread:hover,
#livenotifications_list_friend li.unread:hover,
ul.ln_list_full li.unread:hover {
	background-color: <?php echo $_GET['dropdown_bit_bgcolor'];?>;
}
li.livebit img {
	float:left;
	margin-right:10px;
	border: 1px solid #ccc;

}

.lnpmbit.livenotificationbit .ln_stats {
	float: left;
	font-size: 24px;
	width: 80px;
	text-align: center;
	padding-top: 5px;
	margin-right: 3px;
}

.lnpmbit.livenotificationbit .ln_context {
	font-size: 11px;
}
.lnpmbit.livenotificationbit .ln_content {
	font-size: 11px;
	color: #757575;
	margin-top: 5px;
}
.lnpmbit.livenotificationbit .ln_sender_name a{
	font-size: 12px;
	font-weight: bold;
	color: {vb:stylevar link_color};
}
.lnpmbit.livenotificationbit .ln_sender_name a:hover{
	text-decoration : underline;
	color: <?php echo $_GET['dropdown_link_color'];?>;
}
.ln_content a{
	font-size: 12px !important;
	color: <?php echo $_GET['dropdown_link_color'];?> !important;
}
.ln_content a:hover{
	text-decoration : underline;
	color: <?php echo $_GET['dropdown_link_color'];?>;
}
.ln_link{
	font-size: 12px;
	font-weight: bold;
	color: <?php echo $_GET['dropdown_link_color'];?>;
	border-bottom: 1px solid #DDD;
}
.ln_link:hover{
	text-decoration : underline;
	color: <?php echo $_GET['dropdown_link_color'];?>;
}
.lnpmbit.livenotificationbit .ln_stats span {
	font-size: 10px;
}
/* Overview pagination newer/older links */
div.ln_pagination {
	border: 1px solid #CEDFEB;
	background-color: #F2F6F8;
	color: #666;
	min-width: 100px;
	padding: 5px 10px;
}

/* Time bits */
span.ln_time {
	font-size: 11px;
	color: #A8A8A8;
	position: absolute;
	right: 4px;
	bottom: 4px;
}
p.ln_time {
	font-size: 11px;
	margin-top: 5px;
}
#livenotifications_list li.ln_title,
#livenotifications_list_pm li.ln_title,
#livenotifications_list_moderation li.ln_title,
#livenotifications_list_friend li.ln_title{
	font-weight: bold;
	color:<?php echo $_GET['dropdown_color'];?>;
	padding-bottom: 5px;
	margin-left: 4px;
}
#livenotifications_list li.ln_title a,
#livenotifications_list_pm li.ln_title a,
#livenotifications_list_moderation li.ln_title a,
#livenotifications_list_friend li.ln_title a{
	color: <?php echo $_GET['dropdown_link_color'];?>;
	text-decoration : none;
	background: none !important;
	padding-top: 0px !important;
	float: right;
}
#livenotifications_list li.ln_title a:hover,
#livenotifications_list_pm li.ln_title a:hover,
#livenotifications_list_moderation li.ln_title a:hover,
#livenotifications_list_friend li.ln_title a:hover{
	color: <?php echo $_GET['dropdown_link_color'];?>;
	text-decoration : underline;
	background: none !important;
	padding-top: 0px !important;
	float: right;
}

.ln_popupmenu{
	padding-right: 0px !important;
	float: right;
}


.livenotificationbit .request_status{
	float: left;
	width: 205px;
}
.livenotificationbit .request_status_noavatar{
	float: left;
	width: 260px;
}
.livenotificationbit .actions{
	float: right;
}
.livenotificationbit .actions button{
	margin-top: 13px;
}
.ln_pm_reply{
	float: left;
	margin-top: 5px;
}
.ln_pm_inbox{
	font-size: 12px;
	font-weight: bold;
	color: <?php echo $_GET['dropdown_link_color'];?>;
	float: right;
	margin-right: 8px;
	margin-top: 5px;
}
.ln_pm_inbox:hover{
	text-decoration : underline;
	color: <?php echo $_GET['dropdown_link_color'];?>;
}
.ln_pm_inner_window{
	width: 324px;
	cursor:default;
}
#confirm{
    padding: 2px;
}
.welcomelink {
	position: absolute;
	right: 40px;
	top: 18px;
	line-height: 0.8;
    width:170px;
}
.welcomelink  a.userdropdownlink {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	margin-left: 10px;
	/*background: <?php echo $_GET['dropdown_hover_bgcolor'];?> right center no-repeat;*/
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;
}
#user-dropdown{
	width:280px;
	left:-200px;
	top: 30px;
	display: none;
    border-radius:0 0 5px 5px;
}
.ln_udd_maininfo{
	cursor: default !important;
}
.ln_udd_link a{
	font-size: 12px;
	color: <?php echo $_GET['dropdown_link_color'];?> !important;
}
.ln_udd_link a:hover{
	text-decoration : underline;
	background: none !important;
}
.ln_udd_logout a, .ln_title a{
	color: #000 !important;
	font-weight: bold;
}
.ln_udd_username{
	font-size: 16px;
	font-weight: bold;
	color: <?php echo $_GET['dropdown_color'];?>;
}
.ln_udd_pane{
	width: 100%;
	text-align: left;
	border-top:1px solid <?php echo $_GET['dropdown_boder_color'];?>;
	background: <?php echo $_GET['dropdown_bit_color'];?>;
}
.ln_udd_leftpane{
	width: 100%;
	float: left;
	background: <?php echo $_GET['dropdown_hover_bgcolor'];?>;
}

.ln_udd_bottompane{
	width: 100%;
	border-top:1px solid <?php echo $_GET['dropdown_bit_color'];?>;
	text-align: right;
}
.ln_udd_bit {
	min-height: 25px;
	line-height: 25px;
	margin: 0 ;
	padding:3px;
	color: inherit;
	font-size: 13px;
	font-family: Tahoma,Calibri,Verdana,Geneva,sans-serif;
	overflow: hidden;
}
#avatar_editor{
	display:none;
	position: fixed;
	top: 70px;
	right: 420px;
	width: 630px;
	z-index: 99999;
}
#avatar_editor_wrapper{
	position: absolute;
	top: 0px;
	left: 0px;
	display: none;
	opacity: 0.6;
	z-index: 99998;
	background-color: black;
}

.settings_option{
	float:right;
}
#global_all_notification{
	float: left;
	width: 310px;
}
.ln_settings_window{
	width: 324px;
	cursor:default;
}
.ln_settings_window .description{
	border-top:1px solid <?php echo $_GET['dropdown_boder_color'];?>;
	border-bottom:1px solid <?php echo $_GET['dropdown_boder_color'];?>;
	padding:5px;
	font-style: italic;
	color: <?php echo $_GET['dropdown_color'];?>;
}
#save_option_settings{
	float: right;
	margin: 5px;
}
.ln_scrollpane{
	overflow:auto;
	margin: 0;
}
.clear{
	clear: both;
}

.toplinks {
	position: relative;
	float: left;
	margin-left: 20px;
	background: none;
}
.toplinks ul.isuser {
	display: block;
	float: left;
	clear: left;
	list-style: none;
	margin: 15px 0 0 0;
	padding: 0;
}
.toplinks #searchform{
	margin-top: 10px;
	margin-left:10px;
	float: left;
}
.toplinks input#s{
	background: #FAFAFA url(../images/search.png) no-repeat 5px 3px;
	border-radius: 2px;
	font-size: 14px;
	height: 24px;
	line-height: 1.2em;
	padding: 4px 10px 4px 28px;
	-webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
	border: 1px solid #DDD;
	color: #888;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}
.ln_udd_bit p{
	margin: 0;
}

#send-form select{height:auto;width:500px}
#send-form  textarea{width:500px;height:300px}
#submit input{width:100px}

/* AutoSuggest CSS - Version 1.2 */

ul.as-selections{list-style-type:none;border-top:1px solid #888;border-bottom:1px solid #b6b6b6;border-left:1px solid #aaa;border-right:1px solid #aaa;padding:4px 0 4px 4px;margin:0;overflow:auto}
ul.as-selections.loading{background-color:#eee}
ul.as-selections li{float:left;margin:1px 4px 1px 0}
ul.as-selections li.as-selection-item{color:#2b3840;font-size:13px;font-family:"Lucida Grande",arial,sans-serif;text-shadow:0 1px 1px #fff;background-color:#ddeefe;background-image:-webkit-gradient(linear,0% 0%,0% 100%,from(#ddeefe),to(#bfe0f1));border:1px solid #acc3ec;border-top-color:#c0d9e9;padding:2px 7px 2px 10px;border-radius:12px;-webkit-border-radius:12px;-moz-border-radius:12px;box-shadow:0 1px 1px #e4edf2;-webkit-box-shadow:0 1px 1px #e4edf2;-moz-box-shadow:0 1px 1px #e4edf2}
ul.as-selections li.as-selection-item:last-child{margin-left:30px}
ul.as-selections li.as-selection-item a.as-close{float:right;margin:1px 0 0 7px;padding:0 2px;cursor:pointer;color:#5491be;font-family:"Helvetica",helvetica,arial,sans-serif;font-size:14px;font-weight:bold;text-shadow:0 1px 1px #fff;-webkit-transition:color .1s ease-in}
ul.as-selections li.as-selection-item.blur{color:#666;background-color:#f4f4f4;background-image:-webkit-gradient(linear,0% 0%,0% 100%,from(#f4f4f4),to(#d5d5d5));border-color:#bbb;border-top-color:#ccc;box-shadow:0 1px 1px #e9e9e9;-webkit-box-shadow:0 1px 1px #e9e9e9;-moz-box-shadow:0 1px 1px #e9e9e9}
ul.as-selections li.as-selection-item.blur a.as-close{color:#999}
ul.as-selections li:hover.as-selection-item{color:#2b3840;background-color:#bbd4f1;background-image:-webkit-gradient(linear,0% 0%,0% 100%,from(#bbd4f1),to(#a3c2e5));border-color:#6da0e0;border-top-color:#8bb7ed}
ul.as-selections li:hover.as-selection-item a.as-close{color:#4d70b0}
ul.as-selections li.as-selection-item.selected{border-color:#1f30e4}
ul.as-selections li.as-selection-item a:hover.as-close{color:#1b3c65}
ul.as-selections li.as-selection-item a:active.as-close{color:#4d70b0}
ul.as-selections li.as-original{margin-left:0}
ul.as-selections li.as-original input{border:none;outline:none;font-size:13px;width:120px;height:18px;padding-top:3px}
ul.as-list{position:absolute;list-style-type:none;margin:2px 0 0 0;padding:0;font-size:14px;color:#000;font-family:"Lucida Grande",arial,sans-serif;background-color:#fff;background-color:rgba(255,255,255,0.95);z-index:2;box-shadow:0 2px 12px #222;-webkit-box-shadow:0 2px 12px #222;-moz-box-shadow:0 2px 12px #222;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px}
li.as-result-item,li.as-message{margin:0 0 0 0;padding:5px 12px;background-color:transparent;border:1px solid #fff;border-bottom:1px solid #ddd;cursor:pointer;border-radius:5px;-webkit-border-radius:5px;-moz-border-radius:5px}
li:first-child.as-result-item{margin:0}
li.as-message{margin:0;cursor:default}
li.as-result-item.active{background-color:#3668d9;background-image:-webkit-gradient(linear,0% 0%,0% 64%,from(rgb(110,129,245)),to(rgb(62,82,242)));border-color:#3342e8;color:#fff;text-shadow:0 1px 2px #122042}
li.as-result-item em{font-style:normal;background:#444;padding:0 2px;color:#fff}
li.as-result-item.active em{background:#253f7a;color:#fff}
@media screen and (-webkit-min-device-pixel-ratio:0){ul.as-selections{border-top-width:2px}
ul.as-selections li.as-selection-item{padding-top:3px;padding-bottom:3px}
ul.as-selections li.as-selection-item a.as-close{margin-top:-1px}
ul.as-selections li.as-original input{height:19px}
}
@media all and (-webkit-min-device-pixel-ratio:10000),not all and (-webkit-min-device-pixel-ratio:0){ul.as-list{border:1px solid #888}
ul.as-selections li.as-selection-item a.as-close{margin-left:4px;margin-top:0}
}
ul.as-list{border:1px solid #888\9}
ul.as-selections li.as-selection-item a.as-close{margin-left:4px\9;margin-top:0\9}
ul.as-list,x:-moz-any-link,x:default{border:1px solid #888}
BODY:first-of-type ul.as-list,x:-moz-any-link,x:default{/* Target FF 3.5+ */border:none}