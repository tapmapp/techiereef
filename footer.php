<script>
  jQuery(document).ready(function() {
    jQuery('#icon-menu').click(function(){
      openMenu();
    });

    jQuery('#icon-close').click(function(){
      closeMenu();
    });

  });
  
  function openMenu(){
    jQuery('#menu-grid').addClass('active');
      setTimeout(()=> {
        jQuery('#menu-grid').addClass('move');
      });
  }
  
  function closeMenu(){
    
    jQuery('#menu-grid').removeClass('move');

      setTimeout(
        ()=> {jQuery('#menu-grid').removeClass('active');

    }, 500);
  }

</script>
			
</body>
</html>