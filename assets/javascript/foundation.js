$('*[data-thumb]').each(function () {
    var dt = $(this).data('thumb');
    $(this).css('backgroundImage', 'url(' + dt + ')').addClass('bg-cover');
});
;jQuery('iframe[src*="youtube.com"]').wrap("<div class='flex-video widescreen'/>");
jQuery('iframe[src*="vimeo.com"]').wrap("<div class='flex-video widescreen vimeo'/>");
;//jQuery(document).foundation();
;// Joyride demo
$('#start-jr').on('click', function () {
  $(document).foundation('joyride', 'start');
});
;
;
jQuery(window).bind(' load resize orientationChange ', function () {
  var footer = $("#footer-container");
  var pos = footer.position();
  var height = $(window).height();
  height = height - pos.top;
  height = height - footer.height() - 1;

  function stickyFooter() {
    footer.css({
      'margin-top': height + 'px'
    });
  }

  if (height > 0) {
    stickyFooter();
  }
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC5qcyIsImZsZXgtdmlkZW8uanMiLCJpbml0LWZvdW5kYXRpb24uanMiLCJqb3lyaWRlLWRlbW8uanMiLCJvZmZDYW52YXMuanMiLCJzdGlja3lmb290ZXIuanMiXSwibmFtZXMiOlsiJCIsImVhY2giLCJkdCIsImRhdGEiLCJjc3MiLCJhZGRDbGFzcyIsImpRdWVyeSIsIndyYXAiLCJvbiIsImRvY3VtZW50IiwiZm91bmRhdGlvbiIsIndpbmRvdyIsImJpbmQiLCJmb290ZXIiLCJwb3MiLCJwb3NpdGlvbiIsImhlaWdodCIsInRvcCIsInN0aWNreUZvb3RlciJdLCJtYXBwaW5ncyI6IkFBQUFBLEVBQUUsZUFBRixFQUFtQkMsSUFBbkIsQ0FBd0IsWUFBWTtBQUNoQyxRQUFJQyxLQUFLRixFQUFFLElBQUYsRUFBUUcsSUFBUixDQUFhLE9BQWIsQ0FBVDtBQUNBSCxNQUFFLElBQUYsRUFBUUksR0FBUixDQUFZLGlCQUFaLEVBQThCLFNBQVFGLEVBQVIsR0FBWSxHQUExQyxFQUErQ0csUUFBL0MsQ0FBd0QsVUFBeEQ7QUFDSCxDQUhEO0NDQUFDLE9BQVEsNEJBQVIsRUFBc0NDLElBQXRDLENBQTJDLHNDQUEzQztBQUNBRCxPQUFRLDBCQUFSLEVBQW9DQyxJQUFwQyxDQUF5Qyw0Q0FBekM7Q0NEQTtFQ0FBO0FBQ0FQLEVBQUUsV0FBRixFQUFlUSxFQUFmLENBQWtCLE9BQWxCLEVBQTJCLFlBQVc7QUFDcENSLElBQUVTLFFBQUYsRUFBWUMsVUFBWixDQUF1QixTQUF2QixFQUFpQyxPQUFqQztBQUNELENBRkQ7Q0NEQTs7QUNDQUosT0FBT0ssTUFBUCxFQUFlQyxJQUFmLENBQW9CLGlDQUFwQixFQUF1RCxZQUFZO0FBQ2hFLE1BQUlDLFNBQVNiLEVBQUUsbUJBQUYsQ0FBYjtBQUNBLE1BQUljLE1BQU1ELE9BQU9FLFFBQVAsRUFBVjtBQUNBLE1BQUlDLFNBQVNoQixFQUFFVyxNQUFGLEVBQVVLLE1BQVYsRUFBYjtBQUNBQSxXQUFTQSxTQUFTRixJQUFJRyxHQUF0QjtBQUNBRCxXQUFTQSxTQUFTSCxPQUFPRyxNQUFQLEVBQVQsR0FBMEIsQ0FBbkM7O0FBRUEsV0FBU0UsWUFBVCxHQUF3QjtBQUN0QkwsV0FBT1QsR0FBUCxDQUFXO0FBQ1Asb0JBQWNZLFNBQVM7QUFEaEIsS0FBWDtBQUdEOztBQUVELE1BQUlBLFNBQVMsQ0FBYixFQUFnQjtBQUNkRTtBQUNEO0FBQ0gsQ0FoQkQiLCJmaWxlIjoiZm91bmRhdGlvbi5qcyIsInNvdXJjZXNDb250ZW50IjpbIiQoJypbZGF0YS10aHVtYl0nKS5lYWNoKGZ1bmN0aW9uICgpIHtcbiAgICB2YXIgZHQgPSAkKHRoaXMpLmRhdGEoJ3RodW1iJyk7XG4gICAgJCh0aGlzKS5jc3MoJ2JhY2tncm91bmRJbWFnZScsJ3VybCgnKyBkdCArJyknKS5hZGRDbGFzcygnYmctY292ZXInKTtcbn0pO1xuIiwialF1ZXJ5KCAnaWZyYW1lW3NyYyo9XCJ5b3V0dWJlLmNvbVwiXScpLndyYXAoXCI8ZGl2IGNsYXNzPSdmbGV4LXZpZGVvIHdpZGVzY3JlZW4nLz5cIik7XG5qUXVlcnkoICdpZnJhbWVbc3JjKj1cInZpbWVvLmNvbVwiXScpLndyYXAoXCI8ZGl2IGNsYXNzPSdmbGV4LXZpZGVvIHdpZGVzY3JlZW4gdmltZW8nLz5cIik7XG4iLCIvL2pRdWVyeShkb2N1bWVudCkuZm91bmRhdGlvbigpO1xuIiwiLy8gSm95cmlkZSBkZW1vXG4kKCcjc3RhcnQtanInKS5vbignY2xpY2snLCBmdW5jdGlvbigpIHtcbiAgJChkb2N1bWVudCkuZm91bmRhdGlvbignam95cmlkZScsJ3N0YXJ0Jyk7XG59KTsiLCIiLCJcbmpRdWVyeSh3aW5kb3cpLmJpbmQoJyBsb2FkIHJlc2l6ZSBvcmllbnRhdGlvbkNoYW5nZSAnLCBmdW5jdGlvbiAoKSB7XG4gICB2YXIgZm9vdGVyID0gJChcIiNmb290ZXItY29udGFpbmVyXCIpO1xuICAgdmFyIHBvcyA9IGZvb3Rlci5wb3NpdGlvbigpO1xuICAgdmFyIGhlaWdodCA9ICQod2luZG93KS5oZWlnaHQoKTtcbiAgIGhlaWdodCA9IGhlaWdodCAtIHBvcy50b3A7XG4gICBoZWlnaHQgPSBoZWlnaHQgLSBmb290ZXIuaGVpZ2h0KCkgLTE7XG5cbiAgIGZ1bmN0aW9uIHN0aWNreUZvb3RlcigpIHtcbiAgICAgZm9vdGVyLmNzcyh7XG4gICAgICAgICAnbWFyZ2luLXRvcCc6IGhlaWdodCArICdweCdcbiAgICAgfSk7XG4gICB9XG5cbiAgIGlmIChoZWlnaHQgPiAwKSB7XG4gICAgIHN0aWNreUZvb3RlcigpO1xuICAgfVxufSk7XG4iXX0=
