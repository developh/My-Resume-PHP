<?php
/**
 *  PHP version 5
 * Created by PhpStorm.
 * Project : My-Resume-PHP.
 * User: Hamza Alayed
 * Date: 5/8/14
 * Time: 5:45 PM

echo "<pre>";
print_r($_skills);
echo "</pre>";
 */
?>
<div id="main">
    <div class="content_area" id="primary">
    <div role="main" class="site_content" id="content">
    <section class="section profile_section first odd" id="profile">
        <a id="blog_page_link" href="blog/">
            <span class="icon-pencil icon"></span>
            <span class="label">Blog</span>
        </a>
        <div class="section_header profile_section_header opened">
            <h2 class="section_title profile_section_title vis">
                <a href="#">
                    <span class="icon icon-user"></span>
                    <span class="section_name">Profile</span>
                </a>
                <span class="section_icon"></span>
            </h2>

            <div id="profile_header">
                <div vocab="http://schema.org/" typeof="Person">
                    <div id="profile_user">
                        <div id="profile_photo">
                            <img src="<?php echo $_user["_img"];?>"
                                 alt="<?php echo $_user["_name"];?>"
                                 property="image"/>
                        </div>
                        <div id="profile_name_area">
                            <div id="profile_name">
                                <h1 id="profile_title">
                                    <span class="firstname" property="name">
                                        <?php echo $_user["_name"];?>
                                    </span>
                                </h1>
                                <h4 id="profile_position" property="jobTitle">
                                    <?php echo $_user["_title"];?>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div id="profile_data">
                        <div class="profile_row name">
                            <span class="th">Name:</span>
                            <span class="td"><?php echo $_user["_name"];?></span>
                        </div>
                        <div class="profile_row birth">
                            <span class="th">Date of birth:</span>
                            <span class="td"><?php echo $_user["_dob"];?></span>
                        </div>
                        <div class="profile_row address">
                            <span class="th">Address:</span>
                            <span class="td" property="address">
                                <?php echo $_user["_address"];?>
                            </span>
                        </div>
                        <div class="profile_row phone">
                            <span class="th">Phone:</span>
                            <span class="td" property="telephone">
                                <?php echo $_user["_phone"];?>
                            </span>
                        </div>
                        <div class="profile_row email">
                            <span class="th">Email:</span>
                            <span class="td"><?php echo $_user["_email"];?></span>
                        </div>
                        <div class="profile_row website">
                            <span class="th">Website:</span>
                            <span class="td">
                                <a target="_blank"
                                   href="<?php echo $_user["_website"];?>"
                                   property="url">
                                    <?php echo $_user["_website"];?>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_body profile_section_body">
            <div class="proile_body">
                <?php echo $_user["_about"];?>
            </div>
        </div>
    </section>
    <div id="mainpage_accordion_area">

    <!-- RESUME -->
    <section class="section resume_section even" id="resume">
        <div id="resume_buttons">
            <a target="_blank" id="resume_link" href="home/printResume/">
                <span class="label">Print</span>
                <span class="icon-print icon"></span>
            </a>
            <a href="<?php echo base_url()?>assets/uploads/users/<?php echo $_user["_id"];?>/<?php echo $_user["_resume"];?>"
               target="_blank" id="resume_link_download">
                <span class="label">Download</span>
                <span class="icon-download icon"></span>
            </a>
        </div>
        <div class="section_header resume_section_header">
            <h2 class="section_title resume_section_title">
                <a href="#">
                    <span class="icon icon-align-left"></span>
                    <span class="section_name">Resume</span>
                </a>
                <span class="section_icon"></span>
            </h2>
        </div>
        <div class="section_body resume_section_body">
            <div class="sidebar resume_sidebar">
                <aside class="widget widget_skills">
                    <h3 class="widget_title">
                        <?php echo $_skills['_skills']['_lines'][0]['_typeTitle']?>
                    </h3>

                    <div class="widget_inner style_1">
                        <?php
                        $_lines=$_skills['_skills']['_lines'];

                        for ($i=0;$i<count($_lines);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_lines[$i]['_value'];
                            ?>
                            <div class="skills_row <?php echo $_oddEv." ".$_first?>">
                                <span class="caption">
                                    <?php echo $_lines[$i]['_title'];?>
                                </span>
                                <span class="progressbar">
                                    <span
                                        data-process="<?php echo $_value?>%"
                                        class="progress blue">
                                        <span class="value">
                                            <?php echo $_lines[$i]['_value'];?>%
                                        </span>
                                    </span>
                                </span>
                            </div>
                        <?php
                        }
                        ?>

                    </div>
                </aside>
                <aside class="widget widget_skills">
                    <h3 class="widget_title">Language skills</h3>

                    <div class="widget_inner style_3">
                        <?php
                        $_circle=$_skills['_skills']['_circle'];

                        for ($i=0;$i<count($_circle);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_circle[$i]['_value'];
                            $_color=$_circle[$i]['_color'];
                            ?>
                            <div class="skills_row <?php echo $_oddEv." ".$_first?>">
                                <span class="caption">
                                    <?php echo $_circle[$i]['_title'];?>
                                </span>
                                <span class="progressbar">
                                    <span data-process="<?php echo $_value?>%"
                                          class="progress"
                                          style=
                                          "background-color:#<?php echo $_color?>;">
                                          </span>
                                </span>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </aside>
            </div>
            <div class="wrapper resume_wrapper">
                <div class="category resume_category resume_category_1 first even">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title">
                            <span class="category_title_icon" style="background-color:#<?php echo $_skills['_skills']['_EMPLOYMENT'][0]['_color']?>"></span>
                            Employment
                        </h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <?php
                        $_EMPLOYMENT=$_skills['_skills']['_EMPLOYMENT'];

                        for ($i=0;$i<count($_EMPLOYMENT);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_EMPLOYMENT[$i]['_value'];
                            $_color=$_EMPLOYMENT[$i]['_color'];
                            $_end=($_EMPLOYMENT[$i]['_paragraphEnd']=='')?
                                'Present':$_EMPLOYMENT[$i]['_paragraphEnd'];
                            $_start=$_EMPLOYMENT[$i]['_paragraphStart'];
                            ?>
                            <article class="post resume_post resume_post_1 <?php echo $_oddEv." ".$_first?>">
                                <div class="post_header resume_post_header">
                                    <div class="resume_period">
                                        <span class="period_from">
                                            <?php echo $_start;?>
                                        </span>
                                        -
                                        <span class="period_to">
                                            <?php echo $_end;?>
                                        </span>
                                    </div>
                                    <h4 class="post_title">
                                        <span class="post_title_icon"
                                              style=
                                           "background-color:#<?php echo $_color?>;">

                                        </span>
                                        <a href="post-text.html">
                                            <?php echo $_EMPLOYMENT[$i]['_title'];?>
                                        </a>
                                    </h4>
                                    <h5 class="post_subtitle">
                                        <?php echo $_EMPLOYMENT[$i]['_paragraphHead'];?>
                                    </h5>
                                </div>
                                <div class="post_body resume_post_body"
                                     style="min-height: 95px;">
                                    <p>
                                    <div id="profile_photo">
                                        <img src="<?php echo $_EMPLOYMENT[$i]['_paragraphLogo'];?>"
                                             alt="<?php echo $_EMPLOYMENT[$i]['_title'];?>"
                                             property="image"/>
                                    </div>
                                    <?php echo $_EMPLOYMENT[$i]['_paragraph'];?>
                                    </p>
                                </div>
                            </article>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- .category_body -->
                </div>
                <!-- .category -->
                <div class="category resume_category resume_category_2 odd">
                    <div class="category_header resume_category_header">
                        <h3 class="category_title">
                            <span class="category_title_icon"
                                  style="background-color:#<?php echo $_skills['_skills']['_EDUCATION'][0]['_color']?>">

                                  </span>
                            Employment
                        </h3>
                    </div>
                    <div class="category_body resume_category_body">
                        <?php
                        $_EDUCATION=$_skills['_skills']['_EDUCATION'];

                        for ($i=0;$i<count($_EMPLOYMENT);$i++) {
                            $_oddEv=($i%2==0)?'odd':'even';
                            $_first=($i==0)?'first':'';
                            $_value=$_EDUCATION[$i]['_value'];
                            $_color=$_EDUCATION[$i]['_color'];
                            $_end=($_EDUCATION[$i]['_paragraphEnd']=='')?
                                'Present':$_EDUCATION[$i]['_paragraphEnd'];
                            $_start=$_EDUCATION[$i]['_paragraphStart'];
                            ?>
                            <article class="post resume_post resume_post_1 <?php echo $_oddEv." ".$_first?>">
                                <div class="post_header resume_post_header">
                                    <div class="resume_period">
                                        <span class="period_from">
                                            <?php echo $_start;?>
                                        </span>
                                        -
                                        <span class="period_to">
                                            <?php echo $_end;?>
                                        </span>
                                    </div>
                                    <h4 class="post_title">
                                        <span class="post_title_icon"
                                              style=
                                              "background-color:#<?php echo $_color?>;">

                                        </span>
                                        <a href="post-text.html">
                                            <?php echo $_EDUCATION[$i]['_title'];?>
                                        </a>
                                    </h4>
                                    <h5 class="post_subtitle">
                                        <?php echo $_EDUCATION[$i]['_paragraphHead'];?>
                                    </h5>
                                </div>
                                <div class="post_body resume_post_body"
                                     style="min-height: 95px;">
                                    <p>
                                    <div id="profile_photo">
                                        <img src="<?php echo $_EDUCATION[$i]['_paragraphLogo'];?>"
                                             alt="<?php echo $_EDUCATION[$i]['_title'];?>"
                                             property="image"/>
                                    </div>
                                    <?php echo $_EDUCATION[$i]['_paragraph'];?>
                                    </p>
                                </div>
                            </article>
                        <?php
                        }
                        ?>

                    </div>
                    <!-- .category_body -->
                </div>
                <!-- /category -->
            </div>
            <!-- /wrapper -->
        </div>
        <!-- /section_body -->
    </section>
    <!-- /RESUME-->

<!-- PORTFOLIO -->
<section class="section portfolio_section odd" id="portfolio">
    <div class="section_header portfolio_section_header">
        <h2 class="section_title portfolio_section_title">
            <a href="#">
                <span class="icon icon-briefcase"></span>
                <span class="section_name">Portfolio</span>
            </a>
            <span class="section_icon"></span>
        </h2>
    </div>
    <div class="section_body portfolio_section_body">
        <div class="portfolio_wrapper">
            <ul id="portfolio_iso_filters">
                <li>
                    <a class="current" data-filter="*" href="#">All</a></li>
                    <?php
                            $_tags=$_portfolio['_filters'];

                    for ($i=0;$i<count($_tags);$i++) {
                                $_oddEv=($i%2==0)?'odd':'even';
                                $_first=($i==0)?'first':'';
                        ?>
                        <li>
                            <a data-filter=".<?php echo $_tags[$i];?>" href="#">
                                <?php echo $_tags[$i];?>
                            </a>
                        </li>
                    <?php
                    }
                    ?>
            </ul>
            <div class="portfolio_items">
                <?php
                $_portfolios=$_portfolio['_portfolios'];

                for ($i=0;$i<count($_portfolios);$i++) {
                    $_oddEv=($i%2==0)?'odd':'even';
                    $_first=($i==0)?'first':'';
                    $_tag=implode(' ', $_portfolios[$i]['_tags']);
                    ?>
                    <article class="post portfolio_post portfolio_post_1 <?php echo $_oddEv." ".$_first." ".$_tag?>">
                    <div class="post_pic portfolio_post_pic">
                        <a class="w_hover img-link img-wrap"
                           href="<?php echo $_portfolios[$i]['_link']?>">
                            <span class="overlay"></span>
                            <span class="link-icon"></span>
                            <img src="<?php echo $_portfolios[$i]['_img']?>"
                                 alt="<?php echo $_portfolios[$i]['_title']?>"/>
                        </a>
                    </div>
                    <h4 class="post_title">
                        <a href="<?php echo $_portfolios[$i]['_link']?>">
                            <?php echo $_portfolios[$i]['_title']?>
                        </a>
                    </h4>
                    <h5 class="post_subtitle">
                        <?php
                        echo str_replace(' ', ', ', $_tag);
                        ?>
                    </h5>
                    </article>
                <?php
                }
                ?>

            </div>
            <div class="portfolio_iso_pages">
                <ul id="portfolio_iso_pages">
                </ul>
                <div id="portfolio_iso_pages_2">
                    Page 
                    <span id="portfolio_iso_pages_current">1</span> 
                    of 
                    <span id="portfolio_iso_pages_total"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- .section_body -->
</section>
<!-- /PORTFOLIO -->

<!-- CONTACTS -->
<section class="section contact_section even" id="contact">
    <div class="section_header contact_section_header">
        <h2 class="section_title contact_section_title">
            <a href="#">
                <span class="icon icon-envelope-alt"></span>
                <span class="section_name">Contacts</span>
            </a>
            <span class="section_icon"></span>
        </h2>
    </div>
    <div class="section_body contact_section_body">
        <div id="googlemap_data">
            <div id="sc_googlemap" style="width:100%;height:294px;" class="sc_googlemap"></div>
            <div class="add_info">
                <div class="profile_row header "> Contact info</div>
                <div class="profile_row address">
                    <span class="th">Address</span>
                    <span class="td"></span>
                </div>
                <div class="profile_row phone">
                    <span class="th">Phone</span>
                    <span class="td"></span>
                </div>
                <div class="profile_row email">
                    <span class="th">Email</span>
                    <span class="td"></span>
                </div>
                <div class="profile_row website">
                    <span class="th">Website</span>
                    <span class="td"></span>
                </div>
            </div>
        </div>
        <div class="sidebar contact_sidebar">
            <aside class="widget widget_qrcode_vcard" id="qrcode-vcard-widget-2">
                <h3 class="widget_title">VCARD</h3>

                <div class="widget_inner">
                    <div class="qrcode"></div>
                </div>
            </aside>
        </div>
        <div class="contact_form">
            <div class="contact_form_data">
                <div class="sc_contact_form">
                    <h3 class="title">Let's keep in touch</h3>

                    <form action="contact" method="post">
                        <div class="field">
                            <label class="required" for="sc_contact_form_username">
                                Name
                            </label>
                            <input type="text" name="username"
                                   id="sc_contact_form_username"/>
                        </div>
                        <div class="field">
                            <label class="required" for="sc_contact_form_email">
                                Email
                            </label>
                            <input type="text" name="email"
                                   id="sc_contact_form_email"/>
                        </div>
                        <div class="field message">
                            <label class="required" for="sc_contact_form_message">
                                Your Message
                            </label>
                            <textarea name="message"
                                      id="sc_contact_form_message"></textarea>
                        </div>
                        <div class="button">
                            <a class="enter" href="#">
                                <span>Submit</span>
                            </a>
                        </div>
                    </form>
                    <div class="result sc_infobox"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- .section_body -->
</section>
<!-- /CONTACT -->
</div>
<!-- #mainpage_accordion_area -->
</div>
<!-- #content -->
</div>
<!-- #primary -->
</div>