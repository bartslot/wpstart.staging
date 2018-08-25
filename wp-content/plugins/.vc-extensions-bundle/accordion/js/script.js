jQuery(document).ready(function($) {
    $('.cq-accordion').each(function() {
        var _this = $(this);
        $(this).find('li').each(function(index) {
          $(this).find('i').css('margin-top', ($(this).outerHeight()-9)*.5);
        });
    })
    $('.cq-accordion2').each(function() {
        var _this = $(this);
        var _titlebg = $(this).data('titlebg');
        var _titlecolor = $(this).data('titlecolor');
        var _titlehoverbg = $(this).data('titlehoverbg');
        var _titlehovercolor = $(this).data('titlehovercolor');

        $(this).find('.accordionTitle').each(function(index) {
            $(this).css('background-color', _titlebg).on('mouseover', function(event) {
                // $(this).css('background-color', _titlehoverbg);
                $(this).css({
                  'background-color': _titlehoverbg,
                  'color': _titlehovercolor
                });
            }).on('mouseleave', function(event) {
                // $(this).css('background-color', _titlebg);
                if(!$(this).hasClass('accordionTitleActive')){
                    $(this).css({
                      'background-color': _titlebg,
                      'color': _titlecolor
                    });
                }
            });
        });

        $(this).on('click', function(event) {
          var _title;
          if($(event.target).is('i')){
            _title = $(event.target).parent();
          }else{
            _title = $(event.target)
          }
          if(_title.hasClass('accordionTitle')){
            var _content = _title.parent().next();
            _title.toggleClass('accordionTitleActive');

            if(_content.hasClass('accordionItemCollapsed')) {
              if(_content.hasClass('cq-animateOut')){
                _content.removeClass('cq-animateOut');
              }
              _content.addClass('cq-animateIn');

            }else{
               _content.removeClass('cq-animateIn');
               _content.addClass('cq-animateOut');
            }
            _content.toggleClass('accordionItemCollapsed');
            event.preventDefault();
          }

        });


    })

});

