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