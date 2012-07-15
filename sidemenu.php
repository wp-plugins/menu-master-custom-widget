<?php



function smm_init_options_specific() {
    global $smm_tabs, $smm_act, $smm_init_0, $smm_init_1, $smm_init_2, $smm_init_3, $smm_init_4;
    
    //menu settings --------------------------------------------------------------------
    $smm_tabs = array(
        '1' => 'Menu Widget 1',
        '2' => 'Menu Widget 2',
        '3' => 'Menu Widget 3',
        '4' => 'Menu Widget 4',
        '2000' => 'Colors & Text',
        '0' => 'Main Options'
    );
    
    
    //menu settings --------------------------------------------------------------------
    $smm_init_0 = array_merge($smm_init_0, array(
        'duplicates' => '1',
        'period' => '1',
        'postinfocustom' => 'Read More',
        'postinfobcustom' => 'Read more, %comments',
        'adminw' => '250',
        'donated' => '0',
        'cssurl' => '',
        'zindex' => '10000'
    ));
    
    $smm_init_1 = array_merge($smm_init_1, array(
        'posts' => '999',
        'maintitle' => 'Menu Widget Title 1',
        
        'area0' => '2',
        'area1' => '2',
        'area2' => '11',
        'area3' => '0',
        'area4' => '0',
        'area5' => '0',
        'area6' => '0',
        'area7' => '0',
        'areabg' => '1',
        
        'pos0' => '2',
        'pos1' => '1',
        'pos2' => '3',
        'pos3' => '1',
        'pos4' => '1',
        'pos5' => '1',
        'pos6' => '1',
        'pos7' => '1',
        
        'size' => 'thumbnail',
        'imgw' => '180',
        'imgh' => '80',
        
        'galh' => '100',
        'galnr' => '3',
        'galsize' => 'thumbnail',
        
        'excerptlength' => '0',
        'embed' => '0',
        'columns' => '1',
        'align' => '0',
        'cat1' => '0',
        'cat2' => '0',
        'type' => 'page',
        'status' => 'publish',
        'sort' => '0',
        'filter' => '3',
        'offset' => '0',
        'maxdays' => '0',
        'sticky' => '0',
        'author' => '',
        'paged' => '0',
        'metakey' => 'link1',
        'sort' => '107',
        'widget' => '1',
        'postspace' => '0',
        
        'effact' => '1',
        'icon' => '0',
        'imgeff' => '0',
        'imgdel' => '2',
        'imgfade' => '0.50',
        
        
        'popupcol' => '#ffffff',
        'bgcolorh' => '#BAC2E3',
        
        'popupdirection' => '2',
        'popupspd' => 'normal',
        'popupleft' => '0',
        'popuptop' => '0',
        'popupw' => '0',
        'popuph' => '0',
        'popuppadding' => '5',
        'popupfade' => '0.90',
        'popupround' => '0'
        
    ));
    
    $smm_init_2 = array(
        'maintitle' => 'Menu Widget Title 2',
        'metakey' => 'link2'
        
    );
    $smm_init_3 = array(
        'maintitle' => 'Menu Widget Title 3',
        'metakey' => 'link3'
        
    );
    $smm_init_4 = array(
        'maintitle' => 'Menu Widget Title 4',
        'metakey' => 'link4'
        
    );
    
    
    //activation --------------------------------------------------------------------------
    $smm_act[name]         = "Menu Master Custom Widget";
    $smm_act[filesize]     = 0; //set filesize warning
    $smm_act[jquery]       = 1; //activate jquery/popup
    $smm_act[overimage]    = 1; //activate overimage functionality
    $smm_act[info]         = 'Example Posts<br>To show this menu go to Appearence -> widget and drag the widget to a widget area';
    $smm_act[postspace]    = 0; //add space under each post 
    $smm_act[shortcode]    = "";
    $smm_act[elements]     = 12; //how many elements to use max
    $smm_act[widgets]      = 4; //max widgets
    $smm_act[instructions] = "There are 3 areas (left, right, top) plus over image area and popup area where title and text can show<br>Read full instructions at the wordpress plugin download.
		
		";
}


function smm_menuitems() {
    global $smm_act, $smm_tab;
    
    
    //MAIN OPTIONS
    if ($smm_tab == 0) {
        //css options
        smm_addsection('CSS Options', 'smm_section_text', 'smm_csssectionb');
        smm_addsettings('CSS file url', 'smm_s_csspath');
        
        //main options
        smm_addsection('Main Options', 'smm_section_text', 'smm_mainsection');
        //smm_addsettings('I have donated', 'smm_s_donate');
        smm_addsettings('Example Width', 'smm_s_adminw');
        smm_addsettings('Z-index', 'smm_s_zindex');
        
        
    }
    
    //LAYOUT OPTIONS ----------------------------------------------------------
    if ($smm_tab > 0 and $smm_tab < 1000) {
        //top
        smm_addsection('Main Options', 'smm_top_text', 'smm_topsection');
        //smm_addsettings('How many items to show', 'smm_s_posts');
        smm_addsettings('Menu Widget Title', 'smm_s_maintitle');
        
        //placement options ---
        smm_addsection('Placement Options', 'smm_placement_text', 'smm_areasection');
        smm_addsettings('Title', 'smm_s_area1');
        smm_addsettings('Image', 'smm_s_area0');
        smm_addsettings('Text', 'smm_s_area2');
        smm_addsettings('Background Color', 'smm_s_areabg');
        
        //image options ---
        smm_addsection('Image Options', 'smm_section_text', 'smm_imgsection');
        smm_addsettings('Image Width & height', 'smm_s_imgwh');
        smm_addsettings('Image Size', 'smm_s_imgsize');
        
        //jquery effects
        smm_addsection('Image Effects Options', 'smm_section_text', 'smm_effsection');
        smm_addsettings('Image Effect', 'smm_s_imgeff');
        smm_addsettings('Image Effect Settings', 'smm_s_imgeffset');
        
        //Bgeffects effects
        smm_addsection('Background Color Options', 'smm_section_text', 'smm_bgeffsection');
        smm_addsettings('Bg Color Change when hover over it', 'smm_s_bgcol');
        
        //general options ---
        smm_addsection('General Options', 'smm_section_text', 'smm_gensection');
        smm_addsettings('Columns', 'smm_s_columns');
        smm_addsettings('Postspace', 'smm_s_postspace');
        
        //jquery popup
        smm_addsection('Pop Up Options', 'smm_section_text', 'smm_popupsection');
        smm_addsettings('Direction & Speed', 'smm_s_directionspd');
        smm_addsettings('Position', 'smm_s_position');
        smm_addsettings('Width & Height', 'smm_s_popupwh');
        smm_addsettings('Color & Fade', 'smm_s_colfade');
    }
    
    
    //COLOR & TEXT -------------------------------------------------------
    if ($smm_tab == 2000) {
        //activate
        smm_addsection('Activate CSS override', 'smm_section_text', 'smm_text2section');
        smm_addsettings('Activate', 'smm_s_colact');
        
        //title and excerpt
        smm_addsection('Title & Excerpt', 'smm_section_text', 'smm_textsection');
        smm_addsettings('Widget Title', 'smm_s_textt1');
        smm_addsettings('Widget Text', 'smm_s_texte1');
        smm_addsettings('Widget 2 Title', 'smm_s_textt2');
        smm_addsettings('Widget 2 Text', 'smm_s_texte2');
        smm_addsettings('Widget 3 Title', 'smm_s_textt3');
        smm_addsettings('Widget 3 Text', 'smm_s_texte3');
        smm_addsettings('Widget 4 Title', 'smm_s_textt4');
        smm_addsettings('Widget 4 Text', 'smm_s_texte4');
        
        //general elements
        smm_addsection('General elements', 'smm_section_text', 'smm_textbsection');
        smm_addsettings('Element space', 'smm_s_elspace');
        
        
    }
}
?>