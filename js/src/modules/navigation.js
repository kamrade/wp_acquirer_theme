import $ from 'jquery';

export default class Nav {

  constructor(options) {
    this.$el      = $(options.selector);
    this.$button  = this.$el.find('.btn-nav-toggler');
    this.$overlay = this.$el.find('.site-nav-overlay');
    this.$button.on('click', this.toggleMenu.bind(this));
    this.$overlay.on('click', this.closeMenu.bind(this));
  }

  toggleMenu() {
    this.$el.toggleClass('active');
  }

  closeMenu() {
    this.$el.removeClass('active');
  }

}
