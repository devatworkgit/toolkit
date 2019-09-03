(function($){
  
  Drupal.behaviors.simplenews = {
    attach: function(context, settings) {
      
      $("#block-simplenewssubscription .form-email").attr("placeholder", "e-mail address");
      $('input').click(function () {
            $('input:not(:checked)').parent().removeClass("checked");
            $('input:checked').parent().addClass("checked");
        });
      $('input:checked').parent().addClass("checked");

        //add new line after ',' in banner title
        var str = $('#banner .wrapper .slick-slide .title').text();
        //alert(str);
        var line = str.replace(',', ',<br>');
        //$('#banner .wrapper .slick-slide').each(function() {
        //  $('#banner .wrapper .slick-slide .title').html(line);
        //}); 
        
    }
  }; 

 $('.watch-box').each(function(){
    var $url = $(this).find('.file-uri').text();
    $(this).find('.colored').css({
      'background-image': 'url(' + $url + ')',
      'background-size' : 'cover'
    });
  });
function onlyOneCheckBox(te) {
    var checkboxgroup = $('#edit-accordion-items').find("input");
    var limit = 3;
    for (var i = 0; i < checkboxgroup.length; i++) {
        checkboxgroup[i].onclick = function() {
            var checkedcount = 0;
                for (var i = 0; i < checkboxgroup.length; i++) {
                checkedcount += (checkboxgroup[i].checked) ? 1 : 0;
            }
            if (checkedcount > limit) {
              $(this).parent().removeClass("checked");
                alert("You can only select a maximum of " + limit + " checkboxes.");
                this.checked = false;
            }
        }
    }
}
$( document ).ready(function() {
  onlyOneCheckBox();
});
})(jQuery);