//ドロワー発火
jQuery('.l-header-hamburger').on('click', function (e) {
  e.preventDefault();

  jQuery('.l-header-hamburger').toggleClass('is-active');
  jQuery('.l-drawer__content').toggleClass('is-active');
  // jQuery('.drawer-background').toggleClass('is-active');

  return false;
});
