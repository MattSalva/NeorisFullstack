$(document).ready(function(){
    $("p").hover(function(){
        console.log("Hay alto hover amigos");
        $("p").toggle();
    });
});
