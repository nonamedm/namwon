<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<!-- 밑에 add_stylesheet 함수를 사용하지 않는이유은 가끔 홈페이지 개발시 오류로 add_stylesheet 함수가 먹지 않는 현상으로 인해 사용하지 않습니다. -->
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/daygrid/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/timegrid/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/list/main.css" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/css/magnific-popup.css?v=191122" rel="stylesheet" />
<link href="<?php echo WCAL_PLUGIN_URL;?>/css/style.css?v=191122" rel="stylesheet" />

<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/interaction/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/daygrid/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/timegrid/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/list/main.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/fullcalendar/packages/core/locales-all.min.js"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/js/common.js?v=191002"></script>
<script src="<?php echo WCAL_PLUGIN_URL;?>/js/jquery.magnific-popup.min.js"></script>

<?php
if (!$wscb['wrc_display_types']) {
    $wrc_display_types = 'dayGridMonth,dayGridWeek,dayGridDay';
}
else {
    $arr_display_types = unserialize($wscb['wrc_display_types']);
    if (is_array($arr_display_types)) {
        $wrc_display_types = implode(',', $arr_display_types);
    }
    else {
        $wrc_display_types = $arr_display_types;
    }
}

$wrc_lang = $wscb['wrc_lang'] ? $wscb['wrc_lang'] : 'ko';
?>

<script type="text/javascript">
<!--
document.addEventListener("DOMContentLoaded", function() {
    var initialLocaleCode = "<?php echo $wscb['wrc_lang']?>";
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ "dayGrid", "timeGrid", "list", "interaction" ],
        height: 'parent',
        header: {
            left: "prev,next today",
            center: "title",
            right: "<?php echo $wrc_display_types?>"
        },
        defaultDate: "<?php echo G5_TIME_YMD?>",
        defaultView: "<?php echo ($wscb['wrc_default_view'] ? $wscb['wrc_default_view'] : 'dayGridMonth')?>",
        locale: initialLocaleCode,
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        weekNumbers: <?php echo ($wscb['wrc_weeks_number'] ? 'true' : 'false')?>,
        eventLimit: false, // allow "more" link when too many events
        timeZone: 'UTC',
        events: {
            url: "<?php echo WCAL_PLUGIN_URL;?>/get-events.php?bo_table="+g5_bo_table+"&sca=<?php echo urlencode($sca)?>",
            error: function() {
                $("#script-warning").show();
            }
        },
        eventClick: function(info) {
            console.log(info.event);
            var titleHtml = '<h5>'+info.event.title+'</h5>';
            var startTime = new Date(info.event.start).toISOString();
            var startTimeString = startTime.replace('T',' ').substring(0,10);
            // var startTimeString = startTime.getFullYear()+'-'+(startTime.getMonth()+1)+'-'+startTime.getDate();
            if(info.event.end!=null) {
                var endTime = new Date(info.event.end).toISOString();
                var endTimeString = endTime.replace('T',' ').substring(0,10);
                if(startTimeString==endTimeString) {
                    endTimeString = '';
                }
            } else {
                var endTime = '';
                var endTimeString = '';
            }
            var titleCont = '';
            // console.log("스케줄시작"+startTime);
            // console.log("스케줄끝"+endTime);

            if(endTimeString!=''){
                titleCont = '<p>⏱'+startTimeString+' ~ '+endTimeString+'</p>';
                titleCont += '<p></p>';
            } else {
                titleCont = '<p>⏱'+startTimeString+'</p>';
            }
            $("#tool-popup-title").html(titleHtml);
            $("#tool-popup-cont").html(titleCont);
            if (info.event.url.indexOf(document.location.hostname) === -1) {
                window.open(info.event.url, '_blank');
                info.jsEvent.preventDefault(); // don't let the browser navigate
            }
        },
        loading: function(bool) {
            $("#loading").toggle(bool);
        }
    });
    calendar.render();

    if (g5_is_admin) {
        $("#calendar .fc-toolbar .fc-right").append('<div class="fc-button-group"><button type="button" class="fc-button fc-button-primary" id="btn-settings">설정</button></div>');
    }

});
jQuery(document).ready(function () {
    $(document).on('click', '#btn-settings', function() {
        $.magnificPopup.open({
            items: {
                src: '<?php echo WCAL_PLUGIN_URL?>/setting.php?bo_table='+ g5_bo_table
            },
            type: 'iframe'
        });
    });

    
    $(document).on('click', '.fc-event-container .fc-h-event', function(e) {
        e.preventDefault();
        console.log(e);
        var href = $(this).attr('href');
        var pageX = $(window).width();
        var pageY = $(window).height();
        var divTop = e.pageY/4;
        var divLeft = e.pageX;
        if(divLeft+250>pageX) {
            divLeft = pageX-200;
        }
        $("#tool-popup").css({"display":'block', "position":"absolute","top": divTop, "left": divLeft, "z-index":"10000"});
        // $.magnificPopup.open({
        //     items: {
        //         src: href
        //     },
        //     type: 'iframe'
        // });
    });

});

//-->
</script>
<div id="tool-popup" style="display:none; padding:20px; width:250px; height:300px; background-color:#fff; border: 1px solid #aaa; border-radius: 2px;">
    <div id="tool-popup-title">

    </div>
    <div id="tool-popup-cont" style="font-size: 0.8rem;">

    </div>
</div>
<div id="calendar" style="width:50%; margin:0 auto;"></div>