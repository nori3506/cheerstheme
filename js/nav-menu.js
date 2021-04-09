(function() {
    const fakeButton = document.querySelector('.data-menu-button');
    const menu = document.querySelector('.data-menu');
  
    const toggleMenuButton = document.createElement('button');
    toggleMenuButton.innerHTML = 'Menu';
    toggleMenuButton.setAttribute('aria-expanded', false);
    toggleMenuButton.setAttribute('aria-controls', 'menu');
    toggleMenuButton.classList.add('nav_toggle');
  
    fakeButton.parentNode.replaceChild(toggleMenuButton, fakeButton);
  
    toggleMenuButton.addEventListener('click', function() {
      let expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      menu.hidden = !menu.hidden;

    });
  
    menu.hidden = true;
  })()

  // desctop screen navigation
  function deleteNavIcon(minScreen) {
    // menu ul container
    const menu = document.querySelector('.data-menu');
    // button
    const toggleMenuButton = document.querySelector('.nav_toggle');
    let expanded = toggleMenuButton.getAttribute('aria-expanded') === 'true' || false;
    if (minScreen.matches) { // If media query matches
      // show the menu items
      // change the icon to "opened"
      toggleMenuButton.setAttribute('aria-expanded', true);
      if(menu.hidden) {
        menu.hidden = !menu.hidden;
      }
      // hide menu icon
      toggleMenuButton.style.display = "none";
      
    } else {
      toggleMenuButton.setAttribute('aria-expanded', false);
      menu.hidden = true;
      // show menu icon again
      toggleMenuButton.style.display = "block";
    }
  }
  
  var largeScreen = window.matchMedia("(min-width: 850px)")
  // if it's smaller thatn 700px, icon disappear and items show up
  deleteNavIcon(largeScreen) 
  largeScreen.addListener(deleteNavIcon) // Attach listener function on state changes


  