/**
 * Function taking care of displaying and hiding the plugins and authors fieldsets when neccessary
 * Also initiates the autoGrow plugin 
 */
(function() {
  var ta = jQuery("#humans_template"),
      pl = jQuery("#h_plugins"),
      au = jQuery("#h_authors"),
      pl_hidden = false,
      au_hidden = false;

  // Check if %ACTIVE_PLUGINS% tempalte tag is used and show the sub-template settings      
  if (!ta.val().match(/%ACTIVE_PLUGINS%/)) {
    pl.hide();
    pl_hidden = true;
  }
  
  // Same but for %AUTHORS% 
  if (!ta.val().match(/%AUTHORS%/)) {
    au.hide();
    au_hidden = true;
  }
  
  // Do the same checks when the user types in the textarea field
  ta.keyup(function() {
    if (pl_hidden === false && !ta.val().match(/%ACTIVE_PLUGINS%/)) {
      pl.hide('fast');
      pl_hidden = true;
    } else if (pl_hidden === true && ta.val().match(/%ACTIVE_PLUGINS%/)) {
      pl.show('fast');
      pl_hidden = false;
    }
    
    if (au_hidden === false && !ta.val().match(/%AUTHORS%/)) {
      au.hide('fast');
      au_hidden = true;
    } else if (au_hidden === true && ta.val().match(/%AUTHORS%/)) {
      au.show('fast');
      au_hidden = false;
    }
  });
  
  // Allow the textarea to grow when the user types
  ta.autoGrow();    
})();