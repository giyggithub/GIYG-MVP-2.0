<?php
/**
 * This is the theme sidebar file contains all survey form titles and descriptions and able to choose the style and color.
 *
 * @package WooCommerce Resumes.
 */

?>
<div class="fullwidth-sidebar">
    <div class="form_dash_sidebar dashboard-common-area">
        <ul class="design_change">
            <div class="menu-title">Tools<div class="tool-tip-text">Have fun personalizing your GIYGgraph. To download, print or share, please upgrade your account</div></div>
            <li class="drop_down_hover right-arrow toggle-bar template-styles">
                <a href="javascript:;" class="tooltip-hover"><div class="tool-tip-text">Styles</div><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-13.png"><!-- Styles --></a>
                <ul class="theme_list mCustomScrollbar template-styles-sidebar"><!-- mCustomScrollbar -->
                    <li>
                        <a href="javascript:;" id="template-styles-sidebar-close" class="toggle-bar-close">X</a>
                    </li>
                    <?php echo $theme_navigation;  ?>
                </ul>
            </li>
            <li class="drop_down_hover right-arrow color-section toggle-bar color-styles"><a href="javascript:;" class="tooltip-hover"><div class="tool-tip-text">Colors</div><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-14.png"><!-- Colors --></a>
                
                <ul class="theme_based_color sub-menu-list color-styles-sidebar">
                    <li>
                        <a href="javascript:;" id="color-styles-sidebar-close" class="toggle-bar-close">X</a>
                    </li>
                    <?php if ( 'traditional' === $wr_theme ) { ?>
                    <li class="free-edition-wrap theme_name free-color-section">
                        <span class="theme_name_span">Free Color<i></i></span>
                        <ul class="free-color-theme theme_based_color">
                            <li class="black <?php if($wr_color == 'black'){?>active<?php }?>"><a href="<?php echo get_site_url(); ?>/build-your-infographic/preview-page/?wr-resume-id=<?php echo $resume_id;?>&wr-theme=traditional&wr-color=black" title="Black">
                                <span class="color-one"></span><span class="color-two"></span><span class="color-three"></span></a></li>
                        </ul>
                    </li>
                    <?php } ?>
                    <li class="theme_name">
                        <span class="theme_name_span"><?php echo $wr_theme;?><i></i></span>
                        <a href="javascript:;"><?php echo $color_navigation;  ?></a>
                    </li>
                </ul>
            </li>
            <li class="drop_down_hover right-arrow toggle-bar font-styles"><a href="javascript:;" class="tooltip-hover"><div class="tool-tip-text">Fonts</div><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-15.png"><!-- Fonts --></a>
                <ul class="fonts_list sub-menu-list font-styles-sidebar">                    
                    <li>
                        <a href="#" id="font-styles-sidebar-close" class="toggle-bar-close">X</a>
                    </li>
                    <?php echo $font_navigation;  ?>
                </ul>
            </li>
            <li class="drop_down_hover right-arrow"><a href="javascript:;" onclick="jQuery('.edit-text,watermark').spellCheckInDialog({popUpStyle:'fancybox',theme:'clean'})" class="tooltip-hover"><div class="tool-tip-text">Spell Check</div><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-17.png"><!-- Spell Check --></a>
                <?php /*if(!empty($customer_order_val)) { 
                $order_id = $customer_order_val[0]->ID; $order = wc_get_order($order_id);
                $order_val = $order->get_total();
                ?>
                <?php if($customer_order_val[0]->post_status == 'wc-completed' || $customer_order_val[0]->post_status == 'wc-processing' && $order_val != '0' ) { ?>
                <?php if($order_val == '29') {*/?>
                
                <?php /*} } }*/ ?>
            </li>
            <li class="drop_down_hover right-arrow icon-tool-tip"><a href="javascript:;" class="menu-title"><div class="tool-tip-text">To change icons, click the icon on your GIYGgraph.</div><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-16.png"><!-- Icons --></a>                
            </li>
        </ul>
        <ul id="dashboard" class="forms_list sub-menu-list">
            <div class="menu-title">Tips<div class="tool-tip-text">Click icon to see your profile questions and learn valuable recruiter tips to help enhance your GIYGgraph.</div></div>
            <li class="first">
                <a class="tip-sidebar" id="contact-info"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-1.png"><div class="tool-tip-text">Contact Info</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="dream-job"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-2.png"><div class="tool-tip-text">Dream Job</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="ideal-company"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-3.png"><div class="tool-tip-text">Ideal Company</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="accomplishments"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-4.png"><div class="tool-tip-text">Accomplishments</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="skills"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-5.png"><div class="tool-tip-text">Skills</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="activities"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-6.png"><div class="tool-tip-text">Activities</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="personality"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-7.png"><div class="tool-tip-text">Personality</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="values"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-8.png"><div class="tool-tip-text">Values</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="culture"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-9.png"><div class="tool-tip-text">Culture</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="team"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-10.png"><div class="tool-tip-text">Team</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="impact-statement"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-11.png"><div class="tool-tip-text">Impact Statement</div></a>
            </li>
            <li class="bar">
                <a class="tip-sidebar" id="social-handles"><img src="<?php echo GIYG_WR_BASEURL; ?>images/common/menuicon/menu-12.png"><div class="tool-tip-text">Social</div></a>
            </li>
        </ul>
    </div>
</div>