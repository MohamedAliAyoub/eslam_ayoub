
let aboutFirstView = false;
$(document).ready(function(){

    //for fixed mavbar
    $(document).scroll(function () {
        var $nav = $(".navbar");
        if($(this).scrollTop() >0){
            $('#whiteLogo').addClass('d-none');
            $('#blueLogo').removeClass('d-none');
            $nav.addClass('fixed-nav');
        }
        else{
            $('#whiteLogo').removeClass('d-none');
            $('#blueLogo').addClass('d-none');
            $nav.removeClass('fixed-nav');
        }

        if($(this).scrollTop() >$(".numbers").offset().top-500 ){
            $('.countfect').each(function(){var $this=$(this),countTo=$this.attr('data-num');$({countNum:$this.text()}).animate({countNum:countTo},{duration:8000,easing:'linear',step:function(){$this.text(Math.floor(this.countNum));},complete:function(){$this.text(this.countNum);}});});
        }
        if(($(this).scrollTop() >$(".about").offset().top-500) && aboutFirstView == false){
            var typed = new Typed('#typed', {
                stringsElement: '#typed-strings'
            });
            aboutFirstView =true;
        }
      });
    // for scrolling
     // for scrolling on sections
     $("a[href='#header']").click(function(){
        let homeOffset = $("#header").offset().top - $(".navbar").outerHeight(true);
        $("body,html").animate({scrollTop:homeOffset},1000);
    })
    $("a[href='#about']").click(function(){
        let homeOffset = $("#about").offset().top - $(".navbar").outerHeight(true);
        $("body,html").animate({scrollTop:homeOffset},1000);
    })
    $("a[href='#services']").click(function(){

        let homeOffset = $("#services").offset().top - $(".navbar").outerHeight(true);
        $("body,html").animate({scrollTop:homeOffset},1000);
    })
    $("a[href='#projects']").click(function(){

        let homeOffset = $("#projects").offset().top - $(".navbar").outerHeight(true);
        $("body,html").animate({scrollTop:homeOffset},1000);
    })
    $("a[href='#contactUs']").click(function(){

        let homeOffset = $("#contactUs").offset().top - $(".navbar").outerHeight(true);
        $("body,html").animate({scrollTop:homeOffset},1000);
    })
    //for owl carsual
    $("#firstCarsual").owlCarousel({
        rtl: true,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            }
        }
    });
    $("#secondCarsual , #serd-carousel").owlCarousel({
        rtl: true,
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:4,
                nav:false
            }
        }
    });

    //for loader
    window.setTimeout(function(){
        $('.loader').addClass('d-none');
        $('body').css('overflow','auto');
    },5000);
});

 // function to open project modal
 var openViewModal = (video,images,url) =>{
    $('.projectVideoContainer,.projectImagesContainer,.projectUrlContainer').addClass('d-none');
    $('body').css('overflow','hidden');
    if(video!==''){
        $('.projectVideoContainer').removeClass('d-none');
        $('.projectVideo').html(video);
    }
    if(images!=='null'){
        $('.projectImagesContainer').removeClass('d-none');
      

        console.log(images);
        
        let imagesArray = JSON.parse(images);

        // let imagesTemp=''
        // imagesArray.forEach(element => {
        //     imagesTemp += `div class="projectImage"> <img src="${element}" alt="picture 1" class="img-fluid"></div>`;
        // });
        // $('.projectImagesContainer .owl-carousel').html(imagesTemp);
    }
    if(url!=='null'){
        $('.projectUrlContainer').removeClass('d-none');
        $('.projectLink').attr('href',url).text(url)
    }
    $('#projectView').modal('show');
 }

 // function to open project modal
 var closeViewModal = () =>{
    $('body').css('overflow','auto');
    $('#projectView').modal('hide');
 }

 //event for catergories btns
 $('.categoriesBar .btn').click(function(){
     $(this).addClass('active').siblings().removeClass('active');
 })
