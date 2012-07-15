<?php
//print_r(error_get_last());
//init all -----------------------------------------------------------------------------------------------



smm_init_options();
smm_init_options_specific();
smm_init_css();
smm_init_global();
//smm_delete_options();


function add_jquery() {
    wp_enqueue_script('jquery');
}

add_action('init', 'add_jquery');
function smm_init_global() {
    //var plugin url
    global $smm_pluginurl;
    $smm_pluginurl = plugins_url('', __FILE__) . '/';
    
    global $smm_pluginpath;
    $smm_pluginpath = realpath(dirname(__FILE__));
    
    //count posts that has been displayed
    global $smm_postco;
    $smm_postco = 0;
    
    global $smm_displayed;
    $smm_displayed = array();
    
    global $smm_column_data;
    $smm_column_data = array(
        ''
    );
    
    global $smm_time;
    $smm_time = microtime();
    
    //admin init
    add_action('admin_menu', 'smm_admin_add_page');
    
    // add the admin settings
    add_action('admin_init', 'smm_admin_init');
    
    //shortcode
    global $smm_act;
    $sc = $smm_act[shortcode];
    if ($sc <> "") {
        add_shortcode($sc, 'smm_shortcode');
        
        //add shortcode in widgets
        add_filter('widget_text', 'do_shortcode');
    }
    
    
}
function smm_init_css() {
    //load default css
    $d = plugins_url('style.css', __FILE__);
    wp_register_style('smm-css', $d, array(), '1.0.0', 'all');
    wp_enqueue_style('smm-css');
    
    //load users css
    $v = smm_val('cssurl', 0);
    //echo '---------------------------------------------------------'.$v.'+++++++++++';
    if (strlen($v) > 1) {
        $v2 = site_url() . '/' . $v;
        wp_register_style('smm-b-css', $v2, array(), '1.0.0', 'all');
        wp_enqueue_style('smm-b-css');
    }
}
function smm_init_options() {
    //values --------------------------------
    
    //init
    global $smm_init_0, $smm_init_1, $smm_init_2, $smm_init_3, $smm_init_4, $smm_init_5, $smm_init_6, $smm_init_7, $smm_init_8, $smm_init_9, $smm_init_10, $smm_init_11, $smm_init_12, $smm_init_13, $smm_init_14, $smm_init_15, $smm_init_16, $smm_init_17, $smm_init_18, $smm_init_19, $smm_init_20, $smm_init_1001;
    global $smm_options_0, $smm_options_1, $smm_options_2, $smm_options_3, $smm_options_4, $smm_options_5, $smm_options_6, $smm_options_7, $smm_options_8, $smm_options_9, $smm_options_10, $smm_options_11, $smm_options_12, $smm_options_13, $smm_options_14, $smm_options_15, $smm_options_16, $smm_options_17, $smm_options_18, $smm_options_19, $smm_options_20;
    global $smm_options_1001, $smm_options_1002, $smm_options_1003, $smm_options_1004, $smm_options_1005, $smm_options_1006, $smm_options_1007, $smm_options_1008, $smm_options_1009, $smm_options_1010, $smm_options_1011, $smm_options_1012, $smm_options_1013, $smm_options_1014, $smm_options_1015, $smm_options_1016, $smm_options_1017, $smm_options_1018, $smm_options_1019, $smm_options_1020;
    global $smm_sc, $smm_ext, $smm_options_2000, $smm_init_2000;
    
    $smm_init_0    = array(
        'duplicates' => '0',
        'period' => '1',
        'postinfocustom' => 'Posted by %name, %date',
        'postinfobcustom' => 'Read more, %comments',
        'adminw' => '700',
        'donated' => '0',
        'cssurl' => '',
        'zindex' => '10000'
        
        
    );
    $smm_init_1    = array(
        'posts' => '3',
        'maintitle' => '',
        
        'area0' => '2',
        'area1' => '3',
        'area2' => '3',
        'area3' => '0',
        'area4' => '0',
        'area5' => '0',
        'area6' => '0',
        'area7' => '0',
        'areabg' => '1',
        
        'pos0' => '1',
        'pos1' => '1',
        'pos2' => '2',
        'pos3' => '1',
        'pos4' => '1',
        'pos5' => '1',
        'pos6' => '1',
        'pos7' => '1',
        
        'size' => 'thumbnail',
        'imgw' => '',
        'imgh' => '100',
        
        'galh' => '100',
        'galnr' => '3',
        'galsize' => 'thumbnail',
        
        
        'excerptlength' => '200',
        'embed' => '0',
        'columns' => '1',
        'align' => '0',
        'cat1' => '0',
        'cat2' => '0',
        'type' => 'post',
        'status' => 'publish',
        'sort' => '0',
        'filter' => '1',
        'offset' => '0',
        'maxdays' => '0',
        'sticky' => '0',
        'author' => '',
        'paged' => '0',
        'widget' => '1',
        'postspace' => '1',
        
        'effact' => '1',
        'icon' => '0',
        'imgeff' => '0',
        'imgdel' => '2',
        'imgfade' => '0.50',
        
        'popupdirection' => '1',
        'popupspd' => 'normal',
        'popupleft' => '100',
        'popuptop' => '20',
        'popupw' => '300',
        'popuph' => '0',
        'popuppadding' => '10',
        'popupcol' => '#ffffff',
        'popupfade' => '0.90',
        'popupround' => '1',
        
        'bgcolor' => '#ffffff',
        'bgcolorh' => '#dddddd'
    );
    $smm_init_1001 = array();
    
    
    $c             = '';
    $c2            = '';
    $p             = '';
    $smm_init_2000 = array(
        'colact' => 1,
        'sizet1' => '16px',
        'colort1' => $c,
        'bgt1' => $c2,
        'paddingt1' => $p,
        'boldt1' => 'bold',
        'sizet2' => '16px',
        'colort2' => $c,
        'bgt2' => $c2,
        'paddingt2' => $p,
        'boldt2' => 'bold',
        'sizet3' => '16px',
        'colort3' => $c,
        'bgt3' => $c2,
        'paddingt3' => $p,
        'boldt3' => 'bold',
        'sizet4' => '16px',
        'colort4' => $c,
        'bgt4' => $c2,
        'paddingt4' => $p,
        'boldt4' => 'bold',
        'sizet5' => '16px',
        'colort5' => $c,
        'bgt5' => $c2,
        'paddingt5' => $p,
        'boldt5' => 'bold',
        'sizet6' => '16px',
        'colort6' => $c,
        'bgt6' => $c2,
        'paddingt6' => $p,
        'boldt6' => 'bold',
        'sizet7' => '16px',
        'colort7' => $c,
        'bgt7' => $c2,
        'paddingt7' => $p,
        'boldt7' => 'bold',
        'sizet8' => '16px',
        'colort8' => $c,
        'bgt8' => $c2,
        'paddingt8' => $p,
        'boldt8' => 'bold',
        
        'sizee1' => '14px',
        'colore1' => $c,
        'bge1' => $c2,
        'paddinge1' => $p,
        'bolde1' => 'normal',
        'sizee2' => '14px',
        'colore2' => $c,
        'bge2' => $c2,
        'paddinge2' => $p,
        'bolde2' => 'normal',
        'sizee3' => '14px',
        'colore3' => $c,
        'bge3' => $c2,
        'paddinge3' => $p,
        'bolde3' => 'normal',
        'sizee4' => '14px',
        'colore4' => $c,
        'bge4' => $c2,
        'paddinge4' => $p,
        'bolde4' => 'normal',
        'sizee5' => '14px',
        'colore5' => $c,
        'bge5' => $c2,
        'paddinge5' => $p,
        'bolde5' => 'normal',
        'sizee6' => '14px',
        'colore6' => $c,
        'bge6' => $c2,
        'paddinge6' => $p,
        'bolde6' => 'normal',
        'sizee7' => '14px',
        'colore7' => $c,
        'bge7' => $c2,
        'paddinge7' => $p,
        'bolde7' => 'normal',
        'sizee8' => '14px',
        'colore8' => $c,
        'bge8' => $c2,
        'paddinge8' => $p,
        'bolde8' => 'normal',
        
        'size3' => '12px',
        'color3' => $c,
        'bg3' => $c2,
        'padding3' => $p,
        'bold3' => 'normal',
        'size4' => '12px',
        'color4' => $c,
        'bg4' => $c2,
        'padding4' => $p,
        'bold4' => 'normal',
        'size5' => '10px',
        'color5' => $c,
        'bg5' => $c2,
        'padding5' => $p,
        'bold5' => 'normal',
        'size6' => '10px',
        'color6' => $c,
        'bg6' => $c2,
        'padding6' => $p,
        'bold6' => 'normal',
        'size7' => '14px',
        'color7' => $c,
        'bg7' => $c2,
        'padding7' => $p,
        'bold7' => 'normal',
        
        'cssbg' => '0',
        'bgcolor' => '#dddddd'
    );
    
    
    $smm_options_0 = get_option('smm_options_0');
    
    $smm_options_1  = get_option('smm_options_1');
    $smm_options_2  = get_option('smm_options_2');
    $smm_options_3  = get_option('smm_options_3');
    $smm_options_4  = get_option('smm_options_4');
    $smm_options_5  = get_option('smm_options_5');
    $smm_options_6  = get_option('smm_options_6');
    $smm_options_7  = get_option('smm_options_7');
    $smm_options_8  = get_option('smm_options_8');
    $smm_options_9  = get_option('smm_options_9');
    $smm_options_10 = get_option('smm_options_10');
    $smm_options_11 = get_option('smm_options_11');
    $smm_options_12 = get_option('smm_options_12');
    $smm_options_13 = get_option('smm_options_13');
    $smm_options_14 = get_option('smm_options_14');
    $smm_options_15 = get_option('smm_options_15');
    $smm_options_16 = get_option('smm_options_16');
    $smm_options_17 = get_option('smm_options_17');
    $smm_options_18 = get_option('smm_options_18');
    $smm_options_19 = get_option('smm_options_19');
    $smm_options_20 = get_option('smm_options_20');
    
    
    $smm_options_2000 = get_option('smm_options_2000');
}



function smm_delete_options() {
    delete_option('smm_options_0');
    delete_option('smm_options_1');
    delete_option('smm_options_2');
    delete_option('smm_options_3');
    delete_option('smm_options_4');
    delete_option('smm_options_5');
    delete_option('smm_options_6');
    delete_option('smm_options_7');
    delete_option('smm_options_8');
    delete_option('smm_options_9');
    delete_option('smm_options_10');
    delete_option('smm_options_11');
    delete_option('smm_options_12');
    delete_option('smm_options_13');
    delete_option('smm_options_14');
    delete_option('smm_options_15');
    delete_option('smm_options_16');
    delete_option('smm_options_17');
    delete_option('smm_options_18');
    delete_option('smm_options_19');
    delete_option('smm_options_20');
    
    
    delete_option('smm_options_2000');
}

function smm_val($a, $b) {
    global $smm_init_0, $smm_init_1, $smm_init_2, $smm_init_3, $smm_init_4, $smm_init_5, $smm_init_6, $smm_init_7, $smm_init_8, $smm_init_9, $smm_init_10, $smm_init_11, $smm_init_12, $smm_init_13, $smm_init_14, $smm_init_15, $smm_init_16, $smm_init_17, $smm_init_18, $smm_init_19, $smm_init_20, $smm_init_1001;
    global $smm_options_0, $smm_options_1, $smm_options_2, $smm_options_3, $smm_options_4, $smm_options_5, $smm_options_6, $smm_options_7, $smm_options_8, $smm_options_9, $smm_options_10, $smm_options_11, $smm_options_12, $smm_options_13, $smm_options_14, $smm_options_15, $smm_options_16, $smm_options_17, $smm_options_18, $smm_options_19, $smm_options_20;
    global $smm_options_1001, $smm_options_1002, $smm_options_1003, $smm_options_1004, $smm_options_1005, $smm_options_1006, $smm_options_1007, $smm_options_1008, $smm_options_1009, $smm_options_1010, $smm_options_1011, $smm_options_1012, $smm_options_1013, $smm_options_1014, $smm_options_1015, $smm_options_1016, $smm_options_1017, $smm_options_1018, $smm_options_1019, $smm_options_1020;
    global $smm_sc, $smm_ext, $smm_options_2000, $smm_init_2000;
    if ($b == 0) {
        $v = $smm_options_0[$a];
        if (!isset($smm_options_0[$a])) {
            $v = $smm_init_0[$a];
        }
    }
    if ($b == 1) {
        $v = $smm_options_1[$a];
        if (!isset($smm_options_1[$a])) {
            $v = $smm_init_1[$a];
        }
    }
    if ($b == 2) {
        $v = $smm_options_2[$a];
        if (!isset($smm_options_2[$a])) {
            $v = $smm_init_2[$a];
        }
    }
    if ($b == 3) {
        $v = $smm_options_3[$a];
        if (!isset($smm_options_3[$a])) {
            $v = $smm_init_3[$a];
        }
    }
    if ($b == 4) {
        $v = $smm_options_4[$a];
        if (!isset($smm_options_4[$a])) {
            $v = $smm_init_4[$a];
        }
    }
    if ($b == 5) {
        $v = $smm_options_5[$a];
        if (!isset($smm_options_5[$a])) {
            $v = $smm_init_5[$a];
        }
    }
    if ($b == 6) {
        $v = $smm_options_6[$a];
        if (!isset($smm_options_6[$a])) {
            $v = $smm_init_6[$a];
        }
    }
    if ($b == 7) {
        $v = $smm_options_7[$a];
        if (!isset($smm_options_7[$a])) {
            $v = $smm_init_7[$a];
        }
    }
    if ($b == 8) {
        $v = $smm_options_8[$a];
        if (!isset($smm_options_8[$a])) {
            $v = $smm_init_8[$a];
        }
    }
    if ($b == 9) {
        $v = $smm_options_9[$a];
    }
    if ($b == 10) {
        $v = $smm_options_10[$a];
    }
    if ($b == 11) {
        $v = $smm_options_11[$a];
    }
    if ($b == 12) {
        $v = $smm_options_12[$a];
    }
    if ($b == 13) {
        $v = $smm_options_13[$a];
    }
    if ($b == 14) {
        $v = $smm_options_14[$a];
    }
    if ($b == 15) {
        $v = $smm_options_15[$a];
    }
    if ($b == 16) {
        $v = $smm_options_16[$a];
    }
    if ($b == 17) {
        $v = $smm_options_17[$a];
    }
    if ($b == 18) {
        $v = $smm_options_18[$a];
    }
    if ($b == 19) {
        $v = $smm_options_19[$a];
    }
    if ($b == 20) {
        $v = $smm_options_20[$a];
    }
    
    if ($b == 2000) {
        $v = $smm_options_2000[$a];
    }
    
    
    if (!isset($v)) {
        $v = $smm_init_1[$a];
    }
    
    if (!isset($v)) {
        $v = $smm_init_2000[$a];
    }
    
    
    if ($smm_sc[$a] <> '') {
        $v = $smm_sc[$a];
    }
    
    return $v;
}



//admin pages -----------------------------------------------------------------------
function smm_admin_tabs($current = 'homepage') {
    echo '<div id="icon-themes" class="icon32"><br></div>';
    echo '<h2 class="nav-tab-wrapper">';
    global $smm_tabs;
    foreach ($smm_tabs as $tab => $name) {
        $class = ($tab == $current) ? ' nav-tab-active' : '';
        global $smm_pluginurl;
        $i = '';
        echo '<a class="nav-tab' . $class . '" href="?page=smm_plugin&tab=' . $tab . '">' . $name . $i . '</a>';
    }
    echo '</h2>';
}
function smm_admin_add_page() {
    global $smm_act;
    add_menu_page($smm_act[name] . ' Options', $smm_act[name], 'manage_options', 'smm_plugin', 'smm_options_page');
}
function smm_options_page() {
    global $smm_tab, $smm_act;
    
    smm_admin_tabs($smm_tab);
    
    echo '<div><h2>' . $smm_act[name] . ' Options</h2>';
    echo '<form action="options.php" method="post">';
    
    //global $smm_tab;
    settings_fields('smm_options_' . $smm_tab);
    do_settings_sections('smm_plugin');
    
?>
    <p class="submit">
    <input type="submit" class="button-primary" value="<?php
    _e('Save Changes');
?>" />
    </p>
</form></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
function smm_admin_init() {
    global $smm_tab;
    $smm_tab = $_GET['tab'];
    if ($smm_tab == '') {
        $smm_tab = '1';
    }
    
    
    register_setting('smm_options_0', 'smm_options_0', 'smm_options_validate');
    
    register_setting('smm_options_1', 'smm_options_1', 'smm_options_validate');
    register_setting('smm_options_2', 'smm_options_2', 'smm_options_validate');
    register_setting('smm_options_3', 'smm_options_3', 'smm_options_validate');
    register_setting('smm_options_4', 'smm_options_4', 'smm_options_validate');
    register_setting('smm_options_5', 'smm_options_5', 'smm_options_validate');
    register_setting('smm_options_6', 'smm_options_6', 'smm_options_validate');
    register_setting('smm_options_7', 'smm_options_7', 'smm_options_validate');
    register_setting('smm_options_8', 'smm_options_8', 'smm_options_validate');
    register_setting('smm_options_9', 'smm_options_9', 'smm_options_validate');
    register_setting('smm_options_10', 'smm_options_10', 'smm_options_validate');
    register_setting('smm_options_11', 'smm_options_11', 'smm_options_validate');
    register_setting('smm_options_12', 'smm_options_12', 'smm_options_validate');
    register_setting('smm_options_13', 'smm_options_13', 'smm_options_validate');
    register_setting('smm_options_14', 'smm_options_14', 'smm_options_validate');
    register_setting('smm_options_15', 'smm_options_15', 'smm_options_validate');
    register_setting('smm_options_16', 'smm_options_16', 'smm_options_validate');
    register_setting('smm_options_17', 'smm_options_17', 'smm_options_validate');
    register_setting('smm_options_18', 'smm_options_18', 'smm_options_validate');
    register_setting('smm_options_19', 'smm_options_19', 'smm_options_validate');
    register_setting('smm_options_20', 'smm_options_20', 'smm_options_validate');
    
    register_setting('smm_options_2000', 'smm_options_2000', 'smm_options_validate');
    
    smm_menuitems();
    
    
    
    
    
    
}
function smm_addsection($t, $f, $s) {
    global $smm_section, $smm_act;
    //$a = substr($s, 4, 100);
    //if ($smm_act[$a] == 1) {
    $smm_section = $s;
    add_settings_section($s, $t, $f, 'smm_plugin');
    //}
}
function smm_addsettings($t, $f) {
    global $smm_section, $smm_act;
    //$a = substr($f, 6, 100);
    //if ($smm_act[$a] == 1) {
    add_settings_field($t, $t, $f, 'smm_plugin', $smm_section);
    //}
}
function smm_placement_text() {
    global $smm_pluginurl, $smm_act;
    echo '<img src="' . $smm_pluginurl . 'areas.jpg" width="100" align="left" hspace="2">';
    echo $smm_act[instructions];
}
// validate options
function smm_options_validate($input) {
    $newinput['adminw']        = min(max($input['adminw'], 100), 1000);
    $newinput['imgw']          = min(max($input['imgw'], 0), 3000);
    $newinput['imgh']          = min(max($input['imgh'], 0), 3000);
    $newinput['excerptlength'] = min(max($input['excerptlength'], 0), 100000);
    return $input;
}
function smm_section_text() {
    global $smm_section_text;
    echo $smm_section_text;
    $smm_section_text = "";
}
function smm_info($t) {
    global $smm_pluginurl;
    if ($t <> '') {
        return smm_text('<i>' . $t . '</i>', 11, 'gray');
    }
}




function smm_jqueryeffects($lay) {
    //img effects options
    $imgeff  = smm_val('imgeff', $lay);
    $imgfade = smm_val('imgfade', $lay);
    $imgdel  = smm_val('imgdel', $lay) * 1000;
    
    //icon options
    $icon = 0; //smm_val('icon',$lay+1000);   
    
    //oi options
    $oidir = smm_val('popupdirection', $lay);
    $oispd = smm_val('popupspd', $lay);
    $oil   = smm_val('popupleft', $lay);
    $oit   = smm_val('popuptop', $lay);
    $oiw   = smm_val('popupw', $lay);
    if ($oiw == 0) {
        $oiw = smm_val('imgw', $lay);
    }
    
    $oih     = smm_val('popuph', $lay);
    $oip     = smm_val('popuppadding', $lay);
    $oif     = smm_val('popupfade', $lay);
    $oic     = smm_val('popupcol', $lay);
    $oiround = smm_val('popupround', $lay);
    
    //bg col change
    $bgcolorh = smm_val('bgcolorh', $lay);
    $bgcolor  = smm_val('bgcolor', $lay);
    //echo $oidir.'<--- '.$oispd.'-';
    
    $r .= '<script type="text/javascript" >
  
  
  
  jQuery(function($) {


$(document).ready(function(){
     

//$(".smm-info").html("test");
       
//SET VAR -------------------------------------------

var smm_index = -1;
var smm_indexo = -1;

//icon effect options
var smm_icon = 0;

//img effect options
var smm_imgeff = "' . $imgeff . '";
var smm_imgdel = "' . $imgdel . '";
var smm_imgfade = ' . $imgfade . ';
var smm_iterations = 20;

//over image options
//0 off 1 left 2 left 10 fade only
var smm_mode = ' . $oidir . ';
var smm_spd = "' . $oispd . '";
var smm_oif = ' . $oif . ';
var smm_oil = ' . $oil . ';
var smm_oit = ' . $oit . ';
var smm_padding = ' . $oip . ';
var smm_oiw = ' . $oiw . ';
var smm_oih = ' . $oih . ';
var smm_oiround = "' . $oiround . '";
var smm_textw = ' . $oiw . ' - smm_padding - smm_padding;
var smm_oic = "' . $oic . '";

//change bg color
var smm_bgcolorh = "' . $bgcolorh . '";
var smm_bgcolor = "' . $bgcolor . '";




var smm_zindex = "' . smm_val('zindex', 0) . '";




//set start jquery ------------------------------------------------------


//EFFECT MODE INIT ---
//if (smm_mode > 0){
//set left, top fot text & bg
$(".smm-imgtext.smm-layout' . $lay . '").css("left",smm_oil + smm_padding);
$(".smm-imgtext.smm-layout' . $lay . '").css("top",smm_oit + smm_padding);
$(".smm-imgbg.smm-layout' . $lay . '").css("left",smm_oil);
$(".smm-imgbg.smm-layout' . $lay . '").css("top",smm_oit);
//set the widths
$(".smm-imgtext.smm-layout' . $lay . '").css("width",smm_textw);
$(".smm-imgbg.smm-layout' . $lay . '").css("width",smm_oiw);
 
//ICON INIT ---
//off
if (smm_icon == 0){
$(".smm-icon.smm-layout' . $lay . '").hide();
}
//on
if (smm_icon == 1){
$(".smm-icon.smm-layout' . $lay . '").show();
}
//on when hover
if (smm_icon == 2){
$(".smm-icon.smm-layout' . $lay . '").show();
$(".smm-icon.smm-layout' . $lay . '").css("opacity",0);
}


//IMG EFF 2 ---
if (smm_imgeff == 2){
//hide imgb
//$(".smm-imgb.smm-layout' . $lay . '").hide();
}

  
//ALL IMG EFFECTS make imgb invisible
$(".smm-imgb.smm-layout' . $lay . '").css("opacity",0);











//MOUSE OVER EFFECTS ------------------------------------------------------
$(".smm-jq.smm-layout' . $lay . '").mouseover(function(){

//GET THE INDEX ---
var smm_index = -1;
var smm_i=0;
while (smm_i<=100 && smm_index == -1)
{
if( $(this).is(".smm-" + smm_i))
{
smm_index = smm_i;
}
smm_i ++;
}


//$(".smm-info").html(smm_index);

  
if (smm_index != smm_indexo && smm_index > 0){



//CLOSE ----------------------------------------------------------------------------------

//MODE 1 --- 
if (smm_mode == 1){
$(".smm-imgbg" + smm_indexo).hide();
$(".smm-imgtext" + smm_indexo).hide();
$(".smm-imgbg" + smm_indexo).css("opacity",0);
$(".smm-imgtext" + smm_indexo).css("opacity",0);
}

//MODE 2 ---
if (smm_mode == 2){
$(".smm-imgbg" + smm_indexo).hide();
$(".smm-imgtext" + smm_indexo).hide();
$(".smm-imgbg" + smm_indexo).css("opacity",0);
$(".smm-imgtext" + smm_indexo).css("opacity",0);
//hide with delay wont work
}


//BACKGROUND COLOR CHANGE
if (smm_bgcolorh != ""){
$(".smm-background0-" + smm_indexo).css("backgroundColor", smm_bgcolor);
}

//IMG EFF 2 SWAP IMG WHEN HOVER ---
if (smm_imgeff == 2){
//hide imgb
$(".smm-imgb" + smm_indexo).animate({opacity:0},smm_spd);
}

//IMG EFF 3 HOVER FADE ---
if (smm_imgeff == 3){
if (smm_imgfade < 1){
$(".smm-img" + smm_indexo).animate({opacity:1},smm_spd);
}
}



//ICON ---
if (smm_icon == 2){
$(".smm-icon" + smm_indexo).animate({opacity:0},smm_spd);
$(".smm-icon" + smm_indexo).hide();
}


smm_indexo = smm_index;

//OPEN ----------------------------------------------


  
//BACKGROUND COLOR CHANGE
if (smm_bgcolorh != ""){
//animate wont always work
$(".smm-background0-" + smm_index).css("backgroundColor", smm_bgcolorh);
}
 
//GET TEXT BG HEIGHT ---
var smm_texthb = $(".smm-imgtext" + smm_index).height();
var smm_texth = smm_texthb + 1;
var smm_bgh = smm_texth + smm_padding * 2;
//if height is set then override

//set a fixed height
if (smm_oih > 0){
var smm_texth = smm_oih - smm_padding - smm_padding;
var smm_bgh = smm_oih;
}


//MODE INIT ---
if (smm_mode > 0){
$(".smm-imgtext" + smm_index).css("height",smm_texth);
$(".smm-imgbg" + smm_index).css("opacity",smm_oif);
$(".smm-imgbg" + smm_index).css("background",smm_oic);
var smm_zindexb = smm_zindex + ' . $lay . ' * 2;
$(".smm-imgbg" + smm_index).css("z-index",smm_zindexb);
$(".smm-imgtext" + smm_index).css("z-index",smm_zindexb + 1);


if (smm_oiround == 0){
  $(".smm-imgbg" + smm_index).css("border-radius",0);
}
//$(".smm-imgbg" + smm_index).css("box-shadow",0);
$(".smm-imgbg" + smm_index).hide().show();
$(".smm-imgtext" + smm_index).hide().show();
}

//MODE 1 ---
if (smm_mode == 1){

//set start values
$(".smm-imgbg" + smm_index).css("width",0);
$(".smm-imgbg" + smm_index).css("height",smm_bgh);
//start animate
$(".smm-imgbg" + smm_index).animate({width:smm_oiw},smm_spd);
$(".smm-imgtext" + smm_index).delay(200).animate({opacity:1},smm_spd);
}

//MODE 2 ---
if (smm_mode == 2){
//set start values
$(".smm-imgbg" + smm_index).css("width",smm_oiw);
$(".smm-imgbg" + smm_index).css("height",0);
//start animate
$(".smm-imgbg" + smm_index).animate({height:smm_bgh},smm_spd);
$(".smm-imgtext" + smm_index).delay(200).animate({opacity:1},smm_spd);
}


//IMG EFF SWAP IMG WHEN HOVER ---
if (smm_imgeff == 2){
//show imgb
$(".smm-imgb" + smm_index).show();
$(".smm-imgb" + smm_index).animate({opacity:1},smm_spd);
}

//IMG EFF HOVER FADE ---
if (smm_imgeff == 3){
if (smm_imgfade < 1){
$(".smm-img" + smm_index).animate({opacity: smm_imgfade},smm_spd);
}
}

//ICON ---
if (smm_icon == 2){
$(".smm-icon" + smm_index).show();
$(".smm-icon" + smm_index).animate({opacity:1},smm_spd);
}



}
});
 
 
        
//IMG EFF 1 AUTO SWAP IMAGE ---
if (smm_imgeff == 1){
for (smm_i=0;smm_i<=smm_iterations;smm_i++)
{
$(".smm-imgb.smm-layout' . $lay . '").delay(smm_imgdel).animate({opacity:1},smm_spd);
$(".smm-imgb.smm-layout' . $lay . '").delay(smm_imgdel).animate({opacity:0},smm_spd);
}}
});





});
</script>';
    
    return $r;
    
    
}







//admin message box
function smm_top_text() {
    global $smm_tab, $smm_msg, $smm_boxcol, $smm_sc, $smm_act;
    $w   = smm_val('adminw', 0);
    $tab = max($_GET['tab'], 1);
    $sc  = $_GET['sc'];
    
    //show external message
    //$m .= smm_getmessage();
    
    //main messages
    //$tabg = $tab + 1000;
    
    
    
    //      if ($smm_act[jquery] == 1){
    //  $bu .= '<a  class="button-secondary"  href="?page=smm_plugin&tab='.$tabg.'">Effects Options</a> ';
    //}
    
    //global $smm_shortcode; 
    //if ($smm_shortcode <> ""){
    //$bu .= '<a  class="button-secondary"  href="?page=smm_plugin&tab='.$tab.'&sc=1">Shortcodes</a> ';
    //}
    
    $bu .= '<br><a  class="button-secondary"  target="blank" href="http://1customize.com">Plugin Home</a></p> ';
    
    $info = $smm_act['info'];
    if ($info <> "") {
        $m .= smm_box($info, 'blue');
    }
    
    //global $smm_shortcode;
    if ($smm_act[shortcode] <> "") {
        $c = '[' . $smm_act[shortcode] . ' show="' . $smm_tab . '"]';
        $t = 'To show this layout, paste this shortcode on a page or post:<br>' . $c;
        $m .= smm_box($t, 'blue');
    }
    
    
    //show javascript messaged
    $m .= smm_box('', 'blue', 'smm-info');
    
    
    //show shortcodes
    //if ($sc == 1){
    // $cats = get_categories('orderby=count&order=DESC'); 
    // foreach ($cats as $cat){
    //   $i = $cat->term_id;
    //   $n = $cat->cat_name;
    //   $o .= 'filter layout '.$smm_tab.' by category '.$n.'<br>';
    //   $o .= '[layout show="'.$gvlatout.'" cat1="'.$i.'"]<br>';
    // }
    // $m .= smm_box('<b>Shortcodes: filter by categories</b><br>'.$o,'blue');
    //}
    
    //start clock
    global $smm_time;
    $smm_time = microtime();
    
    //layout
    $o = smm_shortcode(array(
        'show' => $smm_tab
    ));
    
    //check width
    $o .= '<script>
    jQuery(function($) {
    $(document).ready(function(){
    var smm_w = $(".smm-admin").width();
    var smm_max = ' . smm_val('adminw', 0) . ';
    smm_w = smm_w - 20;
    if (smm_w > smm_max){
      $(".smm-info").html("WARNING width is wider than the example width (set in main options) Width is " + smm_w + " pixels");
    }
    });
    });  
    </script>';
    
    
    //no images found message
    global $smm_noimg;
    if ($smm_noimg > 0 and smm_val('area0', $smm_tab) > 0) {
        $m .= smm_box('<b>No image was found in ' . $smm_noimg . ' of the posts below</b>');
    }
    
    // $ti = smm_gettime();
    //$ti = smm_text('<br>Displayed in ' . $ti . ' ms', '10', 'gray');
    
    //display all
    //$o = smm_tableh($m.'<br><br>'.$o.$ti,'','',$w.'px','','','smm-clear','','','smm-admin',$w.'px');
    $o = $m . '<br><br>' . $o . $ti;
    $o = smm_tablehb(array(
        't1' => $o,
        'w1' => $w . 'px',
        'clt' => 'smm-admin',
        'tw' => $w . 'px'
    ));
    echo $bu . $o;
    
}
function smm_gettime() {
    global $smm_time;
    return round((microtime() - $smm_time) * 1000);
}





//main options
function smm_s_period() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'ON'
    );
    smm_sel('period', '', 'Can make excerpts look better', $sel);
    //smm_switch('period', '', 'can make excerpt look better');
}
function smm_s_duplicates() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'ON'
    );
    smm_sel('duplicates', '', 'When using several layouts on a page this functionality stops posts from showing up twice', $sel);
    //smm_switch('duplicates', '', ' default off, allow same post to show up more than once on a page');
}
function smm_s_adminw() {
    smm_str('adminw', '', 'The width in pixels of the example post in the admin layout section');
}
function smm_s_zindex() {
    smm_str('zindex', '', '');
}
function smm_s_donate() {
    $sel = array(
        '0' => 'I have not donated',
        '1' => 'I have donated'
    );
    smm_sel('donated', '', 'IF YOU ENJOY THIS PLUGIN SUPPORT IT!', $sel);
    //smm_switch('donated', '', '');
}
function smm_s_postinfo() {
    //$sel = array( '1' => 'Name & Date', '2' => 'Name Only', '3' => 'Date Only', '100' => 'Custom');
    //smm_sel('postinfob','','',$sel);
    
    //  $v = smm_val('postinfob',0);
    //if ($v == 100){
    //$t = 'Customize a name & date, Example: "Posted by %name, %date"<br>';
    //  $t .= 'Following options can be used: %name = the user name, %date = post date, %comments = comment count<br> %type = post type, 
    //  %length = excerpt characters, %status = post status, %id = post id, %title = the title';
    $t = 'Customize name, date & postinfo, example:  "%comments, Read More"<br>';
    $t .= 'Following options can be used in the postinfo string: %name = the user name, %date = post date, %comments = comment count<br> %type = post type, 
     %length = excerpt characters, %status = post status, %id = post id, %title = the title';
    smm_str('postinfocustom', '', $t, 50);
    
    //  }
}
function smm_s_postinfob() {
    //$sel = array( '1' => 'Read more', '2' => 'Comment count, Read more', '100' => 'Custom');
    //smm_sel('postinfo','','',$sel);
    
    //   $v = smm_val('postinfo',0);
    //if ($v == 100){
    smm_str('postinfobcustom', '', $t, 50);
    //}
}


//CSS PATH
function smm_s_csspath() {
    //css path edit ---
    $u = site_url();
    smm_str('cssurl', smm_text($u . '/ ', '15', 'black', 0, 1), 'URL TO A CSS FILE, example: ' . $u . '/mystyle.css. ', 50);
    
    $v  = smm_val('cssurl', 0);
    $v2 = site_url() . '/' . $v;
    if (strlen($v) > 1 and strpos($v2, '.css') > 0) {
        if (@fopen($v2, "r") == true) {
            echo smm_box('CSS File found!', 'green');
        } else {
            echo smm_box('CSS file not found!', 'red');
        }
        
    }
    
    
    //check filesize ---
    global $smm_pluginpath, $smm_filesize;
    if ($smm_filesize > 0) {
        if (file_exists($smm_pluginpath . '/style.css')) {
            $fs = filesize($smm_pluginpath . '/style.css');
            if ($fs < $smm_filesize - 1000 or $fs > $smm_filesize + 1000) {
                echo smm_box('WARNING style.css seem to have been changed', 'red');
                //echo $fs;
            }
        }
    }
    
    
    //warning message ---
    echo smm_box($a . '<b>IMPORTANT!</b> Do not edit the style.css in the plugin directory! It will be overwritten when the plugin updates.- To add a seperate css file and override the plugin css: Take a copy of the style.css and put the copy outside the plugin directory. Change the <i>css file url</i> to point to your css file. Make a backup of your css file. 
Read more on <a href="http://1customize.com" target="_blank">plugin home</a>.  ', 'red');
}





//TOP OPTIONS ---
function smm_s_posts() {
    $sel = array(
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '12' => '12',
        '15' => '15',
        '20' => '20',
        '25' => '25',
        '30' => '30'
    );
    smm_sel('posts', '', '', $sel);
}
function smm_s_maintitle() {
    smm_str('maintitle', '', '', 40);
}




//PLACEMENT OPTIONS ---
function smm_s_area0() {
    $sel = array(
        '0' => 'HIDE',
        '2' => 'LEFT',
        '3' => 'RIGHT'
    );
    smm_sel('area0', '', '', $sel);
    smm_selpos('pos0');
}
function smm_s_area3() {
    smm_selarea('area3');
    smm_selpos('pos3');
}
function smm_s_area4() {
    smm_selarea('area4');
    smm_selpos('pos4');
}
function smm_s_area5() {
    smm_selarea('area5');
    smm_selpos('pos5');
}
function smm_s_area2() {
    smm_selarea('area2');
    smm_selpos('pos2');
}
function smm_s_area1() {
    smm_selarea('area1');
    smm_selpos('pos1');
}
function smm_s_area7() {
    smm_selarea('area7');
    smm_selpos('pos7');
}
function smm_s_area6() {
    smm_selarea('area6');
    smm_selpos('pos6');
}
function smm_s_area8() {
    smm_selarea('area8');
    smm_selpos('pos8');
}
function smm_s_areabg() {
    //$sel = array( '0' => 'HIDE', '2' => 'LEFT', '3' => 'RIGHT', '4' => 'ALL AREAS', '5' => 'LAYOUT');
    $sel = array(
        '0' => 'HIDE',
        '1' => 'IMAGE AREA',
        '2' => 'ALL AREAS'
    );
    smm_sel('areabg', '', '', $sel);
}





//IMAGE OPTIONS ---
function smm_s_imgwh() {
    smm_str('imgw', 'width:', '');
    smm_str('imgh', ' height:', 'In pixels. Leave blank to not set the width & height');
}
function smm_s_imgsize() {
    $sel = array(
        'thumbnail' => 'Thumbnail',
        'medium' => 'Medium',
        'large' => 'Large'
    );
    smm_sel('size', '', '', $sel);
}
function smm_s_embed() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'ON'
    );
    smm_sel('embed', '', '', $sel);
}




//GALLERY OPTIONS ---
function smm_s_galwh() {
    smm_str('galw', 'width:', '');
    smm_str('galh', ' height:', 'In pixels. Leave blank to not set the width & height<br>If used in popup or over image make sure width is not to wide!');
    
}
function smm_s_galsize() {
    $sel = array(
        'thumbnail' => 'Thumbnail',
        'medium' => 'Medium',
        'large' => 'Large'
    );
    smm_sel('galsize', '', '', $sel);
    $sel = array(
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10'
    );
    smm_sel('galnr', ' How many:', '', $sel);
}




//general options
function smm_s_widget() {
    $sel = array(
        'o' => 'HIDE',
        '1' => 'SHOW'
    );
    smm_sel('widget', '', 'This will create a widget for this layout', $sel);
}
function smm_s_postspace() {
    $sel = array(
        'o' => 'HIDE',
        '1' => 'SHOW'
    );
    smm_sel('postspace', '', 'Add a space under each post', $sel);
}
function smm_s_links() {
    $sel = array(
        '0' => 'NORMAL',
        '1' => 'NO LINKS'
    );
    smm_sel('links', '', '', $sel);
}
function smm_s_layoutspace() {
    $sel = array(
        '0' => 'HIDE',
        '1' => 'SHOW SPACE',
        '2' => 'SHOW HR TAG'
    );
    smm_sel('layoutspace', '', 'Set a divider under the layout', $sel);
}






//FILTER OPTIONS ---
function smm_s_catfilter() {
    smm_selcat('cat1');
}
function smm_s_catfilter2() {
    smm_selcat('cat2');
}
function smm_s_catfilter3() {
    smm_selcat('catnotin');
}
function smm_s_excerpt() {
    smm_str('excerptlength', '', 'Length in character. 0 = no limit');
}
function smm_s_filter() {
    $sel = array(
        '1' => 'Main Content Field (default)',
        '2' => 'Exerpt Field',
        '3' => 'Custom Fields (Name = excerpt)) ',
        '4' => 'Exerpt Field - Full html (not recommended) ',
        '5' => 'Main Content Field - Full html (not recommended) '
        
    );
    smm_sel('filter', '', 'Set which field the excerpt will be created from<br>Note: when using full html mode the excerpt can not be limited in length. <br>Using full html in excerpts is not normally recommended', $sel);
}
function smm_s_paged() {
    $sel = array(
        'o' => 'HIDE',
        '1' => 'SHOW ABOVE',
        '2' => 'SHOW ABOVE & BELOW',
        '3' => 'SHOW BELOW'
    );
    smm_sel('paged', '', 'Warning: only one pagination can be used per page! If using several<br> layouts on a page then max one can have pagination to avoid conflicts', $sel);
}
function smm_s_columns() {
    $sel = array(
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10'
    );
    smm_sel('columns', '', '', $sel);
    
    $sel = array(
        '0' => 'Vertically',
        '1' => 'Horizontally'
    );
    smm_sel('align', ' Aligned:', 'Create a grid of posts<br>Note: using several columns increases the width significantly', $sel);
}
function smm_s_sort() {
    $sel = array(
        '0' => 'Descending Date',
        '1' => 'Descending Modified',
        '2' => 'Descending Author',
        '3' => 'Descending Title',
        '4' => 'Descending Post id',
        '6' => 'Descending Comment Count',
        '7' => 'Descending Menu Order',
        '100' => 'Ascending Date',
        '101' => 'Ascending Modified',
        '102' => 'Ascending Author',
        '103' => 'Ascending Title',
        '104' => 'Ascending Post id',
        '106' => 'Ascending Comment Count',
        '107' => 'Ascending Menu Order',
        '5' => 'Random order'
    );
    smm_sel('sort', '', '', $sel);
}
function smm_s_type() {
    smm_str('type', '', 'post and page are normally used. <br>Other content types can be used but may or may not work.');
}
function smm_s_offset() {
    smm_str('offset', '', '0 = default, start with the first post');
}
function smm_s_status() {
    $sel = array(
        'publish' => 'Publish',
        'pending' => 'Pending',
        'draft' => 'Draft',
        'auto-draft' => 'Auto Draft',
        'future' => 'Future',
        'private' => 'Private',
        'inherit' => 'Inherit',
        'trash' => 'Trash',
        'any' => 'Any'
    );
    smm_sel('status', '', 'Publish is default', $sel);
}
function smm_s_maxdays() {
    smm_str('maxdays', '', '0 = not activated. Filter posts out that are a certain days old');
}
function smm_s_sticky() {
    $sel = array(
        '0' => 'No Filter',
        '1' => 'Show only sticky posts'
    );
    smm_sel('sticky', '', '', $sel);
}
function smm_s_author() {
    smm_str('author', '', 'Add the author number to show posts only from certain author<br>Leave blank for no filter');
}
function smm_s_metakey() {
    smm_str('metakey', '', 'Show posts that have only this metakey. Leave blank for no filter.');
}










//EFFECT OPTIONS GENERAL ---
function smm_eff1() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'ON'
    );
    smm_sel('effact', '', '', $sel);
}
function smm_eff2() {
    $sel = array(
        '0' => 'HIDE',
        '2' => 'WHEN HOVER'
    );
    smm_sel('icon', '', '', $sel);
}
function smm_s_imgeff() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'AUTO SWAP IMAGE',
        '2' => 'SWAP IMAGE WHEN HOVER',
        '3' => 'FADE IMAGE'
    );
    smm_sel('imgeff', '', 'Image swap effect need 2 uploaded images to work for each post', $sel);
    
}
function smm_s_imgeffset() {
    //  global $smm_tab;
    //$v = smm_val('imgeff',$smm_tab); 
    //if ($v == 1){
    smm_str('imgdel', ' Delay in seconds:', '');
    //}
    //To work, 2 images must be uploaded to the post and not set as featured
    //   if ($v == 3){
    $sel = array(
        '1' => 'NO FADE',
        '0.90' => '90%',
        '0.80' => '80%',
        '0.70' => '70%',
        '0.60' => '60%',
        '0.50' => '50%',
        '0.40' => '40%',
        '0.30' => '30%',
        '0.20' => '20%',
        '0.10' => '10%',
        '0' => '0%'
    );
    smm_sel('imgfade', ' Fade image:', 'Delay works for AUTO SWAP and fade for FADE IMAGE', $sel);
    //}
}
function smm_s_bgcol() {
    smm_str('bgcolorh', 'Color hover: ', '');
    smm_str('bgcolor', ' Color not hover', 'Leave blank for no color change.');
}
function smm_s_texteff() {
    $sel = array(
        '0' => 'JQUERY MODE',
        '1' => 'CSS MODE'
    );
    smm_sel('cssbg', '', 'Jquery mode means the background color can be set and use javascript effects on it.<br>Css mode means css effects can be used but they will be without javascript effects', $sel);
    
}




//EFFECT OVER IMAGE ---
function smm_s_directionspd() {
    $sel = array(
        '1' => 'LEFT',
        '2' => 'DOWN'
    );
    smm_sel('popupdirection', 'Direction: ', '', $sel);
    $sel = array(
        'normal' => 'MEDIUM',
        'fast' => 'FAST'
    );
    smm_sel('popupspd', ' Speed: ', '', $sel);
}
function smm_s_position() {
    smm_str('popupleft', ' Left:', '');
    smm_str('popuptop', ' Top:', 'In pixels relative to the top left corner of the picture. <br>Negative values are allowed.');
}

function smm_s_popupwh() {
    smm_str('popupw', ' Width:', '');
    smm_str('popuph', ' Height:', '');
    smm_str('popuppadding', ' Padding:', 'In pixels. If width or height is 0 then these values will be set by the plugin<br>Make sure it is wide enough for text and content');
}
function smm_s_colfade() {
    smm_str('popupcol', ' Color:', '');
    $sel = array(
        '1' => 'NO FADE',
        '0.90' => '90%',
        '0.80' => '80%',
        '0.70' => '70%',
        '0.60' => '60%',
        '0.50' => '50%',
        '0.40' => '40%',
        '0.30' => '30%',
        '0.20' => '20%',
        '0.10' => '10%',
        '0' => '0%'
    );
    smm_sel('popupfade', ' Bg fade', '', $sel);
    $sel = array(
        '0' => 'OFF',
        '1' => 'YES'
    );
    smm_sel('popupround', ' Round Corners', '', $sel);
}







//TEXT AND COLORS ---
function smm_s_colact() {
    $sel = array(
        '0' => 'OFF',
        '1' => 'ON'
    );
    smm_sel('colact', '', '', $sel);
    $v = smm_val('colact', 2000);
    if ($v == 0) {
        echo smm_box('If turned ON, this option allows text size and colors to be changed');
    } else {
        echo smm_box('Text & Color Options are activated. <br>Warning: Any css settings will be overrided!', 'green');
    }
}
function smm_coled($l) {
    $sel = array(
        '' => 'css',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19',
        '20' => '20',
        '21' => '21',
        '22' => '22',
        '23' => '23',
        '24' => '24',
        '25' => '25',
        '26' => '26',
        '27' => '27',
        '28' => '28',
        '29' => '29',
        '30' => '30'
    );
    //smm_sel($p, '', '', $sel);
    smm_sel('size' . $l, ' Size: ', '', $sel);
    $sel = array(
        'normal' => 'Normal',
        'bold' => 'Bold'
    );
    smm_sel('bold' . $l, ' Bold:', '', $sel);
    smm_str('color' . $l, ' Color:', '');
    
    
    
    //  smm_str('bg' . $l, ' Bg Color:', '');
    //    smm_str('padding' . $l, ' Padding:', '', 12);
    
    
    
    $c = '<div ' . $class . ' style=" font-weight:' . smm_val('bold' . $l, 2000) . ' !important; padding:' . smm_val('padding' . $l, 2000) . ' !important; background:' . smm_val('bg' . $l, 2000) . '; color:' . smm_val('color' . $l, 2000) . '; font-size:' . smm_val('size' . $l, 2000) . 'px; width:100px; height:60px; padding: 3px; margin:0px 0px 0px 8px; display:inline;">Example</div>';
    echo $c;
}
function smm_s_textt1() {
    smm_coled('t1');
}
function smm_s_textt2() {
    smm_coled('t2');
}
function smm_s_textt3() {
    smm_coled('t3');
}
function smm_s_textt4() {
    smm_coled('t4');
}
function smm_s_textt5() {
    smm_coled('t5');
}
function smm_s_textt6() {
    smm_coled('t6');
}
function smm_s_textt7() {
    smm_coled('t7');
}
function smm_s_textt8() {
    smm_coled('t8');
}
function smm_s_textt9() {
    smm_coled('t9');
}
function smm_s_textt10() {
    smm_coled('t10');
}
function smm_s_textt11() {
    smm_coled('t11');
}
function smm_s_textt12() {
    smm_coled('t12');
}
function smm_s_textt13() {
    smm_coled('t13');
}
function smm_s_textt14() {
    smm_coled('t14');
}
function smm_s_textt15() {
    smm_coled('t15');
}
function smm_s_textt16() {
    smm_coled('t16');
}
function smm_s_textt17() {
    smm_coled('t17');
}
function smm_s_textt18() {
    smm_coled('t18');
}
function smm_s_textt19() {
    smm_coled('t19');
}
function smm_s_textt20() {
    smm_coled('t20');
}

function smm_s_texte1() {
    smm_coled('e1');
}
function smm_s_texte2() {
    smm_coled('e2');
}
function smm_s_texte3() {
    smm_coled('e3');
}
function smm_s_texte4() {
    smm_coled('e4');
}
function smm_s_texte5() {
    smm_coled('e5');
}
function smm_s_texte6() {
    smm_coled('e6');
}
function smm_s_texte7() {
    smm_coled('e7');
}
function smm_s_texte8() {
    smm_coled('e8');
}
function smm_s_texte9() {
    smm_coled('e9');
}
function smm_s_texte10() {
    smm_coled('e10');
}

function smm_s_texte11() {
    smm_coled('e11');
}
function smm_s_texte12() {
    smm_coled('e12');
}
function smm_s_texte13() {
    smm_coled('e13');
}
function smm_s_texte14() {
    smm_coled('e14');
}
function smm_s_texte15() {
    smm_coled('e15');
}
function smm_s_texte16() {
    smm_coled('e16');
}
function smm_s_texte17() {
    smm_coled('e17');
}
function smm_s_texte18() {
    smm_coled('e18');
}
function smm_s_texte19() {
    smm_coled('e19');
}
function smm_s_texte20() {
    smm_coled('e20');
}

function smm_s_text3() {
    smm_coled('3');
}
function smm_s_text4() {
    smm_coled('4');
}
function smm_s_text5() {
    smm_coled('5');
}
function smm_s_text6() {
    smm_coled('6');
}
function smm_s_text7() {
    smm_coled('7');
}
function smm_s_textpaddingimg() {
    smm_str('paddingimg', '', '', 12);
}
function smm_s_elspace() {
    $sel = array(
        '' => 'css',
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8',
        '9' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19',
        '20' => '20',
        '21' => '21',
        '22' => '22',
        '23' => '23',
        '24' => '24',
        '25' => '25',
        '26' => '26',
        '27' => '27',
        '28' => '28',
        '29' => '29',
        '30' => '30'
    );
    smm_sel('elspace', '', 'The space below each element in pixels', $sel);
    
}















//sel functions --------------------------------
function smm_selarea($p, $t = '', $t2 = '') {
    global $smm_act;
    $sel = array(
        '0' => 'HIDE',
        '1' => 'TOP',
        '2' => 'LEFT',
        '3' => 'RIGHT'
    );
    if ($smm_act[overimage] == 1) {
        $sel[10] = 'OVER IMAGE';
    }
    if ($smm_act[jquery] == 1) {
        $sel[11] = 'POP UP';
    }
    smm_sel($p, '', '', $sel);
}
function smm_selpos($p, $t = '', $t2 = '') {
    global $smm_act;
    if ($smm_act[position] == 1) {
        $sel = array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
            '6' => '6',
            '7' => '7',
            '8' => '8',
            '9' => '9',
            '10' => '10'
        );
        smm_sel($p, '', '', $sel);
    }
}
function smm_selcat($p, $t = '', $t2 = '') {
    global $smm_tab;
    
    $v = smm_val($p, $smm_tab);
    $b = 'smm_options_' . $smm_tab . '[' . $p . ']';
    
    $sel[$v] = 'selected="selected"';
    echo $t . '<select  name="' . $b . '">';
    
    echo '<option ' . $sel[0] . '  value="0"        >NO FILTER </option>';
    
    $cats = get_categories('orderby=count&order=DESC');
    foreach ($cats as $cat) {
        $i = $cat->term_id;
        $n = $cat->cat_name;
        echo '<option ' . $sel[$i] . '  value="' . $i . '"        >' . $n . '</option>';
    }
    
    echo '</select><i>' . smm_info($t2) . '</i>';
    
}
function smm_sel($p, $t = '', $t2 = '', $sel) {
    global $smm_tab;
    
    $v = smm_val($p, $smm_tab);
    $b = 'smm_options_' . $smm_tab . '[' . $p . ']';
    
    echo $t . '<select  name="' . $b . '">';
    
    foreach ($sel as $tab => $name) {
        if ($v == $tab) {
            echo '<option selected="selected" value="' . $tab . '"      >' . $name . '</option>';
        } else {
            echo '<option value="' . $tab . '"      >' . $name . '</option>';
        }
    }
    
    echo ' </select><i>' . smm_info($t2) . '</i>';
    
}
function smm_str($p, $t = '', $t2 = '', $l = 4) {
    global $smm_tab;
    
    $v = smm_val($p, $smm_tab);
    $b = 'smm_options_' . $smm_tab . '[' . $p . ']';
    echo $t . '<input name="' . $b . '" size="' . $l . '" type="text" value="' . $v . '" />' . smm_info($t2);
    
}







function smm_query() {
    global $smm_sc, $smm_layout;
    
    //post id
    if ($smm_sc[postid] > 0) {
        $q['p'] = $smm_sc[postid];
    } else {
        //post status
        $q['post_status'] = smm_val('status', $smm_layout);
        
        //orderby
        $smm_sort = smm_val('sort', $smm_layout);
        
        //if ($smm_sort < 0){
        //  $smm_sort = smm_val('sort', 0);
        //}
        if ($smm_sort == 0 or $smm_sort == 100) {
            $q['orderby'] = 'date';
        }
        if ($smm_sort == 1 or $smm_sort == 101) {
            $q['orderby'] = 'modified';
        }
        if ($smm_sort == 2 or $smm_sort == 102) {
            $q['orderby'] = 'author';
        }
        if ($smm_sort == 3 or $smm_sort == 103) {
            $q['orderby'] = 'title';
        }
        if ($smm_sort == 4 or $smm_sort == 104) {
            $q['orderby'] = 'ID';
        }
        if ($smm_sort == 5 or $smm_sort == 105) {
            $q['orderby'] = 'rand';
        }
        if ($smm_sort == 6 or $smm_sort == 106) {
            $q['orderby'] = 'comment_count';
        }
        if ($smm_sort == 7 or $smm_sort == 107) {
            $q['orderby'] = 'menu_order';
        }
        if ($smm_sort == 8 or $smm_sort == 108) {
            $q['meta_key'] = 'smm_metadata';
            $q['orderby']  = 'meta_value';
        }
        
        if ($smm_sort < 100) {
            $q['order'] = 'DESC';
        } else {
            $q['order'] = 'ASC';
        }
        
        //category
        $c1 = smm_val('cat1', $smm_layout);
        $c2 = smm_val('cat2', $smm_layout); //$smm_sc[cat2]
        if ($c1 > 0 and $c2 > 0) {
            $q['category__and'] = array(
                $c1,
                $c2
            );
        } else {
            if ($c1 > 0) {
                $q['category__and'] = array(
                    $c1
                );
            } else {
                if ($c2 > 0) {
                    $q['category__and'] = array(
                        $c2
                    );
                }
            }
        }
        
        //ignore category
        $catnotin = smm_val('catnotin', $smm_layout);
        if ($catnotin > 0) {
            $q['category__not_in'] = $catnotin;
        }
        
        //metakey
        $metakey = smm_val('metakey', $smm_layout);
        if ($metakey <> "") {
            $q['meta_key'] = $metakey;
        }
        
        //author
        $author = smm_val('author', $smm_layout);
        if ($author <> "") {
            $q['author'] = $author;
        }
        
        //offset
        $smm_offset = smm_val('offset', $smm_layout);
        $smm_p      = $_GET['paged'];
        if ($smm_p > 0) {
            $smm_offset += $smm_p * smm_val('posts', $smm_layout);
            
        }
        if ($smm_offset > 0) {
            //$q['offset'] = $smm_offset;
        }
        
        //posttype
        $q['post_type'] = smm_val('type', $smm_layout);
        
        //allow duplicates
        if (!smm_val('duplicates', 0) == 1) {
            $q['post__not_in'] = $smm_displayed;
        }
        
    }
    
    //activate filter for maxdays
    global $smm_maxdays;
    $smm_maxdays = smm_val('maxdays', $smm_layout);
    if ($smm_maxdays) {
        add_filter('posts_where', 'smm_filter_where');
    }
    
    
    //posts
    $q['posts_per_page'] = smm_val('posts', $smm_layout);
    
    //sticky
    //$sticky = smm_val('sticky', $smm_layout);
    //if ($sticky == 1) {
    // echo 'STICKY';
    //$stickyp       = get_option('sticky_posts');
    
    // $q['post__in'] = $stickyp;
    
    //$q['ignore_sticky_posts'] = 0;
    //} else {
    //$q['ignore_sticky_posts'] = 1;
    //}
    //important otherwise they are added in the posts on the front page 
    $q['ignore_sticky_posts'] = 1;
    
    $q['post_date'] = -1;
    //$q['cache_results'] = 0;
    //$q['nopaging'] = 0;
    // $q['comments_per_page'] = 0;
    // [is_single]
    
    return $q;
}




//query -------------------------------------------------------------------------------------------------
function smm_list($l) {
    global $post, $smm_displayed, $smm_postco_lay, $smm_sc, $smm_totalwidth, $smm_layout, $smm_postco, $smm_link, $smm_act;
    $smm_layout = $l;
    
    smm_placeinit();
    
    
    
    //effects activate
    if ($smm_act[jquery] == 1) {
        $o .= smm_jqueryeffects($smm_layout);
    }
    
    
    $links = smm_val('links', $smm_layout);
    
    
    //columns
    $columns         = smm_val('columns', $smm_layout);
    $align           = smm_val('align', $smm_layout);
    $smm_postco_lay  = 0;
    $smm_column      = 0;
    $smm_column_data = array(
        ''
    );
    
    $ar = array(
        ''
    );
    
    //query  -------------------------------------
    wp_reset_query();
    //$q = smm_query();
    $smm_result = new WP_Query(smm_query());
    //     $smm_result = new WP_Query('showposts=1');
    
    //print_r($smm_result);
    
    //pagination
    $paged    = smm_val('paged', $smm_layout);
    $maxpages = $smm_result->max_num_pages - 1;
    if ($paged == 1 or $paged == 2) {
        $o .= smm_paged($maxpages);
    }
    //echo ' -';
    while ($smm_result->have_posts()) {
        $smm_result->the_post();
        
        
        //totsl posts
        $smm_postco++;
        
        //posts co for this layout
        $smm_postco_lay++;
        
        //set post link
        $smm_link = get_permalink($post->ID);
        if ($links == 1) {
            $smm_link = "";
        }
        
        //get a link from custom fields instead
        $custom = get_post_custom($post->ID);
        $smm_l  = $custom['link'][0];
        if ($smm_l <> "" and $smm_l <> "1") {
            $smm_link = $smm_l;
        }
        if ($smm_l == "0") {
            $smm_link = "";
        }
        
        //1 column only
        if ($columns == 1) {
            $o .= smm_display($smm_layout);
        }
        
        
        if ($columns > 1) {
            //number of columns
            $smm_column++;
            if ($smm_column > $columns) {
                $smm_column = 1;
                if ($align == 1) {
                    $o .= smm_tablerows($smm_column_data, $columns);
                }
            }
            
            //global $smm_column_data;
            if ($align == 1) {
                $smm_column_data[$smm_column] = smm_display($smm_layout);
            } else {
                $smm_column_data[$smm_column] .= smm_display($smm_layout);
            }
        }
        
    }
    
    
    
    //filter remove
    if ($smm_sc[maxdays] > 0) {
        remove_filter('posts_where', 'smm_filter_where');
    }
    
    
    
    //dual end non aligned
    if ($columns > 1) {
        $o .= smm_tablerows($smm_column_data, $columns);
    }
    
    // bg on whole layout -----------------------------------------------------
    //$bg = smm_val('areabg',$smm_layout);
    //$bge = smm_val('cssbg',$smm_layout);
    //$ibg = 'smm-background'.$bge;
    //if ($bg == 5 and $o <> ''){
    //  $o = smm_tableh($o,'','',$smm_totalwidth,'','',$ibg,'','','smm-clear',$smm_totalwidth);
    //}
    
    //scroll
    //if ($smm_layout == 'top' and $o <> '') {
    //  $o = '<marquee id="smm-top"  class="c"  direction="left" loop="999" scrollamount="3">' . $o . '</marquee>';
    //}/
    
    //section title
    //$ti = smm_val('title',$smm_layout);
    //if ($ti <> '' and $o <> ''){
    // $o = smm_div($ti ,'smm-layouttitle').$o;
    //}
    
    //$smm_row = smm_val('row',0);
    //if ($smm_row > 0){
    //$smm_column_data[$smm_row] .= '<div id="smm-clear" class="c">'.$o.'</div>';
    //return '';
    //}
    
    if ($paged > 1) {
        $o .= smm_paged($maxpages);
    }
    //$o .= 'll';
    //pagination('»', '«');
    
    //add layout space on the bottom
    if ($o <> '') {
        $sp = smm_val('layoutspace', $smm_layout);
        if ($sp == 2) {
            $o .= '<hr id="smm-layoutspace"  class="c" ></hr>';
        }
        if ($sp == 1) {
            $o .= '<p id="smm-layoutspace"  class="c" ></p>';
        }
    }
    
    //test info
    if (smm_val('test', 0) > 0) {
        $info .= 'Below is Layout: ' . $smm_layout;
        $o = smm_div($info, 'smm-test') . $o;
    }
    
    //output
    if ($o <> '') {
        return '<div id="smm-clear">' . $o . '</div>';
    }
    
    return '';
    
}
function smm_paged($maxpages) {
    $big = 9999999; // need an unlikely integer
    
    $o .= paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?hmmpaged=%#%',
        'current' => max(1, $_GET['paged']),
        'total' => $maxpages
    ));
    return $o;
}
function smm_filter_where($where = '') {
    global $smm_maxdays;
    $where .= " AND post_date > '" . date('Y-m-d', strtotime('-' . $smm_maxdays . ' days')) . "'";
    return $where;
}



//display ----------------------------------------------------------------------------------------------
function smm_display($smm_layout) {
    global $post, $smm_displayed, $smm_postauthor, $smm_postco_lay, $smm_sc, $smm_ext, $smm_totalwidth, $smm_link, $smm_act;
    
    if (function_exists("smm_displaystart")) {
        smm_displaystart();
    }
    
    if ($smm_layout > 999990) {
        $smm_postco_lay++;
        $smm_displayed[] = $post->ID;
        
        $n    = smm_val('posts', $smm_layout);
        $cat  = smm_cattext();
        $tag  = smm_tagtext();
        $nam  = smm_postinfob();
        $e    = smm_excerpt(smm_val('excerptlength', $smm_layout), 'smm-excerpt-layout' . $smm_layout);
        $t    = smm_title('smm-title-layout' . $smm_layout);
        $w    = smm_val('imgw', $smm_layout);
        $h    = smm_val('imgh', $smm_layout);
        $size = smm_val('size', $smm_layout);
        $i    = smm_img($w, $h, $size, 'smm-img', $tover);
        
        if ($smm_postco_lay == 1) {
            $o .= '<table>';
        }
        if ($smm_postco_lay == $n) {
            $o .= '</table>';
        }
        
        
        $o .= '<tr><td>' . $i . '</tr></td>';
        
        
    }
    
    
    if ($smm_layout == 'top') {
        $smm_postco_lay++;
        
        $d = '';
        if ($smm_postco_lay > 1) {
            $d = ' - ';
        }
        
        if (smm_catbelong($smm_sc[topcat])) {
            $o .= '<a id="smm-top-title-highlight" class="c" href="' . $smm_link . '">' . $d . $post->post_title . '</a>';
        } else {
            $o .= '<a id="smm-top-title" class="c" href="' . $smm_link . '">' . $d . $post->post_title . '</a>';
        }
    }
    
    
    if ($smm_layout > 0) {
        //add this post to the displayed list ---
        $smm_displayed[] = $post->ID;
        
        
        //no output ---
        if ($smm_sc['nooutput'] == 1) {
            return '';
        }
        
        $smm_postauthor = $post->post_author;
        
        //get content for all aeras ---
        $ar        = smm_areas($smm_layout, array());
        $areatop   = $ar[1];
        $arealeft  = $ar[2];
        $arearight = $ar[3];
        
        
        
        
        
        
        //Set widths $smm_totalwidth $wl $wr  -----------------------------------------------------------------------
        
        //Set $w which is the image width/areawidth. 
        global $smm_imgw;
        $w = $smm_imgw;
        
        //if no width is set by image then try get one from imgw option, used when there is no image
        if (!$w > 0) {
            $w = smm_val('imgw', $smm_layout);
        }
        
        
        //wt is normally 100%
        $smm_totalwidth = '100%';
        
        //override width
        $smm_totalwidthb = smm_val('wt', $smm_layout);
        if ($smm_totalwidthb <> '') {
            $smm_totalwidth = $smm_totalwidthb . 'px';
        }
        
        
        //set wl, wr  widths of left and right areas
        if ($w > 0) {
            $areaimg = smm_val('area0', $smm_layout);
            //set $wl, if img is to the left
            if ($areaimg == 2) {
                $wl = $w . 'px';
            }
            //set $wr, if img is to the right
            if ($areaimg == 3) {
                $wr = $w . 'px';
            }
            //no img set lw after imgw
            if ($wl . $wr == '') {
                $wl = $w . 'px';
            }
            
        }
        
        //if only one area is used set the totalwidth to image width --------------------------
        //if ($arearight = ''){
        //$smm_totalwidth = $wl;
        //}
        
        //echo ' wl:'.$wl.' wr:'.$wr.'  ';
        //$wr = '50 px';
        //$arearight = ' ';
        
        //set background -------------------------------------------------------------------
        $areabg = smm_val('areabg', $smm_layout);
        
        
        $bge     = smm_val('cssbg', $smm_layout);
        $ibg     = 'smm-background' . $bge;
        $bgcolor = smm_val('bgcolor', $smm_layout);
        if ($bgcolor <> "") {
            $bgstyle = 'background:' . $bgcolor . ';';
        }
        if ($areabg == 1) {
            $areaimg = smm_val('area0', $smm_layout);
            //top bg
            if ($areaimg == 1 and $areatop <> "") {
                $areatop = smm_tablehb(array(
                    't1' => $areatop,
                    'cl1' => $ibg,
                    'w1' => $wt,
                    's1' => $bgstyle
                ));
            }
            //left bg
            if ($areaimg == 2 and $arealeft <> "") {
                $arealeft = smm_tablehb(array(
                    't1' => $arealeft,
                    'cl1' => $ibg,
                    'w1' => $wl,
                    's1' => $bgstyle,
                    'tw' => $wl
                ));
            }
            //right bg
            if ($areaimg == 3 and $arearight <> "") {
                $arearight = smm_tablehb(array(
                    't1' => $arearight,
                    'cl1' => $ibg,
                    'w1' => $wr,
                    's1' => $bgstyle,
                    'tw' => $wr
                ));
            }
        }
        
        
        
        //embed prepare------------------------------------------------------
        $em = smm_val('embed', $smm_layout);
        
        //default embed status is off
        $e = 3;
        //img is to the left, embed left
        if ($areaimg == 2 and $em == 1) {
            $e = 1;
        }
        //img is to the right, embed right
        if ($areaimg == 3 and $em == 1) {
            $e = 2;
        }
        //no img but embed text around text
        if ($areaimg == '0' and $em == 1) {
            $e = 1;
        }
        
        //if areatop has content then add space underneath it
        if ($areatop <> "") {
            $areatop .= '<div class="smm-elementspace"></div>';
        }
        
        //embed and combine all areas --------------------------------------------------------
        //left embed
        if ($e == 1) {
            $o = $areatop . smm_tablehb(array(
                't1' => $arealeft,
                'w1' => $wl,
                'tw' => $wl,
                'clt' => 'smm-embed-left'
            )) . $arearight;
        }
        //right embed
        if ($e == 2) {
            $o = $areatop . smm_tablehb(array(
                't1' => $arearight,
                'w1' => $wr,
                'tw' => $wr,
                'clt' => 'smm-embed-right'
            )) . $arealeft;
        }
        //no embed
        if ($e == 3) {
            if ($arealeft <> '' and $arearight <> '') {
                $space = ' ';
            }
            
            $o = $areatop . smm_tablehb(array(
                't1' => $arealeft,
                't2' => $space,
                't3' => $arearight,
                'cl1' => 'smm-clear',
                'cl2' => 'smm-hpostspace',
                'cl3' => 'smm-clear',
                'w1' => $wl,
                'w3' => $wr,
                'tw' => $smm_totalwidth
            ));
        }
        
        
        //put bg on all areas -----------------------------------------------------
        if ($areabg == 2) {
            $o = smm_tablehb(array(
                't1' => $o,
                'cl1' => $ibg,
                's1' => $bgstyle
            ));
        }
        
        //postspace - end with a frame around it all & space at bottom ---------------------------------------
        if (smm_val('postspace', $smm_layout) == 1) {
            $o = smm_tablehb(array(
                't1' => $o,
                'w1' => $smm_totalwidth,
                'tw' => $smm_totalwidth,
                'clt' => 'smm-vpostspace'
            ));
        }
        
        
        
    }
    
    
    wp_reset_postdata();
    return $o;
}
function smm_areas($smm_layout, $ar) {
    //ordering of elements --------------------------------------------------
    $ord = array();
    
    global $smm_sc, $smm_act;
    
    $el = 1;
    while ($el <= $smm_act['elements']) {
        //if ($smm_act['area' . $el] >= 1) {
        $a = smm_val('area' . $el, $smm_layout);
        if ($a > 0) {
            $p = smm_val('pos' . $el, $smm_layout);
            if (function_exists('smm_element' . $el)) {
                $ord[$a * 1000 + $p] .= call_user_func('smm_element' . $el);
            }
        }
        //}
        $el++;
    }
    
    
    
    //get image
    $areaimg .= $ord[10001] . $ord[10002] . $ord[10003] . $ord[10004] . $ord[10005] . $ord[10006] . $ord[10007] . $ord[10008] . $ord[10009] . $ord[10010];
    $areaimgb .= $ord[11001] . $ord[11002] . $ord[11003] . $ord[11004] . $ord[11005] . $ord[11006] . $ord[11007] . $ord[11008] . $ord[11009] . $ord[11010];
    
    
    $a = smm_val('area0', $smm_layout);
    if ($a > 0) {
        $p = smm_val('pos0', $smm_layout);
        $ord[$a * 1000 + $p] .= smm_element0($areaimg, $areaimgb);
    }
    
    
    //----------------------------------------------
    $ar[1] .= $ord[1001] . $ord[1002] . $ord[1003] . $ord[1004] . $ord[1005] . $ord[1006] . $ord[1007] . $ord[1008] . $ord[1009] . $ord[1010];
    $ar[2] .= $ord[2001] . $ord[2002] . $ord[2003] . $ord[2004] . $ord[2005] . $ord[2006] . $ord[2007] . $ord[2008] . $ord[2009] . $ord[2010];
    $ar[3] .= $ord[3001] . $ord[3002] . $ord[3003] . $ord[3004] . $ord[3005] . $ord[3006] . $ord[3007] . $ord[3008] . $ord[3009] . $ord[3010];
    return $ar;
    
}






//get layout info ---------------------------------------------------
function smm_div($t, $id, $el = -1) {
    if (trim($t) == '') {
        return '';
    }
    if ($id == '') {
        return $t;
    }
    // if ($cl <> ''){
    //    $cl = ' '.$cl;
    // }
    
    global $smm_postco, $smm_layout, $smm_link, $smm_sc, $smm_act;
    
    
    
    
    
    
    
    
    $co = $smm_postco;
    // $la = 'smm-layout'.$smm_layout;
    //   $ids = 'smm-'.$co.' smm-layout'.$smm_layout.' smm-jq';
    $cl = $id . ' ' . $id . '-' . $co . ' smm-' . $co . ' smm-layout' . $smm_layout . ' smm-jq';
    
    if ($el >= 0) {
        if ($el == 1) {
            $to = 't' . $smm_layout;
        }
        if ($el == 2) {
            $to = 'e' . $smm_layout;
        }
        if ($el >= 3) {
            $to = $el;
        }
        // $to = 't1';
    }
    
    
    if ($to <> "") {
        $v = smm_val('colact', 2000);
        if ($v == 1) {
            $v = smm_val('bg' . $to, 2000);
            if ($v <> "") {
                $s1 .= 'background:' . $v . ';';
            }
            $v = smm_val('color' . $to, 2000);
            if ($v <> "") {
                $s1 .= 'color:' . $v . ';';
            }
            $v = smm_val('size' . $to, 2000);
            if ($v <> "") {
                $s1 .= 'font-size:' . $v . 'px !important;';
            }
            $v = smm_val('padding' . $to, 2000);
            if ($v <> "") {
                $s1 .= 'padding:' . $v . ' !important;';
            }
            $v = smm_val('bold' . $to, 2000);
            if ($v <> "") {
                $s1 .= 'font-weight:' . $v . ' !important;';
            }
            $style = 'style="' . $s1 . 'max-width:100%;"';
            
        }
    }
    
    
    
    
    if ($smm_link <> '') {
        $t = '<a  id="' . $id . '"  class="' . $cl . '" ' . $style . '  href="' . $smm_link . '">' . $t . '</a>';
        $t .= smm_elspace($el);
        return $t;
    }
    
    $t = '<p  id="' . $id . '"  class="' . $cl . '"  ' . $style . '  >' . $t . '</p>';
    $t .= smm_elspace($el);
    return $t;
}



function smm_placeinit() {
    //get the orderings of elements
    global $smm_place, $smm_layout;
    $smm_place = array();
    $el        = 0;
    while ($el <= 12) {
        $a = smm_val('area' . $el, $smm_layout);
        $p = smm_val('pos' . $el, $smm_layout);
        
        if ($p > $smm_place['p' . $a]) {
            $smm_place['bottom' . $a] = $el;
            $smm_place['p' . $a]      = $p;
        }
        //echo 'co:'.$co.' a:'.$a.' p:'.$p.' bottom:'.$smm_place['bottom1'].' <br>';
        $el++;
    }
    
}

//ads space after the element
function smm_elspace($el) {
    global $smm_place, $smm_layout;
    $a = smm_val('area' . $el, $smm_layout);
    
    if ($smm_place['bottom' . $a] <> $el) {
        $s = smm_val('elspace', 2000);
        if ($s > 0) {
            $style = 'style="margin: 0px 0px ' . $s . 'px 0px !important;"';
        }
        
        return '<div class="smm-elementspace" ' . $style . '></div>';
    }
    //return 'no space'.$smm_place['bottom'.$a];
    
    
    
}

















//images ------------------------------------------------------------------
function smm_img($w = 220, $h = '', $size = 'thumbnail', $t = '', $t2 = '') {
    global $post, $smm_sc, $smm_layout, $smm_link, $smm_act;
    
    
    
    $imgmode = smm_val('imgmode', $smm_layout);
    //$imgmode = 0;
    
    
    
    $ar   = smm_getimages(array(
        'size' => $size,
        'imgmode' => $imgmode,
        'maximg' => 2
    ));
    $img  = $ar[url1];
    $worg = $ar[w1];
    $horg = $ar[h1];
    $imgb = $ar[url2];
    $imgc = $ar[url3];
    
    //set no image found  
    if ($img == '') {
        global $smm_noimg;
        $smm_noimg = $smm_noimg + 1;
        return '';
    }
    
    
    
    if ($worg > 1 and $horg > 1) {
        $arb = smm_wh(array(
            'worg' => $worg,
            'horg' => $horg,
            'w' => $w,
            'h' => $h
        ));
        $w   = $arb[w];
        $h   = $arb[h];
        
        
        
        global $smm_imgw;
        $smm_imgw = $w;
        
        //global $smm_ico;
        //$smm_ico++;
        
        
        $w2 = 'width:' . $w . 'px !important;';
        $h2 = 'height:' . $h . 'px !important;'; //force height
        
        
        
        
        //oveimage 
        //if ($t <> ''){
        // $oi = '<div id="smm-overimage" class="c">'.$t.'</div>';
        
        global $smm_postco, $smm_layout;
        $co  = $smm_postco;
        $ids = 'smm-' . $co . ' smm-layout' . $smm_layout . ' smm-jq';
        //$la = 'smm-layout'.$smm_layout;
        
        //img 1
        $i = '<img id="smm-img" class="c smm-img smm-img' . $co . ' ' . $ids . '" src="' . $img . '"  style="' . $w2 . $h2 . '">';
        if ($smm_link <> "") {
            $i = '<a id ="smm-clear" class="c ' . $ids . '" href="' . $smm_link . '" >' . $i . '</a>';
        }
        
        //img 2
        if ($imgb <> '') {
            $i2 = '<img id="smm-imgb" class="c smm-imgb smm-imgb' . $co . ' ' . $ids . '" src="' . $imgb . '"    style="' . $w2 . $h2 . '">';
            if ($smm_link <> "") {
                $i2 = '<a id ="smm-imgb" class="c ' . $ids . '" href="' . $smm_link . '" >' . $i2 . '</a>';
            }
        }
        
        //icon
        global $smm_pluginurl;
        //$icon = '<img id="smm-icon" class="c smm-icon smm-imgicon'.$co.' '.$ids.'" src="'.$smm_pluginurl.'icongo2.png"  >';
        //$icon = '<a id ="smm-icon" class="c '.$ids.'" href="'.$smm_link.'" >'.$icon.'</a>';      
        
        
        //simple overimage
        if ($t2 <> '') {
            $oi .= '<div id="smm-overimage" class="c smm-overimage">' . $t2 . '</div>';
        }
        
        //info popup
        if ($t <> '') {
            $oi .= '<div id="smm-imgtext" class="c smm-imgtext smm-imgtext' . $co . ' ' . $ids . '">' . $t . '</div>';
            $oi .= '<div id="smm-imgbg" class="c smm-imgbg smm-imgbg' . $co . ' ' . $ids . '"></div>';
        }
        
        //all
        $i = '<div id="smm-clear" class="c">' . $icon . $oi . $i . $i2 . $i3 . '</div>';
        global $smm_imgw;
        //$i = smm_tableh($i,'','',$smm_imgw.'px','','','smm-clear','','','smm-clear',$w2.'px');
        $i = smm_tablehb(array(
            't1' => $i,
            'w1' => $smm_imgw,
            'tw' => $smm_imgw
        ));
        //}
        
        
        
        return $i;
        
        
    }
    return '';
}



//get images     in: imgmode, size  out: url1, w1, h1, url2, w2, h2... etc
function smm_getimages($ar) {
    global $post;
    
    //set img mode
    $imgmode = $ar[imgmode];
    if ($imgmode == '') {
        $imgmode = 0;
    }
    
    $maximg      = $ar[maximg];
    $ar['found'] = 0;
    //default thumbnail
    $size        = $ar[size];
    if ($size <> 'thumbnail' and $size <> 'medium' and $size <> 'large') {
        $size = 'thumbnail';
    }
    
    $imgmode = 2; //!!!!!!!!!!!!!! disabling featured images
    
    //get featured image
    if ($imgmode == 0 or $imgmode == 1) {
        //   echo $imgmode.'--- ';
        if (function_exists('has_post_thumbnail')) {
            if (has_post_thumbnail()) {
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $size);
                
                $ar[url1]    = $image_url[0];
                $ar[w1]      = $image_url[1];
                $ar[h1]      = $image_url[2];
                $ar['found'] = 1;
                
            }
        }
    }
    
    
    //if not featured image is found try again with all attached images, this includes the featured image
    if ($image_url[0] == '') {
        //if (smm_val('imginsert',0) == 1){
        if ($imgmode == 0 or $imgmode == 2) {
            $args = array(
                'numberposts' => $maximg,
                'order' => 'ASC',
                'post_mime_type' => 'image',
                'post_parent' => $post->ID,
                'post_status' => null,
                'post_type' => 'attachment'
            );
            
            
            $smm_imgc    = 0;
            $attachments = get_children($args);
            foreach ($attachments as $attachment) {
                $smm_imgc++;
                
                $image_url = wp_get_attachment_image_src($attachment->ID, $size);
                
                $ar['url' . $smm_imgc] = $image_url[0];
                $ar['w' . $smm_imgc]   = $image_url[1];
                $ar['h' . $smm_imgc]   = $image_url[2];
                $ar['found']++;
                //global $smm_attid;
                //$smm_attid = $attachment->ID;
                
            }
        }
    }
    
    return $ar;
    
}

//set the width & height of an image or element
function smm_wh($ar) {
    $worg = $ar[worg];
    $horg = $ar[horg];
    $wmax = $ar[wmax];
    $hmax = $ar[hmax];
    $w    = $ar[w];
    $h    = $ar[h];
    
    if ($worg > 1 and $horg > 1) {
        //set ratio worg/horg
        $r = $worg / $horg; //number > 1 normally
        
        //if maxw is set then make sure w isnt over it
        if ($wmax > 0 and $w > $wmax) {
            $w = $wmax;
        }
        
        //if maxh is set then make sure h isnt over it
        if ($hmax > 0 and $w > $hmax) {
            $w = $hmax;
        }
        
        //if w & h is not set then set them org
        if (!$w > 0 and !$h > 0) {
            $w = $worg;
            $h = $horg;
        }
        
        //if w is not set but h is then set w to h*ratio
        if (!$w > 0 and $h > 0) {
            $w = $h * $r;
        }
        
        //if h is not set but w is then set w to h*ratio
        if ($w > 0 and !$h > 0) {
            $h = $w / $r;
        }
        
        //clean up fractions
        $w = round($w);
        $h = round($h);
        
        $ar[w] = $w;
        $ar[h] = $h;
        
        //return the width & height
        return $ar;
        
    } else {
        smm_message('image error 10');
        $ar[error] = 1;
        return $ar;
        
    }
    
}



//elements -------------------------------------------------------



//image
function smm_element0($areaimg, $areaimgb) {
    //get image
    global $gvext, $smm_layout;
    
    
    //img has to be last --------------------------------------------------------
    $w    = smm_val('imgw', $smm_layout);
    $h    = smm_val('imgh', $smm_layout);
    $size = smm_val('size', $smm_layout);
    
    if ($size <> 'None') {
        //$t = strip_tags($areaimg);
        
        $i = smm_img($w, $h, $size, $areaimgb, $areaimg);
        
        //get videothumb (overwrites the image)
        if ($gvext == 1 and !smm_val('video', $smm_layout) > 0 and $i == '') {
            $y = smm_video_thumb($w, $h, 0);
            if ($y <> '') {
                $i = $y;
            }
        }
        $p = smm_val('paddingimg', 2000);
        
        echo $p;
        $i .= '<div class="smm-clear" style="padding: ' . $p . ' !important;"></div>';
        $i .= smm_elspace(0);
        return $i;
        
        
    }
}

//title
function smm_element1() {
    global $post, $smm_layout;
    $t = $post->post_title;
    return smm_div($t, 'smm-title-layout' . $smm_layout, 1);
}

//excerpt
function smm_element2() {
    global $post, $smm_layout, $smm_sc;
    
    $l      = smm_val('excerptlength', $smm_layout);
    $filter = smm_val('filter', $smm_layout);
    
    
    
    //if (strlen($post->post_excerpt) > 1){
    //  $t = $post->post_excerpt;
    //}else{
    //$t = $post->post_content;
    //}
    
    //main content field, strip all tags
    if ($filter == 1 or $filter == '') {
        $t = strip_shortcodes(strip_tags($post->post_content));
    }
    //excerpt field, strip all tags
    if ($filter == 2) {
        $t = strip_shortcodes(strip_tags($post->post_excerpt));
    }
    //meta data, full html
    if ($filter == 3) {
        $custom = get_post_custom($post->ID);
        $t      = $custom['text'][0];
    }
    //excerpt field, full html
    if ($filter == 4) {
        $t = $post->post_excerpt;
    }
    //show with full html
    if ($filter == 5) {
        $t = apply_filters('the_content', $post->post_content);
    }
    
    
    //shorten to period
    if ($filter < 3) {
        $cont = '...';
        if (smm_val('period', 0) == 1) {
            $p = strrpos(substr($t, 0, $l), '.');
            if ($p > 0 and $p < $l and $l > 0) {
                $l    = $p + 1;
                $cont = '';
            }
        }
        
        //shorten
        if (strlen($t) > $l and $l > 0) {
            $t = substr($t, 0, $l) . $cont;
        }
        
    }
    
    return smm_div($t, 'smm-excerpt-layout' . $smm_layout, 2);
}

//cats
function smm_element3() {
    global $post;
    
    //max cat ---
    global $smm_sc;
    $max = $smm_sc['maxcat'];
    if (!$max > 0) {
        $max = 1000;
    }
    
    $o  = "";
    $co = 0;
    
    foreach ((get_the_category()) as $category) {
        //if (substr($category->slug, 0, 4) <> 'hide' and $category->cat_ID <> 1) {
        $co++;
        
        if ($co <= $max && $category->cat_name <> "Uncategorized" && substr($category->slug, 0, 4) <> 'hide') {
            if ($co > 1) {
                $o .= ' &bull; ';
            }
            $o .= $category->cat_name;
        }
        //}
    }
    if ($o == '') {
        return '';
    }
    return smm_div($o, 'smm-categories', 3);
}

//tags
function smm_element4() {
    global $post;
    $o        = "";
    $co       = 0;
    $posttags = get_the_tags();
    if ($posttags) {
        foreach ($posttags as $tag) {
            $co++;
            
            if ($co > 1) {
                $o .= ' &bull; ';
            }
            $o .= $tag->name;
        }
    }
    if ($o == '') {
        return '';
    }
    return smm_div($o, 'smm-tags', 4);
}

//postinfo
function smm_element5() {
    $t = smm_val('postinfocustom', 0);
    $t = smm_inforeplace($t);
    return smm_div($t, 'smm-postinfo', 5);
}

//postinfo b
function smm_element6() {
    $t = smm_val('postinfobcustom', 0);
    $t = smm_inforeplace($t);
    return smm_div($t, 'smm-postinfob', 6);
}

//bio
function smm_element7() {
    global $post;
    
    
    //cat hide profile ---
    global $smm_sc;
    $cathp = $smm_sc['cathp'];
    if ($cathp > 0) {
        if (smm_catbelong($cathp)) {
            return '';
        }
    }
    
    $author = get_the_author();
    $postid = $post->id;
    $a      = get_the_author_description();
    if ($a <> "") {
        //$av = get_avatar($post->post_author);
        //$av = get_the_author_meta( 'user_custom_avatar', $post->post_author, 32 );
        //$av = '<img src="'.$av.'" >';
        
        
        return smm_div($a, 'smm-author-bio', 7);
        
        //if(userphoto_exists($post->post_author)){
        //	    $id = 'smm-clear';
        // $bio = slctableh($av,' ',$bio ,'','5px','',$id,$id,$id,'smm-clear');
        //}
        
    }
    return '';
}

//gallery
function smm_element8() {
    global $smm_layout;
    
    $galsize = smm_val('galsize', $smm_layout);
    $galnr   = smm_val('galnr', $smm_layout);
    $ar      = smm_getimages(array(
        'size' => $galsize,
        'imgmode' => 2,
        'maximg' => $galnr
    ));
    
    $found = $ar['found'];
    
    
    
    if ($found > 0) {
        $co = 1;
        while ($co <= $found) {
            $galw = smm_val('galw', $smm_layout);
            $galh = smm_val('galh', $smm_layout);
            $url  = $ar['url' . $co];
            $worg = $ar['w' . $co];
            $horg = $ar['h' . $co];
            
            $arb = smm_wh(array(
                'worg' => $worg,
                'horg' => $horg,
                'w' => $galw,
                'h' => $galh
            ));
            $w   = $arb[w];
            $h   = $arb[h];
            
            
            $gal .= '<img class="smm-galleria" src="' . $url . '" width="' . $w . 'px" height="' . $h . 'px">';
            $co++;
        }
        return smm_div($gal, 'smm-clear', 8);
        
    }
    return '';
}

//vid
function smm_element9() {
    //embedvid
    global $post, $smm_ext;
    if ($smm_ext == 1) {
        $custom = get_post_custom($post->ID);
        $link   = $custom["link"][0];
        if (strlen($link) > 6 and strlen($link) < 20) {
            return '<iframe width="750" height="400" src="http://www.youtube.com/embed/' . $link . '" frameborder="0" allowfullscreen></iframe>';
        }
    }
}


function smm_comments() {
    global $post;
    $com   = $post->comment_count;
    $comst = $post->comment_status;
    
    if ($comst <> 'closed') {
        if ($com == 0) {
            $c = 'no comments';
        }
        if ($com == 1) {
            $c = '1 comment';
        }
        if ($com > 1) {
            $c = $com . ' comments';
        }
    } else {
        $c = 'comments closed';
    }
    
    
    return $c;
}
function smm_inforeplace($t) {
    global $post;
    
    // replace
    $t = str_replace('%name', get_the_author_meta('display_name', $post->post_author), $t);
    $t = str_replace('%date', get_the_time($dateformat), $t);
    $t = str_replace('%gmt', $post->post_date_gmt, $t);
    $t = str_replace('%comments', smm_comments(), $t);
    $t = str_replace('%type', $post->post_type, $t);
    $t = str_replace('%length', strlen($post->post_content), $t);
    $t = str_replace('%status', $post->post_status, $t);
    $t = str_replace('%id', $post->ID, $t);
    $t = str_replace('%title', $post->post_title, $t);
    $t = str_replace('%excerpt', $post->post_excerpt, $t);
    $t = str_replace('%content', $post->post_content, $t);
    
    //delete end/beginning comma
    $t = '==' . $t . '==';
    $t = str_replace(',==', '', $t);
    $t = str_replace('==,', '', $t);
    $t = str_replace('==', '', $t);
    
    return $t;
}





//check if category exist in the post
function smm_catbelong($cat) {
    if ($cat > 0) {
        global $post;
        foreach ((get_the_category()) as $category) {
            if ($category->cat_ID == $cat) {
                return true;
            }
        }
    }
    return false;
}




//admin graphics
function smm_box($a, $col = 'blue', $class = '') {
    $w = smm_val('adminw', 0) . 'px';
    if ($col == 'red') {
        $c  = "#F2E9ED";
        $c2 = 'red';
    }
    if ($col == 'green') {
        $c  = "#C6F5CF";
        $c2 = 'black';
    }
    if ($col == 'blue') {
        $c  = "#F0F3FC";
        $c2 = 'black';
    }
    if ($class <> "") {
        $class = 'class="' . $class . '"';
    }
    return '<p ' . $class . ' style=" background: ' . $c . '; width: ' . $w . '; padding: 6px; margin:4px; border:1px; color:' . $c2 . ';">' . $a . ' </p>';
}
function smm_text($t, $s = "16", $c = "black", $m = 0, $inl = 0) {
    if ($inl == 1) {
        $i = "display:inline;";
    }
    return '<p style="color:' . $c . ';font-size:' . $s . 'px; text-align:left; padding: 0px; margin: 0px; 0px ' . $m . 'px 0px; ' . $i . '">' . $t . '</p>';
}
function smm_message($t, $c = 'red', $before = 0) {
    global $smm_message;
    if ($before == 1) {
        $smm_message = smm_box($t, $c) . $smm_message;
    } else {
        $smm_message .= smm_box($t, $c);
    }
}
function smm_getmessage() {
    global $smm_message;
    $smm_message = '';
    return $smm_message;
}


// shortcode -------------------------------------------------------------------------------------------
function smm_shortcode($atts) {
    global $smm_sc;
    
    $smm_sc = array();
    $smm_sc = $atts;
    
    $show = $atts[show];
    
    //show shortcode without activating it
    if ($atts[view] <> '') {
        $t = $atts[view];
        $t = str_replace("*", '"', $t);
        $a = '<pre>[layout ' . $t . ']</pre>';
        return $a;
    }
    
    if ($show <> '') {
        return smm_list($smm_sc[show]);
    }
    
    return ' Not valid Shortcode, please see manual for examples ' . $atts[show];
}






//TABLES ------------------------------------------------
function smm_tablev($t1 = "", $t2 = "", $t3 = "", $id1 = '', $id2 = '', $id3 = '', $idt = 'smm-table') {
    if ($t1 <> "") {
        $td1 = '<tr><td id="' . $id1 . '"  class="c">' . $t1 . '</td></tr>';
    }
    if ($t2 <> "") {
        $td2 = '<tr><td id="' . $id2 . '"  class="c">' . $t2 . '</td></tr>';
    }
    if ($t3 <> "") {
        $td3 = '<tr><td id="' . $id3 . '"  class="c">' . $t3 . '</td></tr>';
    }
    return '<table width="100%" id="' . $idt . '"  class="c"  cellspacing="0" cellpadding="0" border="0">' . $td1 . $td2 . $td3 . '</table>';
}
function smm_tablehb($ar) {
    global $smm_postco, $smm_layout;
    //$i = '-'.$smm_postco;
    //id and layout number
    $l = 'smm-' . $smm_postco . ' smm-layout' . $smm_layout;
    
    $co = 1;
    // while ($co <= $columns){
    while ($t <> '' or $co == 1) {
        $t = $ar['t' . $co];
        if ($t <> "") {
            $style = '';
            
            //set td width
            $w = $ar['w' . $co];
            if ($w <> '') {
                $style .= 'width:' . $w . ' !important;';
            }
            
            //add style
            $style .= $ar['s' . $co];
            if ($style <> '') {
                $style = ' style="' . $style . '"';
            }
            
            
            //add class
            $cl = $ar['cl' . $co];
            if ($cl == "") {
                $cl = "smm-clear";
            }
            $class = ' class="' . $cl . ' ' . $cl . '-' . $smm_postco . ' ' . $l . '" ';
            
            
            
            $td .= '<td ' . $class . $style . '  >' . trim($t) . '</td>';
            
        }
        
        
        
        $co++;
    }
    
    
    
    
    $tw = $ar[tw];
    if ($tw == "") {
        $tw = "100%";
    }
    
    $clt = $ar[clt];
    if ($clt == "") {
        $clt = 'smm-clear';
    }
    
    $o = '<table style="width:' . $tw . ' !important;"  class="' . $clt . ' ' . $l . '" cellspacing="0" cellpadding="0" border="0"><tr class="smm-clear"  >' . $td . '</tr></table>';
    
    return $o;
}
function smm_tablerows($smm_column_data, $columns) {
    $a = 1;
    $b = 0;
    while ($a < 10) {
        $b++;
        $ar['t' . $b] = $smm_column_data[$a];
        
        if ($b <> $columns) {
            $b++;
            $ar['t' . $b]  = ' ';
            $ar['cl' . $b] = 'smm-hpostspace';
        }
        
        $a++;
    }
    
    return smm_tablehb($ar);
}



function smm_widget1() {
    smm_showwidget(1);
}
function smm_widget2() {
    smm_showwidget(2);
}
function smm_widget3() {
    smm_showwidget(3);
}
function smm_widget4() {
    smm_showwidget(4);
}
function smm_widget5() {
    smm_showwidget(5);
}
function smm_widget6() {
    smm_showwidget(6);
}
function smm_widget7() {
    smm_showwidget(7);
}
function smm_widget8() {
    smm_showwidget(8);
}
function smm_widget9() {
    smm_showwidget(9);
}
function smm_widget10() {
    smm_showwidget(10);
}

function smm_widget11() {
    smm_showwidget(11);
}
function smm_widget12() {
    smm_showwidget(12);
}
function smm_widget13() {
    smm_showwidget(13);
}
function smm_widget14() {
    smm_showwidget(14);
}
function smm_widget15() {
    smm_showwidget(15);
}
function smm_widget16() {
    smm_showwidget(16);
}
function smm_widget17() {
    smm_showwidget(17);
}
function smm_widget18() {
    smm_showwidget(18);
}
function smm_widget19() {
    smm_showwidget(19);
}
function smm_widget20() {
    smm_showwidget(20);
}


function smm_showwidget($l) {
    $t = smm_val('maintitle', $l);
    
    echo '<div class="widget smm-widget' . $l . '">';
    echo '<h3 class="widget-title">' . $t . '</h2>';
    echo smm_list($l);
    echo '</div>';
    //echo smm_box('', 'blue', 'smm-info');
}

function smm_widgetinit() {
    global $smm_act;
    $l = 1;
    while ($l <= $smm_act[widgets]) {
        if (smm_val('widget', $l) > 0 and $smm_act[widgets] >= $l) {
            // $t = smm_val('title',$l);
            
            
            register_sidebar_widget(__($smm_act[name] . ' - Widget ' . $l), 'smm_widget' . $l);
        }
        $l++;
    }
}
add_action("plugins_loaded", "smm_widgetinit");


?>