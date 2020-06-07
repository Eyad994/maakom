<div id="div_notify_header_content">
    <?php
    if ($_SESSION['user_type'] != '0') {
        ?>
        <a class="as_headers" href="<?php echo $root_link . $arr_main_pages[1] ?>">
            <div class="divs_main_header_counts" id="div_main_header_reports">

                <div class="divs_counts_number" id="div_report_count_txt">
                    البلاغات
                    <div><?php echo $arr_page_data['reports_header_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_report_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_reports.png" />
                </div>
                <div class="divs_headers_see_more" id="div_reports_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[5] ?>"><div class="divs_main_header_counts" id="div_main_header_tenders">
                <div class="divs_counts_number" id="div_tender_count_txt">
                    العطاءات
                    <div><?php echo $arr_page_data['tenders_header_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_tender_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_tenders.png" />
                </div>
                <div class="divs_headers_see_more" id="div_tender_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[3] ?>"><div class="divs_main_header_counts" id="div_main_header_news">
                <div class="divs_counts_number" id="div_survey_count_txt">
                    الأخبار
                    <div><?php echo $arr_page_data['news_header_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_survey_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_news.png" />
                </div>
                <div class="divs_headers_see_more" id="div_survey_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[7] ?>"><div class="divs_main_header_counts" id="div_main_header_survey">
                <div class="divs_counts_number" id="div_survey_count_txt">
                    استطلاع الرأي
                    <div><?php echo $arr_page_data['survey_header_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_survey_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_survey.png" />
                </div>
                <div class="divs_headers_see_more" id="div_survey_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a>
        <?php
    } else if ($_SESSION['user_type'] == '0') {
        ?>
        <a class="as_headers" href="<?php echo $root_link . $arr_main_pages[14] ?>">
            <div class="divs_main_header_counts" id="div_main_header_reports">

                <div class="divs_counts_number" id="div_report_count_txt">
                    البلديات
                    <div><?php echo $arr_page_data['municipality_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_report_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_bulding.png" />
                </div>
                <div class="divs_headers_see_more" id="div_reports_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[9] ?>"><div class="divs_main_header_counts" id="div_main_header_tenders">
                <div class="divs_counts_number" id="div_tender_count_txt">
                    المستخدمون
                    <div><?php echo $arr_page_data['admins_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_tender_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_users.png" />
                </div>
                <div class="divs_headers_see_more" id="div_tender_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[13] ?>"><div class="divs_main_header_counts" id="div_main_header_news">
                <div class="divs_counts_number" id="div_survey_count_txt">
                    المواطنين
                    <div><?php echo $arr_page_data['all_users_count'] ?></div>
                </div><div class="divs_counts_icon" id="div_survey_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_app_user.png" />
                </div>
                <div class="divs_headers_see_more" id="div_survey_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a><a href="<?php echo $root_link . $arr_main_pages[10] ?>"><div class="divs_main_header_counts" id="div_main_header_survey">
                <div class="divs_counts_number" id="div_survey_count_txt">
                    التقييمات 
                    <div><?php echo $arr_page_data['marks_counts'] ?></div>
                </div><div class="divs_counts_icon" id="div_survey_count_icon">
                    <img src="<?php echo $dir_files_images ?>/ic_white_survey.png" />
                </div>
                <div class="divs_headers_see_more" id="div_survey_see_more">
                    <span class="spans_see_more_txt">
                        المزيد
                    </span><span class="fa fa-chevron-circle-left">

                    </span>
                </div>
            </div></a>
        <?php
    }
    ?>

</div>