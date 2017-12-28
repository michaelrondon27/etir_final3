jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initslider-1\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    jQuery("#amazingslider-1").amazingslider({

        sliderid:1,

        jsfolder:jsFolder,

        width:1366,

        height:360,

        skinsfoldername:"",

        loadimageondemand:false,

        videohidecontrols:false,

        fullwidth:false,

        donotresize:false,

        enabletouchswipe:true,

        fullscreen:false,

        autoplayvideo:false,

        addmargin:true,

        randomplay:false,

        isresponsive:false,

        pauseonmouseover:false,

        playvideoonclickthumb:true,

        slideinterval:5000,

        transitiononfirstslide:false,

        scalemode:"fill",

        loop:0,

        autoplay:true,

        navplayvideoimage:"play-32-32-0.png",

        navpreviewheight:60,

        timerheight:2,

        descriptioncssresponsive:"font-size:12px;",

        shownumbering:false,

        skin:"TextNavigation",

        addgooglefonts:false,

        navshowplaypause:true,

        navshowplayvideo:true,

        navshowplaypausestandalonemarginx:8,

        navshowplaypausestandalonemarginy:8,

        navbuttonradius:0,

        navthumbnavigationarrowimageheight:32,

        navpreviewarrowheight:8,

        lightboxshownavigation:false,

        showshadow:false,

        navfeaturedarrowimagewidth:16,

        navpreviewwidth:120,

        googlefonts:"",

        navborderhighlightcolor:"#DD2E2F",

        bordercolor:"#ffffff",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        lightboxthumbwidth:80,

        navthumbnavigationarrowimagewidth:32,

        navthumbtitlehovercss:"text-decoration:none;",

        texteffectresponsivesize:600,

        navcolor:"#999999",

        arrowwidth:32,

        texteffecteasing:"easeOutCubic",

        texteffect:"slide",

        lightboxthumbheight:60,

        navspacing:0,

        navarrowimage:"navarrows-28-28-0.png",

        ribbonimage:"ribbon_topleft-0.png",

        navwidth:96,

        navheight:48,

        arrowimage:"arrows-32-32-0.png",

        timeropacity:1.0,

        arrowhideonmouseleave:1000,

        navthumbnavigationarrowimage:"carouselarrows-32-32-2.png",

        navshowplaypausestandalone:true,

        texteffect1:"slide",

        navpreviewbordercolor:"#ffffff",

        texteffect2:"slide",

        customcss:"",

        ribbonposition:"topleft",

        navthumbdescriptioncss:"display:none;",

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        arrowstyle:"mouseover",

        navthumbtitleheight:18,

        textpositionmargintop:24,

        buttoncssresponsive:"",

        navswitchonmouseover:false,

        playvideoimage:"playvideo-64-64-0.png",

        arrowtop:50,

        textstyle:"none",

        playvideoimageheight:64,

        navfonthighlightcolor:"#666666",

        showbackgroundimage:false,

        navpreviewborder:4,

        navshowplaypausestandaloneheight:48,

        shadowcolor:"#aaaaaa",

        navbuttonshowbgimage:true,

        navbuttonbgimage:"navbuttonbgimage-28-28-0.png",

        textbgcss:"display:block; position:absolute; top:0px; left:0px; width:100%; height:100%; background-color:#333333; opacity:0.6; filter:alpha(opacity=60);",

        textpositiondynamic:"bottomleft",

        navpreviewarrowwidth:16,

        playvideoimagewidth:64,

        buttoncss:"display:block; position:relative; margin-top:8px;",

        navshowpreviewontouch:false,

        bottomshadowimagewidth:96,

        showtimer:true,

        navradius:0,

        navmultirows:false,

        navshowpreview:false,

        navmarginy:0,

        navmarginx:16,

        navfeaturedarrowimage:"featuredarrow-16-8-2.png",

        showribbon:false,

        navstyle:"thumbnails",

        textpositionmarginleft:24,

        descriptioncss:"display:block; position:relative; font:12px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff; margin-top:8px;",

        navplaypauseimage:"navplaypause-48-48-0.png",

        backgroundimagetop:-10,

        timercolor:"#FF0000",

        numberingformat:"%NUM/%TOTAL ",

        navdirection:"horizontal",

        navfontsize:12,

        navhighlightcolor:"#333333",

        texteffectdelay1:1000,

        navimage:"bullet-24-24-5.png",

        texteffectdelay2:1500,

        texteffectduration1:600,

        navshowplaypausestandaloneautohide:true,

        texteffectduration2:600,

        navbuttoncolor:"",

        navshowarrow:false,

        texteffectslidedirection:"left",

        navshowfeaturedarrow:true,

        lightboxbarheight:64,

        titlecss:"display:block; position:relative; font:bold 14px \"Lucida Sans Unicode\",\"Lucida Grande\",sans-serif,Arial; color:#fff;",

        ribbonimagey:0,

        ribbonimagex:0,

        texteffectslidedistance1:120,

        texteffectslidedistance2:120,

        navrowspacing:8,

        navshowplaypausestandaloneposition:"bottomright",

        navshowbuttons:false,

        lightboxthumbtopmargin:12,

        titlecssresponsive:"font-size:12px;",

        navshowplaypausestandalonewidth:48,

        navfeaturedarrowimageheight:8,

        navopacity:1.0,

        textpositionmarginright:24,

        backgroundimagewidth:120,

        textautohide:true,

        navthumbtitlewidth:120,

        navpreviewposition:"top",

        texteffectseparate:false,

        arrowheight:32,

        arrowmargin:8,

        texteffectduration:600,

        bottomshadowimage:"bottomshadow-110-95-4.png",

        border:0,

        lightboxshowdescription:false,

        timerposition:"bottom",

        navfontcolor:"#333333",

        navthumbnavigationstyle:"arrowinside",

        borderradius:0,

        navbuttonhighlightcolor:"",

        textpositionstatic:"bottom",

        texteffecteasing2:"easeOutCubic",

        navthumbstyle:"textonly",

        texteffecteasing1:"easeOutCubic",

        textcss:"display:block; padding:12px; text-align:left;",

        navbordercolor:"#333333",

        navpreviewarrowimage:"previewarrow-16-8-0.png",

        navthumbtitlecss:"display:block;position:relative;padding:12px;text-align:center;font:italic 16px Georgia,sans-serif,Arial; color:#eee;",

        showbottomshadow:false,

        texteffectslidedistance:30,

        texteffectdelay:500,

        textpositionmarginstatic:0,

        backgroundimage:"",

        navposition:"bottom",

        texteffectslidedirection1:"right",

        navborder:0,

        textformat:"None",

        texteffectslidedirection2:"right",

        bottomshadowimagetop:98,

        texteffectresponsive:true,

        shadowsize:5,

        lightboxthumbbottommargin:8,

        textpositionmarginbottom:24,

        lightboxshowtitle:true,

        slice: {

            checked:true,

            effectdirection:0,

            effects:"up,down,updown",

            slicecount:10,

            duration:1500,

            easing:"easeOutCubic"

        },

        blocks: {

            columncount:5,

            checked:true,

            rowcount:5,

            effects:"topleft,bottomright,top,bottom,random",

            duration:1500,

            easing:"easeOutCubic"

        },

        elastic: {

            duration:1000,

            easing:"easeOutElastic",

            checked:true,

            effectdirection:0

        },

        slide: {

            duration:1000,

            easing:"easeOutCubic",

            checked:true,

            effectdirection:0

        },

        crossfade: {

            duration:1000,

            easing:"easeOutCubic",

            checked:true

        },

        threedhorizontal: {

            checked:true,

            effectdirection:0,

            bgcolor:"#222222",

            perspective:1000,

            slicecount:1,

            duration:1500,

            easing:"easeOutCubic",

            fallback:"slice",

            scatter:5,

            perspectiveorigin:"bottom"

        },

        fade: {

            duration:1000,

            easing:"easeOutCubic",

            checked:true

        },

        shuffle: {

            duration:1500,

            easing:"easeOutCubic",

            columncount:5,

            checked:true,

            rowcount:5

        },

        blinds: {

            duration:2000,

            easing:"easeOutCubic",

            checked:true,

            effectdirection:0,

            slicecount:3

        },

        threed: {

            checked:true,

            effectdirection:0,

            bgcolor:"#222222",

            perspective:1000,

            slicecount:5,

            duration:1500,

            easing:"easeOutCubic",

            fallback:"slice",

            scatter:5,

            perspectiveorigin:"right"

        },

        transition:"slice,blocks,elastic,slide,crossfade,threedhorizontal,fade,shuffle,blinds,threed",

        scalemode:"fill",

        isfullscreen:false,

        textformat: {



        }

    });

});