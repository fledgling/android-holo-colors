<?
  session_start();
  $_SESSION = array();
  $_SESSION['id'] = uniqid('', true);
  include('common.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Android Holo Colors</title>
    
    <meta name="keywords" content="android,holo,holo colors,widget colors,custom spinner,custom edittext,custom checkbox,custom radio,custom progressbar,custom seekbar" />
	<meta name="description" content="The Android Holo Colors Generator allows you to easily create Android widgets with your own colours for your Android application." />
	<meta name="robots" content="index, no follow" />
	<meta name="author" content="Jerome Van Der Linden" />
    
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="include/lib/cssreset-3.4.1.min.css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:regular,medium,thin,italic,mediumitalic,bold" title="roboto" />
    <link rel="stylesheet" href="include/css/studio.css" />
    <link rel="stylesheet" href="include/lib/spectrum/spectrum-assetstudio.css" />

    <script src="include/lib/jquery.min.js"></script>
    <script src="include/lib/spectrum/spectrum.js"></script>
    <script src="include/js/asset-studio.pack.js"></script>
    
    <!-- Analytics -->
    <script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34362324-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
	<!-- Share This -->
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ed3a7034-081d-4179-9fad-3ea83de87da2"}); </script>

</head>
  <body>
    <div id="main-container">
      <div id="header">
        <h1>Android Holo Colors Generator</h1>
      </div>
      <div id="page-header">
      	<div id="breadcrumb">
          <p>
      	    <a href="http://android-ui-utils.googlecode.com/hg/asset-studio/dist/index.html">&lt;&lt; Android Asset Studio</a>
      	  </p>
      	</div>
        <p id="page-intro" style="width:820px">
          The <strong>Android Holo Colors Generator</strong> allows you to easily create Android components such as editext or spinner with your own colours for your Android application. It will generate all necessary nine patch assets plus associated XML drawables and styles which you can copy straight into your project. 
        <br/>
        If you have any question, please refer to the <a href="faq.html">FAQ</a> or <a href="https://github.com/jeromevdl/android-holo-colors/issues" target="_blank">report an issue</a>.</p>
      </div>
      
      <div id="inputs">
        <div id="inputs-form"></div>
      </div>
      <div id="outputs">
		<h3>
			Output resources: <a class="dragout form-button" onclick="javascript:downloadFile();">Download .ZIP</a>
		</h3>
		<i>(zip file contains a "res" folder)</i><br/><br/>
        <div id="block-output-edittext" class="bloc-output">
          EditText :
          <table class="bloc-output-table">
              <tr>
                <td>textfield</td>
                <td>textfield_focused</td>
                <td>textfield_activated</td>
			  </tr>
	          <tr>
	            <td><div id="output-edittext"> </div></td>
	            <td><div id="output-edittext-focus"> </div></td>
	            <td><div id="output-edittext-activated"> </div></td>
	          </tr>
          </table>
          <br />
        </div>
        
        <div id="block-output-button" class="bloc-output">
          Button :
          <table class="bloc-output-table">
              <tr>
                <td>btn_default</td>
                <td>btn_default_focused</td>
                <td>btn_default_pressed</td>
                <td>btn_default_disabled_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-button"> </div></td>
	            <td><div id="output-button-focus"> </div></td>
	            <td><div id="output-button-pressed"> </div></td>
	            <td><div id="output-button-disabled-focus"> </div></td>
	          </tr>
          </table>
          <br />
        </div>

		<div id="block-output-cbutton" class="bloc-output">
          Colored Button :
          <table class="bloc-output-table">
              <tr>
                <td>btn_default</td>
                <td>btn_default_focused</td>
                <td>btn_default_pressed</td>
                <td>btn_default_disabled_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-cbutton"> </div></td>
	            <td><div id="output-cbutton-focus"> </div></td>
	            <td><div id="output-cbutton-pressed"> </div></td>
	            <td><div id="output-cbutton-disabled-focus"> </div></td>
	          </tr>
          </table>
          <br />
        </div>

        
        <div id="block-output-checkbox" class="bloc-output">
          CheckBox :
          <table class="bloc-output-table">
              <tr>
                <td>btn_check_on</td>
                <td>btn_check_on_focused</td>
                <td>btn_check_on_pressed</td>
                <td>btn_check_on_disabled_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-checkbox"> </div></td>
	            <td><div id="output-checkbox-on-focus"> </div></td>
	            <td><div id="output-checkbox-on-pressed"> </div></td>
	            <td><div id="output-checkbox-on-disabled-focus"> </div></td>
	           </tr>
	           <tr>
                <td>btn_check_off</td>
                <td>btn_check_off_focused</td>
                <td>btn_check_off_pressed</td>
                <td>btn_check_off_disabled_focused</td>
              </tr>
	           <tr>
	            <td><div id="output-checkbox-off"> </div></td>
	            <td><div id="output-checkbox-off-focus"> </div></td>
	            <td><div id="output-checkbox-off-pressed"> </div></td>
	            <td><div id="output-checkbox-off-disabled-focus"> </div></td>
	          </tr>
          </table>
          <br />
        </div>
        
        <div id="block-output-radio" class="bloc-output">
          Radio :
          <table class="bloc-output-table">
          	  <tr>
                <td>btn_radio_on</td>
                <td>btn_radio_on_focused</td>
                <td>btn_radio_on_pressed</td>
                <td>btn_radio_on_disabled_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-radio"> </div></td>
	            <td><div id="output-radio-on-focus"> </div></td>
	            <td><div id="output-radio-on-pressed"> </div></td>
	            <td><div id="output-radio-on-disabled-focus"> </div></td>
	           </tr>
	           <tr>
                <td>btn_radio_off</td>
                <td>btn_radio_off_focused</td>
                <td>btn_radio_off_pressed</td>
                <td>btn_radio_off_disabled_focused</td>
              </tr>
	           <tr>
	            <td><div id="output-radio-off"> </div></td>
	            <td><div id="output-radio-off-focus"> </div></td>
	            <td><div id="output-radio-off-pressed"> </div></td>
	            <td><div id="output-radio-off-disabled-focus"> </div></td>
	          </tr>
	      </table>
	      <br />
	    </div>
        	    
	    <div id="block-output-spinner" class="bloc-output">
          Spinner:
          <table class="bloc-output-table">
          	  <tr>
                <td>spinner_default</td>
                <td>spinner_focused</td>
                <td>spinner_pressed</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-spinner"> </div></td>
	            <td><div id="output-spinner-focus"> </div></td>
	            <td><div id="output-spinner-pressed"> </div></td>
                <td style="width:120px">&nbsp;</td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-cspinner" class="bloc-output">
          Colored Spinner:
          <table class="bloc-output-table">
          	  <tr>
                <td>spinner_default</td>
                <td>spinner_focused</td>
                <td>spinner_pressed</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-cspinner"> </div></td>
	            <td><div id="output-cspinner-focus"> </div></td>
	            <td><div id="output-cspinner-pressed"> </div></td>
                <td style="width:120px">&nbsp;</td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-tab" class="bloc-output">
          TabWidget:
          <table class="bloc-output-table">
          	  <tr>
                <td>tab_selected</td>
                <td>tab_selected_focused</td>
                <td>tab_selected_pressed</td>
                <td>tab_unselected</td>
                <td>tab_unselected_focused</td>
                <td>tab_unselected_pressed</td>
              </tr>
	          <tr>
	            <td><div id="output-tab"> </div></td>
	            <td><div id="output-tab-selected-focus"> </div></td>
	            <td><div id="output-tab-selected-pressed"> </div></td>
	            <td><div id="output-tab-unselected"> </div></td>
	            <td><div id="output-tab-unselected-focus"> </div></td>
	            <td><div id="output-tab-unselected-pressed"> </div></td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-progressbar" class="bloc-output">
          ProgressBar :
          <table class="bloc-output-table">
              <tr>
                <td>progressbar_primary</td>
                <td>progressbar_secondary</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-progressbar-primary"> </div></td>
	            <td><div id="output-progressbar-secondary"> </div></td>
	            <td></td>
	          </tr>
          </table>
          <br />
        </div>

	    
	    <div id="block-output-seekbar" class="bloc-output">
          SeekBar:
          <table class="bloc-output-table">
          	  <tr>
                <td>seekbar_default</td>
                <td>seekbar_focused</td>
                <td>seekbar_pressed</td>
                <td>seekbar_disabled</td>
              </tr>
	          <tr>
	            <td><div id="output-seekbar"> </div></td>
	            <td><div id="output-seekbar-focus"> </div></td>
	            <td><div id="output-seekbar-pressed"> </div></td>
	            <td><div id="output-seekbar-disabled"> </div></td>
	          </tr>
	          <tr>
                <td>seekbar_primary</td>
                <td>seekbar_secondary</td>
                <td></td>
                <td></td>
              </tr>
	          <tr>
	            <td><div id="output-seekbar-primary"> </div></td>
	            <td><div id="output-seekbar-secondary"> </div></td>
                <td></td>
                <td></td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-ratingbar" class="bloc-output">
          RatingBar :
          <table class="bloc-output-table">
          	  <tr>
                <td>btn_rating_star_on</td>
                <td>btn_rating_star_on_focused</td>
                <td>btn_rating_star_on_pressed</td>
              </tr>
	          <tr>
	            <td><div id="output-ratingbar"> </div></td>
	            <td><div id="output-ratingbar-on-focus"> </div></td>
	            <td><div id="output-ratingbar-on-pressed"> </div></td>
	           </tr>
	           <tr>
                <td>btn_rating_star_off</td>
                <td>btn_rating_star_off_focused</td>
                <td>btn_rating_star_off_pressed</td>
              </tr>
	           <tr>
	            <td><div id="output-ratingbar-off"> </div></td>
	            <td><div id="output-ratingbar-off-focus"> </div></td>
	            <td><div id="output-ratingbar-off-pressed"> </div></td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-ratingstarbig" class="bloc-output">
          RatingBar Big :
          <table class="bloc-output-table">
          	  <tr>
                <td>btn_rating_star_on</td>
                <td>btn_rating_star_half</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-ratingstarbig"> </div></td>
	            <td><div id="output-ratingstarbig-half"> </div></td>
	            <td></td>
	           </tr>
	      </table>
	      <br />
	    </div>
	    
	   	<div id="block-output-ratingstarsmall" class="bloc-output">
          RatingBar Small :
          <table class="bloc-output-table">
          	  <tr>
                <td>btn_rating_star_on</td>
                <td>btn_rating_star_half</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-ratingstarsmall"> </div></td>
	            <td><div id="output-ratingstarsmall-half"> </div></td>
	            <td></td>
	           </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-toggle" class="bloc-output">
          Toggle:
          <table class="bloc-output-table">
          	  <tr>
                <td>toggle_on_normal</td>
                <td>toggle_on_focused</td>
                <td>toggle_on_pressed</td>
              </tr>
	          <tr>
	            <td><div id="output-toggle"> </div></td>
	            <td><div id="output-toggle-on-focus"> </div></td>
	            <td><div id="output-toggle-on-pressed"> </div></td>
	          </tr>
	          <tr>
                <td></td>
                <td>toggle_off_focused</td>
                <td>toggle_off_pressed</td>
              </tr>
	          <tr>
	            <td></td>
	            <td><div id="output-toggle-off-focus"> </div></td>
	            <td><div id="output-toggle-off-pressed"> </div></td>
	          </tr>
	          <tr>
                <td>toggle_on_disabled</td>
                <td>toggle_on_disabled_focused</td>
                <td>toggle_off_disabled_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-toggle-disabled"> </div></td>
	            <td><div id="output-toggle-disabled-focus"> </div></td>
	            <td><div id="output-toggle-off-disabled-focus"> </div></td>
	          </tr>
	      </table>
	      <br />
	    </div>
	    
	    <div id="block-output-list" class="bloc-output">
          List selector :
          <table class="bloc-output-table">
              <tr>
                <td>list_pressed</td>
                <td>list_longpressed</td>
                <td>list_focused</td>
                <td>list_activated</td>
              </tr>
	          <tr>
	            <td><div id="output-list"> </div></td>
	            <td><div id="output-list-longpress"> </div></td>
	            <td><div id="output-list-focus"> </div></td>
	            <td><div id="output-list-activated"> </div></td>
	          </tr>
          </table>
          <br />
        </div>
        
       <div id="block-output-fastscroll" class="bloc-output">
          Fast scroll :
          <table class="bloc-output-table">
              <tr>
                <td>fastscroll_default</td>
                <td>fastscroll_pressed</td>
                <td style="width:150px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-fastscroll"> </div></td>
	            <td><div id="output-fastscroll-pressed"> </div></td>
	            <td></td>
	          </tr>
          </table>
          <br />
        </div>
        
        <div id="block-output-search" class="bloc-output">
          Search edittext :
          <table class="bloc-output-table">
              <tr>
                <td>textfield_search_selected</td>
                <td>textfield_search_right_selected</td>
                <td style="width:120px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-search"> </div></td>
	            <td><div id="output-search-right"> </div></td>
	            <td></td>
	          </tr>
          </table>
          <br />
        </div>
        
         <div id="block-output-numberpicker" class="bloc-output">
          Numberpicker :
          <table class="bloc-output-table">
              <tr>
                <td>numberpicker_divider</td>
                <td style="width:240px">&nbsp;</td>
              </tr>
	          <tr>
	            <td><div id="output-numberpicker"> </div></td>
	            <td style="width:240px">&nbsp;</td>
	          </tr>
          </table>
          <br />
        </div>
        
	    <div id="block-output-switch" class="bloc-output">
          Switch :
          <table class="bloc-output-table">
              <tr>
                <td>switch_thumb_activated</td>
                <td>switch_thumb_pressed</td>
                <td>switch_bg_focused</td>
              </tr>
	          <tr>
	            <td><div id="output-switch"> </div></td>
	            <td><div id="output-switch-pressed"> </div></td>
	            <td><div id="output-switch-bg"> </div></td>
	          </tr>
          </table>
          <br />
        </div>
      </div>
          
	    <div id="footer">
		<p>Created by <a href="mailto:jeromevdl@android-holo-colors.com">Jérôme Van Der Linden</a>.</p>
		<p>Built upon the <a href="http://code.google.com/p/android-ui-utils" target="_blank">android-ui-utils</a> asset studio framework created by <a href="http://roman.nurik.net/" target="_blank">Roman Nurik</a>, copyright Google Inc.</p><br/>
		<p>All generated art is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 Unported License</a>.</p>
		<br/><br/>
			<div align="center" >
				<span class='st_twitter_hcount' displayText='Tweet'></span>
				<span class='st_plusone_hcount' displayText='Google +1'></span>
				<span class='st_googleplus_hcount' displayText='Google +'></span>
				<span class='st_facebook_hcount' displayText='Facebook'></span>
				<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
				<span class='st_yammer_hcount' displayText='Yammer'></span>
				<span class='st_delicious_hcount' displayText='Delicious'></span>
				<span class='st_email_hcount' displayText='Email'></span>
			</div>
		</div>
	</div>
    
    <script>
      $(studio.checkBrowser);
      
      var densities = {'xhdpi':1, 'hdpi':1, 'mdpi':1};
      var components = {
			'edittext':1, 'edittext-focus':1, 'edittext-activated':1,
      		'button':1, 'button-pressed':1, 'button-focus':1, 'button-disabled-focus':1,
      		'cbutton':1, 'cbutton-pressed':1, 'cbutton-focus':1, 'cbutton-disabled-focus':1,
      		'checkbox':1, 'checkbox-off':1, 'checkbox-off-pressed':1, 'checkbox-on-pressed':1, 'checkbox-off-focus':1, 'checkbox-on-focus':1, 'checkbox-on-disabled-focus':1, 'checkbox-off-disabled-focus':1, 
      		'radio':1, 'radio-off':1, 'radio-off-pressed':1, 'radio-on-pressed':1, 'radio-off-focus':1, 'radio-on-focus':1, 'radio-on-disabled-focus':1, 'radio-off-disabled-focus':1,
      		'spinner':1, 'spinner-pressed':1, 'spinner-focus':1,
      		'cspinner':1, 'cspinner-pressed':1, 'cspinner-focus':1,
      		'progressbar':1, 'progressbar-primary':1, 'progressbar-secondary':1, 
      		'seekbar':1, 'seekbar-pressed':1, 'seekbar-focus':1, 'seekbar-disabled':1, 'seekbar-primary':1, 'seekbar-secondary':1,
      		'toggle':1, 'toggle-on-focus':1, 'toggle-on-pressed':1, 'toggle-off-focus':1, 'toggle-off-pressed':1, 'toggle-disabled':1, 'toggle-disabled-focus':1, 'toggle-off-disabled-focus':1,
      		'list':1, 'list-longpress':1, 'list-focus':1, 'list-activated':1,
      		'ratingbar':1, 'ratingbar-on-focus':1, 'ratingbar-on-pressed':1, 'ratingbar-off':1, 'ratingbar-off-focus':1, 'ratingbar-off-pressed':1, 
      		'ratingstarbig':1, 'ratingstarbig-half':1,
      		'ratingstarsmall':1, 'ratingstarsmall-half':1,
      		'search':1, 'search-right':1,
      		'numberpicker':1,
      		'switch':1, 'switch-pressed':1, 'switch-bg':1,
      		'fastscroll':1, 'fastscroll-pressed':1,
      		'tab':1, 'tab-selected-pressed':1, 'tab-selected-focus':1, 'tab-unselected':1, 'tab-unselected-pressed':1, 'tab-unselected-focus':1  };
      
	  for (var component in components) {
	  	var group = studio.ui.createImageOutputGroup({
          container: $('#output-'+component)
        });
        for (var density in densities)
        studio.ui.createImageOutputSlot({
          container: group,
          id: 'out-'+ component + '-' + density,
          label: density
        });
	  }
	  
	  function downloadFile() {
		  	var values = form.getValues();
		  	var color = values['color'].color;
	        if (color.charAt(0) == '#') {

	          color = color.substr(1,6);

	    	}

	  	    var url = 'generate_all.php?color='+color+'&holo='+values['theme']+'&name='+values['name'];
	  	    var okForDownload = false;
	  	   	if (values['edittext']) { url+='&edittext=true'; okForDownload= true}
	  	   	if (values['autocomplete']) { url+='&autocomplete=true'; okForDownload= true}
	  	   	if (values['button']) { url+='&button=true'; okForDownload= true}
	  	   	if (values['cbutton']) { url+='&cbutton=true'; okForDownload= true}
	  	   	if (values['checkbox']) { url+='&checkbox=true'; okForDownload= true}
	  	   	if (values['radio']) { url+='&radio=true'; okForDownload= true}
	  	   	if (values['spinner']) { url+='&spinner=true'; okForDownload= true}
	  	   	if (values['cspinner']) { url+='&cspinner=true'; okForDownload= true}
	  	   	if (values['progressbar']) { url+='&progressbar=true'; okForDownload= true}
	  	   	if (values['seekbar']) { url+='&seekbar=true'; okForDownload= true}
	  	   	if (values['toggle']) { url+='&toggle=true'; okForDownload= true}
	  	   	if (values['list']) { url+='&list=true'; okForDownload= true}
	  	   	if (values['ratingbar']) { url+='&ratingbar=true'; okForDownload= true}
	  	   	if (values['ratingstarsmall']) { url+='&ratingstarsmall=true'; okForDownload= true}
	  	   	if (values['ratingstarbig']) { url+='&ratingstarbig=true'; okForDownload= true}
	  	   	if (values['fastscroll']) { url+='&fastscroll=true'; okForDownload= true}
	  	   	if (values['search']) { url+='&search=true'; okForDownload= true}
	  	   	if (values['numberpicker']) { url+='&numberpicker=true'; okForDownload= true}
	  	   	if (values['switch']) { url+='&switch=true'; okForDownload= true}
	  	   	if (values['tab']) { url+='&tab=true'; okForDownload= true}
			
			//alert(url);
			
			if (okForDownload) {
				$("#frame_download").attr("src", url);
			} else {
				alert('Please select at least one widget to generate (click YES above)');
			}  	    
	        return false;
	    }
	    
	  function dogenerate(comp, density, color) {
	  	var values = form.getValues();
	  	  	
		var reg = new RegExp("-", "g");
		var table = comp.split(reg);
		component = table[0];
	  	if (values[component]) {
	            $('#out-' + comp + '-' + density).attr('src', "widgets/"+component+"/"+component+".php?color="+ color +"&size=" + density + "&holo=" + values['theme'] + "&action=display&component=" + comp);
	            $('#out-' + comp + '-' + density).css('display', 'inline-block');
	            $('#block-output-' + comp).css('display', 'inline-block');
	          } else {
	          	$('#out-' + comp + '-' + density).css('display', 'none');
	          	$('#block-output-' + comp).css('display', 'none');
	          }
	  }

	  function regenerate() {
	  	var values = form.getValues();
	  
	  	$('.out-image-group').toggleClass('dark', values['theme'] == 'dark');
	    
        var color = values['color'].color;
        if (color.charAt(0) == '#') { // remove # if any

          color = color.substr(1,6);

    	}
    	
    	for (var component in components) {
	       for (var density in densities) {
	          dogenerate(component, density, color);
	       }
    	}
	    
	    $('#header').css('background-color', values['color'].color);
	    
	    if (values['theme'] == 'light' || values['theme'] == 'light_dark_action_bar')
		    $('#header').css('color', '#fff');
		else
		    $('#header').css('color', '#000');
	  }
      
      var form = new studio.forms.Form('holocomponents', {
        onChange: function(field) {
          regenerate();
        },
        fields: [
          new studio.forms.TextField('name', {
            title: 'Theme Name',
            helpText: 'Used in styles.xml and themes.xml',
            defaultValue: 'AppTheme'
          }),
          new studio.forms.ColorField('color', {
            title: 'Color',
            defaultValue: '#33b5e5'
          }),
          new studio.forms.EnumField('theme', {
            title: 'Theme',
            buttons: true,
            options: [
              { id: 'light', title: 'Holo Light' },
              { id: 'dark', title: 'Holo Dark' }, 
              { id: 'light_dark_action_bar', title: 'Holo Light Dark ActionBar' }
            ],
            defaultValue: 'light'
          }),
          new studio.forms.Separator('sep-general', {
          	title: '',
          	defaultValue:''
          }),
          
          new studio.forms.BooleanField('edittext', {
	            title: 'EditText',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('autocomplete', {
	            title: 'Autocomplete',
	            helpText: 'No preview, see edittext',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
           new studio.forms.BooleanField('button', {
	            title: 'Button',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('cbutton', {
	            title: 'Colored Button',
	            helpText: 'Like Button, but colored',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),

	       new studio.forms.BooleanField('checkbox', {
	            title: 'CheckBox',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
           
          new studio.forms.BooleanField('radio', {
	            title: 'Radio',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),          
           
           new studio.forms.BooleanField('spinner', {
	            title: 'Spinner',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	        new studio.forms.BooleanField('cspinner', {
	            title: 'Colored Spinner',
	            helpText: 'Like spinner, but colored',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('tab', {
	            title: 'TabWidget',
	            helpText: 'See <a href="faq.html#tabwidget">faq</a> for help',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('progressbar', {
	            title: 'ProgressBar',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('seekbar', {
	            title: 'SeekBar',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('ratingbar', {
	            title: 'RatingBar',
	            helpText: 'Editable by user',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('ratingstarsmall', {
	            title: 'RatingBar Small',
	            helpText: 'Not editable by user',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('ratingstarbig', {
	            title: 'RatingBar Big',
	            helpText: 'Not editable by user',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('toggle', {
	            title: 'Toggle',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('list', {
	            title: 'List Selector',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       new studio.forms.BooleanField('fastscroll', {
	            title: 'Fast Scroll',
	            helpText: 'For listviews',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
	       /*
	       new studio.forms.BooleanField('search', {
	            title: 'Search EditText',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       */
	       
	       new studio.forms.BooleanField('numberpicker', {
	            title: 'Numberpicker',
	            helpText: 'Styles are not public for this widget, use <a href="https://github.com/SimonVT/android-numberpicker" target="_blank">android-numberpicker library</a>', 
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
		
	       new studio.forms.BooleanField('switch', {
	            title: 'Switch',
	            helpText: 'Styles are not public for this widget, see <a href="https://github.com/BoD/android-switch-backport" target="_blank">switch-backport</a> or <a href="https://github.com/ankri/SwitchCompatLibrary" target="_blank">SwitchCompatLibrary</a>',
	            defaultValue: false,
	            offText: 'No',
	            onText: 'Yes'
	       }),
	       
        ]
      });
      
      form.createUI($('#inputs-form').get(0));
    </script>
    <iframe id="frame_download" width="0" height="0" style="display:none"></iframe>
  </body>
</html>