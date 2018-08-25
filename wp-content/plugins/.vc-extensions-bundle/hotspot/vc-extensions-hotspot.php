<?php

if (!class_exists('VC_Extensions_HotSpot')) {

    class VC_Extensions_HotSpot {
        function VC_Extensions_HotSpot() {
          wpb_map( array(
            "name" => __("HotSpot", 'vc_hotspot_cq'),
            "base" => "cq_vc_hotspot",
            "class" => "wpb_cq_vc_extension",
            "controls" => "full",
            "icon" => "icon-wpb-vc_extension_cq",
            "category" => __('Sike Extensions', 'js_composer'),
            'description' => __( 'Image hotspot with tooltip', 'js_composer' ),
            "params" => array(
              array(
                "type" => "attach_image",
                "heading" => __("Image", "vc_hotspot_cq"),
                "param_name" => "image",
                "value" => "",
                "description" => __("Select image from media library.", "vc_hotspot_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Resize image to this width", "vc_hotspot_cq"),
                "param_name" => "width",
                "value" => __("", 'vc_hotspot_cq'),
                "description" => __("You can resize image to this width, or keep it to blank to use the original image.", "vc_hotspot_cq")
              ),
              array(
                "type" => "textarea_html",
                "holder" => "div",
                "heading" => __("Tooltip content, divide each one with &lt;div class=&#039;tooltip-content&#039;&gt;&lt;/div&gt;, please edit in text mode:", "vc_hotspot_cq"),
                "param_name" => "content",
                "value" => __("<div class='tooltip-content'>You have to wrap each tooltip block in a div with class <strong>tooltip-content</strong>. Something like:
                &lt;div class='tooltip-content'&gt;content here...&lt;/div&gt;
                So you can put anything in it, like a image or video.
                </div>
                <div class='tooltip-content'>
                  Hello tooltip 2, you can customize the icon color, link, arrow position, tooltip content etc in the backend.
                </div>
                <div class='tooltip-content'>
                  Hello tooltip 3
                </div>
                <div class='tooltip-content'>
                <h4>I'm a title</h4>
                You can customize the icon position in the frontend editor of Visual Composer.
                <a href='http://codecanyon.net/user/sike?ref=sike'>Visit my profile</a> for more works. </div>", "vc_hotspot_cq"), "description" => __("Enter content for each block here. Divide each with paragraph (Enter).", "vc_hotspot_cq") ),
              // array(
              //   "type" => "textfield",
              //   "heading" => __("HotSpot icon size:", "vc_hotspot_cq"),
              //   "param_name" => "iconsize",
              //   "value" => "",
              //   "description" => __("", "vc_hotspot_cq")
              // ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Each hotspot icon's position", 'vc_hotspot_cq'),
                "param_name" => "position",
                "value" => __("25%|30%,35%|20%,45%|60%,75%|20%", 'vc_hotspot_cq'),
                "description" => __("Position of each icon in <strong>top|left</strong> format. You can customize it in the Visual Composer Frontend editor, save changes and see the update position live.", 'vc_hotspot_cq')
              ),
              array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => __("Global hotspot icon color", 'vc_hotspot_cq'),
                "param_name" => "iconbackground",
                "value" => 'rgba(0,0,0,0.5)',
                "description" => __("Global color for the hotspot icon. Or you can specify different color for each icon below.", 'vc_hotspot_cq')
              ),
              array(
                "type" => "colorpicker",
                "holder" => "div",
                "class" => "",
                "heading" => __("Hotspot circle dot color", 'vc_hotspot_cq'),
                "param_name" => "circlecolor",
                "value" => '#FFFFFF',
                "description" => __("Color for the hotspot circle dot. Default is white.", 'vc_hotspot_cq')
              ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Each hotspot icon's color", 'vc_hotspot_cq'),
                "param_name" => "color",
                "value" => __("", 'vc_hotspot_cq'),
                "description" => __("Color for each icon, you can use the value like #663399 or the name of the color like blue here. Divide each with linebreaks (Enter).", 'vc_hotspot_cq')
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Display pulse animation for the hotspot icon?", "vc_hotspot_cq"),
                "param_name" => "ispulse",
                "value" => array(__("yes", "vc_hotspot_cq") => "yes", __("no", "vc_hotspot_cq") => "no"),
                "description" => __("", "vc_hotspot_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Select pulse border color", "vc_hotspot_cq"),
                "param_name" => "pulsecolor",
                "value" => array(__("Default", "vc_hotspot_cq") => "pulse", __("gray", "vc_hotspot_cq") => "pulse-gray", __("red", "vc_hotspot_cq") => "pulse-red", __("green", "vc_hotspot_cq") => "pulse-green", __("yellow", "vc_hotspot_cq") => "pulse-yellow", __("blue", "vc_hotspot_cq") => "pulse-blue", __("purple", "vc_hotspot_cq") => "pulse-purple"),
                "dependency" => Array('element' => "ispulse", 'value' => array('yes')),
                "description" => __("You can select the pulse border color here, default is white.", "vc_hotspot_cq")
              ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Tooltip arrow position for each hotspot", 'vc_hotspot_cq'),
                "param_name" => "arrowposition",
                "value" => __("", 'vc_hotspot_cq'),
                "description" => __("The arrow position for each tooltip, default is top. The available options are: <strong>top, right, bottom, left, top-right, top-left, bottom-right, bottom-left</strong>. Divide each with linebreaks (Enter)", 'vc_hotspot_cq')
              ),

              array(
                "type" => "textfield",
                "heading" => __("Hotspot icon opacity", "vc_hotspot_cq"),
                "param_name" => "opacity",
                "value" => "0.5",
                "description" => __("The opacity of each icon, default is 0.5", "vc_hotspot_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Tooltip style", "vc_hotspot_cq"),
                "param_name" => "tooltipstyle",
                "value" => array(__("shadow", "vc_hotspot_cq") => "shadow", __("light", "vc_hotspot_cq") => "light", __("noir", "vc_hotspot_cq") => "noir", __("punk", "vc_hotspot_cq") => "punk"),
                "description" => __("", "vc_hotspot_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Tooltip trigger when user", "vc_hotspot_cq"),
                "param_name" => "trigger",
                "value" => array(__("hover", "vc_hotspot_cq") => "hover", __("click", "vc_hotspot_cq") => "click"),
                "description" => __("Select how to trigger the tooltip.", "vc_hotspot_cq")
              ),
              array(
                "type" => "dropdown",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Tooltip animation", "vc_hotspot_cq"),
                "param_name" => "tooltipanimation",
                "value" => array(__("grow", "vc_hotspot_cq") => "grow", __("fade", "vc_hotspot_cq") => "fade", __("swing", "vc_hotspot_cq") => "swing", __("slide", "vc_hotspot_cq") => "slide", __("fall", "vc_hotspot_cq") => "fall"),
                "description" => __("Choose the animation for the tooltip.", "vc_hotspot_cq")
              ),
              array(
                "type" => "exploded_textarea",
                "holder" => "",
                "class" => "vc_hotspot_cq",
                "heading" => __("Link for each hotspot icon", 'vc_hotspot_cq'),
                "param_name" => "links",
                "value" => __("", 'vc_hotspot_cq'),
                "description" => __("Specify link for each icon, divide each with linebreaks (Enter).", 'vc_hotspot_cq')
              ),
              array(
                "type" => "dropdown",
                "heading" => __("How to open the link for the icon?", "vc_hotspot_cq"),
                "param_name" => "custom_links_target",
                "description" => __('Select how to open the links', 'vc_hotspot_cq'),
                'value' => array(__("Same window", "vc_hotspot_cq") => "_self", __("New window", "vc_hotspot_cq") => "_blank")
              ),
              array(
                "type" => "textfield",
                "heading" => __("maxWidth of the tooltip", "vc_hotspot_cq"),
                "param_name" => "maxwidth",
                "value" => "320",
                "description" => __("maxWidth for the tooltip, 0 is auto width, you can specify a value here, default is 320.", "vc_hotspot_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Container width", "vc_hotspot_cq"),
                "param_name" => "containerwidth",
                "value" => "",
                "description" => __("You can specify the container width here, default is 100%. You can try other value like 80%, it will be align center automatically.", "vc_hotspot_cq")
              ),
              array(
                "type" => "textfield",
                "heading" => __("Extra class name for the container", "vc_hotspot_cq"),
                "param_name" => "extra_class",
                "description" => __("If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.", "vc_hotspot_cq")
              )

            )
        ));

        function cq_vc_hotspot_func($atts, $content=null) {
          extract( shortcode_atts( array(
            'image' => '',
            'width' => '',
            'color' => '',
            'ispulse' => '',
            'pulsecolor' => '',
            'icon' => '',
            'iconsize' => '',
            'tooltipstyle' => 'shadow',
            'iconbackground' => '',
            'tooltipanimation' => 'grow',
            'circlecolor' => '',
            'opacity' => '0.5',
            'arrowposition' => '',
            'trigger' => '',
            'links' => '',
            'maxwidth' => '',
            'custom_links_target' => '',
            'position' => '',
            'containerwidth' => '',
            'extra_class' => ''
          ), $atts ) );


          wp_register_style( 'vc_hotspot_cq_style', plugins_url('css/style.min.css', __FILE__));
          wp_enqueue_style( 'vc_hotspot_cq_style' );
          wp_register_style('tooltipster', plugins_url('../profilecard/css/tooltipster.css', __FILE__));
          wp_enqueue_style('tooltipster');

          wp_register_script('tooltipster', plugins_url('../profilecard/js/jquery.tooltipster.min.js', __FILE__), array('jquery'));
          wp_enqueue_script('tooltipster');

          wp_register_script('vc_hotspot_cq_script', plugins_url('js/script.min.js', __FILE__), array("jquery", "tooltipster"));
          wp_enqueue_script('vc_hotspot_cq_script');


          $image = wp_get_attachment_image_src($image, 'full');
          $position = explode(',', $position);
          $color = explode(',', $color);
          $arrowposition = explode(',', $arrowposition);
          $links = explode(',', $links);
          $i = -1;
          $content = wpb_js_remove_wpautop($content); // fix unclosed/unwanted paragraph tags in $content
          $content = str_replace('</div>', '', trim($content));
          $contentarr = explode('<div class="tooltip-content">', $content);
          $ispulse = $ispulse == "yes" ? $pulsecolor : "";
          array_shift($contentarr);
          $output = '';
          $output .= '<div style="width:'.$containerwidth.';" class="cqtooltip-wrapper '.$extra_class.'" data-opacity="'.$opacity.'" data-tooltipanimation="'.$tooltipanimation.'" data-tooltipstyle="'.$tooltipstyle.'" data-trigger="'.$trigger.'" data-maxwidth="'.$maxwidth.'">';
          if($width!=""){
              $output .= '<img src="'.aq_resize($image[0], $width, null, true, true, true).'" />';
          }else{
              $output .= '<img src="'.$image[0].'" />';
          }
          $output .= '<div class="cq-hotspots">';
          // foreach ($position as $key => $positionarr) {
          foreach ($contentarr as $key => $thecontent) {
             $i++;
             // $iconposition = explode('|', trim($positionarr));
             if(!isset($position[$i])) $position[$i] = '25%|25%';
             $iconposition = explode('|', trim($position[$i]));
             // if(!isset($contentarr[$i+1])) $contentarr[$i+1] = '';
             if(!isset($iconposition[0])) $iconposition[0] = '25%';
             if(!isset($iconposition[1])) $iconposition[1] = '25%';
             if(!isset($color[$i])) $color[$i] = '';
             if(!isset($arrowposition[$i])) $arrowposition[$i] = 'top';
             if(!isset($links[$i])) $links[$i] = '';
             if($color[$i]!="") {
               $iconcolor = $color[$i];
             }else{
               $iconcolor = $iconbackground;
             }

             $output .= '<div class="hotspot-item '.$ispulse.'" style="top:'.$iconposition[0].';left:'.$iconposition[1].';">';
             if($links[$i]!=""){
                 $output .= '<a href="'.$links[$i].'" class="cq-tooltip" style="background:'.$iconcolor.';" data-tooltip="'.htmlentities($thecontent).'" data-arrowposition="'.trim($arrowposition[$i]).'" target="'.$custom_links_target.'">';
             }else{
                 $output .= '<a href="#" class="cq-tooltip" style="background:'.$iconcolor.';" data-tooltip="'.htmlentities($thecontent).'" data-arrowposition="'.trim($arrowposition[$i]).'">';
             }

             $output .= '<span style="background:'.$circlecolor.';"></span>';
             $output .= '</a>';
             $output .= '</div>';
          }
          $output .= '</div>';
          $output .= '</div>';

          return $output;

        }

        add_shortcode('cq_vc_hotspot', 'cq_vc_hotspot_func');

      }
  }

}

?>
