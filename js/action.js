$(document).ready(function() {


    
    $("#emailFavBtn").click(function(){
         
        var favorite = [];
        $.each($("input[name='userCheck']:checked"), function(){            
                favorite.push($(this).val());
            });     
        var pubs=[];
           $.each($("input[name='pubid']"), function(){            
                pubs.push($(this).val());
               console.log($(this).val());               
            });  
        console.log(pubs);
         $.ajax({
              type: 'POST',
              url: '/goc/index.php/menuController/email',
              data: { result : favorite,
                        pubs: pubs
                    }             
        }); 
        
        //location.reload();
          $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();     
        loadMyView('/goc/index.php/menuController/profile');
    });   
    
    
    $("#emailFavBtniPhone").click(function(){
         
        var favorite = [];
        $.each($("input[name='userCheckiPhone']:checked"), function(){            
                favorite.push($(this).val());
            });        
         $.ajax({
              type: 'POST',
              url: '/goc/index.php/menuController/email',
              data: { result : favorite }             
        }); 
        
       // location.reload();
          $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();     
         loadMyView('/goc/index.php/menuController/profile');
    });
    
     $("#piemenu").click(function(){
         
       var image =  $("image[class|=wheelnav-piemenu-title-selected]").attr("href");
       $.ajax({
              type: 'POST',
              url: '/goc/index.php/menuController/updateCharacter',
              data: { imgurl : image}             
        }); 
    });       
   
});