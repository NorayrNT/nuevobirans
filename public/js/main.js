$(document).ready(function() {
    $(".single_op_wrapper").on('mouseover mouseleave',function() {
        let id = $(this).attr('data-id');
        $(".single_h5_hover").toggleClass("single_h5_hover");
        $(".single_p_hover").toggleClass("single_p_hover");
        $(".span_hover").toggleClass("span_hover");
        $(".single_op_img").toggleClass('single_op_img');
        $(".arrow_hover").toggleClass("arrow_hover");

        $(this).find("span").first().toggleClass("span_hover");
        $(this).find("h5").first().toggleClass('single_h5_hover');
        $(this).find('p').first().toggleClass('single_p_hover');
        $(this).find(".round_arrow").first().toggleClass('arrow_hover');
        $(`div[data-img-id=${id}]`).toggleClass('single_op_img');       
        
    });

    // Menu
    $(".m_open,.m_close").click(function() {
        $("#logo_s_part").toggle();
    });

    // Portfolio
    $(".work_name > a").on('mouseover mouseleave',function() {
        $(this).parent('.work_name').siblings(".work_img").children("a").children('img').toggleClass('img_show')
    }); 
});