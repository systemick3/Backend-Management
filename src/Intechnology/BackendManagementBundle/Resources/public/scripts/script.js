(function($){

  var changeMenu = function () {
    var a,
      li,
      plurals = {
        companies: 'company',
        deployments: 'deployment',
        users: 'user'
      },
      key;

    $('#sidebar ul li').each(function (index) {
      a = $(this).children('a');
      $(this).removeClass('active');
      a.removeClass('active');

      key = a.attr('href').substring(1);

      if (window.location.pathname.indexOf(a.attr('href')) > -1 || window.location.pathname.indexOf(plurals[key]) > -1) {
        li = $(this);
      }
    });

    li.addClass('active');
    li.children('a').addClass('active');
  };

  var init = function () {
    changeMenu();

    if (window.location.pathname === '/login') {
      $('#main-content').css('width', '100%');
    }
  };

  init();

})(jQuery);