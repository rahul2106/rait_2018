	$('#ca-container').contentcarousel();
	
$( ".quick-links-tab" ).click(function() {
    if ( !$('.quick-links-tab').hasClass('quick-links-open') ) {
  	  $( ".quick-links-tab" ).stop().animate({
  	      right: "220px",
  	    }, 500 );
      $( ".quick-links" ).stop().animate({
          width: "220px",
        }, 1 );
      $('.quick-links-tab').addClass('quick-links-open');
    }
    else {
      $( ".quick-links-tab" ).stop().animate({
          right: "0px",
        }, 500, function() {
            $( ".quick-links" ).stop().animate({
          width: "0px",
        }, 1 );
        } );
      
      $('.quick-links-tab').removeClass('quick-links-open');
    }
 });

		var count = $("ul.navbar-nav li").size() - $("ul.dropdown-menu li").size()
		if (count>7) {
			for (var i=count;i>(count/2)+3;i--)
			{ 
				$( "ul.navbar-nav li:nth-child(" + i + ") ul" ).css( "border-bottom-left-radius", "20px" );
				$( "ul.navbar-nav li:nth-child(" + i + ") ul" ).css( "border-bottom-right-radius", "0px" );
				$( "ul.navbar-nav li:nth-child(" + i + ") ul" ).css( "right", "0px" );
				$( "ul.navbar-nav li:nth-child(" + i + ") ul" ).css( "left", "auto" );
			}
		}
		else {

		}

	// $( ".register .input-group input" ).hide();
	// $( ".register .input-group" ).hover(function() {
	//  	$( ".register .input-group input" ).show( "slow" );
 	// });
		

	$('ul.nav li.dropdown').hover(function() {
	 $(this).find('.dropdown-menu').stop().toggle();
	 $(this).css( "background-color", "#6b8cbe" );
	}, function() {
	$(this).find('.dropdown-menu').stop().toggle();
	$(this).css( "background-color", "#034170" );
		});
		
	$(".ca-item-main a").click(function() {
		var ytlink = $(this).attr("href");
		$("#ytIframe").attr("src", ytlink );
		var yttext = $(this).parent().find(".video-listtext").text();
		$( "#ytTitle" ).text( yttext );
	});

    $(".dd-videoitem a").click(function() {
        var ytlink = $(this).attr("href");
        $("#ytIframe").attr("src", ytlink );
        var yttext = $(this).parent().find(".dd-videodesc").text();
        $( "#ytTitle" ).text( yttext );
    });
	
	$(".print-ad-samples div a").click(function() {
		var toolkitlink = $(this).children("img").attr("src");
		$("#toolkitModalImage").attr("src", toolkitlink );
	});

function sponsorRotator(sponsorImg, sponsorUl) {
    var ulLength = $(sponsorUl + " .slides li").length;
    var i = 0;
    var timer = function (i) {
        var imgSrc = $(sponsorUl + " li:nth-child(" + i + ") a img" ).attr("src");
        $(sponsorImg + " img").attr('src', imgSrc);
        setTimeout(function () {
            i = (i === ulLength) ? 0 : i + 1;
            timer(i);
        }, 3000);
    };
    timer(i);
}

function validateForm(form) {
        //alert(form.for_fedgov.value);
        //alert(form.last_name.value);
        //return false;
        if (!isNotEmpty(form.first-name)
		&& !isNotEmpty(form.last-name)
		&& !isNotEmpty(form.email)
	    && !isNotEmpty(form.title)
		&& !isNotEmpty(form.company)
		&& !isNotEmpty(form.state)
		&& !isNotEmpty(form.country)
		&& !isNotEmpty(form.interests)
		) {
        } else {
            highLightErrors(form);
            alert("Please fill in all required fields denoted by *");
            return false;
        }
    }
	
	$('#signupForm').submit(function (e) {
            e.preventDefault();
            var strEmail = document.getElementById('email').value;
            var strFname = document.getElementById('first-name').value;
            var strLname = document.getElementById('last-name').value;
            var strTitle = document.getElementById('title').value;
            var strCompanyname = document.getElementById('company').value;
			var strState = document.getElementById('state').value;
			var strCountry = document.getElementById('country').value;
			var strInterests = document.getElementById('interests').value;
            $("label").css( "color", "black" );

            if (strFname == null || strFname == "" || strFname == "First Name") {
                $("#form-warning").css( "display", "block" );
                $("label[for=first-name]").css( "color", "red" );
                $("#form-warning").text("*First Name is required!");
                return false;
            }
            if (strLname == null || strLname == "" || strLname == "Last Name") {
                $("#form-warning").css( "display", "block" );
                $("label[for=last-name]").css( "color", "red" );
                $("#form-warning").text("*Last name is required!");
               return false;
            }
            if (strEmail == null || strEmail == "" || strEmail == "Email Address") {
                $("#form-warning").css( "display", "block" );
                $("label[for=email]").css( "color", "red" );
                $("#form-warning").text("*Email Address is required!");
                return false;
            }

            if (strEmail.indexOf('@') == -1 || strEmail.indexOf('.') == -1) {
                $("#form-warning").css( "display", "block" );
                $("label[for=email]").css( "color", "red" );
                $("#form-warning").text("*Email Address is not valid!");
                return false;
            }

            if (strTitle == null || strTitle == "" || strTitle == "Title") {
                $("#form-warning").css( "display", "block" );
                $("label[for=title]").css( "color", "red" );
                $("#form-warning").text("*Title is not valid!");
                return false;
            }

            if (strCompanyname == null || strCompanyname == "" || strCompanyname == "Company") {
                $("#form-warning").css( "display", "block" );
                $("label[for=last-name]").css( "color", "red" );
                $("#form-warning").text("*Company name is required!");
                return false;
            }

            if (strState == null || strState == "" || strState == "Please choose one") {
                $("#form-warning").css( "display", "block" );
                $("label[for=state]").css( "color", "red" );
                $("#form-warning").text("*State is required!");
                return false;
            }

            if (strCountry == null || strCountry == "" || strCountry == "Country") {
                $("#form-warning").css( "display", "block" );
                $("label[for=country]").css( "color", "red" );
                $("#form-warning").text("*Country is required!");
                return false;
            }

            if (strInterests == null || strInterests == "" || strInterests == "Please choose one") {
                $("#form-warning").css( "display", "block" );
                $("label[for=interests]").css( "color", "red" );
                $("#form-warning").text("*Interests are required!");
                return false;
            }


            $('#responseContainer').load("/SignUpForm.ashx?" +
                "email=" + strEmail.replace(" ", "+") +
                "&fname=" + strFname.replace(" ", "+") +
                "&lname=" + strLname.replace(" ", "+") +
                "&title=" + strTitle.replace(" ", "+") +
                "&companyname=" + strCompanyname.replace(" ", "+") +
				"&state=" + strState.replace(" ", "+") +
				"&country=" + strCountry.replace(" ", "+") +
				"&interests=" + strInterests.replace(" ", "+"), function () {
                    $('#responseContainer').show(); $('#subscribeContainer').hide();
                });
            $('#subscribeContainer').children().remove();
            $('#subscribeContainer').append('<h2>Please wait...</h2>');
        });

		//Registration Page
$(".column-1").show();
$(".column-2").hide();
$(".column-3").hide();
$( ".column-1.slide-bar" ).click(function() {
    $(".column-2").hide();
    $(".column-3").hide();
    $(".column-2 a span").removeClass( "open" );
    $(".column-3 a span").removeClass( "open" );
    $(".column-1").show();
    $( ".column-1.slide-bar a span" ).addClass( "open" );
    return false;
});
$( ".column-2.slide-bar" ).click(function() {
    $(".column-1").hide();
    $(".column-3").hide();
    $(".column-1 a span").removeClass( "open" );
    $(".column-3 a span").removeClass( "open" );
    $(".column-2").show();
    $( ".column-2.slide-bar a span" ).addClass( "open" );
    return false;
    
});
$( ".column-3.slide-bar" ).click(function() {
    $(".column-1").hide();
    $(".column-2").hide();
    $(".column-1 a span").removeClass( "open" );
    $(".column-2 a span").removeClass( "open" );
    $(".column-3").show();
    $( ".column-3.slide-bar a span" ).addClass( "open" );
    return false;
});		
		
		
$(document).ready(function() {
    $('.carousel').carousel({
      interval: 5000
    })
    //Accordion for registration page
    $('#accordion1,#accordion3,#accordion4,#accordion5').find('.accordion-toggle').click(function(){
     $(".accordion-content").not($(this).next()).slideUp('fast');
      if($(this).next().is(":visible"))
        {
            $(this).parent().removeClass("active");
            $(this).next().slideUp();
        }
        else
        {
            $(this).parent().addClass("active");
            $(this).next().slideDown();
        }
    });
  });

sponsorRotator("#footerDoubleHelix", "#sponsorCategory_1");
sponsorRotator("#footerHelix", "#sponsorCategory_2");
sponsorRotator("#footerSponsors", "#sponsorCategory_3");
sponsorRotator("#sidebarDoubleHelix", "#sponsorCategory_1");

$(document).ready(function() {
    $('.accordion3 li div').toggle();
    $('.accordion3 li').find('a').toggleClass('opener');
});

$( ".accordion3 li h2" ).click(function() {
  $(this).next('div').slideToggle();
  $(this).find('a').toggleClass('opener');
  return false;
});

$(document).ready(function() {

    if (window.location.hash && window.location.hash.substring(1).length > 0) {
        var hash = window.location.hash.substring(1);
        var remove = 'romo';
        var hash = hash.replace(remove,'');
        $('.accordion3 #' + hash + ' div').toggle();
        $('.accordion3  #' + hash).find('a').toggleClass('opener');
        $('html, body').animate({
            scrollTop: $("#" + hash).offset().top - 75
        }, 1);
        return false;   
    } else {
        $('.accordion3 li:first-child div').toggle();
        $('.accordion3 li:first-child').find('a').toggleClass('opener');
		
        return false;
    }

});

$( ".toggle .toggler h4" ).click(function() {
  $(this).next("div").slideToggle();
  $(this).toggleClass("active");
});

$( ".accordion2 > li > a" ).click(function() {
  $(this).next("span").stop().slideToggle();
  $(this).parent("li").toggleClass("active");
   return false;
});



$( ".box.accordion ul li" ).click(function() {
  $(this).children("span").toggle();
  $(this).children("span").toggleClass("active");
  $(this).toggleClass("open");
   return false;
});

clearFormFields({
        clearInputs: true,
        clearTextareas: true,
        passwordFieldText: true,
        addClassFocus: "focus",
        filterClass: "default"
});

function clearFormFields(o) {
    if ($("#aspnetForm").length = 0) {
    if (o.clearInputs == null) o.clearInputs = true;
    if (o.clearTextareas == null) o.clearTextareas = true;
    if (o.passwordFieldText == null) o.passwordFieldText = false;
    if (o.addClassFocus == null) o.addClassFocus = false;
    if (!o.filter) o.filter = "default";
    if(o.clearInputs) {
        var inputs = document.getElementsByTagName("input");
        for (var i = 0; i < inputs.length; i++ ) {
            if((inputs[i].type == "text" || inputs[i].type == "password") && inputs[i].className.indexOf(o.filterClass)) {
                inputs[i].valueHtml = inputs[i].value;
                inputs[i].onfocus = function () {
                    if(this.valueHtml == this.value) this.value = "";
                    if(this.fake) {
                        inputsSwap(this, this.previousSibling);
                        this.previousSibling.focus();
                    }
                    if(o.addClassFocus && !this.fake) {
                        this.className += " " + o.addClassFocus;
                        this.parentNode.className += " parent-" + o.addClassFocus;
                    }
                }
                inputs[i].onblur = function () {
                    if(this.value == "") {
                        this.value = this.valueHtml;
                        if(o.passwordFieldText && this.type == "password") inputsSwap(this, this.nextSibling);
                    }
                    if(o.addClassFocus) {
                        this.className = this.className.replace(o.addClassFocus, "");
                        this.parentNode.className = this.parentNode.className.replace("parent-"+o.addClassFocus, "");
                    }
                }
                if(o.passwordFieldText && inputs[i].type == "password") {
                    var fakeInput = document.createElement("input");
                    fakeInput.type = "text";
                    fakeInput.value = inputs[i].value;
                    fakeInput.className = inputs[i].className;
                    fakeInput.fake = true;
                    inputs[i].parentNode.insertBefore(fakeInput, inputs[i].nextSibling);
                    inputsSwap(inputs[i], null);
                }
            }
        }
    }
    if(o.clearTextareas) {
        var textareas = document.getElementsByTagName("textarea");
        for(var i=0; i<textareas.length; i++) {
            if(textareas[i].className.indexOf(o.filterClass)) {
                textareas[i].valueHtml = textareas[i].value;
                textareas[i].onfocus = function() {
                    if(this.value == this.valueHtml) this.value = "";
                    if(o.addClassFocus) {
                        this.className += " " + o.addClassFocus;
                        this.parentNode.className += " parent-" + o.addClassFocus;
                    }
                }
                textareas[i].onblur = function() {
                    if(this.value == "") this.value = this.valueHtml;
                    if(o.addClassFocus) {
                        this.className = this.className.replace(o.addClassFocus, "");
                        this.parentNode.className = this.parentNode.className.replace("parent-"+o.addClassFocus, "");
                    }
                }
            }
        }
    }
	}
    function inputsSwap(el, el2) {
        if(el) el.style.display = "none";
        if(el2) el2.style.display = "inline";
    }
}

$(document).ready(function() {
    $target = $('.speakers-list').children('li');
    var tallest = 0;

    for(var i = 1; i < $('.speakers-list').children('li').size(); i=i+2 ) {

        tallest = Math.max(
            $('.speakers-list').children('li:nth-child(' + i + ')').height(),
            $('.speakers-list').children('li:nth-child(' + (i+1) + ')').height()
        );

        $('.speakers-list').children('li:nth-child(' + i + ')').height(tallest);
        $('.speakers-list').children('li:nth-child(' + (i+1) + ')').height(tallest);
    }

});

// start of Digital Daily code
$(document).ready(function() {
	var ddNumVidItems = $(".dd-videoitem").length;
	var ddNumArtItems = $(".dd-articleitem").length;
	var ddVidPages = 0;
	var ddArtPages = 0;
	var currentPage = 1;
    if ($('.inner-page').width() < 767) {
        var itemsPerPage = 1;
    }
    else {
       var itemsPerPage = 4;
    }
	$(".dd-videoitem").each(function( index ) {
		if ( index < itemsPerPage ){
			$(this).addClass("ddshow").removeClass("ddhide");
		} else {
				$(this).addClass("ddhide").removeClass("ddshow");
			}
	});

	$(".dd-articleitem").each(function( index ) {
		if ( index < itemsPerPage ){
			$(this).addClass("ddshow").removeClass("ddhide");
		} else {
				$(this).addClass("ddhide").removeClass("ddshow");
			}
	});

	if ( ddNumVidItems > itemsPerPage ) {
		ddVidPages = Math.ceil( ddNumVidItems/itemsPerPage );
	}

	if ( ddNumArtItems > itemsPerPage ) {
		ddArtPages = Math.ceil( ddNumArtItems/itemsPerPage );
	}
	
	for ( var i=1; i<=ddArtPages; i++ ) {
		$(".artPageNav").append("<span><a href='#' class='artPage" + i + "' onclick='showArtPage(" + i + "); return false;'>" + i + "</a></span)");
	}
	
	for ( var i=1; i<=ddVidPages; i++ ) {
        
		$(".vidPageNav").append("<span><a href='#' class='vidPage" + i + "' onclick='showVidPage(" + i + "); return false;'>" + i + "</a></span)");
        
	}
	
	var vidPageClass = ".vidPage" + currentPage;
	$(vidPageClass).addClass("ddselected");
	
	var artPageClass = ".artPage" + currentPage;
	$(artPageClass).addClass("ddselected");
	
	showArtPage = function(page) {
		var startitem = (page*itemsPerPage) - (itemsPerPage - 1);
		var enditem = (page*itemsPerPage);
		var artPageClass = ".artPage" +page;
		$(".artPageNav .ddselected").removeClass("ddselected");
		$(artPageClass).addClass("ddselected");
		$(".dd-articleitem").each(function( index ) {
			var i = index + 1;
			if (( i >= startitem ) && ( i <= enditem )) {
				$(this).addClass("ddshow").removeClass("ddhide");
			} else {
				$(this).addClass("ddhide").removeClass("ddshow");
			}
		});
	}
	
	showVidPage = function(page) {
		var startitem = (page*itemsPerPage) - (itemsPerPage - 1);
		var enditem = (page*itemsPerPage);
		var vidPageClass = ".vidPage" + page;
		$(".vidPageNav .ddselected").removeClass("ddselected");
		$(vidPageClass).addClass("ddselected");
		$(".dd-videoitem").each(function( index ) {
			var i = index + 1;
			if (( i >= startitem ) && ( i <= enditem )) {
				$(this).addClass("ddshow").removeClass("ddhide");
			} else {
				$(this).addClass("ddhide").removeClass("ddshow");
			}
		});
	}	   
});

$(document).ready(function() {

    $('.resources .accordion li:not(.open) > a').next("*").hide();

    $('.resources .accordion').find('li > a').click(function() {
        $(this).parent("li").toggleClass('open');
        $(this).next("*").slideToggle();
        return false;
    });
    //For Mobile Navigation of Video in Digital daily
    $(".vid-right").click(function(){
        var prnt=$(".ddselected").parent();
        if(prnt.parent().find("span").length!=prnt.index())
        showVidPage(prnt.index()+2);
    });
    $(".vid-left").click(function(){
        var prnt=$(".ddselected").parent();
        if(prnt.index()!=0)
        showVidPage(prnt.index());
    });
});
/*To Append Slide Switch Buttons below the slider in mobile*/
$( document ).ready(function() {
    if ($(window).width() < 768) {
            $('.social').appendTo(".sub-footer");
	    $('.slider-switch').insertAfter(".home-slider");
	    var mobMenu = $( ".menu-append" ).html();
	    var Qlink = $( ".header-list" ).html();
	    var Msearch = $( ".form" ).html();
	    $( "#menu nav" ).append(mobMenu);
	    $( "#quick-link ul" ).append("<li>"+Qlink+"</li>");
	    //$( ".append-search" ).append("<div class='form'>"+Msearch+"</div>");
	    //$( ".append-search div div").addClass('custom-search');
	    $( "#menu nav ul").removeClass();
    }
    else {
        $('.slider-switch').insertAfter(".selector-arrows");
    }
});

/* Search button mouseover on Desktop view start */
$(document).ready(function () {
    $("#search_form > #SearchSubmit").mouseover(function () {
        $('#search_term').width('250px');
        $('#search_term').css('padding', '5px');
    }); 
});
/* Search button mouseover on Desktop view end */

if(Function('/*@cc_on return document.documentMode===10@*/')()){ $("html").addClass("ie10"); }

/* Email Popup Validation and action */

$(document).ready(function () {
    var $myModel = $("#modal-emailpopup");
    var pageURL = "/EmailPopup/EmailPopupService.asmx/DisplayEmailPopup";
    var varRawUrl;
    if (window.location.hash != "") {
        varRawUrl = window.location.hash.replace("#", "");
    }
    else {
        varRawUrl = window.location.pathname;
    }
    $.ajax({
        type: 'POST',
        url: pageURL,
        data: JSON.stringify({ rawUrl: varRawUrl }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: true,
        cache: false,
        beforeSend: function () {

        },
        success: function (response) {
            if (response.d != "false") {
                $myModel.css("display", "block");
                $myModel.addClass("in");
                $myModel.attr("area-hidden", "false");
                $("body").addClass("modal-open");
                $("div.email-modal-backdrop").html("<div class='modal-backdrop fade in' />");
                $myModel.html(response.d);
            }
            else {
                EmailPopupHide();
            }
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            EmailPopupHide();
        }
    });
});

function EmailPopupHide() {
    var $myModel = $("#modal-emailpopup");

    $myModel.css("display", "none");
    $myModel.removeClass("in");
    $myModel.attr("area-hidden", "true");
    $("body").removeClass("modal-open");
    $("div.email-modal-backdrop").html("");
}

$('#email-popup').live("click", function (e) {
    e.preventDefault();
    var strEmail = document.getElementById('email').value;
    var strFname = document.getElementById('first-name').value;
    var strLname = document.getElementById('last-name').value;
    $("label").css("color", "black");

    if (strFname == null || strFname == "" || strFname == "First Name") {
        $("#form-warning").css("display", "block");
        $("label[for=first-name]").css("color", "red");
        $("#form-warning").text("*First Name is required!");
        return false;
    }
    if (strLname == null || strLname == "" || strLname == "Last Name") {
        $("#form-warning").css("display", "block");
        $("label[for=last-name]").css("color", "red");
        $("#form-warning").text("*Last name is required!");
        return false;
    }
    if (strEmail == null || strEmail == "" || strEmail == "Email Address") {
        $("#form-warning").css("display", "block");
        $("label[for=email]").css("color", "red");
        $("#form-warning").text("*Email Address is required!");
        return false;
    }

    if (strEmail.indexOf('@') == -1 || strEmail.indexOf('.') == -1) {
        $("#form-warning").css("display", "block");
        $("label[for=email]").css("color", "red");
        $("#form-warning").text("*Email Address is not valid!");
        return false;
    }

    var pageURL = "/EmailPopup/EmailPopupService.asmx/GetBlueHornetResponse";
    var varRawUrl;
    if (window.location.hash != "") {
        varRawUrl = window.location.hash.replace("#", "");
    }
    else {
        varRawUrl = window.location.pathname;
    }
    var $myModel = $("#modal-emailpopup");
    $.ajax({
        type: 'POST',
        url: pageURL,
        data: JSON.stringify({ rawUrl: varRawUrl, firstName: strFname, lastName: strLname, email: strEmail }),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        async: true,
        cache: false,
        beforeSend: function () {
            $("#Lightbox").css("display", "block");
            $("#protinycontent").html("<img src='/EmailPopup/images/ajax-loader.gif'  alt='Loading..'/>");
        },
        success: function (response) {            
            $("#Lightbox").css("display", "none");
            $("#protinycontent").html("");
            alert(response.d);
            $myModel.css("display", "none");
            $myModel.removeClass("in");
            $myModel.attr("area-hidden", "true");
            $("body").removeClass("modal-open");
            $("div.email-modal-backdrop").html("");
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            $("#Lightbox").css("display", "none");
            $("#protinycontent").html("");
        }
    });
});

/* Email Popup Validation and action */

/* Promotion page popup show */
$(document).ready(function () {
    EmailPopupHide();
    var $myModel = $("#modal-emailpopup");
    $("td.description > a.show-more").live("click", function () {
        $myModel.css("display", "block");
        $myModel.addClass("in");
        $myModel.attr("area-hidden", "false");
        $("body").addClass("modal-open");
        $("div.email-modal-backdrop").html("<div class='modal-backdrop fade in' />");
        $myModel.html("<div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>X</button></div><div id='subscribeContainer' class='email-popup'>" + $(this).next("span.long-desc").html() + "</div></div></div>");
		return false;
    });

    $("button.close").live("click", function () {
        EmailPopupHide();
    });

});

/* Promotion page popup show */

