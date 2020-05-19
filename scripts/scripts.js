$(document).ready(function(){

    $('.open-btn').on("click", function(){
        let navState = $('.sidenav').data('state');

        if(navState == "closed"){
            $('.sidenav').css('width', '250px');
            $('.sidenav').data('state', 'open');
        }

        if(navState == "open"){
            $('.sidenav').css('width', '0');
            $('.sidenav').data('state', 'closed');
        }

    });

    $('.close-btn').on("click", function(){
        $('.sidenav').css('width', "0");
        $('.sidenav').data('state', 'closed');
    });

}); 