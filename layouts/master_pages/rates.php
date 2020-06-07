<?php
include __DIR__ . '/../sub_pages/main_header.php';
?>
<div class="center">
    <?php
    include __DIR__ . '/../sub_pages/main_menu.php';
    ?>
    <div id="div_main_info">
        <?php
        include __DIR__ . '/../sub_pages/main_notify_header.php';
        ?>
        <div id="div_customors_rate">
            <div id="div_customors_rate_title">
                مستوى رضى المواطنين عن الخدمة بشكل عام
            </div>
            <div id="div_big_stars">
<?php
for ($i = 0; $i < intval($arr_page_data['marks_count_val']['avg']); $i++) {
    echo '</span><span class="fa fa-star">';
}
for ($i = intval($arr_page_data['marks_count_val']['avg']); $i < 5; $i++) {
    echo '</span><span class="fa fa-star-o">';
}
?>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
                <?php echo $arr_page_data['marks_count_val']['5'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['marks_count_val']['4'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['marks_count_val']['3'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['marks_count_val']['2'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['marks_count_val']['1'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span>
                </div>
            </div>
        </div>
        <div id="div_customors_rate">
            <div id="div_customors_rate_title">
                مستوى رضى المواطنين عن الخدمات المقدمة من البلديات
            </div>
            <div id="div_big_stars">
                <?php
                for ($i = 0; $i < intval($arr_page_data['user_marks_count_val']['avg']); $i++) {
                    echo '</span><span class="fa fa-star">';
                }
                for ($i = intval($arr_page_data['user_marks_count_val']['avg']); $i < 5; $i++) {
                    echo '</span><span class="fa fa-star-o">';
                }
                ?>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['user_marks_count_val']['5'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['user_marks_count_val']['4'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['user_marks_count_val']['3'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['user_marks_count_val']['2'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span><span class="fa fa-star">
                    </span>
                </div>
            </div>
            <div id="div_customors_rate_content">
                <div class="divs_customors_rate_txt">
<?php echo $arr_page_data['user_marks_count_val']['1'] ?>
                </div>
                <div>
                    <span class="fa fa-star">
                    </span>
                </div>
            </div>
        </div>
        
    </div>
</div>
