// var txt= $('#technology p').text();
// if(txt.length > 100)
//     $('#technology p').text(txt.substring(0,200) + '...');

 var selector = '#product-items-name li';
    var url = window.location.href;
   
     $(selector).each(function(){
        if($(this).find('a').attr('href')===(url)){
          $(selector).removeClass('active');
          $(this).removeClass('active').addClass('active');
        }
     });
    
     
