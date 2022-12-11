<?php

//Background Object based on Theme Options Values
$ale_background = ale_get_option('background');

$ale_font_one = ale_get_option('font_one');
$ale_font_two = ale_get_option('font_two');

$ale_font_one_ex = ale_get_option('font_one_ex');
$ale_font_two_ex = ale_get_option('font_two_ex');

$ale_font = ale_get_option('bodystyle');
$ale_h1 = ale_get_option('h1sty');
$ale_h2 = ale_get_option('h2sty');
$ale_h3 = ale_get_option('h3sty');
$ale_h4 = ale_get_option('h4sty');
$ale_h5 = ale_get_option('h5sty');
$ale_h6 = ale_get_option('h6sty');

?>

<style>
    body {
        <?php
        if($ale_font['size']){ echo "font-size:".esc_attr($ale_font['size']).";"; }
        if($ale_font['style']){ echo "font-style:".esc_attr($ale_font['style']).";"; }
        if($ale_font['color']){ echo "color:".esc_attr($ale_font['color']).";"; }
        if($ale_font['face']){ $fontfamily =  str_replace ('+',' ',esc_attr($ale_font['face'])); echo "font-family:".esc_attr($fontfamily).";"; }
        if($ale_font['transform']){ echo "text-transform:".esc_attr($ale_font['transform']).";"; }
        if($ale_font['weight']){ echo "font-weight:".esc_attr($ale_font['weight']).";"; }
        if($ale_font['lineheight']) { echo "line-height:".esc_attr($ale_font['lineheight']).";"; }

        //Dynamic Background Settings from Theme Options.
        if($ale_background['color']){ echo "background-color:".esc_attr($ale_background['color']).";"; }
        if($ale_background['image']){ echo "background-image: url(".esc_url($ale_background['image']).");"; }
        if($ale_background['repeat']){ echo "background-repeat:".esc_attr($ale_background['repeat']).";"; }
        if($ale_background['position']){ echo "background-position:".esc_attr($ale_background['position']).";"; }
        if($ale_background['attachment']){ echo "background-attachment:".esc_attr($ale_background['attachment']).";"; }
        if($ale_background['background-size']){ echo "background-size:".esc_attr($ale_background['background-size']).";"; }
        ?>
    }

    h1 {
        <?php
        if($ale_h1['size']){ echo "font-size:".esc_attr($ale_h1['size']).";"; };
        if($ale_h1['style']){ echo "font-style:".esc_attr($ale_h1['style']).";"; };
        if($ale_h1['color']){ echo "color:".esc_attr($ale_h1['color']).";"; };
        if($ale_h1['face']){ $h1family =  str_replace ('+',' ',esc_attr($ale_h1['face'])); echo "font-family:".esc_attr($h1family).";"; };
        if($ale_h1['transform']){ echo "text-transform:".esc_attr($ale_h1['transform']).";"; }
        if($ale_h1['weight']){ echo "font-weight:".esc_attr($ale_h1['weight']).";"; }
        if($ale_h1['lineheight']) { echo "line-height:".esc_attr($ale_h1['lineheight']).";"; }
        ?>
    }
    h2 {
        <?php
        if($ale_h2['size']){ echo "font-size:".esc_attr($ale_h2['size']).";"; };
        if($ale_h2['style']){ echo "font-style:".esc_attr($ale_h2['style']).";"; };
        if($ale_h2['color']){ echo "color:".esc_attr($ale_h2['color']).";"; };
        if($ale_h2['face']){ $h2family =  str_replace ('+',' ',esc_attr($ale_h2['face'])); echo "font-family:".esc_attr($h2family).";"; };
        if($ale_h2['transform']){ echo "text-transform:".esc_attr($ale_h2['transform']).";"; }
        if($ale_h2['weight']){ echo "font-weight:".esc_attr($ale_h2['weight']).";"; }
        if($ale_h2['lineheight']) { echo "line-height:".esc_attr($ale_h2['lineheight']).";"; }
        ?>
    }
    h3 {
        <?php
        if($ale_h3['size']){ echo "font-size:".esc_attr($ale_h3['size']).";"; };
        if($ale_h3['style']){ echo "font-style:".esc_attr($ale_h3['style']).";"; };
        if($ale_h3['color']){ echo "color:".esc_attr($ale_h3['color']).";"; };
        if($ale_h3['face']){ $h3family =  str_replace ('+',' ',esc_attr($ale_h3['face'])); echo "font-family:".esc_attr($h3family).";"; };
        if($ale_h3['transform']){ echo "text-transform:".esc_attr($ale_h3['transform']).";"; }
        if($ale_h3['weight']){ echo "font-weight:".esc_attr($ale_h3['weight']).";"; }
        if($ale_h3['lineheight']) { echo "line-height:".esc_attr($ale_h3['lineheight']).";"; }
        ?>
    }
    h4 {
        <?php
        if($ale_h4['size']){ echo "font-size:".esc_attr($ale_h4['size']).";"; };
        if($ale_h4['style']){ echo "font-style:".esc_attr($ale_h4['style']).";"; };
        if($ale_h4['color']){ echo "color:".esc_attr($ale_h4['color']).";"; };
        if($ale_h4['face']){ $h4family =  str_replace ('+',' ',esc_attr($ale_h4['face'])); echo "font-family:".esc_attr($h4family).";"; };
        if($ale_h4['transform']){ echo "text-transform:".esc_attr($ale_h4['transform']).";"; }
        if($ale_h4['weight']){ echo "font-weight:".esc_attr($ale_h4['weight']).";"; }
        if($ale_h4['lineheight']) { echo "line-height:".esc_attr($ale_h4['lineheight']).";"; }
        ?>
    }
    h5 {
        <?php
        if($ale_h5['size']){ echo "font-size:".esc_attr($ale_h5['size']).";"; };
        if($ale_h5['style']){ echo "font-style:".esc_attr($ale_h5['style']).";"; };
        if($ale_h5['color']){ echo "color:".esc_attr($ale_h5['color']).";"; };
        if($ale_h5['face']){ $h5family =  str_replace ('+',' ',esc_attr($ale_h5['face'])); echo "font-family:".esc_attr($h5family).";"; };
        if($ale_h5['transform']){ echo "text-transform:".esc_attr($ale_h5['transform']).";"; }
        if($ale_h5['weight']){ echo "font-weight:".esc_attr($ale_h5['weight']).";"; }
        if($ale_h5['lineheight']) { echo "line-height:".esc_attr($ale_h5['lineheight']).";"; }
        ?>
    }
    h6 {
        <?php
        if($ale_h6['size']){ echo "font-size:".esc_attr($ale_h6['size']).";"; };
        if($ale_h6['style']){ echo "font-style:".esc_attr($ale_h6['style']).";"; };
        if($ale_h6['color']){ echo "color:".esc_attr($ale_h6['color']).";"; };
        if($ale_h6['face']){ $h6family =  str_replace ('+',' ',esc_attr($ale_h6['face'])); echo "font-family:".esc_attr($h6family).";"; };
        if($ale_h6['transform']){ echo "text-transform:".esc_attr($ale_h6['transform']).";"; }
        if($ale_h6['weight']){ echo "font-weight:".esc_attr($ale_h6['weight']).";"; }
        if($ale_h6['lineheight']) { echo "line-height:".esc_attr($ale_h6['lineheight']).";"; }
        ?>
    }


    <?php if($ale_font_one){ 
        echo '.font_one {';
            $ale_font_one =  str_replace ('+',' ',esc_attr($ale_font_one)); echo "font-family:".esc_attr($ale_font_one).";"; 
        echo '}';
    }; 

    if($ale_font_two){ 
        echo '.font_two {';
            $ale_font_two =  str_replace ('+',' ',esc_attr($ale_font_two)); echo "font-family:".esc_attr($ale_font_two).";"; 
        echo '}';
    }; 
    
    if(ale_get_option('customcsscode')){ echo esc_attr(ale_get_option('customcsscode'));} ?>

</style>