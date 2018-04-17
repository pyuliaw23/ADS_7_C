var options = [
   {selector: '.page-footer', offset: 1200, callback: function(el) {
     Materialize.fadeOutImage($(el));
   }}
 ];
 Materialize.scrollFire(options);
