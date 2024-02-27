jQuery("#sidebar-nav > li").click(function(e) {
    e.preventDefault();
  
    jQuery(this).find('ul').slideToggle("slow");
  });