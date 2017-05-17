$(document).ready(function(){

    var interval;
    //tao auto chuyen slide
    function startSlide(){
        interval = setInterval(function(){
            $('.container-fluid #next').click();
        }, 1000);

    }

    //xoa interval
    function stopSlide(){
        clearInterval(interval);
    }


    // click prev
    $('#prev').on('click', function(){
        //stopSlide de khi click prev no se khong auto chuyen den hinh ke tiep
        stopSlide();
        var stt = $('.container-fluid img .active').attr('stt'); //0
        //remove class active of img & li
        $('.container-fluid img').eq(stt).removeClass('active');
        $('.container-fluid ul li').eq(stt).removeClass('active');

        prev = --stt;  //-1
        if(prev == -1)
            prev = 4;

        //add class active of img & li
        $('.container-fluid img').eq(prev).addClass('active');
        $('.container-fluid li').eq(prev).addClass('active');
        startSlide();
    });

    //click next

    $('#next').on('click', function(){

        //stopSlide de khi click next no se khong auto chuyen den hinh ke tiep
        stopSlide();
        //get stt of img show
        var stt = $('. container-fluid img .active').attr('stt'); //4

        //remove class active of img & li
        $('.container-fluid img').eq(stt).removeClass('active');
        $('.container-fluid ul li').eq(stt).removeClass('active');

        next = ++stt; // 5
        if(next == 5)
            next = 0;

        //add class active of img & li index next
        $('.container-fluid img').eq(next).addClass('active');
        $('.container-fluid ul li').eq(next).addClass('active');
        startSlide();
    });


    // mouseover -> stopSlide & mouseout -> startSlide
    $('.container-fluid img').on('mouseover',stopSlide).on('mouseout', startSlide);
    startSlide();



    $('.container-fluid ul li').on('click', function(){
        stopSlide();
        var stt = $('.container-fluid img.active').attr('stt'); //4
        var index = $(this).attr('index');
        $('.container-fluid img').eq(stt).removeClass('active');
        $('.container-fluid li').eq(stt).removeClass('active');

        //add class active of img & li index next
        $('.container-fluid img').eq(index).addClass('active');
        $('.container-fluid ul li').eq(index).addClass('active');
        startSlide();
    });
});