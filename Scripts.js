var Hero1 = "Empty";
var Hero2 = "Empty";
var Hero3 = "Empty";
var Hero4 = "Empty";
var Hero5 = "Empty";

var HeroNameDisplay = [];
var HeroId = [];
var HeroDescription = [];
var GoodWith = [];
var GoodDescription = [];

var Checker = 0;

function changeimg(IMG) {
    var ChangeIMG1 = document.getElementById('ChangingImage-1');
    var ChangeIMG2 = document.getElementById('ChangingImage-2');
    var ChangeIMG3 = document.getElementById('ChangingImage-3');
    var ChangeIMG4 = document.getElementById('ChangingImage-4');
    var ChangeIMG5 = document.getElementById('ChangingImage-5');

    if (ChangeIMG1.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
        Hero1 = "Empty";
        ChangeIMG1.src = "Styles/Dota-Logo.jpg";
    } else if (ChangeIMG2.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
        Hero2 = "Empty";
        ChangeIMG2.src = "Styles/Dota-Logo.jpg";
    } else if (ChangeIMG3.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
        Hero3 = "Empty";
        ChangeIMG3.src = "Styles/Dota-Logo.jpg";
    } else if (ChangeIMG4.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
        Hero4 = "Empty";
        ChangeIMG4.src = "Styles/Dota-Logo.jpg";
    } else if (ChangeIMG5.src.match("Dota-Heroes-Large/" + IMG.title + "_full.jpg")) {
        Hero5 = "Empty";
        ChangeIMG5.src = "Styles/Dota-Logo.jpg";
    } else if (ChangeIMG1.src.match("Styles/Dota-Logo.jpg")) {
        ChangeIMG1.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
        Hero1 = IMG.title;
    } else if (ChangeIMG2.src.match("Styles/Dota-Logo.jpg")) {
        ChangeIMG2.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
        Hero2 = IMG.title;
    } else if (ChangeIMG3.src.match("Styles/Dota-Logo.jpg")) {
        ChangeIMG3.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
        Hero3 = IMG.title;
    } else if (ChangeIMG4.src.match("Styles/Dota-Logo.jpg")) {
        ChangeIMG4.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
        Hero4 = IMG.title;
    } else if (ChangeIMG5.src.match("Styles/Dota-Logo.jpg")) {
        ChangeIMG5.src = "Dota-Heroes-Large/" + IMG.title + "_full.jpg";
        Hero5 = IMG.title;
    }

    if (ChangeIMG1.src.match("Styles/Dota-Logo.jpg") && ChangeIMG2.src.match("Styles/Dota-Logo.jpg") && ChangeIMG3.src.match("Styles/Dota-Logo.jpg") && ChangeIMG4.src.match("Styles/Dota-Logo.jpg") && ChangeIMG5.src.match("Styles/Dota-Logo.jpg")) {
        document.getElementById("Submit").style.display = "none";
        document.getElementById("Submit2").style.display = "block";
        document.getElementById("Clear").style.display = "none";
        document.getElementById("Clear2").style.display = "block";
    } else {
        document.getElementById("Submit").style.display = "block";
        document.getElementById("Submit2").style.display = "none";
        document.getElementById("Clear").style.display = "block";
        document.getElementById("Clear2").style.display = "none";
    }
}

function changeimgOriginal(IMG) {
    if (Checker === 0) {
        var ChangeIMG1 = document.getElementById('ChangingImage-1');
        var ChangeIMG2 = document.getElementById('ChangingImage-2');
        var ChangeIMG3 = document.getElementById('ChangingImage-3');
        var ChangeIMG4 = document.getElementById('ChangingImage-4');
        var ChangeIMG5 = document.getElementById('ChangingImage-5');

        if (!IMG.src.match("Styles/Dota-Logo.jpg") && IMG.id.match("ChangingImage-1")) {
            Hero1 = "Empty";
            IMG.src = "Styles/Dota-Logo.jpg";
        }
        if (!IMG.src.match("Styles/Dota-Logo.jpg") && IMG.id.match("ChangingImage-2")) {
            Hero2 = "Empty";
            IMG.src = "Styles/Dota-Logo.jpg";
        }
        if (!IMG.src.match("Styles/Dota-Logo.jpg") && IMG.id.match("ChangingImage-3")) {
            Hero3 = "Empty";
            IMG.src = "Styles/Dota-Logo.jpg";
        }
        if (!IMG.src.match("Styles/Dota-Logo.jpg") && IMG.id.match("ChangingImage-4")) {
            Hero4 = "Empty";
            IMG.src = "Styles/Dota-Logo.jpg";
        }
        if (!IMG.src.match("Styles/Dota-Logo.jpg") && IMG.id.match("ChangingImage-5")) {
            Hero5 = "Empty";
            IMG.src = "Styles/Dota-Logo.jpg";
        }

        if (ChangeIMG1.src.match("Styles/Dota-Logo.jpg") && ChangeIMG2.src.match("Styles/Dota-Logo.jpg") && ChangeIMG3.src.match("Styles/Dota-Logo.jpg") && ChangeIMG4.src.match("Styles/Dota-Logo.jpg") && ChangeIMG5.src.match("Styles/Dota-Logo.jpg")) {
            document.getElementById("Submit").style.display = "none";
            document.getElementById("Submit2").style.display = "block";
            document.getElementById("Clear").style.display = "none";
            document.getElementById("Clear2").style.display = "block";
        } else {
            document.getElementById("Submit").style.display = "block";
            document.getElementById("Submit2").style.display = "none";
            document.getElementById("Clear").style.display = "block";
            document.getElementById("Clear2").style.display = "none";
        }
    }
}

function ClearImages() {
    var ChangeIMG1 = document.getElementById('ChangingImage-1');
    var ChangeIMG2 = document.getElementById('ChangingImage-2');
    var ChangeIMG3 = document.getElementById('ChangingImage-3');
    var ChangeIMG4 = document.getElementById('ChangingImage-4');
    var ChangeIMG5 = document.getElementById('ChangingImage-5');
    Hero1 = "Empty";
    Hero2 = "Empty";
    Hero3 = "Empty";
    Hero4 = "Empty";
    Hero5 = "Empty";
    ChangeIMG1.src = "Styles/Dota-Logo.jpg";
    ChangeIMG2.src = "Styles/Dota-Logo.jpg";
    ChangeIMG3.src = "Styles/Dota-Logo.jpg";
    ChangeIMG4.src = "Styles/Dota-Logo.jpg";
    ChangeIMG5.src = "Styles/Dota-Logo.jpg";
    document.getElementById("Submit").style.display = "none";
    document.getElementById("Submit2").style.display = "block";
    document.getElementById("Clear").style.display = "none";
    document.getElementById("Clear2").style.display = "block";
}

function HeroTips() {
    var Herovalue1 = null;
    var Herovalue2 = null;
    var Herovalue3 = null;
    var Herovalue4 = null;
    var Herovalue5 = null;
    var Heroset1 = 0;
    var Heroset2 = 0;
    var Heroset3 = 0;
    var Heroset4 = 0;
    var Heroset5 = 0;
    var text = "";
    var HeroNameDisplayLength = HeroNameDisplay.length;
    for (var i = 0; i < HeroNameDisplayLength; i++) {

        if (HeroNameDisplay[i] === Hero1) {
            Herovalue1 = i;
            Heroset1 = 1;
        } else if (HeroNameDisplay[i] === Hero2) {
            Herovalue2 = i;
            Heroset2 = 1;
        } else if (HeroNameDisplay[i] === Hero3) {
            Herovalue3 = i;
            Heroset3 = 1;
        } else if (HeroNameDisplay[i] === Hero4) {
            Herovalue4 = i;
            Heroset4 = 1;
        } else if (HeroNameDisplay[i] === Hero5) {
            Herovalue5 = i;
            Heroset5 = 1;
        }
    }
    text += "<div class='combo'><p>Good Combinations</div><br><br><br><div class='info'>";
    if (GoodWith[Herovalue1] === (Hero2) && !Hero2.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero1 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero2 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue1] + "</div><br>";
    }
    if (GoodWith[Herovalue1] === (Hero3) && !Hero3.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero1 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero3 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue1] + "</div><br>";
    }
    if (GoodWith[Herovalue1] === (Hero4) && !Hero4.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero1 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero4 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue1] + "</div><br>";
    }
    if (GoodWith[Herovalue1] === (Hero5) && !Hero5.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero1 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero5 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue1] + "</div><br>";
    }
    if (GoodWith[Herovalue2] === (Hero3) && !Hero3.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero2 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero3 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue2] + "</div><br>";
    }
    if (GoodWith[Herovalue2] === (Hero4) && !Hero4.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero2 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero4 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue2] + "</div><br>";
    }
    if (GoodWith[Herovalue2] === (Hero5) && !Hero5.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero2 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero5 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue2] + "</div><br>";
    }
    if (GoodWith[Herovalue3] === (Hero4) && !Hero4.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero3 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero4 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue3] + "</div><br>";
    }
    if (GoodWith[Herovalue3] === (Hero5) && !Hero5.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero3 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero5 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue3] + "</div><br>";
    }
    if (GoodWith[Herovalue4] === (Hero5) && !Hero5.match("Empty")) {
        text += "<img src='Dota-Heroes-Small/" + Hero4 + "_sb.png'><span class='PlusSign'>" + " + " + "</span><img src='Dota-Heroes-Small/" + Hero5 + "_sb.png'>" + " :<div class='CenterText'>" + GoodDescription[Herovalue4] + "</div><br>";
    }
    text += "</div>";
    text += "<div class='combo'><p>Hero tips</div><br><br><br><div class='info'>";
    if (Heroset1 === 1) {
        text += "<br><img src='Dota-Heroes-Small/" + Hero1 + "_sb.png'> :<div class='CenterTextHeroDescription'>" + HeroDescription[Herovalue1] + "</div><br>";
    }
    if (Heroset2 === 1) {
        text += "<br><img src='Dota-Heroes-Small/" + Hero2 + "_sb.png'> :<div class='CenterTextHeroDescription'>" + HeroDescription[Herovalue2] + "</div><br>";
    }
    if (Heroset3 === 1) {
        text += "<br><img src='Dota-Heroes-Small/" + Hero3 + "_sb.png'> :<div class='CenterTextHeroDescription'>" + HeroDescription[Herovalue3] + "</div><br>";
    }
    if (Heroset4 === 1) {
        text += "<br><img src='Dota-Heroes-Small/" + Hero4 + "_sb.png'> :<div class='CenterTextHeroDescription'>" + HeroDescription[Herovalue4] + "</div><br>";
    }
    if (Heroset5 === 1) {
        text += "<br><img src='Dota-Heroes-Small/" + Hero5 + "_sb.png'> :<div class='CenterTextHeroDescription'>" + HeroDescription[Herovalue5] + "</div><br>";
    }
    text += " </div>";
    document.getElementById("HeroInfo").innerHTML = text;
}

$(document).ready(function() {

    $("#top-bar_search").keyup(function() {
        // Retrieve the input field text 
        var filter = $(this).val();
        $(".data-hero-name").show();
        // Loop through the class tavern-hero
        $(".tavern-hero").each(function() {
            //If the attribute data-hero-name doesn't contain the characters entered by the user fade the appropriate images
            //y = exact match
            //i = case-insensitive
            if ($(this).attr('data-hero-name').search(new RegExp(filter, "yi")) < 0) {
                $(this).fadeTo("fast", 0.15);
            } else {
                //Otherwise do not fade them
                $(this).fadeTo("fast", 1);
            }
        });
    });

    $(".About").fadeOut();
    $(".Tutorial-Screen1").fadeOut();
    $(".Tutorial-Screen2").fadeOut();
    $(".Tutorial-Screen3").fadeOut();

    $("#Next").on("click", function NextButton() {
        $(".Tutorial-Screen1").fadeOut();
        setTimeout(function() {
            $(".Tutorial-Screen2").fadeIn();
        }, 1000);
    });
    $("#Next2").on("click", function NextButton2() {
        $(".Tutorial-Screen2").fadeOut();
        setTimeout(function() {
            $(".Tutorial-Screen3").fadeIn();
        }, 1000);
    });
    $("#Back2").on("click", function NextButton2() {
        $(".Tutorial-Screen2").fadeOut();
        setTimeout(function() {
            $(".Tutorial-Screen1").fadeIn();
        }, 1000);
    });
    $("#Back3").on("click", function NextButton2() {
        $(".Tutorial-Screen3").fadeOut();
        setTimeout(function() {
            $(".Tutorial-Screen2").fadeIn();
        }, 1000);
    });

    $("#Submit").on("click", function SubmitButton() {
        $("#Submit").off('click', SubmitButton);
        Checker = 1;
        $(".tavern-alignment").fadeOut();
        setTimeout(function() {
            $(".ScreenChange").fadeIn();
            $("#Submit").css("display", "none");
            $("#Clear").css("visibility", "hidden");
            $(".Buttons-Back").css("display", "block");
            $("#Submit").on('click', SubmitButton);
            HeroTips();
        }, 1000);
    });

    $("#Back").on("click", function BackButton() {
        $("#Back").off('click', BackButton);
        Checker = 0;
        $(".ScreenChange").fadeOut();
        setTimeout(function() {
            $(".tavern-alignment").fadeIn();
            $("#Submit").css("display", "block");
            $("#Clear").css("visibility", "visible");
            $(".Buttons-Back").css("display", "none");
            $("#Back").on('click', BackButton);
        }, 1000);
    });

    $('.tavern-hero').hover(function() {
        var HeroName = $(this).attr('data-hero-name');
        $(".Name").each(function() {
            $(this).text(HeroName);
        });
    });

    $.ajax({
        url: 'heroes.json',
        dataType: 'json',
        type: 'get',
        cache: false,
        success: function(data) {
            $(data).each(function(index, value) {
                HeroNameDisplay.push(value.localized_name);
                HeroId.push(value.id);
                HeroDescription.push(value.HeroDescription);
                GoodWith.push(value.Goodwith);
                GoodDescription.push(value.GoodDescription);
            });
        }
    });
});

/* Open */
function openNavTutorial() {
    document.getElementById("myNav").style.height = "100%";
    $(".Tutorial-Screen1").fadeIn();
}

function openNavAbout() {
    document.getElementById("myNav").style.height = "100%";
    $(".About").fadeIn();
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
    setTimeout(function() {
        $(".About").fadeOut();
        $(".Tutorial-Screen1").fadeOut();
        $(".Tutorial-Screen2").fadeOut();
        $(".Tutorial-Screen3").fadeOut();
    }, 1000);
}